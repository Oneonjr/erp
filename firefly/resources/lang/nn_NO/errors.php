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
    '404_header'                    => 'Firefly III kan ikkje finna denne sida.',
    '404_page_does_not_exist'       => 'Sida du ba om eksisterar ikkje. Sjekk at du ikkje har skrevet feil URL. Kanskje du har ein skriveleif?',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'Om du vart omdirigert til denne sida automatisk, da må me beklage. Det er nevnt i denne feilen i loggfilene og eg vil vera takknemlig om du vil sende den til meg.',
    '404_github_link'               => 'Om du er sikker på at denne sida skal eksistere, åpne ein sak på <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'note_not_found_account'        => 'Account ":name" has been deleted and can no longer be viewed. Please enjoy this overview of all other accounts of the same type.',
    'note_not_found_group'          => 'Transaction ":description" has been deleted and can no longer be viewed. Please enjoy this overview of all other transactions of the same type.',
    'note_not_found_reconciliation' => 'Reconciliation ":description" has been deleted and can no longer be viewed. Here is an overview of the account it belonged to.',

    'maintenance_mode'              => 'Firefly III er i vedlikeholdsmodus.',
    'be_right_back'                 => 'Er straks tilbake!',
    'check_back'                    => 'Firefly III is down for some necessary maintenance. Please check back in a second. If you happen to see this message on the demo site, just wait a few minutes. The database is reset every few hours.',
    'error_occurred'                => 'Oisann! ein feil har oppstått.',
    'db_error_occurred'             => 'Oisann! Ein databasefeil har oppstått.',
    'error_not_recoverable'         => 'Dessverre vart ikkje denne feilen fikset :(. Firefly III ødelagt. Feilen er:',
    'error'                         => 'Feil',
    'error_location'                => 'This error occurred in file <span style="font-family: monospace;">:file</span> on line :line with code :code.',
    'stacktrace'                    => 'Stack Trace',
    'more_info'                     => 'Mer informasjon',

    'collect_info'                  => 'Samle inn meir informasjon i <code>storage/logs</code> mappa kor du finn loggfiler. Om du køyrer Docker, bruk <code>docker logger -f [container]</code>.',
    'collect_info_more'             => 'You can read more about collecting error information in <a href="https://docs.firefly-iii.org/how-to/general/debug/">the FAQ</a>.',
    'github_help'                   => 'Få hjelp på GitHub',
    'github_instructions'           => 'Du er meir enn velkomen til å åpne eit nytt problem <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">på GitHub</a></strong>.',
    'use_search'                    => 'Bruk søket!',
    'include_info'                  => 'Inkluder informasjonen <a href=":link">frå denne feilsøkingssida</a>.',
    'tell_more'                     => 'Fortel oss meir enn det står Oisann!"',
    'include_logs'                  => 'Inkluder feillogger (sjå ovenfor).',
    'what_did_you_do'               => 'Fortell oss kva du gjorde.',
];
