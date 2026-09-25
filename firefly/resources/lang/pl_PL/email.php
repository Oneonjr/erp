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
    'greeting'                                   => 'Cześć,',
    'closing'                                    => 'Bip bip,',
    'signature'                                  => 'Robot pocztowy Firefly III',
    'footer_ps'                                  => 'PS: Ta wiadomość została wysłana, ponieważ została wywołana przez żądanie z adresu IP :ipAddress .',

    // admin test
    'admin_test_subject'                         => 'Wiadomość testowa z twojej instalacji Firefly III',
    'admin_test_body'                            => 'To jest wiadomość testowa z twojej instancji Firefly III. Została wysłana na :email.',
    'admin_test_message'                         => 'To jest wiadomość testowa z twojej instancji Firefly III, wysłana kanałem ":channel".',
    'admin_test_link'                            => 'The following link should point to your Firefly III installation. It should be correctly adorned with "http" or "https". If not, please set your `APP_URL` environment variable: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Zaproszenie zostało utworzone',
    'invitation_created_body'                    => 'Administrator ":email" utworzył zaproszenie dla użytkownika, które może być użyte przez każdego, kto ma dostęp do adresu e-mail ":invitee". Zaproszenie będzie ważne przez 48 godzin.',
    'invite_user_subject'                        => 'Zostałeś zaproszony do utworzenia konta Firefly III.',
    'invitation_introduction'                    => 'Zostałeś zaproszony do utworzenia konta Firefly III na **:host**. Firefly III jest osobistym, samodzielnie hostowanym menedżerem finansów prywatnych. Wszystkie fajne dzieciaki go używają.',
    'invitation_invited_by'                      => 'Zostałeś zaproszony przez ":admin" i to zaproszenie zostało wysłane do ":invitee". To ty, prawda?',
    'invitation_url'                             => 'Zaproszenie jest ważne przez 48 godzin i można je wykorzystać przez zasurfowanie do [Firefly III](:url). Przyjemnego używania!',

    // new IP
    'login_from_new_ip'                          => 'Nowe logowanie do Firefly III',
    'slack_login_from_new_ip'                    => 'Nowe logowanie do Firefly III z IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III wykrył nowe logowanie na Twoim koncie z nieznanego adresu IP. Jeśli nigdy nie zalogowałeś się z poniższego adresu IP lub minęło ponad sześć miesięcy od ostatniego logowania, Firefly III ostrzeże Cię o tym.',
    'new_ip_warning'                             => 'Jeśli rozpoznajesz ten adres IP lub logowanie, możesz zignorować tę wiadomość. Jeśli nie logowałeś się lub jeśli nie masz pojęcia, o co w tym chodzi, zweryfikuj bezpieczeństwo hasła, zmień je i wyloguj wszystkie inne sesje. Aby to zrobić, przejdź na stronę Profil. Oczywiście masz już włączone 2FA, prawda? Bądź bezpieczny!',
    'ip_address'                                 => 'Adres IP',
    'host_name'                                  => 'Host',
    'date_time'                                  => 'Data i czas',
    'user_agent'                                 => 'Przeglądarka',

    // access token created
    'access_token_created_subject'               => 'Utworzono nowy token dostępu',
    'access_token_created_body'                  => 'Ktoś (mam nadzieję, że Ty) właśnie utworzył nowy token dostępu API Firefly III dla Twojego konta użytkownika.',
    'access_token_created_explanation'           => 'Z tym tokenem można uzyskać dostęp do **wszystkich** Twoich zapisów finansowych za pośrednictwem API Firefly III.',
    'access_token_created_revoke'                => 'Jeśli to nie Ty, unieważnij ten token tak szybko jak to możliwe pod adresem :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Nieznany użytkownik próbował się zalogować',
    'unknown_user_body'                          => 'An unknown user (`:ip`) tried to log in to Firefly III. The email address they used was `:address`.',
    'unknown_user_message'                       => 'The email address they (`:ip`) used was `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III wykrył nieudaną próbę logowania',
    'failed_login_body'                          => 'Firefly III detected that somebody (you?) failed to login with your account `:email`. Please verify that this was you.',
    'failed_login_message'                       => 'A failed login attempt (`:ip`) on your Firefly III account `:email` was detected.',
    'failed_login_warning'                       => 'Jeśli rozpoznajesz ten adres IP lub logowanie, możesz zignorować tę wiadomość. Jeśli nie logowałeś się lub jeśli nie masz pojęcia, o co w tym chodzi, zweryfikuj bezpieczeństwo hasła, zmień je i wyloguj wszystkie inne sesje. Aby to zrobić, przejdź na stronę Profil. Oczywiście masz już włączone 2FA, prawda? Bądź bezpieczny!',

    // registered
    'registered_subject'                         => 'Witaj w Firefly III!',
    'registered_subject_admin'                   => 'Zarejestrował się nowy użytkownik',
    'admin_new_user_registered'                  => 'Zarejestrował się nowy użytkownik. Użytkownik **:email** otrzymał ID użytkownika #:id.',
    'registered_welcome'                         => 'Witaj w [Firefly III](:address). Twoja rejestracja przebiegła pomyślnie, a ten e-mail jest tutaj, aby to potwierdzić. Yay!',
    'registered_pw'                              => 'Jeśli już zapomniałeś swojego hasła, zresetuj je używając [narzędzia do resetowania hasła](:address/password/reset).',
    'registered_help'                            => 'W prawym górnym rogu każdej strony jest ikonka pomocy. Jeśli potrzebujesz pomocy, kliknij ją!',
    'registered_closing'                         => 'Dobrej zabawy!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Resetowanie hasła:',
    'registered_doc_link'                        => 'Dokumentacja:',

    // new version
    'new_version_email_subject'                  => 'Dostępna jest nowa wersja Firefly III',

    // email change
    'email_change_subject'                       => 'Twój adres e-mail Firefly III został zmieniony',
    'email_change_body_to_new'                   => 'Ty lub ktoś z dostępem do Twojego konta Firefly III zmienił Twój adres e-mail. Jeśli spodziewałeś się tej wiadomości, zignoruj ją i usuń.',
    'email_change_body_to_old'                   => 'Ty lub ktoś z dostępem do Twojego konta Firefly III zmienił Twój adres e-mail. Jeśli to nie Ty, ani zmiana nie jest oczekiwana, **musisz** użyć poniższego "cofnij"-linku aby chronić swoje konto!',
    'email_change_ignore'                        => 'Jeśli zainicjowałeś tę zmianę, możesz bezpiecznie zignorować tę wiadomość.',
    'email_change_old'                           => 'Stary adres e-mail to: :email',
    'email_change_new'                           => 'Nowy adres e-mail to: :email',
    'email_change_instructions'                  => 'Nie możesz używać Firefly III, dopóki nie potwierdzisz tej zmiany. Kliknij poniższy link, aby to zrobić.',
    'email_change_undo_link'                     => 'Aby cofnąć zmianę, kliknij ten link:',

    // OAuth token created
    'oauth_created_subject'                      => 'Nowy klient OAuth został utworzony',
    'oauth_created_body'                         => 'Ktoś (mam nadzieję, że Ty) właśnie utworzył nowego klienta API OAuth Firefly III dla Twojego konta użytkownika. Jest oznaczony ":name" i ma zwrotny adres URL `:url`.',
    'oauth_created_explanation'                  => 'Z tym klientem można uzyskać dostęp do **wszystkich** Twoich zapisów finansowych za pośrednictwem API Firefly III.',
    'oauth_created_undo'                         => 'Jeśli to nie Ty, unieważnij tego klienta tak szybko jak to możliwe pod adresem `:url`',

    // reset password
    'reset_pw_subject'                           => 'Żądanie zmiany hasła',
    'reset_pw_message'                           => 'Otrzymałeś instrukcje resetowania hasła w wiadomości e-mail. Jeśli to Ty, postępuj zgodnie z instrukcjami.',
    'reset_pw_instructions'                      => 'Ktoś próbował zresetować hasło. Jeśli to Ty, kliknij poniższy link, aby to zrobić.',
    'reset_pw_warning'                           => '**PROSZĘ** sprawdź, czy link rzeczywiście prowadzi do instancji Firefly III, której oczekiwałeś!',

    // error
    'error_subject'                              => 'Błąd w Firefly III',
    'error_intro'                                => 'Firefly III v:version napotkał błąd: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'Błąd był typu ":class".',
    'error_timestamp'                            => 'Błąd wystąpił o: :time.',
    'error_location'                             => 'Błąd wystąpił w pliku "<span style="font-family: monospace;">:file</span>" linia :line z kodem :code.',
    'error_user'                                 => 'Błąd został napotkany przez użytkownika #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Dla tego błędu nie znaleziono zalogowanego użytkownika lub nie wykryto żadnego użytkownika.',
    'error_ip'                                   => 'Adres IP związany z tym błędem to: :ip',
    'error_url'                                  => 'Adres URL to: :url',
    'error_user_agent'                           => 'Agent użytkownika: :userAgent',
    'error_stacktrace'                           => 'Pełny opis błędu znajduje się poniżej. Jeśli uważasz, że jest to błąd w Firefly III, możesz przesłać tę wiadomość do <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii. rg</a>. To może pomóc naprawić napotkany właśnie błąd.',
    'error_github_html'                          => 'Jeśli wolisz, możesz również otworzyć nowy problem na <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'Jeśli wolisz, możesz również otworzyć nowy problem na https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                     => 'Pełny opis błędu znajduje się poniżej:',
    'error_headers'                              => 'Istotne mogą być również następujące nagłówki:',
    'error_post'                                 => 'To zostało przesłane przez użytkownika:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III stworzył nową transakcję|Firefly III stworzył :count nowych transakcji',
    'new_journals_header'                        => 'Firefly III stworzył dla Ciebie transakcję. Możesz znaleźć ją w Firefly III:|Firefly III stworzył dla Ciebie transakcje :count. Możesz je znaleźć w Firefly III:',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'Masz :count zaległych subskrypcji do opłacenia',
    'subscriptions_overdue_subject_single'       => 'Masz zaległą subskrypcję do opłacenia',
    'subscriptions_overdue_warning_intro_single' => 'Masz jedną subskrypcję do opłacenia. W następujących dniach oczekiwano płatności, ale jeszcze nie dotarła.',
    'subscriptions_overdue_warning_intro_multi'  => 'Masz :count subskrypcji do opłacenia. W następujących dniach oczekiwano płatności, ale jeszcze nie dotarła.',
    'subscriptions_overdue_please_action_single' => 'Być może nie połczono transakcji z tą subskrypcją. W takim przypadku proszę popraw to. Nie otrzymasz kolejnego ostrzeżenia o tej zaległej subskrypcji. Nowe ostrzeżenie zostanie wysłane dla NASTĘPNEJ płatności.',
    'subscriptions_overdue_please_action_multi'  => 'Być może nie połczono transakcji z tymi subskrypcjami. W takim przypadku proszę popraw to. Nie otrzymasz kolejnego ostrzeżenia o tych zaległych subskrypcjach. Nowe ostrzeżenie zostanie wysłane dla NASTĘPNYCH płatności.',
    'subscriptions_overdue_outro'                => 'Jeśli uważasz, że ta wiadomość została wysłana w wyniku błedu, skontaktuj się z deweloperem Firefly III. Dziękujemy za korzystanie z Firefly III.',
    // bill warning
    'bill_warning_subject_end_date'              => 'Twoja subskrypcja ":name" kończy się za :diff dni',
    'bill_warning_subject_now_end_date'          => 'Twoja subskrypcja ":name" kończy się DZIŚ',
    'bill_warning_subject_extension_date'        => 'Twoja subskrypcja ":name" ma zostać przedłużona lub anulowana w ciągu :diff dni',
    'bill_warning_subject_now_extension_date'    => 'Twoja subskrypcja ":name" ma zostać przedłużona lub anulowana DZIŚ',
    'bill_warning_end_date'                      => 'Twoja subskrypcja **":name"** ma datę końcową :date. Ten moment minie za około **:diff dni**.',
    'bill_warning_extension_date'                => 'Twoja subskrypcja **":name"** ma być przedłużona lub anulowana dnia :date. Ten moment minie za około **:diff dni**.',
    'bill_warning_end_date_zero'                 => 'Twoja subskrypcja **":name"** ma datę końcową :date. Ten moment minie **DZIŚ!**',
    'bill_warning_extension_date_zero'           => 'Twoja subskrypcja **":name"** ma być przedłużona lub anulowana dnia :date. Ten moment minie **DZIŚ!**',
    'bill_warning_please_action'                 => 'Proszę podejmij odpowiednie działania.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'Włączyłeś uwierzytelnianie wieloskładnikowe',
    'enabled_mfa_slack'                          => 'Ty (:email) włączyłeś uwierzytelnianie wieloskładnikowe. Czy to nie jest poprawne? Sprawdź swoje ustawienia!',
    'have_enabled_mfa'                           => 'Włączyłeś uwierzytelnianie wieloskładnikowe na koncie Firefly III ":email". Oznacza to, że od teraz musisz użyć aplikacji uwierzytelniającej, aby się zalogować.',
    'enabled_mfa_warning'                        => 'Jeśli nie włączyłeś tego, skontaktuj się z administratorem lub sprawdź dokumentację Firefly III.',

    'disabled_mfa_subject'                       => 'Wyłączyłeś uwierzytelnianie wieloskładnikowe!',
    'disabled_mfa_slack'                         => 'Ty (:email) wyłączyłeś uwierzytelnianie wieloskładnikowe. Czy to nie jest poprawne? Sprawdź swoje ustawienia!',
    'have_disabled_mfa'                          => 'Wyłączyłeś uwierzytelnianie wieloskładnikowe na koncie Firefly III ":email".',
    'disabled_mfa_warning'                       => 'Jeśli nie wyłączyłeś tego, skontaktuj się z administratorem lub sprawdź dokumentację Firefly III.',

    'new_backup_codes_subject'                   => 'Wygenerowałeś nowe kody zapasowe',
    'new_backup_codes_slack'                     => 'Ty (:email) wygenerowałeś nowe kody zapasowe. Mogą one być użyte do zalogowania się do Firefly III. Czy to nie jest poprawne? Sprawdź swoje ustawienia!',
    'new_backup_codes_intro'                     => 'Ty (:email) wygenerowałeś nowe kody zapasowe. Mogą być użyte do zalogowania się do Firefly III, jeśli utracisz dostęp do aplikacji uwierzytelniającej.',
    'new_backup_codes_warning'                   => 'Prosimy o przechowywanie tych kodów w bezpiecznym miejscu. Jeśli je zgubisz nie będziesz mógł zalogować się do Firefly III. Jeśli tego nie zrobiłeś, skontaktuj się z administratorem lub sprawdź dokumentację Firefly III.',

    'used_backup_code_subject'                   => 'Użyłeś kodu zapasowego do logowania',
    'used_backup_code_slack'                     => 'Ty (:email) użyłeś kodu zapasowego do logowania',

    'used_backup_code_intro'                     => 'You (:email) have used a back-up co    de to login to Firefly III. You now have one less back-up code to login with. Please remove it from your list.',
    'used_backup_code_warning'                   => 'Jeśli tego nie zrobiłeś, natychmiast skontaktuj się z administratorem lub sprawdź dokumentację Firefly III.',

    // few left:
    'mfa_few_backups_left_subject'               => 'Pozostało ci tylko tyle kodów zapasowych :count!',
    'mfa_few_backups_left_slack'                 => 'Ty (:email) masz tylko tyle kodów zapasowych: :count!',
    'few_backup_codes_intro'                     => 'Ty (:email) użyłeś większości swoich kodów zapasowych, i pozostało ich tylko :count. Wygeneruj nowe kody tak szybko, jak to możliwe.',
    'few_backup_codes_warning'                   => 'Bez kodów zapasowych nie możesz odzyskać swojego loginu MFA, jeśli stracisz dostęp do generatora kodów.',

    // NO left:
    'mfa_no_backups_left_subject'                => 'Nie masz już kodów zapasowych!',
    'mfa_no_backups_left_slack'                  => 'Ty (:email) nie masz już kodów zapasowych!',
    'no_backup_codes_intro'                      => 'Ty (:email) użyłeś wszystkie swoje kody zapasowe. Wygeneruj nowe kody tak szybko, jak to możliwe.',
    'no_backup_codes_warning'                    => 'Bez kodów zapasowych nie możesz odzyskać swojego loginu MFA, jeśli stracisz dostęp do generatora kodów.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => 'Próbowałeś i nie udało się użyć uwierzytelniania wieloskładnikowego :count razy!',
    'mfa_many_failed_slack'                      => 'Ty (:email) próbowałeś i nie udało ci się użyć uwierzytelniania wieloskładnikowego :count razy. Czy to nie jest poprawne? Sprawdź swoje ustawienia!',
    'mfa_many_failed_attempts_intro'             => 'Ty (:email) próbowałeś użyć kodu uwierzytelnienia wieloskładnikowego :count razy, ale te próby logowania nie powiodły się. Czy na pewno używasz właściwego kodu MFA? Czy na pewno czas na serwerze jest poprawny?',
    'mfa_many_failed_attempts_warning'           => 'Jeśli tego nie zrobiłeś, natychmiast skontaktuj się z administratorem lub sprawdź dokumentację Firefly III.',
];
