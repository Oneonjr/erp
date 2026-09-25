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
    'main_message'                                => 'Действие ":action" из правила ":rule" не удалось применить к транзакции #:group: :error',
    'find_or_create_tag_failed'                   => 'Не удалось найти или создать метку ":tag"',
    'tag_already_added'                           => 'Метка ":tag" уже связана с этой транзакцией',
    'inspect_transaction'                         => 'Проверка транзакции ":title" в Firefly III',
    'inspect_rule'                                => 'Проверка правила ":title" в Firefly III',
    'journal_other_user'                          => 'Эта транзакция не принадлежит пользователю',
    'no_such_journal'                             => 'Эта транзакция не существует',
    'journal_already_no_budget'                   => 'У этой транзакции нет бюджета, поэтому её нельзя удалить',
    'journal_already_no_category'                 => 'У этой транзакции нет категории, поэтому её нельзя удалить',
    'journal_already_no_notes'                    => 'У этой транзакции нет заметок, поэтому их нельзя удалить',
    'journal_not_found'                           => 'Firefly III не удалось найти запрошенную транзакцию',
    'split_group'                                 => 'Firefly III не может выполнить это действие для транзакции с несколькими частями',
    'is_already_withdrawal'                       => 'Эта транзакция уже и так расход',
    'is_already_deposit'                          => 'Эта транзакция уже и так доход',
    'is_already_transfer'                         => 'Эта транзакция уже и так перевод',
    'no_destination'                              => 'Не удалось найти или создать счёт назначения ":name"',
    'is_not_transfer'                             => 'Эта транзакция не перевод',
    'complex_error'                               => 'Простите, но что-то уж очень странное произошло. Проверьте лог-файлы Firefly III',
    'no_valid_opposing'                           => 'Преобразование не удалось: счёт ":account" не найден',
    'new_notes_empty'                             => 'Заметки, которые нужно записать, оказались пустыми',
    'unsupported_transaction_type_withdrawal'     => 'Firefly III не может преобразовать ":type" в расход',
    'unsupported_transaction_type_deposit'        => 'Firefly III не может преобразовать ":type" в доход',
    'unsupported_transaction_type_transfer'       => 'Firefly III не может преобразовать ":type" в перевод',
    'already_has_source_asset'                    => 'У этой транзакции уже задан ":name" как основной счёт-источник',
    'already_has_destination_asset'               => 'У этой транзакции уже задан ":name" как основной счёт назначения',
    'already_has_destination'                     => 'У этой транзакции уже задан ":name" как счёт назначения',
    'already_has_source'                          => 'У этой транзакции уже задан ":name" как счёт-источник',
    'already_linked_to_subscription'              => 'Транзакция уже связана с подпиской ":name"',
    'already_linked_to_category'                  => 'Транзакция уже связана с категорией ":name"',
    'already_linked_to_budget'                    => 'Транзакция уже связана с бюджетом ":name"',
    'cannot_find_subscription'                    => 'Firefly III не может найти подписку ":name"',
    'no_notes_to_move'                            => 'У транзакции нет заметок для переноса в поле описания',
    'no_tags_to_remove'                           => 'У транзакции нет меток для удаления',
    'not_withdrawal'                              => 'Эта транзакция не расход',
    'not_deposit'                                 => 'Эта транзакция не доход',
    'cannot_find_tag'                             => 'Firefly III не может найти метку ":tag"',
    'cannot_find_asset'                           => 'Firefly III не может найти основной счёт ":name"',
    'cannot_find_accounts'                        => 'Firefly III не может найти счёт-источник или счёт назначения',
    'cannot_find_source_transaction'              => 'Firefly III не может найти исходную транзакцию',
    'cannot_find_destination_transaction'         => 'Firefly III не может найти целевую транзакцию',
    'cannot_find_source_transaction_account'      => 'Firefly III не может найти счёт-источник транзакции',
    'cannot_find_destination_transaction_account' => 'Firefly III не может найти счёт назначения транзакции',
    'cannot_find_piggy'                           => 'Firefly III не может найти копилку ":name"',
    'no_link_piggy'                               => 'Счета этой транзакции не привязаны к копилке, действие не выполнено',
    'already_linked'                              => 'Эта транзакция уже связана с копилкой ":name"',
    'cannot_unlink_tag'                           => 'Метка ":tag" не связана с этой транзакцией',
    'cannot_find_budget'                          => 'Firefly III не может найти бюджет ":name"',
    'cannot_find_category'                        => 'Firefly III не может найти категорию ":name"',
    'cannot_set_budget'                           => 'Firefly III не может назначить бюджет ":name" транзакции типа ":type"',
    'journal_invalid_amount'                      => 'Firefly III не может назначить сумму ":amount", поскольку это не число.',
    'cannot_remove_zero_piggy'                    => 'Невозможно снять нулевую сумму из копилки ":name"',
    'cannot_remove_from_piggy'                    => 'Невозможно снять :amount из копилки ":name"',
    'cannot_add_zero_piggy'                       => 'Невозможно добавить нулевую сумму в копилку ":name"',
    'cannot_add_to_piggy'                         => 'Невозможно начислить :amount в копилку ":name"',
];
