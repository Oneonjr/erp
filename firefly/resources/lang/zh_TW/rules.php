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
    'main_message'                                => '動作「:action」，在規則「:rule」中出現，無法套用到交易 #:group：:error',
    'find_or_create_tag_failed'                   => '無法找到或建立標籤「:tag」',
    'tag_already_added'                           => '標籤「:tag」已連結到此交易',
    'inspect_transaction'                         => '檢視交易「:title」@ Firefly III',
    'inspect_rule'                                => '檢視規則「:title」@ Firefly III',
    'journal_other_user'                          => '此交易不屬於該使用者',
    'no_such_journal'                             => '此交易不存在',
    'journal_already_no_budget'                   => '此交易沒有預算，因此無法移除',
    'journal_already_no_category'                 => '此交易沒有分類，因此無法移除',
    'journal_already_no_notes'                    => '此交易沒有備註，因此無法移除',
    'journal_not_found'                           => 'Firefly III 找不到請求的交易',
    'split_group'                                 => '對於含有多筆拆分的交易，Firefly III 無法執行此操作',
    'is_already_withdrawal'                       => '此交易已是一筆提款',
    'is_already_deposit'                          => '此交易已是一筆存款',
    'is_already_transfer'                         => '此交易已是一筆轉帳',
    'no_destination'                              => 'Could not find or create destination account ":name"',
    'is_not_transfer'                             => '此交易不是一筆轉帳',
    'complex_error'                               => '發生了複雜的錯誤，請檢查 Firefly III 的日誌。很抱歉。',
    'no_valid_opposing'                           => '轉換失敗，因為沒有名為「:account」的有效帳戶',
    'new_notes_empty'                             => '要設定的備註內容為空',
    'unsupported_transaction_type_withdrawal'     => 'Firefly III 無法將「:type」轉換為提款交易',
    'unsupported_transaction_type_deposit'        => 'Firefly III 無法將「:type」轉換為存款交易',
    'unsupported_transaction_type_transfer'       => 'Firefly III 無法將「:type」轉換為轉帳交易',
    'already_has_source_asset'                    => '此交易已將「:name」設為來源資產帳戶',
    'already_has_destination_asset'               => '此交易已將「:name」設為目標資產帳戶',
    'already_has_destination'                     => '此交易已將「:name」設為目標帳戶',
    'already_has_source'                          => '此交易已將「:name」設為來源帳戶',
    'already_linked_to_subscription'              => '此交易已連結到訂閱「:name」',
    'already_linked_to_category'                  => '此交易已連結到分類「:name」',
    'already_linked_to_budget'                    => '此交易已連結到預算「:name」',
    'cannot_find_subscription'                    => 'Firefly III 找不到訂閱「:name」',
    'no_notes_to_move'                            => '此交易沒有備註可移動到描述欄位',
    'no_tags_to_remove'                           => '此交易沒有標籤可移除',
    'not_withdrawal'                              => '此交易不是提款',
    'not_deposit'                                 => '此交易不是存款',
    'cannot_find_tag'                             => 'Firefly III 找不到標籤「:tag」',
    'cannot_find_asset'                           => 'Firefly III 找不到資產帳戶「:name」',
    'cannot_find_accounts'                        => 'Firefly III 無法找到來源或目標帳戶',
    'cannot_find_source_transaction'              => 'Firefly III 無法找到來源交易',
    'cannot_find_destination_transaction'         => 'Firefly III 無法找到目標交易',
    'cannot_find_source_transaction_account'      => 'Firefly III 無法找到來源交易帳戶',
    'cannot_find_destination_transaction_account' => 'Firefly III 無法找到目標交易帳戶',
    'cannot_find_piggy'                           => 'Firefly III 無法找到名為「:name」的小豬撲滿',
    'no_link_piggy'                               => '此交易的帳戶未連結至此小豬撲滿，不會執行任何動作',
    'already_linked'                              => 'This transaction is already linked to piggy bank ":name"',
    'cannot_unlink_tag'                           => '標籤「:tag」並未連結至此交易',
    'cannot_find_budget'                          => 'Firefly III 找不到預算「:name」',
    'cannot_find_category'                        => 'Firefly III 找不到分類「:name」',
    'cannot_set_budget'                           => 'Firefly III 無法將預算「:name」套用到類型為「:type」的交易',
    'journal_invalid_amount'                      => 'Firefly III 無法設定金額「:amount」，因為它不是一個有效數字。',
    'cannot_remove_zero_piggy'                    => '無法自小豬撲滿「:name」移除零金額',
    'cannot_remove_from_piggy'                    => 'Cannot remove :amount from piggy bank ":name"',
    'cannot_add_zero_piggy'                       => '無法將零金額新增到小豬撲滿「:name」',
    'cannot_add_to_piggy'                         => 'Cannot add :amount to piggy bank ":name"',
];
