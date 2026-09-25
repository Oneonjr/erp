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
    '404_header'                    => 'Firefly III не может найти эту страницу.',
    '404_page_does_not_exist'       => 'Запрошенная страница не существует. Убедитесь, что указана правильная ссылка. Возможно, допущена опечатка?',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'Если перенаправление на эту страницу произошло автоматически - приношу извинения. Информация об ошибке записана в лог-файлы, и я буду признателен, если вы пришлёте их мне.',
    '404_github_link'               => 'Если эта страница точно должна существовать, откройте тикет на <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'note_not_found_account'        => 'Account ":name" has been deleted and can no longer be viewed. Please enjoy this overview of all other accounts of the same type.',
    'note_not_found_group'          => 'Transaction ":description" has been deleted and can no longer be viewed. Please enjoy this overview of all other transactions of the same type.',
    'note_not_found_reconciliation' => 'Reconciliation ":description" has been deleted and can no longer be viewed. Here is an overview of the account it belonged to.',

    'maintenance_mode'              => 'Firefly III находится в режиме обслуживания.',
    'be_right_back'                 => 'Скоро вернёмся!',
    'check_back'                    => 'Firefly III отключён для обслуживания. Загляните чуть позже. Если это сообщение на демо-сайте - просто подождите несколько минут. База данных сбрасывается каждые несколько часов.',
    'error_occurred'                => 'Уупс! Произошла ошибка.',
    'db_error_occurred'             => 'Уупс! Произошла ошибка базы данных.',
    'error_not_recoverable'         => 'К сожалению, ошибка неустранима :(. Firefly III сломался. Ошибка:',
    'error'                         => 'Ошибка',
    'error_location'                => 'Эта ошибка произошла в файле <span style="font-family: monospace;">:file</span> в строке :line с кодом :code.',
    'stacktrace'                    => 'Трассировка стека',
    'more_info'                     => 'Подробности',

    'collect_info'                  => 'Соберите дополнительную информацию из каталога <code>storage/logs</code>, там находятся лог-файлы. При использовании Docker: <code>docker logs -f [container]</code>.',
    'collect_info_more'             => 'Подробнее о сборе информации об ошибках можно прочитать в <a href="https://docs.firefly-iii.org/how-to/general/debug/">FAQ</a>.',
    'github_help'                   => 'Помощь на GitHub',
    'github_instructions'           => 'Можно открыть тикет на <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'use_search'                    => 'Воспользуйтесь поиском!',
    'include_info'                  => 'Приложите информацию <a href=":link">со страницы отладки</a>.',
    'tell_more'                     => 'Опишите проблему детальнее, а не просто «Оно сломалось!»',
    'include_logs'                  => 'Прикрепить логи ошибок (см. выше).',
    'what_did_you_do'               => 'Опишите, что делали в момент возникновения ошибки.',
];
