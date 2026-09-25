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
    'main_message'                                => 'Akciu „:action“ v pravidle „:rule“ sa nepodarilo použiť na transakciu č. :group: :error',
    'find_or_create_tag_failed'                   => 'Štítok „:tag“ sa nepodarilo nájsť ani vytvoriť',
    'tag_already_added'                           => 'Štítok „:tag“ je už prepojený s touto transakciou',
    'inspect_transaction'                         => 'Skontrolovať transakciu „:title“ vo Firefly III',
    'inspect_rule'                                => 'Skontrolovať pravidlo „:title“ vo Firefly III',
    'journal_other_user'                          => 'Táto transakcia nepatrí používateľovi',
    'no_such_journal'                             => 'Táto transakcia neexistuje',
    'journal_already_no_budget'                   => 'Táto transakcia nemá rozpočet, preto ho nemožno odstrániť',
    'journal_already_no_category'                 => 'Táto transakcia nemá kategóriu, preto ju nemožno odstrániť',
    'journal_already_no_notes'                    => 'Táto transakcia nemá poznámky, preto ich nemožno odstrániť',
    'journal_not_found'                           => 'Firefly III nedokáže nájsť požadovanú transakciu',
    'split_group'                                 => 'Firefly III nemôže vykonať túto akciu na transakcii s viacerými časťami',
    'is_already_withdrawal'                       => 'Táto transakcia už je výdavkom',
    'is_already_deposit'                          => 'Táto transakcia už je príjmom',
    'is_already_transfer'                         => 'Táto transakcia už je prevodom',
    'no_destination'                              => 'Cieľový účet „:name“ sa nepodarilo nájsť ani vytvoriť',
    'is_not_transfer'                             => 'Táto transakcia nie je prevodom',
    'complex_error'                               => 'Vyskytla sa zložitá chyba. Ospravedlňujeme sa. Skontrolujte súbory denníka Firefly III.',
    'no_valid_opposing'                           => 'Konverzia zlyhala, pretože neexistuje platný účet s názvom „:account“',
    'new_notes_empty'                             => 'Poznámky, ktoré sa majú nastaviť, sú prázdne',
    'unsupported_transaction_type_withdrawal'     => 'Firefly III nedokáže zmeniť transakciu typu „:type“ na výdavok',
    'unsupported_transaction_type_deposit'        => 'Firefly III nedokáže zmeniť transakciu typu „:type“ na príjem',
    'unsupported_transaction_type_transfer'       => 'Firefly III nedokáže zmeniť transakciu typu „:type“ na prevod',
    'already_has_source_asset'                    => 'Táto transakcia už má majetkový účet „:name“ ako zdrojový účet',
    'already_has_destination_asset'               => 'Táto transakcia už má majetkový účet „:name“ ako cieľový účet',
    'already_has_destination'                     => 'Táto transakcia už má účet „:name“ ako cieľový účet',
    'already_has_source'                          => 'Táto transakcia už má účet „:name“ ako zdrojový účet',
    'already_linked_to_subscription'              => 'Transakcia je už prepojená s pravidelnou platbou „:name“',
    'already_linked_to_category'                  => 'Transakcia je už prepojená s kategóriou „:name“',
    'already_linked_to_budget'                    => 'Transakcia je už prepojená s rozpočtom „:name“',
    'cannot_find_subscription'                    => 'Firefly III nedokáže nájsť pravidelnú platbu „:name“',
    'no_notes_to_move'                            => 'Transakcia nemá poznámky, ktoré by bolo možné presunúť do poľa popisu',
    'no_tags_to_remove'                           => 'Transakcia nemá žiadne štítky na odstránenie',
    'not_withdrawal'                              => 'Transakcia nie je výdavkom',
    'not_deposit'                                 => 'Transakcia nie je príjmom',
    'cannot_find_tag'                             => 'Firefly III nedokáže nájsť štítok „:tag“',
    'cannot_find_asset'                           => 'Firefly III nedokáže nájsť majetkový účet „:name“',
    'cannot_find_accounts'                        => 'Firefly III nedokáže nájsť zdrojový alebo cieľový účet',
    'cannot_find_source_transaction'              => 'Firefly III nedokáže nájsť zdrojovú transakciu',
    'cannot_find_destination_transaction'         => 'Firefly III nedokáže nájsť cieľovú transakciu',
    'cannot_find_source_transaction_account'      => 'Firefly III nedokáže nájsť účet zdrojovej transakcie',
    'cannot_find_destination_transaction_account' => 'Firefly III nedokáže nájsť účet cieľovej transakcie',
    'cannot_find_piggy'                           => 'Firefly III nedokáže nájsť sporiaci cieľ s názvom „:name“',
    'no_link_piggy'                               => 'Účty tejto transakcie nie sú prepojené so sporiacim cieľom, preto sa nevykoná žiadna akcia.',
    'already_linked'                              => 'Táto transakcia je už prepojená so sporiacim cieľom „:name“.',
    'cannot_unlink_tag'                           => 'Štítok „:tag“ nie je prepojený s touto transakciou',
    'cannot_find_budget'                          => 'Firefly III nedokáže nájsť rozpočet „:name“',
    'cannot_find_category'                        => 'Firefly III nedokáže nájsť kategóriu „:name“',
    'cannot_set_budget'                           => 'Firefly III nedokáže priradiť rozpočet „:name“ k transakcii typu „:type“',
    'journal_invalid_amount'                      => 'Firefly III nemôže nastaviť sumu „:amount“, pretože nejde o platné číslo.',
    'cannot_remove_zero_piggy'                    => 'Zo sporiaceho cieľa „:name“ nemožno odpočítať nulovú sumu.',
    'cannot_remove_from_piggy'                    => 'Zo sporiaceho cieľa „:name“ nemožno odpočítať sumu :amount.',
    'cannot_add_zero_piggy'                       => 'Do sporiaceho cieľa „:name“ nemožno pridať nulovú sumu.',
    'cannot_add_to_piggy'                         => 'Do sporiaceho cieľa „:name“ nemožno pridať sumu :amount.',
];
