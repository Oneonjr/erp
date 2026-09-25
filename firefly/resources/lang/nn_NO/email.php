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
    'greeting'                                   => 'Hei der,',
    'closing'                                    => 'Biip Boop,',
    'signature'                                  => 'Firefly III epost roboten',
    'footer_ps'                                  => 'PS: Denne meldinga vart utløyst av eit spørsmål frå IP-adressa :ipAddress.',

    // admin test
    'admin_test_subject'                         => 'Ei testmelding frå Firefly III-installasjonen din',
    'admin_test_body'                            => 'Dette er ei testmelding frå Firefly III-installasjonen din. Meldinga vart sendt til :email.',
    'admin_test_message'                         => 'This is a test message from your Firefly III instance over channel ":channel".',
    'admin_test_link'                            => 'The following link should point to your Firefly III installation. It should be correctly adorned with "http" or "https". If not, please set your `APP_URL` environment variable: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Ein invitasjon har vorte oppretta',
    'invitation_created_body'                    => 'Admin brukar ":email" oppretta ein brukarinvitasjon til ":invitee. Invitasjonen vil vera gyldig i 48 timer.',
    'invite_user_subject'                        => 'Du har vorte invitert til å laga ein Firefly III-konto.',
    'invitation_introduction'                    => 'Du har vorte invitert til å laga ein Firefly III konto på **:host**. Firefly III er ein personleg økonomiverkty. Alle dei kule brukar han.',
    'invitation_invited_by'                      => 'Du har vorte invitert av ":admin" og denne invitasjonen vart sendt til ":invitee. Det er deg, ikkje sant?',
    'invitation_url'                             => 'Invitasjonen er gyldig i 48 timer og kan løysast inn ved å gå til [Firefly III](:url). Kos deg!',

    // new IP
    'login_from_new_ip'                          => 'Ny pålogging på Firefly III',
    'slack_login_from_new_ip'                    => 'Ny Firefly III innlogging frå IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III oppdaget ein ny pålogging på kontoen frå ein ukjent IP-adresse. Om du aldri har logget inn frå IP-adressa under, eller det har vært meir enn eit halvt år sida, vil Firefly III advare deg.',
    'new_ip_warning'                             => 'Om du gjenkjenner denne IP-adressa eller påloggingen, kan du ignorere denne meldinga. Om du ikkje har logget inn, så har du ikkje peiling på kva dette gjelder, bekreft passordsikkerhet, endra det, og logg ut alle økter. For å gjera dette, gå til profilsida. Selvsagt har du 2FA aktivert allereie, ikkje sant? Vær trygg!',
    'ip_address'                                 => 'IP-adresse',
    'host_name'                                  => 'Vert',
    'date_time'                                  => 'Dato + klokkeslett',
    'user_agent'                                 => 'Browser',

    // access token created
    'access_token_created_subject'               => 'Ein ny tilgangstoken vart opprettet',
    'access_token_created_body'                  => 'Nokon (forhåpentligvis du) har akkurat oppretta ein ny Firefly III API Access Token for brukarkontoen din.',
    'access_token_created_explanation'           => 'Med denne token, kan dei få tilgang til **alle** av dine finansielle poster gjennom Firefly III API.',
    'access_token_created_revoke'                => 'Om det her ikkje var deg, ver venleg å fjern dette tokenet så snart som mogleg på :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'An unknown user tried to log in',
    'unknown_user_body'                          => 'An unknown user (`:ip`) tried to log in to Firefly III. The email address they used was `:address`.',
    'unknown_user_message'                       => 'The email address they (`:ip`) used was `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III detected a failed login attempt',
    'failed_login_body'                          => 'Firefly III detected that somebody (you?) failed to login with your account `:email`. Please verify that this was you.',
    'failed_login_message'                       => 'A failed login attempt (`:ip`) on your Firefly III account `:email` was detected.',
    'failed_login_warning'                       => 'If you recognize this IP address or the login attempt, you can ignore this message. If you didn\'t try to login, of if you have no idea what this is about, verify your password security, change it, and log out all other sessions. To do this, go to your profile page. Of course you have 2FA enabled already, right? Stay safe!',

    // registered
    'registered_subject'                         => 'Velkomen til Firefly III!',
    'registered_subject_admin'                   => 'Ein ny brukar har registrert seg',
    'admin_new_user_registered'                  => 'Ein ny brukar har registrert seg. Brukar **:email har fått ID #:id.',
    'registered_welcome'                         => 'Velkomen til [Firefly III](:address). Din registrering er fullført, og denne e-posten er her for å bekrefte det. Kanon!',
    'registered_pw'                              => 'Om du har glemt passordet ditt allereie, kan du tilbakestille det ved å bruka [passord reset tool](:address/password/reset).',
    'registered_help'                            => 'Det er eit hjelp-ikon i hjørnet øvst til høgre på kvar side. Om du trenger hjelp, kan du klikka på den!',
    'registered_closing'                         => 'Kos deg!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Tilbakestill passord:',
    'registered_doc_link'                        => 'Dokumentasjon:',

    // new version
    'new_version_email_subject'                  => 'Ein ny Firefly III versjon er tilgjengeleg',

    // email change
    'email_change_subject'                       => 'Din Firefly III e-postadresse er endra',
    'email_change_body_to_new'                   => 'Du eller nokon med tilgang til din Firefly III konto har endra e-postadressa din. Om du ikkje forventet denne meldinga, kan du sjå bort frå og sletta den.',
    'email_change_body_to_old'                   => 'Du eller nokon med tilgang til din Firefly III konto har endra e-postadressa din. Om du ikkje forventet dette, så må du **må** følge "angre"-koblingen nedanfor for å beskytta kontoen din!',
    'email_change_ignore'                        => 'Om du utførte denne endringen, kan du trygt ignorere denne meldinga.',
    'email_change_old'                           => 'Den gamle e-postadressa var: :email',
    'email_change_new'                           => 'Den nye e-postadressa er: :email',
    'email_change_instructions'                  => 'Du kan ikkje bruka Firefly III før du bekreftar denne endringa. Følg linken nedanfor for å gjere det.',
    'email_change_undo_link'                     => 'For å angre endringen, følg denne linken:',

    // OAuth token created
    'oauth_created_subject'                      => 'Ein ny OAuth-klient er opprettet',
    'oauth_created_body'                         => 'Nokon (forhåpentligvis du) har nettopp oppretta ein ny Firefly III API OAuth Client for din brukarkonto. Den er markert «:name» og har tilbakekall URL `:url`.',
    'oauth_created_explanation'                  => 'Med denne kunden, får dei tilgang til **alle** av dine finansielle poster gjennom Firefly III API.',
    'oauth_created_undo'                         => 'Om dette ikkje var deg, ver venleg å slett denne klienten så snart som mogleg ved `:url`',

    // reset password
    'reset_pw_subject'                           => 'Spørsmålet ditt om tilbakestilling av passord',
    'reset_pw_message'                           => 'You have received password reset instructions in your email. If this was you, please follow the instructions.',
    'reset_pw_instructions'                      => 'Nokon forsøkte å tilbakestilla passordet ditt. Om det var deg, ver venleg å følg koplinga nedanfor for å fullføre.',
    'reset_pw_warning'                           => '**VER VENLEG** og bekreft at lenkja faktisk peikar mot Firefly III slik du forventer!',

    // error
    'error_subject'                              => 'Rett ein feil i Firefly III',
    'error_intro'                                => 'Firefly III v:version fikk ein feil: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'Feilen var av typen ":class.',
    'error_timestamp'                            => 'Feilen oppstod på: :time.',
    'error_location'                             => 'Denne feilen oppstod i filen "<span style="font-family: monospace;">:file</span>" på linje :line med kode :code.',
    'error_user'                                 => 'Feilen oppstod på av brukaren #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Det var ingen brukar som var pålogget for denne feilen, eller ingen brukar vart oppdaget.',
    'error_ip'                                   => 'IP-adressa relatert til denne feilen er: :ip',
    'error_url'                                  => 'URL er: :url',
    'error_user_agent'                           => 'Brukaragent: :userAgent',
    'error_stacktrace'                           => 'The full stacktrace is below. If you think this is a bug in Firefly III, you can forward this message to <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. This can help fix the bug you just encountered.',
    'error_github_html'                          => 'Om du føretrekk, kan du òg åpne eit nytt problem på <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'Om du føretrekk, kan du òg åpne eit nytt problem på https://github.com/firefly-ii/firefly-ii/issues.',
    'error_stacktrace_below'                     => 'Hele informasjonen er:',
    'error_headers'                              => 'Følgende headers kan òg vera relevant:',
    'error_post'                                 => 'This was submitted by the user:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III har oppretta ein ny transaksjon|Firefly III har skapt :count nye transaksjonar',
    'new_journals_header'                        => 'Firefly III har oppretta ein transaksjon for deg. Du finn den i din Firefly III installasjon|:Firefly III har laget :count transaksjonar for deg. Du kan finna dei i Firefly III installasjonen:',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'You have :count subscriptions that are overdue to be paid',
    'subscriptions_overdue_subject_single'       => 'You have a subscription that is overdue to be paid',
    'subscriptions_overdue_warning_intro_single' => 'You have one subscription that is overdue to be paid. At the following date(s) a payment was expected, but it has not yet arrived.',
    'subscriptions_overdue_warning_intro_multi'  => 'You have :count subscription(s) that are overdue to be paid. At the following date(s) a payment was expected, but it has not yet arrived.',
    'subscriptions_overdue_please_action_single' => 'Perhaps you have simply not linked a transaction to this subscription. In that case, please do so. You will NOT get another warning about this overdue subscription. A new warning will be sent out for the NEXT due payment.',
    'subscriptions_overdue_please_action_multi'  => 'Perhaps you have simply not linked a transaction to these subscriptions. In that case, please do so. You will NOT get another warning about these overdue subscriptions. A new warning will be sent out for the NEXT due payments.',
    'subscriptions_overdue_outro'                => 'If you believe this message is wrong, please contact the Firefly III developer. Thank you for using Firefly III.',
    // bill warning
    'bill_warning_subject_end_date'              => 'Your subscription ":name" is due to end in :diff days',
    'bill_warning_subject_now_end_date'          => 'Your subscription ":name" is due to end TODAY',
    'bill_warning_subject_extension_date'        => 'Your subscription ":name" is due to be extended or cancelled in :diff days',
    'bill_warning_subject_now_extension_date'    => 'Your subscription ":name" is due to be extended or cancelled TODAY',
    'bill_warning_end_date'                      => 'Your subscription **":name"** is due to end on :date. This moment will pass in about **:diff days**.',
    'bill_warning_extension_date'                => 'Your subscription **":name"** is due to be extended or cancelled on :date. This moment will pass in about **:diff days**.',
    'bill_warning_end_date_zero'                 => 'Your subscription **":name"** is due to end on :date. This moment will pass **TODAY!**',
    'bill_warning_extension_date_zero'           => 'Your subscription **":name"** is due to be extended or cancelled on :date. This moment will pass **TODAY!**',
    'bill_warning_please_action'                 => 'Ver venleg å gjer dei rette tiltaka.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'You have enabled multi-factor authentication',
    'enabled_mfa_slack'                          => 'You (:email) have enabled multi-factor authentication. Is this not correct? Check your settings!',
    'have_enabled_mfa'                           => 'You have enabled multi-factor authentication on your Firefly III account ":email". This means that you will need to use an authenticator app to log in from now on.',
    'enabled_mfa_warning'                        => 'If you did not enable this, please contact your administrator immediately or check out the Firefly III documentation.',

    'disabled_mfa_subject'                       => 'You have disabled multi-factor authentication!',
    'disabled_mfa_slack'                         => 'You (:email) have disabled multi-factor authentication. Is this not correct? Check your settings!',
    'have_disabled_mfa'                          => 'You have disabled multi-factor authentication on your Firefly III account ":email".',
    'disabled_mfa_warning'                       => 'If you did not disable this, please contact your administrator immediately or check out the Firefly III documentation.',

    'new_backup_codes_subject'                   => 'You have generated new back-up codes',
    'new_backup_codes_slack'                     => 'You (:email) have generated new back-up codes. These can be used to login to Firefly III. Is this not correct? Check your settings!',
    'new_backup_codes_intro'                     => 'You (:email) have generated new back-up codes. These can be used to login to Firefly III if you lose access to your authenticator app.',
    'new_backup_codes_warning'                   => 'Please store these codes in a safe place. If you lose them, you will not be able to log in to Firefly III. If you did not do this, please contact your administrator immediately or check out the Firefly III documentation.',

    'used_backup_code_subject'                   => 'You have used a back-up code to login',
    'used_backup_code_slack'                     => 'You (:email) have used a back-up code to login',

    'used_backup_code_intro'                     => 'You (:email) have used a back-up co    de to login to Firefly III. You now have one less back-up code to login with. Please remove it from your list.',
    'used_backup_code_warning'                   => 'If you did not do this, please contact your administrator immediately or check out the Firefly III documentation.',

    // few left:
    'mfa_few_backups_left_subject'               => 'You have only :count backup code(s) left!',
    'mfa_few_backups_left_slack'                 => 'You (:email) have only :count backup code(s) left!',
    'few_backup_codes_intro'                     => 'You (:email) have used most of your backup codes, and now have only :count left. Please generate new ones as soon as possible.',
    'few_backup_codes_warning'                   => 'Without backup codes, you cannot recover your MFA login if you lose access to your code generator.',

    // NO left:
    'mfa_no_backups_left_subject'                => 'You have NO backup codes left!',
    'mfa_no_backups_left_slack'                  => 'You (:email) NO backup codes left!',
    'no_backup_codes_intro'                      => 'You (:email) have used ALL of your backup codes. Please generate new ones as soon as possible.',
    'no_backup_codes_warning'                    => 'Without backup codes, you cannot recover your MFA login if you lose access to your code generator.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => 'You have tried and failed to use multi-factor authentication :count times now!',
    'mfa_many_failed_slack'                      => 'You (:email) have tried and failed to use multi-factor authentication :count times now. Is this not correct? Check your settings!',
    'mfa_many_failed_attempts_intro'             => 'You (:email) have tried :count times to use a multi-factor authentication code, but these login attempts have failed. Are you sure you are using the right MFA code? Are you sure the time on the server is correct?',
    'mfa_many_failed_attempts_warning'           => 'If you did not do this, please contact your administrator immediately or check out the Firefly III documentation.',
];
