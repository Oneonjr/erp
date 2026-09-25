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
    '404_header'                    => 'Firefly III nenašiel túto stránku.',
    '404_page_does_not_exist'       => 'Požadovaná stránka neexistuje. Skontrolujte, či ste zadali správnu URL adresu. Možno je v nej preklep.',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'Ak ste boli na túto stránku presmerovaní automaticky, ospravedlňujeme sa. Chyba je zaznamenaná v súboroch denníka a budeme vďační, ak nám ju nahlásite.',
    '404_github_link'               => 'Ak ste si istí, že by táto stránka mala existovať, vytvorte hlásenie na <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHube</a></strong>.',
    'note_not_found_account'        => 'Účet ":name" bol odstránený a už ho nie je možné zobraziť. Pozrite si tento prehľad všetkých ostatných účtov rovnakého typu.',
    'note_not_found_group'          => 'Transakcia ":description" bola vymazaná a už ju nie je možné zobraziť. Pozrite si tento prehľad všetkých ostatných transakcií rovnakého typu.',
    'note_not_found_reconciliation' => 'Zosúladenie ":description" bolo odstránené a už ho nie je možné zobraziť. Tu je prehľad účtu, ku ktorému patrilo.',

    'maintenance_mode'              => 'Firefly III je v údržbovom režime.',
    'be_right_back'                 => 'Hneď sme späť!',
    'check_back'                    => 'Firefly III je dočasne nedostupný z dôvodu potrebnej údržby. Skúste to znova o chvíľu. Ak túto správu vidíte na ukážkovej stránke, počkajte niekoľko minút. Databáza sa obnovuje každých niekoľko hodín.',
    'error_occurred'                => 'Ups! Vyskytla sa chyba.',
    'db_error_occurred'             => 'Ups! Vyskytla sa chyba databázy.',
    'error_not_recoverable'         => 'Túto chybu sa, žiaľ, nepodarilo odstrániť :(. Firefly III prestal fungovať. Chyba:',
    'error'                         => 'Chyba',
    'error_location'                => 'Táto chyba sa vyskytla v súbore <span style="font-family: monospace;">:file</span> na riadku :line s kódom :code.',
    'stacktrace'                    => 'Trasovanie zásobníka',
    'more_info'                     => 'Ďalšie informácie',

    'collect_info'                  => 'Ďalšie informácie nájdete v súboroch denníka v priečinku <code>storage/logs</code>. Ak používate Docker, spustite <code>docker logs -f [container]</code>.',
    'collect_info_more'             => 'Viac informácií o zhromažďovaní údajov o chybách nájdete v <a href="https://docs.firefly-iii.org/how-to/general/debug/">najčastejších otázkach</a>.',
    'github_help'                   => 'Získať pomoc na GitHube',
    'github_instructions'           => 'Budeme viac než radi, ak vytvoríte nové hlásenie na <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHube</a></strong>.',
    'use_search'                    => 'Použite vyhľadávanie!',
    'include_info'                  => 'Priložte informácie <a href=":link">z tejto ladiacej stránky</a>.',
    'tell_more'                     => 'Uveďte viac než len „zobrazilo sa Ups!“.',
    'include_logs'                  => 'Priložte chybové záznamy (pozri vyššie).',
    'what_did_you_do'               => 'Napíšte nám, čo ste robili, keď sa chyba vyskytla.',
];
