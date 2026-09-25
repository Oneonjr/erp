<?php

/**
 * firefly.php
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
    '404_header'                    => 'Firefly III не може знайти цю сторінку.',
    '404_page_does_not_exist'       => 'Запитувана сторінка не існує. Будь ласка, перевірте, правильність URL. Можливо зробили помилку при наборі?',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'Якщо вас перенаправило на цю сторінку автоматично, прийміть мої вибачення. Цю помилку записано у файли журналу, і я буду вдячний, якщо ви надішлете її мені.',
    '404_github_link'               => 'Якщо ви впевнені, що ця сторінка має існувати, створіть звернення на <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'note_not_found_account'        => 'Рахунок ":name" видалено, і переглянути його більше не можна. Натомість ось огляд усіх інших рахунків того самого типу.',
    'note_not_found_group'          => 'Транзакцію ":description" видалено, і переглянути її більше не можна. Натомість ось огляд усіх інших транзакцій того самого типу.',
    'note_not_found_reconciliation' => 'Звірку ":description" видалено, і переглянути її більше не можна. Ось огляд рахунку, до якого вона належала.',

    'maintenance_mode'              => 'Firefly III знаходиться в режимі обслуговування.',
    'be_right_back'                 => 'Скоро повернемося!',
    'check_back'                    => 'Firefly III тимчасово недоступний через необхідне обслуговування. Спробуйте ще раз за мить. Якщо ви бачите це повідомлення на демоверсії сайту, просто зачекайте кілька хвилин: база даних скидається кожні кілька годин.',
    'error_occurred'                => 'Отакої! Сталася помилка.',
    'db_error_occurred'             => 'Отакої! Сталася помилка бази даних.',
    'error_not_recoverable'         => 'На жаль, цю помилку не вдалося виправити :(. Firefly III зламався. Помилка:',
    'error'                         => 'Помилка',
    'error_location'                => 'Ця помилка сталася у файлі <span style="font-family: monospace;">:file</span> у рядку :line з кодом :code.',
    'stacktrace'                    => 'Трасування стека',
    'more_info'                     => 'Докладніше',

    'collect_info'                  => 'Зберіть більше інформації в каталозі <code>storage/logs</code>, де містяться файли журналів. Якщо ви використовуєте Docker, скористайтеся <code>docker logs -f [container]</code>.',
    'collect_info_more'             => 'Докладніше про збір інформації про помилки читайте в <a href="https://docs.firefly-iii.org/how-to/general/debug/">FAQ</a>.',
    'github_help'                   => 'Отримати допомогу на GitHub',
    'github_instructions'           => 'Ви можете створити нове звернення <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">на GitHub</a></strong>.',
    'use_search'                    => 'Скористайтеся пошуком!',
    'include_info'                  => 'Додайте інформацію <a href=":link">з цієї сторінки налагодження</a>.',
    'tell_more'                     => 'Розкажіть більше, ніж просто «пише „Отакої!“»',
    'include_logs'                  => 'Додайте журнали помилок (див. вище).',
    'what_did_you_do'               => 'Розкажіть нам, що ви робили.',
];
