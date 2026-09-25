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
    'greeting'                                   => 'Dobrý den,',
    'closing'                                    => 'Píp píp,',
    'signature'                                  => 'E-mailový robot Firefly III',
    'footer_ps'                                  => 'PS: Tato zpráva byla odeslána, protože ji vyvolala žádost z IP adresy :ipAddress.',

    // admin test
    'admin_test_subject'                         => 'Testovací zpráva z vaší instalace Firefly III',
    'admin_test_body'                            => 'Toto je testovací zpráva z instance Firefly III. Byla odeslána na :email.',
    'admin_test_message'                         => 'This is a test message from your Firefly III instance over channel ":channel".',
    'admin_test_link'                            => 'The following link should point to your Firefly III installation. It should be correctly adorned with "http" or "https". If not, please set your `APP_URL` environment variable: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Pozvánka byla vytvořena',
    'invitation_created_body'                    => 'Admin uživatel ":email" vytvořil uživatelskou pozvánku, kterou může použít kdokoliv, kdo stojí za e-mailovou adresou ":invitee". Pozvánka bude platná 48 hodin.',
    'invite_user_subject'                        => 'Byli jste pozváni k vytvoření účtu Firefly III.',
    'invitation_introduction'                    => 'Byli jste pozváni k vytvoření účtu Firefly III na **:host**. Firefly III je osobní, vlastní soukromý správce financí.',
    'invitation_invited_by'                      => 'Byli jste pozváni ":admin" a tato pozvánka byla odeslána na ":invitee". To jste vy, že?',
    'invitation_url'                             => 'Pozvánka je platná 48 hodin a může být využita kliknutím na [Firefly III](:url). Užívejte si ji!',

    // new IP
    'login_from_new_ip'                          => 'Nové přihlášení do Firefly III',
    'slack_login_from_new_ip'                    => 'Nové přihlášení Firefly III z IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III zjistil nové přihlášení na Vašem účtu z neznámé IP adresy. Pokud jste se nikdy nepřihlásili z IP adresy níže, nebo to bylo před více než šesti měsíci, Firefly III Vás upozorní.',
    'new_ip_warning'                             => 'Pokud rozpoznáte tuto IP adresu nebo přihlašovací jméno, můžete tuto zprávu ignorovat. Pokud jste se nepřihlásili, nebo jestli nemáte tušení, o co jde, ověřte zabezpečení hesla, změňte ho a odhlásíte všechny ostatní relace. Chcete-li to provést, jděte na stránku svého profilu. Samozřejmě už máte dvoufaktorové přihlašování povoleno, že? Zůstaňte v bezpečí!',
    'ip_address'                                 => 'IP adresa',
    'host_name'                                  => 'Hostitel',
    'date_time'                                  => 'Datum + čas',
    'user_agent'                                 => 'Prohlížeč',

    // access token created
    'access_token_created_subject'               => 'Byl vytvořen nový přístupový token',
    'access_token_created_body'                  => 'Někdo (doufejme, že vy) právě vytvořil nový přístupový Token Firefly III API pro váš uživatelský účet.',
    'access_token_created_explanation'           => 'S tímto tokenem má přístup ke **všem** vašim finančním záznamům skrze API Firefly III.',
    'access_token_created_revoke'                => 'Pokud jste to nebyli vy, prosím zrušte tento token co nejdříve na adrese :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'An unknown user tried to log in',
    'unknown_user_body'                          => 'Neznámý uživatel (`:ip`) se pokusil přihlásit do Firefly III. E-mailová adresa, kterou použili, byla `:address`.',
    'unknown_user_message'                       => 'The email address they (`:ip`) used was `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III detected a failed login attempt',
    'failed_login_body'                          => 'Firefly III detected that somebody (you?) failed to login with your account `:email`. Please verify that this was you.',
    'failed_login_message'                       => 'A failed login attempt (`:ip`) on your Firefly III account `:email` was detected.',
    'failed_login_warning'                       => 'If you recognize this IP address or the login attempt, you can ignore this message. If you didn\'t try to login, of if you have no idea what this is about, verify your password security, change it, and log out all other sessions. To do this, go to your profile page. Of course you have 2FA enabled already, right? Stay safe!',

    // registered
    'registered_subject'                         => 'Vítejte ve Firefly III!',
    'registered_subject_admin'                   => 'Nový uživatel se zaregistroval',
    'admin_new_user_registered'                  => 'Nový uživatel se zaregistroval. Uživatel **:email** dostal uživateleské ID #:id.',
    'registered_welcome'                         => 'Vítejte v [Firefly III](:address). Vaše registrace proběhla a tento e-mail je zde pro potvrzení. Jupí!',
    'registered_pw'                              => 'If you have forgotten your password already, please reset it using [the password reset tool](:address/password/reset).',
    'registered_help'                            => 'V pravém horním rohu každé stránky je ikona nápovědy. Pokud potřebujete pomoc, klikněte na ní!',
    'registered_closing'                         => 'Užívejte!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Obnovení hesla:',
    'registered_doc_link'                        => 'Dokumentace:',

    // new version
    'new_version_email_subject'                  => 'Je dostupná nová verze Firefly III',

    // email change
    'email_change_subject'                       => 'Vaše Firefly III e-mailová adresa se změnila',
    'email_change_body_to_new'                   => 'Vy nebo někdo s přístupem k vašemu účtu Firefly III změnil vaši e-mailovou adresu. Pokud jste neočekávali tuto zprávu, prosím ignorujte a odstraňte ji.',
    'email_change_body_to_old'                   => 'You or somebody with access to your Firefly III account has changed your email address. If you did not expect this to happen, you **must** follow the "undo"-link below to protect your account!',
    'email_change_ignore'                        => 'Pokud jste iniciovali tuto změnu, můžete tuto zprávu klidně ignorovat.',
    'email_change_old'                           => 'Stará e-mailová adresa byla: :email',
    'email_change_new'                           => 'Nová e-mailová adresa je: :email',
    'email_change_instructions'                  => 'Dokud nepotvrdíte tuto změnu, tak nemůžete používat Firefly III. Postupujte prosím kliknutím na níže uvedený odkaz.',
    'email_change_undo_link'                     => 'Změnu vrátíte zpět kliknutím na odkaz:',

    // OAuth token created
    'oauth_created_subject'                      => 'Byl vytvořen nový OAuth klient',
    'oauth_created_body'                         => 'Někdo (snad vy) vytvořil Firefly III API OAuth Client pro váš uživatelský účet. Jmenuje se ":name" a jeho Callback URL je `:url`.',
    'oauth_created_explanation'                  => 'S tímto klientem máte přístup k **všem** finančním údajům přes Firefly III API.',
    'oauth_created_undo'                         => 'Pokud jste to nebyli vy, revokujte tento klient co nejdříve na `:url`',

    // reset password
    'reset_pw_subject'                           => 'Požadavek na obnovení Vašeho hesla',
    'reset_pw_message'                           => 'You have received password reset instructions in your email. If this was you, please follow the instructions.',
    'reset_pw_instructions'                      => 'Někdo se pokusil obnovit Vaše heslo. Pokud jste to byli Vy, postupujte prosím podle níže uvedeného odkazu.',
    'reset_pw_warning'                           => '**PLEASE** verify that the link actually goes to the Firefly III you expect it to go!',

    // error
    'error_subject'                              => 'Zachycená chyba ve Firefly III',
    'error_intro'                                => 'Firefly III v:version narazil na chybu: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'Třída chyby „:class“.',
    'error_timestamp'                            => 'K chybě došlo v: :time.',
    'error_location'                             => 'Tato chyba se vyskytla v souboru "<span style="font-family: monospace;">:file</span>" na řádku :line s kódem :code.',
    'error_user'                                 => 'Chyba se vyskytla u uživatele #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Pro tuto chybu nebyl přihlášen žádný uživatel nebo nebyl žádný uživatelů zjištěn.',
    'error_ip'                                   => 'IP adresa související s touto chybou je: :ip',
    'error_url'                                  => 'Adresa URL je: :url',
    'error_user_agent'                           => 'User agent: :userAgent',
    'error_stacktrace'                           => 'The full stacktrace is below. If you think this is a bug in Firefly III, you can forward this message to <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. This can help fix the bug you just encountered.',
    'error_github_html'                          => 'Pokud chcete, můžete vytvořit hlášení problému na <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'Pokud chcete, můžete vytvořit hlášení problému na https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                     => 'Celý zásobník je níže:',
    'error_headers'                              => 'The following headers may also be relevant:',
    'error_post'                                 => 'This was submitted by the user:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III vytvořil novou transakci|Firefly III vytvořil :count nových transakcí',
    'new_journals_header'                        => 'Firefly III pro Vás vytvořil transakci. Můžete ji najít ve vaší instalaci Firefly III:|Firefly III vytvořil :count transakcí. Najdete je ve vaší instalaci Firefly III:',

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
    'bill_warning_please_action'                 => 'Přijměte prosím odpovídající opatření.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'Zapnuli jste vícefaktorové ověření',
    'enabled_mfa_slack'                          => 'Váš email (:email) má zaplé vícefaktorové ověření. Podívejte se do nastavení.',
    'have_enabled_mfa'                           => 'Zapnutli jste vícefaktoré ověření pro váš Firefly III účet ":email". Odteď budete pro přihlášení muset použít aplikaci a zadat ověřovací kód.',
    'enabled_mfa_warning'                        => 'If you did not enable this, please contact your administrator immediately or check out the Firefly III documentation.',

    'disabled_mfa_subject'                       => 'You have disabled multi-factor authentication!',
    'disabled_mfa_slack'                         => 'You (:email) have disabled multi-factor authentication. Is this not correct? Check your settings!',
    'have_disabled_mfa'                          => 'You have disabled multi-factor authentication on your Firefly III account ":email".',
    'disabled_mfa_warning'                       => 'If you did not disable this, please contact your administrator immediately or check out the Firefly III documentation.',

    'new_backup_codes_subject'                   => 'You have generated new back-up codes',
    'new_backup_codes_slack'                     => 'You (:email) have generated new back-up codes. These can be used to login to Firefly III. Is this not correct? Check your settings!',
    'new_backup_codes_intro'                     => 'You (:email) have generated new back-up codes. These can be used to login to Firefly III if you lose access to your authenticator app.',
    'new_backup_codes_warning'                   => 'Prosím, zkontrolujte že jsou tyto kódy v bezpečí. Bez nich nebude možné se přihlásit. Pokud jste o to nežádali, okamžitě kontaktujte administrátora nebo zkontrolujte dokumentaci Firefly III.',

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
