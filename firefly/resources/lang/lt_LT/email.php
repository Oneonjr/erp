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
    'greeting'                                   => 'Sveiki,',
    'closing'                                    => 'Pyptelėjimas,',
    'signature'                                  => '„Firefly III“ pašto robotas',
    'footer_ps'                                  => 'PS: Šis pranešimas buvo išsiųstas, nes jį suaktyvino užklausa iš IP :ipAddress.',

    // admin test
    'admin_test_subject'                         => 'Bandomasis pranešimas iš „Firefly III“ diegimo',
    'admin_test_body'                            => 'Tai bandomasis pranešimas iš jūsų „Firefly III“ pavyzdzio. Jis buvo išsiųstas adresu :email.',
    'admin_test_message'                         => 'This is a test message from your Firefly III instance over channel ":channel".',
    'admin_test_link'                            => 'The following link should point to your Firefly III installation. It should be correctly adorned with "http" or "https". If not, please set your `APP_URL` environment variable: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Kvietimas sukurtas',
    'invitation_created_body'                    => 'Administratoriaus vartotojas ":email" sukūrė vartotojo kvietimą, kurį gali naudoti visi, esantys už el. pašto adreso ":invitee". Kvietimas galios 48 val.',
    'invite_user_subject'                        => 'Buvote pakviesti susikurti Firefly III paskyrą.',
    'invitation_introduction'                    => 'Buvote pakviesti susikurti Firefly III paskyrą **:host**. Firefly III yra asmeninis, savarankiška, privatus asmeninių finansų vadovas. Visi šaunūs vaikai tuo naudojasi.',
    'invitation_invited_by'                      => 'Jus pakvietė ":admin" ir šis kvietimas išsiųstas ":invitee". Tai tu, tiesa?',
    'invitation_url'                             => 'Kvietimas galioja 48 valandas ir gali būti panauidotas naršant [Firefly III] (:url). Mėgautis!',

    // new IP
    'login_from_new_ip'                          => 'Naujas prisijungimas prie Firefly III',
    'slack_login_from_new_ip'                    => 'Naujas Firefly III prisijungimas iš IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III aptiko naują prisijungimą prie jūsų paskyros iš nežinomo IP adreso. Jei niekada neprisijungėte naudodami toliau pateiktą IP adresą arba tai buvo daugiau nei prieš šešis mėnesius, Firefly III jus įspės.',
    'new_ip_warning'                             => 'Jei atpažįstate šį IP adresą arba prisijungimo duomenis, galite nepaisyti šio pranešimo. Jei neprisijungėte arba neįsivaizduojate, apie ką tai yra, patikrinkite slaptažodžio saugumą, pakeiskite jį ir atsijunkite nuo visų kitų seansų. Norėdami tai padaryti, eikite į savo profilio puslapį. Žinoma, jūs jau įjungėte 2FA, tiesa? Lik saugus!',
    'ip_address'                                 => 'IP adresas',
    'host_name'                                  => 'Serveris',
    'date_time'                                  => 'Data ir laikas',
    'user_agent'                                 => 'Browser',

    // access token created
    'access_token_created_subject'               => 'Buvo sukurtas naujas prieigos raktas',
    'access_token_created_body'                  => 'Kažkas (tikiuosi, jūs) ką tik sukūrė naują Firefly III API prieigos raktą jūsų vartotojo paskyrai.',
    'access_token_created_explanation'           => 'Su šiuo prieigos raktu jie gali pasiekti **visus** jūsų finansinius įrašus per „Firefly III“ API.',
    'access_token_created_revoke'                => 'Jei tai buvote ne jūs, kuo greičiau atšaukite šį prieigos raktą adresu :url',

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
    'registered_subject'                         => 'Sveiki atvykę į Firefly III!',
    'registered_subject_admin'                   => 'Užsiregistravo naujas vartotojas',
    'admin_new_user_registered'                  => 'Užsiregistravo naujas vartotojas. Vartotojui **:email. paštas** buvo suteiktas vartotojo ID #:id.',
    'registered_welcome'                         => 'Sveiki atvykę į [Firefly III](:address). Jūsų registracija pavyko, o šis el. laiškas skirtas tai patvirtinti. Valio!',
    'registered_pw'                              => 'Jei jau pamiršote slaptažodį, iš naujo nustatykite jį naudodami [slaptažodžio nustatymo iš naujo įrankį] (:address/slaptažodis/atstatyti).',
    'registered_help'                            => 'Viršutiniame dešiniajame kiekvieno puslapio kampe yra pagalbos piktograma. Jei reikia pagalbos, spustelėkite ją!',
    'registered_closing'                         => 'Mėgaukitės!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Slaptažodžio atkūrimas:',
    'registered_doc_link'                        => 'Dokumentacija:',

    // new version
    'new_version_email_subject'                  => 'Yra nauja Firefly III versija',

    // email change
    'email_change_subject'                       => 'Jūsų Firefly III el. pašto adresas pasikeitė',
    'email_change_body_to_new'                   => 'Jūs arba kitas asmuo, turintis prieigą prie jūsų Firefly III paskyros, pakeitė jūsų el. pašto adresą. Jei nesitikėjote šio pranešimo, nekreipkite dėmesio į jį ir ištrinkite.',
    'email_change_body_to_old'                   => 'Jūs arba kitas asmuo, turintis prieigą prie jūsų Firefly III paskyros, pakeitė jūsų el. pašto adresą. Jei nesitikėjote, kad taip nutiks, **privalote** paspausti toliau esančią nuorodą „anuliuoti“, kad apsaugotumėte savo paskyrą!',
    'email_change_ignore'                        => 'Jei inicijavote šį pakeitimą, galite saugiai nepaisyti šio pranešimo.',
    'email_change_old'                           => '33 / 5,000
