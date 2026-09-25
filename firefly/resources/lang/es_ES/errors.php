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
    '404_header'                    => 'Firefly III no puede encontrar esta página.',
    '404_page_does_not_exist'       => 'La página que ha solicitado no existe. Por favor, compruebe que no ha introducido la URL incorrecta. ¿Ha cometido un error tipográfico?',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'Si fue redirigido a esta página automáticamente, por favor acepte mis disculpas. Hay una mención de este error en sus archivos de registro y le agradecería que me enviara el error.',
    '404_github_link'               => 'Si está seguro de que esta página debería existir, abra un ticket en <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'note_not_found_account'        => 'Account ":name" has been deleted and can no longer be viewed. Please enjoy this overview of all other accounts of the same type.',
    'note_not_found_group'          => 'Transaction ":description" has been deleted and can no longer be viewed. Please enjoy this overview of all other transactions of the same type.',
    'note_not_found_reconciliation' => 'Reconciliation ":description" has been deleted and can no longer be viewed. Here is an overview of the account it belonged to.',

    'maintenance_mode'              => 'Firefly III está en modo mantenimiento.',
    'be_right_back'                 => '¡Enseguida vuelvo!',
    'check_back'                    => 'Firefly III está apagado para el mantenimiento necesario. Por favor, prueba de nuevo en un segundo. Si usted ve este mensaje en el sitio de demostración, espere unos minutos. La base de datos se restablece cada pocas horas.',
    'error_occurred'                => '¡Uy! un error ha ocurrido.',
    'db_error_occurred'             => '¡Ups! Se ha producido un error en la base de datos.',
    'error_not_recoverable'         => 'Desafortunadamente, este error no se pudo recuperar :(. Firefly III se rompió. El error es:',
    'error'                         => 'Error',
    'error_location'                => 'Este error ha ocurrido en el archivo <span style="font-family: monospace;">:file</span> en la línea :line con el código :code.',
    'stacktrace'                    => 'Seguimiento de la pila',
    'more_info'                     => 'Más información',

    'collect_info'                  => 'Por favor, recopile más información en el directorio <code>storage/logs</code> donde encontrará los archivos de registro. Si está ejecutando Docker, use <code>registros docker -f [container]</code>.',
    'collect_info_more'             => 'Puede leer más acerca de la recolección de información de errores en <a href="https://docs.firefly-iii.org/how-to/general/debug/">la FAQ</a>.',
    'github_help'                   => 'Obtener ayuda en GitHub',
    'github_instructions'           => 'Es bienvenido a abrir un nuevo issue <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">en GitHub</a></strong>.',
    'use_search'                    => '¡Use la búsqueda!',
    'include_info'                  => 'Incluya la información <a href=":link">de esta página de depuración</a>.',
    'tell_more'                     => 'Cuéntenos más que "Dice: Ups"',
    'include_logs'                  => 'Incluye registros de errores (ver arriba).',
    'what_did_you_do'               => 'Cuéntenos lo que estaba haciendo.',
];
