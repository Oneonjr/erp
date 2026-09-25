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
    '404_header'                    => 'Firefly III não encontrou esta página.',
    '404_page_does_not_exist'       => 'A página solicitada não existe. Por favor, verifique se não inseriu o URL errado. Talvez se tenha enganado a digitar?',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'Se foi redirecionado para esta página automaticamente, por favor, aceite as minhas desculpas. Há uma referência a este erro nos seus ficheiros de registo e ficaria muito agradecido se ma pudesse enviar.',
    '404_github_link'               => 'Se tem a certeza de que esta página existe, abra um ticket no <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'note_not_found_account'        => 'Account ":name" has been deleted and can no longer be viewed. Please enjoy this overview of all other accounts of the same type.',
    'note_not_found_group'          => 'Transaction ":description" has been deleted and can no longer be viewed. Please enjoy this overview of all other transactions of the same type.',
    'note_not_found_reconciliation' => 'Reconciliation ":description" has been deleted and can no longer be viewed. Here is an overview of the account it belonged to.',

    'maintenance_mode'              => 'O Firefly III está em modo de manutenção.',
    'be_right_back'                 => 'Volto já!',
    'check_back'                    => 'Firefly III is down for some necessary maintenance. Please check back in a second. If you happen to see this message on the demo site, just wait a few minutes. The database is reset every few hours.',
    'error_occurred'                => 'Oops! Ocorreu um erro.',
    'db_error_occurred'             => 'Oops! Ocorreu um erro na base de dados.',
    'error_not_recoverable'         => 'Infelizmente, este erro não era recuperável :(. Firefly III avariou. O erro é:',
    'error'                         => 'Erro',
    'error_location'                => 'This error occurred in file <span style="font-family: monospace;">:file</span> on line :line with code :code.',
    'stacktrace'                    => 'Rastreamento da pilha',
    'more_info'                     => 'Mais informação',

    'collect_info'                  => 'Por favor, recolha mais informação na pasta <code>storage/logs</code> que é onde encontra os ficheiros de log. Se estiver a utilizar Docker, utilize <code>docker logs -f [container]</code>.',
    'collect_info_more'             => 'Pode ler mais sobre a coleta de informação de erros no <a href="https://docs.firefly-iii.org/how-to/general/debug/"> o FAQ</a>.',
    'github_help'                   => 'Obter ajuda no GitHub',
    'github_instructions'           => 'Esteja completamente à vontade em abrir uma nova questão <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">no GitHub</a></strong>.',
    'use_search'                    => 'Use a pesquisa!',
    'include_info'                  => 'Inclua a informação <a href=":link">da página de depuração</a>.',
    'tell_more'                     => 'Diga-nos mais do que "diz Oops! no ecrã"',
    'include_logs'                  => 'Incluir relatório de erros (ver acima).',
    'what_did_you_do'               => 'Diga-nos o que estava a fazer.',
];
