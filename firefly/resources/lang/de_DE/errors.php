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
    '404_header'                    => 'Firefly III kann diese Seite nicht finden.',
    '404_page_does_not_exist'       => 'Die angeforderte Seite existiert nicht. Bitte überprüfen Sie, ob Sie nicht die falsche URL eingegeben haben. Haben Sie vielleicht einen Tippfehler gemacht?',

    '405_header'                    => 'Firefly III erlaubt diese Methode nicht.',
    '405_page_does_not_exist'       => 'Diese Anfrage-Methode kann auf dieser Seite nicht verwendet werden. Bitte überprüfen Sie, ob Sie die richtige URL eingegeben haben. Möglicherweise haben Sie sich vertippt?',
    '405_github_link'               => 'Wenn Sie sicher sind, dass diese Seite funktionieren sollte, erstellen Sie bitte ein Ticket auf <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'Wenn Sie automatisch auf diese Seite weitergeleitet wurden, nehmen Sie bitte meine Entschuldigung an. Es gibt einen Hinweis auf diesen Fehler in Ihren Logdateien, und ich wäre Ihnen dankbar, wenn Sie mir den Fehler schicken würden.',
    '404_github_link'               => 'Wenn Sie sicher sind, dass diese Seite existieren soll, öffnen Sie bitte ein Ticket auf <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'note_not_found_account'        => 'Das Konto „:name“ wurde gelöscht und kann nicht mehr angezeigt werden. Hier finden Sie eine Übersicht über alle anderen Konten desselben Typs.',
    'note_not_found_group'          => 'Die Buchung „:description“ wurde gelöscht und kann nicht mehr eingesehen werden. Hier finden Sie eine Übersicht über alle anderen Buchungen desselben Typs.',
    'note_not_found_reconciliation' => 'Der Kontoauszug „:description“ wurde gelöscht und kann nicht mehr eingesehen werden. Hier finden Sie eine Übersicht über jenes Konto, zu dem er gehörte.',

    'maintenance_mode'              => 'Firefly III ist im Wartungsmodus.',
    'be_right_back'                 => 'Gleich wieder zurück!',
    'check_back'                    => 'Firefly III ist für einige notwendige Wartungsarbeiten nicht verfügbar. Bitte schauen Sie in einer Sekunde wieder vorbei. Wenn Sie diese Meldung auf der Demoseite sehen, warten Sie einfach ein paar Minuten. Die Datenbank wird nach ein paar Stunden zurückgesetzt.',
    'error_occurred'                => 'Hoppla! Ein Fehler ist aufgetreten.',
    'db_error_occurred'             => 'Hoppla! Ein Datenbankfehler ist aufgetreten.',
    'error_not_recoverable'         => 'Leider konnte dieser Fehler nicht wiederhergestellt werden :(. Firefly III ist kaputt. Der Fehler ist:',
    'error'                         => 'Fehler',
    'error_location'                => 'Dieser Fehler trat in der Datei <span style="font-family: monospace;">:file</span> in der Zeile :line mit dem Code :code auf.',
    'stacktrace'                    => 'Stack-Trace',
    'more_info'                     => 'Weitere Informationen',

    'collect_info'                  => 'Bitte sammeln Sie weitere Informationen im Verzeichnis <code>storage/logs</code> wo Sie Logdateien finden können. Wenn Sie Docker verwenden, verwenden Sie <code>docker logs -f [container]</code>.',
    'collect_info_more'             => 'Weitere Informationen zum Sammeln von Fehlerinformationen finden Sie <a href="https://docs.firefly-iii.org/how-to/general/debug/">im FAQ</a>.',
    'github_help'                   => 'Hilfe auf GitHub erhalten',
    'github_instructions'           => 'Sie sind herzlich eingeladen, ein neues Ticket <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">auf GitHub</a></strong> zu öffnen.',
    'use_search'                    => 'Benutzen Sie die Suche!',
    'include_info'                  => 'Fügen Sie die Informationen <a href=":link">von dieser Debug-Seite</a> ein.',
    'tell_more'                     => 'Sagen Sie uns mehr als "Da steht Hoppla!"',
    'include_logs'                  => 'Fehlerprotokolle einschließen (siehe oben).',
    'what_did_you_do'               => 'Teilen Sie uns mit, was Sie getan haben.',
];
