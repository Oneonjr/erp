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
    '404_header'                    => 'Firefly III không thể tìm thấy trang này.',
    '404_page_does_not_exist'       => 'Trang bạn yêu cầu không tồn tại. Vui lòng kiểm tra rằng bạn đã không nhập sai URL. Có lẽ lỗi đánh máy?',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'Nếu bạn được chuyển hướng đến trang này tự động, vui lòng chấp nhận lời xin lỗi của tôi. Có một đề cập về lỗi này trong các tệp nhật ký của bạn và tôi sẽ biết ơn nếu bạn gửi lỗi cho tôi.',
    '404_github_link'               => 'Nếu bạn chắc chắn trang này tồn tại, vui lòng mở một yêu cầu trên <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'note_not_found_account'        => 'Account ":name" has been deleted and can no longer be viewed. Please enjoy this overview of all other accounts of the same type.',
    'note_not_found_group'          => 'Transaction ":description" has been deleted and can no longer be viewed. Please enjoy this overview of all other transactions of the same type.',
    'note_not_found_reconciliation' => 'Reconciliation ":description" has been deleted and can no longer be viewed. Here is an overview of the account it belonged to.',

    'maintenance_mode'              => 'Firefly III đang bảo trì.',
    'be_right_back'                 => 'Sẽ quay lại ngay!',
    'check_back'                    => 'Firefly III is down for some necessary maintenance. Please check back in a second. If you happen to see this message on the demo site, just wait a few minutes. The database is reset every few hours.',
    'error_occurred'                => 'Rất tiếc! Lỗi xảy ra.',
    'db_error_occurred'             => 'Ây dà! Có lỗi trong cơ sở dữ liệu.',
    'error_not_recoverable'         => 'Thật không may, lỗi này không thể phục hồi :(. Firefly III đã bị hỏng. Lỗi là:',
    'error'                         => 'Lỗi',
    'error_location'                => 'This error occurred in file <span style="font-family: monospace;">:file</span> on line :line with code :code.',
    'stacktrace'                    => 'Stack trace',
    'more_info'                     => 'Thông tin thêm',

    'collect_info'                  => 'Vui lòng thu thập thêm thông tin trong <code>storage/logs</code> nơi bạn lưu file log.',
    'collect_info_more'             => 'You can read more about collecting error information in <a href="https://docs.firefly-iii.org/how-to/general/debug/">the FAQ</a>.',
    'github_help'                   => 'Nhận trợ giúp trên GitHub',
    'github_instructions'           => 'Nếu bạn chắc chắn trang này tồn tại, vui lòng mở một yêu cầu trên <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'use_search'                    => 'Sử dụng tìm kiếm!',
    'include_info'                  => 'Bao gồm thông tin <a href=":link"> từ trang debug</a>.',
    'tell_more'                     => 'Hãy nói với chúng tôi nhiều hơn "nó nói Rất tiếc!"',
    'include_logs'                  => 'Bao gồm các bản ghi lỗi (xem ở trên).',
    'what_did_you_do'               => 'Hãy cho chúng tôi biết những gì bạn đã làm.',
];
