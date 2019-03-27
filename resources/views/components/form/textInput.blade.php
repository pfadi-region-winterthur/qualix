<div class="form-group row{{ isset($required) && $required ? ' required' : ''}}">
    <label for="{{ $name }}" class="col-md-4 col-form-label text-md-right">{{__($label)}}</label>

    <div class="col-md-6">
        <input
            type="{{ $type ?? 'text' }}"
            id="{{ $name }}"
            name="{{ $name }}"
            class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}"
            value="{{ old($name) }}"
            {{ isset($required) && $required ? 'required' : '' }}
            {{ isset($autofocus) && $autofocus ? 'autofocus' : '' }}>

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first($name) }}</strong>
            </span>
        @endif
    </div>
</div>
