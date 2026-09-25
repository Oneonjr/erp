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
    'index_intro'                                             => 'Vitajte na úvodnej stránke Firefly III. Prejdite si túto krátku prehliadku, aby ste sa oboznámili s fungovaním Firefly III.',
    'index_accounts-chart'                                    => 'Tento graf zobrazuje aktuálne zostatky vašich majetkových účtov. Účty, ktoré sa tu majú zobrazovať, môžete vybrať v predvoľbách.',
    'index_box_out_holder'                                    => 'Toto pole a polia vedľa neho poskytujú rýchly prehľad o vašej finančnej situácii.',
    'index_help'                                              => 'Keď budete potrebovať pomoc so stránkou alebo formulárom, stlačte toto tlačidlo.',
    'index_outro'                                             => 'Väčšina stránok Firefly III sa začína podobnou krátkou prehliadkou. Ak máte otázky alebo pripomienky, obráťte sa na autora. Príjemné používanie!',
    'index_sidebar-toggle'                                    => 'Ak chcete vytvoriť novú transakciu, účet alebo inú položku, použite ponuku pod touto ikonou.',
    'index_cash_account'                                      => 'Toto sú doteraz vytvorené účty. Hotovostný účet môžete používať na sledovanie hotovostných výdavkov, nie je to však povinné.',

    // transactions
    'transactions_create_basic_info'                          => 'Zadajte základné údaje o transakcii: zdroj, cieľ, dátum a popis.',
    'transactions_create_amount_info'                         => 'Zadajte sumu transakcie. Ak je to potrebné, polia s údajmi o sume v cudzej mene sa automaticky aktualizujú.',
    'transactions_create_optional_info'                       => 'Všetky tieto polia sú nepovinné. Metadáta vám pomôžu lepšie usporiadať transakcie.',
    'transactions_create_split'                               => 'Ak chcete transakciu rozdeliť, týmto tlačidlom pridajte ďalšiu časť.',

    // create account:
    'accounts_create_iban'                                    => 'Zadajte k účtom platný IBAN. V budúcnosti to môže výrazne zjednodušiť import údajov.',
    'accounts_create_asset_opening_balance'                   => 'Majetkové účty môžu mať „počiatočný zostatok“, ktorý označuje začiatok histórie účtu vo Firefly III.',
    'accounts_create_asset_currency'                          => 'Firefly III podporuje viacero mien. Každý majetkový účet má jednu hlavnú menu, ktorú musíte nastaviť tu.',
    'accounts_create_asset_virtual'                           => 'Niekedy môže byť užitočné nastaviť účtu virtuálny zostatok: dodatočnú sumu, ktorá sa vždy pripočíta k skutočnému zostatku alebo sa od neho odpočíta.',

    // budgets index
    'budgets_index_intro'                                     => 'Rozpočty slúžia na správu financií a patria medzi základné funkcie Firefly III.',
    'budgets_index_see_expenses_bar'                          => 'S pribúdajúcimi výdavkami sa bude tento ukazovateľ postupne napĺňať.',
    'budgets_index_navigate_periods'                          => 'Prechádzajte medzi obdobiami a jednoducho nastavujte rozpočty vopred.',
    'budgets_index_new_budget'                                => 'Vytvorte si toľko rozpočtov, koľko potrebujete.',
    'budgets_index_list_of_budgets'                           => 'V tejto tabuľke môžete nastaviť sumu pre každý rozpočet a sledovať jeho čerpanie.',
    'budgets_index_outro'                                     => 'Viac informácií o rozpočtoch nájdete po kliknutí na ikonu pomocníka v pravom hornom rohu.',

    // reports (index)
    'reports_index_intro'                                     => 'Pomocou týchto prehľadov získate podrobné informácie o svojich financiách.',
    'reports_index_inputReportType'                           => 'Vyberte typ prehľadu. Na stránkach pomocníka nájdete vysvetlenie, čo jednotlivé prehľady zobrazujú.',
    'reports_index_inputAccountsSelect'                       => 'Podľa potreby môžete majetkové účty zahrnúť alebo vylúčiť.',
    'reports_index_inputDateRange'                            => 'Obdobie si môžete zvoliť ľubovoľne: od jedného dňa až po desať rokov alebo viac.',
    'reports_index_extra-options-box'                         => 'V závislosti od vybraného prehľadu tu môžete nastaviť ďalšie filtre a možnosti. Pri zmene typu prehľadu sledujte toto pole.',

    // reports (reports)
    'reports_report_default_intro'                            => 'Tento prehľad poskytuje rýchly a ucelený pohľad na vaše financie. Ak vám niečo chýba, neváhajte kontaktovať autora.',
    'reports_report_audit_intro'                              => 'Tento prehľad poskytuje podrobné informácie o vašich majetkových účtoch.',
    'reports_report_audit_optionsBox'                         => 'Pomocou týchto začiarkavacích polí môžete zobraziť alebo skryť požadované stĺpce.',

    'reports_report_category_intro'                           => 'Tento prehľad poskytuje informácie o jednej alebo viacerých kategóriách.',
    'reports_report_category_pieCharts'                       => 'Tieto grafy zobrazujú výdavky a príjmy podľa kategórií alebo účtov.',
    'reports_report_category_incomeAndExpensesChart'          => 'Tento graf zobrazuje výdavky a príjmy podľa kategórií.',

    'reports_report_tag_intro'                                => 'Tento prehľad poskytuje informácie o jednom alebo viacerých štítkoch.',
    'reports_report_tag_pieCharts'                            => 'Tieto grafy zobrazujú výdavky a príjmy podľa štítkov, účtov, kategórií alebo rozpočtov.',
    'reports_report_tag_incomeAndExpensesChart'               => 'Tento graf zobrazuje výdavky a príjmy podľa štítkov.',

    'reports_report_budget_intro'                             => 'Tento prehľad poskytuje informácie o jednom alebo viacerých rozpočtoch.',
    'reports_report_budget_pieCharts'                         => 'Tieto grafy zobrazujú výdavky podľa rozpočtov alebo účtov.',
    'reports_report_budget_incomeAndExpensesChart'            => 'Tento graf zobrazuje výdavky podľa rozpočtov.',

    // create transaction
    'transactions_create_switch_box'                          => 'Pomocou týchto tlačidiel môžete rýchlo zmeniť typ transakcie, ktorú chcete uložiť.',
    'transactions_create_ffInput_category'                    => 'Do tohto poľa môžete zadať ľubovoľný názov. Firefly III vám ponúkne už vytvorené kategórie.',
    'transactions_create_withdrawal_ffInput_budget'           => 'Prepojte výdavok s rozpočtom, aby ste mali lepšiu kontrolu nad financiami.',
    'transactions_create_withdrawal_currency_dropdown_amount' => 'Túto rozbaľovaciu ponuku použite, ak je výdavok v inej mene.',
    'transactions_create_deposit_currency_dropdown_amount'    => 'Túto rozbaľovaciu ponuku použite, ak je príjem v inej mene.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => 'Vyberte sporiaci cieľ a prepojte s ním tento prevod.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'Toto pole zobrazuje, koľko ste nasporili v jednotlivých sporiacich cieľoch.',
    'piggy-banks_index_button'                                => 'Vedľa ukazovateľa priebehu sú dve tlačidlá (+ a −), ktorými môžete do každého sporiaceho cieľa pridať peniaze alebo ich odobrať.',
    'piggy-banks_index_accountStatus'                         => 'V tabuľke je uvedený stav každého majetkového účtu, ku ktorému je priradený aspoň jeden sporiaci cieľ.',

    // create piggy
    'piggy-banks_create_name'                                 => 'Aký je váš cieľ? Nová pohovka, fotoaparát alebo finančná rezerva?',
    'piggy-banks_create_date'                                 => 'Pre sporiaci cieľ môžete nastaviť cieľový dátum alebo termín.',

    // show piggy
    'piggy-banks_show_piggyChart'                             => 'Tento graf zobrazuje históriu sporiaceho cieľa.',
    'piggy-banks_show_piggyDetails'                           => 'Podrobnosti o sporiacom cieli',
    'piggy-banks_show_piggyEvents'                            => 'Tu sú uvedené všetky pridané aj odobraté sumy.',

    // bill index
    'bills_index_rules'                                       => 'Tu vidíte pravidlá, ktoré zisťujú, či bola táto pravidelná platba uhradená.',
    'bills_index_paid_in_period'                              => 'Toto pole uvádza, kedy bola pravidelná platba naposledy uhradená.',
    'bills_index_expected_in_period'                          => 'Toto pole pri každej pravidelnej platbe uvádza, či a kedy sa očakáva ďalšia úhrada.',

    'subscriptions_index_rules'                               => 'Tu vidíte pravidlá, ktoré zisťujú, či bola táto pravidelná platba uhradená.',
    'subscriptions_index_paid_in_period'                      => 'Toto pole uvádza, kedy bola pravidelná platba naposledy uhradená.',
    'subscriptions_index_expected_in_period'                  => 'Toto pole pri každej pravidelnej platbe uvádza, či a kedy sa očakáva ďalšia úhrada.',

    // show bill
    'bills_show_billInfo'                                     => 'Táto tabuľka zobrazuje všeobecné informácie o pravidelnej platbe.',
    'bills_show_billButtons'                                  => 'Týmto tlačidlom znova prehľadáte staršie transakcie a priradíte ich k tejto pravidelnej platbe.',
    'bills_show_billChart'                                    => 'Tento graf zobrazuje transakcie prepojené s pravidelnou platbou.',
    'subscriptions_show_billInfo'                             => 'Táto tabuľka zobrazuje všeobecné informácie o pravidelnej platbe.',
    'subscriptions_show_billButtons'                          => 'Týmto tlačidlom znova prehľadáte staršie transakcie a priradíte ich k tejto pravidelnej platbe.',
    'subscriptions_show_billChart'                            => 'Tento graf zobrazuje transakcie prepojené s pravidelnou platbou.',

    // create bill
    'bills_create_intro'                                      => 'Pravidelné platby vám umožňujú sledovať sumy splatné v jednotlivých obdobiach, napríklad nájomné, poistné alebo splátky hypotéky.',
    'bills_create_name'                                       => 'Zadajte výstižný názov, napríklad „Nájomné“ alebo „Zdravotné poistenie“.',
    // 'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => 'Nastavte minimálnu a maximálnu sumu pravidelnej platby.',
    'bills_create_repeat_freq_holder'                         => 'Väčšina pravidelných platieb sa opakuje mesačne, môžete však nastaviť aj inú frekvenciu.',
    'bills_create_skip_holder'                                => 'Ak sa pravidelná platba opakuje každé dva týždne, nastavte pole „Preskočiť“ na hodnotu „1“, aby sa vynechal každý druhý týždeň.',

    // rules index
    'rules_index_intro'                                       => 'Firefly III umožňuje spravovať pravidlá, ktoré sa automaticky použijú na každú vytvorenú alebo upravenú transakciu.',
    'rules_index_new_rule_group'                              => 'Pravidlá môžete pre jednoduchšiu správu zoskupiť.',
    'rules_index_new_rule'                                    => 'Vytvorte si toľko pravidiel, koľko potrebujete.',
    'rules_index_prio_buttons'                                => 'Zoraďte ich podľa svojich potrieb.',
    'rules_index_test_buttons'                                => 'Pravidlá môžete otestovať alebo použiť na existujúce transakcie.',
    'rules_index_rule-triggers'                               => 'Pravidlá obsahujú „podmienky“ a „akcie“, ktorých poradie môžete meniť presúvaním.',
    'rules_index_outro'                                       => 'Nezabudnite si pozrieť stránky pomocníka pomocou ikony (?) v pravom hornom rohu.',

    // create rule:
    'rules_create_mandatory'                                  => 'Zadajte výstižný názov a nastavte, kedy sa má pravidlo spustiť.',
    'rules_create_ruletriggerholder'                          => 'Pridajte ľubovoľný počet podmienok. Pred vykonaním akcií však musia byť splnené VŠETKY podmienky.',
    'rules_create_test_rule_triggers'                         => 'Týmto tlačidlom zobrazíte transakcie, ktoré by zodpovedali pravidlu.',
    'rules_create_actions'                                    => 'Nastavte toľko akcií, koľko potrebujete.',

    // preferences
    'preferences_index_tabs'                                  => 'Ďalšie možnosti nájdete na týchto kartách.',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III podporuje viacero mien, ktoré môžete spravovať na tejto stránke.',
    'currencies_index_default'                                => 'Firefly III používa jednu predvolenú menu.',
    'currencies_index_buttons'                                => 'Týmito tlačidlami môžete zmeniť predvolenú menu alebo zapnúť ďalšie meny.',

    // create currency
    'currencies_create_code'                                  => 'Kód musí zodpovedať norme ISO. Kód novej meny si môžete vyhľadať na internete.',
];
