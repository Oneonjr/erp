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
    'greeting'                                   => 'Привет,',
    'closing'                                    => 'Бип-бип,',
    'signature'                                  => 'Почтовый робот Firefly III',
    'footer_ps'                                  => 'PS: Это сообщение было отправлено, потому что его запросили с IP :ipAddress.',

    // admin test
    'admin_test_subject'                         => 'Тестовое сообщение от вашего сервера Firefly III',
    'admin_test_body'                            => 'Это тестовое сообщение с вашего сервера Firefly III. Оно было отправлено на :email.',
    'admin_test_message'                         => 'Это тестовое сообщение от вашего Firefly III через канал ":channel".',
    'admin_test_link'                            => 'Ссылка ниже должна вести на ваш экземпляр Firefly III и начинаться с «http» или «https». Если это не так, задайте переменную окружения `APP_URL`: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Приглашение было создано',
    'invitation_created_body'                    => 'Администратор ":email" создал приглашение пользователю с адресом электронной почты ":invitee". Приглашение действительно в течение 48 часов.',
    'invite_user_subject'                        => 'Вас пригласили создать аккаунт в Firefly III.',
    'invitation_introduction'                    => 'Вас пригласили создать аккаунт Firefly III на **:host**. Firefly III – это персональный, приватный менеджер финансов, размещаемый на собственном сервере. Все крутые ребята им пользуются.',
    'invitation_invited_by'                      => 'Вас пригласил ":admin", и это приглашение отправлено на ":invitee". Это вы, верно?',
    'invitation_url'                             => 'Приглашение действительно в течение 48 часов; чтобы воспользоваться им, перейдите в [Firefly III](:url). Наслаждайтесь!',

    // new IP
    'login_from_new_ip'                          => 'Новый вход в Firefly III',
    'slack_login_from_new_ip'                    => 'Новый вход в Firefly III с IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III зафиксировал вход в ваш аккаунт с неизвестного IP-адреса. Если вы никогда не входили в систему с IP-адреса, указанного ниже, или это было более шести месяцев назад, Firefly III предупредит вас.',
    'new_ip_warning'                             => 'Если вы узнаёте этот IP-адрес или этот вход, можете проигнорировать это сообщение. Если вы не входили в систему и не понимаете, о чём речь, проверьте надёжность пароля, измените его и завершите все остальные сеансы. Для этого перейдите на страницу профиля. Конечно, MFA у вас уже включена, верно? Оставайтесь в безопасности!',
    'ip_address'                                 => 'IP-адрес',
    'host_name'                                  => 'Сервер',
    'date_time'                                  => 'Дата и время',
    'user_agent'                                 => 'Браузер',

    // access token created
    'access_token_created_subject'               => 'Создан новый токен доступа',
    'access_token_created_body'                  => 'Кто-то (надеемся, что вы) только что создал новый токен доступа к Firefly III API для вашего аккаунта.',
    'access_token_created_explanation'           => 'С помощью этого токена можно получить доступ ко **всем** вашим финансовым данным через Firefly III API.',
    'access_token_created_revoke'                => 'Если это были не вы, отзовите токен как можно скорее по адресу :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Неизвестный пользователь пытался войти в систему',
    'unknown_user_body'                          => 'Неизвестный пользователь (`:ip`) пытался войти в Firefly III. Он использовал адрес электронной почты `:address`.',
    'unknown_user_message'                       => 'Использованный адрес электронной почты (IP `:ip`): `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III обнаружил неудачную попытку входа',
    'failed_login_body'                          => 'Firefly III обнаружил, что кто-то (вы?) не смог войти в ваш аккаунт `:email`. Убедитесь, что это были вы.',
    'failed_login_message'                       => 'Обнаружена неудачная попытка входа (`:ip`) в ваш аккаунт Firefly III `:email`.',
    'failed_login_warning'                       => 'Если вы узнаёте этот IP-адрес или эту попытку входа, можете проигнорировать это сообщение. Если вы не входили в систему и не понимаете, о чём речь, проверьте надёжность пароля, измените его и завершите все остальные сеансы. Для этого перейдите на страницу профиля. Конечно, MFA у вас уже включена, верно? Оставайтесь в безопасности!',

    // registered
    'registered_subject'                         => 'Добро пожаловать в Firefly III!',
    'registered_subject_admin'                   => 'Был зарегистрирован новый пользователь',
    'admin_new_user_registered'                  => 'Был зарегистрирован новый пользователь с электронной почтой: **:email**. Ему был присвоен ID #:id.',
    'registered_welcome'                         => 'Добро пожаловать в [Firefly III](:address). Ваша регистрация прошла успешно, и это письмо - её подтверждение. Поздравляем!',
    'registered_pw'                              => 'Если вы уже успели забыть пароль, сбросьте его через [инструмент сброса пароля](:address/password/reset).',
    'registered_help'                            => 'В правом верхнем углу каждой страницы есть значок справки. Нужна помощь - нажмите его!',
    'registered_closing'                         => 'Наслаждайтесь!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Сброс пароля:',
    'registered_doc_link'                        => 'Документация:',

    // new version
    'new_version_email_subject'                  => 'Доступна новая версия Firefly III',

    // email change
    'email_change_subject'                       => 'Ваш адрес электронной почты в Firefly III был изменён',
    'email_change_body_to_new'                   => 'Вы или кто-то, у кого есть доступ к вашему аккаунту Firefly III, изменил адрес вашей электронной почты. Если вы не ожидали этого сообщения, проигнорируйте и удалите его.',
    'email_change_body_to_old'                   => 'Вы или кто-то, у кого есть доступ к вашему аккаунту Firefly III, изменил адрес вашей электронной почты. Если вы этого не ожидали, **обязательно** перейдите по ссылке «отменить» ниже, чтобы защитить свой аккаунт!',
    'email_change_ignore'                        => 'Если вы сами инициировали это изменение, можете спокойно проигнорировать это сообщение.',
    'email_change_old'                           => 'Старый адрес электронной почты: :email',
    'email_change_new'                           => 'Новый адрес электронной почты: :email',
    'email_change_instructions'                  => 'Вы не можете использовать Firefly III, пока не подтвердите это изменение. Для подтверждения перейдите по ссылке ниже.',
    'email_change_undo_link'                     => 'Чтобы отменить изменение, перейдите по ссылке:',

    // OAuth token created
    'oauth_created_subject'                      => 'Создан новый клиент OAuth',
    'oauth_created_body'                         => 'Кто-то (надеемся, что вы) только что создал новый клиент OAuth для Firefly III API в вашем аккаунте. Клиент называется ":name", ссылка обратного вызова: `:url`.',
    'oauth_created_explanation'                  => 'С помощью этого клиента можно получить доступ ко **всем** вашим финансовым данным через Firefly III API.',
    'oauth_created_undo'                         => 'Если это были не вы, отзовите этого клиента как можно скорее по адресу `:url`',

    // reset password
    'reset_pw_subject'                           => 'Ваш запрос на сброс пароля',
    'reset_pw_message'                           => 'На вашу электронную почту отправлены инструкции по сбросу пароля. Если это были вы, следуйте им.',
    'reset_pw_instructions'                      => 'Кто-то пытался сбросить ваш пароль. Если это были вы, перейдите по ссылке ниже.',
    'reset_pw_warning'                           => '**ОБЯЗАТЕЛЬНО** проверьте, что ссылка действительно ведёт на ваш Firefly III!',

    // error
    'error_subject'                              => 'В Firefly III произошла ошибка',
    'error_intro'                                => 'В Firefly III v:version произошла ошибка: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'Ошибка типа ":class".',
    'error_timestamp'                            => 'Время ошибки: :time.',
    'error_location'                             => 'Эта ошибка произошла в файле <span style="font-family: monospace;">:file</span> в строке :line с кодом :code.',
    'error_user'                                 => 'С ошибкой столкнулся пользователь #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'На момент ошибки пользователь не был авторизован или не был определён.',
    'error_ip'                                   => 'IP-адрес, связанный с этой ошибкой: :ip',
    'error_url'                                  => 'URL-адрес: :url',
    'error_user_agent'                           => 'User agent: :userAgent',
    'error_stacktrace'                           => 'Полная трассировка стека ниже. Если вы считаете, что это баг Firefly III, перешлите это сообщение на <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. Это поможет исправить ошибку, с которой вы столкнулись.',
    'error_github_html'                          => 'Если вам так удобнее, создайте новый тикет на <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'Если вам так удобнее, создайте новый тикет на https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                     => 'Полная трассировка стека:',
    'error_headers'                              => 'Следующие заголовки также могут иметь значение:',
    'error_post'                                 => 'Это было отправлено пользователем:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III создал новую транзакцию|Firefly III создал :count новых транзакций',
    'new_journals_header'                        => 'Firefly III создал для вас транзакцию. Её можно найти в вашем Firefly III:|Firefly III создал для вас :count транзакций. Их можно найти в вашем Firefly III:',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'У вас :count просроченных подписок',
    'subscriptions_overdue_subject_single'       => 'У вас есть просроченная подписка',
    'subscriptions_overdue_warning_intro_single' => 'У вас есть одна просроченная подписка. По следующим датам ожидался платёж, однако он так и не поступил.',
    'subscriptions_overdue_warning_intro_multi'  => 'У вас есть :count просроченных подписок. По следующим датам ожидался платёж, однако он так и не поступил.',
    'subscriptions_overdue_please_action_single' => 'Возможно, вы просто забыли привязать транзакцию к этой подписке. Если это так, сделайте это прямо сейчас. Повторного предупреждения об этой просроченной подписке не будет. Следующее предупреждение придёт только при наступлении очередного срока оплаты.',
    'subscriptions_overdue_please_action_multi'  => 'Возможно, вы просто забыли привязать транзакцию к этим подпискам. Если это так, сделайте это прямо сейчас. Повторного предупреждения об этих просроченных подписках не будет. Следующее предупреждение придёт только при наступлении очередных сроков оплаты.',
    'subscriptions_overdue_outro'                => 'Если вы считаете, что это сообщение пришло по ошибке, свяжитесь с разработчиком Firefly III. Спасибо, что пользуетесь Firefly III.',
    // bill warning
    'bill_warning_subject_end_date'              => 'Подписка ":name" заканчивается через :diff дней',
    'bill_warning_subject_now_end_date'          => 'Подписка ":name" заканчивается СЕГОДНЯ',
    'bill_warning_subject_extension_date'        => 'Подписка ":name" должна быть продлена или отменена через :diff дней',
    'bill_warning_subject_now_extension_date'    => 'Подписка ":name" должна быть продлена или отменена СЕГОДНЯ',
    'bill_warning_end_date'                      => 'Подписка **":name"** заканчивается :date. До этого момента осталось примерно **:diff дней**.',
    'bill_warning_extension_date'                => 'Подписка **":name"** должна быть продлена или отменена :date. До этого момента осталось примерно **:diff дней**.',
    'bill_warning_end_date_zero'                 => 'Подписка **":name"** заканчивается :date. Это случится **СЕГОДНЯ!**',
    'bill_warning_extension_date_zero'           => 'Подписка **":name"** должна быть продлена или отменена :date. Это случится **СЕГОДНЯ!**',
    'bill_warning_please_action'                 => 'Примите необходимые меры.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'Вы включили многофакторную аутентификацию',
    'enabled_mfa_slack'                          => 'Вы (:email) включили многофакторную аутентификацию. Это не так? Проверьте настройки!',
    'have_enabled_mfa'                           => 'Вы включили многофакторную аутентификацию для вашего аккаунта Firefly III ":email". Теперь для входа потребуется приложение для аутентификации.',
    'enabled_mfa_warning'                        => 'Если вы не включали её, немедленно обратитесь к администратору или изучите документацию Firefly III.',

    'disabled_mfa_subject'                       => 'Вы отключили многофакторную аутентификацию!',
    'disabled_mfa_slack'                         => 'Вы (:email) отключили многофакторную аутентификацию. Это не так? Проверьте настройки!',
    'have_disabled_mfa'                          => 'Вы отключили многофакторную аутентификацию для вашего аккаунта Firefly III ":email".',
    'disabled_mfa_warning'                       => 'Если вы не отключали её, немедленно обратитесь к администратору или изучите документацию Firefly III.',

    'new_backup_codes_subject'                   => 'Вы создали новые резервные коды',
    'new_backup_codes_slack'                     => 'Вы (:email) создали новые резервные коды. Их можно использовать для входа в Firefly III. Это не так? Проверьте настройки!',
    'new_backup_codes_intro'                     => 'Вы (:email) создали новые резервные коды. Их можно использовать для входа в Firefly III, если вы потеряете доступ к приложению для аутентификации.',
    'new_backup_codes_warning'                   => 'Храните эти коды в надёжном месте. Если вы их потеряете, то не сможете войти в Firefly III. Если это были не вы, немедленно обратитесь к администратору или изучите документацию Firefly III.',

    'used_backup_code_subject'                   => 'Вы использовали резервный код для входа',
    'used_backup_code_slack'                     => 'Вы (:email) использовали резервный код для входа',

    'used_backup_code_intro'                     => 'Вы (:email) использовали резервный код для входа в Firefly III. Теперь у вас на один резервный код меньше. Удалите его из своего списка.',
    'used_backup_code_warning'                   => 'Если это были не вы, немедленно обратитесь к администратору или изучите документацию Firefly III.',

    // few left:
    'mfa_few_backups_left_subject'               => 'У вас осталось только :count резервных кодов!',
    'mfa_few_backups_left_slack'                 => 'У вас (:email) осталось только :count резервных кодов!',
    'few_backup_codes_intro'                     => 'Вы (:email) использовали большую часть резервных кодов - осталось только :count. Сгенерируйте новые как можно скорее.',
    'few_backup_codes_warning'                   => 'Без резервных кодов вы не сможете восстановить вход по MFA, если потеряете доступ к генератору кодов.',

    // NO left:
    'mfa_no_backups_left_subject'                => 'У вас НЕ осталось резервных кодов!',
    'mfa_no_backups_left_slack'                  => 'У вас (:email) НЕ осталось резервных кодов!',
    'no_backup_codes_intro'                      => 'Вы (:email) использовали ВСЕ резервные коды. Сгенерируйте новые как можно скорее.',
    'no_backup_codes_warning'                    => 'Без резервных кодов вы не сможете восстановить вход по MFA, если потеряете доступ к генератору кодов.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => 'Вы уже :count раз безуспешно пытались пройти многофакторную аутентификацию!',
    'mfa_many_failed_slack'                      => 'Вы (:email) уже :count раз безуспешно пытались пройти многофакторную аутентификацию. Это не так? Проверьте настройки!',
    'mfa_many_failed_attempts_intro'             => 'Вы (:email) :count раз пытались ввести код многофакторной аутентификации, но попытки не удались. Вы уверены, что используете правильный код MFA? А время на сервере точное?',
    'mfa_many_failed_attempts_warning'           => 'Если это были не вы, немедленно обратитесь к администратору или изучите документацию Firefly III.',
];
