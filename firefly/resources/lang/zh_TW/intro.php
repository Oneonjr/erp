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
    'index_intro'                                             => '歡迎來到 Firefly III 首頁。誠邀您花一點時間，看看這介紹，瞭解一下 Firefly III 如何運作。',
    'index_accounts-chart'                                    => '此圖表顯示資產帳戶的目前餘額，哪些帳戶在此顯示，可在偏好設定中選擇。',
    'index_box_out_holder'                                    => '這小方塊 (以及旁邊的) 給您一個財務狀況的快速概覽。',
    'index_help'                                              => '如果您需要有關頁面或表單的説明，請按此按鈕。',
    'index_outro'                                             => 'Firefly III 大部分頁面會以這樣的小介紹開始，如有問題或意見，不妨與我聯繫。祝您使用得心應手！',
    'index_sidebar-toggle'                                    => '若要建立新的交易記錄、帳戶或其他內容，請使用此圖示下的選單。',
    'index_cash_account'                                      => '目前為止就建立了這些帳戶。您可以用現金帳戶來追蹤現金支出，如果您喜歡。',

    // transactions
    'transactions_create_basic_info'                          => '輸入交易的基本資訊：來源、目標、日期和描述。',
    'transactions_create_amount_info'                         => '輸入交易金額。如有需要會自動更新外幣金額資訊。',
    'transactions_create_optional_info'                       => '這些欄位全部可選，加入這些中繼資訊有助於更好地管理交易。',
    'transactions_create_split'                               => '如果想要分割交易，按此按鈕新增更多分割記錄。',

    // create account:
    'accounts_create_iban'                                    => '帳戶若設定有效的 IBAN，有助日後匯入資料。',
    'accounts_create_asset_opening_balance'                   => '資產帳戶可以設定一個 "初始餘額"，表示此帳戶在 Firefly III 中開始時的紀錄。',
    'accounts_create_asset_currency'                          => 'Fireflly III 支援多種貨幣。資產帳戶有一種主要貨幣，須在此設定。',
    'accounts_create_asset_virtual'                           => '有時，您或會想給予帳戶一個虛擬額度：即在實際餘額之上加減一個定額。',

    // budgets index
    'budgets_index_intro'                                     => '預算用來管理您的財務，是 Firefly III 的
