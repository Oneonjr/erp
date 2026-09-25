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
    'greeting'                                   => 'Hoi,',
    'closing'                                    => 'Bliep bloep,',
    'signature'                                  => 'De Firefly III e-mailrobot',
    'footer_ps'                                  => 'PS: dit bericht krijg je dankzij een actie vanaf :ipAddress.',

    // admin test
    'admin_test_subject'                         => 'Een testbericht van je Firefly III-installatie',
    'admin_test_body'                            => 'Dit is een testbericht vanaf jouw Firefly III-installatie. Het is verstuurd naar :email.',
    'admin_test_message'                         => 'Dit is een testbericht van je Firefly III-instantie via het kanaal ":channel".',
    'admin_test_link'                            => 'De volgende link moet naar je Firefly III installatie wijzen. Deze moet voorzien zijn van \'http\' of \'https\'. Zo niet, stel dan je `APP_URL` omgevingsvariabele in: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Een uitnodiging is gemaakt',
    'invitation_created_body'                    => 'Admin ":email" heeft een gebruikersuitnodiging gemaakt die kan worden gebruikt door ":invitee". De uitnodiging is 48 uur geldig.',
    'invite_user_subject'                        => 'Je bent uitgenodigd om een Firefly III account aan te maken.',
    'invitation_introduction'                    => 'Je bent uitgenodigd om een Firefly III account aan te maken op **:host**. Firefly III is een persoonlijke, zelfgehoste persoonlijke financiële manager. Echte hipsters gebruiken Firefly III.',
    'invitation_invited_by'                      => 'Je bent uitgenodigd door ":admin", en deze uitnodiging is verzonden naar ":invitee". Dat ben jij, toch?',
    'invitation_url'                             => 'De uitnodiging is 48 uur geldig en kan gebruikt door te surfen naar [Firefly III](:url). Veel plezier!',

    // new IP
    'login_from_new_ip'                          => 'Nieuwe login op Firefly III',
    'slack_login_from_new_ip'                    => 'Nieuwe Firefly III login vanaf IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III heeft een nieuwe login op je account gedetecteerd van een onbekend IP-adres. Je krijgt deze waarschuwing omdat je nooit hebt ingelogd vanaf het onderstaande IP-adres, of dat was meer dan zes maanden geleden.',
    'new_ip_warning'                             => 'Je mag dit bericht negeren als je het IP adres herkent. Als je niet hebt ingelogd of je hebt geen flauw idee waar dit over gaat, zorg dan dat je je wachtwoord verandert en al je andere sessies uitlogt. Dit kan op je profielpagina. Je hebt 2FA al aanstaan toch? Stay safe!',
    'ip_address'                                 => 'IP adres',
    'host_name'                                  => 'Host',
    'date_time'                                  => 'Datum & tijd',
    'user_agent'                                 => 'Browser',

    // access token created
    'access_token_created_subject'               => 'Er is een nieuw access token gegenereerd',
    'access_token_created_body'                  => 'Zojuist heeft iemand (hopelijk jij) voor jouw gebruikersaccount een nieuw Firefly III API Access Token gemaakt.',
    'access_token_created_explanation'           => 'Met dit token heeft die persoon toegang tot **al je** financiële records via de Firefly III API.',
    'access_token_created_revoke'                => 'Als jij dit niet was, cancel dit token dan zo snel mogelijk via :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Een onbekende gebruiker heeft geprobeerd in te loggen',
    'unknown_user_body'                          => 'Een onbekende gebruiker (`:ip`) heeft geprobeerd in te loggen op Firefly III. Het e-mailadres dat zij gebruikten was `:address`.',
    'unknown_user_message'                       => 'Het e-mailadres dat zij (`:ip`) gebruikten was `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III heeft een mislukte inlogpoging gedetecteerd',
    'failed_login_body'                          => 'Firefly III heeft gedetecteerd dat iemand (jij?) heeft geprobeerd in te loggen met je account `:email`, maar dit is mislukt. Controleer alsjeblieft of jij dit was.',
    'failed_login_message'                       => 'Er is een mislukte inlogpoging (`:ip`) gedetecteerd op je Firefly III-account `:email`.',
    'failed_login_warning'                       => 'Als je dit IP-adres of de inlogpoging herkent, kun je deze melding negeren. Als je niet hebt geprobeerd in te loggen of geen idee hebt waar dit over gaat, controleer dan de beveiliging van je wachtwoord, wijzig het en log alle andere sessies uit. Ga hiervoor naar je profielpagina. Je hebt natuurlijk al 2FA ingeschakeld, toch? Blijf veilig!',

    // registered
    'registered_subject'                         => 'Welkom bij Firefly III!',
    'registered_subject_admin'                   => 'Nieuwe gebruiker geregistreerd',
    'admin_new_user_registered'                  => 'Een nieuwe gebruiker is geregistreerd. Gebruiker **:email** heeft ID #:id gekregen.',
    'registered_welcome'                         => 'Welkom bij [Firefly III](:address). Je registratie is doorgekomen en deze e-mail is hier om dat te bevestigen. Hoera!',
    'registered_pw'                              => 'Als je je wachtwoord nu al bent vergeten, reset deze dan via [de password reset tool](:address/password/reset).',
    'registered_help'                            => 'Er staat een help-icoontje rechtsboven op elke pagina. Gebruik die vooral!',
    'registered_closing'                         => 'Geniet ervan!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Wachtwoord resetten:',
    'registered_doc_link'                        => 'Documentatie:',

    // new version
    'new_version_email_subject'                  => 'Er is een nieuwe Firefly III-versie beschikbaar',

    // email change
    'email_change_subject'                       => 'Je Firefly III e-mailadres is veranderd',
    'email_change_body_to_new'                   => 'Jij of iemand met toegang tot je Firefly III account heeft je e-mailadres gewijzigd. Pleur dit mailtje weg als jij dit niet was.',
    'email_change_body_to_old'                   => 'Jij of iemand met toegang tot je Firefly III account heeft je e-mailadres gewijzigd. Klik op **de "undo"-link** hieronder als jij dat niet was!',
    'email_change_ignore'                        => 'Negeer dit mailtje als jij het was.',
    'email_change_old'                           => 'Het oude e-mailadres was: :email',
    'email_change_new'                           => 'Het nieuwe e-mailadres is: :email',
    'email_change_instructions'                  => 'Firefly III doet het niet tot je de verandering bevestigt. Volg de link hieronder om dat te doen.',
    'email_change_undo_link'                     => 'Maak dit ongedaan door de link te volgen:',

    // OAuth token created
    'oauth_created_subject'                      => 'Er is een nieuwe OAuth client aangemaakt',
    'oauth_created_body'                         => 'Iemand (hopelijk jij) heeft zojuist een nieuwe Firefly III API OAuth Client gemaakt. Bijbehorende label is ":name" en de callback URL is `:url`.',
    'oauth_created_explanation'                  => 'Met deze client heeft diegene toegang tot **al je** financiële records via de Firefly III API.',
    'oauth_created_undo'                         => 'Als jij dit niet was, cancel deze client dan zo snel mogelijk via `:url`',

    // reset password
    'reset_pw_subject'                           => 'Verzoek om je wachtwoord te resetten',
    'reset_pw_message'                           => 'Je hebt instructies voor het resetten van je wachtwoord ontvangen in je e-mail. Als jij dit was, volg dan de instructies.',
    'reset_pw_instructions'                      => 'Iemand heeft geprobeerd je wachtwoord te resetten. Volg de link hieronder als jij dat was.',
    'reset_pw_warning'                           => '**CHECK** of deze link ook echt naar jouw Firefly III installatie gaat!',

    // error
    'error_subject'                              => 'Fout opgetreden in Firefly III',
    'error_intro'                                => 'Firefly III v:version liep een fout aan: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'De fout was van type ":class".',
    'error_timestamp'                            => 'De fout is opgetreden op/om: :time.',
    'error_location'                             => 'De fout is opgetreden in bestand "<span style="font-family: monospace;">:file</span>" op regel :line met code :code.',
    'error_user'                                 => 'De fout is opgetreden bij gebruiker #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Er is was gebruiker ingelogd op het moment dat de fout optrad of, er werd geen gebruiker gedetecteerd.',
    'error_ip'                                   => 'Het IP-adres met betrekking tot deze fout is: :ip',
    'error_url'                                  => 'URL is: :url',
    'error_user_agent'                           => 'User agent: :userAgent',
    'error_stacktrace'                           => 'De volledige stacktrace staat hieronder. Als je denkt dat dit een bug in Firefly III is, kun je dit bericht doorsturen naar <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. Dit kan helpen om de fout te verhelpen waar je net tegenaan bent gelopen.',
    'error_github_html'                          => 'Als je wilt, kun je ook een nieuw issue openen op <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'Als je wilt, kun je ook een nieuw issue openen op https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                     => 'De volledige stacktrace staat hieronder:',
    'error_headers'                              => 'De volgende headers zijn wellicht ook interessant:',
    'error_post'                                 => 'Dit is gesubmit door de gebruiker:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III heeft een nieuwe transactie aangemaakt|Firefly III heeft :count nieuwe transacties aangemaakt',
    'new_journals_header'                        => 'Firefly III heeft een nieuwe transactie voor je gemaakt. Je kan deze terug vinden in je Firefly III installatie:|Firefly III heeft :count nieuwe transacties voor je gemaakt. Je kan deze terug vinden in je Firefly III installatie:',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'Je hebt :count abonnementen die al betaald hadden moeten zijn',
    'subscriptions_overdue_subject_single'       => 'Je hebt één abonnement dat al betaald hadden moeten zijn',
    'subscriptions_overdue_warning_intro_single' => 'Je hebt één abonnement dat al betaald hadden moeten zijn. Op de volgende datum(s) had je moeten betalen, maar dat is nog niet gebeurd.',
    'subscriptions_overdue_warning_intro_multi'  => 'Je hebt :count abonnement(en) die al betaald hadden moeten zijn. Op de volgende datum(s) had je moeten betalen, maar dat is nog niet gebeurd.',
    'subscriptions_overdue_please_action_single' => 'Misschien heb je de transactie nog niet aan dit abonnement gekoppeld. In dat geval, zeker doen. Je krijgt geen andere waarschuwing over deze achterstallige betaling. Een nieuwe waarschuwing zal worden verstuurd voor de betaling van de volgende periode.',
    'subscriptions_overdue_please_action_multi'  => 'Misschien heb je de transacties nog niet aan deze abonnementen gekoppeld. In dat geval, zeker doen. Je krijgt geen andere waarschuwingen over deze achterstallige betalingen. Nieuwe waarschuwingen zullen worden verstuurd voor de betalingen van de volgende periode.',
    'subscriptions_overdue_outro'                => 'Als je denkt dat dit bericht niet klopt, neem dan contact op met de Firefly III ontwikkelaar. Bedankt voor het gebruik van Firefly III.',
    // bill warning
    'bill_warning_subject_end_date'              => 'Je abonnement ":name" gaat over :diff dagen aflopen',
    'bill_warning_subject_now_end_date'          => 'Je abonnement ":name" gaat VANDAAG aflopen',
    'bill_warning_subject_extension_date'        => 'Je abonnement ":name" moet over :diff dagen opgezegd of verlengd worden',
    'bill_warning_subject_now_extension_date'    => 'Je abonnement ":name" moet VANDAAG opgezegd of verlengd worden',
    'bill_warning_end_date'                      => 'Je abonnement **":name"** loopt af op :date. Dat is over ongeveer **:diff dagen**.',
    'bill_warning_extension_date'                => 'Je abonnement **":name"** moet op :date verlengd of opgezegd worden. Dat is over ongeveer **:diff dagen**.',
    'bill_warning_end_date_zero'                 => 'Je abonnement **":name"** loopt af op :date. Dat is **VANDAAG!**',
    'bill_warning_extension_date_zero'           => 'Je abonnement **":name"** moet op :date verlengd of opgezegd worden. Dat is **VANDAAG!**',
    'bill_warning_please_action'                 => 'Zorg dat je hier iets mee doet.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'Je hebt multi-factorauthenticatie ingeschakeld',
    'enabled_mfa_slack'                          => 'Je (:email) hebt multi-factorauthenticatie ingeschakeld. Is dit niet juist? Controleer je instellingen!',
    'have_enabled_mfa'                           => 'Je hebt multi-factorauthenticatie ingeschakeld op je Firefly III account ":email". Dit betekent dat je vanaf nu een authenticatie-app moet gebruiken om in te loggen.',
    'enabled_mfa_warning'                        => 'Als je dit niet hebt ingeschakeld, neem dan onmiddellijk contact op met je beheerder of bekijk de Firefly III-documentatie.',

    'disabled_mfa_subject'                       => 'Je hebt multi-factorauthenticatie uitgeschakeld!',
    'disabled_mfa_slack'                         => 'Je (:email) hebt multi-factorauthenticatie uitgeschakeld. Is dit niet juist? Controleer je instellingen!',
    'have_disabled_mfa'                          => 'Je hebt multi-factorauthenticatie uitgeschakeld op je Firefly III account ":email".',
    'disabled_mfa_warning'                       => 'Als je dit niet hebt uitgeschakeld, neem dan onmiddellijk contact op met je beheerder of bekijk de Firefly III-documentatie.',

    'new_backup_codes_subject'                   => 'Je hebt nieuwe back-upcodes gegenereerd',
    'new_backup_codes_slack'                     => 'Je (:email) hebt nieuwe back-upcodes gegenereerd. Deze kunnen worden gebruikt om in te loggen in Firefly III. Is dit niet juist? Controleer je instellingen!',
    'new_backup_codes_intro'                     => 'Je (:email) hebt nieuwe back-upcodes gegenereerd. Deze kunnen worden gebruikt om in te loggen in Firefly III als je de toegang verliest tot je authenticatorapplicatie.',
    'new_backup_codes_warning'                   => 'Sla deze codes veilig op. Als je ze verliest, kun je niet inloggen in Firefly III. Als je geen codes hebt gegenereerd, neem dan onmiddellijk contact op met je beheerder of bekijk de Firefly III-documentatie.',

    'used_backup_code_subject'                   => 'Je hebt een back-upcode gebruikt om in te loggen',
    'used_backup_code_slack'                     => 'Je (:email) hebt een back-upcode gebruikt om in te loggen',

    'used_backup_code_intro'                     => 'Je (:email) hebt een back-upcode gebruikt om in te loggen met Firefly III. Je hebt nu één back-upcode minder om mee in te loggen. Verwijder deze uit de lijst.',
    'used_backup_code_warning'                   => 'Als jij dit niet was, neem dan onmiddellijk contact op met je beheerder of bekijk de Firefly III-documentatie.',

    // few left:
    'mfa_few_backups_left_subject'               => 'Je hebt nog :count back-upcode(s) over!',
    'mfa_few_backups_left_slack'                 => 'Je (:email) hebt nog :count back-upcode(s) over!',
    'few_backup_codes_intro'                     => 'Je (:email) hebt de meeste van je back-upcodes gebruikt. Je hebt er :count over. Genereer zo snel mogelijk nieuwe codes.',
    'few_backup_codes_warning'                   => 'Zonder back-upcodes kan je je multi-factorauthenticatie niet herstellen als je de toegang tot je authenticatie-applicatie verliest.',

    // NO left:
    'mfa_no_backups_left_subject'                => 'Je hebt geen back-upcodes over!',
    'mfa_no_backups_left_slack'                  => 'Je (:email) hebt geen back-upcodes over!',
    'no_backup_codes_intro'                      => 'Je (:email) hebt al je back-upcodes gebruikt. Genereer zo snel mogelijk nieuwe codes.',
    'no_backup_codes_warning'                    => 'Zonder back-upcodes kan je je multi-factorauthenticatie niet herstellen als je de toegang tot je authenticatie-applicatie verliest.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => 'Je hebt nu :count keer tevergeefs geprobeerd met een multi-factorauthenticatiecode in te loggen!',
    'mfa_many_failed_slack'                      => 'Je (:email) hebt nu :count keer tevergeefs geprobeerd met een multi-factorauthenticatiecode in te loggen! Was jij dit niet? Check je instellingen!',
    'mfa_many_failed_attempts_intro'             => 'Je (:email) hebt nu :count keer tevergeefs geprobeerd met een multi-factorauthenticatiecode in te loggen. Weet je zeker dat je de juiste code invoert? Zijn de tijd en datum op de server goed ingesteld?',
    'mfa_many_failed_attempts_warning'           => 'Als jij dit niet was, neem dan onmiddellijk contact op met je beheerder of bekijk de Firefly III-documentatie.',
];