Senasis el. pašto adresas buvo: :email',
    'email_change_new'                           => 'Naujasis el. pašto adresas yra: **:email**',
    'email_change_instructions'                  => 'Negalite naudoti „Firefly III“, kol nepatvirtinsite šio pakeitimo. Norėdami tai padaryti, spustelėkite toliau pateiktą nuorodą.',
    'email_change_undo_link'                     => 'Norėdami anuliuoti pakeitimą, spustelėkite šią nuorodą:',

    // OAuth token created
    'oauth_created_subject'                      => 'Sukurtas naujas „OAuth“ klientas',
    'oauth_created_body'                         => 'Kažkas (tikiuosi, jūs) ką tik sukūrė naują Firefly III API OAuth klientą jūsų vartotojo paskyrai. Jis pažymėtas „:name“ ir turi atgalinio skambinimo URL „:url“.',
    'oauth_created_explanation'                  => 'Su šiuo klientu jie gali pasiekti **all** jūsų finansinius įrašus per Firefly III API.',
    'oauth_created_undo'                         => 'Jei tai buvote ne jūs, kuo greičiau atšaukite šį klientą adresu `:url\'',

    // reset password
    'reset_pw_subject'                           => 'Jūsų slaptažodžio nustatymo iš naujo užklausa',
    'reset_pw_message'                           => 'You have received password reset instructions in your email. If this was you, please follow the instructions.',
    'reset_pw_instructions'                      => 'Kažkas bandė iš naujo nustatyti slaptažodį. Jei tai buvote jūs, spustelėkite toliau pateiktą nuorodą.',
    'reset_pw_warning'                           => '**PRAŠOME** patikrinti, ar nuoroda iš tikrųjų nukreipiama į „Firefly III“, kurį tikitės!',

    // error
    'error_subject'                              => 'Rasta klaida Firefly III',
    'error_intro'                                => '„Firefly III v:version“ įvyko klaida: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'Klaida buvo „:class“ tipo.',
    'error_timestamp'                            => 'Klaida įvyko: :time.',
    'error_location'                             => 'Ši klaida įvyko faile „<span style="font-family: monospace;">:file</span>“ eilutėje :line su kodu :code.',
    'error_user'                                 => 'Su klaida susidūrė naudotojas #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Dėl šios klaidos nebuvo prisijungęs vartotojas arba joks vartotojas nebuvo aptiktas.',
    'error_ip'                                   => 'Su šia klaida susijęs IP adresas yra: :ip',
    'error_url'                                  => 'URL yra: :url',
    'error_user_agent'                           => 'Vartotojo agentas: :userAgent',
    'error_stacktrace'                           => 'The full stacktrace is below. If you think this is a bug in Firefly III, you can forward this message to <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. This can help fix the bug you just encountered.',
    'error_github_html'                          => 'Jei norite, taip pat galite atidaryti naują leidimą <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'Jei norite, taip pat galite atidaryti naują numerį adresu https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                     => 'Visas įrašai yra žemiau:',
    'error_headers'                              => 'Taip pat gali būti svarbios šios antraštės:',
    'error_post'                                 => 'Tai pateikė vartotojas:',

    // report new journals
    'new_journals_subject'                       => '„Firefly III“ sukūrė naują operaciją | „Firefly III“ sukūrė: :count naujas operacijas',
    'new_journals_header'                        => 'Firefly III sukūrė jums sandorį. Jį galite rasti savo „Firefly III“ instaliacijoje:|Firefly III sukūrė jums :count operacijas. Juos galite rasti „Firefly III“ instaliacijoje:',

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
    'bill_warning_please_action'                 => 'Prašome imtis atitinkamų veiksmų.',

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
