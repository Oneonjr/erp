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
    'home'                   => 'Domov',
    'subscriptions'          => 'Naročnine',
    'title_expenses'         => 'Stroški',
    'title_withdrawal'       => 'Stroški',
    'title_revenue'          => 'Dohodki / prihodki',
    'title_deposit'          => 'Dohodki / prihodki',
    'title_transfer'         => 'Prenosi',
    'title_transfers'        => 'Prenosi',
    'edit_currency'          => 'Uredi valuto ":name"',
    'delete_currency'        => 'Izbriši valuto ":name"',
    'newPiggyBank'           => 'Ustvari nov hranilnik',
    'edit_piggyBank'         => 'Uredi hranilnik ":name"',
    'preferences'            => 'Nastavitve',
    'profile'                => 'Profil',
    'accounts'               => 'Računi',
    'changePassword'         => 'Spremenite geslo',
    'change_email'           => 'Spremenite e-poštni naslov',
    'bills'                  => 'Naročnine',
    'newBill'                => 'Nova naročnina',
    'edit_bill'              => 'Uredi naročnino ":name"',
    'delete_bill'            => 'Izbriši naročnino ":name"',
    'reports'                => 'Poročila',
    'search_result'          => 'Rezultati iskanja za ":query"',
    'withdrawal_list'        => 'Stroški',
    'all_list'               => 'Vse transakcije',
    'Withdrawal_list'        => 'Stroški',
    'deposit_list'           => 'Prihodki, dohodki in prilivi',
    'transfer_list'          => 'Prenosi',
    'transfers_list'         => 'Prenosi',

    'reconciliation_list'    => 'Poravnave',
    'create_withdrawal'      => 'Ustvari nov odliv',
    'create_deposit'         => 'Ustvari nov priliv',
    'create_transfer'        => 'Ustvari nov prenos',
    'create_new_transaction' => 'Ustvari novo transakcijo',
    'edit_journal'           => 'Uredi transakcijo ":description"',
    'edit_reconciliation'    => 'Uredi ":description"',
    'delete_journal'         => 'Izbriši transakcijo ":description"',
    'delete_group'           => 'Izbriši transakcijo ":description"',
    'tags'                   => 'Oznake',
    'createTag'              => 'Ustvari novo oznako',
    'edit_tag'               => 'Posodobi oznako ":tag"',
    'delete_tag'             => 'Izbriši oznako ":tag"',
    'delete_journal_link'    => 'Izbriši povezavo med transakcijami',
    'edit_object_group'      => 'Uredi skupino ":title"',
    'delete_object_group'    => 'Izbriši skupino ":title"',
    'logout_others'          => 'Odjavi druge seje',
    'asset_accounts'         => 'Premoženjski računi',
    'expense_accounts'       => 'Računi stroškov',
    'revenue_accounts'       => 'Računi prihodkov',
    'liabilities_accounts'   => 'Obveznosti',
    'placeholder'            => '[Placeholder]',

    // mfa
    'profile_mfa'            => 'Večfaktorska avtentikacija',
    'mfa_enableMFA'          => 'Omogoči večfaktorsko avtentikacijo',
    'mfa_backup_codes'       => 'Rezervne kode',
    'mfa_disableMFA'         => 'Onemogoči večfaktorsko avtentikacijo',

    // notifications
    'notification_index'     => 'Skrbniška obvestila',

    // exchange rates
    'exchange_rates_index'   => 'Menjalni tečaji',
    'exchange_rates_rates'   => 'Menjalni tečaji med :from in :to (in obratno)',
];
