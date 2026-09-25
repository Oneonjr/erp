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
    'greeting'                                   => 'Привіт,',
    'closing'                                    => 'Біп-буп,',
    'signature'                                  => 'Поштовий робот Firefly III',
    'footer_ps'                                  => 'P.S. Це повідомлення надіслано, тому що його ініціював запит з IP-адреси :ipAddress.',

    // admin test
    'admin_test_subject'                         => 'Тестове повідомлення з вашого екземпляра Firefly III',
    'admin_test_body'                            => 'Це тестове повідомлення з вашого екземпляра Firefly III. Його надіслано на :email.',
    'admin_test_message'                         => 'Це тестове повідомлення з вашого екземпляра Firefly III через канал ":channel".',
    'admin_test_link'                            => 'Наведене посилання має вести на ваш екземпляр Firefly III та починатися з правильного "http" або "https". Якщо це не так, задайте змінну середовища `APP_URL`: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Запрошення створено',
    'invitation_created_body'                    => 'Адміністратор ":email" створив запрошення, яким може скористатися власник адреси електронної пошти ":invitee". Запрошення дійсне 48 годин.',
    'invite_user_subject'                        => 'Вас запросили створити обліковий запис Firefly III.',
    'invitation_introduction'                    => 'Вас запросили створити обліковий запис Firefly III на **:host**. Firefly III — це персональний приватний менеджер фінансів, який розміщується на власному сервері. Ним користуються всі круті.',
    'invitation_invited_by'                      => 'Вас запросив(-ла) ":admin", і це запрошення надіслано на ":invitee". Це ж ви, правда?',
    'invitation_url'                             => 'Запрошення дійсне 48 годин; щоб ним скористатися, перейдіть на [Firefly III](:url). Приємного користування!',

    // new IP
    'login_from_new_ip'                          => 'Новий вхід у Firefly III',
    'slack_login_from_new_ip'                    => 'Новий вхід у Firefly III з IP-адреси :ip (:host)',
    'new_ip_body'                                => 'Firefly III виявив новий вхід до вашого облікового запису з невідомої IP-адреси. Firefly III попереджає, якщо ви ніколи не входили з наведеної нижче IP-адреси або востаннє входили з неї понад шість місяців тому.',
    'new_ip_warning'                             => 'Якщо ви впізнаєте цю IP-адресу або цей вхід, можете проігнорувати це повідомлення. Якщо ви не входили або не розумієте, про що йдеться, перевірте надійність свого пароля, змініть його та завершіть усі інші сеанси. Для цього перейдіть на сторінку профілю. Ви ж уже ввімкнули двофакторну автентифікацію, правда? Бережіть себе!',
    'ip_address'                                 => 'IP-адреса',
    'host_name'                                  => 'Хост',
    'date_time'                                  => 'Дата + час',
    'user_agent'                                 => 'Браузер',

    // access token created
    'access_token_created_subject'               => 'Створено новий токен доступу',
    'access_token_created_body'                  => 'Хтось (сподіваюся, ви) щойно створив новий токен доступу Firefly III API для вашого облікового запису.',
    'access_token_created_explanation'           => 'Цей токен надає доступ до **всіх** ваших фінансових записів через API Firefly III.',
    'access_token_created_revoke'                => 'Якщо це були не ви, якнайшвидше відкличте цей токен за адресою :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Невідомий користувач намагався увійти',
    'unknown_user_body'                          => 'Невідомий користувач (`:ip`) намагався увійти у Firefly III. Було використано адресу електронної пошти `:address`.',
    'unknown_user_message'                       => 'Було використано (`:ip`) адресу електронної пошти `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III виявив невдалу спробу входу',
    'failed_login_body'                          => 'Firefly III виявив, що хтось (ви?) невдало намагався увійти у ваш обліковий запис `:email`. Перевірте, чи це були ви.',
    'failed_login_message'                       => 'Виявлено невдалу спробу входу (`:ip`) у ваш обліковий запис Firefly III `:email`.',
    'failed_login_warning'                       => 'Якщо ви впізнаєте цю IP-адресу або цю спробу входу, можете проігнорувати це повідомлення. Якщо ви не намагалися увійти або не розумієте, про що йдеться, перевірте надійність свого пароля, змініть його та завершіть усі інші сеанси. Для цього перейдіть на сторінку профілю. Ви ж уже ввімкнули двофакторну автентифікацію, правда? Бережіть себе!',

    // registered
    'registered_subject'                         => 'Ласкаво просимо у Firefly III!',
    'registered_subject_admin'                   => 'Зареєструвався новий користувач',
    'admin_new_user_registered'                  => 'Зареєструвався новий користувач. Користувач **:email** отримав ідентифікатор #:id.',
    'registered_welcome'                         => 'Вітаємо у [Firefly III](:address). Ваша реєстрація пройшла успішно, і цей лист це підтверджує. Ура!',
    'registered_pw'                              => 'Якщо ви вже забули пароль, скиньте його за допомогою [засобу скидання пароля](:address/password/reset).',
    'registered_help'                            => 'У правому верхньому куті кожної сторінки є піктограма довідки. Якщо потрібна допомога, натисніть її!',
    'registered_closing'                         => 'Насолоджуйтесь!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Скидання пароля:',
    'registered_doc_link'                        => 'Документація:',

    // new version
    'new_version_email_subject'                  => 'Доступна нова версія Firefly III',

    // email change
    'email_change_subject'                       => 'Вашу адресу електронної пошти у Firefly III змінено',
    'email_change_body_to_new'                   => 'Ви або хтось із доступом до вашого облікового запису Firefly III змінили вашу адресу електронної пошти. Якщо ви не очікували цього повідомлення, проігноруйте й видаліть його.',
    'email_change_body_to_old'                   => 'Ви або хтось із доступом до вашого облікового запису Firefly III змінили вашу адресу електронної пошти. Якщо ви цього не очікували, ви **обов\'язково** маєте перейти за посиланням «скасувати» нижче, щоб захистити свій обліковий запис!',
    'email_change_ignore'                        => 'Якщо цю зміну ініціювали ви, можете спокійно проігнорувати це повідомлення.',
    'email_change_old'                           => 'Стара адреса електронної пошти: :email',
    'email_change_new'                           => 'Нова адреса електронної пошти: :email',
    'email_change_instructions'                  => 'Ви не зможете користуватися Firefly III, доки не підтвердите цю зміну. Для цього перейдіть за посиланням нижче.',
    'email_change_undo_link'                     => 'Щоб скасувати зміну, перейдіть за цим посиланням:',

    // OAuth token created
    'oauth_created_subject'                      => 'Створено новий OAuth-клієнт',
    'oauth_created_body'                         => 'Хтось (сподіваємося, ви) щойно створив новий OAuth-клієнт API Firefly III для вашого облікового запису. Його назва ":name", URL-адреса зворотного виклику `:url`.',
    'oauth_created_explanation'                  => 'Цей клієнт надає доступ до **всіх** ваших фінансових записів через API Firefly III.',
    'oauth_created_undo'                         => 'Якщо це були не ви, якнайшвидше відкличте цей клієнт за адресою `:url`',

    // reset password
    'reset_pw_subject'                           => 'Ваш запит на скидання пароля',
    'reset_pw_message'                           => 'Інструкції зі скидання пароля надіслано на вашу електронну пошту. Якщо це були ви, дотримуйтеся інструкцій.',
    'reset_pw_instructions'                      => 'Хтось намагався скинути ваш пароль. Якщо це були ви, перейдіть за посиланням нижче.',
    'reset_pw_warning'                           => '**ОБОВ\'ЯЗКОВО** переконайтеся, що посилання справді веде на той Firefly III, який ви очікуєте!',

    // error
    'error_subject'                              => 'У Firefly III перехоплено помилку',
    'error_intro'                                => 'У Firefly III v:version сталася помилка: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'Тип помилки: ":class".',
    'error_timestamp'                            => 'Помилка сталася: :time.',
    'error_location'                             => 'Ця помилка сталася у файлі "<span style="font-family: monospace;">:file</span>" у рядку :line з кодом :code.',
    'error_user'                                 => 'Помилку отримав користувач #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Під час цієї помилки жоден користувач не був у системі, або користувача не вдалося визначити.',
    'error_ip'                                   => 'IP-адреса, пов\'язана з цією помилкою: :ip',
    'error_url'                                  => 'URL-адреса: :url',
    'error_user_agent'                           => 'Клієнт (user agent): :userAgent',
    'error_stacktrace'                           => 'Повне трасування стека наведено нижче. Якщо ви вважаєте, що це помилка у Firefly III, можете переслати це повідомлення на <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. Це допоможе виправити помилку, з якою ви щойно зіткнулися.',
    'error_github_html'                          => 'За бажанням ви також можете створити нове звернення на <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'За бажанням ви також можете створити нове звернення на https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                     => 'Повне трасування стека наведено нижче:',
    'error_headers'                              => 'Також можуть бути корисними такі заголовки:',
    'error_post'                                 => 'Дані, надіслані користувачем:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III створив :count нову транзакцію|Firefly III створив :count нові транзакції|Firefly III створив :count нових транзакцій',
    'new_journals_header'                        => 'Firefly III створив для вас :count транзакцію. Ви знайдете її у своєму Firefly III:|Firefly III створив для вас :count транзакції. Ви знайдете їх у своєму Firefly III:|Firefly III створив для вас :count транзакцій. Ви знайдете їх у своєму Firefly III:',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'У вас є прострочені підписки: :count',
    'subscriptions_overdue_subject_single'       => 'У вас є прострочена підписка',
    'subscriptions_overdue_warning_intro_single' => 'У вас є одна прострочена підписка. У зазначені нижче дати очікувався платіж, але він досі не надійшов.',
    'subscriptions_overdue_warning_intro_multi'  => 'У вас є прострочені підписки (:count). У зазначені нижче дати очікувався платіж, але він досі не надійшов.',
    'subscriptions_overdue_please_action_single' => 'Можливо, ви просто не пов\'язали транзакцію з цією підпискою. У такому разі зробіть це. Ви НЕ отримаєте ще одного попередження про цю прострочену підписку. Нове попередження буде надіслано для НАСТУПНОГО очікуваного платежу.',
    'subscriptions_overdue_please_action_multi'  => 'Можливо, ви просто не пов\'язали транзакції з цими підписками. У такому разі зробіть це. Ви НЕ отримаєте ще одного попередження про ці прострочені підписки. Нове попередження буде надіслано для НАСТУПНИХ очікуваних платежів.',
    'subscriptions_overdue_outro'                => 'Якщо ви вважаєте, що це повідомлення помилкове, зверніться до розробника Firefly III. Дякуємо, що користуєтеся Firefly III.',
    // bill warning
    'bill_warning_subject_end_date'              => 'Ваша підписка ":name" закінчується через :diff дн.',
    'bill_warning_subject_now_end_date'          => 'Ваша підписка ":name" закінчується СЬОГОДНІ',
    'bill_warning_subject_extension_date'        => 'Вашу підписку ":name" потрібно продовжити або скасувати через :diff дн.',
    'bill_warning_subject_now_extension_date'    => 'Вашу підписку ":name" потрібно продовжити або скасувати СЬОГОДНІ',
    'bill_warning_end_date'                      => 'Ваша підписка **":name"** закінчується :date. До цього моменту залишилося близько **:diff дн.**',
    'bill_warning_extension_date'                => 'Вашу підписку **":name"** потрібно продовжити або скасувати :date. До цього моменту залишилося близько **:diff дн.**',
    'bill_warning_end_date_zero'                 => 'Ваша підписка **":name"** закінчується :date. Це **СЬОГОДНІ!**',
    'bill_warning_extension_date_zero'           => 'Вашу підписку **":name"** потрібно продовжити або скасувати :date. Це **СЬОГОДНІ!**',
    'bill_warning_please_action'                 => 'Вживіть відповідних заходів.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'Ви ввімкнули багатофакторну автентифікацію',
    'enabled_mfa_slack'                          => 'Ви (:email) ввімкнули багатофакторну автентифікацію. Це не так? Перевірте свої налаштування!',
    'have_enabled_mfa'                           => 'Ви ввімкнули багатофакторну автентифікацію для свого облікового запису Firefly III ":email". Це означає, що відтепер для входу потрібен застосунок-автентифікатор.',
    'enabled_mfa_warning'                        => 'Якщо це вмикали не ви, негайно зверніться до адміністратора або перегляньте документацію Firefly III.',

    'disabled_mfa_subject'                       => 'Ви вимкнули багатофакторну автентифікацію!',
    'disabled_mfa_slack'                         => 'Ви (:email) вимкнули багатофакторну автентифікацію. Це не так? Перевірте свої налаштування!',
    'have_disabled_mfa'                          => 'Ви вимкнули багатофакторну автентифікацію для свого облікового запису Firefly III ":email".',
    'disabled_mfa_warning'                       => 'Якщо це вимикали не ви, негайно зверніться до адміністратора або перегляньте документацію Firefly III.',

    'new_backup_codes_subject'                   => 'Ви згенерували нові резервні коди',
    'new_backup_codes_slack'                     => 'Ви (:email) згенерували нові резервні коди. Ними можна входити у Firefly III. Це не так? Перевірте свої налаштування!',
    'new_backup_codes_intro'                     => 'Ви (:email) згенерували нові резервні коди. Ними можна увійти у Firefly III, якщо ви втратите доступ до застосунку-автентифікатора.',
    'new_backup_codes_warning'                   => 'Зберігайте ці коди в безпечному місці. Якщо ви їх втратите, то не зможете увійти у Firefly III. Якщо це робили не ви, негайно зверніться до адміністратора або перегляньте документацію Firefly III.',

    'used_backup_code_subject'                   => 'Ви скористалися резервним кодом для входу',
    'used_backup_code_slack'                     => 'Ви (:email) скористалися резервним кодом для входу',

    'used_backup_code_intro'                     => 'Ви (:email) скористалися резервним кодом для входу у Firefly III. Тепер у вас на один резервний код менше. Викресліть його зі свого списку.',
    'used_backup_code_warning'                   => 'Якщо це робили не ви, негайно зверніться до адміністратора або перегляньте документацію Firefly III.',

    // few left:
    'mfa_few_backups_left_subject'               => 'У вас залишилося лише :count резервних кодів!',
    'mfa_few_backups_left_slack'                 => 'У вас (:email) залишилося лише :count резервних кодів!',
    'few_backup_codes_intro'                     => 'Ви (:email) використали більшість резервних кодів, залишилося лише :count. Якнайшвидше згенеруйте нові.',
    'few_backup_codes_warning'                   => 'Без резервних кодів ви не зможете відновити вхід із багатофакторною автентифікацією, якщо втратите доступ до генератора кодів.',

    // NO left:
    'mfa_no_backups_left_subject'                => 'У вас НЕ залишилося резервних кодів!',
    'mfa_no_backups_left_slack'                  => 'У вас (:email) НЕ залишилося резервних кодів!',
    'no_backup_codes_intro'                      => 'Ви (:email) використали ВСІ резервні коди. Якнайшвидше згенеруйте нові.',
    'no_backup_codes_warning'                    => 'Без резервних кодів ви не зможете відновити вхід із багатофакторною автентифікацією, якщо втратите доступ до генератора кодів.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => 'Ви вже :count раз(-ів) невдало намагалися пройти багатофакторну автентифікацію!',
    'mfa_many_failed_slack'                      => 'Ви (:email) вже :count раз(-ів) невдало намагалися пройти багатофакторну автентифікацію. Це не так? Перевірте свої налаштування!',
    'mfa_many_failed_attempts_intro'             => 'Ви (:email) :count раз(-ів) намагалися ввести код багатофакторної автентифікації, але ці спроби входу були невдалими. Ви впевнені, що використовуєте правильний код? Ви впевнені, що час на сервері правильний?',
    'mfa_many_failed_attempts_warning'           => 'Якщо це робили не ви, негайно зверніться до адміністратора або перегляньте документацію Firefly III.',
];
