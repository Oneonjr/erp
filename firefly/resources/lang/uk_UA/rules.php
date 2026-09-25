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
    'main_message'                                => 'Дію ":action" з правила ":rule" не вдалося застосувати до транзакції #:group: :error',
    'find_or_create_tag_failed'                   => 'Не вдалося знайти або створити тег ":tag"',
    'tag_already_added'                           => 'Тег ":tag" уже пов\'язаний із цією транзакцією',
    'inspect_transaction'                         => 'Переглянути транзакцію ":title" @ Firefly III',
    'inspect_rule'                                => 'Переглянути правило ":title" @ Firefly III',
    'journal_other_user'                          => 'Ця транзакція не належить користувачу',
    'no_such_journal'                             => 'Цієї транзакції не існує',
    'journal_already_no_budget'                   => 'Ця транзакція не має бюджету, тому його не можна прибрати',
    'journal_already_no_category'                 => 'Ця транзакція не має категорії, тому її не можна прибрати',
    'journal_already_no_notes'                    => 'Ця транзакція не має приміток, тому їх не можна прибрати',
    'journal_not_found'                           => 'Firefly III не може знайти запитану транзакцію',
    'split_group'                                 => 'Firefly III не може виконати цю дію для транзакції з кількома частинами',
    'is_already_withdrawal'                       => 'Ця транзакція вже є витратою',
    'is_already_deposit'                          => 'Ця транзакція вже є доходом',
    'is_already_transfer'                         => 'Ця транзакція вже є переказом',
    'no_destination'                              => 'Не вдалося знайти або створити рахунок призначення ":name"',
    'is_not_transfer'                             => 'Ця транзакція не є переказом',
    'complex_error'                               => 'Сталася якась складна помилка. Перепрошуємо. Перегляньте журнали Firefly III',
    'no_valid_opposing'                           => 'Перетворення не вдалося, оскільки немає дійсного рахунку з назвою ":account"',
    'new_notes_empty'                             => 'Примітки, які потрібно встановити, порожні',
    'unsupported_transaction_type_withdrawal'     => 'Firefly III не може перетворити ":type" на витрату',
    'unsupported_transaction_type_deposit'        => 'Firefly III не може перетворити ":type" на дохід',
    'unsupported_transaction_type_transfer'       => 'Firefly III не може перетворити ":type" на переказ',
    'already_has_source_asset'                    => 'Ця транзакція вже має ":name" як рахунок активів у ролі джерела',
    'already_has_destination_asset'               => 'Ця транзакція вже має ":name" як рахунок активів у ролі призначення',
    'already_has_destination'                     => 'Ця транзакція вже має ":name" як рахунок призначення',
    'already_has_source'                          => 'Ця транзакція вже має ":name" як рахунок-джерело',
    'already_linked_to_subscription'              => 'Транзакція вже пов\'язана з підпискою ":name"',
    'already_linked_to_category'                  => 'Транзакція вже пов\'язана з категорією ":name"',
    'already_linked_to_budget'                    => 'Транзакція вже пов\'язана з бюджетом ":name"',
    'cannot_find_subscription'                    => 'Firefly III не може знайти підписку ":name"',
    'no_notes_to_move'                            => 'Транзакція не має приміток, які можна перемістити в поле опису',
    'no_tags_to_remove'                           => 'Транзакція не має тегів, які можна видалити',
    'not_withdrawal'                              => 'Транзакція не є витратою',
    'not_deposit'                                 => 'Транзакція не є доходом',
    'cannot_find_tag'                             => 'Firefly III не може знайти тег ":tag"',
    'cannot_find_asset'                           => 'Firefly III не може знайти рахунок активів ":name"',
    'cannot_find_accounts'                        => 'Firefly III не може знайти рахунок-джерело або рахунок призначення',
    'cannot_find_source_transaction'              => 'Firefly III не може знайти транзакцію-джерело',
    'cannot_find_destination_transaction'         => 'Firefly III не може знайти транзакцію призначення',
    'cannot_find_source_transaction_account'      => 'Firefly III не може знайти рахунок-джерело транзакції',
    'cannot_find_destination_transaction_account' => 'Firefly III не може знайти рахунок призначення транзакції',
    'cannot_find_piggy'                           => 'Firefly III не може знайти скарбничку з назвою ":name"',
    'no_link_piggy'                               => 'Рахунки цієї транзакції не пов\'язані зі скарбничкою, тому жодної дії не буде виконано',
    'already_linked'                              => 'Ця транзакція вже пов\'язана зі скарбничкою ":name"',
    'cannot_unlink_tag'                           => 'Тег ":tag" не пов\'язаний із цією транзакцією',
    'cannot_find_budget'                          => 'Firefly III не може знайти бюджет ":name"',
    'cannot_find_category'                        => 'Firefly III не може знайти категорію ":name"',
    'cannot_set_budget'                           => 'Firefly III не може встановити бюджет ":name" для транзакції типу ":type"',
    'journal_invalid_amount'                      => 'Firefly III не може встановити суму ":amount", оскільки це не є дійсним числом.',
    'cannot_remove_zero_piggy'                    => 'Не можна зняти нульову суму зі скарбнички ":name"',
    'cannot_remove_from_piggy'                    => 'Не можна зняти :amount зі скарбнички ":name"',
    'cannot_add_zero_piggy'                       => 'Не можна додати нульову суму до скарбнички ":name"',
    'cannot_add_to_piggy'                         => 'Не можна додати :amount до скарбнички ":name"',
];
