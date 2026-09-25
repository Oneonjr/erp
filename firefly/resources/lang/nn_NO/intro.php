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
    'index_intro'                                             => 'Velkomen til indekssida i Firefly III. Ta deg tid til å gå gjennom denne introduksjonen for å få ein følelse av korleis Firefly III fungerar.',
    'index_accounts-chart'                                    => 'Dette diagrammet visar gjeldande saldo på aktivakontoane dine. Du kan velga kontoane som er synlige her under innstillinger.',
    'index_box_out_holder'                                    => 'Denne lille boksen og boksane ved sida av gjer deg ei rask oversikt over din økonomiske situasjon.',
    'index_help'                                              => 'Om du treng hjelp til ein side eller eit skjema, trykker du på denne knappen.',
    'index_outro'                                             => 'Dei fleste sidene av Firefly III vil starte med ein liten gjennomgang slik som denne. Ta kontakt med meg om du har spørsmål eller kommentarar. Sett igang!',
    'index_sidebar-toggle'                                    => 'For å oppretta nye transaksjonar, kontoar eller andre ting, bruk menyen under dette ikonet.',
    'index_cash_account'                                      => 'Dette er kontoane som er oppretta så langt. Du kan bruka kontantkontoen til å spore kontantutgifter, men det er sjølvsagt ikkje obligatorisk.',

    // transactions
    'transactions_create_basic_info'                          => 'Skriv inn grunnleggende informasjon om din transaksjon. Kjelde, destinasjon, dato og beskriving.',
    'transactions_create_amount_info'                         => 'Angi mengde for transaksjonen. Om nødvendig vil felta auto-oppdatera for utenlansk beløp info.',
    'transactions_create_optional_info'                       => 'Alle desse felta er valgfrie. Å legga til meta-data her vil gjera transaksjonane dine betre organisert.',
    'transactions_create_split'                               => 'Om du vil dele ein transaksjon, kan du legga til fleire deler med denne knappen',

    // create account:
    'accounts_create_iban'                                    => 'Gi kontoane dine ein gyldig IBAN. Dette gjer dataimport lettare i framtida.',
    'accounts_create_asset_opening_balance'                   => 'Aktivakontoar kan ha ein "åpningssaldo" som indikerar starten på denne kontoens historie i Firefly III.',
    'accounts_create_asset_currency'                          => 'Firefly III støttar fleire valutaer. Aktivakontoar har ein hovedvaluta, som du må definera her.',
    'accounts_create_asset_virtual'                           => 'Nokon gonger kan det hjelpa å gje kontoen din ein virtuell saldo: eit ekstra beløp vert alltid lagt til eller fjerna frå den faktiske saldoen.',

    // budgets index
    'budgets_index_intro'                                     => 'Budsjett vert brukt til å handtera økonomien din og er ein av kjernefunksjonane i Firefly III.',
    'budgets_index_see_expenses_bar'                          => 'Når du brukar pengar vil denne linja fyllast opp.',
    'budgets_index_navigate_periods'                          => 'Naviger gjennom periodar for å enkelt definera budsjett på førehand.',
    'budgets_index_new_budget'                                => 'Opprett nye budsjett etter behov.',
    'budgets_index_list_of_budgets'                           => 'Bruk denne tabellen til å angi beløp for kvart budsjett og sjå korleis du klarar deg.',
    'budgets_index_outro'                                     => 'Om du vil vita meir om budsjettering, trykk på hjelp-ikonet øvst til høgre.',

    // reports (index)
    'reports_index_intro'                                     => 'Bruk desse rapportane for å få detaljert innsikt i din økonomi.',
    'reports_index_inputReportType'                           => 'Vel ein rapporttype. Sjekk ut hjelpesidene for å sjå kva kvar rapport visar deg.',
    'reports_index_inputAccountsSelect'                       => 'Du kan ekskludere eller inkludere aktivakontoar etter eget ønske.',
    'reports_index_inputDateRange'                            => 'The selected date range is entirely up to you: from one day to 10 years or more.',
    'reports_index_extra-options-box'                         => 'Avhengig av kva rapport du har valt, kan du velga ekstra filter og alternativ her. Følg med på denne boksen når du endrer rapporttypar.',

    // reports (reports)
    'reports_report_default_intro'                            => 'Denne rapporten gjer deg ein rask og omfattende oversikt over økonomien din. Om du ønskar å sjå noko anna her, ikkje nøl med å kontakta meg!',
    'reports_report_audit_intro'                              => 'Denne rapporten gjer deg detaljert innsikt i aktivakontoane dine.',
    'reports_report_audit_optionsBox'                         => 'Bruk desse avkrysningsboksane for å vise eller skjule kolonnane du er interessert i.',

    'reports_report_category_intro'                           => 'Denne rapporten gjer deg innblikk i ein eller fleire kategoriar.',
    'reports_report_category_pieCharts'                       => 'Desse diagramma gjer deg innblikk i utgifter og inntekt per kategori eller per konto.',
    'reports_report_category_incomeAndExpensesChart'          => 'Dette diagrammet visar dine utgifter og inntekter per kategori.',

    'reports_report_tag_intro'                                => 'Denne rapporten gjer deg innblikk i ein eller fleire nøkkelord.',
    'reports_report_tag_pieCharts'                            => 'Desse diagramma gjer deg innblikk i utgifter og inntekter per nøkkelord, konto, kategori eller budsjett.',
    'reports_report_tag_incomeAndExpensesChart'               => 'Dette diagrammet visar dine utgifter og inntekter per nøkkelord.',

    'reports_report_budget_intro'                             => 'Denne rapporten gjer deg innblikk i eit eller fleire budsjett.',
    'reports_report_budget_pieCharts'                         => 'Desse diagramma gjer deg innblikk i utgifter og inntekter per budsjett eller per konto.',
    'reports_report_budget_incomeAndExpensesChart'            => 'Dette diagrammet visar dine utgifter per budsjett.',

    // create transaction
    'transactions_create_switch_box'                          => 'Bruk desse knappane for å raskt bytte til den typen transaksjon du vil lagra.',
    'transactions_create_ffInput_category'                    => 'Du kan fritt skrive inn dette feltet. Tidlegare oppretta kategoriar vil verta foreslått.',
    'transactions_create_withdrawal_ffInput_budget'           => 'Koble uttaket ditt til eit budsjett for betre økonomisk kontroll.',
    'transactions_create_withdrawal_currency_dropdown_amount' => 'Bruk denne rullegardinmenyen når uttaket ditt er i ein annan valuta.',
    'transactions_create_deposit_currency_dropdown_amount'    => 'Bruk denne rullegardinmenyen når innskuddet ditt er i ein annan valuta.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => 'Vel ein sparegris og knytt denne overføringen til din sparing.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'Dette feltet visar kor mykje du har spart i kvar sparegris.',
    'piggy-banks_index_button'                                => 'Ved sida av denne fremdriftslinjen er det to knapper (+ og -) for å legga til eller fjerna pengar frå kvar sparegris.',
    'piggy-banks_index_accountStatus'                         => 'For kvar aktivakonto med minst ein sparegris er statusen oppført i denne tabellen.',

    // create piggy
    'piggy-banks_create_name'                                 => 'Kva er målet ditt? Ein ny sofa, eit kamera, pengar til uforutsette utgifter?',
    'piggy-banks_create_date'                                 => 'Du kan angi ein måldato eller ein frist for din sparegris.',

    // show piggy
    'piggy-banks_show_piggyChart'                             => 'Dette diagrammet visar historikken til denne sparegrisen.',
    'piggy-banks_show_piggyDetails'                           => 'Nokon detaljar om sparegrisen din',
    'piggy-banks_show_piggyEvents'                            => 'Eventuelle tillegg eller flyttinger er òg oppført her.',

    // bill index
    'bills_index_rules'                                       => 'Her ser du kva reglar som kontrollerar om dette abonnementet passar',
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
    'bills_create_name'                                       => 'Bruk eit beskrivende namn som "Leie" eller "Helseforsikring".',
    // 'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => 'Select a minimum and maximum amount for this subscription.',
    'bills_create_repeat_freq_holder'                         => 'Most subscriptions repeat monthly, but you can set another frequency here.',
    'bills_create_skip_holder'                                => 'If a subscription repeats every 2 weeks, the "skip"-field should be set to "1" to skip every other week.',

    // rules index
    'rules_index_intro'                                       => 'Firefly III lar deg administrere reglar som automatisk vil verta brukt på alle transaksjonar du oppretter eller redigerer.',
    'rules_index_new_rule_group'                              => 'Du kan kombinere reglar i grupper for enklare handtering.',
    'rules_index_new_rule'                                    => 'Lag så mange reglar som du vil.',
    'rules_index_prio_buttons'                                => 'Legg dei i den rekkefølgen du synes passar best.',
    'rules_index_test_buttons'                                => 'Du kan teste reglane dine eller bruka dei på eksisterande transaksjonar.',
    'rules_index_rule-triggers'                               => 'Regler har "utløsere" og "handlinger" som du kan bytte rekkefølge på ved å dra og slippe.',
    'rules_index_outro'                                       => 'Husk å sjekka hjelpesidene ved å bruka (?) -ikonet øvst til høgre!',

    // create rule:
    'rules_create_mandatory'                                  => 'Vel ein beskrivende tittel, og bestem når regelen skal utløses.',
    'rules_create_ruletriggerholder'                          => 'Legg til så mange utløsere som du vil, men husk at ALLE utløsere må samsvare før nokon handlinger settes i gang.',
    'rules_create_test_rule_triggers'                         => 'Bruk denne knappen for å sjå kva eksisterande transaksjonar som samsvarer med regelen din.',
    'rules_create_actions'                                    => 'Sett så mange handlinger som du vil.',

    // preferences
    'preferences_index_tabs'                                  => 'Fleire alternativ er tilgjengeleg bak desse fanene.',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III støttar fleire valutaer, som du kan endra på denne sida.',
    'currencies_index_default'                                => 'Firefly III har ein standard valuta.',
    'currencies_index_buttons'                                => 'Bruk desse knappane for å endra standard valuta eller aktivera andre valutaer.',

    // create currency
    'currencies_create_code'                                  => 'Denne koden bør vera ISO-kompatibel (Søk på Google for å finna ISO-koden).',
];
