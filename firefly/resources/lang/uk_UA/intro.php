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
    'index_intro'                                             => 'Вітаємо на головній сторінці Firefly III. Пройдіть цей короткий вступ, щоб зрозуміти, як працює Firefly III.',
    'index_accounts-chart'                                    => 'Ця діаграма показує поточний баланс ваших рахунків активів. Які рахунки тут показувати, можна вибрати в налаштуваннях.',
    'index_box_out_holder'                                    => 'Цей невеликий блок і сусідні з ним дають швидкий огляд вашого фінансового стану.',
    'index_help'                                              => 'Якщо вам знадобиться допомога зі сторінкою чи формою, натисніть цю кнопку.',
    'index_outro'                                             => 'Більшість сторінок Firefly III починаються з такого короткого туру. Якщо у вас є запитання чи зауваження, зв\'яжіться зі мною. Приємного користування!',
    'index_sidebar-toggle'                                    => 'Щоб створити нові транзакції, рахунки чи щось інше, скористайтеся меню під цією піктограмою.',
    'index_cash_account'                                      => 'Це рахунки, створені на цей момент. Готівковий рахунок можна використовувати для обліку готівкових витрат, але це, звісно, не обов\'язково.',

    // transactions
    'transactions_create_basic_info'                          => 'Введіть основну інформацію про транзакцію: джерело, призначення, дату й опис.',
    'transactions_create_amount_info'                         => 'Введіть суму транзакції. За потреби поля автоматично оновляться для суми в іноземній валюті.',
    'transactions_create_optional_info'                       => 'Усі ці поля необов\'язкові. Додані тут метадані зроблять ваші транзакції впорядкованішими.',
    'transactions_create_split'                               => 'Якщо ви хочете розділити транзакцію, додайте ще частин цією кнопкою',

    // create account:
    'accounts_create_iban'                                    => 'Вкажіть для рахунків дійсний IBAN. У майбутньому це може значно спростити імпорт даних.',
    'accounts_create_asset_opening_balance'                   => 'Рахунки активів можуть мати «початковий баланс», який позначає початок історії цього рахунку у Firefly III.',
    'accounts_create_asset_currency'                          => 'Firefly III підтримує кілька валют. Рахунок активів має одну основну валюту, яку потрібно вказати тут.',
    'accounts_create_asset_virtual'                           => 'Іноді корисно задати рахунку віртуальний баланс: додаткову суму, яка завжди додається до фактичного балансу або віднімається від нього.',

    // budgets index
    'budgets_index_intro'                                     => 'Бюджети використовуються для керування вашими фінансами і є однією з основних функцій Firefly III.',
    'budgets_index_see_expenses_bar'                          => 'Витрачання грошей поступово заповнюватиме цю смужку.',
    'budgets_index_navigate_periods'                          => 'Переходьте між періодами, щоб легко задавати бюджети наперед.',
    'budgets_index_new_budget'                                => 'Створюйте нові бюджети на свій розсуд.',
    'budgets_index_list_of_budgets'                           => 'У цій таблиці задавайте суми для кожного бюджету й стежте, як ідуть справи.',
    'budgets_index_outro'                                     => 'Щоб дізнатися більше про бюджетування, натисніть піктограму довідки у правому верхньому куті.',

    // reports (index)
    'reports_index_intro'                                     => 'Використовуйте ці звіти, щоб докладно розібратися у своїх фінансах.',
    'reports_index_inputReportType'                           => 'Виберіть тип звіту. На сторінках довідки описано, що показує кожен звіт.',
    'reports_index_inputAccountsSelect'                       => 'Ви можете включати або виключати рахунки активів на свій розсуд.',
    'reports_index_inputDateRange'                            => 'Діапазон дат цілком на ваш розсуд: від одного дня до 10 років і більше.',
    'reports_index_extra-options-box'                         => 'Залежно від вибраного звіту тут можна задати додаткові фільтри й параметри. Стежте за цим блоком, коли змінюєте тип звіту.',

    // reports (reports)
    'reports_report_default_intro'                            => 'Цей звіт дає швидкий і вичерпний огляд ваших фінансів. Якщо ви хочете бачити щось інше, не соромтеся написати мені!',
    'reports_report_audit_intro'                              => 'Цей звіт дає докладну картину ваших рахунків активів.',
    'reports_report_audit_optionsBox'                         => 'Цими прапорцями показуйте або приховуйте стовпці, які вас цікавлять.',

    'reports_report_category_intro'                           => 'Цей звіт дає уявлення про одну або кілька категорій.',
    'reports_report_category_pieCharts'                       => 'Ці діаграми показують витрати й доходи за категорією або за рахунком.',
    'reports_report_category_incomeAndExpensesChart'          => 'Ця діаграма показує ваші витрати й доходи за категоріями.',

    'reports_report_tag_intro'                                => 'Цей звіт дає уявлення про один або кілька тегів.',
    'reports_report_tag_pieCharts'                            => 'Ці діаграми показують витрати й доходи за тегом, рахунком, категорією або бюджетом.',
    'reports_report_tag_incomeAndExpensesChart'               => 'Ця діаграма показує ваші витрати й доходи за тегами.',

    'reports_report_budget_intro'                             => 'Цей звіт дає уявлення про один або кілька бюджетів.',
    'reports_report_budget_pieCharts'                         => 'Ці діаграми показують витрати за бюджетом або за рахунком.',
    'reports_report_budget_incomeAndExpensesChart'            => 'Ця діаграма показує ваші витрати за бюджетами.',

    // create transaction
    'transactions_create_switch_box'                          => 'Використовуйте ці кнопки, щоб швидко змінити тип транзакції, яку ви хочете зберегти.',
    'transactions_create_ffInput_category'                    => 'У це поле можна вводити довільний текст. Раніше створені категорії будуть запропоновані.',
    'transactions_create_withdrawal_ffInput_budget'           => 'Прив\'яжіть витрату до бюджету для кращого контролю фінансів.',
    'transactions_create_withdrawal_currency_dropdown_amount' => 'Використовуйте цей список, якщо витрата в іншій валюті.',
    'transactions_create_deposit_currency_dropdown_amount'    => 'Використовуйте цей список, якщо дохід в іншій валюті.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => 'Виберіть скарбничку й пов\'яжіть цей переказ зі своїми заощадженнями.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'Це поле показує, скільки ви накопичили у кожній скарбничці.',
    'piggy-banks_index_button'                                => 'Поруч зі смужкою прогресу є дві кнопки (+ і −), щоб додати гроші до скарбнички або зняти їх.',
    'piggy-banks_index_accountStatus'                         => 'У цій таблиці показано стан кожного рахунку активів, який має хоча б одну скарбничку.',

    // create piggy
    'piggy-banks_create_name'                                 => 'Яка ваша мета? Новий диван, фотоапарат, гроші на чорний день?',
    'piggy-banks_create_date'                                 => 'Ви можете задати для скарбнички цільову дату або крайній термін.',

    // show piggy
    'piggy-banks_show_piggyChart'                             => 'Ця діаграма покаже історію цієї скарбнички.',
    'piggy-banks_show_piggyDetails'                           => 'Деякі відомості про вашу скарбничку',
    'piggy-banks_show_piggyEvents'                            => 'Тут також перелічено всі поповнення та зняття.',

    // bill index
    'bills_index_rules'                                       => 'Тут показано, які правила перевіряють, чи спрацювала ця підписка',
    'bills_index_paid_in_period'                              => 'У цьому полі вказується дата останньої оплати підписки.',
    'bills_index_expected_in_period'                          => 'У цьому полі для кожної підписки вказано, чи очікується наступний платіж і коли саме.',

    'subscriptions_index_rules'                               => 'Тут показано, які правила перевіряють, чи спрацювала ця підписка',
    'subscriptions_index_paid_in_period'                      => 'У цьому полі вказується дата останньої оплати підписки.',
    'subscriptions_index_expected_in_period'                  => 'У цьому полі для кожної підписки вказано, чи очікується наступний платіж і коли саме.',

    // show bill
    'bills_show_billInfo'                                     => 'У цій таблиці наведено загальну інформацію про цю підписку.',
    'bills_show_billButtons'                                  => 'Цією кнопкою можна повторно перевірити старі транзакції, щоб зіставити їх із цією підпискою.',
    'bills_show_billChart'                                    => 'Ця діаграма показує транзакції, пов\'язані з цією підпискою.',
    'subscriptions_show_billInfo'                             => 'У цій таблиці наведено загальну інформацію про цю підписку.',
    'subscriptions_show_billButtons'                          => 'Цією кнопкою можна повторно перевірити старі транзакції, щоб зіставити їх із цією підпискою.',
    'subscriptions_show_billChart'                            => 'Ця діаграма показує транзакції, пов\'язані з цією підпискою.',

    // create bill
    'bills_create_intro'                                      => 'Використовуйте підписки, щоб відстежувати суми, які ви маєте сплачувати кожного періоду: оренду, страхування, іпотечні платежі тощо.',
    'bills_create_name'                                       => 'Дайте описову назву, наприклад «Оренда» або «Медичне страхування».',
    // 'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => 'Задайте мінімальну й максимальну суму для цієї підписки.',
    'bills_create_repeat_freq_holder'                         => 'Більшість підписок повторюються щомісяця, але тут можна задати іншу періодичність.',
    'bills_create_skip_holder'                                => 'Якщо підписка повторюється кожні 2 тижні, у полі «пропустити» слід поставити «1», щоб пропускати кожен другий тиждень.',

    // rules index
    'rules_index_intro'                                       => 'Firefly III дозволяє керувати правилами, які автоматично застосовуються до кожної транзакції, яку ви створюєте або редагуєте.',
    'rules_index_new_rule_group'                              => 'Для зручності керування правила можна об\'єднувати в групи.',
    'rules_index_new_rule'                                    => 'Створюйте стільки правил, скільки хочете.',
    'rules_index_prio_buttons'                                => 'Упорядковуйте їх як завгодно.',
    'rules_index_test_buttons'                                => 'Ви можете перевірити свої правила або застосувати їх до наявних транзакцій.',
    'rules_index_rule-triggers'                               => 'Правила мають «тригери» та «дії», які можна впорядковувати перетягуванням.',
    'rules_index_outro'                                       => 'Обов\'язково перегляньте сторінки довідки за піктограмою (?) у правому верхньому куті!',

    // create rule:
    'rules_create_mandatory'                                  => 'Виберіть описову назву й задайте, коли правило має спрацьовувати.',
    'rules_create_ruletriggerholder'                          => 'Додайте скільки завгодно тригерів, але пам\'ятайте: щоб виконалися дії, мають збігтися ВСІ тригери.',
    'rules_create_test_rule_triggers'                         => 'Цією кнопкою можна побачити, які транзакції відповідатимуть вашому правилу.',
    'rules_create_actions'                                    => 'Задайте скільки завгодно дій.',

    // preferences
    'preferences_index_tabs'                                  => 'На цих вкладках доступні додаткові параметри.',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III підтримує кілька валют, які можна змінювати на цій сторінці.',
    'currencies_index_default'                                => 'Firefly III має одну типову валюту.',
    'currencies_index_buttons'                                => 'Цими кнопками можна змінити типову валюту або увімкнути інші валюти.',

    // create currency
    'currencies_create_code'                                  => 'Код має відповідати ISO (пошукайте в інтернеті код вашої нової валюти).',
];
