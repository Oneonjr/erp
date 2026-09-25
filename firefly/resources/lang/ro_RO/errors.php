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
    '404_header'                    => 'Firefly III nu a găsit această pagină.',
    '404_page_does_not_exist'       => 'Pagina pe care ați solicitat-o nu există. Vă rugăm să verificați că nu ați introdus adresa URL greșită. Probabil ați făcut o greșeală?',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'Dacă ați fost redirecționat către această pagină automat, vă rugăm să acceptați scuzele mele. Există o menţiune despre această eroare în fişierele de jurnal şi aş fi recunoscător dacă mi-aţi trimite eroarea.',
    '404_github_link'               => 'Dacă sunteți sigur că această pagină ar trebui să existe, vă rugăm să deschideți un tichet pe <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'note_not_found_account'        => 'Account ":name" has been deleted and can no longer be viewed. Please enjoy this overview of all other accounts of the same type.',
    'note_not_found_group'          => 'Transaction ":description" has been deleted and can no longer be viewed. Please enjoy this overview of all other transactions of the same type.',
    'note_not_found_reconciliation' => 'Reconciliation ":description" has been deleted and can no longer be viewed. Here is an overview of the account it belonged to.',

    'maintenance_mode'              => 'Firefly III este în modul de întreținere.',
    'be_right_back'                 => 'Revin imediat!',
    'check_back'                    => 'Firefly III este oprit pentru mentenanța necesară. Reveniți peste puțin timp. Dacă vedeți acest mesaj pe site-ul demo, așteptați câteva minute. Baza de date se resetează la câteva ore.',
    'error_occurred'                => 'Hopa! A apărut o eroare.',
    'db_error_occurred'             => 'Hopa! A apărut o eroare la baza de date.',
    'error_not_recoverable'         => 'Din păcate, această eroare nu a putut fi recuperată :(. Firefly III s-a stricat. Eroarea este:',
    'error'                         => 'Eroare',
    'error_location'                => 'Această eroare a apărut în fișierul <span style="font-family: monospace;">:file</span> la linia :line, cod :code.',
    'stacktrace'                    => 'Stack trace',
    'more_info'                     => 'Mai multe informații',

    'collect_info'                  => 'Te rugăm să colectezi mai multe informații în directorul <code>storage/logs</code> unde vei găsi fișiere jurnal. Dacă rulezi Docker, folosește <code>docker logs -f[container]</code>.',
    'collect_info_more'             => 'Poți citi mai multe despre colectarea informațiilor despre erori în <a href="https://docs.firefly-iii.org/how-to/general/debug/">FAQ</a>.',
    'github_help'                   => 'Obține ajutor pe GitHub',
    'github_instructions'           => 'Ești binevenit să deschizi un tichet nou pe <strong><a href="https://github.com/firefly-iii/firefly-iii/issues"> GitHub</a></strong>.',
    'use_search'                    => 'Folosește căutarea!',
    'include_info'                  => 'Include informațiile <a href=":link">din această pagină de depanare</a>.',
    'tell_more'                     => 'Spune-ne mai mult decât „scrie Hopa!”',
    'include_logs'                  => 'Include jurnalele de erori (a se vedea mai sus).',
    'what_did_you_do'               => 'Spune-ne ce făceai.',
];
