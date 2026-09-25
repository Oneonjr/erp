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
    '404_header'                    => '이 페이지를 찾을 수 없습니다.',
    '404_page_does_not_exist'       => '요청하신 페이지가 존재하지 않습니다. 잘못된 URL을 입력하지 않았는지 확인해 주세요. 혹시 오타가 아닐까요?',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => '이 페이지로 자동 리디렉션 되었다면, 대단히 죄송합니다. 로그 파일을 참조하여 이 오류에 대한 내용을 보내 주시면 감사하겠습니다.',
    '404_github_link'               => '이 페이지가 있어야 하는 것이 확실하다면 <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>에서 티켓을 만들어주세요.',
    'note_not_found_account'        => 'Account ":name" has been deleted and can no longer be viewed. Please enjoy this overview of all other accounts of the same type.',
    'note_not_found_group'          => 'Transaction ":description" has been deleted and can no longer be viewed. Please enjoy this overview of all other transactions of the same type.',
    'note_not_found_reconciliation' => 'Reconciliation ":description" has been deleted and can no longer be viewed. Here is an overview of the account it belonged to.',

    'maintenance_mode'              => 'Firefly III가 유지 관리 모드입니다.',
    'be_right_back'                 => '곧 돌아올게요!',
    'check_back'                    => 'Firefly III가 필수적인 유지보수를 위해 작동을 정지했습니다. 잠시 후 다시 방문하십시오. 데모 사이트에서 이 메시지가 표시될 경우, 몇분 후 다시 접속하십시오. 데이터베이스는 수시간에 한번 정리 작업이 진행됩니다.',
    'error_occurred'                => '이런! 오류가 발생했습니다.',
    'db_error_occurred'             => '이런! 데이터베이스 오류가 발생했습니다.',
    'error_not_recoverable'         => '오류가 발생했으나 자동으로 복구할 수 없었습니다, :( Firefly III 가 아픕니다. 오류:',
    'error'                         => '오류',
    'error_location'                => '이 오류는 파일 "<span style="font-family: monospace;">:file</span>"의 :line번 줄 ":code" 코드에서 발생했습니다.',
    'stacktrace'                    => 'Stack trace',
    'more_info'                     => '추가 정보',

    'collect_info'                  => '<code>storage/logs</code> 디렉토리의 로그 파일에서 자세한 정보를 수집할 수 있습니다. 도커에서 실행중이라면 <code>docker logs -f [컨테이너 이름]</code>명령어를 사용하세요.',
    'collect_info_more'             => '오류 정보 수집에 대한 자세한 내용은 <a href="https://docs.firefly-iii.org/how-to/general/debug/">FAQ</a>에서 읽을 수 있습니다.',
    'github_help'                   => 'GitHub에서 도움 얻기',
    'github_instructions'           => '<strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub에서</a></strong> 언제든 새로운 이슈를 열 수 있습니다.',
    'use_search'                    => '검색을 이용하세요!',
    'include_info'                  => '<a href=":link">이 디버그 페이지</a>의 정보를 포함합니다.',
    'tell_more'                     => '설명은 가급적 구체적으로 부탁드립니다.',
    'include_logs'                  => '오류 로그를 포함합니다 (상단 참조).',
    'what_did_you_do'               => '무엇을 하고 있었는지 알려주세요.',
];
