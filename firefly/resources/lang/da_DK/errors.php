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
    '404_header'                    => 'Firefly III kan ikke finde denne side.',
    '404_page_does_not_exist'       => 'Den side du har anmodet om findes ikke. Kontroller at du ikke har indtastet den forkerte URL. Har du måske tastet forkert?',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'Hvis du blev omdirigeret til denne side automatisk, bedes du modtage min undskyldning. Denne fejl er registreret i dine logfiler, og jeg ville være taknemmelig, hvis du sendte mig disse logfiler.',
    '404_github_link'               => 'Hvis du er sikker på, at denne side burde eksistere, bedes du oprette en fejlmelding på <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'note_not_found_account'        => 'Account ":name" has been deleted and can no longer be viewed. Please enjoy this overview of all other accounts of the same type.',
    'note_not_found_group'          => 'Transaction ":description" has been deleted and can no longer be viewed. Please enjoy this overview of all other transactions of the same type.',
    'note_not_found_reconciliation' => 'Reconciliation ":description" has been deleted and can no longer be viewed. Here is an overview of the account it belonged to.',

    'maintenance_mode'              => 'Firefly III kører i vedligeholdelsestilstand.',
    'be_right_back'                 => 'Er straks tilbage!',
    'check_back'                    => 'Firefly III is down for some necessary maintenance. Please check back in a second. If you happen to see this message on the demo site, just wait a few minutes. The database is reset every few hours.',
    'error_occurred'                => 'Beklager, der opstod en fejl.',
    'db_error_occurred'             => 'Hovsa! Der opstod en databasefejl.',
    'error_not_recoverable'         => 'Desværre er denne fejl uoprettelig :(. Firefly III brød sammen. Fejlen er:',
    'error'                         => 'Fejl',
    'error_location'                => 'This error occurred in file <span style="font-family: monospace;">:file</span> on line :line with code :code.',
    'stacktrace'                    => 'Stack trace',
    'more_info'                     => 'Yderligere information',

    'collect_info'                  => 'Der findes mere information i mappen <code>storage/logs</code> hvor du vil finde logfilerne. Hvis du kører Docker, brug <code>docker logs -f [container]</code>.',
    'collect_info_more'             => 'Du kan læse mere om indsamling af fejloplysninger i <a href="https://docs.firefly-iii.org/how-to/general/debug/">FAQ</a>.',
    'github_help'                   => 'Få hjælp på GitHub',
    'github_instructions'           => 'Du er mere end velkommen til at oprette en ny fejlmelding <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">på GitHub</a></strong>.',
    'use_search'                    => 'Brug søgefeltet!',
    'include_info'                  => 'Inkludér informationen <a href=":link">fra denne fejlfindingsside</a>.',
    'tell_more'                     => 'Uddyb gerne mere end bare "det siger Hovsa!"',
    'include_logs'                  => 'Inkludér fejllogfiler (se ovenfor).',
    'what_did_you_do'               => 'Fortæl os, hvad du lavede.',
];
