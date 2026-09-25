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
    'signature'                                  => 'Fra din vennlige Firefly III e-post robot',
    'footer_ps'                                  => 'PS: Denne meldingen ble sendt fordi en forespørsel fra IP :ipAddress utløste den.',

    // admin test
    'admin_test_subject'                         => 'En testmelding fra Firefly III-installasjonen',
    'admin_test_body'                            => 'Dette er en testmelding fra din Firefly III-instans. Den ble sendt til :email.',
    'admin_test_message'                         => 'Dette er en testmelding fra din Firefly III-instans over kanalen ":channel".',
    'admin_test_link'                            => 'The following link should point to your Firefly III installation. It should be correctly adorned with "http" or "https". If not, please set your `APP_URL` environment variable: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'En invitasjon har blitt opprettet',
    'invitation_created_body'                    => 'Admin bruker ":email" opprettet en brukerinvitasjon til ":invitee. Invitasjonen vil være gyldig i 48 timer.',
    'invite_user_subject'                        => 'Du har blitt invitert til å lage en Firefly III-konto.',
    'invitation_introduction'                    => 'Du har blitt invitert til å lage en Firefly III konto på **:host**. Firefly III er en personlig, "self-hosted" privat finansforvalter. Alle de kule barna bruker den.',
    'invitation_invited_by'                      => 'Du har blitt invitert av ":admin" og denne invitasjonen ble sendt til ":invitee. Det er deg, ikke sant?',
    'invitation_url'                             => 'Invitasjonen er gyldig i 48 timer og kan løses inn ved å gå til [Firefly III](:url. Nyt!',

    // new IP
    'login_from_new_ip'                          => 'Ny pålogging på Firefly III',
    'slack_login_from_new_ip'                    => 'Ny Firefly III innlogging fra IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III oppdaget en ny pålogging på kontoen fra en ukjent IP-adresse. Hvis du aldri har logget inn fra IP-adressen under, eller det har vært mer enn et halvt år siden, vil Firefly III advare deg.',
    'new_ip_warning'                             => 'Hvis du gjenkjenner denne IP-adressen eller påloggingen, kan du ignorere denne meldingen. Hvis du ikke har logget inn, så har du ikke peiling på hva dette gjelder, bekreft passordsikkerhet, endre det, og logg ut alle økter. For å gjøre dette, gå til profilsiden. Selvsagt har du 2FA aktivert allerede, ikke sant? Vær trygg!',
    'ip_address'                                 => 'IP-adresse',
    'host_name'                                  => 'Vert',
    'date_time'                                  => 'Dato + klokkeslett',
    'user_agent'                                 => 'Nettleser',

    // access token created
    'access_token_created_subject'               => 'En ny tilgangstoken ble opprettet',
    'access_token_created_body'                  => 'Noen (forhåpentligvis du) har nettopp opprettet en ny Firefly III API Access Token for brukerkontoen din.',
    'access_token_created_explanation'           => 'Med denne token, kan de få tilgang til **alle** av dine finansielle poster gjennom Firefly III API.',
    'access_token_created_revoke'                => 'Hvis dette ikke var deg, vennligst fjern dette tokenet så snart som mulig på :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'En ukjent bruker prøvde å logge inn',
    'unknown_user_body'                          => 'En ukjent bruker (:ip) prøvde å logge inn på Firefly III. Epostadressen de brukte var ":address".',
    'unknown_user_message'                       => 'Epostadressen de (:ip) brukte var ":address".',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III oppdaget et mislykket påloggingsforsøk',
    'failed_login_body'                          => 'Firefly III oppdaget at noen (deg?) ikke klarte å logge inn med din konto ":email". Vennligst bekreft at dette var deg.',
    'failed_login_message'                       => 'Et mislykket påloggingsforsøk (:ip) på din Firefly III konto ":email" ble oppdaget.',
    'failed_login_warning'                       => 'Hvis du gjenkjenner denne IP-adressen eller påloggingen, kan du ignorere denne meldingen. Hvis du ikke har prøvd å logge inn, eller du ikke har peiling på hva dette gjelder, sjekk om passordet ditt er sikkert, endre det og logg ut av alle økter. For å gjøre dette, gå til profilsiden din. Selvsagt har du 2FA aktivert allerede, ikke sant? Hold deg trygg!',

    // registered
    'registered_subject'                         => 'Velkommen til Firefly III!',
    'registered_subject_admin'                   => 'En ny bruker har registrert seg',
    'admin_new_user_registered'                  => 'En ny bruker har registrert seg. Bruker **:email har fått ID #:id.',
    'registered_welcome'                         => 'Velkommen til [Firefly III](:address). Din registrering er fullført, og denne e-posten er her for å bekrefte det. Kanon!',
    'registered_pw'                              => 'Hvis du har glemt passordet ditt allerede, kan du tilbakestille det ved å bruke [passord reset tool](:address/password/reset).',
    'registered_help'                            => 'Det er et hjelp-ikon i hjørnet øverst til høyre på hver side. Hvis du trenger hjelp, kan du klikke på den!',
    'registered_closing'                         => 'Kos deg!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Tilbakestill passord:',
    'registered_doc_link'                        => 'Dokumentasjon:',

    // new version
    'new_version_email_subject'                  => 'En ny Firefly III versjon er tilgjengelig',

    // email change
    'email_change_subject'                       => 'Din Firefly III e-postadresse er endret',
    'email_change_body_to_new'                   => 'Du eller noen med tilgang til din Firefly III konto har endret e-postadressen din. Hvis du ikke forventet denne meldingen, kan du se bort fra og slette den.',
    'email_change_body_to_old'                   => 'Du eller noen med tilgang til din Firefly III konto har endret e-postadressen din. Hvis du ikke forventet dette, så må du **må** følge "angre"-koblingen nedenfor for å beskytte kontoen din!',
    'email_change_ignore'                        => 'Hvis du initierte denne endringen, kan du trygt ignorere denne meldingen.',
    'email_change_old'                           => 'Den gamle e-postadressen var: :email',
    'email_change_new'                           => 'Den nye e-postadressen er: :email',
    'email_change_instructions'                  => 'Du kan ikke bruke Firefly III før du bekrefter denne endringen. Følg linken nedenfor for å gjøre det.',
    'email_change_undo_link'                     => 'For å angre endringen, følg denne linken:',

    // OAuth token created
    'oauth_created_subject'                      => 'En ny OAuth-klient er opprettet',
    'oauth_created_body'                         => 'Noen (forhåpentligvis du) har nettopp opprettet en ny Firefly III API OAuth Client for din brukerkonto. Den er merket ":name" og har tilbakeringing URL `:url`.',
    'oauth_created_explanation'                  => 'Med denne kunden, får de tilgang til **alle** av dine finansielle poster gjennom Firefly III API.',
    'oauth_created_undo'                         => 'Hvis dette ikke var deg, vennligst slette denne klienten så snart som mulig ved `:url',

    // reset password
    'reset_pw_subject'                           => 'Din forespørsel om tilbakestilling av passord',
    'reset_pw_message'                           => 'Du har mottatt instruksjoner for å tilbakestille passordet på e-post. Hvis dette var deg, vennligst følg instruksjonene.',
    'reset_pw_instructions'                      => 'Noen prøvde å tilbakestille passordet ditt. Hvis det var deg, vennligst følg linken nedenfor for å fullføre.',
    'reset_pw_warning'                           => '**PLEASE** bekrefter at lenken faktisk går til Firefly III slik du forventer at den skal gå!',

    // error
    'error_subject'                              => 'Rett en feil i Firefly III',
    'error_intro'                                => 'Firefly III v:version fikk en feil: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'Feilen var av typen ":class.',
    'error_timestamp'                            => 'Feilen oppstod på: :time.',
    'error_location'                             => 'Denne feilen oppstod i filen "<span style="font-family: monospace;">:file</span>" på linje :line med kode :code.',
    'error_user'                                 => 'Feilen oppstod på av brukeren #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Det var ingen bruker som var pålogget for denne feilen, eller ingen bruker ble oppdaget.',
    'error_ip'                                   => 'IP-adressen relatert til denne feilen er: :ip',
    'error_url'                                  => 'URL er: :url',
    'error_user_agent'                           => 'Brukeragent: :userAgent',
    'error_stacktrace'                           => 'Hele informasjonen er under. Hvis du tror dette er en feil i Firefly III, kan du videresende denne meldingen til  <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. Dette kan hjelpe med å rette opp feilen du nettopp har funnet.',
    'error_github_html'                          => 'Hvis du foretrekker, kan du også åpne et nytt problem på <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'Hvis du foretrekker, kan du også åpne et nytt problem på https://github.com/firefly-ii/firefly-ii/issues.',
    'error_stacktrace_below'                     => 'Hele informasjonen er:',
    'error_headers'                              => 'Følgende headers kan også være relevant:',
    'error_post'                                 => 'Dette ble sendt inn av brukeren:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III har opprettet en ny transaksjon|Firefly III har skapt :count nye transaksjoner',
    'new_journals_header'                        => 'Firefly III har opprettet en transaksjon for deg. Du finner den i din Firefly III installasjon|:Firefly III har laget :count transaksjoner for deg. Du kan finne dem i Firefly III installasjonen:',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'Du har :count abonnementer som har forfalt',
    'subscriptions_overdue_subject_single'       => 'Du har et abonnement som har forfalt',
    'subscriptions_overdue_warning_intro_single' => 'Du har ett abonnement som har forfalt. På følgende dato(er) var en betaling forventet, men den har ikke kommet ennå.',
    'subscriptions_overdue_warning_intro_multi'  => 'Du har :count abonnement(er) som har forfalt. Følgende dato(er) var betalingen forventet, men den har ikke kommet ennå.',
    'subscriptions_overdue_please_action_single' => 'Kanskje du har ikke koblet en transaksjon til dette abonnementet. I så fall, vennligst gjør det. Du vil IKKE få flere advarsel om denne forfalte abonnementet. Et ny advarsel vil bli sendt for NESTE forfall.',
    'subscriptions_overdue_please_action_multi'  => 'Kanskje du har ikke koblet en transaksjon til disse abonnementene. I så fall, vennligst gjør det. Du vil IKKE få flere advarsel om disse forfalte abonnementene. Et ny advarsel vil bli sendt for NESTE forfall.',
    'subscriptions_overdue_outro'                => 'Hvis du tror denne meldingen er feil, kontakt Firefly III-utvikleren. Takk for at du bruker Firefly III.',
    // bill warning
    'bill_warning_subject_end_date'              => 'Ditt abonnement ":name" har forfallsdato om :diff dager',
    'bill_warning_subject_now_end_date'          => 'Ditt abonnement ":name" har forfallsdato I DAG',
    'bill_warning_subject_extension_date'        => 'Ditt abonnement ":name" vil bli forlenget eller avbrutt om :diff dager',
    'bill_warning_subject_now_extension_date'    => 'Ditt abonnement ":name" vil bli forlenget eller avbrutt I DAG',
    'bill_warning_end_date'                      => 'Ditt abonnement **":name"** vil bli avsluttet på  :date. Dette er om **:diff dager**.',
    'bill_warning_extension_date'                => 'Ditt abonnement **":name"** vil bli forlenget eller avsluttet på  :date. Dette er om **:diff dager**.',
    'bill_warning_end_date_zero'                 => 'Ditt abonnement **":name"** vil bli avsluttet på  :date. Dette er om **I DAG**.',
    'bill_warning_extension_date_zero'           => 'Ditt abonnement **":name"** vil bli forlenget eller avsluttet på  :date. Dette er **I DAG**.',
    'bill_warning_please_action'                 => 'Vennligst gjør de rette tiltakene.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'Du har aktivert flerfaktorautentisering',
    'enabled_mfa_slack'                          => 'Du (:email) har aktivert flerfaktorautentisering. Er dette feil? Sjekk innstillingene dine!',
    'have_enabled_mfa'                           => 'Du har aktivert flerfaktorautentisering på din Firefly III konto ":email". Dette betyr at du må bruke en autentiseringsapp for å logge inn fra nå av.',
    'enabled_mfa_warning'                        => 'Hvis du ikke aktiverte dette, vennligst kontakt systemansvarlig umiddelbart eller sjekk Firefly III-dokumentasjonen.',

    'disabled_mfa_subject'                       => 'Du har deaktivert flerfaktorautentisering',
    'disabled_mfa_slack'                         => 'Du (:email) har deaktivert flerfaktorautentisering. Er dette feil? Sjekk innstillingene dine!',
    'have_disabled_mfa'                          => 'Du har deaktivert flerfaktorautentisering på din Firefly III konto ":email".',
    'disabled_mfa_warning'                       => 'Hvis du ikke har deaktivert dette, vennligst kontakt systemansvarlig umiddelbart eller sjekk Firefly III-dokumentasjonen.',

    'new_backup_codes_subject'                   => 'Du har generert nye reservekoder',
    'new_backup_codes_slack'                     => 'Du (:email) har generert nye reservekoder. Disse kan brukes til å logge inn på Firefly III. Er dette feil? Sjekk innstillingene dine!',
    'new_backup_codes_intro'                     => 'Du (:email) har generert nye reservekoder. Disse kan brukes til å logge inn på Firefly III hvis du mister tilgang til autentiseringsappen din.',
    'new_backup_codes_warning'                   => 'Vennligst lagre disse kodene på et trygt sted. Hvis du mister dem, vil du ikke kunne logge inn på Firefly III. Hvis du ikke gjorde dette, vennligst kontakt systemansvarlig umiddelbart eller sjekk Firefly III-dokumentasjonen.',

    'used_backup_code_subject'                   => 'Du har brukt en reservekode for å logge på',
    'used_backup_code_slack'                     => 'Du (:email) har brukt en reservekode for å logge på',

    'used_backup_code_intro'                     => 'You (:email) have used a back-up co    de to login to Firefly III. You now have one less back-up code to login with. Please remove it from your list.',
    'used_backup_code_warning'                   => 'Hvis du ikke gjorde dette, vennligst kontakt systemansvarlig umiddelbart eller sjekk Firefly III-dokumentasjonen.',

    // few left:
    'mfa_few_backups_left_subject'               => 'Du har kun :count reservekode(r) igjen!',
    'mfa_few_backups_left_slack'                 => 'Du (:email) har bare :count reservekode(r) igjen!',
    'few_backup_codes_intro'                     => 'Du (:email) har brukt mesteparten av dine reservekoder, og har nå bare :count igjen. Vennligst generer nye så snart som mulig.',
    'few_backup_codes_warning'                   => 'Uten reservekoder kan du ikke gjenopprette MFA pålogging hvis du mister tilgang til kodegeneratoren din.',

    // NO left:
    'mfa_no_backups_left_subject'                => 'Du har INGEN reservekoder igjen!',
    'mfa_no_backups_left_slack'                  => 'Du (:email) INGEN reservekoder igjen!',
    'no_backup_codes_intro'                      => 'Du (:email) har brukt ALLE reservekodene. Vennligst generer nye så snart som mulig.',
    'no_backup_codes_warning'                    => 'Uten reservekoder kan du ikke gjenopprette MFA pålogging hvis du mister tilgang til kodegeneratoren din.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => 'Du har prøvd og mislyktes å bruke flerfaktorautentisering :count ganger nå!',
    'mfa_many_failed_slack'                      => 'Du (:email) har prøvd og mislyktes å bruke flerfaktorautentisering :count ganger nå. Er dette feil? Sjekk innstillingene dine!',
    'mfa_many_failed_attempts_intro'             => 'Du (:email) har prøvd :count ganger å bruke en flerfaktorautentiseringskode, men disse påloggingsforsøkene har mislyktes. Er du sikker på at du bruker riktig MFA-kode? Er du sikker på at klokken på serveren går rett?',
    'mfa_many_failed_attempts_warning'           => 'Hvis du ikke gjorde dette, vennligst kontakt systemansvarlig umiddelbart eller sjekk Firefly III-dokumentasjonen.',
];
