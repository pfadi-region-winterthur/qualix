<?php
return array(
    "errors" => array(
        "form_data_restored_please_submit_again" => "Tes données saisies ont étés restaurées. N'oublie pas a sauvegarder!",
        "session_expired_try_again" => "Oups, tu n'es plus inscrit. Merci de t'inscrire encore une fois, tes données saisies seront restaurées.",
    ),
	"footer" => array(
		"slogan" => "Qualix. quoi reluques-tu?",
	),
	"global" => array(
		"add" => "Ajouter",
		"add_observation" => "Saisir une observation",
		"close" => "Fermer",
		"delete" => "Supprimer",
		"edit" => "Modifier",
		"negative" => "Négatif",
		"neutral" => "Neutre",
		"no" => "Non",
		"no_options" => "Aucune entrée trouvée",
		"or" => "ou",
		"page_title" => "Qualix",
		"positive" => "Positif",
		"really_delete" => "Réellement supprimer?",
		"save" => "Sauvegarder",
		"total" => "Total",
		"yes" => "Oui",
	),
	"header" => array(
		"archived" => "Archivé",
		"course_admin" => "Administration",
		"language_switch" => "Changer de langue. Traductions via phrase.com",
		"qualix" => "Qualix",
		"welcome" => "Bienvenue, :user",
	),
	"mails" => array(
		"invitation" => array(
			"accept" => "Clique :here pour accepter l'invitation.",
			"greeting" => "Meilleures salutations, l'équipe Qualix",
			"here" => "ici",
			"subject" => "Qualix : invitation à \":courseName\"",
			"you_have_been_invited" => ":inviterName t'a invité sur Qualix dans le cours \":courseName\".",
		),
	),
	"models" => array(
		"block" => array(
			"block_date" => "Date",
			"full_block_number" => "Numéro de point de cours",
			"name" => "Nom du point de cours",
			"num_observations" => "Nombre d'observations",
			"requirements" => "Exigences minimales",
		),
		"category" => array(
			"name" => "Titre",
			"num_observations" => "Nombre d'observations",
		),
		"course" => array(
			"course_number" => "Numéro de cours",
			"name" => "Nom du cours",
		),
		"invitation" => array(
			"email" => "E-mail",
		),
		"observation" => array(
			"block" => "Point de cours",
			"categories" => "Catégories",
			"content" => "Observation",
			"impression" => "Impression",
			"participant" => "Participant-e-s",
			"requirements" => "Exigences minimales",
			"user" => "Observateur-trice",
		),
		"participant" => array(
			"group" => "Groupe",
			"image" => "Image",
			"scout_name" => "Nom",
		),
		"requirement" => array(
			"content" => "Exigence",
			"mandatory" => "Éliminatoire",
			"num_observations" => "Nombre d'observations",
		),
		"user" => array(
			"email" => "E-mail",
			"group" => "Groupe",
			"image" => "Image",
			"name" => "Nom",
		),
	),
	"views" => array(
		"admin" => array(
			"blocks" => array(
				"are_blocks_required" => array(
					"answer" => "Oui, chaque observation correspond à précisément un point de cours. De ce fait, tu ne peux utiliser Qualix que lorsque tu as créé les points de cours dans le cours. Si tu souhaites faires des observations en dehors des points de cours, nous te recommandons de créer un ou plusieurs points de cours \"divers\".",
					"question" => "Dois-je créer des points de cours pour mon cours?",
				),
				"create_success" => "Le point de cours \":name\" a été créé avec succès.",
				"delete_success" => "Le point de cours \":name\" a été supprimé avec succès.",
				"edit" => "Modifier le point de cours",
				"edit_success" => "Le point de cours \":name\" a été sauvegardé avec succès.",
				"existing" => "Points de cours :courseName",
				"menu_name" => "Points de cours",
				"new" => "Nouveau point de cours",
				"no_blocks" => "Actuellement, aucun point de cours n'a été créé.",
				"observations_on_block" => "{0}Il n'y a pas d'observation liée.|{1} Une observation qui sera également supprimée est liée.|[2,*]:count observations qui seront également supprimées sont liées.",
				"really_delete" => "Souhaites-tu réellement supprimer le point de cours \":name\"",
				"what_are_blocks" => array(
					"answer" => "Les points de cours sont des périodes de temps dans le programme général. On pourrait également les appeler leçons ou unités de programme. Tu peux saisir quelles exigences minimales doivent être observées de manière la plus impérative dans un point de cours (par exemple une exigence minimale sur les réflexions de sécurité dans un point de cours sur le concept de sécurité). Lors de la saisie d'observations, il est toujours possible de les changer.",
					"question" => "Que sont des points de cours?",
				),
			),
			"categories" => array(
				"are_categories_required" => array(
					"answer" => "Non, les catégories sont complétement optionnelles, dans le cas où vous en auriez pas besoin avec ton équipe de cours.",
					"question" => "Dois-je créer des catégories pour mon cours?",
				),
				"create_success" => "La catégorie \":name\" a été créée avec succès.",
				"delete_success" => "La catégorie \":name\" a été créée avec succès.",
				"edit" => "Modifier la catégorie",
				"edit_success" => "La catégorie \":name\" a été sauvegardée avec succès.",
				"existing" => "Catégories :courseName",
				"menu_name" => "Catégories",
				"new" => "Nouvelle catégorie",
				"no_categories" => "Actuellement, aucune catégorie n'a été créée.",
				"observations_on_category" => "{0}Aucune observation liée.|{1} Une observation est liée, mais elle ne sera pas supprimée.|[2,*]:count observations sont liées, mais elles ne seront pas supprimées.",
				"really_delete" => "Souhaites-tu réellement supprimer la catégorie \":name\"?",
				"what_are_categories" => array(
					"answer" => "Les catégories peuvent être utilisées de manière différente. Il est possible d'attribuer une, plusieurs ou aucune catégorie à une observation. On peut par exemple les utiliser pour le classement dans différents passages d'un formulaire de qualité (quand les extraits ne correspondent pas de toute façon aux exigences minimales). On peut aussi s'en servir pour marquer si une observation a déjà été abordée dans l'évaluation intermédiaire. Ou alors, il est possible de faire toute autre utilisation qui te viendrait à l'esprit. Une fois cela fait, tu peux filter la liste d'observation d'un-e participant-e selon des catégories.",
					"question" => "Que sont des catégories?",
				),
			),
			"course_settings" => array(
				"archive" => "Archiver le cours...",
				"archive_confirm" => "Archiver définitivement",
				"archive_description" => "Cette action va complétement et durablement supprimer tou-te-s les participant-e-s au cours et les observations. Cette action ne peut pas être annulée. Les points de cours, les exigences minimales, les catégories et les membres de l'équipe resteront enregistrés pour une consultation ultérieure.",
				"archive_or_delete" => "Archiver ou supprimer le cours",
				"archive_success" => "Le cours \":name\" a été archivé.",
				"archive_vs_delete" => array(
					"answer" => "Lorsque tu archives un cours, toutes les données personnelles des participant-e-s (participant-e-s, images, observations) seront durablement supprimées. Ainsi, tu peux contourner le problème de la protection des données mais tout de même conserver les exigences minimales ainsi que les points de cours pour les futurs cours. Par contre, si tu supprimes complétement le cours, tout ce qui y a trait sera irrémédiablement supprimé.",
					"question" => "Quelle est la différence?",
				),
				"delete" => "Supprimer complétement le cours...",
				"delete_confirm" => "Supprimer définitivement",
				"delete_description" => "Cette action va complétement et durablement supprimer le cours, y compris les points de cours, les participant-e-s, les exigences minimales, les catégories et les observations. Cette action ne peut pas être annulée.",
				"delete_success" => "Le cours \":name\" et toutes les données s'y rattachant ont été supprimés.",
				"edit" => "Réglages de cours :name",
				"edit_success" => "Détails de cours sauvegardés avec succès.",
				"is_archived" => ":name est archivé. Cela signifie que toutes les données personnelles des participant-e-s ont été supprimées.",
				"menu_name" => "Suspension de cours",
				"really_archive" => "Souhaitez-vous réellement archiver le cours \":name\"?",
				"really_delete" => "Souhaites-tu réellement supprimer \":name\"?",
			),
			"equipe" => array(
				"cannot_delete_last_leiter" => "Au moins un membre de l'équipe doit rester dans le cours.",
				"delete_invitation_success" => "L'invitation pour :email a été supprimée avec succès.",
				"delete_success" => "Rôle de responsable retiré avec succès.",
				"existing" => "Équipe :courseName",
				"existing_invitations" => "Invitations",
				"invitation_email_sent" => "Nous avons envoyé une invitation à :email.",
				"invite" => "Inviter",
				"menu_name" => "Équipe",
				"new_invitation" => "Inviter un-e membre de l'équipe",
				"no_invitations" => "Actuellement aucune invitation n'est ouverte.",
				"really_delete" => "Souhaites-tu réellement supprimer :name de l'équipe de cours?",
				"really_delete_invitation" => "Souhaites-tu réellement mettre de côté l'invitation pour :email?",
			),
			"new_course" => array(
				"create" => "Ouvrir le cours",
				"create_success" => "Le cours \":name\" a été créé avec succès.",
				"menu_name" => "Nouveau cours",
				"title" => "Créer un nouveau cours",
			),
			"participants" => array(
				"add_success" => "Participant-e \":name\" a été saisi-e avec succès.",
				"edit" => "Modifier participant-e-s",
				"edit_success" => "Participant-e \":name\" a été saisi-e avec succès.",
				"existing" => "Participant-e-s :courseName",
				"menu_name" => "Participants",
				"new" => "Nouveaux/nouvelles participant-e-s",
				"no_participants" => "Pour l'instant, aucun-e participant-e saisi-e",
				"observations_on_participant" => "{0}Aucune observation n'est liée.|{1}Une observation qui sera également supprimée est liée.|[2,*]:count observations qui seront également supprimées sont liées.",
				"really_remove" => "Souhaites-tu réellement supprimer :name du cours?",
				"remove_success" => "Le/la participant-e \":name\" a été supprimée du cours avec succès.",
			),
			"requirements" => array(
				"are_requirements_required" => array(
					"answer" => "Il est très important de définir des exigences minimales avec l'équipe de cours avant le début du cours afin que les participant-e-s puissent être évalués sur le même schéma et qu'ainsi des décisions pendant le cours puissent être prises plus facilement. Mais si tu ne souhaites pas les réaliser dans Qualix, tu peux également rédiger des observations sans exigences minimales.",
					"question" => "Dois-je saisir des exigences minimales pour mon cours?",
				),
				"create_success" => "L'exigence minimale a été créée avec succès.",
				"delete_success" => "L'exigence minimale a été supprimée avec succès.",
				"edit" => "Modifier l'exigence minimale",
				"edit_success" => "L'exigence minimale a été sauvegardée avec succès.",
				"existing" => "Exigences minimales :courseName",
				"menu_name" => "Exigences minimales",
				"new" => "Nouvelle exigence minimale",
				"no_requirements" => "Pour l'instant, aucune exigence minimale n'est rédigée.",
				"observations_on_requirement" => "{0}Aucune observation liée.|{1}Une observation est liée, mais elle ne sera pas supprimée.|[2,*]:count observations sont liées, mais elles ne seront pas supprimées.",
				"really_delete" => "Souhaites tu réellement supprimer cette exigence minimale?",
				"what_are_requirements" => array(
					"answer" => "Les exigences minimales sont des conditions et critères clairs que tou-te-s les participant-e-s doivent remplir durant le cours. C'est selon les exigences minimales que l'on évalue qui a réussi le cours et qui a échoué. Tu peux marquer comme critères éliminatoires si tu veux, mais cela n'a actuellement aucune influence dans Qualix même (autre qu'une coloration différente).",
					"question" => "Quelles sont les exigences minimales?",
				),
			),
		),
		"blocks" => array(
			"here" => "ici",
			"menu_name" => "P.d.c.",
			"no_blocks" => "Actuellement, aucun point de cours n'est créé. Merci de les créer :here.",
			"title" => "Créer une observation dans le point de cours",
		),
		"crib" => array(
			"here" => "ici",
			"mandatory_requirements" => "Éliminatoire",
			"menu_name" => "Rappel",
			"non_mandatory_requirements" => "Non-éliminatoire",
			"no_blocks" => "Actuellement, aucun point de cours n'est créé. Merci d'en créer un et de le lier :here à des exigences minimales.",
			"see_only_empty_blocks" => array(
				"answer" => "Jusqu'à présent, aucun point de cours n'est relié à des exigences minimales. Merci de relier les points de cours :here aux exigences minimales.",
				"question" => "Est-ce que tu vois uniquement des points de cours vides sans exigences minimales?",
			),
			"title" => "Quelles exigences minimales peuvent être observées dans quels points de cours",
		),
		"invitation" => array(
			"accept_invitation" => "Oui, accepter l'invitation",
			"accept_success" => "Invitation acceptée. Tu es maintenant dans l'équipe du cours \":courseName\".",
			"already_in_equipe" => "Tu es déjà dans l'équipe de :courseName. Tu ne peux pas accepter cette invitation.",
			"decline_invitation" => "Non, cette invitation ne m'est pas destinée",
			"error" => "L'invitation n'a pas pu être acceptée.",
			"is_email_yours" => "Est-ce ton adresse e-mail :email?",
			"title" => "Invitation à :courseName",
		),
		"login" => array(
			"midata" => array(
				"error_please_retry" => "Quelque chose n'a pas marché. Essaye encore une fois.",
				"error_retry_later" => "Malheureusement, cela ne fonctionne actuellement pas. Essaye à nouveau plus tard ou enregistre-toi avec un compte classique.",
				"user_has_denied_access" => "Accès refusé sur MiData.",
				"use_normal_credentials" => "Merci de t'inscrire comme d'habitude avec ton nom d'utilisateur et ton mot de passe.",
			),
			"via_midata" => "S'enregistrer via MiData MSdS",
		),
		"observations" => array(
			"add_success" => "{1}Observation saisie. Merci!|[2,*]Observations saisies. Merci!",
			"back_to_participant" => "Revenir à :name",
			"edit" => "Modifier l'observation",
			"edit_success" => "Observation actualisée",
			"new" => "Créer une observation",
		),
		"overview" => array(
			"here" => "ici",
			"menu_name" => "Vue d'ensemble",
			"no_participants" => "Actuellement, aucun-e participant-e n'est saisi-e. Merci de les saisir :here.",
			"title" => "Vue d'ensemble des observations",
		),
		"participants" => array(
			"here" => "ici",
			"menu_name" => "Participants",
			"no_participants" => "Actuellement, aucun-e participant-e saisi-e. Merci de les saisir :here.",
			"title" => "Saisir des observations pour des participant-e-s",
		),
		"participant_details" => array(
			"delete_observation_success" => "Observation supprimée.",
			"existing_observations" => "Observations",
			"filter" => "Filtre",
			"filter_by_category" => "Catégorie",
			"filter_by_requirement" => "Exigence minimale",
			"no_observations" => "Aucune observation trouvée.",
			"num_observations" => "{0}Actuellement aucune observation|{1}Seulement une observation. Il y en a plus!|[2,*]:count observations, dont :positive avec une impression positive, :neutral avec une impression neutre et :negative avec une impression négative.",
			"observations_without_category" => "Observations sans catégorie",
			"observations_without_requirement" => "Observations sans exigence minimale",
			"really_delete_observation" => "Souhaites-tu réellement supprimer ces observations?",
			"title" => "Détails des participant-e-s",
		),
		"register" => array(
			"via_midata" => "S'inscrire via MiData MSdS",
		),
		"user_settings" => array(
			"edit" => "Modifier mon profil",
			"edit_success" => "Les détails personnels ont été sauvegardés avec succès.",
		),
		"welcome" => array(
			"no_courses" => "Actuellement, tu n'es inscrit-e à aucun cours. Fais-toi inviter dans un cours ou crées-en un nouveau toi-même.",
			"text" => "Qualix a pour objectif de t'aider à reduire la paperasse et à garder une vision d'ensemble des observations. Bien du plaisir à observer!",
			"title" => "Bienvenue sur Qualix",
		),
	),
);