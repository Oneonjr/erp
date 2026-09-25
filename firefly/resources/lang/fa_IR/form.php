<?php

/**
 * form.php
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
    // new user:
    'administration_currency'     => 'Primary currency',
    'bank_name'                   => 'نام بانک',
    'bank_balance'                => 'مانده حساب',
    'current_balance'             => 'Current balance',
    'savings_balance'             => 'موجودی حساب پس‌انداز',
    'credit_card_limit'           => 'محدودیت کارت اعتباری
',
    'automatch'                   => 'مطابقت خودکار
',
    'skip'                        => 'رد کردن',
    'enabled'                     => 'فعال شد',
    'name'                        => 'نام',
    'active'                      => 'فعال',
    'amount_min'                  => 'کمترین مبلغ',
    'amount_max'                  => 'بیشترین مبلغ',
    'match'                       => 'تطابق‌ها در',
    'strict'                      => 'حالت سختگیرانه
',
    'repeat_freq'                 => 'تکرار‌ها',
    'object_group'                => 'گروه',
    'location'                    => 'موقعیت مکانی',
    'update_channel'              => 'بروز رسانی کانال',
    'currency_id'                 => 'واحدپول',
    'transaction_currency_id'     => 'واحدپول',
    'auto_budget_currency_id'     => 'واحدپول',
    'external_ip'                 => 'IP خارجی سرور شما


',
    'attachments'                 => 'پیوست ها',
    'enable_expression_engine'    => 'Enable expression engine',
    'BIC'                         => 'کد BIC (شناسه بانکی بین‌المللی)


',
    'verify_password'             => 'اعتبارسنجی امنیت رمزعبور',
    'source_account'              => 'حساب اصلی
',
    'destination_account'         => 'حساب مقصد
',
    'asset_destination_account'   => 'حساب مقصد
',
    'include_net_worth'           => 'در میزان دارایی خالص شمرده شود',
    'asset_source_account'        => 'حساب اصلی
',
    'journal_description'         => 'توضیحات',
    'note'                        => 'یادداشت‌ها',
    'currency'                    => 'واحدپول',
    'account_id'                  => 'حساب دارایی',
    'budget_id'                   => 'بودجه',
    'bill_id'                     => 'Subscription',
    'opening_balance'             => 'موجودی اولیه',
    'tag_mode'                    => 'Tag mode',
    'virtual_balance'             => 'موجودی مجازی',
    'run_after_form'              => 'Run this rule',
    'valid_url_protocols'         => 'Valid URL protocols',
    'allow_webhooks'              => 'Allow webhooks',
    'enable_external_rates'       => 'Enable external exchange rates',
    'enable_external_map'         => 'Enable external map',
    'use_running_balance'         => 'Calculate running balances',
    'enable_exchange_rates'       => 'Enable exchange rates',
    'targetamount'                => 'مقدار هدف',
    'target_amount'               => 'Target amount',
    'account_role'                => 'نقش های حساب کاربری',
    'opening_balance_date'        => 'تاریخ موجودی اولیه',
    'cc_type'                     => 'طرح پرداخت کارت اعتباری





',
    'cc_monthly_payment_date'     => 'تاریخ پرداخت ماهیانه کارت اعتباری',
    'piggy_bank_id'               => 'صندوق پس‌انداز





',
    'enable_batch_processing'     => 'Enable batch processing',
    'returnHere'                  => 'بازگشت به اینجا


',
    'returnHereExplanation'       => 'بعد از ذخیره کردن، به اینجا بازگردید تا یکی دیگر بسازید.





',
    'returnHereUpdateExplanation' => 'بعد از به‌روزرسانی، به اینجا بازگردید.





',
    'description'                 => 'توضیحات',
    'expense_account'             => 'حساب هزینه',
    'revenue_account'             => 'حساب درآمد',
    'decimal_places'              => 'تعداد ارقام اعشاری',
    'destination_amount'          => 'مبلغ (مقصد)





',
    'new_email_address'           => 'آدرس ایمیل جدید',
    'verification'                => 'اعتبارسنجی',
    'api_key'                     => 'کلید API',
    'remember_me'                 => 'مرا به خاطر بسپار',
    'liability_type_id'           => 'نوع بدهی',
    'liability_type'              => 'نوع بدهی',
    'interest'                    => 'سود',
    'interest_period'             => 'سود دوره ای',
    'extension_date'              => 'تاریخ تمدید',
    'type'                        => 'نوع',
    'convert_Withdrawal'          => 'تبدیل برداشت',
    'convert_Deposit'             => 'تبدیل سپرده',
    'convert_Transfer'            => 'تبدیل انتقال',
    'amount'                      => 'مبلغ نهایی',
    'foreign_amount'              => 'مقدار خارجی





',
    'date'                        => 'تاریخ',
    'interest_date'               => 'نرخ بهره',
    'book_date'                   => 'تاریخ کتاب',
    'process_date'                => 'تاریخ پردازش',
    'category'                    => 'دسته بندی',
    'tags'                        => 'برچسب ها',
    'deletePermanently'           => 'حذف دائمی',
    'cancel'                      => 'انصراف',
    'targetdate'                  => 'تاریخ مورد نظر',
    'target_date'                 => 'Target date',
    'startdate'                   => 'تاریخ شروع',
    'start_date'                  => 'Start date',
    'tag'                         => 'برچسب',

    // exchange rates
    'from_currency_to_currency'   => '{{from}} &rarr; {{to}}',
    'to_currency_from_currency'   => '{{to}} &rarr; {{from}}',
    'rate'                        => 'Rate',

    'under'                       => 'زیر',
    'symbol'                      => 'نماد',
    'code'                        => 'کد',
    'iban'                        => 'شماره حساب بین‌المللی (IBAN)





',
    'account_number'              => 'شماره حساب',
    'creditCardNumber'            => 'شماره کارت اعتباری',
    'has_headers'                 => 'سرصفحه ها',
    'date_format'                 => 'فرمت تاریخ',
    'attachments[]'               => 'پیوست ها',
    'title'                       => 'عنوان',
    'notes'                       => 'یادداشت‌ها',
    'filename'                    => 'نام فایل',
    'mime'                        => 'نوع رسانه',
    'size'                        => 'اندازه‌',
    'trigger'                     => 'راه‌انداز',
    'triggers'                    => 'Triggers',
    'stop_processing'             => 'توقف پردازش',
    'end_date'                    => 'End date',
    'enddate'                     => 'تاریخ پایان',
    'move_rules_before_delete'    => 'گروه قوانین',
    'start'                       => 'شروع محدوده
',
    'end'                         => 'پایان محدوده',
    'delete_account'              => 'حذف حساب %{name}',
    'delete_webhook'              => 'حذف گروه ":title"',
    'delete_bill'                 => 'Delete subscription ":name"',
    'delete_budget'               => 'حذف بودجه ":name"',
    'delete_category'             => 'حذف دسته ":name"',
    'delete_currency'             => 'حذف واحد پولی ":name"',
    'delete_journal'              => 'حذف تراکنش با توضیحات ":description"',
    'delete_attachment'           => 'حذف پیوست ":name"
',
    'delete_rule'                 => 'حذف گروه ":title"',
    'delete_rule_group'           => 'حذف گروه ":title"',
    'delete_link_type'            => 'حذف نوع پیوند ":name"
',
    'delete_user'                 => 'حذف کاربر ":email"',
    'delete_recurring'            => 'حذف تراکنش تکراری ":title"',
    'user_areYouSure'             => 'اگر کاربر ":email" را حذف کنید، همه چیز از بین خواهد رفت. هیچ واگرد، لغو حذف یا هیچ چیز دیگری وجود ندارد. اگر خودتان را حذف کنید، دسترسی به این نمونه از Firefly III را از دست خواهید داد.',
    'attachment_areYouSure'       => 'آیا مطمئن هستید که می خواهید پیوستی با نام ":name" را حذف کنید؟',
    'account_areYouSure'          => 'آیا مطمئن هستید که می خواهید پیوستی با نام ":name" را حذف کنید؟',
    'account_areYouSure_js'       => 'آیا مطمئن هستید که می خواهید پیوستی با نام ":name" را حذف کنید؟',
    'bill_areYouSure'             => 'Are you sure you want to delete the subscription named ":name"?',
    'rule_areYouSure'             => 'آیا مطمئن هستید که می خواهید قانون با عنوان ":title" را حذف کنید؟
',
    'object_group_areYouSure'     => 'آیا مطمئن هستید که می خواهید قانون با عنوان ":title" را حذف کنید؟
',
    'ruleGroup_areYouSure'        => 'آیا مطمئن هستید که می خواهید قانون با عنوان ":title" را حذف کنید؟
',
    'budget_areYouSure'           => 'آیا مطمئن هستید که می خواهید پیوستی با نام ":name" را حذف کنید؟',
    'webhook_areYouSure'          => 'آیا مطمئن هستید که می خواهید قانون با عنوان ":title" را حذف کنید؟
',
    'category_areYouSure'         => 'آیا مطمئن هستید که می خواهید پیوستی با نام ":name" را حذف کنید؟',
    'recurring_areYouSure'        => 'آیا مطمئن هستید که می خواهید تراکنش تکرار شونده با عنوان ":title" را حذف کنید؟
',
    'currency_areYouSure'         => 'آیا مطمئنید که می خواهید ارزی به نام ":name" را حذف کنید؟',
    'piggyBank_areYouSure'        => 'آیا مطمئن هستید که می خواهید قلک با نام ":name" را حذف کنید؟
',
    'journal_areYouSure'          => 'آیا مطمئن هستید که می خواهید تراکنش توصیف شده ":description" را حذف کنید؟
',
    'mass_journal_are_you_sure'   => 'آیا مطمئن هستید که می خواهید این تراکنش ها را حذف کنید؟
',

    'tag_areYouSure'              => 'آیا از حذف tag این استیل اطمینان دارید؟',
    'journal_link_areYouSure'     => 'آیا مطمئن هستید که می خواهید پیوند بین <a href=":source_link">:source</a> و <a href=":destination_link">:destination</a> را حذف کنید؟',
    'linkType_areYouSure'         => 'آیا مطمئن هستید که می خواهید نوع پیوند ":name" (":داخل" / ":خارج") را حذف کنید؟
',
    'permDeleteWarning'           => 'حذف موارد از Firefly III دائمی است و قابل بازگشت نیست.
',
    'mass_make_selection'         => 'همچنان می‌توانید با حذف کادر تأیید از حذف موارد جلوگیری کنید.
',
    'delete_all_permanently'      => 'حذف دائمی انتخاب شده
',
    'update_all_journals'         => 'این تراکنش ها را به روز کنید',
    'also_delete_transactions'    => 'تنها تراکنش متصل به این حساب نیز حذف خواهد شد.|همه تراکنش های :count متصل به این حساب نیز حذف خواهند شد.
',
    'also_delete_transactions_js' => 'بدون تراکنش|تنها تراکنش متصل به این حساب نیز حذف خواهد شد.|همه {count} تراکنش های متصل به این حساب نیز حذف خواهند شد.',
    'also_delete_connections'     => 'تنها تراکنش پیوند شده با این نوع پیوند، این ارتباط را از دست می دهد.
',
    'also_delete_rules'           => 'تنها قانون متصل به این گروه قانون نیز حذف خواهد شد.|همه قوانین :count متصل به این گروه قوانین نیز حذف خواهند شد.
',
    'also_delete_piggyBanks'      => 'تنها تراکنش متصل به این حساب نیز حذف خواهد شد.|همه تراکنش های :count متصل به این حساب نیز حذف خواهند شد.
',
    'also_delete_piggyBanks_js'   => 'قلک وجود ندارد|تنها قلک متصل به این حساب نیز حذف خواهد شد.|همه قلک‌های {count} متصل به این حساب نیز حذف خواهند شد.
',
    'not_delete_piggy_banks'      => 'قلک متصل به این گروه حذف نخواهد شد.|قلک های :count متصل به این گروه حذف نمی شوند.
',
    'bill_keep_transactions'      => 'The only transaction connected to this subscription will not be deleted.|All :count transactions connected to this subscription will be spared deletion.',
    'budget_keep_transactions'    => 'تنها تراکنش متصل به این صورت‌حساب حذف نخواهد شد.|همه تراکنش‌های :count متصل به این صورت‌حساب حذف نمی‌شوند.
',
    'category_keep_transactions'  => 'تنها تراکنش متصل به این صورت‌حساب حذف نخواهد شد.|همه تراکنش‌های :count متصل به این صورت‌حساب حذف نمی‌شوند.
',
    'recurring_keep_transactions' => 'تنها تراکنش متصل به این صورت‌حساب حذف نخواهد شد.|همه تراکنش‌های :count متصل به این صورت‌حساب حذف نمی‌شوند.
',
    'tag_keep_transactions'       => 'تنها تراکنش متصل به این صورت‌حساب حذف نخواهد شد.|همه تراکنش‌های :count متصل به این صورت‌حساب حذف نمی‌شوند.
',
    'check_for_updates'           => 'بررسي بروزرساني',
    'liability_direction'         => 'مسئولیت در / خارج
',
    'delete_object_group'         => 'حذف گروه ":title"',
    'email'                       => 'نشانی رایانامه',
    'password'                    => 'رمز عبور',
    'password_confirmation'       => 'ورود مجدد رمز عبور',
    'blocked'                     => 'مسدود شده است',
    'blocked_code'                => 'دلیل مسدود شدن
',
    'login_name'                  => 'ورود',
    'is_owner'                    => 'ادمین است؟
',
    'url'                         => 'نشانی ‌URL',
    'bill_end_date'               => 'تاریخ پایان',

    // import
    'apply_rules'                 => 'اعمال قوانین',
    'artist'                      => 'هنرمند',
    'album'                       => 'آلبوم',
    'song'                        => 'آهنگ',

    // admin
    'domain'                      => 'دامنه',
    'single_user_mode'            => 'فعال کردن ثبت نام کاربر',
    'is_demo_site'                => 'PERSIAN
سایت دمو است
',

    // import
    'configuration_file'          => 'فایل‌های پیکربندی',
    'csv_comma'                   => 'کاما (,)',
    'csv_semicolon'               => 'ویرگول (؛)',
    'csv_tab'                     => 'یک زبانه (نامرئی)',
    'csv_delimiter'               => 'جداکننده فیلد CSV',
    'client_id'                   => 'شناسه مشتری',
    'app_id'                      => 'شناسه برنامه',
    'secret'                      => 'محرمانه',
    'public_key'                  => 'کلید عمومی',
    'country_code'                => 'کد کشور',
    'provider_code'               => 'بانک یا ارائه دهنده داده',
    'fints_url'                   => 'آدرس API FinTS





',
    'fints_port'                  => 'درگاه',
    'fints_bank_code'             => 'کد بانک',
    'fints_username'              => 'نام‌کاربری',
    'fints_password'              => 'رمز عبور / رمز عبور',
    'fints_account'               => 'حساب FinTS
',
    'local_account'               => 'حساب Firefly III
',

    'from_date'                   => 'تاریخ از
',
    'to_date'                     => 'تاریخ تا',
    'due_date'                    => 'سررسید',
    'payment_date'                => 'تاریخ پرداخت',
    'invoice_date'                => 'تاریخ فاکتور',
    'internal_reference'          => 'مرجع داخلی
',
    'inward'                      => 'توصیف درونی',
    'outward'                     => 'توصیف بیرونی',
    'rule_group_id'               => 'گروه قانون',
    'transaction_description'     => 'شرح معامله',
    'first_date'                  => 'اولین قرار',
    'transaction_type'            => 'نوع تراکنش',
    'repeat_until'                => 'تکرار تا زمانی که',
    'recurring_description'       => 'شرح معاملات تکرارشونده',
    'repetition_type'             => 'نوع تکرار',
    'foreign_currency_id'         => 'ارز خارجی',
    'repetition_end'              => 'تکرار تموم میشه',
    'repetitions'                 => 'تکرارها',
    'calendar'                    => 'تقویم',
    'weekend'                     => 'آخر هفته',
    'client_secret'               => 'رازداری مشتری',
    'withdrawal_destination_id'   => 'حساب مقصد
',
    'deposit_source_id'           => 'حساب اصلی
',
    'expected_on'                 => 'انتظار می رود',
    'paid'                        => 'پرداخت شد',
    'auto_budget_type'            => 'بودجه خودکار
',
    'auto_budget_amount'          => 'مقدار بودجه خودکار
',
    'auto_budget_period'          => 'دوره بودجه خودکار
',
    'collected'                   => 'جمع آوری شده',
    'submitted'                   => 'ارسال شده',
    'key'                         => 'کلید',
    'value'                       => 'محتوای رکورد
',
    'webhook_delivery'            => 'تحویل',
    'deliveries'                  => 'Deliveries',
    'webhook_response'            => 'پاسخ',
    'responses'                   => 'Responses',
    'webhook_trigger'             => 'راه‌انداز',
    'pushover_app_token'          => 'Pushover app token',
    'pushover_user_token'         => 'Pushover user token',
    'ntfy_server'                 => 'Ntfy server',
    'ntfy_topic'                  => 'Ntfy topic',
    'ntfy_auth'                   => 'Ntfy authentication enabled',
    'ntfy_user'                   => 'Ntfy username',
    'ntfy_pass'                   => 'Ntfy password',
];
