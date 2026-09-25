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
    '404_header'                    => 'Firefly III negali rasti šio puslapio.',
    '404_page_does_not_exist'       => 'Puslapis, kurio prašėte, neegzistuoja. Patikrinkite, ar neįvedėte neteisingo URL. Gal padarei rašybos klaidą?',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'Jei buvote automatiškai nukreipti į šį puslapį, atsiprašau. Ši klaida minima jūsų žurnalo failuose ir būčiau dėkingas, jei atsiųstumėte man klaidą.',
    '404_github_link'               => 'Jei esate tikri, kad šis puslapis turėtų egzistuoti, atidarykite užklausa <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'note_not_found_account'        => 'Account ":name" has been deleted and can no longer be viewed. Please enjoy this overview of all other accounts of the same type.',
    'note_not_found_group'          => 'Transaction ":description" has been deleted and can no longer be viewed. Please enjoy this overview of all other transactions of the same type.',
    'note_not_found_reconciliation' => 'Reconciliation ":description" has been deleted and can no longer be viewed. Here is an overview of the account it belonged to.',

    'maintenance_mode'              => 'Firefly III veikia priežiūros režimu.',
    'be_right_back'                 => 'Tuoj grįšiu!',
    'check_back'                    => 'Firefly III is down for some necessary maintenance. Please check back in a second. If you happen to see this message on the demo site, just wait a few minutes. The database is reset every few hours.',
    'error_occurred'                => 'Oi! Įvyko klaida.',
    'db_error_occurred'             => 'Oi! Įvyko duomenų bazės klaida.',
    'error_not_recoverable'         => 'Deja, ši klaida nebuvo ištaisyta :(. Firefly III sugedo. Klaida yra:',
    'error'                         => 'Klaida',
    'error_location'                => 'This error occurred in file <span style="font-family: monospace;">:file</span> on line :line with code :code.',
    'stacktrace'                    => 'Įrašas',
    'more_info'                     => 'Daugiau informacijos',

    'collect_info'                  => 'Please collect more information in the <code>storage/logs</code> directory where you will find log files. If you\'re running Docker, use <code>docker logs -f [container]</code>.',
    'collect_info_more'             => 'Daugiau apie klaidų informacijos rinkimą galite perskaityti <a href="https://docs.firefly-iii.org/how-to/general/debug/">DUK</a>.',
    'github_help'                   => 'Gaukite pagalbos „GitHub“',
    'github_instructions'           => 'Maloniai kviečiame atidaryti naują svarstoma problemą <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">„GitHub“</a></strong>.',
    'use_search'                    => 'Pasinaudokite paieška!',
    'include_info'                  => 'Įtraukite informaciją <a href=":link">iš šio derinimo puslapio</a>.',
    'tell_more'                     => 'Pasakykite mums daugiau, nei sakoma "Oho!"',
    'include_logs'                  => 'Įtraukite klaidų žurnalus (žr. aukščiau).',
    'what_did_you_do'               => 'Papasakokite, ką darėte.',
];
