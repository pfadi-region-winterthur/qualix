<?php

namespace Tests\Feature\Admin\Bloecke;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\TestResponse;
use Illuminate\Validation\ValidationException;
use Tests\TestCaseWithKurs;

class CreateBlockTest extends TestCaseWithKurs {

    private $payload;

    public function setUp(): void {
        parent::setUp();

        $this->payload = ['full_block_number' => '1.1', 'blockname' => 'Block 1', 'datum' => '01.01.2019', 'ma_ids' => null];
    }

    public function test_shouldRequireLogin() {
        // given
        auth()->logout();

        // when
        $response = $this->post('/kurs/' . $this->kursId . '/admin/bloecke', $this->payload);

        // then
        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }

    public function test_shouldCreateAndDisplayBlock() {
        // given

        // when
        $response = $this->post('/kurs/' . $this->kursId . '/admin/bloecke', $this->payload);

        // then
        $response->assertStatus(302);
        $response->assertRedirect('/kurs/' . $this->kursId . '/admin/bloecke');
        /** @var TestResponse $response */
        $response = $response->followRedirects();
        $response->assertSee($this->payload['full_block_number']);
        $response->assertSee($this->payload['blockname']);
        $response->assertSee($this->payload['datum']);
    }

    public function test_shouldValidateNewBlockData_invalidFullBlockNumber() {
        // given
        $payload = $this->payload;
        $payload['full_block_number'] = 'abc';

        // when
        $response = $this->post('/kurs/' . $this->kursId . '/admin/bloecke', $payload);

        // then
        $this->assertInstanceOf(ValidationException::class, $response->exception);
    }

    public function test_shouldValidateNewBlockData_noBlockname() {
        // given
        $payload = $this->payload;
        unset($payload['blockname']);

        // when
        $response = $this->post('/kurs/' . $this->kursId . '/admin/bloecke', $payload);

        // then
        $this->assertInstanceOf(ValidationException::class, $response->exception);
    }

    public function test_shouldValidateNewBlockData_noDatum() {
        // given
        $payload = $this->payload;
        unset($payload['datum']);

        // when
        $response = $this->post('/kurs/' . $this->kursId . '/admin/bloecke', $payload);

        // then
        $this->assertInstanceOf(ValidationException::class, $response->exception);
    }

    public function test_shouldValidateNewBlockData_invalidDatum() {
        // given
        $payload = $this->payload;
        $payload['datum'] = 'abc';

        // when
        $response = $this->post('/kurs/' . $this->kursId . '/admin/bloecke', $payload);

        // then
        $this->assertInstanceOf(ValidationException::class, $response->exception);
    }

    public function test_shouldShowMessage_whenNoBloeckeInCourse() {
        // given

        // when
        $response = $this->get('/kurs/' . $this->kursId . '/admin/bloecke');

        // then
        $response->assertStatus(200);
        $response->assertSee('Bisher sind keine Blöcke erfasst.');
    }

    public function test_shouldNotShowMessage_whenSomeBlockInCourse() {
        // given
        $this->createBlock();

        // when
        $response = $this->get('/kurs/' . $this->kursId . '/admin/bloecke');

        // then
        $response->assertStatus(200);
        $response->assertDontSee('Bisher sind keine Blöcke erfasst.');
    }

    public function test_shouldShowTodayInForm_whenNoBlockHasYetBeenCreated() {
        // given

        // when
        $response = $this->get('/kurs/' . $this->kursId . '/admin/bloecke');

        // then
        $response->assertStatus(200);
        $response->assertSee(Carbon::today()->format('d.m.Y'));
    }

    public function test_shouldShowDateFromLastCreatedBlockInForm_whenBlockHasBeenCreated() {
        // given

        // when
        $this->post('/kurs/' . $this->kursId . '/admin/bloecke', $this->payload);
        $response = $this->get('/kurs/' . $this->kursId . '/admin/bloecke');

        // then
        $response->assertStatus(200);
        $response->assertDontSee(Carbon::today()->format('d.m.Y'));
        $this->assertRegExp('/<date-picker.*value="' . str_replace('.', '\.', $this->payload['datum']) . '"/s', $response->content());
    }
}
