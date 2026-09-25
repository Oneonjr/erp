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
    'greeting'                                   => 'Hej,',
    'closing'                                    => 'Pip boop,',
    'signature'                                  => 'Firefly III Epost Robot',
    'footer_ps'                                  => 'P.S. Detta meddelande skickades efter en begäran från IP :ipAddress begärde det.',

    // admin test
    'admin_test_subject'                         => 'Ett testmeddelande från din Firefly III-installation',
    'admin_test_body'                            => 'Detta är ett testmeddelande från din Firefly III-instans. Det skickades till :email.',
    'admin_test_message'                         => 'Detta är ett testmeddelande från din Firefly III-instans. Det skickades till :email.',
    'admin_test_link'                            => 'The following link should point to your Firefly III installation. It should be correctly adorned with "http" or "https". If not, please set your `APP_URL` environment variable: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'En inbjudan har skapats',
    'invitation_created_body'                    => 'Administratören ":email" skapade en användare som kan användas av vem som helst, med epost-adress ":invitee". Inbjudan är aktiv i 48 timmar.',
    'invite_user_subject'                        => '',
    'invitation_introduction'                    => 'Du har blivit inbjuden att skapa ett Firefly III konto på **:host**. Firefly III är ett själv-hostat privat ekonomisystem, som allt innefolk använder!',
    'invitation_invited_by'                      => 'You\'ve been invited by ":admin" and this invitation was sent to ":invitee". That\'s you, right?',
    'invitation_url'                             => 'The invitation is valid for 48 hours and can be redeemed by surfing to [Firefly III](:url). Enjoy!',

    // new IP
    'login_from_new_ip'                          => 'Ny inloggning för Firefly III',
    'slack_login_from_new_ip'                    => 'New Firefly III login from IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III upptäckte en ny inloggning på ditt konto från en okänd IP-adress. Om du aldrig loggat in från IP-adressen nedan, eller om det har varit mer än sex månader sedan, kommer Firefly III att varna dig.',
    'new_ip_warning'                             => 'Om du känner igen denna IP-adress eller inloggningen kan du ignorera detta meddelande. Om det inte var du, eller om du inte har någon aning om vad detta handlar om, verifiera din lösenordssäkerhet, ändra den och logga ut alla andra sessioner. För att göra detta, gå till din profilsida. Naturligtvis har du redan 2FA aktiverat, eller hur? Håll dig säker!',
    'ip_address'                                 => 'IP-adress',
    'host_name'                                  => 'Värd',
    'date_time'                                  => 'Datum + tid',
    'user_agent'                                 => 'Webbläsare',

    // access token created
    'access_token_created_subject'               => 'En ny åtkomsttoken skapades',
    'access_token_created_body'                  => 'Någon (förhoppningsvis du) har just skapat en ny Firefly III API Access-token för ditt användarkonto.',
    'access_token_created_explanation'           => 'Med denna token, kan de få tillgång till <strong>alla</strong> dina finansiella poster genom Firefly III API.',
    'access_token_created_revoke'                => 'Om detta inte var du, vänligen återkalla denna token så snart som möjligt på :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'En okänd användare försökte logga in',
    'unknown_user_body'                          => 'An unknown user (`:ip`) tried to log in to Firefly III. The email address they used was `:address`.',
    'unknown_user_message'                       => 'The email address they (`:ip`) used was `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III detected a failed login attempt',
    'failed_login_body'                          => 'Firefly III detected that somebody (you?) failed to login with your account `:email`. Please verify that this was you.',
    'failed_login_message'                       => 'A failed login attempt (`:ip`) on your Firefly III account `:email` was detected.',
    'failed_login_warning'                       => 'Om du känner till IP-adressen eller inloggningsförsöket kan du bortse för detta meddelande. Om det inte var du som försökte logga in eller om du inte vet vad detta handlar om, kolla upp att ditt lösenord är säkert, ändra det och logga ut från alla instanser av Firefly III. Detta gör du på din "profil"-sida. Självklart har du redan aktiverat 2FA? Eller hur?',

    // registered
    'registered_subject'                         => 'Välkommen till Firefly III!',
    'registered_subject_admin'                   => 'En ny användare har registrerat sig',
    'admin_new_user_registered'                  => 'A new user has registered. User **:email** was given user ID #:id.',
    'registered_welcome'                         => '',
    'registered_pw'                              => 'Om du redan har glömt ditt lösenord, vänligen återställ det med <a style="color:#337ab7" href=":address/password/reset">lösenordsåterställningsverktyget</a>.',
    'registered_help'                            => 'Det finns en hjälp-ikon i det övre högra hörnet av varje sida. Om du behöver hjälp, klicka på den!',
    'registered_closing'                         => 'Ha det så kul!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Återställ lösenord:',
    'registered_doc_link'                        => 'Dokumentation:',

    // new version
    'new_version_email_subject'                  => 'En ny version av Firefly III finns tillgänglig',

    // email change
    'email_change_subject'                       => 'Din Firefly III e-postadress har ändrats',
    'email_change_body_to_new'                   => 'Du eller någon med åtkomst till ditt Firefly III konto har ändrat din e-postadress. Om du inte förväntade dig detta meddelande, vänligen ignorera och ta bort det.',
    'email_change_body_to_old'                   => '',
    'email_change_ignore'                        => 'Om du startade denna ändring kan du säkert ignorera detta meddelande.',
    'email_change_old'                           => 'Den gamla e-postadressen var: :email',
    'email_change_new'                           => 'Den nya e-postadressen är: :email',
    'email_change_instructions'                  => 'Du kan inte använda Firefly III förrän du bekräftar denna ändring. Följ länken nedan för att göra det.',
    'email_change_undo_link'                     => 'För att ångra ändringen, följ denna länk:',

    // OAuth token created
    'oauth_created_subject'                      => 'En ny OAuth klient har skapats',
    'oauth_created_body'                         => 'Somebody (hopefully you) just created a new Firefly III API OAuth Client for your user account. It\'s labeled ":name" and has callback URL `:url`.',
    'oauth_created_explanation'                  => 'With this client, they can access **all** of your financial records through the Firefly III API.',
    'oauth_created_undo'                         => 'If this wasn\'t you, please revoke this client as soon as possible at `:url`',

    // reset password
    'reset_pw_subject'                           => 'Begäran om lösenordåterställning',
    'reset_pw_message'                           => 'You have received password reset instructions in your email. If this was you, please follow the instructions.',
    'reset_pw_instructions'                      => 'Någon försökte återställa ditt lösenord. Om det var du, följ länken nedan för att göra det.',
    'reset_pw_warning'                           => '**PLEASE** verify that the link actually goes to the Firefly III you expect it to go!',

    // error
    'error_subject'                              => 'Hittade ett fel i Firefly III',
    'error_intro'                                => 'Firefly III v:version stötte på ett fel: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'Felet var av typen ":class".',
    'error_timestamp'                            => 'Felet inträffade vid/på: :time.',
    'error_location'                             => 'Detta fel inträffade i filen "<span style="font-family: monospace;">:file</span>" på rad :line med kod :code.',
    'error_user'                                 => 'Felet påträffades av användaren #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Det fanns ingen användare inloggad för detta fel eller så upptäcktes ingen användare.',
    'error_ip'                                   => 'IP-adressen relaterad till detta fel är: :ip',
    'error_url'                                  => 'URL är: :url',
    'error_user_agent'                           => 'Användaragent: :userAgent',
    'error_stacktrace'                           => 'The full stacktrace is below. If you think this is a bug in Firefly III, you can forward this message to <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. This can help fix the bug you just encountered.',
    'error_github_html'                          => 'Om du föredrar kan du även öppna ett nytt ärende på <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'Om du föredrar kan du även öppna ett nytt ärende på https://github.com/firefly-ii/firefly-ii/issues.',
    'error_stacktrace_below'                     => 'Komplett stacktrace nedan:',
    'error_headers'                              => 'The following headers may also be relevant:',
    'error_post'                                 => 'This was submitted by the user:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III har skapat en ny transaktion|Firefly III har skapat :count nya transaktioner',
    'new_journals_header'                        => 'Firefly III har skapat en transaktion åt dig. Du hittar den i din Firefly III-installation:|Firefly III har skapat :count transaktioner åt dig. Du hittar dem i din Firefly III-installation:',

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
    'bill_warning_please_action'                 => 'Please take the appropriate action.',

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