核心功能之一。',
    'budgets_index_see_expenses_bar'                          => '消費金額會慢慢地填滿這個橫條。',
    'budgets_index_navigate_periods'                          => '往前後不同時期，輕鬆預先設定預算。',
    'budgets_index_new_budget'                                => '隨意建立新預算。',
    'budgets_index_list_of_budgets'                           => '在此表上設定每個預算的金額，查看表現如何。',
    'budgets_index_outro'                                     => '要瞭解有關預算的詳細資訊，請查看右上角的説明圖示。',

    // reports (index)
    'reports_index_intro'                                     => '從這些報表洞察您的詳細財務狀況。',
    'reports_index_inputReportType'                           => '挑一種報表。查看說明頁面瞭解各報表展示的內容。',
    'reports_index_inputAccountsSelect'                       => '您可以根據需要排除或包括資產帳戶。',
    'reports_index_inputDateRange'                            => '所選擇的日期範圍完全由您決定：可從一天至十年或更久。',
    'reports_index_extra-options-box'                         => '根據您選擇的報表，您可以在此處選擇額外的篩選標準和選項。更改報表類型時，請查看此區塊。',

    // reports (reports)
    'reports_report_default_intro'                            => '這份報表可快速全面概覽您的個人財務狀況。如有未羅列的項目，歡迎與我聯繫！',
    'reports_report_audit_intro'                              => '這份報表可讓您洞悉資產帳戶的詳細狀況。',
    'reports_report_audit_optionsBox'                         => '在這些選取方塊勾選您感興趣想顯示的欄。',

    'reports_report_category_intro'                           => '此報表可讓您洞悉一或多個分類的詳細狀況。',
    'reports_report_category_pieCharts'                       => '這些圖表可讓您洞悉按分類或帳戶的收支詳細狀況。',
    'reports_report_category_incomeAndExpensesChart'          => '此圖表按分類顯示您的收支。',

    'reports_report_tag_intro'                                => '此報表可讓您洞悉一或多個標籤的詳細狀況。',
    'reports_report_tag_pieCharts'                            => '這些圖表可讓您洞悉按標籤、帳戶、分類或預算的收支詳細狀況。',
    'reports_report_tag_incomeAndExpensesChart'               => '此圖表按標籤顯示您的收支。',

    'reports_report_budget_intro'                             => '此報表可讓您洞悉一或多個預算的詳細狀況。',
    'reports_report_budget_pieCharts'                         => '這些圖表可讓您洞悉按預算或帳戶的支出詳細狀況。',
    'reports_report_budget_incomeAndExpensesChart'            => '此圖表按預算顯示您的支出。',

    // create transaction
    'transactions_create_switch_box'                          => '使用這些按鈕可以快速切換要保存的交易類型。',
    'transactions_create_ffInput_category'                    => '此欄位自由輸入，會顯示先前已建立分類的建議。',
    'transactions_create_withdrawal_ffInput_budget'           => '將您的提款連結至預算，以利財務管控。',
    'transactions_create_withdrawal_currency_dropdown_amount' => '在此下拉清單為提款選取另一種貨幣。',
    'transactions_create_deposit_currency_dropdown_amount'    => '在此下拉清單為存款選取另一種貨幣。',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => '選擇一個小豬撲滿，並將此轉帳連結到您的儲蓄。',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => '此欄位顯示您在每個小豬撲滿中保存了多少。',
    'piggy-banks_index_button'                                => '進度橫條旁有兩個按鈕 (+ 和-)，可以在每個小豬撲滿中加減金額。',
    'piggy-banks_index_accountStatus'                         => '有小豬撲滿的資產帳戶，會在此表格中列出狀態。',

    // create piggy
    'piggy-banks_create_name'                                 => '您的目標為何？一張新沙發、一台相機，還是應急備用？',
    'piggy-banks_create_date'                                 => '您可以設定小豬撲滿的目標日期或期限。',

    // show piggy
    'piggy-banks_show_piggyChart'                             => '此圖表顯示小豬撲滿的歷程紀錄。',
    'piggy-banks_show_piggyDetails'                           => '關於您的小豬撲滿的一些細節',
    'piggy-banks_show_piggyEvents'                            => '過去的金額加減會在此列出。',

    // bill index
    'bills_index_rules'                                       => '在此查看會檢查此訂閱是否匹配的規則。',
    'bills_index_paid_in_period'                              => '此欄位顯示上次付款的時間。',
    'bills_index_expected_in_period'                          => '此欄位顯示每個訂閱下次預計何時到期。',

    'subscriptions_index_rules'                               => '在此查看會檢查此訂閱是否匹配的規則。',
    'subscriptions_index_paid_in_period'                      => '此欄位顯示上次付款的時間。',
    'subscriptions_index_expected_in_period'                  => '此欄位顯示每個訂閱下次預計何時到期。',

    // show bill
    'bills_show_billInfo'                                     => '此表格顯示該訂閱的一般資訊。',
    'bills_show_billButtons'                                  => '使用此按鈕重新掃描舊交易，使它們能匹配此訂閱。',
    'bills_show_billChart'                                    => '此圖表顯示連結到該訂閱的交易。',
    'subscriptions_show_billInfo'                             => '此表格顯示該訂閱的一般資訊。',
    'subscriptions_show_billButtons'                          => '使用此按鈕重新掃描舊交易，使它們能匹配此訂閱。',
    'subscriptions_show_billChart'                            => '此圖表顯示連結到該訂閱的交易。',

    // create bill
    'bills_create_intro'                                      => '使用訂閱來追蹤您每期應付的金額。例如房租、保險或貸款。',
    'bills_create_name'                                       => '訂下一個顧名思義的名稱，如 "租金" 或 "健康保險"。',
    // 'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => '請選擇此訂閱的最低和最高金額。',
    'bills_create_repeat_freq_holder'                         => '大多數訂閱都會每月重複，如有需要可在此改為其他頻率。',
    'bills_create_skip_holder'                                => '若訂閱每隔兩週到期一次，將「skip」欄位設為「1」以跳過每隔一週。',

    // rules index
    'rules_index_intro'                                       => 'Firefly III 讓您管理一些規則，在建立或編輯交易時會自動套用操作。',
    'rules_index_new_rule_group'                              => '您可以將規則整合成群組，以便於管理。',
    'rules_index_new_rule'                                    => '可以有許多規則，盡情新增吧。',
    'rules_index_prio_buttons'                                => '規則的順序不拘。',
    'rules_index_test_buttons'                                => '您可以測試或套用規則到既有的交易。',
    'rules_index_rule-triggers'                               => '規則的「觸發器」與「動作」可拖放重新排序。',
    'rules_index_outro'                                       => '記得按右上角的 (?) 查看說明頁面！',

    // create rule:
    'rules_create_mandatory'                                  => '為規則取個描述性的標題，並定義觸發時機。',
    'rules_create_ruletriggerholder'                          => '您可新增多個觸發器，但需全部符合才能執行動作。',
    'rules_create_test_rule_triggers'                         => '使用此按鈕可查看有哪些交易符合您的規則。',
    'rules_create_actions'                                    => '您可新增多個動作。',

    // preferences
    'preferences_index_tabs'                                  => '這些標籤頁還有更多可用選項。',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III 支援多種貨幣，您可以在此頁進行更改。',
    'currencies_index_default'                                => 'Firefly III 有一個預設貨幣。',
    'currencies_index_buttons'                                => '使用這些按鈕可更改預設貨幣或啟用其他貨幣。',

    // create currency
    'currencies_create_code'                                  => '此應為 ISO 標準代碼 (新貨幣代碼可線上查詢)。',
];
