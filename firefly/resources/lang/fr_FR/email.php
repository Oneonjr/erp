<?php

/**
 * email.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // common items
    'greeting'                                   => 'Hello,',
    'closing'                                    => 'Bip bip,',
    'signature'                                  => 'Le Robot de Firefly III',
    'footer_ps'                                  => 'PS : Ce message a été envoyé car une requête de l\'adresse IP :ipAddress l\'a déclenché.',

    // admin test
    'admin_test_subject'                         => 'Un message de test de votre installation de Firefly III',
    'admin_test_body'                            => 'Ceci est un message de test de votre instance Firefly III. Il a été envoyé à :email.',
    'admin_test_message'                         => 'Ceci est un message de test de votre instance Firefly III sur le canal ":channel".',
    'admin_test_link'                            => 'Le lien suivant devrait pointer vers votre installation de Firefly III. Il devrait être correctement préfixé avec "http" ou "https". Sinon, veuillez définir votre variable d\'environnement `APP_URL` : [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Une invitation a été créée',
    'invitation_created_body'                    => 'L\'utilisateur admin ":email" a créé une invitation d\'utilisateur qui peut être utilisée par quiconque est derrière l\'adresse e-mail ":invitee". L\'invitation sera valide pendant 48 heures.',
    'invite_user_subject'                        => 'Vous avez été invité à créer un compte Firefly III.',
    'invitation_introduction'                    => 'Vous avez été invité à créer un compte Firefly III sur **:host**. Firefly III est un gestionnaire personnel et privé de finances personnelles. Tous les gamins du quartier l\'utilisent.',
    'invitation_invited_by'                      => 'Vous avez été invité par ":admin" et cette invitation a été envoyée à ":invitee". C\'est vous, non ?',
    'invitation_url'                             => 'L\'invitation est valide pendant 48 heures et peut être échangée en naviguant sur [Firefly III](:url). Profitez-en !',

    // new IP
    'login_from_new_ip'                          => 'Nouvelle connexion sur Firefly III',
    'slack_login_from_new_ip'                    => 'Nouvelle connexion à Firefly III depuis IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III a détecté une nouvelle connexion sur votre compte à partir d\'une adresse IP inconnue. Si vous ne vous êtes jamais connecté depuis l\'adresse IP ci-dessous, ou si ça fait plus de six mois, Firefly III vous avertira.',
    'new_ip_warning'                             => 'Si vous reconnaissez cette adresse IP ou la connexion, vous pouvez ignorer ce message. Si vous ne vous êtes pas connecté, si vous n\'avez aucune idée de quoi il s\'agit, vérifiez la sécurité de votre mot de passe, modifiez-la et déconnectez toutes les autres sessions. Pour cela, allez sur votre page de profil. Bien sûr, vous avez déjà activé l\'A2F, n\'est-ce pas ? Soyez prudent !',
    'ip_address'                                 => 'Adresse IP',
    'host_name'                                  => 'Hôte',
    'date_time'                                  => 'Date + heure',
    'user_agent'                                 => 'Navigateur',

    // access token created
    'access_token_created_subject'               => 'Un nouveau jeton d\'accès a été créé',
    'access_token_created_body'                  => 'Quelqu\'un (espérons vous) vient de créer un nouveau jeton d\'accès à l\'API Firefly III pour votre compte utilisateur.',
    'access_token_created_explanation'           => 'Avec ce jeton, cette personne peut accéder à **toutes** vos transactions financières via l\'API Firefly III.',
    'access_token_created_revoke'                => 'Si ce n\'était pas vous, veuillez révoquer ce jeton dès que possible à :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Un utilisateur inconnu a essayé de se connecter',
    'unknown_user_body'                          => 'Un utilisateur inconnu (`:ip`) a essayé de se connecter à Firefly III. L\'adresse e-mail qu\'il a utilisée était `:address`.',
    'unknown_user_message'                       => 'L\'adresse email qu\'il (`:ip`) a utilisée était `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III a détecté une tentative de connexion échouée',
    'failed_login_body'                          => 'Firefly III a détecté que quelqu\'un (vous ?) n\'a pas réussi à se connecter avec votre compte `:email`. Veuillez vérifier que c\'était vous.',
    'failed_login_message'                       => 'Une tentative de connexion échouée (`:ip`) sur votre compte Firefly III `:email` a été détectée.',
    'failed_login_warning'                       => 'Si vous reconnaissez cette adresse IP ou la tentative de connexion, vous pouvez ignorer ce message. Si vous n\'avez pas essayé de vous connecter, si vous n\'avez aucune idée de quoi il s\'agit, vérifiez la sécurité de votre mot de passe, modifiez-la et déconnectez toutes les autres sessions. Pour cela, allez sur votre page de profil. Bien sûr, vous avez déjà activé l\'A2F, n\'est-ce pas ? Soyez prudent !',

    // registered
    'registered_subject'                         => 'Bienvenue sur Firefly III !',
    'registered_subject_admin'                   => 'Un nouvel utilisateur s\'est inscrit',
    'admin_new_user_registered'                  => 'Un nouvel utilisateur s\'est inscrit. L\'utilisateur **:email** a reçu l\'ID utilisateur #:id.',
    'registered_welcome'                         => 'Bienvenue sur [Firefly III](:address). Votre inscription a été faite, et cet e-mail est là pour la confirmer. Yeah !',
    'registered_pw'                              => 'Si vous avez déjà oublié votre mot de passe, veuillez le réinitialiser en utilisant [l\'outil de réinitialisation du mot de passe](:address/password/reset).',
    'registered_help'                            => 'Il y a une icône d\'aide en haut à droite de chaque page. Si vous avez besoin d\'aide, cliquez dessus !',
    'registered_closing'                         => 'À bientôt !',
    'registered_firefly_iii_link'                => 'Firefly III :',
    'registered_pw_reset_link'                   => 'Réinitialisation du mot de passe :',
    'registered_doc_link'                        => 'Documentation :',

    // new version
    'new_version_email_subject'                  => 'Une nouvelle version de Firefly III est disponible',

    // email change
    'email_change_subject'                       => 'Votre adresse e-mail Firefly III a été modifiée',
    'email_change_body_to_new'                   => 'Vous ou quelqu\'un ayant accès à votre compte Firefly III avez changé votre adresse e-mail. Si vous ne vous attendiez pas à ce message, veuillez l\'ignorer et le supprimer.',
    'email_change_body_to_old'                   => 'Vous ou quelqu\'un ayant accès à votre compte Firefly III avez changé votre adresse e-mail. Si vous ne vous attendiez pas à ce que cela se produise, vous **devez** suivre le lien d\'annulation ci-dessous pour protéger votre compte !',
    'email_change_ignore'                        => 'Si vous avez initié ce changement, vous pouvez ignorer ce message en toute sécurité.',
    'email_change_old'                           => 'L\'ancienne adresse e-mail était : :email',
    'email_change_new'                           => 'La nouvelle adresse email est : :email',
    'email_change_instructions'                  => 'Vous ne pouvez pas utiliser Firefly III tant que vous ne confirmez pas ce changement. Veuillez suivre le lien ci-dessous pour le faire.',
    'email_change_undo_link'                     => 'Pour annuler ce changement, suivez ce lien :',

    // OAuth token created
    'oauth_created_subject'                      => 'Un nouveau client OAuth a été créé',
    'oauth_created_body'                         => 'Quelqu\'un (espérons vous) vient de créer un nouveau client OAuth API Firefly III pour votre compte utilisateur. Il se nomme ":name" et a pour URL de callback `:url`.',
    'oauth_created_explanation'                  => 'Avec ce client, cette personne peut accéder à **toutes** vos transactions financières via l\'API Firefly III.',
    'oauth_created_undo'                         => 'Si ce n\'était pas vous, veuillez révoquer ce jeton dès que possible à :url',

    // reset password
    'reset_pw_subject'                           => 'Votre demande de réinitialisation de mot de passe',
    'reset_pw_message'                           => 'Vous avez reçu les instructions de réinitialisation du mot de passe dans votre e-mail. Si c\'était vous, veuillez suivre les instructions.',
    'reset_pw_instructions'                      => 'Quelqu\'un a essayé de réinitialiser votre mot de passe. Si c\'était vous, veuillez suivre le lien ci-dessous pour le faire.',
    'reset_pw_warning'                           => '**VEUILLEZ VÉRIFIER** que le lien va vers le bon site Firefly III !',

    // error
    'error_subject'                              => 'Une erreur s\'est produite dans Firefly III',
    'error_intro'                                => 'Firefly III v:version a rencontré une erreur : <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'L\'erreur était de type ":class".',
    'error_timestamp'                            => 'L\'erreur s\'est produite le/à: :time.',
    'error_location'                             => 'Cette erreur est survenue dans le fichier "<span style="font-family: monospace;">:file</span>" à la ligne :line avec le code :code.',
    'error_user'                                 => 'L\'erreur a été rencontrée par l\'utilisateur n°:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Il n\'y avait aucun utilisateur connecté pour cette erreur ou aucun utilisateur n\'a été détecté.',
    'error_ip'                                   => 'L\'adresse IP liée à cette erreur est : :ip',
    'error_url'                                  => 'L\'URL est : :url',
    'error_user_agent'                           => 'User agent : :userAgent',
    'error_stacktrace'                           => 'La stacktrace complète se trouve plus bas. Si vous pensez qu\'il s\'agit d\'un bogue dans Firefly III, vous pouvez transmettre ce message à <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a> (en anglais). Cela peut aider à corriger le bogue que vous venez de rencontrer.',
    'error_github_html'                          => 'Si vous le préférez, vous pouvez également ouvrir un nouveau ticket sur <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a> (en anglais).',
    'error_github_text'                          => 'Si vous le préférez, vous pouvez également ouvrir un nouveau ticket sur https://github.com/firefly-ii/firefly-iii/issues (en anglais).',
    'error_stacktrace_below'                     => 'La stacktrace complète se trouve ci-dessous :',
    'error_headers'                              => 'Les en-têtes suivants peuvent également être pertinents :',
    'error_post'                                 => 'Ceci a été soumis par l\'utilisateur :',

    // report new journals
    'new_journals_subject'                       => 'Firefly III a créé une nouvelle opération|Firefly III a créé :count nouvelles opérations',
    'new_journals_header'                        => 'Firefly III a créé une opération pour vous. Vous pouvez la trouver dans votre installation de Firefly III :|Firefly III a créé :count opérations pour vous. Vous pouvez les trouver dans votre installation de Firefly III :',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'Vous avez :count abonnements en retard de paiement',
    'subscriptions_overdue_subject_single'       => 'Vous avez un abonnement en retard de paiement',
    'subscriptions_overdue_warning_intro_single' => 'Vous avez un abonnement en retard de paiement. À la(aux) date(s) suivante(s) un paiement était attendu, mais il n\'est pas encore arrivé.',
    'subscriptions_overdue_warning_intro_multi'  => 'Vous avez :count abonnement(s) en retard de paiement. À la(aux) date(s) suivante(s) un paiement était attendu, mais il n\'est pas encore arrivé.',
    'subscriptions_overdue_please_action_single' => 'Peut-être n\'avez-vous tout simplement pas lié une opération à cet abonnement. Dans ce cas, veuillez le faire. Vous ne recevrez PAS un autre avertissement concernant cet abonnement en retard. Un nouvel avertissement sera envoyé pour la PROCHAINE échéance.',
    'subscriptions_overdue_please_action_multi'  => 'Peut-être n\'avez-vous tout simplement pas lié une opération à ces abonnements. Dans ce cas, veuillez le faire. Vous ne recevrez PAS un autre avertissement concernant ces abonnements en retard. Un nouvel avertissement sera envoyé pour les PROCHAINES échéances.',
    'subscriptions_overdue_outro'                => 'Si vous pensez que ce message est erroné, veuillez contacter le développeur Firefly III. Merci d\'utiliser Firefly III.',
    // bill warning
    'bill_warning_subject_end_date'              => 'Votre abonnement «:name» prendra fin dans :diff jours',
    'bill_warning_subject_now_end_date'          => 'Votre abonnement «:name» se terminera AUJOURD\'HUI',
    'bill_warning_subject_extension_date'        => 'Votre abonnement «:name» doit être prolongé ou annulé dans :diff jours',
    'bill_warning_subject_now_extension_date'    => 'Votre abonnement «:name» doit être prolongé ou annulé AUJOURD\'HUI',
    'bill_warning_end_date'                      => 'Votre abonnement **":name"** prendra fin le :date, soit dans environ **:diff jours**.',
    'bill_warning_extension_date'                => 'Votre abonnement **":name"** doit être prolongé ou annulé le :date, soit dans environ **:diff jours**.',
    'bill_warning_end_date_zero'                 => 'Votre abonnement **":name"** doit se terminer le :date, soit **AUJOURD\'HUI !**',
    'bill_warning_extension_date_zero'           => 'Votre abonnement **":name"** doit être prolongé ou annulé le :date, soit **AUJOURD\'HUI !**',
    'bill_warning_please_action'                 => 'Merci de prendre les mesures appropriées.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'Vous avez activé l\'authentification multi-facteurs',
    'enabled_mfa_slack'                          => 'Vous (:email) avez activé l\'authentification multi-facteurs. C\'est incorrect ? Vérifiez vos paramètres !',
    'have_enabled_mfa'                           => 'Vous avez activé l\'authentification multi-facteurs sur votre compte Firefly III ":email". Cela signifie que vous devrez utiliser une application d\'authentification pour vous connecter à partir de maintenant.',
    'enabled_mfa_warning'                        => 'Si vous n\'êtes pas à l\'origine de cette activation, veuillez contacter votre administrateur immédiatement ou consulter la documentation de Firefly III.',

    'disabled_mfa_subject'                       => 'Vous avez désactivé l\'authentification multi-facteurs !',
    'disabled_mfa_slack'                         => 'Vous (:email) avez désactivé l\'authentification multi-facteurs. C\'est incorrect ? Vérifiez vos paramètres !',
    'have_disabled_mfa'                          => 'Vous avez désactivé l\'authentification multi-facteurs sur votre compte Firefly III ":email".',
    'disabled_mfa_warning'                       => 'Si vous n\'êtes pas à l\'origine de cette désactivation, veuillez contacter votre administrateur immédiatement ou consulter la documentation de Firefly III.',

    'new_backup_codes_subject'                   => 'Vous avez généré de nouveaux codes de secours',
    'new_backup_codes_slack'                     => 'Vous (:email) avez généré de nouveaux codes de secours. Ceux-ci peuvent être utilisés pour se connecter à Firefly III. C\'est incorrect ? Vérifiez vos paramètres !',
    'new_backup_codes_intro'                     => 'Vous (:email) avez généré de nouveaux codes de secours. Ceux-ci peuvent être utilisés pour vous connecter à Firefly III si vous perdez l\'accès à votre application d\'authentification.',
    'new_backup_codes_warning'                   => 'Veuillez stocker ces codes dans un endroit sûr. Si vous les perdez, vous ne pourrez pas vous connecter à Firefly III. Si vous ne l\'avez pas fait, veuillez contacter votre administrateur immédiatement ou consulter la documentation de Firefly III.',

    'used_backup_code_subject'                   => 'Vous avez utilisé un code de secours pour vous connecter',
    'used_backup_code_slack'                     => 'Vous (:email) avez utilisé un code de secours pour vous connecter',

    'used_backup_code_intro'                     => 'Vous (:email) avez utilisé une code de secours pour vous connecter à Firefly III. Vous avez maintenant un code de secours de moins pour vous connecter. Veuillez le retirer de votre liste.',
    'used_backup_code_warning'                   => 'Si vous n\'êtes pas à l\'origine de cette action, veuillez contacter votre administrateur immédiatement ou consulter la documentation de Firefly III.',

    // few left:
    'mfa_few_backups_left_subject'               => 'Il vous reste :count code(s) de secours !',
    'mfa_few_backups_left_slack'                 => 'Il (:email) vous reste :count code(s) de secours !',
    'few_backup_codes_intro'                     => 'Vous (:email) avez utilisé la plupart de vos codes de secours, il ne vous en reste plus que :count. Veuillez en générer des nouveaux dès que possible.',
    'few_backup_codes_warning'                   => 'Sans codes de secours, vous ne pouvez pas récupérer votre connexion MFA si vous perdez l\'accès à votre générateur de code.',

    // NO left:
    'mfa_no_backups_left_subject'                => 'Il ne vous reste plus AUCUN code de secours !',
    'mfa_no_backups_left_slack'                  => 'Vous (:email) n\'avez plus AUCUN code de secours restant !',
    'no_backup_codes_intro'                      => 'Vous (:email) avez utilisé TOUS vos codes de secours. Veuillez en générer des nouveaux dès que possible.',
    'no_backup_codes_warning'                    => 'Sans codes de secours, vous ne pouvez pas récupérer votre connexion MFA si vous perdez l\'accès à votre générateur de code.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => 'Vous avez essayé d\'utiliser l\'authentification multi-facteurs :count fois sans succès !',
    'mfa_many_failed_slack'                      => 'Vous (:email) avez essayé d\'utiliser l\'authentification multi-facteurs :count fois sans succès ! C\'est incorrect ? Vérifiez vos paramètres !',
    'mfa_many_failed_attempts_intro'             => 'Vous (:email) avez essayé :count fois d\'utiliser un code d\'authentification multi-facteurs, mais ces tentatives de connexion ont échoué. Êtes-vous sûr d\'utiliser le bon code MFA ? Êtes-vous sûr que l\'heure sur le serveur est correcte ?',
    'mfa_many_failed_attempts_warning'           => 'Si vous n\'êtes pas à l\'origine de cette action, veuillez contacter votre administrateur immédiatement ou consulter la documentation de Firefly III.',
];
