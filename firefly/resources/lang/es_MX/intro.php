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
    'index_intro'                                             => 'Bienvenido a la página de inicio de Firefly III. Por favor tómate el tiempo de recorrer esta introducción para entender cómo funciona Firefly III.',
    'index_accounts-chart'                                    => 'Este gráfico muestra el saldo actual de tus cuentas de activos. Puedes seleccionar las cuentas visibles aquí en tus preferencias.',
    'index_box_out_holder'                                    => 'Este pequeño cuadro y los cuadros a su lado te darán un resumen rápido de tu situación financiera.',
    'index_help'                                              => 'Si alguna vez necesitas ayuda con una página o un formulario, presiona este botón.',
    'index_outro'                                             => 'La mayoría de las páginas de Firefly III comenzarán con un pequeño recorrido como éste. Por favor contáctame si tienes preguntas o comentarios. ¡Disfrútalo!',
    'index_sidebar-toggle'                                    => 'Para crear nuevas transacciones, cuentas u otras cosas, usa el menú debajo de este icono.',
    'index_cash_account'                                      => 'Estas son las cuentas creadas hasta ahora. Puedes usar la cuenta de efectivo para rastrear los gastos en efectivo, pero por supuesto no es obligatorio.',

    // transactions
    'transactions_create_basic_info'                          => 'Ingresa la información básica de tu transacción: origen, destino, fecha y descripción.',
    'transactions_create_amount_info'                         => 'Ingresa el monto de la transacción. Si es necesario, los campos se actualizarán automáticamente para la información de montos en moneda extranjera.',
    'transactions_create_optional_info'                       => 'Todos estos campos son opcionales. Agregar metadatos aquí hará que tus transacciones estén mejor organizadas.',
    'transactions_create_split'                               => 'Si quieres dividir una transacción, agrega más divisiones con este botón.',

    // create account:
    'accounts_create_iban'                                    => 'Dale a tus cuentas un IBAN válido. Esto podría facilitar mucho la importación de datos en el futuro.',
    'accounts_create_asset_opening_balance'                   => 'Las cuentas de activos pueden tener un "saldo inicial", que indica el inicio del historial de esta cuenta en Firefly III.',
    'accounts_create_asset_currency'                          => 'Firefly III soporta múltiples divisas. Las cuentas de activos tienen una divisa principal, la cual debes configurar aquí.',
    'accounts_create_asset_virtual'                           => 'A veces puede ayudar dar a tu cuenta un saldo virtual: una cantidad extra que siempre se agrega o se resta del saldo real.',

    // budgets index
    'budgets_index_intro'                                     => 'Los presupuestos se usan para gestionar tus finanzas y forman una de las funciones principales de Firefly III.',
    'budgets_index_see_expenses_bar'                          => 'Gastar dinero llenará lentamente esta barra.',
    'budgets_index_navigate_periods'                          => 'Navega entre períodos para establecer presupuestos con anticipación fácilmente.',
    'budgets_index_new_budget'                                => 'Crea nuevos presupuestos según lo necesites.',
    'budgets_index_list_of_budgets'                           => 'Usa esta tabla para establecer los montos para cada presupuesto y ver cómo vas.',
    'budgets_index_outro'                                     => 'Para aprender más sobre presupuestos, consulta el icono de ayuda en la esquina superior derecha.',

    // reports (index)
    'reports_index_intro'                                     => 'Usa estos informes para obtener información detallada sobre tus finanzas.',
    'reports_index_inputReportType'                           => 'Elige un tipo de informe. Consulta las páginas de ayuda para ver qué muestra cada informe.',
    'reports_index_inputAccountsSelect'                       => 'Puedes excluir o incluir cuentas de activos según lo prefieras.',
    'reports_index_inputDateRange'                            => 'El rango de fechas seleccionado depende completamente de ti: desde un día hasta 10 años o más.',
    'reports_index_extra-options-box'                         => 'Dependiendo del informe que hayas seleccionado, puedes elegir filtros y opciones adicionales aquí. Observa este cuadro cuando cambies el tipo de informe.',

    // reports (reports)
    'reports_report_default_intro'                            => 'Este informe te dará una visión general rápida y completa de tus finanzas. Si deseas ver algo más, ¡no dudes en contactarme!',
    'reports_report_audit_intro'                              => 'Este informe te dará información detallada sobre tus cuentas de activos.',
    'reports_report_audit_optionsBox'                         => 'Usa estas casillas de verificación para mostrar u ocultar las columnas que te interesan.',

    'reports_report_category_intro'                           => 'Este informe te dará información sobre una o varias categorías.',
    'reports_report_category_pieCharts'                       => 'Estos gráficos te darán información sobre gastos e ingresos por categoría o por cuenta.',
    'reports_report_category_incomeAndExpensesChart'          => 'Este gráfico muestra tus gastos e ingresos por categoría.',

    'reports_report_tag_intro'                                => 'Este informe te dará información sobre una o varias etiquetas.',
    'reports_report_tag_pieCharts'                            => 'Estos gráficos te darán información sobre gastos e ingresos por etiqueta, cuenta, categoría o presupuesto.',
    'reports_report_tag_incomeAndExpensesChart'               => 'Este gráfico muestra tus gastos e ingresos por etiqueta.',

    'reports_report_budget_intro'                             => 'Este informe te dará información sobre uno o varios presupuestos.',
    'reports_report_budget_pieCharts'                         => 'Estos gráficos te darán información sobre los gastos por presupuesto o por cuenta.',
    'reports_report_budget_incomeAndExpensesChart'            => 'Este gráfico muestra tus gastos por presupuesto.',

    // create transaction
    'transactions_create_switch_box'                          => 'Usa estos botones para cambiar rápidamente el tipo de transacción que deseas guardar.',
    'transactions_create_ffInput_category'                    => 'Puedes escribir libremente en este campo. Las categorías creadas anteriormente serán sugeridas.',
    'transactions_create_withdrawal_ffInput_budget'           => 'Vincula tu retiro a un presupuesto para un mejor control financiero.',
    'transactions_create_withdrawal_currency_dropdown_amount' => 'Usa este menú desplegable cuando tu retiro sea en otra divisa.',
    'transactions_create_deposit_currency_dropdown_amount'    => 'Usa este menú desplegable cuando tu depósito sea en otra divisa.',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => 'Seleccione una alcancía y vincule esta transferencia con sus ahorros.',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'Este campo le muestra cuánto ha ahorrado usted en cada alcancía.',
    'piggy-banks_index_button'                                => 'Junto con esta barra de progreso hay dos botones (+ y -) para añadir o quitar dinero de cada alcancía.',
    'piggy-banks_index_accountStatus'                         => 'Para cada cuenta de activos con al menos una alcancía, el estado está listado en esta tabla.',

    // create piggy
    'piggy-banks_create_name'                                 => '¿Cuál es tu meta? ¿Un nuevo sofá, una cámara, dinero para emergencias?',
    'piggy-banks_create_date'                                 => 'Puede establecer una fecha objetivo o una fecha límite para su alcancía.',

    // show piggy
    'piggy-banks_show_piggyChart'                             => 'Este informe le mostrará la historia de esta alcancía.',
    'piggy-banks_show_piggyDetails'                           => 'Algunos detalles sobre tu alcancía',
    'piggy-banks_show_piggyEvents'                            => 'Cualquier adición o eliminación también se lista aquí.',

    // bill index
    'bills_index_rules'                                       => 'Aquí puedes ver qué reglas verificarán si esta suscripción fue alcanzada.',
    'bills_index_paid_in_period'                              => 'Este campo indica cuándo se pagó por última vez la suscripción.',
    'bills_index_expected_in_period'                          => 'Este campo indica para cada suscripción si y cuándo se espera el próximo pago.',

    'subscriptions_index_rules'                               => 'Aquí puedes ver qué reglas verificarán si esta suscripción fue alcanzada.',
    'subscriptions_index_paid_in_period'                      => 'Este campo indica cuándo se pagó por última vez la suscripción.',
    'subscriptions_index_expected_in_period'                  => 'Este campo indica para cada suscripción si y cuándo se espera el próximo pago.',

    // show bill
    'bills_show_billInfo'                                     => 'Esta tabla muestra información general sobre esta suscripción.',
    'bills_show_billButtons'                                  => 'Usa este botón para volver a analizar las transacciones antiguas y asociarlas a esta suscripción.',
    'bills_show_billChart'                                    => 'Este gráfico muestra las transacciones vinculadas a esta suscripción.',
    'subscriptions_show_billInfo'                             => 'Esta tabla muestra información general sobre esta suscripción.',
    'subscriptions_show_billButtons'                          => 'Usa este botón para volver a analizar las transacciones antiguas y asociarlas a esta suscripción.',
    'subscriptions_show_billChart'                            => 'Este gráfico muestra las transacciones vinculadas a esta suscripción.',

    // create bill
    'bills_create_intro'                                      => 'Usa las suscripciones para rastrear la cantidad de dinero que debes pagar cada período. Piensa en gastos como la renta, seguros o pagos de hipoteca.',
    'bills_create_name'                                       => 'Usa un nombre descriptivo como "Renta" o "Seguro de salud".',
    // 'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => 'Selecciona un monto mínimo y máximo para esta suscripción.',
    'bills_create_repeat_freq_holder'                         => 'La mayoría de las suscripciones se repiten mensualmente, pero puedes establecer otra frecuencia aquí.',
    'bills_create_skip_holder'                                => 'Si una suscripción se repite cada 2 semanas, el campo "saltar" debe establecerse en "1" para saltarse cada otra semana.',

    // rules index
    'rules_index_intro'                                       => 'Firefly III te permite gestionar reglas que se aplicarán automáticamente a cualquier transacción que crees o edites.',
    'rules_index_new_rule_group'                              => 'Puedes combinar reglas en grupos para facilitar su gestión.',
    'rules_index_new_rule'                                    => 'Crea tantas reglas como desees.',
    'rules_index_prio_buttons'                                => 'Ordénalas de la manera que prefieras.',
    'rules_index_test_buttons'                                => 'Puedes probar tus reglas o aplicarlas a transacciones existentes.',
    'rules_index_rule-triggers'                               => 'Las reglas tienen "disparadores" y "acciones" que puedes ordenar con arrastrar y soltar.',
    'rules_index_outro'                                       => '¡Asegúrate de revisar las páginas de ayuda usando el icono (?) en la esquina superior derecha!',

    // create rule:
    'rules_create_mandatory'                                  => 'Elige un título descriptivo y establece cuándo debe ejecutarse la regla.',
    'rules_create_ruletriggerholder'                          => 'Agrega tantos disparadores como desees, pero recuerda que TODOS los disparadores deben coincidir antes de que se ejecuten las acciones.',
    'rules_create_test_rule_triggers'                         => 'Usa este botón para ver qué transacciones coincidirían con tu regla.',
    'rules_create_actions'                                    => 'Establece tantas acciones como desees.',

    // preferences
    'preferences_index_tabs'                                  => 'Hay más opciones disponibles detrás de estas pestañas.',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III soporta múltiples divisas, las cuales puedes cambiar en esta página.',
    'currencies_index_default'                                => 'Firefly III tiene una divisa predeterminada.',
    'currencies_index_buttons'                                => 'Usa estos botones para cambiar la divisa predeterminada o habilitar otras divisas.',

    // create currency
    'currencies_create_code'                                  => 'Este código debe cumplir con el estándar ISO (búscalo en Google para tu nueva divisa).',
];
