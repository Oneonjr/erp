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
    'greeting'                                   => 'Hei siellä,',
    'closing'                                    => 'Beep boop,',
    'signature'                                  => 'Firefly III Postirobotti',
    'footer_ps'                                  => 'P.S. Tämä viesti lähetettiin, koska sitä pyydettiin osoitteesta :ipAddress.',

    // admin test
    'admin_test_subject'                         => 'Testiviesti Firefly III applikaatioltasi',
    'admin_test_body'                            => 'Tämä on testiviesti Firefly III instanssiltasi. Se lähetettiin osoitteeseen :email.',
    'admin_test_message'                         => 'This is a test message from your Firefly III instance over channel ":channel".',
    'admin_test_link'                            => 'The following link should point to your Firefly III installation. It should be correctly adorned with "http" or "https". If not, please set your `APP_URL` environment variable: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Kutsu on luotu',
    'invitation_created_body'                    => 'Ylläpitäjä ":email" loi kutsun, jota voi käyttää kuka tahansa, jolla on pääsy sähköpostiin ":invitee". Kutsu on voimassa 48h.',
    'invite_user_subject'                        => 'Sinut on kutsuttu luomaan Firefly III -tili.',
    'invitation_introduction'                    => 'You\'ve been invited to create a Firefly III account on **:host**. Firefly III  is a personal, self-hosted, private personal finance manager. All the cool kids are using it.',
    'invitation_invited_by'                      => 'You\'ve been invited by ":admin" and this invitation was sent to ":invitee". That\'s you, right?',
    'invitation_url'                             => 'The invitation is valid for 48 hours and can be redeemed by surfing to [Firefly III](:url). Enjoy!',

    // new IP
    'login_from_new_ip'                          => 'Uusi kirjautuminen Firefly III:een',
    'slack_login_from_new_ip'                    => 'Uusi Firefly III kirjautuminen IP-osoitteesta :ip (:host)',
    'new_ip_body'                                => 'Firefly III havaitsi uuden kirjautumisen tilillesi tuntemattomasta IP-osoitteesta. Jos et ole koskaan kirjautunut alla olevasta IP-osoitteesta tai edellisestä kirjautumisesta on yli kuusi kuukautta, Firefly III varoittaa sinua.',
    'new_ip_warning'                             => 'Jos tunnistat tämän IP-osoitteen tai kirjautumisen, voit ohittaa tämän viestin. Jos et ole kirjautunut, tai jos sinulla ei ole aavistustakaan mistä tässä on kyse, tarkista salasanasi turvallisuus, vaihda se ja kirjaudu ulos kaikista muista istunnoista. Voit tehdä tämän profiilisivullasi. Tietenkin sinulla on jo 2FA käytössä, eikö vain? Pysy turvassa!',
    'ip_address'                                 => 'IP-osoite',
    'host_name'                                  => 'Palvelin',
    'date_time'                                  => 'Päivämäärä + aika',
    'user_agent'                                 => 'Selain',

    // access token created
    'access_token_created_subject'               => 'Uusi käyttöoikeustunnus luotiin',
    'access_token_created_body'                  => 'Joku (toivottavasti sinä) loi juuri uuden Firefly III käyttöoikeustunnuksen käyttäjätilillesi.',
    'access_token_created_explanation'           => 'Tämän tunnisteen avulla heillä on pääsy **kaikkeen** kirjanpitoosi Firefly III -rajapinnan kautta.',
    'access_token_created_revoke'                => 'Jos tämä et ollut sinä, peruuta tämä tunnus mahdollisimman pian osoitteessa :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Tuntematon käyttäjä yritti kirjautua sisään',
    'unknown_user_body'                          => 'An unknown user (`:ip`) tried to log in to Firefly III. The email address they used was `:address`.',
    'unknown_user_message'                       => 'The email address they (`:ip`) used was `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III havaitsi epäonnistuneen kirjautumisyrityksen',
    'failed_login_body'                          => 'Firefly III detected that somebody (you?) failed to login with your account `:email`. Please verify that this was you.',
    'failed_login_message'                       => 'A failed login attempt (`:ip`) on your Firefly III account `:email` was detected.',
    'failed_login_warning'                       => 'If you recognize this IP address or the login attempt, you can ignore this message. If you didn\'t try to login, of if you have no idea what this is about, verify your password security, change it, and log out all other sessions. To do this, go to your profile page. Of course you have 2FA enabled already, right? Stay safe!',

    // registered
    'registered_subject'                         => 'Tervetuloa Firefly III:een!',
    'registered_subject_admin'                   => 'Uusi käyttäjä on rekisteröitynyt',
    'admin_new_user_registered'                  => 'Uusi käyttäjä on rekisteröitynyt. Käyttäjä **:email** sai käyttäjätunnuksen #:id.',
    'registered_welcome'                         => 'Tervetuloa [Firefly III](:address). Rekisteröitymisesi onnistui, ja tämä sähköposti vahvistaa sen. Siistiä!',
    'registered_pw'                              => 'Jos olet jo unohtanut salasanasi, nollaa se käyttäen [salasanan nollaustyökalua](:address/password/reset).',
    'registered_help'                            => 'Jokaisen sivun oikeassa yläkulmassa on apukuvake. Jos tarvitset apua, napsauta sitä!',
    'registered_closing'                         => 'Nauti!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Salasanan nollaus:',
    'registered_doc_link'                        => 'Dokumentaatio:',

    // new version
    'new_version_email_subject'                  => 'Uusi Firefly III versio on saatavilla',

    // email change
    'email_change_subject'                       => 'Firefly III sähköpostiosoitteesi on muuttunut',
    'email_change_body_to_new'                   => 'Joko sinä, tai joku jolla on pääsy Firefly III -tilillesi, on vaihtanut sähköpostiosoitteesi. Jos et odottanut tätä viestiä, ohita ja poista se.',
    'email_change_body_to_old'                   => 'Joko Sinä tai joku jolla on pääsy Firefly III -tilillesi on muuttanut sähköpostiosoitettasi. Jos tämä tuli yllätyksenä, sinun **täytyy** seurata alla olevaa "kumoa"-linkkiä suojataksesi tilisi!',
    'email_change_ignore'                        => 'Jos teit itse tämän muutoksen, voit turvallisesti ohittaa tämän viestin.',
    'email_change_old'                           => 'Vanha sähköpostiosoite oli: :email',
    'email_change_new'                           => 'Uusi sähköpostiosoite on: :email',
    'email_change_instructions'                  => 'Et voi käyttää Firefly III:a ennen kuin vahvistat tämän muutoksen. Ole hyvä ja seuraa alla olevaa linkkiä.',
    'email_change_undo_link'                     => 'Kumoa muutos seuraamalla linkkiä:',

    // OAuth token created
    'oauth_created_subject'                      => 'Uusi OAuth-asiakas on luotu',
    'oauth_created_body'                         => 'Joku (toivottavasti sinä) loi juuri uuden Firefly III API OAuth asiakkaan käyttäjätilillesi. Sen nimi on ":name" ja sen callback URL on `:url`.',
    'oauth_created_explanation'                  => 'Tämän ohjelman avulla heillä on pääsy **kaikkeen** kirjanpitoosi Firefly III -rajapinnan kautta.',
    'oauth_created_undo'                         => 'Jos tämä et ollut sinä, peruuta tämä asiakas mahdollisimman pian osoitteessa `:url`',

    // reset password
    'reset_pw_subject'                           => 'Salasanasi nollauspyyntö',
    'reset_pw_message'                           => 'Olet saanut sähköpostiisi ohjeet salasanan nollaamisesta. Jos pyysit tätä, niin seuraathan annettuja ohjeita.',
    'reset_pw_instructions'                      => 'Joku yritti nollata salasanasi. Jos olit sinä, seuraa alla olevaa linkkiä tehdäksesi sen.',
    'reset_pw_warning'                           => '**Varmista**, että linkki todella menee siihen Firefly III:een, johon odotat sen menevän!',

    // error
    'error_subject'                              => 'Firefly III:ssa tapahtui virhe',
    'error_intro'                                => 'Firefly III v:version tapahtui virhe: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'Virhe oli tyyppiä ":class".',
    'error_timestamp'                            => 'Virhe tapahtui kello: :time.',
    'error_location'                             => 'Tämä virhe tapahtui tiedostossa "<span style="font-family: monospace;">:file</span>" rivillä :line koodilla :code.',
    'error_user'                                 => 'Virhe tpahtui käyttäjällä #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Virheen tapahtuessa käyttäjä ei ollut kirjautuneena tai käyttäjää ei havaittu.',
    'error_ip'                                   => 'Tähän virheeseen liittyvä IP-osoite on: :ip',
    'error_url'                                  => 'URL on: :url',
    'error_user_agent'                           => 'Käyttäjä-agentti: :userAgent',
    'error_stacktrace'                           => 'The full stacktrace is below. If you think this is a bug in Firefly III, you can forward this message to <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. This can help fix the bug you just encountered.',
    'error_github_html'                          => 'Jos haluat, voit myös avata uuden tiketin <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHubissa</a>.',
    'error_github_text'                          => 'Jos haluat, voit myös avata uuden tiketin osoitteessa https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                     => 'Täydellinen stack trace:',
    'error_headers'                              => 'Seuraavat otsikot voivat myös olla merkityksellisiä:',
    'error_post'                                 => 'This was submitted by the user:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III on luonut uuden tapahtuman|Firefly III on luonut :count uutta tapahtumaa',
    'new_journals_header'                        => 'Firefly III on luonut tapahtuman sinulle. Löydät sen Firefly III -asennuksestasi:|Firefly III on luonut sinulle :count tapahtumaa. Löydät ne Firefly III -asennuksestasi:',

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
    'bill_warning_please_action'                 => 'Suorita asianmukaiset toimet, ole hyvä.',

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
