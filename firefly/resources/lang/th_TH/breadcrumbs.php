<?php

/**
 * breadcrumbs.php
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
    'home'                   => 'หน้าหลัก',
    'subscriptions'          => 'Subscriptions',
    'title_expenses'         => 'ค่าใช้จ่าย',
    'title_withdrawal'       => 'ค่าใช้จ่าย',
    'title_revenue'          => 'รายได้ / รายรับ',
    'title_deposit'          => 'รายได้ / รายรับ',
    'title_transfer'         => 'โอน',
    'title_transfers'        => 'โอน',
    'edit_currency'          => 'แก้ไขสกุลเงิน (:name)',
    'delete_currency'        => 'ลบสกุลเงิน (:name)',
    'newPiggyBank'           => 'สร้างกระปุกออมสิน',
    'edit_piggyBank'         => 'แก้ไขกระปุกออมสิน":name"',
    'preferences'            => 'การตั้งค่า',
    'profile'                => 'โปรไฟล์',
    'accounts'               => 'บัญชี',
    'changePassword'         => 'เปลี่ยนรหัสผ่านของคุณ',
    'change_email'           => 'เปลี่ยนที่อยู่อีเมลของคุณ',
    'bills'                  => 'สมัครสมาชิก',
    'newBill'                => 'การสมัครสมาชิกใหม่',
    'edit_bill'              => 'Edit subscription ":name"',
    'delete_bill'            => 'Delete subscription ":name"',
    'reports'                => 'รายงาน',
    'search_result'          => 'ผลการค้นหา ":query"',
    'withdrawal_list'        => 'ค่าใช้จ่าย',
    'all_list'               => 'All transactions',
    'Withdrawal_list'        => 'ค่าใช้จ่าย',
    'deposit_list'           => 'รายได้ และ เงินฝาก',
    'transfer_list'          => 'โอน',
    'transfers_list'         => 'โอน',

    'reconciliation_list'    => 'การกระทบยอดหนี้',
    'create_withdrawal'      => 'สร้างรายการถอนเงิน',
    'create_deposit'         => 'สร้างรายการฝากเงิน',
    'create_transfer'        => 'สร้างรายการโอน',
    'create_new_transaction' => 'สร้างธุรกรรมใหม่',
    'edit_journal'           => 'แก้ไขธุรกรรม":description"',
    'edit_reconciliation'    => 'แก้ไข ":description"',
    'delete_journal'         => 'ลบธุรกรรม":description"',
    'delete_group'           => 'ลบธุรกรรม ":description"',
    'tags'                   => 'แท็ก',
    'createTag'              => 'สร้างแท็กใหม่',
    'edit_tag'               => 'แก้ไขแท็ก ":tag"',
    'delete_tag'             => 'ลบแท็ก ":tag"',
    'delete_journal_link'    => 'ลบการเชื่อมโยงระหว่างธุรกรรม',
    'edit_object_group'      => 'แก้ไขกลุ่ม ":title"',
    'delete_object_group'    => 'ลบกลุ่ม ":title"',
    'logout_others'          => 'ออกจากระบบเซสชั่นอื่น',
    'asset_accounts'         => 'บัญชีทรัพย์สิน',
    'expense_accounts'       => 'บัญชีรายจ่าย',
    'revenue_accounts'       => 'บัญชีรายได้',
    'liabilities_accounts'   => 'หนี้สิน',
    'placeholder'            => '[ข้อความตัวอย่าง]',

    // mfa
    'profile_mfa'            => 'ยืนยันตัวตนแบบหลายปัจจัย',
    'mfa_enableMFA'          => 'Enable multi-factor authentication',
    'mfa_backup_codes'       => 'Backup codes',
    'mfa_disableMFA'         => 'Disable multi-factor authentication',

    // notifications
    'notification_index'     => 'Owner notifications',

    // exchange rates
    'exchange_rates_index'   => 'Exchange rates',
    'exchange_rates_rates'   => 'Exchange rates between :from and :to (and the other way around)',
];
