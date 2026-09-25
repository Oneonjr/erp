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
    'index_intro'                                             => 'Bun venit pe pagina principală a Firefly III. Te rog să parcurgi acest intro pentru a vedea cum funcționează Firefly III.',
    'index_accounts-chart'                                    => 'Acest grafic afișează soldul curent al conturilor tale de active. Poți selecta conturile vizibile aici în preferințele tale.',
    'index_box_out_holder'                                    => 'Acest dreptunghi mic și cele de lângă el iți vor oferi o imagine de ansamblu rapidă a situației tale financiare.',
    'index_help'                                              => 'Dacă ai nevoie vreodată de ajutor cu o pagină sau un formular, apasă acest buton.',
    'index_outro'                                             => 'Majoritatea paginilor din Firefly III vor începe cu un mic tur ca acesta. Contactează-mă dacă ai întrebări sau comentarii. Bucură-te de utilizare!',
    'index_sidebar-toggle'                                    => 'Pentru a crea noi tranzacții, conturi sau alte lucruri, utilizează meniul de sub această pictogramă.',
    'index_cash_account'                                      => 'Acestea sunt conturile create până acum. Poți utiliza contul de numerar pentru a urmări cheltuielile cu numerar, dar nu este obligatoriu, desigur.',

    // transactions
    'transactions_create_basic_info'                          => 'Introduceți informațiile de bază ale tranzacției. Sursa, destinația, data și descrierea.',
    'transactions_create_amount_info'                         => 'Introdu valoarea tranzacției. Dacă este necesar, câmpurile se vor actualiza automat pentru informațiile din valută.',
    'transactions_create_optional_info'                       => 'Toate aceste câmpuri sunt opționale. Adăugarea de meta-date aici va îmbunătăți organizarea tranzacțiilor.',
    'transactions_create_split'                               => 'Dacă vrei să împarți o tranzacție, adaugă mai multe diviziuni folosind acest buton',

    // create account:
    'accounts_create_iban'                                    => 'Dă-le conturilor tale un IBAN valid. Acest lucru poate face importul de date mult mai ușor în viitor.',
    'accounts_create_asset_opening_balance'                   => 'Conturile de active pot avea un "sold de deschidere", indicând începutul istoricului acestui cont în Firefly III.',
    'accounts_create_asset_currency'                          => 'Firefly III acceptă mai multe valute. Conturile de active au o monedă principală, pe care trebuie să o setezi aici.',
    'accounts_create_asset_virtual'                           => 'Câteodată este de ajutor să adaugi contului tău un sold virtual: o sumă suplimentară adăugată sau retrasă întotdeauna din soldul real.',

    // budgets index
    'budgets_index_intro'                                     => 'Bugetele sunt folosite pentru a gestiona finanțele tale; ele sunt una dintre funcțiile de bază ale Firefly III.',
    'budgets_index_see_expenses_bar'                          => 'Banii cheltuiți vor umple încet această linie.',
    'budgets_index_navigate_periods'                          => 'Navighează prin perioade pentru a seta bugetele în avans cu ușurință.',
    'budgets_index_new_budget'                                => 'Creează bugete noi după cum consideri necesar.',
    'budgets_index_list_of_budgets'                           => 'Folosește acest tabel pentru a seta sumele fiecărui buget și pentru a vedea cum te progresezi.',
    'budgets_index_outro'                                     => 'Pentru a afla mai multe despre bugetare, verifică pictograma de ajutor din colțul din dreapta sus.',

    // reports (index)
    'reports_index_intro'                                     => 'Folosește aceste rapoarte pentru a obține informații detaliate despre finanțele tale.',
    'reports_index_inputReportType'                           => 'Alege un tip de raport. Consultă paginile de ajutor pentru a vedea ce arată fiecare raport.',
    'reports_index_inputAccountsSelect'                       => 'Poți exclude sau include conturi de active după cum consideri necesar.',
    'reports_index_inputDateRange'                            => 'Intervalul de date selectat depinde complet de tine: de la o zi până la 10 ani sau mai mult.',
    'reports_index_extra-options-box'                         => 'În funcție de raportul pe care l-ați selectat, puteți selecta filtre și opțiuni suplimentare aici. Urmăriți această casetă când modificați tipurile de rapoarte.',

    // reports (reports)
    'reports_report_default_intro'                            => 'Acest raport vă va oferi o imagine de ansamblu rapidă și cuprinzătoare a finanțelor. Dacă doriți să vedeți altceva, vă rugăm să nu ezitați să mă contactați!',
    'reports_report_audit_intro'                              => 'Acest raport vă va oferi informații detaliate despre conturile de active.',
    'reports_report_audit_optionsBox'                         => 'Utilizați aceste casete pentru a afișa sau a ascunde coloanele care vă interesează.',

    'reports_report_category_intro'                           => 'Acest raport vă va oferi informații despre una sau mai multe categorii.',
    'reports_report_category_pieCharts'                       => 'Aceste diagrame vă vor oferi informații despre cheltuielile și veniturile pe categorii sau pe cont.',
    'reports_report_category_incomeAndExpensesChart'          => 'Această diagramă arată cheltuielile și veniturile pe categorii.',

    'reports_report_tag_intro'                                => 'Acest raport vă va oferi informații despre una sau mai multe etichete.',
    'reports_report_tag_pieCharts'                            => 'Aceste diagrame vă vor oferi informații despre cheltuielile și veniturile pe etichete, cont, categorie sau buget.',
    'reports_report_tag_incomeAndExpensesChart'               => 'Acest grafic prezintă cheltuielile și venitul pe etichetă.',

    'reports_report_budget_intro'                             => 'Acest raport vă va oferi informații despre unul sau mai multe bugete.',
    'reports_report_budget_pieCharts'                         => 'Aceste diagrame vă vor oferi informații despre cheltuielile pe buget sau pe cont.',
    'reports_report_budget_incomeAndExpensesChart'            => 'Acest grafic prezintă cheltuielile dvs. pe buget.',

    // create transaction
    'transactions_create_switch_box'                          => 'Utilizați aceste butoane pentru a comuta rapid tipul de tranzacție pe care doriți să o salvați.',
    'transactions_create_ffInput_category'                    => 'Puteți scrie în mod liber în acest câmp. Formele create anterior vor fi sugerate.',
    'transactions_create_withdrawal_ffInput_budget'           => 'Legați retragerea la un buget pentru un control financiar mai bun.',
    'transactions_create_withdrawal_currency_dropdown_amount' => 'Utilizați acest dropdown atunci când retragerea se face într-o altă monedă.',
    'transactions_create_deposit_currency_dropdown_amount'    => 'Utilizați acest dropdown atunci când depozitul dvs. este în altă monedă.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => 'Selectați o pușculiță și conectați acest transfer la economiile dvs.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'Acest câmp vă arată cât de mult ați salvat în fiecare pușculiță.',
    'piggy-banks_index_button'                                => 'Lângă această bara de progres sunt două butoane (+ și -) pentru a adăuga sau a elimina bani din fiecare pușculiță.',
    'piggy-banks_index_accountStatus'                         => 'Pentru fiecare cont de activ cu cel puțin o pușculiță, statutul este menționat în acest tabel.',

    // create piggy
    'piggy-banks_create_name'                                 => 'Care este țelul tău? O canapea nouă, o cameră, bani pentru urgențe?',
    'piggy-banks_create_date'                                 => 'Puteți stabili o dată țintă sau un termen limită pentru pușculița dvs..',

    // show piggy
    'piggy-banks_show_piggyChart'                             => 'Această diagramă va arăta istoria acestei bănci.',
    'piggy-banks_show_piggyDetails'                           => 'Unele detalii despre pușculița dvs.',
    'piggy-banks_show_piggyEvents'                            => 'Orice adăugări sau eliminări sunt de asemenea enumerate aici.',

    // bill index
    'bills_index_rules'                                       => 'Aici vezi ce reguli vor verifica dacă abonamentul este declanșat',
    'bills_index_paid_in_period'                              => 'Acest câmp indică ultima dată când abonamentul a fost plătit.',
    'bills_index_expected_in_period'                          => 'Acest câmp indică pentru fiecare abonament dacă și când se așteaptă următoarea plată pentru abonament.',

    'subscriptions_index_rules'                               => 'Aici vezi ce reguli vor verifica dacă abonamentul este declanșat',
    'subscriptions_index_paid_in_period'                      => 'Acest câmp indică data ultimei plăți a abonamentului.',
    'subscriptions_index_expected_in_period'                  => 'Acest câmp indică pentru fiecare abonament dacă și când se așteaptă următoarea plată pentru abonament.',

    // show bill
    'bills_show_billInfo'                                     => 'Acest tabel arată informații generale despre abonament.',
    'bills_show_billButtons'                                  => 'Folosește acest buton pentru a re-scana tranzacțiile vechi, astfel încât să fie asociate cu această subscripție.',
    'bills_show_billChart'                                    => 'Acest grafic afișează tranzacțiile asociate acestui abonament.',
    'subscriptions_show_billInfo'                             => 'Acest tabel afișează câteva informații generale despre acest abonament.',
    'subscriptions_show_billButtons'                          => 'Folosește acest buton pentru a re-scana tranzacțiile vechi, astfel încât să fie asociate acestui abonament.',
    'subscriptions_show_billChart'                            => 'Acest grafic afișează tranzacțiile asociate acestui abonament.',

    // create bill
    'bills_create_intro'                                      => 'Folosește abonamentele pentru a urmări sumele de bani datorate în fiecare perioadă. Gândește-te la cheltuieli precum chiria, asigurările sau ratele la creditul ipotecar.',
    'bills_create_name'                                       => 'Utilizați un nume descriptiv, cum ar fi "Chirie" sau "Asigurarea de sănătate".',
    // 'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => 'Selectează o sumă minimă și una maximă pentru acest abonament.',
    'bills_create_repeat_freq_holder'                         => 'Majoritatea abonamentelor se repetă lunar, dar poți seta aici o altă frecvență.',
    'bills_create_skip_holder'                                => 'Dacă un abonament se repetă la fiecare 2 săptămâni, câmpul "sari peste" trebuie setat la "1" pentru a sări o săptămână din două.',

    // rules index
    'rules_index_intro'                                       => 'Firefly III vă permite să gestionați reguli, care vor fi aplicate automat pentru orice tranzacție pe care o creați sau o editați.',
    'rules_index_new_rule_group'                              => 'Puteți combina regulile în grupuri pentru o gestionare mai ușoară.',
    'rules_index_new_rule'                                    => 'Creați câte reguli doriți.',
    'rules_index_prio_buttons'                                => 'Comandați-le în orice fel doriți.',
    'rules_index_test_buttons'                                => 'Puteți testa regulile sau le puteți aplica tranzacțiilor existente.',
    'rules_index_rule-triggers'                               => 'Regulile au "declanșatoare" și "acțiuni" pe care le puteți comanda prin drag-and-drop.',
    'rules_index_outro'                                       => 'Asigurați-vă că verificați paginile de ajutor utilizând pictograma (?) din partea dreaptă sus!',

    // create rule:
    'rules_create_mandatory'                                  => 'Alegeți un titlu descriptiv și stabiliți când ar trebui să fie declanșată regula.',
    'rules_create_ruletriggerholder'                          => 'Adăugați cât mai mulți declanșatori, după cum doriți, dar rețineți că toate declanșatoarele trebuie să se potrivească înainte de declanșarea oricăror acțiuni.',
    'rules_create_test_rule_triggers'                         => 'Utilizați acest buton pentru a vedea care tranzacții s-ar potrivi regulii dvs.',
    'rules_create_actions'                                    => 'Setați câte acțiuni doriți.',

    // preferences
    'preferences_index_tabs'                                  => 'Mai multe opțiuni sunt disponibile în spatele acestor file.',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III acceptă mai multe valute, pe care le puteți schimba în această pagină.',
    'currencies_index_default'                                => 'Firefly III are o monedă implicită.',
    'currencies_index_buttons'                                => 'Utilizați aceste butoane pentru a modifica moneda prestabilită sau a activa alte valute.',

    // create currency
    'currencies_create_code'                                  => 'Acest cod ar trebui să fie conform ISO (căutați pe Google noua dvs. monedă).',
];
