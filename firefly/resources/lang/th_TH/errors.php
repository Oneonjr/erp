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
    '404_header'                    => 'ไม่สามารถหาหน้าเพจ firefly III ',
    '404_page_does_not_exist'       => 'ไม่พบหน้าที่ท่านต้องการ. กรุณาตรวจสอบว่า URL ถูกต้อง. ท่านสะกดถูกหรือไม่?',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'หากท่านถูกนำมาหน้านี้โดยอัตโนมัติ, เราต้องขออภัยในความผิดพลาด. ท่านสามารถดูคำอธิบายเพิ่มเติมได้ที่ Log files. จะขอบคุณมากหากท่านส่งข้อมูลความผิดพลาดนี้มาที่ฉัน',
    '404_github_link'               => 'หากท่านมั่นใจว่าหน้าที่ท่านต้องการมีอยู่, กรุณาเปิดกระทูที่ <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'note_not_found_account'        => 'Account ":name" has been deleted and can no longer be viewed. Please enjoy this overview of all other accounts of the same type.',
    'note_not_found_group'          => 'Transaction ":description" has been deleted and can no longer be viewed. Please enjoy this overview of all other transactions of the same type.',
    'note_not_found_reconciliation' => 'Reconciliation ":description" has been deleted and can no longer be viewed. Here is an overview of the account it belonged to.',

    'maintenance_mode'              => 'Firefly III is in maintenance mode.',
    'be_right_back'                 => 'Be right back!',
    'check_back'                    => 'Firefly III is down for some necessary maintenance. Please check back in a second. If you happen to see this message on the demo site, just wait a few minutes. The database is reset every few hours.',
    'error_occurred'                => 'อุปส์! เกิดข้อผิดพลาด',
    'db_error_occurred'             => 'Whoops! A database error occurred.',
    'error_not_recoverable'         => 'Unfortunately, this error was not recoverable :(. Firefly III broke. The error is:',
    'error'                         => 'ผิดพลาด',
    'error_location'                => 'This error occurred in file <span style="font-family: monospace;">:file</span> on line :line with code :code.',
    'stacktrace'                    => 'Stack trace',
    'more_info'                     => 'ข้อมูลเพิ่มเติม',

    'collect_info'                  => 'Please collect more information in the <code>storage/logs</code> directory where you will find log files. If you\'re running Docker, use <code>docker logs -f [container]</code>.',
    'collect_info_more'             => 'You can read more about collecting error information in <a href="https://docs.firefly-iii.org/how-to/general/debug/">the FAQ</a>.',
    'github_help'                   => 'Get help on GitHub',
    'github_instructions'           => 'You\'re more than welcome to open a new issue <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">on GitHub</a></strong>.',
    'use_search'                    => 'Use the search!',
    'include_info'                  => 'Include the information <a href=":link">from this debug page</a>.',
    'tell_more'                     => 'Tell us more than "it says Whoops!"',
    'include_logs'                  => 'Include error logs (see above).',
    'what_did_you_do'               => 'Tell us what you were doing.',
];
