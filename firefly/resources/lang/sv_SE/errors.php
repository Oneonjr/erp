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
    '404_header'                    => 'Firefly III kan inte hitta denna sida.',
    '404_page_does_not_exist'       => 'Sidan du har begärt finns inte. Kontrollera att du inte har angett fel URL. Har du kanske gjort en felstavning?',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'Om du omdirigerades till denna sida automatiskt, vänligen acceptera min ursäkt. Det finns ett omnämnande av detta fel i dina loggfiler och jag skulle vara tacksam om du skickade mig felet till mig.',
    '404_github_link'               => 'Om du är säker på att denna sida borde finnas, vänligen öppna ett ärende på <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'note_not_found_account'        => 'Account ":name" has been deleted and can no longer be viewed. Please enjoy this overview of all other accounts of the same type.',
    'note_not_found_group'          => 'Transaction ":description" has been deleted and can no longer be viewed. Please enjoy this overview of all other transactions of the same type.',
    'note_not_found_reconciliation' => 'Reconciliation ":description" has been deleted and can no longer be viewed. Here is an overview of the account it belonged to.',

    'maintenance_mode'              => 'Firefly III är i underhållsläge.',
    'be_right_back'                 => 'Strax tillbaka!',
    'check_back'                    => 'Firefly III is down for some necessary maintenance. Please check back in a second. If you happen to see this message on the demo site, just wait a few minutes. The database is reset every few hours.',
    'error_occurred'                => 'Hoppsan! Ett fel uppstod.',
    'db_error_occurred'             => 'Hoppsan! Ett databasfel inträffade.',
    'error_not_recoverable'         => 'Oturligt nog har ett återkalligt fel skett :(. Firefly III har gått sönder. Felet är:',
    'error'                         => 'Fel',
    'error_location'                => 'This error occurred in file <span style="font-family: monospace;">:file</span> on line :line with code :code.',
    'stacktrace'                    => 'Stackspårning',
    'more_info'                     => 'Mer information',

    'collect_info'                  => 'Vänligen samla in mer information i katalogen <code>lagring/loggar</code> där du hittar loggfiler. Om du kör Docker, använd <code>dockerloggar -f [container]</code>.',
    'collect_info_more'             => 'Du kan läsa mer om att samla in felinformation i <a href="https://docs.firefly-iii.org/how-to/general/debug/">FAQ:n</a>.',
    'github_help'                   => 'Få hjälp på GitHub',
    'github_instructions'           => 'Du är mer än välkommen att öppna ett ärende <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">på GitHub</a></strong>.',
    'use_search'                    => 'Använd sökningen!',
    'include_info'                  => 'Inkludera informationen <a href=":link">från denna debug-sida</a>.',
    'tell_more'                     => 'Berätta mer än "det står Hoppsan!"',
    'include_logs'                  => 'Inkludera felloggar (se ovan).',
    'what_did_you_do'               => 'Berätta vad du gjorde.',
];
