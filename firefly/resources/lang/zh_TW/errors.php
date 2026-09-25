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
    '404_header'                    => 'Firefly III 找不到此頁面。',
    '404_page_does_not_exist'       => '您請求的頁面不存在。請檢查您是否輸入了錯誤的網址。您是否打錯字了？',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => '如果您確定此頁面應該運作正常，請在<strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>上開票。',
    '404_send_error'                => '如果您被自動導向到此頁面，請接受我的歉意。您的日誌檔案中提到了此錯誤，如果您將錯誤發送給我，我將不勝感激。',
    '404_github_link'               => '如果您確定此頁面應該存在，請在 <strong><a href="https://github.com/firefly-iii/firefly-iii/issues"> GitHub </a></strong> 上開票。',
    'note_not_found_account'        => '帳戶":name"已被刪除並不能再被查看。請使用此概覽來查看所有其他同類帳戶。',
    'note_not_found_group'          => '交易":description"已被刪除並不能再被查看。請使用此概覽來查看所有其他同類交易。',
    'note_not_found_reconciliation' => 'Reconciliation ":description" has been deleted and can no longer be viewed. Here is an overview of the account it belonged to.',

    'maintenance_mode'              => 'Firefly III 正在維護中。',
    'be_right_back'                 => '很快回來！',
    'check_back'                    => 'Firefly III 正在進行必要維護。請稍後再試。如果您在示範網站上看到此訊息，只需等待幾分鐘即可。資料庫每隔幾個小時會重設一次。',
    'error_occurred'                => '哎呀！發生錯誤。',
    'db_error_occurred'             => '哎呀！發生資料庫錯誤。',
    'error_not_recoverable'         => '很遺憾，這個錯誤無法復原 :(. Firefly III 已崩潰。錯誤為：',
    'error'                         => '錯誤',
    'error_location'                => '此錯誤發生在檔案 <span style="font-family: monospace;">:file</span> 第 :line 行，代碼為 :code。',
    'stacktrace'                    => '堆疊追蹤',
    'more_info'                     => '更多資訊',

    'collect_info'                  => '請在 <code>storage/logs</code> 目錄中收集更多資訊。若您使用 Docker，請用 <code>docker logs -f [container]</code>。',
    'collect_info_more'             => '您可以在<a href="https://docs.firefly-iii.org/how-to/general/debug/">常見問答</a>中閱讀更多關於收集錯誤資訊的內容。',
    'github_help'                   => '在 GitHub 上尋求協助',
    'github_instructions'           => '非常歡迎您在 <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong> 提交新的 issue。',
    'use_search'                    => '請先使用搜尋！',
    'include_info'                  => '請包含<a href=":link">此除錯頁面</a>上的資訊。',
    'tell_more'                     => '提供的資訊請多於 "它顯示 Whoops!"',
    'include_logs'                  => '請包含錯誤日誌 (見上方)。',
    'what_did_you_do'               => '請告知您進行了哪些操作。',
];
