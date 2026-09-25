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
    'index_intro'                                             => 'Добро пожаловать на главную страницу Firefly III. Уделите немного времени этому краткому обзору, чтобы понять, как работает Firefly III.',
    'index_accounts-chart'                                    => 'Эта диаграмма показывает текущий баланс ваших основных счетов. Видимые счета можно выбрать в настройках.',
    'index_box_out_holder'                                    => 'Эти блоки дают быстрый обзор вашей финансовой ситуации.',
    'index_help'                                              => 'Если вам нужна помощь со страницей или формой - нажмите эту кнопку.',
    'index_outro'                                             => 'Большинство страниц Firefly III начинаются с подобного обзора. Если возникнут вопросы - свяжитесь со мной. Приятного использования!',
    'index_sidebar-toggle'                                    => 'Для создания новых транзакций, счётов и прочего используйте меню под этим значком.',
    'index_cash_account'                                      => 'Это ранее созданные счета. Счёт "Наличные" можно использовать для отслеживания наличных расходов, но это не обязательно.',

    // transactions
    'transactions_create_basic_info'                          => 'Введите основную информацию о транзакции: счёт-источник, счёт назначения, дату и описание.',
    'transactions_create_amount_info'                         => 'Введите сумму транзакции. При необходимости поля для иностранной валюты обновятся автоматически.',
    'transactions_create_optional_info'                       => 'Все эти поля необязательны. Дополнительные метаданные помогут лучше организовать транзакции.',
    'transactions_create_split'                               => 'Чтобы разделить транзакцию, добавьте дополнительные части этой кнопкой',

    // create account:
    'accounts_create_iban'                                    => 'Укажите корректный IBAN для счетов. Это упростит импорт данных в будущем.',
    'accounts_create_asset_opening_balance'                   => 'У основного счёта может быть «начальный баланс» - сумма на момент начала учёта в Firefly III.',
    'accounts_create_asset_currency'                          => 'Firefly III поддерживает несколько валют. У каждого основного счёта одна главная валюта, которую необходимо указать здесь.',
    'accounts_create_asset_virtual'                           => 'Иногда полезно задать виртуальный баланс: дополнительная сумма, которая всегда прибавляется или вычитается из фактического баланса.',

    // budgets index
    'budgets_index_intro'                                     => 'Бюджеты - один из ключевых инструментов управления финансами в Firefly III.',
    'budgets_index_see_expenses_bar'                          => 'По мере трат эта шкала будет заполняться.',
    'budgets_index_navigate_periods'                          => 'Перемещайтесь между периодами, чтобы планировать бюджеты заранее.',
    'budgets_index_new_budget'                                => 'Создавайте новые бюджеты по своему усмотрению.',
    'budgets_index_list_of_budgets'                           => 'В этой таблице можно задать суммы для каждого бюджета и отслеживать прогресс.',
    'budgets_index_outro'                                     => 'Чтобы узнать больше о бюджетировании, нажмите на значок справки в правом верхнем углу.',

    // reports (index)
    'reports_index_intro'                                     => 'Воспользуйтесь отчётами, чтобы получить детальную информацию о ваших финансах.',
    'reports_index_inputReportType'                           => 'Выберите тип отчёта. На странице справки описано, что показывает каждый из них.',
    'reports_index_inputAccountsSelect'                       => 'Здесь можно добавить или убрать основные счета по своему усмотрению.',
    'reports_index_inputDateRange'                            => 'Диапазон дат на ваш выбор - от одного дня до 10 лет и более.',
    'reports_index_extra-options-box'                         => 'В зависимости от выбранного типа отчёта здесь доступны дополнительные фильтры и параметры. Следите за этим блоком при смене типа отчёта.',

    // reports (reports)
    'reports_report_default_intro'                            => 'Этот отчёт даст вам быстрый и полный обзор ваших финансов. Если вы хотите увидеть что-нибудь ещё, то смело обращайтесь ко мне!',
    'reports_report_audit_intro'                              => 'Этот отчёт покажет подробную информацию о ваших основных счетах.',
    'reports_report_audit_optionsBox'                         => 'С помощью этих флажков можно показать или скрыть нужные столбцы.',

    'reports_report_category_intro'                           => 'Этот отчёт даёт представление об одной или нескольких категориях.',
    'reports_report_category_pieCharts'                       => 'Эти диаграммы покажут расходы и доходы, сгруппированные по категориям или счетам.',
    'reports_report_category_incomeAndExpensesChart'          => 'На этой диаграмме показаны расходы и доходы, сгруппированные по категориям.',

    'reports_report_tag_intro'                                => 'Этот отчёт даёт представление об одной или нескольких метках.',
    'reports_report_tag_pieCharts'                            => 'Эти диаграммы покажут расходы и доходы, сгруппированные по меткам, счетам, категориям или бюджетам.',
    'reports_report_tag_incomeAndExpensesChart'               => 'На этой диаграмме показаны расходы и доходы, сгруппированные по меткам.',

    'reports_report_budget_intro'                             => 'Этот отчёт даёт представление об одном или нескольких бюджетах.',
    'reports_report_budget_pieCharts'                         => 'Эти диаграммы покажут расходы, сгруппированные по бюджетам или счетам.',
    'reports_report_budget_incomeAndExpensesChart'            => 'На этой диаграмме показаны расходы, сгруппированные по бюджетам.',

    // create transaction
    'transactions_create_switch_box'                          => 'С помощью этих кнопок можно быстро переключить тип транзакции.',
    'transactions_create_ffInput_category'                    => 'В это поле можно ввести любую категорию. Ранее созданные категории будут предложены автоматически.',
    'transactions_create_withdrawal_ffInput_budget'           => 'Свяжите ваш расход с одной из статей бюджета для большего контроля над финансами.',
    'transactions_create_withdrawal_currency_dropdown_amount' => 'Используйте этот выпадающий список, если ваш расход был произведён в другой валюте.',
    'transactions_create_deposit_currency_dropdown_amount'    => 'Используйте этот выпадающий список, если ваш доход получен в другой валюте.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => 'Выберите копилку и привяжите этот перевод к вашим сбережениям.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'Это поле показывает, сколько накоплено в каждой копилке.',
    'piggy-banks_index_button'                                => 'Рядом со шкалой прогресса находятся две кнопки (+ и -) для пополнения копилки и изъятия денег из неё.',
    'piggy-banks_index_accountStatus'                         => 'В этой таблице показан статус каждого основного счёта, у которого есть хотя бы одна копилка.',

    // create piggy
    'piggy-banks_create_name'                                 => 'Какова ваша цель? Новый диван, фотоаппарат или деньги на чёрный день?',
    'piggy-banks_create_date'                                 => 'Вы можете указать конкретную дату или крайний срок для наполнения своей копилки.',

    // show piggy
    'piggy-banks_show_piggyChart'                             => 'Диаграмма показывает историю этой копилки.',
    'piggy-banks_show_piggyDetails'                           => 'Сведения о вашей копилке',
    'piggy-banks_show_piggyEvents'                            => 'Все пополнения и изъятия также показаны здесь.',

    // bill index
    'bills_index_rules'                                       => 'Здесь видно, какие правила проверяют, сработала ли эта подписка',
    'bills_index_paid_in_period'                              => 'В этом поле указано, когда подписка была оплачена в последний раз.',
    'bills_index_expected_in_period'                          => 'В этом поле для каждой подписки указано, ожидается ли следующее списание и когда.',

    'subscriptions_index_rules'                               => 'Здесь видно, какие правила проверяют, сработала ли эта подписка',
    'subscriptions_index_paid_in_period'                      => 'В этом поле указано, когда подписка была оплачена в последний раз.',
    'subscriptions_index_expected_in_period'                  => 'В этом поле для каждой подписки указано, ожидается ли следующее списание и когда.',

    // show bill
    'bills_show_billInfo'                                     => 'В этой таблице приведена общая информация об этой подписке.',
    'bills_show_billButtons'                                  => 'Эта кнопка повторно сканирует старые транзакции, чтобы сопоставить их с этой подпиской.',
    'bills_show_billChart'                                    => 'Эта диаграмма показывает транзакции, связанные с этой подпиской.',
    'subscriptions_show_billInfo'                             => 'В этой таблице приведена общая информация об этой подписке.',
    'subscriptions_show_billButtons'                          => 'Эта кнопка повторно сканирует старые транзакции, чтобы сопоставить их с этой подпиской.',
    'subscriptions_show_billChart'                            => 'Эта диаграмма показывает транзакции, связанные с этой подпиской.',

    // create bill
    'bills_create_intro'                                      => 'Используйте подписки, чтобы отслеживать суммы, которые нужно платить каждый период - например аренду, страховку или платежи по ипотеке.',
    'bills_create_name'                                       => 'Используйте понятное название, например «Аренда» или «Медицинская страховка».',
    // 'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => 'Выберите минимальную и максимальную сумму для этой подписки.',
    'bills_create_repeat_freq_holder'                         => 'Большинство подписок повторяются ежемесячно, но здесь можно задать другую периодичность.',
    'bills_create_skip_holder'                                => 'Если подписка повторяется раз в 2 недели, укажите в поле «пропустить» значение «1», чтобы пропускать каждую вторую неделю.',

    // rules index
    'rules_index_intro'                                       => 'Firefly III позволяет создавать правила, которые автомагически применяются к любой транзакции при её создании или изменении.',
    'rules_index_new_rule_group'                              => 'Правила можно объединять в группы, чтобы упростить управление ими.',
    'rules_index_new_rule'                                    => 'Количество правил не ограничено.',
    'rules_index_prio_buttons'                                => 'Их порядок может быть любым.',
    'rules_index_test_buttons'                                => 'Правила можно проверить или применить к существующим транзакциям.',
    'rules_index_rule-triggers'                               => 'У правил есть «условия» и «действия», которые можно упорядочивать перетаскиванием.',
    'rules_index_outro'                                       => 'Не забудьте заглянуть на страницы справки - значок (?) в правом верхнем углу!',

    // create rule:
    'rules_create_mandatory'                                  => 'Дайте правилу понятное название и укажите, когда оно должно срабатывать.',
    'rules_create_ruletriggerholder'                          => 'Количество условий не ограничено, но действия выполнятся только тогда, когда сработают ВСЕ условия.',
    'rules_create_test_rule_triggers'                         => 'Здесь можно заранее посмотреть, какие транзакции подпадут под правило.',
    'rules_create_actions'                                    => 'Количество действий не ограничено.',

    // preferences
    'preferences_index_tabs'                                  => 'На этих вкладках доступны дополнительные параметры.',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III поддерживает несколько валют, настроить их можно на этой странице.',
    'currencies_index_default'                                => 'В Firefly III одна валюта по умолчанию.',
    'currencies_index_buttons'                                => 'Используйте эти кнопки, чтобы изменить валюту по умолчанию или включить другие валюты.',

    // create currency
    'currencies_create_code'                                  => 'Код должен соответствовать стандарту ISO (код новой валюты можно найти в Google).',
];
