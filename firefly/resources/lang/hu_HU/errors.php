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
    '404_header'                    => 'Az oldal nem található.',
    '404_page_does_not_exist'       => 'A keresett oldal nem létezik. Kérem ellenőrizze, hogy helyes URL-t írt-e be. Nincs-e elírás a URL címben?',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'Elnézését kérem, ha automatikus átirányítással érkezett erre az oldalra. A hibával kapcsolatban további információkat talál a napló fájlokban. Sokat segítene a hiba javításán, ha elküldené az adatokat.',
    '404_github_link'               => 'Kérem nyisson egy hibajegyet <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>-on, ha biztos benne, hogy ennek az lapnak léteznie kellene.',
    'note_not_found_account'        => 'Account ":name" has been deleted and can no longer be viewed. Please enjoy this overview of all other accounts of the same type.',
    'note_not_found_group'          => 'Transaction ":description" has been deleted and can no longer be viewed. Please enjoy this overview of all other transactions of the same type.',
    'note_not_found_reconciliation' => 'Reconciliation ":description" has been deleted and can no longer be viewed. Here is an overview of the account it belonged to.',

    'maintenance_mode'              => 'Firefly III karbantartás alatt.',
    'be_right_back'                 => 'Rögtön jövök!',
    'check_back'                    => 'A Firefly III leállt néhány szükséges karbantartás miatt. Kérjük, nézz vissza egy pillanat múlva. Ha véletlenül ezt az üzenetet látod a demo oldalon, csak várj néhány percet. Az adatbázis néhány óránként újraindul.',
    'error_occurred'                => 'Hoppá! Hiba történt.',
    'db_error_occurred'             => 'Hoppá! Adatbázis hiba történt.',
    'error_not_recoverable'         => 'Sajnos a hiba után nem sikerült visszaállni :(. A futás megszakadt. A hiba:',
    'error'                         => 'Hiba',
    'error_location'                => 'Ez a hiba <span style="font-family: monospace;">:file</span> fájlban történt :code kóddal ebben a sorban: :line.',
    'stacktrace'                    => 'Stack trace',
    'more_info'                     => 'További információ',

    'collect_info'                  => 'További információk gyűjthetők a <code>storage/logs</code> könyvtárban lévő napló fájlokból. Vagy ha Dockert használ, akkor a <code>docker logs -f [container]</code> paranccsal.',
    'collect_info_more'             => 'Tovább olvashat a hibainformációk gyűjtéséről <a href="https://docs.firefly-iii.org/how-to/general/debug/">a GYIK-ben</a>.',
    'github_help'                   => 'Segítség kérése GitHub-on',
    'github_instructions'           => 'Örömmel fogadjuk ha <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>-on hibajegyet nyitsz.',
    'use_search'                    => 'Használd a keresőt!',
    'include_info'                  => 'Add hozzá a <a href=":link">debug</a> oldalon található információkat.',
    'tell_more'                     => 'Részletesebben írd le, mint hogy "azt írja hoppá, hiba történt!"',
    'include_logs'                  => 'Hiba naplók hozzáadása (lásd fentebb).',
    'what_did_you_do'               => 'Meséld el mit csináltál.',
];
