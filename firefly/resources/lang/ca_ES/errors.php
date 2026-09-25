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
    '404_header'                    => 'FIrefly III no pot trobar aquesta pàgina.',
    '404_page_does_not_exist'       => 'La pàgina que has sol·licitat no existeix. Si us plau, comprova que no has introduït un URL erroni. Has comès un error tipogràfic?',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'Si has estat redirigit a aquesta pàgina automàticament, si us plau, accepta les meves disculpes. Hi ha una menció d\'aquest error als fitxers de registre, i t\'agrairia que me l\'enviessis.',
    '404_github_link'               => 'Si n\'estàs segur que aquesta pàgina hauria d\'existir, si us plau, obre un tiquet a <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'note_not_found_account'        => 'Account ":name" has been deleted and can no longer be viewed. Please enjoy this overview of all other accounts of the same type.',
    'note_not_found_group'          => 'Transaction ":description" has been deleted and can no longer be viewed. Please enjoy this overview of all other transactions of the same type.',
    'note_not_found_reconciliation' => 'Reconciliation ":description" has been deleted and can no longer be viewed. Here is an overview of the account it belonged to.',

    'maintenance_mode'              => 'Firefly III està en mode de manteniment.',
    'be_right_back'                 => 'Fins ara!',
    'check_back'                    => 'Firefly III no funciona per manteniment necessari. Si us plau, torneu a comprovar-ho en un segon. Si veieu aquest missatge al lloc web de demostració, espereu uns minuts. La base de dades es reinicia cada poques hores.',
    'error_occurred'                => 'Ups! Hi ha hagut un error.',
    'db_error_occurred'             => 'Ups! Hi ha hagut un error a la base de dades.',
    'error_not_recoverable'         => 'Malauradament, no s\'ha pogut recuperar d\'aquest error :(. Firefly III s\'ha trencat. L\'error és:',
    'error'                         => 'Error',
    'error_location'                => 'Aquest error ha ocorregut al fitxer <span style="font-family: monospace;"> a la línia :line amb el codi :code.',
    'stacktrace'                    => 'Traça de la pila',
    'more_info'                     => 'Més informació',

    'collect_info'                  => 'Si us plau, recopili més informació al directori <code>emmagatzematge/registre</code> on hi ha els fitxers de registre. Si utilitzes Docker, utilitza <code>docker logs -f [container]</code>.',
    'collect_info_more'             => 'Pots llegir més sobre la recol·lecció d\'errors a <a href="https://docs.firefly-iii.org/how-to/general/debug/">les FAQ</a>.',
    'github_help'                   => 'Obtenir ajuda a GitHub',
    'github_instructions'           => 'Ets més que benvingut a obrir un nou issue <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">a GitHub</a></strong>.',
    'use_search'                    => 'Utilitza la cerca!',
    'include_info'                  => 'Inclou la informació <a href=":link">d\'aquesta pàgina de depuració</a>.',
    'tell_more'                     => 'Explica\'ns més que "diu Ups"',
    'include_logs'                  => 'Inclou els registres d\'errors (mirar a sobre).',
    'what_did_you_do'               => 'Explica\'ns el que estaves fent.',
];
