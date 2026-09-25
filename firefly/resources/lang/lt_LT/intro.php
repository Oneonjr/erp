<?php

/**
 * intro.php
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
    // index
    'index_intro'                                             => 'Sveiki atvykę į „Firefly III“ rodyklės puslapį. Skirkite laiko ir peržiūrėkite šį įvadą, kad pajustumėte, kaip veikia „Firefly III“.',
    'index_accounts-chart'                                    => 'Šioje diagramoje rodomas dabartinis jūsų turto sąskaitų likutis. Čia matomas paskyras galite pasirinkti savo nuostatose.',
    'index_box_out_holder'                                    => 'Ši maža dėžutė ir šalia šios esančios dėžutės suteiks jums greitą jūsų finansinės padėties apžvalgą.',
    'index_help'                                              => 'Jei kada nors prireiks pagalbos dėl puslapio ar formos, paspauskite šį mygtuką.',
    'index_outro'                                             => 'Dauguma „Firefly III“ puslapių prasidės tokia maža ekskursija, kaip ši. Jei turite klausimų ar komentarų, susisiekite su manimi. Mėgautis!',
    'index_sidebar-toggle'                                    => 'Norėdami sukurti naujas operacijas, paskyras ar kitus dalykus, naudokite meniu po šia piktograma.',
    'index_cash_account'                                      => 'Tai yra iki šiol sukurtos paskyros. Galite naudoti grynųjų pinigų sąskaitą grynųjų pinigų išlaidoms stebėti, tačiau tai, žinoma, nėra privaloma.',

    // transactions
    'transactions_create_basic_info'                          => 'Įveskite pagrindinę operacijos informaciją. Šaltinis, paskirties vieta, data ir aprašymas.',
    'transactions_create_amount_info'                         => 'Įveskite operacijos sumą. Jei reikia, laukai bus automatiškai atnaujinami, kad būtų pateikta informacija apie užsienio sumas.',
    'transactions_create_optional_info'                       => 'Visi šie laukai yra neprivalomi. Čia pridėjus metaduomenis jūsų operacijos bus geriau organizuotos.',
    'transactions_create_split'                               => 'Jei norite padalyti operaciją, naudodami šį mygtuką pridėkite daugiau skaidymų',

    // create account:
    'accounts_create_iban'                                    => 'Suteikite savo paskyroms galiojantį IBAN. Tai ateityje gali labai palengvinti duomenų importavimą.',
    'accounts_create_asset_opening_balance'                   => 'Turto sąskaitose gali būti „pradinis balansas“, nurodantis šios sąskaitos istorijos pradžią „Firefly III“.',
    'accounts_create_asset_currency'                          => 'Firefly III palaiko kelias valiutas. Turto sąskaitos turi vieną pagrindinę valiutą, kurią turite nustatyti čia.',
    'accounts_create_asset_virtual'                           => 'Kartais gali padėti suteikti jūsų paskyrai virtualų balansą: prie faktinio balanso visada pridedama arba pašalinama papildoma suma.',

    // budgets index
    'budgets_index_intro'                                     => 'Biudžetai naudojami jūsų finansams valdyti ir sudaro vieną iš pagrindinių Firefly III funkcijų.',
    'budgets_index_see_expenses_bar'                          => 'Pinigų leidimas pamažu užpildys šią juostą.',
    'budgets_index_navigate_periods'                          => 'Naršykite laikotarpius, kad lengvai nustatytumėte biudžetus iš anksto.',
    'budgets_index_new_budget'                                => 'Kurkite naujus biudžetus, kaip jums atrodo tinkama.',
    'budgets_index_list_of_budgets'                           => 'Naudokite šią lentelę, norėdami nustatyti kiekvieno biudžeto sumas ir pamatyti, kaip sekasi.',
    'budgets_index_outro'                                     => 'Norėdami sužinoti daugiau apie biudžeto sudarymą, patikrinkite pagalbos piktogramą viršutiniame dešiniajame kampe.',

    // reports (index)
    'reports_index_intro'                                     => 'Naudokite šias ataskaitas, kad gautumėte išsamių įžvalgų apie savo finansus.',
    'reports_index_inputReportType'                           => 'Pasirinkite ataskaitos tipą. Peržiūrėkite pagalbos puslapius, kad sužinotumėte, ką kiekviena ataskaita rodo.',
    'reports_index_inputAccountsSelect'                       => 'Galite neįtraukti arba įtraukti turto sąskaitas, kaip jums atrodo tinkama.',
    'reports_index_inputDateRange'                            => 'The selected date range is entirely up to you: from one day to 10 years or more.',
    'reports_index_extra-options-box'                         => 'Priklausomai nuo jūsų pasirinktos ataskaitos, čia galite pasirinkti papildomus filtrus ir parinktis. Stebėkite šį laukelį, kai keičiate ataskaitų tipus.',

    // reports (reports)
    'reports_report_default_intro'                            => 'Ši ataskaita suteiks jums greitą ir išsamią jūsų finansų apžvalgą. Jei norite pamatyti dar ką nors, nedvejodami susisiekite su manimi!',
    'reports_report_audit_intro'                              => 'Ši ataskaita suteiks jums išsamių įžvalgų apie jūsų turto sąskaitas.',
    'reports_report_audit_optionsBox'                         => 'Naudokite šiuos žymės langelius, norėdami parodyti arba paslėpti jus dominančius stulpelius.',

    'reports_report_category_intro'                           => 'Ši ataskaita suteiks jums vienos ar kelių kategorijų įžvalgų.',
    'reports_report_category_pieCharts'                       => 'Šios diagramos suteiks jums supratimą apie išlaidas ir pajamas pagal kategoriją arba sąskaitą.',
    'reports_report_category_incomeAndExpensesChart'          => 'Šioje diagramoje rodomos jūsų išlaidos ir pajamos pagal kategoriją.',

    'reports_report_tag_intro'                                => 'Ši ataskaita suteiks jums vienos ar kelių žymų įžvalgų.',
    'reports_report_tag_pieCharts'                            => 'Šios diagramos suteiks jums įžvalgos apie išlaidas ir pajamas pagal žymą, sąskaitą, kategoriją ar biudžetą.',
    'reports_report_tag_incomeAndExpensesChart'               => 'Šioje diagramoje rodomos jūsų išlaidos ir pajamos, tenkančios vienai žymai.',

    'reports_report_budget_intro'                             => 'Ši ataskaita suteiks jums įžvalgų apie vieną ar kelis biudžetus.',
    'reports_report_budget_pieCharts'                         => 'Šios diagramos suteiks jums įžvalgos apie išlaidas vienam biudžetui arba paskyrai.',
    'reports_report_budget_incomeAndExpensesChart'            => 'Ši diagrama rodo jūsų išlaidas pagal biudžetą.',

    // create transaction
    'transactions_create_switch_box'                          => 'Naudokite šiuos mygtukus, kad greitai perjungtumėte operacijos, kurią norite išsaugoti, tipą.',
    'transactions_create_ffInput_category'                    => 'Šiame lauke galite laisvai rašyti. Bus siūlomos anksčiau sukurtos kategorijos.',
    'transactions_create_withdrawal_ffInput_budget'           => 'Susiekite savo išėmimą su biudžetu, kad pagerintumėte finansų kontrolę.',
    'transactions_create_withdrawal_currency_dropdown_amount' => 'Naudokite šį išskleidžiamąjį meniu, kai išgryninate pinigus kita valiuta.',
    'transactions_create_deposit_currency_dropdown_amount'    => 'Naudokite šį išskleidžiamąjį meniu, kai jūsų indėlis yra kita valiuta.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => 'Pasirinkite taupyklę ir susiekite šį pervedimą su savo santaupomis.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'Šiame lauke rodoma, kiek sutaupėte kiekvienoje taupyklėje.',
    'piggy-banks_index_button'                                => 'Šalia šios eigos juostos yra du mygtukai (+ ir -), skirti pridėti arba pašalinti pinigus iš kiekvienos taupyklės.',
    'piggy-banks_index_accountStatus'                         => 'Kiekvienos turto sąskaitos, kurioje yra bent viena taupyklė, būsena pateikiama šioje lentelėje.',

    // create piggy
    'piggy-banks_create_name'                                 => 'Koks tavo tikslas? Nauja sofa, fotoaparatas, pinigai ekstremalioms situacijoms?',
    'piggy-banks_create_date'                                 => 'Galite nustatyti savo taupyklos datą arba terminą.',

    // show piggy
    'piggy-banks_show_piggyChart'                             => 'This chart will show the history of this piggy bank.',
    'piggy-banks_show_piggyDetails'                           => 'Some details about your piggy bank',
    'piggy-banks_show_piggyEvents'                            => 'Any additions or removals are also listed here.',

    // bill index
    'bills_index_rules'                                       => 'Here you see which rules will check if this subscription is hit',
    'bills_index_paid_in_period'                              => 'This field indicates when the subscription was last paid.',
    'bills_index_expected_in_period'                          => 'This field indicates for each subscription if and when the next subscription is expected to hit.',

    'subscriptions_index_rules'                               => 'Here you see which rules will check if this subscription is hit',
    'subscriptions_index_paid_in_period'                      => 'This field indicates when the subscription was last paid.',
    'subscriptions_index_expected_in_period'                  => 'This field indicates for each subscription if and when the next subscription is expected to hit.',

    // show bill
    'bills_show_billInfo'                                     => 'This table shows some general information about this subscription.',
    'bills_show_billButtons'                                  => 'Use this button to re-scan old transactions so they will be matched to this subscription.',
    'bills_show_billChart'                                    => 'This chart shows the transactions linked to this subscription.',
    'subscriptions_show_billInfo'                             => 'This table shows some general information about this subscription.',
    'subscriptions_show_billButtons'                          => 'Use this button to re-scan old transactions so they will be matched to this subscription.',
    'subscriptions_show_billChart'                            => 'This chart shows the transactions linked to this subscription.',

    // create bill
    'bills_create_intro'                                      => 'Use subscriptions to track the amount of money you\'re due every period. Think about expenses like rent, insurance or mortgage payments.',
    'bills_create_name'                                       => 'Use a descriptive name such as "Rent" or "Health insurance".',
    // 'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => 'Select a minimum and maximum amount for this subscription.',
    'bills_create_repeat_freq_holder'                         => 'Most subscriptions repeat monthly, but you can set another frequency here.',
    'bills_create_skip_holder'                                => 'If a subscription repeats every 2 weeks, the "skip"-field should be set to "1" to skip every other week.',

    // rules index
    'rules_index_intro'                                       => 'Firefly III allows you to manage rules, that will automagically be applied to any transaction you create or edit.',
    'rules_index_new_rule_group'                              => 'You can combine rules in groups for easier management.',
    'rules_index_new_rule'                                    => 'Create as many rules as you like.',
    'rules_index_prio_buttons'                                => 'Order them any way you see fit.',
    'rules_index_test_buttons'                                => 'You can test your rules or apply them to existing transactions.',
    'rules_index_rule-triggers'                               => 'Rules have "triggers" and "actions" that you can order by drag-and-drop.',
    'rules_index_outro'                                       => 'Be sure to check out the help pages using the (?) icon in the top right!',

    // create rule:
    'rules_create_mandatory'                                  => 'Choose a descriptive title, and set when the rule should be fired.',
    'rules_create_ruletriggerholder'                          => 'Add as many triggers as you like, but remember that ALL triggers must match before any actions are fired.',
    'rules_create_test_rule_triggers'                         => 'Use this button to see which transactions would match your rule.',
    'rules_create_actions'                                    => 'Set as many actions as you like.',

    // preferences
    'preferences_index_tabs'                                  => 'More options are available behind these tabs.',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III supports multiple currencies, which you can change on this page.',
    'currencies_index_default'                                => 'Firefly III has one default currency.',
    'currencies_index_buttons'                                => 'Use these buttons to change the default currency or enable other currencies.',

    // create currency
    'currencies_create_code'                                  => 'This code should be ISO compliant (Google it for your new currency).',
];
