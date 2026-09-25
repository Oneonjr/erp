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
    'main_message'                                => '규칙 ":rule"에 있는 액션 ":action"을 거래에 적용할 수 없습니다. #:group: :error',
    'find_or_create_tag_failed'                   => '태그 ":tag"를 찾거나 만들 수 없습니다.',
    'tag_already_added'                           => '태그 ":tag"가 이미 거래에 연결되어 있습니다.',
    'inspect_transaction'                         => '":title" 거래를 검사합니다. @Firefly III',
    'inspect_rule'                                => '":title" 규칙을 검사합니다. @Firefly III',
    'journal_other_user'                          => '이 거래가 사용자에 속해져 있지 않습니다.',
    'no_such_journal'                             => '이 거래는 존재하지 않습니다.',
    'journal_already_no_budget'                   => '이 거래는 예산이 없어, 삭제할 수 없습니다.',
    'journal_already_no_category'                 => '이 거래는 카테고리가 없어, 삭제할 수 없습니다.',
    'journal_already_no_notes'                    => '이 거래는 노트가 없어, 삭제할 수 없습니다.',
    'journal_not_found'                           => 'Firefly III가 요청한 거래를 찾을 수 없습니다.',
    'split_group'                                 => 'Firefly III 이 액션을 분할을 가진 거래에 실행할 수 없습니다.',
    'is_already_withdrawal'                       => '이 거래는 이미 출금 거래입니다.',
    'is_already_deposit'                          => '이 거래는 이미 입금 거래입니다.',
    'is_already_transfer'                         => '이 거래는 이미 이체 거래입니다.',
    'no_destination'                              => '대상 계정 ":name"을(를) 찾거나 생성할 수 없습니다.',
    'is_not_transfer'                             => '이 거래는 이체 거래가 아닙니다.',
    'complex_error'                               => '죄송합니다. 무엇인가 잘못되었습니다. Firefly III 로그를 검토해주십시오.',
    'no_valid_opposing'                           => '유효한 계정이름 ":account"가 없기 때문에 변환에 실패했습니다',
    'new_notes_empty'                             => '설정될 노트는 내용이 없습니다.',
    'unsupported_transaction_type_withdrawal'     => 'Firefly III는 ":type"을 출금으로 변환할 수 없습니다.',
    'unsupported_transaction_type_deposit'        => 'Firefly III는 ":type"을 입금으로 변환할 수 없습니다.',
    'unsupported_transaction_type_transfer'       => 'Firefly III는 ":type"을 이체으로 변환할 수 없습니다.',
    'already_has_source_asset'                    => '이 거래는 이미 ":name"을(를) 출금 계정으로 가지고 있습니다.',
    'already_has_destination_asset'               => '이 거래는 이미 ":name"을(를) 입금 자산 계정으로 지정했습니다.',
    'already_has_destination'                     => '이 거래는 이미 ":name"을(를) 입금 계정으로 지정했습니다.',
    'already_has_source'                          => '이 거래는 이미 ":name"을(를) 출금 계정으로 가지고 있습니다.',
    'already_linked_to_subscription'              => '이 거래는 이미 구독 ":name"에 연결되어 있습니다.',
    'already_linked_to_category'                  => '이 거래는 이미 카테고리 ":name"에 연결되어 있습니다.',
    'already_linked_to_budget'                    => '이 거래는 이미 예산 ":name"에 연결되어 있습니다.',
    'cannot_find_subscription'                    => 'Firefly III는 구독 ":name"을 찾을 수 없습니다.',
    'no_notes_to_move'                            => '이 거래는 설명란으로 옮길 노트가 없습니다.',
    'no_tags_to_remove'                           => '이 거래는 제거할 태그가 없습니다.',
    'not_withdrawal'                              => '이 거래는 출금 거래가 아닙니다.',
    'not_deposit'                                 => '이 거래는 입금 거래가 아닙니다.',
    'cannot_find_tag'                             => 'Firefly III는 ":tag"를 찾을 수 없습니다.',
    'cannot_find_asset'                           => 'Firefly III는 자산 계정 ":name"을 찾을 수 없습니다.',
    'cannot_find_accounts'                        => 'Firefly III에서 출금 계정 또는 입금 계정을 찾을 수 없습니다.',
    'cannot_find_source_transaction'              => 'Firefly III는 소스 거래를 찾을 수 없습니다.',
    'cannot_find_destination_transaction'         => 'Firefly III는 대상 거래를 찾을 수 없습니다.',
    'cannot_find_source_transaction_account'      => 'Firefly III에서 출금 거래 계정을 찾을 수 없습니다.',
    'cannot_find_destination_transaction_account' => 'Firefly III에서 입금 거래 계정을 찾을 수 없습니다.',
    'cannot_find_piggy'                           => 'Firefly III는 저금통 ":name"을 찾을 수 없습니다.',
    'no_link_piggy'                               => '이 거래의 계좌는 저금통에 연결되어 있지 않아, 액션이 수행되지 않을 것 입니다.',
    'already_linked'                              => '이 거래는 이미 저금통 ":name"에 연결되어 있습니다.',
    'cannot_unlink_tag'                           => '태그 ":tag"는 이 거래에 연결되어 있지 않습니다.',
    'cannot_find_budget'                          => 'Firefly III는 예산 ":name"을 찾을 수 없습니다.',
    'cannot_find_category'                        => 'Firefly III는 카테고리 ":name"을 찾을 수 없습니다.',
    'cannot_set_budget'                           => 'Firefly III는 예산 ":name"을 ":type"의 타입의 거래에 설정할 수 없습니다.',
    'journal_invalid_amount'                      => 'Firefly III에서 ":amount"을(를) 금액으로 설정할 수 없습니다. 유효한 숫자가 아닙니다.',
    'cannot_remove_zero_piggy'                    => '저금통 ":name"에서 차감할 금액은 0일 수 없습니다.',
    'cannot_remove_from_piggy'                    => '저금통 ":name"에서 :amount을(를) 차감할 수 없습니다.',
    'cannot_add_zero_piggy'                       => '저금통 ":name"에 추가할 금액은 0일 수 없습니다.',
    'cannot_add_to_piggy'                         => '저금통 ":name"에 :amount을(를) 추가할 수 없습니다.',
];
