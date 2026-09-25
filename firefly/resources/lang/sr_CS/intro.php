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
    'index_intro'                                             => 'Dobrodošli na početnu stranicu Firefly III. Molimo vas da ispratite uputstvo da bi se upoznali sa platformom.',
    'index_accounts-chart'                                    => 'Ovaj grafikon prikazuje trenutno stanje vaših računa. U opcijama možete izabrati račune koje želite vidjeti.',
    'index_box_out_holder'                                    => 'Ovo polje i sva polja pored će vam dati kratak pregled vaše finansijske situacije.',
    'index_help'                                              => 'Ukoliko vam je ikada potrebna pomoć, kliknite ovo dugme.',
    'index_outro'                                             => 'Većina stranica počinje sa ovakvim uputstvom za korišćenje. Molim vas da me kontaktirate ukoliko imate bilo kakva pitanja. Uživajte!',
    'index_sidebar-toggle'                                    => 'Da kreirate novi transakciju, račun ili bilo šta drugo, koristite ovaj meni ispod ove ikonice.',
    'index_cash_account'                                      => 'Ovo su svi kreirani računi. Možete koristiti keš račun da pratite troškove koje plaćate u kešu, ali nije obavezno.',

    // transactions
    'transactions_create_basic_info'                          => 'Unesite osnovne informacije o transakciji. Račun sa kojeg je plaćeno, datum, opis.',
    'transactions_create_amount_info'                         => 'Unesite iznos transakcije. Ukoliko je potrebno, polje za stranu valutu će se automatski popuniti.',
    'transactions_create_optional_info'                       => 'Sva ova polja su opciona. Popunjavanjem ovih polja, olakšaćete sebi pregled transakcija.',
    'transactions_create_split'                               => 'Ukoliko želite da razdvojite transakciju, kliknite na ovo dugme',

    // create account:
    'accounts_create_iban'                                    => 'Dodajte validan IBAN broj za vaš račun. Ovo može olakšati uvoz podataka mnogo lakšim u budućnosti.',
    'accounts_create_asset_opening_balance'                   => 'Računi imovine mogu imati "početni bilans", koji označava početak dodavanja ovog računa na Firefly III platformu.',
    'accounts_create_asset_currency'                          => 'Firefly III podržava više valuta. Svaki račun ima jednu glavnu valutu, koji morate postaviti ovdje.',
    'accounts_create_asset_virtual'                           => 'It can sometimes help to give your account a virtual balance: an extra amount always added to or removed from the actual balance.',

    // budgets index
    'budgets_index_intro'                                     => 'Budžeti se koriste za upravljanje vašim finansijama i čine jednu od ključnih funkcija Firefly III.',
    'budgets_index_see_expenses_bar'                          => 'Trošenje novca će polako ispuniti ovu traku.',
    'budgets_index_navigate_periods'                          => 'Krećite se kroz periode da biste lako postavili budžete unaprijed.',
    'budgets_index_new_budget'                                => 'Kreirajte novi budžet prema svojim potrebama.',
    'budgets_index_list_of_budgets'                           => 'Koristite ovu tabelu da postavite iznose za svaki budžet i vidite kako stojite.',
    'budgets_index_outro'                                     => 'Da biste saznali više o budžetiranju, pogledajte ikonicu pomoći u gornjem desnom uglu.',

    // reports (index)
    'reports_index_intro'                                     => 'Koristite ove izvještaje da dobijete detaljan uvid u svoje finansije.',
    'reports_index_inputReportType'                           => 'Odaberite vrstu izvještaja. Pogledajte stranice pomoći da vidite šta vam svaki izvještaj pokazuje.',
    'reports_index_inputAccountsSelect'                       => 'Možete isključiti ili uključiti račune imovine kako vam odgovara.',
    'reports_index_inputDateRange'                            => 'Odabrani datumski raspon je u potpunosti na vama: od jednog dana do 10 godina ili više.',
    'reports_index_extra-options-box'                         => 'Ovisno o izvještaju koji ste odabrali, ovdje možete odabrati dodatne filtere i opcije. Pazite na ovo polje kada mijenjate tipove izvještaja.',

    // reports (reports)
    'reports_report_default_intro'                            => 'This report will give you a quick and comprehensive overview of your finances. If you wish to see anything else, please don\'t hestitate to contact me!',
    'reports_report_audit_intro'                              => 'This report will give you detailed insights in your asset accounts.',
    'reports_report_audit_optionsBox'                         => 'Use these check boxes to show or hide the columns you are interested in.',

    'reports_report_category_intro'                           => 'This report will give you insight in one or multiple categories.',
    'reports_report_category_pieCharts'                       => 'These charts will give you insight in expenses and income per category or per account.',
    'reports_report_category_incomeAndExpensesChart'          => 'This chart shows your expenses and income per category.',

    'reports_report_tag_intro'                                => 'This report will give you insight in one or multiple tags.',
    'reports_report_tag_pieCharts'                            => 'These charts will give you insight in expenses and income per tag, account, category or budget.',
    'reports_report_tag_incomeAndExpensesChart'               => 'This chart shows your expenses and income per tag.',

    'reports_report_budget_intro'                             => 'This report will give you insight in one or multiple budgets.',
    'reports_report_budget_pieCharts'                         => 'These charts will give you insight in expenses per budget or per account.',
    'reports_report_budget_incomeAndExpensesChart'            => 'This chart shows your expenses per budget.',

    // create transaction
    'transactions_create_switch_box'                          => 'Use these buttons to quickly switch the type of transaction you wish to save.',
    'transactions_create_ffInput_category'                    => 'You can freely type in this field. Previously created categories will be suggested.',
    'transactions_create_withdrawal_ffInput_budget'           => 'Link your withdrawal to a budget for better financial control.',
    'transactions_create_withdrawal_currency_dropdown_amount' => 'Use this dropdown when your withdrawal is in another currency.',
    'transactions_create_deposit_currency_dropdown_amount'    => 'Use this dropdown when your deposit is in another currency.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => 'Select a piggy bank and link this transfer to your savings.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'This field shows you how much you\'ve saved in each piggy bank.',
    'piggy-banks_index_button'                                => 'Next to this progress bar are two buttons (+ and -) to add or remove money from each piggy bank.',
    'piggy-banks_index_accountStatus'                         => 'For each asset account with at least one piggy bank the status is listed in this table.',

    // create piggy
    'piggy-banks_create_name'                                 => 'What is your goal? A new couch, a camera, money for emergencies?',
    'piggy-banks_create_date'                                 => 'You can set a target date or a deadline for your piggy bank.',

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
