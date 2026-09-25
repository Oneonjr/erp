<?php

/**
 * demo.php
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
    'no_demo_text'           => 'Извините, но для <abbr title=":route">этой страницы</abbr> нет дополнительного пояснения.',
    'see_help_icon'          => 'Воспользуйтесь значком <i class="fa fa-question-circle"></i> в правом верхнем углу, чтобы узнать больше.',
    'index'                  => 'Добро пожаловать в <strong>Firefly III</strong>! Здесь представлен краткий обзор ваших финансов. Более подробная информация доступна на страницах &rarr; <a href=":asset">Счета</a> <a href=":budgets">Бюджеты</a> и <a href=":reports">Отчёты</a>. Или просто внимательно осмотритесь и изучите всё вокруг.',
    'accounts-index'         => 'Основные счета - это личные банковские счета. Счета расходов - куда уходят деньги: магазины, услуги и т.д. Счета доходов - откуда поступают деньги: зарплата, государственные выплаты и пр. Обязательства - долги и займы: задолженности по кредитным картам, студенческие кредиты. Здесь можно их изменять или удалять.',
    'budgets-index'          => 'Обзор бюджетов. Верхняя панель показывает сумму, доступную для распределения. Её можно настроить на любой период, нажав на сумму справа. Ниже - шкала фактических расходов. Ещё ниже - расходы по каждому бюджету в сравнении с запланированным.',
    'reports-index-start'    => 'Firefly III поддерживает несколько типов отчётов. Подробности - по значку <i class="fa fa-question-circle"></i> в правом верхнем углу.',
    'reports-index-examples' => 'Рекомендуем ознакомиться с примерами: <a href=":one">ежемесячный финансовый обзор</a>, <a href=":two">годовой финансовый обзор</a> и <a href=":three">обзор бюджета</a>.',
    'currencies-index'       => 'Firefly III поддерживает несколько валют. По умолчанию используется евро, но можно выбрать доллар США или любую другую валюту. В списке уже есть несколько валют, при необходимости можно добавить свои. Смена валюты по умолчанию не затронет существующие транзакции: Firefly III поддерживает одновременное использование нескольких валют.',
    'transactions-index'     => 'Эти расходы, доходы и переводы не отличаются разнообразием - они сгенерированы автоматически.',
    'piggy-banks-index'      => 'Здесь представлены три копилки. Кнопками «+» и «−» можно менять сумму в каждой. Нажмите на название копилки, чтобы увидеть детали.',
    'profile-index'          => 'Демонстрационный сайт сбрасывается каждые 4 часа. Стандартные агенты (curl, Postman, wget) блокируются. Доступ может быть отозван в любой момент без предупреждения - это обычный автоматический процесс, а не ошибка.',
];
