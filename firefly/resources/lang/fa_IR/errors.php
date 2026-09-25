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
    '404_header'                    => 'Firefly III نمی تواند این صفحه را پیدا کند.
',
    '404_page_does_not_exist'       => 'صفحه ای که درخواست کرده اید وجود ندارد. لطفاً بررسی کنید که URL را اشتباه وارد نکرده باشید. شاید اشتباه تایپی کردی؟
',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'اگر به طور خودکار به این صفحه هدایت شدید، عذرخواهی من را بپذیرید. در فایل های لاگ شما به این خطا اشاره شده است و ممنون می شوم اگر این خطا را برای من ارسال کنید.
',
    '404_github_link'               => 'اگر مطمئن هستید که این صفحه باید وجود داشته باشد، لطفاً یک تیکت در <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong> باز کنید.',
    'note_not_found_account'        => 'Account ":name" has been deleted and can no longer be viewed. Please enjoy this overview of all other accounts of the same type.',
    'note_not_found_group'          => 'Transaction ":description" has been deleted and can no longer be viewed. Please enjoy this overview of all other transactions of the same type.',
    'note_not_found_reconciliation' => 'Reconciliation ":description" has been deleted and can no longer be viewed. Here is an overview of the account it belonged to.',

    'maintenance_mode'              => 'Firefly III در حالت تعمیر و نگهداری است.
',
    'be_right_back'                 => 'الآن برمیگردم!
',
    'check_back'                    => 'Firefly III is down for some necessary maintenance. Please check back in a second. If you happen to see this message on the demo site, just wait a few minutes. The database is reset every few hours.',
    'error_occurred'                => 'اوپس خطایی رخ داد.
',
    'db_error_occurred'             => 'اوف یک خطای پایگاه داده رخ داد.
',
    'error_not_recoverable'         => 'متاسفانه این ارور قابل بازیابی نبود :(. Firefly III خراب شد. ارور این است:
',
    'error'                         => 'خطا',
    'error_location'                => 'This error occurred in file <span style="font-family: monospace;">:file</span> on line :line with code :code.',
    'stacktrace'                    => 'ردیابی پشته',
    'more_info'                     => 'اطلاعات بیشتر',

    'collect_info'                  => 'لطفاً اطلاعات بیشتری را در فهرست <code>storage/logs</code> که در آن فایل‌های گزارش را پیدا خواهید کرد، جمع‌آوری کنید. اگر Docker را اجرا می کنید، از <code>docker logs -f [container]</code> استفاده کنید.
',
    'collect_info_more'             => 'می‌توانید درباره جمع‌آوری اطلاعات خطا در <a href="https://docs.firefly-iii.org/how-to/general/debug/">سؤالات متداول</a> اطلاعات بیشتری کسب کنید.
',
    'github_help'                   => 'در GitHub کمک بگیرید
',
    'github_instructions'           => 'برای باز کردن یک شماره جدید <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">در GitHub</a></strong> بسیار خوش آمدید.
',
    'use_search'                    => 'از جستجو استفاده کنید!
',
    'include_info'                  => 'اطلاعات <a href=":link">از این صفحه رفع اشکال</a> را وارد کنید.
',
    'tell_more'                     => 'به ما بیشتر از "اوف!" بگو!

',
    'include_logs'                  => 'شامل گزارش های خطا (به بالا مراجعه کنید).
',
    'what_did_you_do'               => 'لطفاً بفرمایید که چه کاری انجام می‌دادید.

',
];
