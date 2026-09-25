<?php

/*
 * rules.php
 * Copyright (c) 2023 james@firefly-iii.org
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
    'main_message'                                => 'عمل ":action"، موجود در قانون ":rule"، نمی تواند برای تراکنش #:group: :error اعمال شود
',
    'find_or_create_tag_failed'                   => 'نمی توان برچسب ":tag" را پیدا کرد یا ایجاد کرد
',
    'tag_already_added'                           => 'برچسب ":tag" قبلاً به این تراکنش پیوند داده شده است',
    'inspect_transaction'                         => 'تراکنش ":title" @ Firefly III را بررسی کنید',
    'inspect_rule'                                => 'قانون ":title" @ Firefly III را بررسی کنید',
    'journal_other_user'                          => 'این تراکنش به کاربر تعلق ندارد',
    'no_such_journal'                             => 'این تراکنش وجود ندارد',
    'journal_already_no_budget'                   => 'این تراکنش بودجه ندارد، بنابراین نمی توان آن را حذف کرد',
    'journal_already_no_category'                 => 'این تراکنش دسته‌بندی نداشت، بنابراین نمی‌توان آن را حذف کرد',
    'journal_already_no_notes'                    => 'این تراکنش هیچ یادداشتی نداشت، بنابراین نمی توان آنها را حذف کرد',
    'journal_not_found'                           => 'Firefly III نمی تواند تراکنش درخواستی را پیدا کند',
    'split_group'                                 => 'Firefly III نمی تواند این عمل را روی یک تراکنش با چند تقسیم انجام دهد',
    'is_already_withdrawal'                       => 'این تراکنش قبلاً یک برداشت است',
    'is_already_deposit'                          => 'این تراکنش قبلاً سپرده است',
    'is_already_transfer'                         => 'این تراکنش در حال حاضر انتقال است',
    'no_destination'                              => 'Could not find or create destination account ":name"',
    'is_not_transfer'                             => 'این معامله انتقال نیست',
    'complex_error'                               => 'مشکل پیچیده ای پیش آمد. از این بابت متاسفم. لطفا سیاهههای مربوط به Firefly III را بررسی کنید',
    'no_valid_opposing'                           => 'تبدیل انجام نشد زیرا هیچ حساب معتبری به نام ":account" وجود ندارد',
    'new_notes_empty'                             => 'یادداشت هایی که باید تنظیم شوند خالی هستند',
    'unsupported_transaction_type_withdrawal'     => 'Firefly III نمی تواند یک ":type" را به یک برداشت تبدیل کند',
    'unsupported_transaction_type_deposit'        => 'Firefly III نمی تواند ":type" را به سپرده تبدیل کند',
    'unsupported_transaction_type_transfer'       => 'Firefly III نمی تواند یک ":type" را به انتقال تبدیل کند',
    'already_has_source_asset'                    => 'این تراکنش قبلاً ":name" را به عنوان حساب دارایی منبع دارد',
    'already_has_destination_asset'               => 'این تراکنش قبلاً ":name" را به عنوان حساب دارایی مقصد دارد',
    'already_has_destination'                     => 'این تراکنش قبلاً ":name" را به عنوان حساب مقصد دارد',
    'already_has_source'                          => 'این تراکنش قبلاً ":name" را به عنوان حساب منبع دارد',
    'already_linked_to_subscription'              => 'تراکنش قبلاً به اشتراک ":name" مرتبط است',
    'already_linked_to_category'                  => 'تراکنش قبلاً به دسته ":name" پیوند داده شده است',
    'already_linked_to_budget'                    => 'تراکنش قبلاً به بودجه ":name" مرتبط شده است',
    'cannot_find_subscription'                    => 'Firefly III نمی تواند اشتراک ":name" را پیدا کند',
    'no_notes_to_move'                            => 'معامله هیچ یادداشتی برای انتقال به قسمت توضیحات ندارد',
    'no_tags_to_remove'                           => 'تراکنش هیچ برچسبی برای حذف ندارد',
    'not_withdrawal'                              => 'معامله یک برداشت نیست',
    'not_deposit'                                 => 'معامله سپرده نیست',
    'cannot_find_tag'                             => 'Firefly III نمی تواند برچسب ":tag" را پیدا کند',
    'cannot_find_asset'                           => 'Firefly III نمی تواند حساب دارایی ":name" را پیدا کند',
    'cannot_find_accounts'                        => 'Firefly III نمی تواند حساب منبع یا مقصد را پیدا کند',
    'cannot_find_source_transaction'              => 'Firefly III نمی تواند تراکنش منبع را پیدا کند',
    'cannot_find_destination_transaction'         => 'Firefly III نمی تواند تراکنش مقصد را پیدا کند',
    'cannot_find_source_transaction_account'      => 'Firefly III نمی تواند حساب تراکنش منبع را پیدا کند',
    'cannot_find_destination_transaction_account' => 'Firefly III نمی تواند حساب تراکنش مقصد را پیدا کند',
    'cannot_find_piggy'                           => 'Firefly III نمی تواند قلکی به نام ":name" پیدا کند',
    'no_link_piggy'                               => 'حساب های این تراکنش به قلک مرتبط نیست، بنابراین هیچ اقدامی انجام نخواهد شد',
    'already_linked'                              => 'This transaction is already linked to piggy bank ":name"',
    'cannot_unlink_tag'                           => 'برچسب ":tag" به این تراکنش مرتبط نیست',
    'cannot_find_budget'                          => 'Firefly III نمی تواند بودجه ":name" را پیدا کند',
    'cannot_find_category'                        => 'Firefly III نمی تواند دسته بندی ":name" را پیدا کند',
    'cannot_set_budget'                           => 'Firefly III نمی تواند بودجه ":name" را برای تراکنش از نوع ":type" تنظیم کند.',
    'journal_invalid_amount'                      => 'Firefly III can\'t set amount ":amount" because it is not a valid number.',
    'cannot_remove_zero_piggy'                    => 'Cannot remove zero amount from piggy bank ":name"',
    'cannot_remove_from_piggy'                    => 'Cannot remove :amount from piggy bank ":name"',
    'cannot_add_zero_piggy'                       => 'Cannot add zero amount to piggy bank ":name"',
    'cannot_add_to_piggy'                         => 'Cannot add :amount to piggy bank ":name"',
];
