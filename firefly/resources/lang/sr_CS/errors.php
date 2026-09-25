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
    '404_header'                    => 'Firefly III ne može pronaći ovu stranicu.',
    '404_page_does_not_exist'       => 'Stranica koju ste tražili ne postoji. Molimo provjerite da niste unijeli pogrešan URL. Da li ste možda pogrešili?',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'Ako ste automatski preusmjereni na ovu stranicu, prihvatite moje izvinjenje. Ova greška se pominje u vašim log datotekama i bio bih vam zahvalan ako biste mi poslali grešku.',
    '404_github_link'               => 'Ako ste sigurni da bi ova stranica trebala postojati, otvorite ulaznicu na <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'note_not_found_account'        => 'Account ":name" has been deleted and can no longer be viewed. Please enjoy this overview of all other accounts of the same type.',
    'note_not_found_group'          => 'Transaction ":description" has been deleted and can no longer be viewed. Please enjoy this overview of all other transactions of the same type.',
    'note_not_found_reconciliation' => 'Reconciliation ":description" has been deleted and can no longer be viewed. Here is an overview of the account it belonged to.',

    'maintenance_mode'              => 'Firefly III je u režimu održavanja.',
    'be_right_back'                 => 'Odmah se vraćamo!',
    'check_back'                    => 'Firefly III is down for some necessary maintenance. Please check back in a second. If you happen to see this message on the demo site, just wait a few minutes. The database is reset every few hours.',
    'error_occurred'                => 'Ups! Došlo je do greške.',
    'db_error_occurred'             => 'Ups! Dosšlo je do greške sa bazom.',
    'error_not_recoverable'         => 'Nažalost, ovu grešku nije bilo moguće popraviti :(. Firefly III se pokvario. Greška je:',
    'error'                         => 'Greška',
    'error_location'                => 'This error occurred in file <span style="font-family: monospace;">:file</span> on line :line with code :code.',
    'stacktrace'                    => 'Praćenje steka',
    'more_info'                     => 'Više informacija',

    'collect_info'                  => 'Molimo prikupite više informacija u direktorijumu <code>storage/logs</code> gdje ćete pronaći datoteke dnevnika. Ako koristite Docker, koristite <code>docker logs -f [kontejner]</code>.',
    'collect_info_more'             => 'Više o prikupljanju informacija o greškama možete pročitati u <a href="https://docs.firefly-iii.org/how-to/general/debug/">često postavljanim pitanjima</a>.',
    'github_help'                   => 'Potražite pomoć na GitHubu',
    'github_instructions'           => 'Više ste nego dobrodošli da otvorite novo izdanje <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">na GitHubu</a></strong>.',
    'use_search'                    => 'Koristite pretragu!',
    'include_info'                  => 'Uključite informacije <a href=":link">sa ove stranice za otklanjanje grešaka</a>.',
    'tell_more'                     => 'Recite nam više od "piše Ups!"',
    'include_logs'                  => 'Uključite evidencije grešaka (vidi gore).',
    'what_did_you_do'               => 'Recite nam šta ste radili.',
];
