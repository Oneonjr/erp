<?php

/**
 * firefly.php
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
    // general stuff:
    'stored_in_tz'                                        => 'stored in ":timezone"',
    'displayed_in_tz'                                     => 'displayed in ":timezone"',
    'close'                                               => 'بستن',
    'actions'                                             => 'عملیات ها',
    'edit'                                                => 'ویرایش',
    'loading'                                             => 'Loading',
    'thinking'                                            => 'Thinking...',
    'transaction_journal_id'                              => 'Transaction journal ID',
    'delete'                                              => 'حذف',
    'split'                                               => 'تفکیک',
    'single_split'                                        => 'تفکیک',
    'clone'                                               => 'نمونه سازی',
    'clone_and_edit'                                      => 'کلون و ویرایش
',
    'confirm_action'                                      => 'عملیات را تأیید کنید',
    'last_seven_days'                                     => 'هفت روز گذشته',
    'last_thirty_days'                                    => 'سی روز گذشته',
    'last_180_days'                                       => '۱۸۰ روز گذشته',
    'month_to_date'                                       => 'ماه تا امروز

',
    'year_to_date'                                        => 'سال تا به امروز',
    'previous_year'                                       => 'Previous year (:year)',
    'could_not_load_chart'                                => 'Could not load chart. Sorry about that. This is the error:',
    'YTD'                                                 => 'ابتدای سال تا امروز',
    'welcome_back'                                        => 'چه خبر؟',
    'main_dashboard_page_title'                           => 'Home',
    'view_documentation'                                  => 'View documentation',
    'everything'                                          => 'همه چیز',
    'today'                                               => 'امروز',
    'organization'                                        => 'Organization',
    'customRange'                                         => 'بازه‌ی دلخواه',
    'date_range'                                          => 'بازه تاریخی',
    'apply'                                               => 'اعمال',
    'select_date'                                         => 'انتخاب تاریخ..',
    'cancel'                                              => 'انصراف',
    'from'                                                => 'از',
    'to'                                                  => 'تا',
    'structure'                                           => 'ساختار',
    'help_translating'                                    => 'این متن راهنما در زبان شما در دسترس نیست.  <a href="https://crowdin.com/project/firefly-iii-help"> به ترجمه کمک میکنید؟ </a>',
    'showEverything'                                      => 'همه چیز را نشان بده',
    'never'                                               => 'هرگز',
    'no_results_for_empty_search'                         => 'جستجوی شما خالی بود، بنابراین چیزی پیدا نشد.',
    'removed_amount'                                      => 'حذف شد :amount',
    'added_amount'                                        => 'اضافه شد :amount',
    'asset_account_role_help'                             => 'هر گزینه اضافی ناشی از انتخاب شما می تواند بعدا تنظیم شود.
',
    'Opening balance'                                     => 'موجودی اولیه',
    'create_new_stuff'                                    => 'ایجاد چیز جدید',
    'new_withdrawal'                                      => 'خرج جدید',
    'create_new_transaction'                              => 'ایجاد تراکنش جدید',
    'sidebar_frontpage_create'                            => 'ایجاد',
    'new_transaction'                                     => 'تراکنش جدید',
    'no_rules_for_bill'                                   => 'This subscription has no rules associated to it.',
    'go_to_asset_accounts'                                => 'نمایش حساب های دارایی',
    'go_to_budgets'                                       => 'رفتن به بودجه بندی ها',
    'go_to_withdrawals'                                   => 'رفتن به خرج ها',
    'clones_journal_x'                                    => 'این تراکنش نمونه ای از  ":description" (#:id) است.',
    'go_to_categories'                                    => 'رفتن به دسته بندی ها',
    'go_to_bills'                                         => 'Go to your subscriptions',
    'go_to_expense_accounts'                              => 'مشاهده حساب های خرج',
    'go_to_revenue_accounts'                              => 'مشاهده حساب های درآمد',
    'go_to_piggies'                                       => 'رفتن به قلک ها',
    'new_deposit'                                         => 'واریز جدید',
    'new_transfer'                                        => 'انتقال جدید',
    'new_transfers'                                       => 'انتقال جدید
',
    'new_asset_account'                                   => 'حساب دارایی جدید
',
    'new_expense_account'                                 => 'حساب هزینه جدید
',
    'new_revenue_account'                                 => 'حساب درآمد جدید
',
    'new_liabilities_account'                             => 'مسئولیت جدید
',
    'new_budget'                                          => 'بودجه جدید
',
    'new_bill'                                            => 'New subscription',
    'block_account_logout'                                => 'شما خارج شده اید. حساب های مسدود شده نمی‌توانند از این سایت استفاده کنند. آیا با یک آدرس ایمیل معتبر ثبت نام کردید؟
',
    'flash_success'                                       => 'موفقیت!',
    'flash_info'                                          => 'پیام',
    'flash_warning'                                       => 'هشدار!',
    'flash_error'                                         => 'خطا!',
    'flash_danger'                                        => 'خطر!',
    'flash_info_multiple'                                 => 'یک پیام وجود دارد|پیام های :count وجود دارد
',
    'flash_error_multiple'                                => 'یک خطا وجود دارد|خطاهای :count وجود دارد
',
    'net_worth'                                           => 'دارایی خالص
',
    'help_for_this_page'                                  => 'کمک برای این صفحه
',
    'help_for_this_page_body'                             => 'می‌توانید اطلاعات بیشتری درباره این صفحه <a href="https://docs.firefly-iii.org/">در مستندات</a> بیابید.
',
    'two_factor_welcome'                                  => 'سلام!',
    'two_factor_enter_code'                               => 'برای ادامه، لطفاً کد احراز هویت دو عاملی خود را وارد کنید. برنامه شما می تواند آن را برای شما ایجاد کند.
',
    'two_factor_code_here'                                => 'کد را اینجا وارد کنید',
    'two_factor_title'                                    => 'احراز هویت دو مرحله‌ای',
    'authenticate'                                        => 'احراز هویت',
    'two_factor_forgot_title'                             => 'احراز هویت دو عاملی را از دست داد
',
    'two_factor_forgot'                                   => 'من موضوع دو مرحله‌ای خود را فراموش کردم.
',
    'two_factor_lost_header'                              => 'احراز هویت دو عاملی را از دست داده‌اید؟

',
    'two_factor_lost_intro'                               => 'اگر کدهای پشتیبان خود را نیز گم کردید، بدشانسی خواهید داشت. این چیزی نیست که بتوانید از طریق رابط وب آن را برطرف کنید. شما دو انتخاب دارید.
',
    'two_factor_lost_fix_self'                            => 'If you run your own instance of Firefly III, read <a href="https://docs.firefly-iii.org/references/faq/firefly-iii/using/#i-lost-my-2fa-token-generator-or-2fa-has-stopped-working">this entry in the FAQ</a> for instructions.',
    'two_factor_lost_fix_owner'                           => 'در غیر این صورت، به مالک سایت، <a href="mailto::site_owner">:site_owner</a> ایمیل بزنید و از او بخواهید تا احراز هویت دو عاملی شما را بازنشانی کند.
',
    'mfa_backup_code'                                     => 'شما از یک کد پشتیبان برای ورود به Firefly III استفاده کرده اید. نمی توان دوباره از آن استفاده کرد، بنابراین آن را از لیست خود عبور دهید.
',
    'pref_two_factor_new_backup_codes'                    => 'دریافت کدهای پشتیبان جدید
',
    'pref_two_factor_backup_code_count'                   => 'شما :count کد پشتیبان معتبر دارید.|شما :count کدهای پشتیبان معتبر دارید.
',
    '2fa_i_have_them'                                     => 'من آنها را ذخیره کردم!
',
    'warning_much_data'                                   => ':days ممکن است بارگیری داده ها مدتی طول بکشد.
',
    'registered'                                          => 'شما با موفقیت ثبت نام کردید!
',
    'Default asset account'                               => 'حساب دارایی پیش فرض
',
    'no_budget_pointer'                                   => 'به نظر می رسد هنوز بودجه ای ندارید. باید مقداری را در صفحه <a href="budgets">بودجه‌ها</a> ایجاد کنید. بودجه می تواند به شما در پیگیری هزینه ها کمک کند.
',
    'no_bill_pointer'                                     => 'You seem to have no subscription yet. You should create some on the <a href="subscriptions">subscription</a>-page. Subscriptions can help you keep track of expenses.',
    'Savings account'                                     => 'حساب پس انداز',
    'Credit card'                                         => 'کارت اعتباری',
    'source_accounts'                                     => 'حساب منبع|حساب های منبع
',
    'destination_accounts'                                => 'حساب مقصد|حساب مقصد
',
    'user_id_is'                                          => 'شناسه کاربری شما <strong>:user</strong> است
',
    'field_supports_markdown'                             => 'این فیلد از <a href="https://en.support.wordpress.com/markdown-quick-reference/">Markdown</a> پشتیبانی می‌کند.
',
    'need_more_help'                                      => 'اگر برای استفاده از Firefly III به کمک بیشتری نیاز دارید، لطفاً <a href="https://github.com/firefly-iii/firefly-iii/issues">یک بلیت در Github باز کنید</a>.
',
    'reenable_intro_text'                                 => 'همچنین می‌توانید <a href="#" id="reenableGuidance">راهنمای معرفی</a> را دوباره فعال کنید.
',
    'intro_boxes_after_refresh'                           => 'وقتی صفحه را به‌روزرسانی می‌کنید، کادرهای معرفی دوباره ظاهر می‌شوند.
',
    'show_all_no_filter'                                  => 'نمایش همه تراکنش ها بدون گروه بندی آنها بر اساس تاریخ.
',
    'expenses_by_category'                                => 'هزینه ها بر اساس دسته بندی
',
    'expenses_by_budget'                                  => 'هزینه ها بر اساس بودجه
',
    'income_by_category'                                  => 'درآمد بر اساس دسته‌بندی
',
    'expenses_by_asset_account'                           => 'هزینه‌ها بر اساس حساب دارایی
',
    'expenses_by_expense_account'                         => 'Expenses by destination account',
    'cannot_redirect_to_account'                          => 'Firefly III نمی تواند شما را به صفحه صحیح هدایت کند.پوزش
',
    'sum_of_expenses'                                     => 'مجموع هزینه‌ها
',
    'sum_of_income'                                       => 'مجموع درآمد
',
    'liabilities'                                         => 'بدهی ها',
    'spent_in_specific_budget'                            => 'هزینه شده در بودجه ":budget"
',
    'spent_in_specific_double'                            => 'خرج شده در حساب ":account"
',
    'earned_in_specific_double'                           => 'کسب درآمد در حساب ":account"
',
    'source_account'                                      => 'حساب منبع
',
    'source_account_reconciliation'                       => 'نمی‌توانید حساب منبع یک تراکنش تطبیق را ویرایش کنید.
',
    'destination_account'                                 => 'حساب مقصد
',
    'destination_account_reconciliation'                  => 'نمی‌توانید حساب مقصد تراکنش تطبیق را ویرایش کنید.
',
    'sum_of_expenses_in_budget'                           => 'کل بودجه هزینه شده  ":budget"
',
    'left_in_budget_limit'                                => 'مبلغ قابل خرج باقیمانده طبق بودجه‌بندی

',
    'current_period'                                      => 'دوره جاری',
    'show_the_current_period_and_overview'                => 'نمایش دوره جاری و نمای کلی
',
    'pref_anonymous'                                      => 'Hidden amounts',
    'pref_anonymous_help'                                 => 'For privacy and anonymity, you can make Firefly III hide all amounts. This will not hide amounts in edit boxes, but the rest are hidden. You can also toggle this with the little "eye"-icon in the top bar.',
    'pref_anonymous_label'                                => 'Hide amounts',
    'pref_languages_locale'                               => 'برای اینکه زبانی غیر از انگلیسی به درستی کار کند، سیستم عامل شما باید به اطلاعات محلی مناسب مجهز باشد. اگر اینها وجود نداشته باشند، ممکن است داده‌های ارز، تاریخ‌ها و مبالغ اشتباه قالب‌بندی شوند.
',
    'budget_in_period'                                    => 'تمام تراکنش‌های مربوط به بودجه ":name" بین :start و :end در :currency
',
    'chart_budget_in_period'                              => 'نمودار تمام تراکنش‌های مربوط به بودجه ":name" بین :start و :end در :currency
',
    'chart_budget_in_period_only_currency'                => 'مبلغی که بودجه در نظر گرفتید به صورت :currency بود، بنابراین این نمودار فقط تراکنش ها را به :currency نشان می دهد.
',
    'chart_account_in_period'                             => 'نمودار تمام تراکنش‌های حساب ":name" (:balance) بین :start و :end
',
    'chart_category_in_period'                            => 'نمودار برای همه تراکنش‌های دسته ":name" بین :start و :end
',
    'chart_category_all'                                  => 'نمودار برای همه تراکنش ها برای دسته ":name"
',
    'clone_withdrawal'                                    => 'این برداشت را شبیه سازی کنید
',
    'clone_deposit'                                       => 'این سپرده را شبیه‌سازی کنید
',
    'clone_transfer'                                      => 'این انتقال را شبیه‌سازی کنید
',
    'multi_select_no_selection'                           => 'موردی انتخاب نشده است
',
    'multi_select_select_all'                             => 'انتخاب همه',
    'multi_select_n_selected'                             => 'انتخاب‌شده',
    'multi_select_all_selected'                           => 'همه انتخاب شدند
',
    'multi_select_filter_placeholder'                     => 'یافتن...',
    'intro_next_label'                                    => 'بعدی',
    'intro_prev_label'                                    => 'قبلی',
    'intro_skip_label'                                    => 'رد کردن',
    'intro_done_label'                                    => 'انجام شد',
    'between_dates_breadcrumb'                            => 'بین  :start و :end
',
    'all_journals_without_budget'                         => 'کلیه معاملات بدون بودجه
',
    'journals_without_budget'                             => 'معاملات بدون بودجه
',
    'all_journals_without_category'                       => 'کلیه معاملات بدون دسته‌بندی
',
    'journals_without_category'                           => 'معاملات بدون دسته‌بندی
',
    'all_journals_for_account'                            => 'همه تراکنش ها برای حساب :name
',
    'chart_all_journals_for_account'                      => 'نمودار تمام تراکنش ها برای حساب :name
',
    'journals_in_period_for_account'                      => 'همه تراکنش‌های حساب :name بین :start و :end
',
    'journals_in_period_for_account_js'                   => 'همه تراکنش‌های حساب {title} بین {start} و {end}
',
    'transferred'                                         => 'منتقل شد',
    'all_withdrawal'                                      => 'تمام هزینه ها
',
    'all_transactions'                                    => 'تمام تراکنش ها',
    'title_withdrawal_between'                            => 'تمام هزینه ها بین :شروع و پایان
',
    'title_all_between'                                   => 'All transactions between :start and :end',
    'all_deposit'                                         => 'تمام درآمد
',
    'title_deposit_between'                               => 'تمام درآمد بین :start و :end
',
    'all_transfers'                                       => 'همه نقل و انتقالات
',
    'title_transfers_between'                             => 'همه نقل و انتقالات بین :start و :end
',
    'all_transfer'                                        => 'همه نقل و انتقالات
',
    'all_journals_for_tag'                                => 'تمام معاملات برای برچسب ":tag"
',
    'title_transfer_between'                              => 'همه نقل و انتقالات بین :start و :end
',
    'all_journals_for_category'                           => 'همه معاملات برای دسته:name',
    'all_journals_for_budget'                             => 'همه معاملات برای بودجه :name',
    'chart_all_journals_for_budget'                       => 'نمودار تمام معاملات برای بودجه:name
',
    'journals_in_period_for_category'                     => 'همه تراکنش‌های دسته :name بین :start و :end',
    'journals_in_period_for_tag'                          => 'همه تراکنش‌های برچسب :تگ بین :شروع و پایان
',
    'not_available_demo_user'                             => 'قابلیتی که می‌خواهید به آن دسترسی داشته باشید برای کاربران نسخه‌ای در دسترس نیست.
',
    'test_rate_limited'                                   => 'Please wait a moment before trying again',
    'exchange_rate_instructions'                          => 'Asset account "@name" only accepts transactions in @primary_currency. If you wish to use @foreign_currency instead, make sure that the amount in @primary_currency is known as well:',
    'transfer_exchange_rate_instructions'                 => 'حساب دارایی منبع "@source_name" فقط تراکنش ها را به @source_currency می پذیرد. حساب دارایی مقصد «dest_name@» فقط تراکنش‌ها را به @dest_currency می‌پذیرد. باید مبلغ انتقالی را به هر دو ارز به درستی ارائه کنید.
',
    'transaction_data'                                    => 'داده های تراکنش',
    'invalid_server_configuration'                        => 'پیکربندی سرور نامعتبر است
',
    'invalid_locale_settings'                             => 'Firefly III نمی تواند مقادیر پولی را قالب بندی کند زیرا سرور شما بسته های مورد نیاز را ندارد. <a href="https://docs.firefly-iii.org/how-to/firefly-iii/advanced/locales/">دستورالعمل‌هایی برای انجام این کار</a> وجود دارد.
',
    'quickswitch'                                         => 'سوئیچ سریع
',
    'sign_in_to_start'                                    => 'برای شروع جلسه خود وارد شوید
',
    'sign_in'                                             => 'ورود',
    'register_new_account'                                => 'حساب کاربری جدید ثبت کنید.',
    'forgot_my_password'                                  => 'رمز عبورم را فراموش کردم',
    'problems_with_input'                                 => 'در ورودی شما مشکلاتی وجود داشت.
',
    'reset_password'                                      => 'رمز عبور خود را بازنشانی کنید',
    'button_reset_password'                               => 'بازنشانی رمز عبور
',
    'reset_button'                                        => 'تنظیم مجدد',
    'want_to_login'                                       => 'من می خواهم وارد شوید
',
    'login_page_title'                                    => 'Login',
    'register_page_title'                                 => 'Register',
    'forgot_pw_page_title'                                => 'Forgot your password',
    'reset_pw_page_title'                                 => 'Reset your password',
    'cannot_reset_demo_user'                              => 'شما نمی توانید رمز عبور کاربر آزمایشی را بازنشانی کنید.
',
    'no_att_demo_user'                                    => 'کاربر آزمایشی نمی‌تواند پیوست‌ها را آپلود کند.
',
    'button_register'                                     => 'ثبت نام',
    'authorization'                                       => 'مجوز',
    'active_bills_only'                                   => 'active subscription only',
    'active_bills_only_total'                             => 'all active subscriptions',
    'active_exp_bills_only'                               => 'active and expected subscriptions only',
    'active_exp_bills_only_total'                         => 'all active expected subscriptions only',
    'per_period_sum_1D'                                   => 'هزینه های روزانه مورد انتظار
',
    'per_period_sum_1W'                                   => 'هزینه های هفتگی مورد انتظار
',
    'per_period_sum_1M'                                   => 'هزینه های ماهانه مورد انتظار
',
    'per_period_sum_3M'                                   => 'هزینه های سه‌ماهه مورد انتظار
',
    'per_period_sum_6M'                                   => 'هزینه های مورد انتظار شش‌ماهه
',
    'per_period_sum_1Y'                                   => 'هزینه های سالانه مورد انتظار
',
    'average_per_bill'                                    => 'average per subscription',
    'expected_total'                                      => 'کل مورد انتظار
',
    'reconciliation_account_name'                         => ':name اصلاح:(:currency)
',
    'saved'                                               => 'ذخیره شد',
    'save_transaction_working'                            => 'Firefly III is storing your transaction. Please wait.',
    'save_links_working'                                  => 'Firefly III is storing your transaction links. Please wait.',
    'save'                                                => 'Save',
    'advanced_options'                                    => 'گزینه های‌پیشرفته',
    'advanced_options_explain'                            => 'برخی از صفحات در Firefly III دارای گزینه های پیشرفته ای هستند که در پشت این دکمه پنهان شده اند. این صفحه هیچ چیز جالبی در اینجا ندارد، اما بقیه را بررسی کنید!
',
    'here_be_dragons'                                     => 'Hic sunt dracones',
    'bad_date_transaction'                                => 'Firefly III has detected you have transactions from before the year 1970. Please correct these transactions at your earliest convenience.',
    'anonymous_warning_on'                                => 'For your privacy, all amounts are now displayed as "zero". Warning: text input boxes may still show the original amounts!',
    'anonymous_warning_off'                               => 'Amounts will be visible again. Please be mindful of your surroundings.',

    // Webhooks
    'webhooks'                                            => 'هوک های تحت وب',
    'webhooks_breadcrumb'                                 => 'هوک های تحت وب',
    'webhooks_menu_disabled'                              => 'غیرفعال شده',
    'cer_menu_disabled'                                   => 'disabled',
    'no_webhook_messages'                                 => 'هیچ پیامی برای وب هوک وجود ندارد
',
    'webhook_trigger_ANY'                                 => 'After any event',
    'webhook_trigger_STORE_TRANSACTION'                   => 'پس از ایجاد تراکنش
',
    'webhook_trigger_UPDATE_TRANSACTION'                  => 'پس از به روز رسانی تراکنش
',
    'webhook_trigger_DESTROY_TRANSACTION'                 => 'پس از تراکنش حذف شود
',
    'webhook_trigger_STORE_BUDGET'                        => 'After budget creation',
    'webhook_trigger_UPDATE_BUDGET'                       => 'After budget update',
    'webhook_trigger_DESTROY_BUDGET'                      => 'After budget delete',
    'webhook_trigger_STORE_UPDATE_BUDGET_LIMIT'           => 'After budgeted amount change',
    'webhook_response_TRANSACTIONS'                       => 'جزئیات تراکنش',
    'webhook_response_ACCOUNTS'                           => 'جزئیات حساب',
    'webhook_response_BUDGET'                             => 'Budget details',
    'webhook_response_RELEVANT'                           => 'Relevant details',
    'webhook_response_NONE'                               => 'No details',
    'webhook_delivery_JSON'                               => 'JSON',
    'inspect'                                             => 'بازرسی کنید',
    'create_new_webhook'                                  => 'ایجاد وب هوک جدید',
    'webhooks_create_breadcrumb'                          => 'ایجاد وب هوک جدید',
    'webhook_trigger_form_help'                           => 'نشان دهید که در چه رویدادی وب هوک راه اندازی می شود
',
    'webhook_response_form_help'                          => 'آنچه را که وب هوک باید به URL ارسال کند را مشخص کنید.
',
    'webhook_delivery_form_help'                          => 'وب هوک باید در چه قالبی داده ها را تحویل دهد.
',
    'webhook_active_form_help'                            => 'وب هوک باید فعال باشد وگرنه فراخوانی نمی شود.
',
    'stored_new_webhook'                                  => 'وب هوک جدید ذخیره شده ":title"
',
    'delete_webhook'                                      => 'حذف وب‌هوک',
    'deleted_webhook'                                     => 'وب هوک ":title" حذف شد
',
    'edit_webhook'                                        => 'ویرایش وب هوک ":title"
',
    'updated_webhook'                                     => 'وب هوک به روز شده ":title"
',
    'edit_webhook_js'                                     => 'ویرایش وب هوک "{title}"
',
    'show_webhook'                                        => 'وب هوک ":title"
',
    'webhook_was_triggered'                               => 'وب هوک در تراکنش مشخص شده فعال شد. لطفا صبر کنید تا نتایج ظاهر شود.
',
    'webhook_messages'                                    => 'پیام وب هوک
',
    'view_message'                                        => 'مشاهده پیام',
    'view_attempts'                                       => 'مشاهده تلاش های ناموفق
',
    'message_content_title'                               => 'محتوای پیام وب هوک
',
    'message_content_help'                                => 'این محتوای پیامی است که با استفاده از این وب هوک ارسال شده (یا امتحان شده است).
',
    'attempt_content_title'                               => 'تلاش های وب هوک
',
    'attempt_content_help'                                => 'اینها همه تلاش های ناموفق این پیام وب هوک برای ارسال به URL پیکربندی شده است. پس از مدتی، Firefly III تلاش خود را متوقف می کند.
',
    'no_attempts'                                         => 'هیچ تلاش ناموفقی وجود ندارد. این چیز خوبی است!
',
    'webhook_attempt_at'                                  => 'تلاش در {moment}
',
    'logs'                                                => 'گزارش‌ها',
    'response'                                            => 'پاسخ',
    'visit_webhook_url'                                   => 'از URL webhook دیدن کنید
',
    'reset_webhook_secret'                                => 'راز وب هوک را بازنشانی کنید
',
    'webhook_stored_link'                                 => '<a href="webhooks/show/{ID}">Webhooks #{ID} ("{title}")</a> ذخیره شده است.
',
    'webhook_updated_link'                                => '<a href="webhooks/show/{ID}">Webhooks #{ID}</a> ("{title}") به‌روزرسانی شده است.
',
    'no_webhooks'                                         => 'You have no webhooks. Please create one. Webhooks can be used to make external systems respond to Firefly III events, like newly created transactions or updated budgets.',

    // API access
    'authorization_request'                               => 'درخواست مجوز Firefly III v: version
',
    'authorization_request_intro'                         => 'برنامه «<strong>:client</strong>» درخواست مجوز برای دسترسی به مدیریت مالی شما می‌کند. آیا می خواهید به <strong>:client</strong> اجازه دسترسی به این سوابق را بدهید؟
',
    'authorization_request_site'                          => 'شما به <code>:url</code> هدایت می شوید که سپس می‌توانید به داده های Firefly III خود دسترسی داشته باشید.
',
    'authorization_request_invalid'                       => 'این درخواست دسترسی نامعتبر است. لطفا دیگر هرگز این لینک را دنبال نکنید.
',
    'scopes_will_be_able'                                 => 'این اپلیکیشن قادر خواهد بود:
',
    'button_authorize'                                    => 'اجازه دادن',
    'none_in_select_list'                                 => '(هیچ)',
    'no_piggy_bank'                                       => 'بدون صندوقچه

',
    'name_in_currency'                                    => ':name در :currency
',
    'paid_in_currency'                                    => 'پرداخت شده به :currency
',
    'unpaid_in_currency'                                  => 'پرداخت نشده به:currency
',
    'is_alpha_warning'                                    => 'شما در حال اجرای یک نسخه ALPHA هستید. مراقب اشکالات و مشکلات باشید.
',
    'is_beta_warning'                                     => 'شما در حال اجرای یک نسخه بتا هستید. مراقب اشکالات و مشکلات باشید.
',
    'all_destination_accounts'                            => 'حساب های مقصد
',
    'all_source_accounts'                                 => 'حساب های منبع
',
    'back_to_index'                                       => 'بازگشت به شاخص
',
    'cant_logout_guard'                                   => 'Firefly III نمی تواند شما را از سیستم خارج کند.
',
    'internal_reference'                                  => 'مرجع داخلی
',

    // check for updates:
    'update_check_title'                                  => 'به‌روزرسانی را بررسی کنید
',
    'admin_update_check_title'                            => 'به صورت خودکار برای به‌روز رسانی بررسی کن',
    'admin_update_check_explain'                          => 'Firefly III می تواند به طور خودکار به روز رسانی ها را بررسی کند. هنگامی که این تنظیم را فعال می کنید، با سرور به روز رسانی Firefly III تماس می گیرد تا ببیند آیا نسخه جدیدی از Firefly III موجود است یا خیر. وقتی شد، یک اعلان دریافت خواهید کرد. می توانید این اعلان را با استفاده از دکمه سمت راست تست کنید. اگر می‌خواهید Firefly III به‌روزرسانی‌ها را بررسی کند، لطفاً در زیر مشخص کنید.
',
    'check_for_updates_permission'                        => 'Firefly III can check for updates, but it needs your permission to do so. Please go to the <a href=":link">settings</a> to indicate if you would like this feature to be enabled.',
    'updates_ask_me_later'                                => 'بعدا ازمن بپرس',
    'updates_do_not_check'                                => 'به‌روزرسانی را بررسی نکنید
',
    'updates_enable_check'                                => 'بررسی به روز رسانی را فعال کنید
',
    'admin_update_check_now_title'                        => 'اکنون به‌روزرسانی را بررسی کنید
',
    'admin_update_check_now_explain'                      => 'اگر دکمه را فشار دهید، Firefly III خواهد دید که آیا نسخه فعلی شما جدیدترین است یا خیر.
',
    'check_for_updates_button'                            => 'اکنون بررسی کن',
    'update_new_version_alert'                            => 'نسخه جدید Firefly III در دسترس است. شما :your_version را اجرا می کنید، آخرین نسخه :new_version است که در :date منتشر شد.
',
    'update_version_beta'                                 => 'این نسخه یک نسخه بتا است. ممکن است با مشکلاتی مواجه شوید.
',
    'update_version_alpha'                                => 'این نسخه یک نسخه ALPHA است. ممکن است با مشکلاتی مواجه شوید.
',
    'update_current_dev_older'                            => 'You are running development release ":version", which is older than the latest release :new_version. Please update!',
    'update_current_dev_newer'                            => 'You are running development release ":version", which is newer than the latest release :new_version.',
    'update_current_version_alert'                        => 'شما نسخه :را اجرا می کنید که آخرین :versionموجود است.
',
    'update_newer_version_alert'                          => 'شما :your_version را اجرا می کنید که جدیدتر از آخرین نسخه، :new_version است.
',
    'update_check_error'                                  => 'هنگام بررسی به‌روزرسانی‌ها خطایی روی داد: :error
',
    'unknown_error'                                       => 'خطای ناشناخته. از این بابت متاسفم.
',
    'no_new_release_available'                            => 'There is no newer release available. You are up to date.',
    'disabled_but_check'                                  => 'شما بررسی به روز رسانی را غیرفعال کردید. بنابراین فراموش نکنید که هر از چند گاهی خودتان به‌روزرسانی‌ها را بررسی کنید. متشکرم!
',
    'admin_update_channel_title'                          => 'بروز رسانی کانال',
    'admin_update_channel_explain'                        => 'Firefly III دارای سه "کانال" به‌روزرسانی است که تعیین می‌کند از نظر ویژگی‌ها، پیشرفت‌ها و اشکالات چقدر از منحنی جلوتر هستید. اگر ماجراجو هستید از کانال "بتا" و زمانی که دوست دارید زندگی خطرناکی داشته باشید از "آلفا" استفاده کنید.
',
    'update_channel_stable'                               => 'پایدار. همه چیز باید همانطور که انتظار می رود کار کند.
',
    'update_channel_beta'                                 => 'بتا. ویژگی های جدید اما ممکن است چیزهایی خراب شود.
',
    'update_channel_alpha'                                => 'آلفا. مواد را داخل آن می اندازیم و از هر چوبی استفاده می کنیم.
',

    // search
    'search'                                              => 'جستجو',
    'search_query'                                        => 'پرس و جو',
    'search_query_here'                                   => 'Search here...',
    'search_found_transactions'                           => 'Firefly III یافت :count تراکنش در :time seconds.|Firefly III یافت :count تراکنش ها در :time ثانیه.
',
    'search_found_more_transactions'                      => 'Firefly III بیش از :count تراکنش ها را در زمان: :time ثانیه پیدا کرد.
',
    'search_for_overview'                                 => 'Firefly III is searching for transactions that fulfill <b>all</b> of the following conditions:',
    'search_for_query'                                    => 'All of these words must be present: <span class="text-info">:query</span>',
    'search_for_excluded_words'                           => 'None of these words may be present: <span class="text-info">:excluded_words</span>',
    'invalid_operators_list'                              => 'این پارامترهای جستجو معتبر نیستند و نادیده گرفته شده اند.
',

    // old

    'search_modifier_date_on'                             => 'تاریخ معامله ":value" است
',
    'search_modifier_not_date_on'                         => 'تاریخ معامله ":value" نیست
',
    'search_modifier_reconciled'                          => 'معامله تطبیق داده شده است
',
    'search_modifier_not_reconciled'                      => 'معامله با هم سازگار نیست
',
    'search_modifier_id'                                  => 'شناسه تراکنش ":value" است
',
    'search_modifier_not_id'                              => 'شناسه تراکنش ":value" نیست
',
    'search_modifier_date_before'                         => 'تاریخ معامله قبل یا روی ":value" است
',
    'search_modifier_date_after'                          => 'تاریخ تراکنش بعد از یا روی ":value" است
',
    'search_modifier_external_id_is'                      => 'شناسه خارجی ":value" است
',
    'search_modifier_not_external_id_is'                  => 'شناسه خارجی ":value" نیست
',
    'search_modifier_no_external_url'                     => 'تراکنش URL خارجی ندارد
',
    'search_modifier_no_external_id'                      => 'تراکنش فاقد شناسه خارجی است
',
    'search_modifier_not_any_external_url'                => 'تراکنش URL خارجی ندارد
',
    'search_modifier_not_any_external_id'                 => 'تراکنش فاقد شناسه خارجی است
',
    'search_modifier_any_external_url'                    => 'تراکنش باید یک URL خارجی (برای هر کدام) داشته باشد
',
    'search_modifier_any_external_id'                     => 'تراکنش باید یک شناسه خارجی (هر گونه) داشته باشد
',
    'search_modifier_not_no_external_url'                 => 'تراکنش باید یک URL خارجی (هر) داشته باشد
',
    'search_modifier_not_no_external_id'                  => 'تراکنش باید یک شناسه خارجی (هر گونه) داشته باشد
',
    'search_modifier_internal_reference_is'               => 'مرجع داخلی ":value" است
',
    'search_modifier_not_internal_reference_is'           => 'مرجع داخلی ":value" نیست
',
    'search_modifier_description_starts'                  => 'توضیحات با ":value" شروع می شود
',
    'search_modifier_not_description_starts'              => 'توضیحات با ":value" شروع نمی شود
',
    'search_modifier_description_ends'                    => 'توضیحات به ":value" ختم می شود
',
    'search_modifier_not_description_ends'                => 'توضیحات به ":value" ختم نمی شود
',
    'search_modifier_description_contains'                => 'توضیحات حاوی ":value" است
',
    'search_modifier_not_description_contains'            => 'توضیحات حاوی ":value" نیست
',
    'search_modifier_description_is'                      => 'توضیحات دقیقاً ":value" است
',
    'search_modifier_not_description_is'                  => 'توضیحات دقیقاً ":value" نیست
',
    'search_modifier_currency_is'                         => 'ارز معامله (خارجی) ":value" است
',
    'search_modifier_not_currency_is'                     => 'ارز معامله (خارجی) ":value" نیست
',
    'search_modifier_foreign_currency_is'                 => 'ارز خارجی معامله ":value" است
',
    'search_modifier_not_foreign_currency_is'             => 'ارز خارجی معامله ":value" نیست
',
    'search_modifier_has_attachments'                     => 'معامله باید دارای پیوست باشد
',
    'search_modifier_has_no_category'                     => 'معامله نباید دسته بندی داشته باشد
',
    'search_modifier_not_has_no_category'                 => 'معامله باید دارای یک دسته (هر) باشد
',
    'search_modifier_not_has_any_category'                => 'معامله نباید دسته بندی داشته باشد
',
    'search_modifier_has_any_category'                    => 'معامله باید دارای یک دسته (هر) باشد
',
    'search_modifier_has_no_budget'                       => 'معامله باید بدون بودجه باشد
',
    'search_modifier_not_has_any_budget'                  => 'معامله باید بدون بودجه باشد
',
    'search_modifier_has_any_budget'                      => 'معامله باید دارای (هر) بودجه باشد
',
    'search_modifier_not_has_no_budget'                   => 'معامله باید دارای (هر) بودجه باشد
',
    'search_modifier_has_no_bill'                         => 'The transaction must have no subscription',
    'search_modifier_not_has_no_bill'                     => 'The transaction must have a (any) subscription',
    'search_modifier_has_any_bill'                        => 'The transaction must have a (any) subscription',
    'search_modifier_not_has_any_bill'                    => 'The transaction must have no subscription',
    'search_modifier_has_no_tag'                          => 'تراکنش نباید دارای برچسب باشد
',
    'search_modifier_not_has_any_tag'                     => 'تراکنش نباید دارای برچسب باشد
',
    'search_modifier_not_has_no_tag'                      => 'تراکنش باید دارای یک تگ (هر) باشد
',
    'search_modifier_has_any_tag'                         => 'تراکنش باید دارای یک تگ (هر) باشد
',
    'search_modifier_notes_contains'                      => 'یادداشت های تراکنش حاوی ":value" هستند
',
    'search_modifier_not_notes_contains'                  => 'یادداشت های تراکنش حاوی ":value" نیستند
',
    'search_modifier_notes_starts'                        => 'یادداشت های تراکنش با ":value" شروع می شوند
',
    'search_modifier_not_notes_starts'                    => 'یادداشت های تراکنش با ":value" شروع نمی شوند
',
    'search_modifier_notes_ends'                          => 'یادداشت های تراکنش با ":value" خاتمه می یابند
',
    'search_modifier_not_notes_ends'                      => 'یادداشت های تراکنش با ":value" ختم نمی شوند
',
    'search_modifier_notes_is'                            => 'یادداشت های تراکنش دقیقاً ":value" هستند
',
    'search_modifier_not_notes_is'                        => 'یادداشت های تراکنش دقیقاً ":value" نیستند
',
    'search_modifier_no_notes'                            => 'معامله هیچ یادداشتی ندارد
',
    'search_modifier_not_no_notes'                        => 'معامله باید دارای یادداشت باشد
',
    'search_modifier_any_notes'                           => 'معامله باید دارای یادداشت باشد
',
    'search_modifier_not_any_notes'                       => 'معامله هیچ یادداشتی ندارد
',
    'search_modifier_amount_is'                           => 'مقدار دقیقاً :value است
',
    'search_modifier_not_amount_is'                       => 'مقدار :value نیست
',
    'search_modifier_amount_less'                         => 'مقدار کمتر یا مساوی :value است
',
    'search_modifier_not_amount_more'                     => 'مقدار کمتر یا مساوی :value است
',
    'search_modifier_amount_more'                         => 'مقدار بیشتر یا مساوی :value است
',
    'search_modifier_not_amount_less'                     => 'مقدار بیشتر یا مساوی :value است
',
    'search_modifier_source_account_is'                   => 'نام حساب منبع دقیقاً ":value" است
',
    'search_modifier_not_source_account_is'               => 'نام حساب منبع ":value" نیست
',
    'search_modifier_source_account_contains'             => 'نام حساب منبع حاوی ":value" است
',
    'search_modifier_not_source_account_contains'         => 'نام حساب منبع حاوی ":value" نیست
',
    'search_modifier_source_account_starts'               => 'نام حساب منبع با ":value" شروع می شود
',
    'search_modifier_not_source_account_starts'           => 'نام حساب منبع با ":value" شروع نمی شود
',
    'search_modifier_source_account_ends'                 => 'نام حساب منبع با ":value" ختم می شود
',
    'search_modifier_not_source_account_ends'             => 'نام حساب منبع به ":value" ختم نمی شود
',
    'search_modifier_source_account_id'                   => 'شناسه حساب منبع :value است
',
    'search_modifier_not_source_account_id'               => 'شناسه حساب منبع :value نیست
',
    'search_modifier_source_account_nr_is'                => 'شماره حساب منبع (IBAN) ":value" است
',
    'search_modifier_not_source_account_nr_is'            => 'شماره حساب منبع (IBAN) ":value" نیست
',
    'search_modifier_source_account_nr_contains'          => 'شماره حساب منبع (IBAN) حاوی ":value" است
',
    'search_modifier_not_source_account_nr_contains'      => 'شماره حساب منبع (IBAN) حاوی ":value" نیست
',
    'search_modifier_source_account_nr_starts'            => 'شماره حساب منبع (IBAN) با ":value" شروع می شود
',
    'search_modifier_not_source_account_nr_starts'        => 'شماره حساب منبع (IBAN) با ":value" شروع نمی شود
',
    'search_modifier_source_account_nr_ends'              => 'شماره حساب منبع (IBAN) به ":value" ختم می شود
',
    'search_modifier_not_source_account_nr_ends'          => 'شماره حساب منبع (IBAN) به ":value" ختم نمی شود
',
    'search_modifier_destination_account_is'              => 'نام حساب مقصد دقیقاً ":value" است
',
    'search_modifier_not_destination_account_is'          => 'نام حساب مقصد ":value" نیست
',
    'search_modifier_destination_account_contains'        => 'نام حساب مقصد حاوی ":value" است
',
    'search_modifier_not_destination_account_contains'    => 'نام حساب مقصد حاوی ":value" نیست
',
    'search_modifier_destination_account_starts'          => 'نام حساب مقصد با ":value" شروع می شود
',
    'search_modifier_not_destination_account_starts'      => 'نام حساب مقصد با ":value" شروع نمی شود
',
    'search_modifier_destination_account_ends'            => 'نام حساب مقصد به ":value" ختم می شود
',
    'search_modifier_not_destination_account_ends'        => 'نام حساب مقصد به ":value" ختم نمی شود
',
    'search_modifier_destination_account_id'              => 'شناسه حساب مقصد :value است
',
    'search_modifier_not_destination_account_id'          => 'شناسه حساب مقصد :value نیست
',
    'search_modifier_destination_is_cash'                 => 'حساب مقصد، حساب «(نقدی)» است
',
    'search_modifier_not_destination_is_cash'             => 'حساب مقصد، حساب «(نقدی)» نیست
',
    'search_modifier_source_is_cash'                      => 'حساب مقصد، حساب «(نقدی)» است
',
    'search_modifier_not_source_is_cash'                  => 'حساب مقصد، حساب «(نقدی)» نیست
',
    'search_modifier_destination_account_nr_is'           => 'شماره حساب مقصد (IBAN) ":value" است
',
    'search_modifier_not_destination_account_nr_is'       => 'شماره حساب مقصد (IBAN) ":value" است
',
    'search_modifier_destination_account_nr_contains'     => 'شماره حساب مقصد (IBAN) حاوی ":value" است
',
    'search_modifier_not_destination_account_nr_contains' => 'شماره حساب مقصد (IBAN) حاوی ":value" نیست
',
    'search_modifier_destination_account_nr_starts'       => 'شماره حساب مقصد (IBAN) با ":value" شروع می شود
',
    'search_modifier_not_destination_account_nr_starts'   => 'شماره حساب مقصد (IBAN) با ":value" شروع نمی شود
',
    'search_modifier_destination_account_nr_ends'         => 'شماره حساب مقصد (IBAN) به ":value" ختم می شود
',
    'search_modifier_not_destination_account_nr_ends'     => 'شماره حساب مقصد (IBAN) به ":value" ختم نمی شود
',
    'search_modifier_account_id'                          => 'شناسه حساب منبع یا مقصد is/are: :value
',
    'search_modifier_not_account_id'                      => 'شناسه حساب مبدا یا مقصد این است/نیست: :value
',
    'search_modifier_category_is'                         => 'دسته ":value" است
',
    'search_modifier_not_category_is'                     => 'دسته ":value" نیست
',
    'search_modifier_budget_is'                           => 'بودجه ":value" است
',
    'search_modifier_not_budget_is'                       => 'بودجه ":value" نیست
',
    'search_modifier_bill_is'                             => 'Subscription is ":value"',
    'search_modifier_not_bill_is'                         => 'Subscription is not ":value"',
    'search_modifier_transaction_type'                    => 'نوع تراکنش ":value" است
',
    'search_modifier_not_transaction_type'                => 'نوع تراکنش ":value" نیست
',
    'search_modifier_tag_is'                              => 'برچسب ":value" است
',
    'search_modifier_tag_contains'                        => 'برچسب حاوی ":value" است
',
    'search_modifier_not_tag_contains'                    => 'برچسب حاوی ":value" نیست
',
    'search_modifier_tag_ends'                            => 'برچسب با ":value" به پایان می رسد
',
    'search_modifier_tag_starts'                          => 'برچسب با ":value" شروع می شود
',
    'search_modifier_not_tag_starts'                      => 'No tag starts with ":value"',
    'search_modifier_not_tag_is'                          => 'هیچ برچسبی ":value" نیست
',
    'search_modifier_date_on_year'                        => 'معامله در سال ":value" است
',
    'search_modifier_not_date_on_year'                    => 'تراکنش در سال ":value" نیست
',
    'search_modifier_date_on_month'                       => 'تراکنش در ماه ":value" است
',
    'search_modifier_not_date_on_month'                   => 'تراکنش در ماه ":value" نیست
',
    'search_modifier_date_on_day'                         => 'معامله در روز ماه ":value" است
',
    'search_modifier_not_date_on_day'                     => 'معامله در روز ماه ":value" نیست
',
    'search_modifier_date_before_year'                    => 'تراکنش قبل یا در سال ":value" است
',
    'search_modifier_date_before_month'                   => 'تراکنش قبل یا در ماه ":value" است
',
    'search_modifier_date_before_day'                     => 'معامله قبل یا در روز ماه ":value" است',
    'search_modifier_date_after_year'                     => 'تراکنش در یا بعد از سال ":value" است
',
    'search_modifier_date_after_month'                    => 'تراکنش در ماه یا بعد از آن ":value" است
',
    'search_modifier_date_after_day'                      => 'معامله بعد یا در روز ماه ":value" است
',

    // new
    'search_modifier_tag_is_not'                          => 'هیچ برچسبی ":value" نیست
',
    'search_modifier_not_tag_is_not'                      => 'برچسب ":value" است
',
    'search_modifier_account_is'                          => 'هر یک از حساب ها ":value" است
',
    'search_modifier_not_account_is'                      => 'هیچ یک از حساب ها ":value" نیستند
',
    'search_modifier_account_contains'                    => 'هر یک از حساب‌ها حاوی ":value" است
',
    'search_modifier_not_account_contains'                => 'هیچ یک از حساب ها حاوی ":value" نیستند
',
    'search_modifier_account_ends'                        => 'هر یک از حساب ها با ":value" ختم می شود
',
    'search_modifier_not_account_ends'                    => 'هیچ یک از حساب ها به ":value" ختم نمی شود
',
    'search_modifier_account_starts'                      => 'هر یک از حساب ها با ":value" شروع می شود
',
    'search_modifier_not_account_starts'                  => 'هیچ یک از حساب ها با ":value" شروع نمی شود
',
    'search_modifier_account_nr_is'                       => 'شماره حساب / IBAN ":value" است
',
    'search_modifier_not_account_nr_is'                   => 'شماره حساب / IBAN ":value" نیست
',
    'search_modifier_account_nr_contains'                 => 'شماره حساب / IBAN حاوی ":value" است
',
    'search_modifier_not_account_nr_contains'             => 'هیچ شماره حساب / IBAN حاوی ":value" نیست
',
    'search_modifier_account_nr_ends'                     => 'شماره حساب / IBAN به ":value" ختم می شود
',
    'search_modifier_not_account_nr_ends'                 => 'شماره حساب / IBAN با ":value" ختم نمی شود
',
    'search_modifier_account_nr_starts'                   => 'شماره حساب / IBAN با ":value" شروع می شود
',
    'search_modifier_not_account_nr_starts'               => 'شماره حساب / IBAN با ":value" شروع نمی شود
',
    'search_modifier_category_contains'                   => 'دسته شامل ":value" است
',
    'search_modifier_not_category_contains'               => 'دسته شامل ":value" نیست
',
    'search_modifier_category_ends'                       => 'دسته با ":value" به پایان می رسد
',
    'search_modifier_not_category_ends'                   => 'دسته به ":value" ختم نمی شود
',
    'search_modifier_category_starts'                     => 'دسته با ":value" شروع می شود
',
    'search_modifier_not_category_starts'                 => 'دسته با ":value" شروع نمی شود
',
    'search_modifier_budget_contains'                     => 'بودجه حاوی ":value" است
',
    'search_modifier_not_budget_contains'                 => 'بودجه حاوی ":value" نیست
',
    'search_modifier_budget_ends'                         => 'بودجه با ":value" به پایان می رسد
',
    'search_modifier_not_budget_ends'                     => 'بودجه به ":value" ختم نمی شود
',
    'search_modifier_budget_starts'                       => 'بودجه با ":value" شروع می شود
',
    'search_modifier_not_budget_starts'                   => 'بودجه با ":value" شروع نمی شود
',
    'search_modifier_bill_contains'                       => 'Subscription contains ":value"',
    'search_modifier_not_bill_contains'                   => 'Subscription does not contain ":value"',
    'search_modifier_bill_ends'                           => 'Subscription ends with ":value"',
    'search_modifier_not_bill_ends'                       => 'Subscription does not end on ":value"',
    'search_modifier_bill_starts'                         => 'Subscription starts with ":value"',
    'search_modifier_not_bill_starts'                     => 'Subscription does not start with ":value"',
    'search_modifier_external_id_contains'                => 'شناسه خارجی حاوی ":value" است
',
    'search_modifier_not_external_id_contains'            => 'شناسه خارجی حاوی ":value" نیست
',
    'search_modifier_external_id_ends'                    => 'شناسه خارجی با ":value" به پایان می رسد
',
    'search_modifier_not_external_id_ends'                => 'شناسه خارجی به ":value" ختم نمی شود
',
    'search_modifier_external_id_starts'                  => 'شناسه خارجی با ":value" شروع می شود
',
    'search_modifier_not_external_id_starts'              => 'شناسه خارجی با ":value" شروع نمی شود
',
    'search_modifier_internal_reference_contains'         => 'مرجع داخلی حاوی ":value" است
',
    'search_modifier_not_internal_reference_contains'     => 'مرجع داخلی حاوی ":value" نیست
',
    'search_modifier_internal_reference_ends'             => 'مرجع داخلی با ":value" به پایان می رسد
',
    'search_modifier_internal_reference_starts'           => 'مرجع داخلی با ":value" شروع می شود
',
    'search_modifier_not_internal_reference_ends'         => 'مرجع داخلی به ":value" ختم نمی شود
',
    'search_modifier_not_internal_reference_starts'       => 'مرجع داخلی با ":value" شروع نمی شود
',
    'search_modifier_external_url_is'                     => 'URL خارجی ":value" است
',
    'search_modifier_not_external_url_is'                 => 'URL خارجی ":value" نیست
',
    'search_modifier_external_url_contains'               => 'URL خارجی حاوی ":value" است
',
    'search_modifier_not_external_url_contains'           => 'URL خارجی حاوی ":value" نیست
',
    'search_modifier_external_url_ends'                   => 'URL خارجی با ":value" به پایان می رسد
',
    'search_modifier_not_external_url_ends'               => 'URL خارجی به ":value" ختم نمی شود
',
    'search_modifier_external_url_starts'                 => 'URL خارجی با ":value" شروع می شود
',
    'search_modifier_not_external_url_starts'             => 'URL خارجی با ":value" شروع نمی شود
',
    'search_modifier_has_no_attachments'                  => 'تراکنش هیچ پیوستی ندارد
',
    'search_modifier_not_has_no_attachments'              => 'تراکنش پیوست‌هایی دارد
',
    'search_modifier_not_has_attachments'                 => 'تراکنش هیچ پیوستی ندارد
',
    'search_modifier_account_is_cash'                     => 'هر کدام از این دو حساب، حساب «(نقدی)» است.
',
    'search_modifier_not_account_is_cash'                 => 'هیچ یک از این دو حساب، حساب "(نقدی)" نیست.
',
    'search_modifier_journal_id'                          => 'شناسه مجله ":value" است
',
    'search_modifier_not_journal_id'                      => 'شناسه مجله ":value" نیست
',
    'search_modifier_recurrence_id'                       => 'شناسه تراکنش تکرارشونده ":value" است
',
    'search_modifier_not_recurrence_id'                   => 'شناسه تراکنش تکرارشونده ":value" نیست
',
    'search_modifier_foreign_amount_is'                   => 'مقدار خارجی ":value" است
',
    'search_modifier_not_foreign_amount_is'               => 'مقدار خارجی ":value" نیست
',
    'search_modifier_foreign_amount_less'                 => 'مقدار خارجی کمتر از ":value" است
',
    'search_modifier_not_foreign_amount_more'             => 'مقدار خارجی کمتر از ":value" است
',
    'search_modifier_not_foreign_amount_less'             => 'مقدار خارجی بیشتر از ":value" است
',
    'search_modifier_foreign_amount_more'                 => 'مقدار خارجی بیشتر از ":value" است
',
    'search_modifier_exists'                              => 'تراکنش وجود دارد (هر معامله)
',
    'search_modifier_not_exists'                          => 'تراکنش وجود ندارد (بدون معامله)
',

    // date fields
    'search_modifier_interest_date_on'                    => 'تاریخ بهره معامله ":value" است
',
    'search_modifier_not_interest_date_on'                => 'تاریخ بهره معامله ":value" نیست
',
    'search_modifier_interest_date_on_year'               => 'تاریخ بهره معامله در سال ":value" است
',
    'search_modifier_not_interest_date_on_year'           => 'تاریخ بهره معامله در سال ":value" نیست
',
    'search_modifier_interest_date_on_month'              => 'تاریخ بهره معامله بر حسب ماه ":value" است
',
    'search_modifier_not_interest_date_on_month'          => 'تاریخ بهره معامله در ماه ":value" نیست
',
    'search_modifier_interest_date_on_day'                => 'تاریخ بهره معامله در روز ماه ":value" است
',
    'search_modifier_not_interest_date_on_day'            => 'تاریخ بهره معامله در روز ماه ":value" نیست
',
    'search_modifier_interest_date_before_year'           => 'تاریخ بهره معامله قبل یا در سال ":value" است
',
    'search_modifier_interest_date_before_month'          => 'تاریخ سود معامله قبل یا در ماه ":value" است
',
    'search_modifier_interest_date_before_day'            => 'تاریخ سود معامله قبل یا در روز ماه ":value" است
',
    'search_modifier_interest_date_after_year'            => 'تاریخ بهره معامله پس از یا در سال ":value" است
',
    'search_modifier_interest_date_after_month'           => 'تاریخ بهره معامله پس از یا در ماه ":value" است
',
    'search_modifier_interest_date_after_day'             => 'تاریخ سود معامله بعد از یا در روز ماه ":value" است
',
    'search_modifier_book_date_on_year'                   => 'تاریخ دفتر معاملات در سال ":value" است
',
    'search_modifier_book_date_on_month'                  => 'تاریخ دفتر معاملات بر حسب ماه ":value" است
',
    'search_modifier_book_date_on_day'                    => 'تاریخ دفتر معاملات در روز ماه ":value" است
',
    'search_modifier_not_book_date_on_year'               => 'تاریخ دفتر معاملات در سال ":value" نیست
',
    'search_modifier_not_book_date_on_month'              => 'تاریخ دفتر معاملات در ماه ":value" نیست
',
    'search_modifier_not_book_date_on_day'                => 'تاریخ دفتر معاملات در روز ماه ":value" نیست
',
    'search_modifier_book_date_before_year'               => 'تاریخ دفتر معاملات قبل یا در سال ":value" است
',
    'search_modifier_book_date_before_month'              => 'تاریخ دفتر معاملات قبل یا در ماه ":value" است
',
    'search_modifier_book_date_before_day'                => 'تاریخ دفتر معاملات قبل یا در روز ماه ":value" است
',
    'search_modifier_book_date_after_year'                => 'تاریخ دفتر معاملات پس از یا در سال ":value" است
',
    'search_modifier_book_date_after_month'               => 'تاریخ دفتر معاملات بعد از یا در ماه ":value" است
',
    'search_modifier_book_date_after_day'                 => 'تاریخ دفتر معاملات بعد از یا در روز ماه ":value" است
',
    'search_modifier_process_date_on_year'                => 'تاریخ فرآیند تراکنش در سال ":value" است
',
    'search_modifier_process_date_on_month'               => 'تاریخ فرآیند تراکنش بر حسب ماه ":value" است
',
    'search_modifier_process_date_on_day'                 => 'تاریخ فرآیند تراکنش در روز ماه ":value" است
',
    'search_modifier_not_process_date_on_year'            => 'تاریخ فرآیند تراکنش در سال ":value" نیست
',
    'search_modifier_not_process_date_on_month'           => 'تاریخ فرآیند تراکنش در ماه ":value" نیست
',
    'search_modifier_not_process_date_on_day'             => 'تاریخ فرآیند تراکنش در روز ماه ":value" نیست
',
    'search_modifier_process_date_before_year'            => 'تاریخ فرآیند تراکنش قبل یا در سال ":value" است
',
    'search_modifier_process_date_before_month'           => 'تاریخ فرآیند تراکنش قبل یا در ماه ":value" است
',
    'search_modifier_process_date_before_day'             => 'تاریخ فرآیند تراکنش قبل یا در روز ماه ":value" است
',
    'search_modifier_process_date_after_year'             => 'تاریخ فرآیند تراکنش پس از یا در سال ":value" است

',
    'search_modifier_process_date_after_month'            => 'تاریخ فرآیند تراکنش پس از یا در ماه ":value" است
',
    'search_modifier_process_date_after_day'              => 'تاریخ فرآیند تراکنش بعد از یا در روز ماه ":value" است
',
    'search_modifier_due_date_on_year'                    => 'تاریخ سررسید معامله در سال ":value" است
',
    'search_modifier_due_date_on_month'                   => 'تاریخ سررسید معامله در ماه ":value" است
',
    'search_modifier_due_date_on_day'                     => 'تاریخ سررسید معامله در روز ماه ":value" است
',
    'search_modifier_not_due_date_on_year'                => 'تاریخ سررسید معامله در سال ":value" نیست
',
    'search_modifier_not_due_date_on_month'               => 'تاریخ سررسید تراکنش در ماه ":value" نیست
',
    'search_modifier_not_due_date_on_day'                 => 'تاریخ سررسید معامله در روز ماه ":value" نیست
',
    'search_modifier_due_date_before_year'                => 'تاریخ سررسید معامله قبل یا در سال ":value" است
',
    'search_modifier_due_date_before_month'               => 'تاریخ سررسید معامله قبل یا در ماه ":value" است
',
    'search_modifier_due_date_before_day'                 => 'تاریخ سررسید معامله قبل یا در روز ماه ":value" است
',
    'search_modifier_due_date_after_year'                 => 'تاریخ سررسید معامله پس از یا در سال ":value" است
',
    'search_modifier_due_date_after_month'                => 'تاریخ سررسید معامله پس از یا در ماه ":value" است
',
    'search_modifier_due_date_after_day'                  => 'تاریخ سررسید معامله بعد از یا در روز ماه ":value" است
',
    'search_modifier_payment_date_on_year'                => 'تاریخ پرداخت تراکنش در سال ":value" است
',
    'search_modifier_payment_date_on_month'               => 'تاریخ پرداخت تراکنش به ماه ":value" است
',
    'search_modifier_payment_date_on_day'                 => 'تاریخ پرداخت تراکنش در روز ماه ":value" است
',
    'search_modifier_not_payment_date_on_year'            => 'تاریخ پرداخت تراکنش در سال ":value" نیست
',
    'search_modifier_not_payment_date_on_month'           => 'تاریخ پرداخت تراکنش در ماه ":value" نیست
',
    'search_modifier_not_payment_date_on_day'             => 'تاریخ پرداخت تراکنش در روز ماه ":value" نیست
',
    'search_modifier_payment_date_before_year'            => 'تاریخ پرداخت تراکنش قبل یا در سال ":value" است
',
    'search_modifier_payment_date_before_month'           => 'تاریخ پرداخت تراکنش قبل یا در ماه ":value" است
',
    'search_modifier_payment_date_before_day'             => 'تاریخ پرداخت تراکنش قبل یا در روز ماه ":value" است
',
    'search_modifier_payment_date_after_year'             => 'تاریخ پرداخت تراکنش پس از یا در سال ":value" است
',
    'search_modifier_payment_date_after_month'            => 'تاریخ پرداخت تراکنش پس از یا در ماه ":value" است
',
    'search_modifier_payment_date_after_day'              => 'تاریخ پرداخت تراکنش بعد از یا در روز ماه ":value" است
',
    'search_modifier_invoice_date_on_year'                => 'تاریخ فاکتور معامله در سال ":value" است
',
    'search_modifier_invoice_date_on_month'               => 'تاریخ فاکتور تراکنش بر حسب ماه ":value" است
',
    'search_modifier_invoice_date_on_day'                 => 'تاریخ فاکتور تراکنش در روز ماه ":value" است
',
    'search_modifier_not_invoice_date_on_year'            => 'تاریخ فاکتور تراکنش در سال ":value" نیست
',
    'search_modifier_not_invoice_date_on_month'           => 'تاریخ فاکتور تراکنش در ماه ":value" نیست
',
    'search_modifier_not_invoice_date_on_day'             => 'تاریخ فاکتور تراکنش در روز ماه ":value" نیست
',
    'search_modifier_invoice_date_before_year'            => 'تاریخ فاکتور تراکنش قبل یا در سال ":value" است
',
    'search_modifier_invoice_date_before_month'           => 'تاریخ فاکتور تراکنش قبل یا در ماه ":value" است
',
    'search_modifier_invoice_date_before_day'             => 'تاریخ فاکتور تراکنش قبل یا در روز ماه ":value" است
',
    'search_modifier_invoice_date_after_year'             => 'تاریخ فاکتور تراکنش پس از یا در سال ":value" است
',
    'search_modifier_invoice_date_after_month'            => 'تاریخ فاکتور تراکنش پس از یا در ماه ":value" است
',
    'search_modifier_invoice_date_after_day'              => 'تاریخ فاکتور تراکنش بعد یا در روز ماه ":value" است
',
    // other dates
    'search_modifier_updated_at_on_year'                  => 'آخرین بار تراکنش در سال ":value" به روز شد

',
    'search_modifier_updated_at_on_month'                 => 'آخرین بار تراکنش در ماه ":value" به روز شد
',
    'search_modifier_updated_at_on_day'                   => 'آخرین بار تراکنش در روز ماه ":value" به روز شد
',
    'search_modifier_not_updated_at_on_year'              => 'آخرین بار تراکنش در سال ":value" به‌روزرسانی نشد
',
    'search_modifier_not_updated_at_on_month'             => 'آخرین تراکنش در ماه ":value" به‌روزرسانی نشد
',
    'search_modifier_not_updated_at_on_day'               => 'آخرین بار تراکنش در روز ماه ":value" به روز نشد
',
    'search_modifier_updated_at_before_year'              => 'آخرین بار تراکنش در سال ":value" یا قبل از آن به‌روزرسانی شد
',
    'search_modifier_updated_at_before_month'             => 'آخرین بار تراکنش در یا قبل از ماه ":value" به روز شد
',
    'search_modifier_updated_at_before_day'               => 'آخرین بار تراکنش در یا قبل از روز ماه ":value" به روز شد
',
    'search_modifier_updated_at_after_year'               => 'آخرین بار تراکنش در یا پس از سال ":value" به روز شد
',
    'search_modifier_updated_at_after_month'              => 'تراکنش آخرین بار در یا بعد از ماه ":value" به روز شد
',
    'search_modifier_updated_at_after_day'                => 'آخرین بار تراکنش در یا بعد از روز ماه ":value" به روز شد
',
    'search_modifier_created_at_on_year'                  => 'تراکنش در سال ":value" ایجاد شد
',
    'search_modifier_created_at_on_month'                 => 'تراکنش در ماه ":value" ایجاد شد
',
    'search_modifier_created_at_on_day'                   => 'تراکنش در روز ماه ":value" ایجاد شد
',
    'search_modifier_not_created_at_on_year'              => 'تراکنش در سال ":value" ایجاد نشد
',
    'search_modifier_not_created_at_on_month'             => 'تراکنش در ماه ":value" ایجاد نشد
',
    'search_modifier_not_created_at_on_day'               => 'تراکنش در روز ماه ":value" ایجاد نشد
',
    'search_modifier_created_at_before_year'              => 'تراکنش در سال ":value" یا قبل از آن ایجاد شد
',
    'search_modifier_created_at_before_month'             => 'تراکنش در ماه ":value" یا قبل از آن ایجاد شد
',
    'search_modifier_created_at_before_day'               => 'تراکنش در یا قبل از روز ماه ":value" ایجاد شد
',
    'search_modifier_created_at_after_year'               => 'تراکنش در یا بعد از سال ":value" ایجاد شد
',
    'search_modifier_created_at_after_month'              => 'تراکنش در یا بعد از ماه ":value" ایجاد شد
',
    'search_modifier_created_at_after_day'                => 'تراکنش در یا بعد از روز ماه ":value" ایجاد شد
',
    'search_modifier_interest_date_before'                => 'تاریخ بهره معامله در ":value" یا قبل از آن است
',
    'search_modifier_interest_date_after'                 => 'تاریخ بهره معامله در ":value" یا بعد از آن است
',
    'search_modifier_book_date_on'                        => 'تاریخ دفتر معاملات روی ":value" است
',
    'search_modifier_not_book_date_on'                    => 'تاریخ دفتر معاملات روی ":value" نیست
',
    'search_modifier_book_date_before'                    => 'تاریخ دفتر معاملات در یا قبل از ":value" است
',
    'search_modifier_book_date_after'                     => 'تاریخ دفتر معاملات در یا بعد از ":value" است
',
    'search_modifier_process_date_on'                     => 'تاریخ فرآیند تراکنش روی ":value" است
',
    'search_modifier_not_process_date_on'                 => 'تاریخ فرآیند تراکنش روی ":value" نیست
',
    'search_modifier_process_date_before'                 => 'تاریخ فرآیند تراکنش در یا قبل از ":value" است
',
    'search_modifier_process_date_after'                  => 'تاریخ فرآیند تراکنش در یا بعد از ":value" است
',
    'search_modifier_due_date_on'                         => 'تاریخ سررسید تراکنش در ":value" است
',
    'search_modifier_not_due_date_on'                     => 'تاریخ سررسید تراکنش در ":value" نیست
',
    'search_modifier_due_date_before'                     => 'تاریخ سررسید تراکنش در یا قبل از ":value" است
',
    'search_modifier_due_date_after'                      => 'تاریخ سررسید تراکنش در یا بعد از ":value" است
',
    'search_modifier_payment_date_on'                     => 'تاریخ پرداخت تراکنش روی ":value" است
',
    'search_modifier_not_payment_date_on'                 => 'تاریخ پرداخت تراکنش روی ":value" نیست
',
    'search_modifier_payment_date_before'                 => 'تاریخ پرداخت تراکنش در یا قبل از ":value" است
',
    'search_modifier_payment_date_after'                  => 'تاریخ پرداخت تراکنش در یا بعد از ":value" است
',
    'search_modifier_invoice_date_on'                     => 'تاریخ فاکتور تراکنش روی ":value" است
',
    'search_modifier_not_invoice_date_on'                 => 'تاریخ فاکتور تراکنش روی ":value" نیست
',
    'search_modifier_invoice_date_before'                 => 'تاریخ فاکتور تراکنش در یا قبل از ":value" است
',
    'search_modifier_invoice_date_after'                  => 'تاریخ فاکتور تراکنش در یا بعد از ":value" است
',
    'search_modifier_created_at_on'                       => 'تراکنش روی ":value" ایجاد شد
',
    'search_modifier_not_created_at_on'                   => 'تراکنش روی ":value" ایجاد نشد
',
    'search_modifier_created_at_before'                   => 'تراکنش در یا قبل از ":value" ایجاد شد
',
    'search_modifier_created_at_after'                    => 'تراکنش در یا بعد از ":value" ایجاد شد
',
    'search_modifier_updated_at_on'                       => 'تراکنش در ":value" به روز شد
',
    'search_modifier_not_updated_at_on'                   => 'تراکنش در ":value" به روز نشد
',
    'search_modifier_updated_at_before'                   => 'تراکنش در یا قبل از ":value" به روز شد
',
    'search_modifier_updated_at_after'                    => 'تراکنش در یا بعد از ":value" به روز شد
',

    'search_modifier_attachment_name_is'                  => 'نام هر پیوست ":value" است
',
    'search_modifier_attachment_name_contains'            => 'نام هر پیوست حاوی ":value" است
',
    'search_modifier_attachment_name_starts'              => 'نام هر پیوست با ":value" شروع می شود
',
    'search_modifier_attachment_name_ends'                => 'نام هر پیوست با ":value" ختم می شود
',
    'search_modifier_attachment_notes_are'                => 'یادداشت های هر پیوست ":value" هستند
',
    'search_modifier_attachment_notes_contains'           => 'یادداشت های هر پیوست حاوی ":value" هستند
',
    'search_modifier_attachment_notes_starts'             => 'یادداشت های هر پیوست با ":value" شروع می شوند
',
    'search_modifier_attachment_notes_ends'               => 'یادداشت های هر پیوست با ":value" ختم می شوند
',
    'search_modifier_not_attachment_name_is'              => 'نام هر پیوستی ":value" نیست
',
    'search_modifier_not_attachment_name_contains'        => 'نام هیچ پیوستی حاوی ":value" نیست
',
    'search_modifier_not_attachment_name_starts'          => 'نام هیچ پیوستی با ":value" شروع نمی شود
',
    'search_modifier_not_attachment_name_ends'            => 'نام هر پیوستی با ":value" ختم نمی شود
',
    'search_modifier_not_attachment_notes_are'            => 'یادداشت های هر پیوست ":value" نیستند
',
    'search_modifier_not_attachment_notes_contains'       => 'یادداشت های پیوست حاوی ":value" نیستند
',
    'search_modifier_not_attachment_notes_starts'         => 'یادداشت های هر پیوست با ":value" شروع می شوند
',
    'search_modifier_not_attachment_notes_ends'           => 'یادداشت های هر پیوست با ":value" ختم نمی شود
',
    'search_modifier_sepa_ct_is'                          => 'SEPA CT ":value" است
',
    'update_rule_from_query'                              => 'قانون ":rule" را از عبارت جستجو به روز کنید
',
    'create_rule_from_query'                              => 'ایجاد قانون جدید از عبارت جستجو
',
    'rule_from_search_words'                              => 'موتور قانون کار سختی با ":string" دارد. قانون پیشنهادی متناسب با درخواست جستجوی شما ممکن است نتایج متفاوتی ارائه دهد. لطفاً محرک های قانون را با دقت بررسی کنید.
',

    // more new stuff
    'search_modifier_destination_balance_is'              => 'Destination account balance is exactly ":value"',
    'search_modifier_not_destination_balance_is'          => 'Destination account balance is NOT exactly ":value"',
    'search_modifier_source_balance_is'                   => 'Source account balance is exactly ":value"',
    'search_modifier_not_source_balance_is'               => 'Source account balance is NOT exactly ":value"',

    'search_modifier_destination_balance_lte'             => 'Destination account balance is less than or equal to ":value"',
    'search_modifier_not_destination_balance_lte'         => 'Destination account balance is more than ":value"',
    'search_modifier_source_balance_lte'                  => 'Source account balance is less than or equal to ":value"',
    'search_modifier_not_source_balance_lte'              => 'Source account balance is more than ":value"',

    'search_modifier_destination_balance_lt'              => 'Destination account balance is less than ":value"',
    'search_modifier_not_destination_balance_lt'          => 'Destination account balance is more than or equal to ":value"',
    'search_modifier_source_balance_lt'                   => 'Source account balance is less than ":value"',
    'search_modifier_not_source_balance_lt'               => 'Source account balance is more than or equal to ":value"',

    'search_modifier_destination_balance_gte'             => 'Destination account balance is more than or equal to ":value"',
    'search_modifier_not_destination_balance_gte'         => 'Destination account balance is less than ":value"',
    'search_modifier_source_balance_gte'                  => 'Source account balance is more than or equal to ":value"',
    'search_modifier_not_source_balance_gte'              => 'Source account balance is less than ":value"',

    'search_modifier_destination_balance_gt'              => 'Destination account balance is more than ":value"',
    'search_modifier_not_destination_balance_gt'          => 'Destination account balance is less than or equal to ":value"',
    'search_modifier_source_balance_gt'                   => 'Source account balance is more than ":value"',
    'search_modifier_not_source_balance_gt'               => 'Source account balance is less than or equal to ":value"',

    // END
    'general_search_error'                                => 'هنگام جستجو خطایی روی داد. لطفا برای اطلاعات بیشتر فایل های گزارش را بررسی کنید.
',
    'search_box'                                          => 'جستجو',
    'search_box_intro'                                    => 'Welcome to the search function of Firefly III. Enter your search query in the box. <a href="https://docs.firefly-iii.org/how-to/firefly-iii/features/search/">Make sure you check out the help file</a> because the search is pretty advanced.',
    'search_error'                                        => 'خطا هنگام جستجو',
    'search_searching'                                    => 'درحال جستجو...',
    'search_results'                                      => 'نتایج جست‌وجو',

    // repeat frequencies:
    'repeat_freq_yearly'                                  => 'سالانه',
    'repeat_freq_half-year'                               => 'هر نیم سال
',
    'repeat_freq_quarterly'                               => 'سه ماه یکبار',
    'repeat_freq_monthly'                                 => 'ماهانه',
    'repeat_freq_weekly'                                  => 'هفتگی',
    'repeat_freq_daily'                                   => 'روزانه',
    'daily'                                               => 'روزانه',
    'weekly'                                              => 'هفتگی',
    'quarterly'                                           => 'سه ماه یکبار',
    'half-year'                                           => 'هر نیم سال
',
    'yearly'                                              => 'سالانه',

    // rules
    'is_not_rule_trigger'                                 => 'نفی',
    'cannot_fire_inactive_rules'                          => 'شما نمی توانید قوانین غیر فعال را اجرا کنید
',
    'show_triggers'                                       => 'نشان دادن محرک ها
',
    'show_actions'                                        => 'نمایش اقدامات',
    'rules'                                               => 'قوانین',
    'rule_name'                                           => 'نام قانون

',
    'rule_triggers'                                       => 'زمانی که قانون تحریک می شود
',
    'rule_actions'                                        => 'قانون خواهد شد
',
    'new_rule'                                            => 'قانون جدید',
    'new_rule_group'                                      => 'گروه قوانین جدید
',
    'rule_priority_up'                                    => 'به قانون اولویت بیشتری بدهید
',
    'rule_priority_down'                                  => 'به قانون اولویت کمتری بدهید
',
    'make_new_rule_group'                                 => 'گروه قانون جدید بسازید
',
    'store_new_rule_group'                                => 'ذخیره گروه قوانین جدید
',
    'created_new_rule_group'                              => 'گروه قانون جدید ":title" ذخیره شد!
',
    'updated_rule_group'                                  => 'گروه قانون ":title" با موفقیت به روز شد.
',
    'edit_rule_group'                                     => 'ویرایش گروه قانون ":title"
',
    'duplicate_rule'                                      => 'قانون تکراری ":title"
',
    'rule_copy_of'                                        => 'کپی از ":title"
',
    'duplicated_rule'                                     => 'قانون تکراری ":title" به ":newTitle"
',
    'delete_rule_group'                                   => 'حذف گروه قانون ":title"
',
    'deleted_rule_group'                                  => 'گروه قوانین حذف شده ":title"
',
    'update_rule_group'                                   => 'به روز رسانی گروه قوانین
',
    'no_rules_in_group'                                   => 'هیچ قانونی در این گروه وجود ندارد
',
    'move_rule_group_up'                                  => 'گروه قوانین را به بالا منتقل کنید
',
    'move_rule_group_down'                                => 'گروه قانون را به پایین منتقل کنید
',
    'save_rules_by_moving'                                => 'این قانون را با انتقال آن به یک گروه قانون دیگر ذخیره کنید:|این قوانین را با انتقال آنها به یک گروه قوانین دیگر ذخیره کنید:
',
    'make_new_rule'                                       => 'ایجاد یک قانون جدید در گروه قانون ":title"
',
    'make_new_rule_no_group'                              => 'یک قانون جدید ایجاد کنید
',
    'instructions_rule_from_bill'                         => 'In order to match transactions to your new subscription ":name", Firefly III can create a rule that will automatically be checked against any transactions you store. Please verify the details below and store the rule to have Firefly III automatically match transactions to your new bill.',
    'instructions_rule_from_journal'                      => 'بر اساس یکی از تراکنش های خود یک قانون ایجاد کنید. فرم زیر را تکمیل یا ارسال کنید.
',
    'rule_is_strict'                                      => 'قانون سختگیرانه





',
    'rule_is_not_strict'                                  => 'قانون نامناسب





',
    'rule_help_stop_processing'                           => 'When you check this box, later rules in this group will not be executed if this particular rule is executed.',
    'rule_help_strict'                                    => 'در قوانین سختگیرانه، همه تریگرها باید فعال شوند تا عمل(های) اجرا شود. در قوانین غیر دقیق، هر تریگر برای اجرای کنش(ها) کافی است.
',
    'rule_help_active'                                    => 'قوانین غیرفعال هرگز فعال نمی شوند.
',
    'stored_new_rule'                                     => 'قانون جدید ذخیره شده با عنوان ":title"
',
    'deleted_rule'                                        => 'قانون با عنوان ":title" حذف شد
',
    'store_new_rule'                                      => 'قانون جدید ذخیره کنید
',
    'updated_rule'                                        => 'قانون به روز شده با عنوان ":title"
',
    'default_rule_group_name'                             => 'قوانین پیش فرض
',
    'default_rule_group_description'                      => 'همه قوانین شما در یک گروه خاص نیست.
',
    'trigger'                                             => 'مقدار دنباله





',
    'trigger_value'                                       => 'تریگر بر اساس مقدار


',
    'stop_processing_other_triggers'                      => 'پردازش سایر محرک ها را متوقف کنید
',
    'add_rule_trigger'                                    => 'ماشه جدید اضافه کنید
',
    'action'                                              => 'اقدام',
    'action_value'                                        => 'مقدار عملیات





',
    'stop_executing_other_actions'                        => 'توقف اجرای دیگر عملیات





',
    'add_rule_action'                                     => 'افزودن عملیات جدید





',
    'edit_rule'                                           => 'Edit rule #:nr ":title"',
    'delete_rule'                                         => 'حذف قانون ":title"
',
    'update_rule'                                         => 'قانون به روز رسانی
',
    'test_rule_triggers'                                  => 'معاملات منطبق را ببینید
',
    'warning_no_matching_transactions'                    => 'هیچ تراکنش منطبقی پیدا نشد.
',
    'warning_no_valid_triggers'                           => 'هیچ محرک معتبری ارائه نشده است.
',
    'apply_rule_selection'                                => 'قانون ":title" را برای مجموعه ای از تراکنش های خود اعمال کنید
',
    'apply_rule_selection_intro'                          => 'قوانینی مانند «:title» معمولاً فقط برای تراکنش‌های جدید یا به‌روز شده اعمال می‌شوند، اما می‌توانید به Firefly III بگویید آن را روی مجموعه‌ای از تراکنش‌های موجودتان اجرا کند. این می تواند زمانی مفید باشد که شما یک قانون را به روز کرده اید و نیاز دارید که تغییرات در تمام تراکنش های دیگر شما اعمال شود.
',
    'include_transactions_from_accounts'                  => 'شامل تراکنش های این حساب ها می شود
',
    'include'                                             => 'عبارتند از',
    'applied_rule_selection'                              => '{0} هیچ تراکنش در انتخاب شما با قانون ":title" تغییر نکرد.|[1] یک تراکنش در انتخاب شما با قانون ":title" تغییر کرد.|[2,*] :count تراکنش های انتخابی شما توسط قانون ":title".
',
    'execute'                                             => 'اجرا كردن',
    'apply_rule_group_selection'                          => 'گروه قانون ":title" را به مجموعه ای از تراکنش های خود اعمال کنید
',
    'apply_rule_group_selection_intro'                    => 'گروه‌های قوانین مانند «:title» معمولاً فقط برای تراکنش‌های جدید یا به‌روز شده اعمال می‌شوند، اما شما می‌توانید به Firefly III بگویید تمام قوانین این گروه را روی مجموعه‌ای از تراکنش‌های موجودتان اجرا کند. این می تواند زمانی مفید باشد که گروهی از قوانین را به روز کرده باشید و نیاز دارید که تغییرات در تمام تراکنش های دیگر شما اعمال شود.
',
    'applied_rule_group_selection'                        => '{0} No transactions in your selection were changed by the rules in rule group ":title".|[1] One transaction in your selection was changed by the rules in rule group ":title".|[2,*] :count transactions in your selection were changed by the rules in rule group ":title".',
    'rule_run_after_creation'                             => 'If you check this box, you get the opportunity to run the rule after it has been created.',
    'rule_run_after_edit'                                 => 'If you check this box, you get the opportunity to run the rule after it has been updated.',

    // actions and triggers
    'rule_trigger_store_journal'                          => 'هنگامی که یک تراکنش ایجاد می شود
',
    'rule_trigger_update_journal'                         => 'هنگامی که یک تراکنش به روز می شود
',
    'rule_trigger_manual'                                 => 'Only when user-activated',
    'rule_trigger_user_action'                            => 'عملکرد کاربر ":trigger_value" است
',

    // OLD values (remove non-doubles later):
    'rule_trigger_source_account_starts_choice'           => 'نام حساب منبع با .. شروع می شود.
',
    'rule_trigger_source_account_starts'                  => 'نام حساب منبع با ":trigger_value" شروع می شود
',
    'rule_trigger_source_account_ends_choice'             => 'نام حساب منبع به پایان می رسد..
',
    'rule_trigger_source_account_ends'                    => 'نام حساب منبع با ":trigger_value" ختم می شود
',
    'rule_trigger_source_account_is_choice'               => 'نام حساب منبع ..
',
    'rule_trigger_source_account_is'                      => 'نام حساب منبع ":trigger_value" است
',
    'rule_trigger_source_account_contains_choice'         => 'نام حساب منبع حاوی ...
',
    'rule_trigger_source_account_contains'                => 'نام حساب منبع حاوی ":trigger_value" است
',
    'rule_trigger_account_id_choice'                      => 'هر کدوم شناسه حساب دقیقا هست..
',
    'rule_trigger_account_id'                             => 'شناسه هر دو حساب دقیقاً :trigger_value است
',
    'rule_trigger_source_account_id_choice'               => 'شناسه حساب منبع دقیقاً ...
',
    'rule_trigger_source_account_id'                      => 'شناسه حساب منبع دقیقاً :trigger_value است
',
    'rule_trigger_destination_account_id_choice'          => 'شناسه اکانت مقصد دقیقا..
',
    'rule_trigger_destination_account_id'                 => 'شناسه حساب مقصد دقیقاً :trigger_value است
',
    'rule_trigger_account_is_cash_choice'                 => 'هر دو حساب نقدی است
',
    'rule_trigger_account_is_cash'                        => 'هر دو حساب نقدی است
',
    'rule_trigger_source_is_cash_choice'                  => 'حساب منبع، حساب (نقدی) است
',
    'rule_trigger_source_is_cash'                         => 'حساب مقصد، حساب «(نقدی)» است
',
    'rule_trigger_destination_is_cash_choice'             => 'حساب مقصد، حساب «(نقدی)» است
',
    'rule_trigger_destination_is_cash'                    => 'حساب مقصد، حساب «(نقدی)» است
',
    'rule_trigger_source_account_nr_starts_choice'        => 'شماره حساب منبع / IBAN با .. شروع می شود.
',
    'rule_trigger_source_account_nr_starts'               => 'شماره حساب منبع / IBAN با ":trigger_value" شروع می شود
',
    'rule_trigger_source_account_nr_ends_choice'          => 'شماره حساب منبع / IBAN به پایان می رسد..
',
    'rule_trigger_source_account_nr_ends'                 => 'شماره حساب منبع / IBAN به ":trigger_value" ختم می شود
',
    'rule_trigger_source_account_nr_is_choice'            => 'شماره حساب منبع / IBAN است..
',
    'rule_trigger_source_account_nr_is'                   => 'شماره حساب منبع / IBAN ":trigger_value" است
',
    'rule_trigger_source_account_nr_contains_choice'      => 'شماره حساب منبع / IBAN حاوی ...
',
    'rule_trigger_source_account_nr_contains'             => 'شماره حساب منبع / IBAN حاوی ":trigger_value" است
',
    'rule_trigger_destination_account_starts_choice'      => 'نام حساب مقصد با .. شروع می شود.
',
    'rule_trigger_destination_account_starts'             => 'نام حساب مقصد با ":trigger_value" شروع می شود
',
    'rule_trigger_destination_account_ends_choice'        => 'نام حساب مقصد به این ختم می شود..
',
    'rule_trigger_destination_account_ends'               => 'Destination account name ends with ":trigger_value"',
    'rule_trigger_destination_account_is_choice'          => 'نام حساب مقصد ..
',
    'rule_trigger_destination_account_is'                 => 'نام حساب مقصد ":trigger_value" است
',
    'rule_trigger_destination_account_contains_choice'    => 'نام حساب مقصد ..
',
    'rule_trigger_destination_account_contains'           => 'نام حساب مقصد حاوی ":trigger_value" است
',
    'rule_trigger_destination_account_nr_starts_choice'   => 'شماره حساب مقصد / IBAN با .. شروع می شود.
',
    'rule_trigger_destination_account_nr_starts'          => 'شماره حساب مقصد / IBAN با ":trigger_value" شروع می شود
',
    'rule_trigger_destination_account_nr_ends_choice'     => 'شماره حساب مقصد / IBAN به پایان می رسد..
',
    'rule_trigger_destination_account_nr_ends'            => 'شماره حساب مقصد / IBAN به ":trigger_value" ختم می شود
',
    'rule_trigger_destination_account_nr_is_choice'       => 'شماره حساب مقصد / IBAN است..
',
    'rule_trigger_destination_account_nr_is'              => 'شماره حساب مقصد / IBAN ":trigger_value" است
',
    'rule_trigger_destination_account_nr_contains_choice' => 'شماره حساب مقصد / IBAN شامل..
',
    'rule_trigger_destination_account_nr_contains'        => 'شماره حساب مقصد / IBAN حاوی ":trigger_value" است
',
    'rule_trigger_transaction_type_choice'                => 'معامله از نوع است..
',
    'rule_trigger_transaction_type'                       => 'تراکنش از نوع ":trigger_value" است
',
    'rule_trigger_category_is_choice'                     => 'دسته است..
',
    'rule_trigger_category_is'                            => 'دسته ":trigger_value" است
',
    'rule_trigger_amount_less_choice'                     => 'مبلغ کمتر یا مساوی ..
',
    'rule_trigger_amount_less'                            => 'مقدار کمتر یا مساوی با :trigger_value است
',
    'rule_trigger_amount_is_choice'                       => 'مبلغ است..
',
    'rule_trigger_amount_is'                              => 'مبلغ :trigger_value است
',
    'rule_trigger_amount_more_choice'                     => 'مبلغ بیشتر یا مساوی است..
',
    'rule_trigger_amount_more'                            => 'مقدار بیشتر یا مساوی با :trigger_value است
',
    'rule_trigger_description_starts_choice'              => 'شرح با شروع می شود..
',
    'rule_trigger_description_starts'                     => 'توضیحات با ":trigger_value" شروع می شود
',
    'rule_trigger_description_ends_choice'                => 'توضیحات به پایان می رسد..
',
    'rule_trigger_description_ends'                       => 'توضیحات با ":trigger_value" به پایان می رسد
',
    'rule_trigger_description_contains_choice'            => 'توضیحات شامل ..
',
    'rule_trigger_description_contains'                   => 'توضیحات حاوی ":trigger_value" است
',
    'rule_trigger_description_is_choice'                  => 'شرح است..
',
    'rule_trigger_description_is'                         => 'توضیحات ":trigger_value" است
',
    'rule_trigger_date_on_choice'                         => 'تاریخ معامله است..
',
    'rule_trigger_date_on'                                => 'تاریخ تراکنش ":trigger_value" است
',
    'rule_trigger_date_before_choice'                     => 'تاریخ معامله قبل از ...
',
    'rule_trigger_date_before'                            => 'تاریخ تراکنش قبل از :trigger_value است
',
    'rule_trigger_date_after_choice'                      => 'تاریخ معامله بعد از ...
',
    'rule_trigger_date_after'                             => 'تاریخ تراکنش بعد از :trigger_value است
',
    'rule_trigger_created_at_on_choice'                   => 'معامله در تاریخ انجام شد..
',
    'rule_trigger_created_at_on'                          => 'تراکنش در ":trigger_value" انجام شد
',
    'rule_trigger_updated_at_on_choice'                   => 'آخرین ویرایش تراکنش در ..
',
    'rule_trigger_updated_at_on'                          => 'آخرین تراکنش در ":trigger_value" ویرایش شد
',
    'rule_trigger_budget_is_choice'                       => 'بودجه است..
',
    'rule_trigger_budget_is'                              => 'بودجه ":trigger_value" است
',
    'rule_trigger_tag_is_choice'                          => 'هر برچسبی است..
',
    'rule_trigger_tag_is'                                 => 'هر تگ ":trigger_value" است
',
    'rule_trigger_tag_contains_choice'                    => 'Any tag contains..',
    'rule_trigger_tag_contains'                           => 'Any tag contains ":trigger_value"',
    'rule_trigger_not_tag_contains'                       => 'No tag contains ":trigger_value"',
    'rule_trigger_tag_ends_choice'                        => 'Any tag ends with..',
    'rule_trigger_tag_ends'                               => 'Any tag ends with ":trigger_value"',
    'rule_trigger_tag_starts_choice'                      => 'Any tag starts with..',
    'rule_trigger_tag_starts'                             => 'Any tag starts with ":trigger_value"',
    'rule_trigger_currency_is_choice'                     => 'ارز معاملاتی است..
',
    'rule_trigger_currency_is'                            => 'واحد پول تراکنش ":trigger_value" است
',
    'rule_trigger_foreign_currency_is_choice'             => 'ارز مبادله ای است..
',
    'rule_trigger_foreign_currency_is'                    => 'ارز خارجی تراکنش ":trigger_value" است
',
    'rule_trigger_has_attachments_choice'                 => 'Has any attachments',
    'rule_trigger_has_attachments'                        => 'Has any attachment(s)',
    'rule_trigger_has_no_category_choice'                 => 'دسته بندی ندارد
',
    'rule_trigger_has_no_category'                        => 'معامله دسته بندی ندارد
',
    'rule_trigger_has_any_category_choice'                => 'دارای یک (هر) دسته 
',
    'rule_trigger_has_any_category'                       => 'تراکنش یک دسته (هر) دارد
',
    'rule_trigger_has_no_budget_choice'                   => 'بودجه ندارد
',
    'rule_trigger_has_no_budget'                          => 'معامله بودجه ندارد
',
    'rule_trigger_has_any_budget_choice'                  => 'دارای (هر) بودجه
',
    'rule_trigger_has_any_budget'                         => 'تراکنش دارای یک(هر) بودجه ای است
',
    'rule_trigger_has_no_bill_choice'                     => 'Has no subscription',
    'rule_trigger_has_no_bill'                            => 'Transaction has no subscription',
    'rule_trigger_has_any_bill_choice'                    => 'Has a (any) subscription',
    'rule_trigger_has_any_bill'                           => 'Transaction has a (any) subscription',
    'rule_trigger_has_no_tag_choice'                      => 'هیچ برچسبی ندارد
',
    'rule_trigger_has_no_tag'                             => 'تراکنش فاقد برچسب(ها) است
',
    'rule_trigger_has_any_tag_choice'                     => 'دارای یک یا چند (هر) برچسب است
',
    'rule_trigger_has_any_tag'                            => 'تراکنش دارای یک یا چند (هر) برچسب است
',
    'rule_trigger_any_notes_choice'                       => 'دارای (هر گونه) یادداشت
',
    'rule_trigger_any_notes'                              => 'معامله دارای (هر) یادداشتی است
',
    'rule_trigger_no_notes_choice'                        => 'هیچ یادداشتی ندارد
',
    'rule_trigger_no_notes'                               => 'معامله هیچ یادداشتی ندارد
',
    'rule_trigger_notes_is_choice'                        => 'یادداشت ها هستند..
',
    'rule_trigger_notes_is'                               => 'یادداشت ها ":trigger_value" هستند
',
    'rule_trigger_notes_contains_choice'                  => 'یادداشت ها حاوی ..
',
    'rule_trigger_notes_contains'                         => 'یادداشت ها حاوی ":trigger_value" هستند
',
    'rule_trigger_notes_starts_choice'                    => 'یادداشت ها با ..
',
    'rule_trigger_notes_starts'                           => 'یادداشت ها با ":trigger_value" شروع می شوند
',
    'rule_trigger_notes_ends_choice'                      => 'یادداشت ها با ..
',
    'rule_trigger_notes_ends'                             => 'یادداشت ها با ":trigger_value" ختم می شوند
',
    'rule_trigger_bill_is_choice'                         => 'Subscription is..',
    'rule_trigger_bill_is'                                => 'Subscription is ":trigger_value"',
    'rule_trigger_external_id_is_choice'                  => 'شناسه خارجی است..
',
    'rule_trigger_external_id_is'                         => 'شناسه خارجی ":trigger_value" است
',
    'rule_trigger_internal_reference_is_choice'           => 'مرجع داخلی است..
',
    'rule_trigger_internal_reference_is'                  => 'مرجع داخلی ":trigger_value" است
',
    'rule_trigger_journal_id_choice'                      => 'شناسه روزنامه تراکنش ..
',
    'rule_trigger_journal_id'                             => 'شناسه ژورنال تراکنش ":trigger_value" است
',
    'rule_trigger_any_external_url'                       => 'تراکنش یک URL خارجی (هر) دارد
',
    'rule_trigger_any_external_url_choice'                => 'Has an (any) external URL',
    'rule_trigger_any_external_id'                        => 'تراکنش یک شناسه خارجی (هر) دارد
',
    'rule_trigger_any_external_id_choice'                 => 'Has an (any) external ID',
    'rule_trigger_no_external_url_choice'                 => 'Has no external URL',
    'rule_trigger_no_external_url'                        => 'تراکنش URL خارجی ندارد
',
    'rule_trigger_no_external_id_choice'                  => 'Has no external ID',
    'rule_trigger_no_external_id'                         => 'تراکنش فاقد شناسه خارجی است
',
    'rule_trigger_id_choice'                              => 'شناسه تراکنش ها هست...',
    'rule_trigger_id'                                     => 'شناسه تراکنش ":trigger_value" است
',
    'rule_trigger_sepa_ct_is_choice'                      => 'SEPA CT است..
',
    'rule_trigger_sepa_ct_is'                             => 'SEPA CT ":trigger_value" است
',

    // new values:
    'rule_trigger_user_action_choice'                     => 'عملکرد کاربر ":trigger_value" است
',
    'rule_trigger_tag_is_not_choice'                      => 'هیچ برچسبی نیست..
',
    'rule_trigger_tag_is_not'                             => 'هیچ برچسبی ":trigger_value" نیست
',
    'rule_trigger_account_is_choice'                      => 'هرکدام اکانت دقیقا..
',
    'rule_trigger_account_is'                             => 'هر یک از حساب ها دقیقاً ":trigger_value" است
',
    'rule_trigger_account_contains_choice'                => 'هر یک از حساب ها حاوی ...
',
    'rule_trigger_account_contains'                       => 'هر یک از حساب‌ها حاوی ":trigger_value" است
',
    'rule_trigger_account_ends_choice'                    => 'هرکدام از این اکانت ها به .. ختم می شود.
',
    'rule_trigger_account_ends'                           => 'هر یک از حساب‌ها به «:trigger_value» ختم می‌شود
',
    'rule_trigger_account_starts_choice'                  => 'هر یک از حساب ها با .. شروع می شود.
',
    'rule_trigger_account_starts'                         => 'هر یک از حساب ها با ":trigger_value" شروع می شود
',
    'rule_trigger_account_nr_is_choice'                   => 'شماره حساب هر یک/ IBAN است',
    'rule_trigger_account_nr_is'                          => 'شماره حساب هریک / IBAN ":trigger_value" است
',
    'rule_trigger_account_nr_contains_choice'             => 'هر کدام از شماره حساب / IBAN شامل.',
    'rule_trigger_account_nr_contains'                    => 'شماره حساب هر یک / IBAN حاوی ":trigger_value" است
',
    'rule_trigger_account_nr_ends_choice'                 => 'یا شماره حساب / IBAN به .. ختم می شود.
',
    'rule_trigger_account_nr_ends'                        => 'شماره حساب هر یک/ IBAN به ":trigger_value" ختم می شود
',
    'rule_trigger_account_nr_starts_choice'               => 'شماره حساب / IBAN با .. شروع می شود.
',
    'rule_trigger_account_nr_starts'                      => 'شماره حساب / IBAN با ":trigger_value" شروع می شود
',
    'rule_trigger_category_contains_choice'               => 'شامل دسته‌بندی',
    'rule_trigger_category_contains'                      => 'دسته شامل ":trigger_value" است
',
    'rule_trigger_category_ends_choice'                   => 'دسته به پایان می رسد..
',
    'rule_trigger_category_ends'                          => 'دسته با ":trigger_value" به پایان می رسد
',
    'rule_trigger_category_starts_choice'                 => 'شوع دسته‌بندی با',
    'rule_trigger_category_starts'                        => 'شروع دسته‌بندی با ":trigger_value"',
    'rule_trigger_budget_contains_choice'                 => 'بدجه شامل',
    'rule_trigger_budget_contains'                        => 'بودجه شامل ":trigger_value"',
    'rule_trigger_budget_ends_choice'                     => 'بودجه پایان می‌‌پذیرد با ',
    'rule_trigger_budget_ends'                            => 'بودجه پایان می‌‌پذیرد با  ":trigger_value"',
    'rule_trigger_budget_starts_choice'                   => 'شروع بودجه با ',
    'rule_trigger_budget_starts'                          => 'شروع بودجه با ":trigger_value"',
    'rule_trigger_bill_contains_choice'                   => 'Subscription contains..',
    'rule_trigger_bill_contains'                          => 'Subscription contains ":trigger_value"',
    'rule_trigger_bill_ends_choice'                       => 'Subscription ends with..',
    'rule_trigger_bill_ends'                              => 'Subscription ends with ":trigger_value"',
    'rule_trigger_bill_starts_choice'                     => 'Subscription starts with..',
    'rule_trigger_bill_starts'                            => 'Subscription starts with ":trigger_value"',
    'rule_trigger_external_id_contains_choice'            => 'شناسه خارجی شامل ..
',
    'rule_trigger_external_id_contains'                   => 'شناسه خارجی حاوی ":trigger_value" است
',
    'rule_trigger_external_id_ends_choice'                => 'شناسه خارجی به پایان می رسد..
',
    'rule_trigger_external_id_ends'                       => 'شناسه خارجی با ":trigger_value" به پایان می رسد
',
    'rule_trigger_external_id_starts_choice'              => 'شناسه خارجی با .. شروع می شود.
',
    'rule_trigger_external_id_starts'                     => 'شناسه خارجی با ":trigger_value" شروع می شود
',
    'rule_trigger_internal_reference_contains_choice'     => 'مرجع داخلی شامل ..
',
    'rule_trigger_internal_reference_contains'            => 'مرجع داخلی حاوی ":trigger_value" است
',
    'rule_trigger_internal_reference_ends_choice'         => 'مرجع داخلی به پایان می رسد..
',
    'rule_trigger_internal_reference_ends'                => 'مرجع داخلی با ":trigger_value" به پایان می رسد
',
    'rule_trigger_internal_reference_starts_choice'       => 'مرجع داخلی با .. شروع می شود.
',
    'rule_trigger_internal_reference_starts'              => 'مرجع داخلی با ":trigger_value" شروع می شود
',
    'rule_trigger_external_url_is_choice'                 => 'URL خارجی است..
',
    'rule_trigger_external_url_is'                        => 'URL خارجی ":trigger_value" است
',
    'rule_trigger_external_url_contains_choice'           => 'URL خارجی شامل ..
',
    'rule_trigger_external_url_contains'                  => 'URL خارجی حاوی ":trigger_value" است
',
    'rule_trigger_external_url_ends_choice'               => 'نشانی وب خارجی به پایان می رسد..
',
    'rule_trigger_external_url_ends'                      => 'URL خارجی با ":trigger_value" ختم می شود
',
    'rule_trigger_external_url_starts_choice'             => 'URL خارجی با .. شروع می شود.
',
    'rule_trigger_external_url_starts'                    => 'URL خارجی با ":trigger_value" شروع می شود
',
    'rule_trigger_has_no_attachments_choice'              => 'هیچ پیوستی ندارد
',
    'rule_trigger_has_no_attachments'                     => 'تراکنش هیچ پیوستی ندارد
',
    'rule_trigger_recurrence_id_choice'                   => 'شناسه تراکنش تکراری است..
',
    'rule_trigger_recurrence_id'                          => 'شناسه تراکنش تکرارشونده ":trigger_value" است
',
    'rule_trigger_interest_date_on_choice'                => 'تاریخ بهره در تاریخ است..
',
    'rule_trigger_interest_date_on'                       => 'تاریخ بهره در تاریخ است..
',
    'rule_trigger_interest_date_before_choice'            => 'تاریخ سود قبل است..
',
    'rule_trigger_interest_date_before'                   => 'تاریخ بهره قبل از ":trigger_value" است
',
    'rule_trigger_interest_date_after_choice'             => 'تاریخ سود بعد از ...
',
    'rule_trigger_interest_date_after'                    => 'تاریخ بهره بعد از ":trigger_value" است
',
    'rule_trigger_book_date_on_choice'                    => 'تاریخ کتاب است..
',
    'rule_trigger_book_date_on'                           => 'تاریخ کتاب روی ":trigger_value" است
',
    'rule_trigger_book_date_before_choice'                => 'تاریخ کتاب قبل است..
',
    'rule_trigger_book_date_before'                       => 'تاریخ کتاب قبل از ":trigger_value" است
',
    'rule_trigger_book_date_after_choice'                 => 'تاریخ کتاب بعد از ...
',
    'rule_trigger_book_date_after'                        => 'تاریخ کتاب بعد از ":trigger_value" است
',
    'rule_trigger_process_date_on_choice'                 => 'تاریخ فرآیند است..
',
    'rule_trigger_process_date_on'                        => 'تاریخ فرآیند ":trigger_value" است
',
    'rule_trigger_process_date_before_choice'             => 'تاریخ فرآیند قبل است..
',
    'rule_trigger_process_date_before'                    => 'تاریخ فرآیند قبل از ":trigger_value" است
',
    'rule_trigger_process_date_after_choice'              => 'تاریخ فرآیند بعد از ...
',
    'rule_trigger_process_date_after'                     => 'تاریخ فرآیند بعد از ":trigger_value" است
',
    'rule_trigger_due_date_on_choice'                     => 'تاریخ سررسید است..
',
    'rule_trigger_due_date_on'                            => 'تاریخ سررسید ":trigger_value" است
',
    'rule_trigger_due_date_before_choice'                 => 'موعد مقرر قبل است..
',
    'rule_trigger_due_date_before'                        => 'تاریخ سررسید قبل از ":trigger_value" است
',
    'rule_trigger_due_date_after_choice'                  => 'تاریخ سررسید بعد از ...
',
    'rule_trigger_due_date_after'                         => 'تاریخ سررسید بعد از ":trigger_value" است
',
    'rule_trigger_payment_date_on_choice'                 => 'تاریخ پرداخت است..
',
    'rule_trigger_payment_date_on'                        => 'تاریخ پرداخت ":trigger_value" است
',
    'rule_trigger_payment_date_before_choice'             => 'تاریخ پرداخت قبل است..
',
    'rule_trigger_payment_date_before'                    => 'تاریخ پرداخت قبل از ":trigger_value" است
',
    'rule_trigger_payment_date_after_choice'              => 'تاریخ پرداخت بعد از..
',
    'rule_trigger_payment_date_after'                     => 'تاریخ پرداخت بعد از ":trigger_value" است
',
    'rule_trigger_invoice_date_on_choice'                 => 'تاریخ فاکتور است..
',
    'rule_trigger_invoice_date_on'                        => 'تاریخ فاکتور روی ":trigger_value" است
',
    'rule_trigger_invoice_date_before_choice'             => 'تاریخ فاکتور قبل است..
',
    'rule_trigger_invoice_date_before'                    => 'تاریخ فاکتور قبل از ":trigger_value" است
',
    'rule_trigger_invoice_date_after_choice'              => 'تاریخ فاکتور بعد از..
',
    'rule_trigger_invoice_date_after'                     => 'تاریخ فاکتور بعد از ":trigger_value" است
',
    'rule_trigger_created_at_before_choice'               => 'تراکنش قبلا ایجاد شده بود..
',
    'rule_trigger_created_at_before'                      => 'تراکنش قبل از ":trigger_value" ایجاد شد
',
    'rule_trigger_created_at_after_choice'                => 'معامله پس از ایجاد شد..
',
    'rule_trigger_created_at_after'                       => 'تراکنش پس از ":trigger_value" ایجاد شد
',
    'rule_trigger_updated_at_before_choice'               => 'آخرین بار تراکنش قبل به روز رسانی شد..
',
    'rule_trigger_updated_at_before'                      => 'آخرین بار تراکنش قبل از ":trigger_value" به‌روزرسانی شد
',
    'rule_trigger_updated_at_after_choice'                => 'آخرین بار تراکنش بعد از ...
',
    'rule_trigger_updated_at_after'                       => 'آخرین تراکنش پس از ":trigger_value" به روز شد
',
    'rule_trigger_foreign_amount_is_choice'               => 'مبلغ خارجی دقیقا..
',
    'rule_trigger_foreign_amount_is'                      => 'مقدار خارجی دقیقاً ":trigger_value" است
',
    'rule_trigger_foreign_amount_less_choice'             => 'مبلغ خارجی کمتر از ..
',
    'rule_trigger_foreign_amount_less'                    => 'مقدار خارجی کمتر از ":trigger_value" است
',
    'rule_trigger_foreign_amount_more_choice'             => 'مقدار خارجی بیش از ...
',
    'rule_trigger_foreign_amount_more'                    => 'مقدار خارجی بیشتر از ":trigger_value" است
',
    'rule_trigger_attachment_name_is_choice'              => 'نام هر پیوستی است..
',
    'rule_trigger_attachment_name_is'                     => 'نام هر پیوست ":trigger_value" است
',
    'rule_trigger_attachment_name_contains_choice'        => 'نام هر پیوست حاوی ...
',
    'rule_trigger_attachment_name_contains'               => 'نام هر پیوست حاوی ":trigger_value" است
',
    'rule_trigger_attachment_name_starts_choice'          => 'نام هر پیوست با .. شروع می شود.
',
    'rule_trigger_attachment_name_starts'                 => 'نام هر پیوست با ":trigger_value" شروع می شود
',
    'rule_trigger_attachment_name_ends_choice'            => 'نام هر پیوست به این ختم می شود..
',
    'rule_trigger_attachment_name_ends'                   => 'نام هر پیوست با ":trigger_value" ختم می شود
',
    'rule_trigger_attachment_notes_are_choice'            => 'یادداشت های هر پیوست عبارتند از..
',
    'rule_trigger_attachment_notes_are'                   => 'یادداشت های هر پیوست ":trigger_value" هستند
',
    'rule_trigger_attachment_notes_contains_choice'       => 'یادداشت های هر پیوست حاوی ...
',
    'rule_trigger_attachment_notes_contains'              => 'یادداشت های هر پیوست حاوی ":trigger_value" هستند
',
    'rule_trigger_attachment_notes_starts_choice'         => 'هر یادداشت پیوستی با .. شروع می شود.
',
    'rule_trigger_attachment_notes_starts'                => 'یادداشت های هر پیوست با ":trigger_value" شروع می شوند
',
    'rule_trigger_attachment_notes_ends_choice'           => 'هر یادداشت پیوستی با ..
',
    'rule_trigger_attachment_notes_ends'                  => 'یادداشت های هر پیوست با ":trigger_value" ختم می شوند
',
    'rule_trigger_reconciled_choice'                      => 'معامله تطبیق داده شده است
',
    'rule_trigger_reconciled'                             => 'معامله تطبیق داده شده است
',
    'rule_trigger_exists_choice'                          => 'هر تراکنش مطابقت دارد (!)
',
    'rule_trigger_exists'                                 => 'هر تراکنش مطابقت دارد
',

    // more values for new types:
    'rule_trigger_not_account_id'                         => 'شناسه حساب ":trigger_value" نیست
',
    'rule_trigger_not_source_account_id'                  => 'شناسه حساب منبع ":trigger_value" نیست
',
    'rule_trigger_not_destination_account_id'             => 'شناسه حساب مقصد ":trigger_value" نیست
',
    'rule_trigger_not_transaction_type'                   => 'نوع تراکنش ":trigger_value" نیست
',
    'rule_trigger_not_tag_is'                             => 'برچسب ":trigger_value" نیست
',
    'rule_trigger_not_tag_is_not'                         => 'برچسب ":trigger_value" است
',
    'rule_trigger_not_description_is'                     => 'توضیحات ":trigger_value" نیست
',
    'rule_trigger_not_description_contains'               => 'Description does not contain ":trigger_value"',
    'rule_trigger_not_description_ends'                   => 'توضیحات به ":trigger_value" ختم نمی شود
',
    'rule_trigger_not_description_starts'                 => 'توضیحات با ":trigger_value" شروع نمی شود
',
    'rule_trigger_not_notes_is'                           => 'یادداشت ها ":trigger_value" نیستند
',
    'rule_trigger_not_notes_contains'                     => 'یادداشت ها حاوی ":trigger_value" نیستند
',
    'rule_trigger_not_notes_ends'                         => 'یادداشت ها به ":trigger_value" ختم نمی شوند
',
    'rule_trigger_not_notes_starts'                       => 'یادداشت ها با ":trigger_value" شروع نمی شوند
',
    'rule_trigger_not_source_account_is'                  => 'حساب منبع ":trigger_value" نیست
',
    'rule_trigger_not_source_account_contains'            => 'حساب منبع حاوی ":trigger_value" نیست
',
    'rule_trigger_not_source_account_ends'                => 'حساب منبع به ":trigger_value" ختم نمی شود
',
    'rule_trigger_not_source_account_starts'              => 'حساب منبع با ":trigger_value" شروع نمی شود
',
    'rule_trigger_not_source_account_nr_is'               => 'شماره حساب منبع / IBAN ":trigger_value" نیست
',
    'rule_trigger_not_source_account_nr_contains'         => 'شماره حساب منبع / IBAN حاوی ":trigger_value" نیست
',
    'rule_trigger_not_source_account_nr_ends'             => 'شماره حساب منبع / IBAN به ":trigger_value" ختم نمی شود
',
    'rule_trigger_not_source_account_nr_starts'           => 'شماره حساب منبع / IBAN با ":trigger_value" شروع نمی شود
',
    'rule_trigger_not_destination_account_is'             => 'حساب مقصد ":trigger_value" نیست
',
    'rule_trigger_not_destination_account_contains'       => 'حساب مقصد حاوی ":trigger_value" نیست
',
    'rule_trigger_not_destination_account_ends'           => 'حساب مقصد به ":trigger_value" ختم نمی شود
',
    'rule_trigger_not_destination_account_starts'         => 'حساب مقصد با ":trigger_value" شروع نمی شود
',
    'rule_trigger_not_destination_account_nr_is'          => 'شماره حساب مقصد / IBAN ":trigger_value" نیست
',
    'rule_trigger_not_destination_account_nr_contains'    => 'شماره حساب مقصد / IBAN حاوی ":trigger_value" نیست
',
    'rule_trigger_not_destination_account_nr_ends'        => 'شماره حساب مقصد / IBAN به ":trigger_value" ختم نمی شود
',
    'rule_trigger_not_destination_account_nr_starts'      => 'شماره حساب مقصد / IBAN با ":trigger_value" شروع نمی شود
',
    'rule_trigger_not_account_is'                         => 'هیچ یک از حساب‌ها ":trigger_value" نیستند
',
    'rule_trigger_not_account_contains'                   => 'هیچ یک از حساب ها حاوی ":trigger_value" نیستند
',
    'rule_trigger_not_account_ends'                       => 'هیچ یک از حساب ها به ":trigger_value" ختم نمی شود
',
    'rule_trigger_not_account_starts'                     => 'هیچ یک از حساب ها با ":trigger_value" شروع نمی شود
',
    'rule_trigger_not_account_nr_is'                      => 'شماره حساب / IBAN ":trigger_value" نیست
',
    'rule_trigger_not_account_nr_contains'                => 'هیچ شماره حساب / IBAN حاوی ":trigger_value" نیست
',
    'rule_trigger_not_account_nr_ends'                    => 'شماره حساب / IBAN به ":trigger_value" ختم نمی شود
',
    'rule_trigger_not_account_nr_starts'                  => 'شماره حساب / IBAN با ":trigger_value" شروع نمی شود
',
    'rule_trigger_not_category_is'                        => 'دسته ":trigger_value" نیست
',
    'rule_trigger_not_category_contains'                  => 'دسته شامل ":trigger_value" نیست
',
    'rule_trigger_not_category_ends'                      => 'دسته به ":trigger_value" ختم نمی شود
',
    'rule_trigger_not_category_starts'                    => 'دسته با ":trigger_value" شروع نمی شود
',
    'rule_trigger_not_budget_is'                          => 'بودجه ":trigger_value" نیست
',
    'rule_trigger_not_budget_contains'                    => 'بودجه حاوی ":trigger_value" نیست
',
    'rule_trigger_not_budget_ends'                        => 'بودجه به ":trigger_value" ختم نمی شود
',
    'rule_trigger_not_budget_starts'                      => 'بودجه با ":trigger_value" شروع نمی شود
',
    'rule_trigger_not_bill_is'                            => 'Subscription is not is ":trigger_value"',
    'rule_trigger_not_bill_contains'                      => 'Subscription does not contain ":trigger_value"',
    'rule_trigger_not_bill_ends'                          => 'Subscription does not end on ":trigger_value"',
    'rule_trigger_not_bill_starts'                        => 'Subscription does not end with ":trigger_value"',
    'rule_trigger_not_external_id_is'                     => 'شناسه خارجی ":trigger_value" نیست
',
    'rule_trigger_not_external_id_contains'               => 'شناسه خارجی حاوی ":trigger_value" نیست
',
    'rule_trigger_not_external_id_ends'                   => 'شناسه خارجی به ":trigger_value" ختم نمی شود
',
    'rule_trigger_not_external_id_starts'                 => 'شناسه خارجی با ":trigger_value" شروع نمی شود
',
    'rule_trigger_not_internal_reference_is'              => 'مرجع داخلی ":trigger_value" نیست
',
    'rule_trigger_not_internal_reference_contains'        => 'مرجع داخلی حاوی ":trigger_value" نیست
',
    'rule_trigger_not_internal_reference_ends'            => 'مرجع داخلی به ":trigger_value" ختم نمی شود
',
    'rule_trigger_not_internal_reference_starts'          => 'مرجع داخلی با ":trigger_value" شروع نمی شود
',
    'rule_trigger_not_external_url_is'                    => 'URL خارجی ":trigger_value" نیست
',
    'rule_trigger_not_external_url_contains'              => 'URL خارجی حاوی ":trigger_value" نیست
',
    'rule_trigger_not_external_url_ends'                  => 'URL خارجی به ":trigger_value" ختم نمی شود
',
    'rule_trigger_not_external_url_starts'                => 'URL خارجی با ":trigger_value" شروع نمی شود
',
    'rule_trigger_not_currency_is'                        => 'ارز ":trigger_value" نیست
',
    'rule_trigger_not_foreign_currency_is'                => 'ارز خارجی ":trigger_value" نیست
',
    'rule_trigger_not_id'                                 => 'شناسه تراکنش ":trigger_value" نیست
',
    'rule_trigger_not_journal_id'                         => 'شناسه مجله تراکنش ":trigger_value" نیست
',
    'rule_trigger_not_recurrence_id'                      => 'شناسه تکراری ":trigger_value" نیست
',
    'rule_trigger_not_date_on'                            => 'تاریخ روی ":trigger_value" نیست
',
    'rule_trigger_not_date_before'                        => 'تاریخ قبل از ":trigger_value" نیست
',
    'rule_trigger_not_date_after'                         => 'تاریخ بعد از ":trigger_value" نیست
',
    'rule_trigger_not_interest_date_on'                   => 'تاریخ بهره روی ":trigger_value" نیست
',
    'rule_trigger_not_interest_date_before'               => 'تاریخ بهره قبل از ":trigger_value" نیست
',
    'rule_trigger_not_interest_date_after'                => 'تاریخ بهره بعد از ":trigger_value" نیست
',
    'rule_trigger_not_book_date_on'                       => 'تاریخ کتاب روی ":trigger_value" نیست
',
    'rule_trigger_not_book_date_before'                   => 'تاریخ کتاب قبل از ":trigger_value" نیست
',
    'rule_trigger_not_book_date_after'                    => 'تاریخ کتاب بعد از ":trigger_value" نیست
',
    'rule_trigger_not_process_date_on'                    => 'تاریخ فرآیند روی ":trigger_value" نیست
',
    'rule_trigger_not_process_date_before'                => 'تاریخ فرآیند قبل از ":trigger_value" نیست
',
    'rule_trigger_not_process_date_after'                 => 'تاریخ فرآیند بعد از ":trigger_value" نیست
',
    'rule_trigger_not_due_date_on'                        => 'تاریخ سررسید در ":trigger_value" نیست
',
    'rule_trigger_not_due_date_before'                    => 'تاریخ سررسید قبل از ":trigger_value" نیست
',
    'rule_trigger_not_due_date_after'                     => 'تاریخ سررسید بعد از ":trigger_value" نیست
',
    'rule_trigger_not_payment_date_on'                    => 'تاریخ پرداخت روی ":trigger_value" نیست
',
    'rule_trigger_not_payment_date_before'                => 'تاریخ پرداخت قبل از ":trigger_value" نیست
',
    'rule_trigger_not_payment_date_after'                 => 'تاریخ پرداخت بعد از ":trigger_value" نیست
',
    'rule_trigger_not_invoice_date_on'                    => 'تاریخ فاکتور روی ":trigger_value" نیست
',
    'rule_trigger_not_invoice_date_before'                => 'تاریخ فاکتور قبل از ":trigger_value" نیست
',
    'rule_trigger_not_invoice_date_after'                 => 'تاریخ فاکتور بعد از ":trigger_value" نیست
',
    'rule_trigger_not_created_at_on'                      => 'تراکنش در ":trigger_value" ایجاد نشده است
',
    'rule_trigger_not_created_at_before'                  => 'تراکنش قبل از ":trigger_value" ایجاد نشده است
',
    'rule_trigger_not_created_at_after'                   => 'تراکنش بعد از ":trigger_value" ایجاد نمی شود
',
    'rule_trigger_not_updated_at_on'                      => 'تراکنش در ":trigger_value" به روز نمی شود
',
    'rule_trigger_not_updated_at_before'                  => 'تراکنش قبل از ":trigger_value" به روز نمی شود
',
    'rule_trigger_not_updated_at_after'                   => 'تراکنش پس از ":trigger_value" به روز نمی شود
',
    'rule_trigger_not_amount_is'                          => 'مبلغ تراکنش ":trigger_value" نیست
',
    'rule_trigger_not_amount_less'                        => 'مبلغ تراکنش بیشتر از ":trigger_value" است
',
    'rule_trigger_not_amount_more'                        => 'مبلغ تراکنش کمتر از ":trigger_value" است
',
    'rule_trigger_not_foreign_amount_is'                  => 'مبلغ تراکنش خارجی ":trigger_value" نیست
',
    'rule_trigger_not_foreign_amount_less'                => 'مبلغ تراکنش خارجی بیشتر از ":trigger_value" است
',
    'rule_trigger_not_foreign_amount_more'                => 'مبلغ تراکنش خارجی کمتر از ":trigger_value" است
',
    'rule_trigger_not_attachment_name_is'                 => 'هیچ پیوستی ":trigger_value" نام ندارد
',
    'rule_trigger_not_attachment_name_contains'           => 'هیچ نام پیوستی حاوی ":trigger_value" نیست
',
    'rule_trigger_not_attachment_name_starts'             => 'هیچ نام پیوستی با ":trigger_value" شروع نمی شود
',
    'rule_trigger_not_attachment_name_ends'               => 'هیچ نام پیوستی به ":trigger_value" ختم نمی شود
',
    'rule_trigger_not_attachment_notes_are'               => 'هیچ یادداشت پیوستی ":trigger_value" نیست
',
    'rule_trigger_not_attachment_notes_contains'          => 'هیچ یادداشت پیوستی حاوی ":trigger_value" نیست
',
    'rule_trigger_not_attachment_notes_starts'            => 'هیچ یادداشت پیوستی با ":trigger_value" شروع نمی شود
',
    'rule_trigger_not_attachment_notes_ends'              => 'هیچ یادداشت پیوستی به ":trigger_value" ختم نمی شود
',
    'rule_trigger_not_reconciled'                         => 'معامله با هم سازگار نیست
',
    'rule_trigger_not_exists'                             => 'معامله وجود ندارد
',
    'rule_trigger_not_has_attachments'                    => 'تراکنش هیچ پیوستی ندارد
',
    'rule_trigger_not_has_any_category'                   => 'معامله دسته بندی ندارد
',
    'rule_trigger_not_has_any_budget'                     => 'Transaction has no budget',
    'rule_trigger_not_has_any_bill'                       => 'Transaction has no subscription',
    'rule_trigger_not_has_any_tag'                        => 'تراکنش هیچ برچسبی ندارد
',
    'rule_trigger_not_any_notes'                          => 'معامله هیچ یادداشتی ندارد
',
    'rule_trigger_not_any_external_url'                   => 'تراکنش URL خارجی ندارد
',
    'rule_trigger_not_has_no_attachments'                 => 'تراکنش یک (هر) پیوست دارد
',
    'rule_trigger_not_has_no_category'                    => 'تراکنش یک دسته (هر) دارد
',
    'rule_trigger_not_has_no_budget'                      => 'تراکنش دارای (هر) بودجه ای است
',
    'rule_trigger_not_has_no_bill'                        => 'Transaction has a (any) subscription',
    'rule_trigger_not_has_no_tag'                         => 'تراکنش دارای یک برچسب (هرگونه) است
',
    'rule_trigger_not_no_notes'                           => 'معامله هر گونه یادداشتی دارد
',
    'rule_trigger_not_no_external_url'                    => 'تراکنش یک URL خارجی دارد
',
    'rule_trigger_not_source_is_cash'                     => 'حساب منبع یک حساب نقدی نیست
',
    'rule_trigger_not_destination_is_cash'                => 'حساب مقصد یک حساب نقدی نیست
',
    'rule_trigger_not_account_is_cash'                    => 'هیچ یک از این دو حساب یک حساب نقدی نیست
',

    // new account balance things.
    'rule_trigger_destination_balance_gt_choice'          => 'Destination account balance is more than..',
    'rule_trigger_destination_balance_gte_choice'         => 'Destination account balance is more than or equal to..',
    'rule_trigger_destination_balance_is_choice'          => 'Destination account balance is exactly..',
    'rule_trigger_destination_balance_lt_choice'          => 'Destination account balance is less than..',
    'rule_trigger_destination_balance_lte_choice'         => 'Destination account balance is less than or equal to..',

    'rule_trigger_source_balance_gt_choice'               => 'Source account balance is more than..',
    'rule_trigger_source_balance_gte_choice'              => 'Source account balance is more than or equal to..',
    'rule_trigger_source_balance_is_choice'               => 'Source account balance is exactly..',
    'rule_trigger_source_balance_lt_choice'               => 'Source account balance is less than..',
    'rule_trigger_source_balance_lte_choice'              => 'Source account balance is less than or equal to..',

    'rule_trigger_destination_balance_gt'                 => 'Destination account balance is more than :trigger_value',
    'rule_trigger_destination_balance_gte'                => 'Destination account balance is more than or equal to :trigger_value',
    'rule_trigger_destination_balance_is'                 => 'Destination account balance is exactly :trigger_value',
    'rule_trigger_destination_balance_lt'                 => 'Destination account balance is less than :trigger_value',
    'rule_trigger_destination_balance_lte'                => 'Destination account balance is less than or equal to :trigger_value',

    'rule_trigger_source_balance_gt'                      => 'Source account balance is more than :trigger_value',
    'rule_trigger_source_balance_gte'                     => 'Source account balance is more than or equal to :trigger_value',
    'rule_trigger_source_balance_is'                      => 'Source account balance is exactly :trigger_value',
    'rule_trigger_source_balance_lt'                      => 'Source account balance is less than :trigger_value',
    'rule_trigger_source_balance_lte'                     => 'Source account balance is less than or equal to :trigger_value',

    // NOT
    'rule_trigger_not_destination_balance_gt'             => 'Destination account balance is less than or equal to :trigger_value',
    'rule_trigger_not_destination_balance_gte'            => 'Destination account balance is less than :trigger_value',
    'rule_trigger_not_destination_balance_is'             => 'Destination account balance is not :trigger_value',
    'rule_trigger_not_destination_balance_lt'             => 'Destination account balance is more than or equal to :trigger_value',
    'rule_trigger_not_destination_balance_lte'            => 'Destination account balance is more than :trigger_value',

    'rule_trigger_not_source_balance_gt'                  => 'Source account balance is less than or equal to :trigger_value',
    'rule_trigger_not_source_balance_gte'                 => 'Source account balance is less than :trigger_value',
    'rule_trigger_not_source_balance_is'                  => 'Source account balance is not :trigger_value',
    'rule_trigger_not_source_balance_lt'                  => 'Source account balance is more than or equal to :trigger_value',
    'rule_trigger_not_source_balance_lte'                 => 'Source account balance is more than :trigger_value',

    // actions
    // set, clear, add, remove, append/prepend
    'rule_action_delete_transaction_choice'               => 'حذف تراکنش(!)
',
    'rule_action_delete_transaction'                      => 'حذف تراکنش(!)
',
    'rule_action_set_category'                            => 'دسته را روی ":action_value" تنظیم کنید
',
    'rule_action_clear_category'                          => 'دسته بندی را پاک کنید
',
    'rule_action_set_budget'                              => 'تنظیم بودجه روی ":action_value"
',
    'rule_action_clear_budget'                            => 'بودجه روشن
',
    'rule_action_add_tag'                                 => 'اضافه کردن برچسب ":action_value"
',
    'rule_action_remove_tag'                              => 'حذف برچسب ":action_value"
',
    'rule_action_remove_all_tags'                         => 'تمام برچسب ها را حذف کنید
',
    'rule_action_set_description'                         => 'شرح را روی ":action_value" تنظیم کنید
',
    'rule_action_append_description'                      => 'اضافه کردن توضیحات با ":action_value"
',
    'rule_action_prepend_description'                     => 'آماده کردن توضیحات با ":action_value"
',
    'rule_action_set_category_choice'                     => 'دسته بندی را روی .. تنظیم کنید
',
    'rule_action_clear_category_choice'                   => 'هر دسته ای را پاک کنید
',
    'rule_action_set_budget_choice'                       => 'تنظیم بودجه به ..
',
    'rule_action_clear_budget_choice'                     => 'هر بودجه ای را پاک کنید
',
    'rule_action_add_tag_choice'                          => 'برچسب اضافه کنید ..
',
    'rule_action_remove_tag_choice'                       => 'حذف برچسب..
',
    'rule_action_remove_all_tags_choice'                  => 'تمام برچسب ها را حذف کنید
',
    'rule_action_set_description_choice'                  => 'تنظیم توضیحات روی ..
',
    'rule_action_update_piggy_choice'                     => 'افزودن / حذف مبلغ تراکنش درصندوق پس‌انداز





',
    'rule_action_update_piggy'                            => 'افزودن/حذف مبلغ تراکنش درصندوق پس‌انداز ":action_value"






',
    'rule_action_append_description_choice'               => 'ضمیمه توضیحات با ..
',
    'rule_action_prepend_description_choice'              => 'آماده کردن توضیحات با ..
',
    'rule_action_set_source_account_choice'               => 'تنظیم حساب منبع روی ..
',
    'rule_action_set_source_account'                      => 'حساب منبع را روی :action_value تنظیم کنید
',
    'rule_action_set_destination_account_choice'          => 'حساب مقصد را روی .. تنظیم کنید.
',
    'rule_action_set_destination_account'                 => 'حساب مقصد را روی :action_value تنظیم کنید
',
    'rule_action_append_notes_choice'                     => 'ضمیمه یادداشت ها با ..
',
    'rule_action_append_notes'                            => 'ضمیمه یادداشت ها با ":action_value"
',
    'rule_action_prepend_notes_choice'                    => 'یادداشت برداری با ..
',
    'rule_action_prepend_notes'                           => 'یادداشت‌ها را با ":action_value" آماده کنید
',
    'rule_action_clear_notes_choice'                      => 'هر یادداشتی را حذف کنید
',
    'rule_action_clear_notes'                             => 'هر یادداشتی را حذف کنید
',
    'rule_action_set_notes_choice'                        => 'تنظیم یادداشت ها به ..
',
    'rule_action_link_to_bill_choice'                     => 'Link to a subscription ..',
    'rule_action_link_to_bill'                            => 'Link to subscription ":action_value"',
    'rule_action_switch_accounts_choice'                  => 'تغییر حساب مبدا و مقصد (فقط نقل و انتقالات!)
',
    'rule_action_switch_accounts'                         => 'منبع و مقصد را تغییر دهید
',
    'rule_action_set_notes'                               => 'یادداشت ها را روی ":action_value" تنظیم کنید
',
    'rule_action_convert_deposit_choice'                  => 'تبدیل معامله به سپرده
',
    'rule_action_convert_deposit'                         => 'تبدیل تراکنش به سپرده از ":action_value"
',
    'rule_action_convert_withdrawal_choice'               => 'تراکنش را به برداشت تبدیل کنید
',
    'rule_action_convert_withdrawal'                      => 'تبدیل تراکنش به برداشت به ":action_value"
',
    'rule_action_convert_transfer_choice'                 => 'تبدیل معامله به انتقال
',
    'rule_action_convert_transfer'                        => 'تبدیل تراکنش به انتقال با ":action_value"
',
    'rule_action_append_descr_to_notes_choice'            => 'توضیحات را به یادداشت های معامله الحاق کنید
',
    'rule_action_append_notes_to_descr_choice'            => 'یادداشت های معامله را به توضیحات اضافه کنید
',
    'rule_action_move_descr_to_notes_choice'              => 'یادداشت های تراکنش فعلی را با توضیحات جایگزین کنید
',
    'rule_action_move_notes_to_descr_choice'              => 'توضیحات فعلی را با یادداشت های تراکنش جایگزین کنید
',
    'rule_action_append_descr_to_notes'                   => 'توضیحات را به یادداشت ها اضافه کنید
',
    'rule_action_append_notes_to_descr'                   => 'یادداشت ها را به توضیحات اضافه کنید
',
    'rule_action_move_descr_to_notes'                     => 'یادداشت ها را با توضیحات جایگزین کنید
',
    'rule_action_move_notes_to_descr'                     => 'توضیحات را با یادداشت جایگزین کنید
',
    'rule_action_set_amount_choice'                       => 'Set amount to ..',
    'rule_action_set_amount'                              => 'Set amount to ":action_value"',
    'rule_action_set_destination_to_cash_choice'          => 'تنظیم حساب مقصد روی (نقد)
',
    'rule_action_set_source_to_cash_choice'               => 'تنظیم حساب منبع روی (نقد)
',
    'rulegroup_for_bills_title'                           => 'Rule group for subscriptions',
    'rulegroup_for_bills_description'                     => 'A special rule group for all the rules that involve subscriptions.',
    'rule_for_bill_title'                                 => 'Auto-generated rule for subscription ":name"',
    'rule_for_bill_description'                           => 'This rule is auto-generated to try to match subscription ":name".',
    'create_rule_for_bill'                                => 'Create a new rule for subscription ":name"',
    'create_rule_for_bill_txt'                            => 'You have just created a new subscription called ":name", congratulations! Firefly III can automagically match new withdrawals to this subscription. For example, whenever you pay your rent, the subscription "rent" will be linked to the expense. This way, Firefly III can accurately show you which subscriptions are due and which ones aren\'t. In order to do so, a new rule must be created. Firefly III has filled in some sensible defaults for you. Please make sure these are correct. If these values are correct, Firefly III will automatically link the correct withdrawal to the correct subscription. Please check out the triggers to see if they are correct, and add some if they\'re wrong.',
    'new_rule_for_bill_title'                             => 'Rule for subscription ":name"',
    'new_rule_for_bill_description'                       => 'This rule marks transactions for subscription ":name".',

    'new_rule_for_journal_title'                          => 'قانون مبتنی بر معامله ":description"
',
    'new_rule_for_journal_description'                    => 'این قانون بر اساس تراکنش ":description" است. تراکنش هایی که دقیقاً مشابه هستند مطابقت خواهد داشت.
',

    // tags
    'store_new_tag'                                       => 'ذخیره برچسب جدید
',
    'update_tag'                                          => 'به روز رسانی برچسب
',
    'no_location_set'                                     => 'مکان تنظیم نشده است.
',
    'meta_data'                                           => 'داده های متا
',
    'location'                                            => 'موقعیت مکانی',
    'location_first_split'                                => 'مکان این تراکنش را می توان در اولین تقسیم این تراکنش تنظیم کرد.
',
    'without_date'                                        => 'بدون تاریخ',
    'result'                                              => 'نتیجه',
    'sums_apply_to_range'                                 => 'همه مبالغ در محدوده انتخاب شده اعمال می شود
',
    'mapbox_api_key'                                      => 'برای استفاده از نقشه، یک کلید API از <a href="https://www.mapbox.com/">Mapbox</a> دریافت کنید. فایل <code>.env</code> خود را باز کنید و این کد را بعد از <code>MAPBOX_API_KEY=</code> وارد کنید.
',
    'press_object_location'                               => 'برای تنظیم مکان شی، کلیک راست کنید یا چند لحظه فشار دهید.
',
    'click_tap_location'                                  => 'برای افزودن مکان روی نقشه کلیک کنید یا ضربه بزنید
',
    'clear_location'                                      => 'پاک کردن مکان
',
    'delete_all_selected_tags'                            => 'تمام برچسب‌های انتخاب شده را حذف کنید
',
    'select_tags_to_delete'                               => 'فراموش نکنید که برخی از برچسب‌ها را انتخاب کنید.
',
    'deleted_x_tags'                                      => 'تگ :count حذف شد.|برچسب :count حذف شد.
',
    'create_rule_from_transaction'                        => 'ایجاد قانون بر اساس معامله
',
    'create_recurring_from_transaction'                   => 'ایجاد تراکنش تکراری بر اساس تراکنش
',

    // preferences
    'test_notifications_buttons'                          => 'To test your configuration, use the buttons below. Please note that the buttons have no spam control.',
    'dark_mode_option_browser'                            => 'بگذارید مرورگرتان تصمیم بگیرد.

',
    'dark_mode_option_light'                              => 'همواره روشن',
    'dark_mode_option_dark'                               => 'همواره تاریک',
    'equal_to_language'                                   => '(برابر با زبان)
',
    'dark_mode_preference'                                => 'حالت تاریک',
    'dark_mode_preference_help'                           => 'به Firefly III بگویید چه زمانی از حالت تاریک استفاده کند.
',
    'pref_home_screen_accounts'                           => 'حساب‌های صفحه اصلی
',
    'pref_home_screen_accounts_help'                      => 'کدام حساب‌ها باید در صفحه اصلی نمایش داده شوند؟
',
    'pref_view_range'                                     => 'وسعت دید
',
    'pref_view_range_help'                                => 'برخی از نمودارها به طور خودکار در دوره ها گروه بندی می شوند. بودجه های شما نیز در دوره ها گروه بندی می شوند. چه دوره ای را ترجیح می دهید؟
',
    'pref_1D'                                             => 'یک روز',
    'pref_1W'                                             => 'یک هفته',
    'pref_1M'                                             => 'یک ماه',
    'pref_3M'                                             => 'سه ماه (چهارم)
',
    'pref_6M'                                             => 'شش ماه',
    'pref_1Y'                                             => 'یک سال',
    'pref_last365'                                        => 'سال گذشته',
    'pref_last90'                                         => '۹۰ روز گذشته',
    'pref_last30'                                         => '۳۰ روز گذشته',
    'pref_last7'                                          => '7 روز گذشته',
    'pref_YTD'                                            => 'سال تا به امروز',
    'pref_QTD'                                            => 'ربع تا به امروز
',
    'pref_MTD'                                            => 'ماه تا امروز

',
    'pref_languages'                                      => 'زبان‌ها',
    'pref_locale'                                         => 'تنظیمات محلی',
    'pref_languages_help'                                 => 'Firefly III از چندین زبان پشتیبانی می کند. کدام یک را ترجیح می دهی؟
',
    'pref_locale_help'                                    => 'Firefly III به شما امکان می دهد تنظیمات محلی دیگری مانند نحوه قالب بندی ارزها، اعداد و تاریخ ها را تنظیم کنید. ورودی های این لیست ممکن است توسط سیستم شما پشتیبانی نشود. Firefly III تنظیمات تاریخ صحیحی را برای هر محلی ندارد. برای بهبود با من تماس بگیرید
',
    'pref_locale_exception'                               => 'Firefly III can only change how you view dates. Entering a date will always be formatted according to your browser settings, not Firefly III settings. If your browser is set to "English (US)" you must always enter the date formatted as mm/dd/yyyy. No setting in Firefly III can change that.',
    'pref_locale_no_demo'                                 => 'این ویژگی برای کاربر آزمایشی کار نخواهد کرد.
',
    'pref_convert_to_primary'                             => 'Display amounts in your primary currency',
    'pref_convert_to_primary_help'                        => 'This option will make Firefly III try to display and show your primary currency in as many places as possible, converting amounts where necessary. This sacrifices accuracy for ease of use, because conversion is not always exact. Please verify that Firefly III has the necessary conversion rates on the "exchange rates"-page.',
    'pref_convert_primary_help'                           => 'Display primary amounts',
    'pref_custom_fiscal_year'                             => 'تنظیمات سال مالی
',
    'pref_custom_fiscal_year_label'                       => 'فعال شد',
    'pref_custom_fiscal_year_help'                        => 'در کشورهایی که از سال مالی غیر از 1 ژانویه تا 31 دسامبر استفاده می کنند، می توانید این مورد را روشن کنید و روزهای شروع / پایان سال مالی را مشخص کنید.
',
    'pref_fiscal_year_start_label'                        => 'تاریخ شروع سال مالی
',
    'pref_two_factor_auth'                                => 'Multi-factor authentication',
    'pref_two_factor_auth_help'                           => 'When you enable multi-factor authentication (also known as two-factor authentication), you add an extra layer of security to your account. You sign in with something you know (your password) and something you have (a verification code). Verification codes are generated by an application on your phone, such as Authy or Google Authenticator.',
    'pref_enable_two_factor_auth'                         => 'Enable multi-factor authentication',
    'pref_two_factor_auth_disabled'                       => 'Multi-factor authentication verification code removed and disabled',
    'pref_two_factor_auth_remove_it'                      => 'فراموش نکنید که حساب را از برنامه احراز هویت خود حذف کنید!
',
    'pref_two_factor_auth_code'                           => 'کد را تأیید کنید
',
    'pref_two_factor_auth_code_help'                      => 'Scan the QR code with an application on your phone such as Authy or Google Authenticator and enter the generated code. The QR code changes every time you visit this page. Make sure you use the most recent one.',
    'pref_two_factor_auth_reset_code'                     => 'کد تأیید را بازنشانی کنید
',
    'pref_two_factor_auth_disable_2fa'                    => 'Disable MFA',
    'pref_two_factor_qr_code'                             => 'QR code',
    '2fa_use_secret_instead'                              => 'اگر نمی توانید کد QR را اسکن کنید، به جای آن از رمز استفاده کنید: <code>:secret</code>.
',
    '2fa_backup_codes'                                    => 'این کدهای پشتیبان را برای دسترسی در صورت گم شدن دستگاه خود ذخیره کنید.
',
    '2fa_already_enabled'                                 => 'Multi-factor authentication verification is already enabled.',
    'wrong_mfa_code'                                      => 'این کد MFA معتبر نیست.
',
    'pref_save_settings'                                  => 'تنظیمات را ذخیره کن
',
    'saved_preferences'                                   => 'تنظیمات برگزیده ذخیره شد!
',
    'preferences_general'                                 => 'عمومی',
    'preferences_frontpage'                               => 'صفحه اصلی',
    'preferences_security'                                => 'امنیت',
    'preferences_layout'                                  => 'چیدمان',
    'preferences_notifications'                           => 'اعلان ها',
    'pref_home_show_deposits'                             => 'نشان دادن سپرده ها در صفحه اصلی
',
    'pref_home_show_deposits_info'                        => 'صفحه اصلی قبلاً حساب های هزینه شما را نشان می دهد. آیا باید حساب های درآمد شما را نیز نشان دهد؟
',
    'pref_home_do_show_deposits'                          => 'بله، به آنها نشان دهید
',
    'successful_count'                                    => 'که : شمارش موفق
',
    'list_page_size_title'                                => 'اندازه صفحه',
    'list_page_size_help'                                 => 'هر فهرستی از چیزها (حساب ها، تراکنش ها، و غیره) حداکثر این تعداد را در هر صفحه نشان می دهد.
',
    'list_page_size_label'                                => 'اندازه صفحه',
    'between_dates'                                       => ':start و :end',
    'pref_optional_fields_transaction'                    => 'فیلدهای اختیاری برای معاملات
',
    'pref_optional_fields_transaction_help'               => 'به طور پیش فرض همه فیلدها هنگام ایجاد تراکنش جدید (به دلیل درهم ریختگی) فعال نمی شوند. در زیر، اگر فکر می‌کنید می‌توانند برای شما مفید باشند، می‌توانید این فیلدها را فعال کنید. البته، هر فیلدی که غیرفعال است، اما قبلاً پر شده باشد، بدون توجه به تنظیمات قابل مشاهده خواهد بود.
',
    'optional_tj_date_fields'                             => 'فیلدهای تاریخ',
    'optional_tj_other_fields'                            => 'سایر زمینه ها
',
    'optional_tj_attachment_fields'                       => 'فیلدهای پیوست
',
    'pref_optional_tj_interest_date'                      => 'تاریخ بهره',
    'pref_optional_tj_book_date'                          => 'تاریخ کتاب',
    'pref_optional_tj_process_date'                       => 'تاریخ پردازش',
    'pref_optional_tj_due_date'                           => 'سررسید',
    'pref_optional_tj_payment_date'                       => 'تاریخ پرداخت',
    'pref_optional_tj_invoice_date'                       => 'تاریخ فاکتور',
    'pref_optional_tj_internal_reference'                 => 'مرجع داخلی
',
    'pref_optional_tj_notes'                              => 'یادداشت‌ها',
    'pref_optional_tj_attachments'                        => 'پیوست‌ها',
    'pref_optional_tj_external_url'                       => 'آدرس اینترنتی خارجی',
    'pref_optional_tj_location'                           => 'موقعیت مکانی',
    'pref_optional_tj_links'                              => 'لینک‌های تراکنش
',
    'optional_field_meta_dates'                           => 'تاریخ',
    'optional_field_meta_business'                        => 'کسب و کار',
    'optional_field_attachments'                          => 'پیوست‌ها',
    'optional_field_meta_data'                            => 'داده‌های اختیاری متا
',
    'external_url'                                        => 'آدرس اینترنتی خارجی',
    'pref_notification_login_failure'                     => 'Login failure',
    'pref_notification_bill_reminder'                     => 'Reminder about expiring subscriptions',
    'pref_notification_new_access_token'                  => 'هشدار هنگام ایجاد یک نشانه دسترسی API جدید
',
    'pref_notification_transaction_creation'              => 'هنگامی که یک تراکنش به صورت خودکار ایجاد می شود، هشدار دریافت کنید.

',
    'pref_notification_user_login'                        => 'زمانی که از یک مکان جدید وارد سیستم می شوید، هشدار دریافت کنید.

',
    'pref_notification_rule_action_failures'              => 'Alert when rule actions fail to execute (not over email)',
    'pref_notification_new_password'                      => 'Your password changed',
    'pref_notification_enabled_mfa'                       => 'Multi factor authentication is enabled',
    'pref_notification_disabled_mfa'                      => 'Multi factor authentication is disabled',
    'pref_notification_few_left_mfa'                      => 'You have just a few backup codes left',
    'pref_notification_no_left_mfa'                       => 'You have no backup codes left',
    'pref_notification_many_failed_mfa'                   => 'The multi factor authentication check keeps failing',
    'pref_notification_new_backup_codes'                  => 'New backup codes have been generated',
    'pref_notifications'                                  => 'اعلان‌ها',
    'pref_notifications_help'                             => 'مشخص کنید که آیا این اعلان‌هایی هستند که می‌خواهید دریافت کنید. برخی از اعلان‌ها ممکن است حاوی اطلاعات مالی حساس باشند.
',
    'pref_notifications_settings'                         => 'Notifications settings',
    'pref_notifications_settings_help'                    => 'Use these settings to configure your notification channels. Please note that notifications will be sent to ALL channels. Please save your settings FIRST.',
    'slack_url_label'                                     => 'آدرس وب‌هوک ورودی اسلک





',
    'discord_url_label'                                   => 'Discord webhook URL',

    // exchange rates
    'menu_exchange_rates_index'                           => 'Exchange rates',
    'header_exchange_rates'                               => 'Exchange rates',
    'exchange_rates_intro'                                => 'Firefly III supports downloading and using exchange rates. Read more about this in <a href="https://docs.firefly-iii.org/explanation/financial-concepts/exchange-rates/">the documentation</a>.',
    'exchange_rates_from_to'                              => 'Between {{from}} and {{to}} (and the other way around)',
    'header_exchange_rates_rates'                         => 'Exchange rates',
    'exchange_rates_intro_rates'                          => 'Firefly III uses the following exchange rates. The inverse is automatically calculated when it is not provided. If no exchange rate exists for the date of the transaction, Firefly III will go back in time to find one. If none are present, the rate "1" will be used.',
    'header_exchange_rates_table'                         => 'Table with exchange rates',
    'help_rate_form'                                      => 'On this day, how many {{to}} will you get for one {{from}}?',
    'save_new_rate'                                       => 'Save new rate',
    'add_new_rate'                                        => 'Add a new exchange rate',
    'not_enough_currencies'                               => 'Not enough currencies',
    'not_enough_currencies_enabled'                       => 'If you have just one currency enabled, there is no need to add exchange rates.',

    // Financial administrations
    'administration_index'                                => 'مدیریت مالی
',
    'administrations_breadcrumb'                          => 'Financial administrations',
    'administrations_page_title'                          => 'Financial administrations',
    'administrations_index_menu'                          => 'Financial administrations',
    'administrations_page_sub_title'                      => 'Overview',
    'create_administration'                               => 'Create new administration',
    'administration_owner'                                => 'Administration owner: {{email}}',
    'administration_you'                                  => 'Your role: {{role}}',
    'other_users_in_admin'                                => 'Other users in this administration',
    'administrations_create_breadcrumb'                   => 'Create new financial administration',
    'administrations_page_create_sub_title'               => 'Create new financial administration',
    'basic_administration_information'                    => 'Basic administration information',
    'new_administration_created'                          => 'New financial administration "{{title}}" has been created',
    'edit_administration_breadcrumb'                      => 'Edit financial administration ":title"',
    'administrations_page_edit_sub_title'                 => 'Edit financial administration ":title"',
    'administrations_page_edit_sub_title_js'              => 'Edit financial administration "{{title}}"',
    'temp_administrations_introduction'                   => 'Firefly III will soon get the ability to manage multiple financial administrations. Right now, you only have the one. You can set the title of this administration and its primary currency. This replaces the previous setting where you would set your "default currency". This setting is now tied to the financial administration and can be different per administration.',
    'temp_administrations_introduction_edit'              => 'Currently, you can only set the "primary currency" of the default financial administration. This replaces the "default currency" setting. This setting is now tied to the financial administration and can be different per administration.',
    'administration_currency_form_help'                   => 'It may take a long time for the page to load if you change the primary currency because transaction may need to be converted to your (new) primary currency.',
    'flash_administration_updated'                        => 'Administration ":title" has been updated',
    'flash_administration_created'                        => 'Administration ":title" has been created',
    'flash_administration_deleted'                        => 'Administration ":title" has been deleted',

    // roles
    'administration_role_owner'                           => 'Owner',
    'administration_role_ro'                              => 'Read-only',
    'administration_role_mng_trx'                         => 'Manage transactions',
    'administration_role_mng_meta'                        => 'Manage classification and meta-data',
    'administration_role_mng_budgets'                     => 'Manage budgets',
    'administration_role_mng_piggies'                     => 'Manage piggy banks',
    'administration_role_mng_subscriptions'               => 'Manage subscriptions',
    'administration_role_mng_rules'                       => 'Manage rules',
    'administration_role_mng_recurring'                   => 'Manage recurring transactions',
    'administration_role_mng_webhooks'                    => 'Manage webhooks',
    'administration_role_mng_currencies'                  => 'Manage currencies',
    'administration_role_view_reports'                    => 'View reports',
    'administration_role_full'                            => 'Full access',
    'must_be_owner'                                       => 'You must be system owner to do this',

    // mfa
    'enable_mfa'                                          => 'Enable multi-factor authentication',
    'mfa_index_title'                                     => 'Multi-factor authentication',
    'mfa_index_intro'                                     => 'Firefly III supports multi-factor authentication (MFA). You can enable MFA for your account to add an extra layer of security. Applications like Authy, Google Authenticator and FreeOTP can be used to generate the codes you need to log in. Security keys are not supported by Firefly III but you can use a security key as a storage device for your MFA secret.',
    'mfa_index_enabled'                                   => 'Multi-factor authentication is enabled for your account.',
    'mfa_index_disabled'                                  => 'Multi-factor authentication is not enabled for your account.',
    'mfa_index_owner'                                     => 'The owner of this instance will always be able to disable multi-factor authentication for your account.',
    'current_password_confirm_mfa'                        => 'Enter your current password',
    'mfa_warning_code_changes'                            => 'You may get a MFA dialog after you entered your password and a MFA code. In that case, please wait for your application to generate a new MFA code, and do not recycle the one you just used.',
    'mfa_already_disabled'                                => 'Multi-factor authentication is not enabled, so you cannot disable it.',
    'disable_mfa_page'                                    => 'Disable multi-factor authentication',
    'disable_mfa_intro'                                   => 'You can disable multi-factor authentication. To do so, please enter your password and a multi-factor authentication code. If you want to disable multi-factor authentication because you have lost access to your code generator, <a href="https://docs.firefly-iii.org/references/faq/firefly-iii/using/#i-lost-my-2fa-token-generator-or-2fa-has-stopped-working">please refer to the documentation instead</a>.',
    'pref_disable_mfa'                                    => 'Disable multi-factor authentication',
    'mfa_not_enabled'                                     => 'Multi-factor authentication is not enabled.',
    'mfa_backup_codes_intro'                              => 'Firefly III can generate backup codes for you. These codes can be used to log in when you cannot use your code generator. You can generate a new set of codes at any time. If you generate a new set, the old set will be invalidated.',
    'mfa_backup_codes_quick'                              => 'If you are very fast coming from the setup page of multi-factor authentication, your app may not have generated a new code yet. Please know that MFA codes can only be used once. Make sure you use a different code from the previous one.',
    'mfa_backup_codes_title'                              => 'Multi-factor authentication backup codes',
    'mfa_backup_codes_post_title'                         => 'Multi-factor authentication backup codes',

    // profile:
    'manage_mfa_settings'                                 => 'Manage multi-factor authentication settings',
    'purge_data_title'                                    => 'پاکسازی داده‌ها از Firefly III





',
    'purge_data_expl'                                     => '«پاکسازی» به معنای «حذف آن چیزی است که قبلاً حذف شده است». در شرایط عادی، Firefly III هیچ چیزی را برای همیشه حذف نمی کند. فقط آن را پنهان می کند. دکمه زیر همه این رکوردهای قبلاً "حذف شده" را برای همیشه حذف می کند.
',
    'delete_stuff_header'                                 => 'داده ها را حذف و پاک کنید
',
    'purge_all_data'                                      => 'تمام رکوردهای حذف شده را پاک کنید
',
    'purge_data'                                          => 'پاک کردن داده ها
',
    'purged_all_records'                                  => 'تمام رکوردهای حذف شده پاک شده است.
',
    'delete_data_title'                                   => 'حذف داده ها از Firefly III
',
    'permanent_delete_stuff'                              => 'می توانید موارد را از Firefly III حذف کنید. استفاده از دکمه های زیر به این معنی است که آیتم های شما از دید حذف می شوند و پنهان می شوند. هیچ دکمه لغوی برای این کار وجود ندارد، اما موارد ممکن است در پایگاه داده باقی بمانند که در صورت لزوم می توانید آنها را نجات دهید.
',
    'other_sessions_logged_out'                           => 'تمام جلسات دیگر شما از سیستم خارج شده اند.
',
    'delete_unused_accounts'                              => 'حذف اکانت های استفاده نشده لیست های تکمیل خودکار شما را پاک می کند.
',
    'delete_all_unused_accounts'                          => 'اکانت های استفاده نشده را حذف کنید
',
    'deleted_all_unused_accounts'                         => 'تمام حساب های استفاده نشده حذف می شوند
',
    'delete_all_budgets'                                  => 'تمام بودجه های خود را حذف کنید
',
    'delete_all_categories'                               => 'تمام دسته های خود را حذف کنید
',
    'delete_all_tags'                                     => 'تمام برچسب های خود را حذف کنید
',
    'delete_all_bills'                                    => 'Delete ALL your subscriptions',
    'delete_all_piggy_banks'                              => 'تمام قلک های خود را حذف کنید
',
    'delete_all_rules'                                    => 'تمام قوانین خود را حذف کنید
',
    'delete_all_recurring'                                => 'تمام تراکنش های تکراری خود را حذف کنید
',
    'delete_all_object_groups'                            => 'تمام گروه های شی خود را حذف کنید
',
    'delete_all_accounts'                                 => 'تمام حساب های خود را حذف کنید
',
    'delete_all_asset_accounts'                           => 'تمام حساب های دارایی خود را حذف کنید
',
    'delete_all_expense_accounts'                         => 'تمام حساب های هزینه خود را حذف کنید
',
    'delete_all_revenue_accounts'                         => 'تمام حساب های درآمد خود را حذف کنید
',
    'delete_all_liabilities'                              => 'تمام تعهدات خود را حذف کنید
',
    'delete_all_transactions'                             => 'تمام معاملات خود را حذف کنید
',
    'delete_all_withdrawals'                              => 'تمام برداشت های خود را حذف کنید
',
    'delete_all_deposits'                                 => 'تمام سپرده های خود را حذف کنید
',
    'delete_all_transfers'                                => 'تمام نقل و انتقالات خود را حذف کنید
',
    'also_delete_transactions'                            => 'حذف حساب ها همچنین تمام برداشت ها، سپرده ها و نقل و انتقالات مرتبط را حذف می کند!
',
    'deleted_all_budgets'                                 => 'تمام بودجه‌ها حذف شده است
',
    'deleted_all_categories'                              => 'همه دسته ها حذف شده اند
',
    'deleted_all_tags'                                    => 'همه تگ ها حذف شده اند
',
    'deleted_all_bills'                                   => 'All subscriptions have been deleted',
    'deleted_all_piggy_banks'                             => 'تمام صندوق پس‌اندازحذف شده اند

',
    'deleted_all_rules'                                   => 'همه قوانین و گروه های قوانین حذف شده‌اند
',
    'deleted_all_object_groups'                           => 'همه گروه ها حذف شدند
',
    'deleted_all_accounts'                                => 'تمام اکانت ها حذف شده اند
',
    'deleted_all_asset_accounts'                          => 'تمام اکانت ها حذف شده اند
',
    'deleted_all_expense_accounts'                        => 'تمام اکانت ها حذف شده اند
',
    'deleted_all_revenue_accounts'                        => 'تمام اکانت ها حذف شده اند
',
    'deleted_all_liabilities'                             => 'تمام بدهی‌ها حذف شده است
',
    'deleted_all_transactions'                            => 'تمام تراکنش‌ها حذف شده است
',
    'deleted_all_withdrawals'                             => 'تمام برداشت‌ها حذف شده است
',
    'deleted_all_deposits'                                => 'تمام سپرده‌ها حذف شده است
',
    'deleted_all_transfers'                               => 'تمام تراکنش‌ها حذف شده است
',
    'deleted_all_recurring'                               => 'تمام تراکنش‌ها حذف شده است
',
    'change_your_password'                                => 'رمز عبور خود را تغییر دهید',
    'delete_account'                                      => 'حذف حساب کاربری',
    'current_password'                                    => 'رمزعبور فعلی',
    'new_password'                                        => 'رمز عبور جدید',
    'new_password_again'                                  => 'ورود مجدد رمز عبور',
    'delete_your_account'                                 => 'حساب کاربری خود را حذف کنید',
    'delete_your_account_help'                            => 'با حذف حساب شما، هر حساب، تراکنش، <em>هر چیزی</em>ی که ممکن است در Firefly III ذخیره کرده باشید نیز حذف خواهد شد. خواهد رفت.
',
    'delete_your_account_password'                        => 'برای ادامه رمز عبور خود را وارد کنید.
',
    'password'                                            => 'رمز عبور',
    'are_you_sure'                                        => 'مطمئنی؟ شما نمی توانید این کار را لغو کنید.
',
    'are_you_sure_confirm'                                => 'Are you sure?',
    'delete_account_button'                               => 'حساب کاربری خود را حذف کنید',
    'invalid_current_password'                            => 'رمز عبور فعلی نامعتبر است!
',
    'password_changed'                                    => 'رمز عبور تغییر کرد!
',
    'should_change'                                       => 'ایده این است که رمز عبور خود را تغییر دهید.
',
    'invalid_password'                                    => 'رمزعبور اشتباه است!',
    'what_is_pw_security'                                 => '"تأیید امنیت رمز عبور" چیست؟
',
    'secure_pw_title'                                     => 'نحوه انتخاب رمز عبور امن
',
    'forgot_password_response'                            => 'متشکرم. اگر حسابی با این آدرس ایمیل وجود داشته باشد، دستورالعمل ها را در صندوق ورودی خود خواهید یافت.
',
    'secure_pw_history'                                   => 'هفته ای نمی گذرد که در اخبار سایتی را بخوانید که رمز عبور کاربرانش را گم کرده است. هکرها و سارقان از این پسوردها برای سرقت اطلاعات خصوصی شما استفاده می کنند. این اطلاعات ارزشمند است.
',
    'secure_pw_ff'                                        => 'آیا از رمز عبور یکسانی در سراسر اینترنت استفاده می کنید؟ اگر یک سایت رمز عبور شما را گم کند، هکرها به تمام داده های شما دسترسی خواهند داشت. Firefly III به شما متکی است تا یک رمز عبور قوی و منحصر به فرد برای محافظت از سوابق مالی خود انتخاب کنید.
',
    'secure_pw_check_box'                                 => 'To help you do that this application can check if the password you want to use has been stolen in the past. If this is the case, it advises you NOT to use that password.',
    'secure_pw_working_title'                             => 'چگونه کار می‌کند؟',
    'secure_pw_working'                                   => 'By checking the box, the application will send the first five characters of the SHA1 hash of your password to <a href="https://haveibeenpwned.com/API/v3#PwnedPasswords">the website of Troy Hunt</a> to see if it is on the list. This will stop you from using unsafe passwords as is recommended in the latest <a href="https://pages.nist.gov/800-63-3/sp800-63b.html">NIST Special Publication</a> on this subject.',
    'secure_pw_should'                                    => 'آیا باید جعبه را علامت بزنم؟
',
    'secure_pw_long_password'                             => 'بله. همیشه مطمئن شوید که رمز عبور شما امن است.
',
    'command_line_token'                                  => 'نشانه خط فرمان
',
    'explain_command_line_token'                          => 'برای انجام گزینه های خط فرمان، مانند صادرات داده، به این نشانه نیاز دارید. بدون آن، آن فرمان حساس کار نخواهد کرد. رمز خط فرمان خود را به اشتراک نگذارید. هیچ کس از شما این نشانه را نخواهد خواست، حتی من. اگر می ترسید این را از دست بدهید، یا زمانی که پارانوئید هستید، این توکن را با استفاده از دکمه بازسازی کنید.
',
    'regenerate_command_line_token'                       => 'رمز خط فرمان را بازسازی کنید
',
    'token_regenerated'                                   => 'یک نشانه خط فرمان جدید ایجاد شد
',
    'change_your_email'                                   => 'آدرس ایمیل خود را تغییر دهید
',
    'email_verification'                                  => 'An email message will be sent to your old AND new email address. For security purposes, you will not be able to log in until you verify your new email address. If you are unsure if your installation is capable of sending email, please do not use this feature. If you are an administrator, you can test this in the <a href="settings">settings</a>.',
    'email_changed_logout'                                => 'تا زمانی که آدرس ایمیل خود را تأیید نکنید، نمی توانید وارد شوید.
',
    'login_with_new_email'                                => 'اکنون می توانید با آدرس ایمیل جدید خود وارد شوید.
',
    'login_with_old_email'                                => 'اکنون می توانید دوباره با آدرس ایمیل قدیمی خود وارد شوید.
',
    'login_provider_local_only'                           => 'این عمل هنگام احراز هویت از طریق ":login_provider" در دسترس نیست.
',
    'external_user_mgt_disabled'                          => 'This action is not available when the application isn\'t responsible for user management or authentication handling.',
    'external_auth_disabled'                              => 'This action is not available when the application isn\'t responsible for authentication handling.',
    'delete_local_info_only'                              => "از آنجا که Firefly III مسئول مدیریت کاربر یا مدیریت احراز هویت نیست، این عملکرد فقط اطلاعات محلی Firefly III را حذف می کند.
",
    'oauth'                                               => 'اوتنتیکیشن باز (OAuth)





',
    'oauth_tokens'                                        => 'Remote access and tokens',
    'oauth_tokens_explain'                                => 'This installation of Firefly III can be reached at <code>:link</code>. This applies to you of course, but also to web applications, AI-agents and other remote programs. However, this access is only possible with the use of Personal Access Tokens or OAuth Clients. Both can be managed on this page. Beware that contrary to previous versions, Firefly III will no longer show you the client secret more than once.',
    'regenerate_secret'                                   => 'Regenerate secret',
    'profile_oauth_clients'                               => 'OAuth Clients and Applications',
    'explain_pats'                                        => 'Personal Access Tokens are long lived (with a maximum of 1 year) keys that allow direct and unlimited access to your Firefly III data. Tools like the Firefly III Data Importer and the Firefly III integration in Home Assistant use such tokens to connect to Firefly III and do their thing. When you create a token, it is only visible once. The token is also very long.',
    'profile_oauth_no_clients'                            => 'You have not created any OAuth clients or applications.',
    'profile_oauth_clients_external_auth'                 => 'Please note that if you\'re using an external authentication provider like Authelia, OAuth Clients will not work. You can use Personal Access Tokens only.',
    'profile_oauth_clients_explain'                       => 'An OAuth client can be used to connect "smart" applications to Firefly III: applications that are capable of redirecting you to your Firefly III, get your permission, and return you back. The Firefly III Data Importer is such an application. OAuth clients can be generated with or without a "secret". This secret is used to authenticate the client. Since not all clients are capable of storing the secret, so you have the option to generate a client without one.',
    'profile_oauth_clients_header'                        => 'مشتری‌ها',
    'profile_oauth_client_id'                             => 'شناسه مشتری',
    'profile_oauth_client_name'                           => 'نام',
    'profile_oauth_client_secret'                         => 'محرمانه',
    'profile_oauth_create_new_client'                     => 'مشتری جدید ایجاد کنید
',
    'profile_oauth_create_client'                         => 'مشتری ایجاد کنید
',
    'profile_oauth_edit_client'                           => 'ویرایش مشتری





',
    'profile_oauth_name_help'                             => 'چیزی که کاربران شما می شناسند و به آن اعتماد می کنند.
',
    'profile_oauth_redirect_url'                          => 'تغییر مسیر URL
',
    'profile_oauth_redirect_url_help'                     => 'URL بازگشت به تماس مجوز برنامه شما.
',
    'profile_authorized_apps'                             => 'برنامه های کاربردی مجاز
',
    'profile_authorized_clients'                          => 'مشتریان مجاز
',
    'profile_scopes'                                      => 'محدوده ها',
    'profile_revoke'                                      => 'لغو',
    'profile_oauth_client_secret_title'                   => 'راز مشتری',
    'profile_oauth_client_secret_expl'                    => 'در اینجا راز مشتری جدید شما وجود دارد. این تنها باری است که نمایش داده خواهد شد، پس آن را از دست ندهید! اکنون می توانید از این راز برای ایجاد درخواست های API استفاده کنید.
',
    'profile_personal_access_tokens'                      => 'توکن های دسترسی شخصی
',
    'profile_personal_access_token'                       => 'توکن های دسترسی شخصی
',
    'profile_oauth_confidential'                          => 'Keep a secret?',
    'profile_oauth_confidential_help'                     => 'Can the application you\'re using this for keep a secret? The Firefly III Data Importer CANNOT keep a secret, so UNCHECK the box. In other cases, it\'s up to you.',
    'profile_personal_access_token_explanation'           => 'این رمز دسترسی شخصی جدید شماست. این تنها باری است که نمایش داده خواهد شد، پس آن را از دست ندهید! اکنون می توانید از این نشانه برای ایجاد درخواست های API استفاده کنید.
',
    'profile_no_personal_access_token'                    => 'شما هیچ نشانه دسترسی شخصی ایجاد نکرده اید.
',
    'profile_create_new_token'                            => 'توکن جدید ایجاد کنید
',
    'profile_create_token'                                => 'ایجاد توکن',
    'profile_create'                                      => 'ایجاد',
    'profile_save_changes'                                => 'ذخیرهٔ تغییرات',
    'profile_whoops'                                      => 'اوه!',
    'profile_something_wrong'                             => 'مشکلی پیش آمده است!





',
    'profile_try_again'                                   => 'مشکلی پیش آمد. لطفا دوباره تلاش کنید.
',
    'amounts'                                             => 'مبالغ',
    'multi_account_warning_unknown'                       => 'بسته به نوع تراکنشی که ایجاد می‌کنید، حساب منبع و/یا مقصد تقسیم‌های بعدی ممکن است با هر آنچه در تقسیم اول تراکنش تعریف شده است لغو شود.
',
    'multi_account_warning_withdrawal'                    => 'به خاطر داشته باشید که حساب منبع انشعابات بعدی با هر آنچه در تقسیم اول برداشت تعریف شده است لغو می شود.
',
    'multi_account_warning_deposit'                       => 'به خاطر داشته باشید که حساب مقصد تقسیم های بعدی با هر آنچه در اولین تقسیم سپرده تعریف شده است لغو می شود.
',
    'multi_account_warning_transfer'                      => 'به خاطر داشته باشید که حساب مبدا + مقصد تقسیم‌های بعدی با هر آنچه در تقسیم اول انتقال تعریف شده است لغو می‌شود.
',

    // export data:
    'export_data_title'                                   => 'صادرات داده ها از Firefly III
',
    'export_data_menu'                                    => 'صادرات داده ها
',
    'export_data_bc'                                      => 'صادرات داده ها از Firefly III
',
    'export_data_main_title'                              => 'صادرات داده ها از Firefly III
',
    'export_data_expl'                                    => 'این پیوند به شما امکان می دهد تمام تراکنش ها + داده های متا را از Firefly III صادر کنید. لطفاً برای اطلاعات بیشتر در مورد فرآیند به راهنما (نماد بالا سمت راست (؟)) مراجعه کنید.
',
    'export_data_all_transactions'                        => 'صادرات تمام معاملات
',
    'export_data_advanced_expl'                           => 'اگر به نوع صادرات پیشرفته یا خاصی نیاز دارید، راهنمای نحوه استفاده از دستور کنسول <code>php artisan help firefly-iii:export-data</code> را بخوانید.
',

    // attachments
    'nr_of_attachments'                                   => 'یک پیوست|: تعداد پیوست ها
',
    'attachments'                                         => 'پیوست‌ها',
    'edit_attachment'                                     => 'ویرایش پیوست:name',
    'update_attachment'                                   => 'به روز رسانی پیوست',
    'delete_attachment'                                   => 'حذف شده پیوست :name',
    'attachment_deleted'                                  => 'حذف شده پیوست :name',
    'liabilities_deleted'                                 => 'بدهی حذف شده ":name"
',
    'attachment_updated'                                  => 'پیوست به‌روز شده ":name"
',
    'upload_max_file_size'                                => 'حداکثر اندازه فایل: :size
',
    'list_all_attachments'                                => 'لیست تمام پیوست ها
',

    // transaction index
    'is_reconciled_fields_dropped'                        => 'Because this transaction is reconciled, you will not be able to update the accounts, nor the amount(s) unless you remove the reconciliation flag.',
    'is_reconciled'                                       => 'Is reconciled',
    'title_expenses'                                      => 'هزینه ها',
    'title_withdrawal'                                    => 'هزینه ها',
    'title_revenue'                                       => 'درآمد',
    'title_deposit'                                       => 'درآمد / درآمد
',
    'title_transfer'                                      => 'نقل و انتقالات',
    'title_transfers'                                     => 'نقل و انتقالات',
    'submission_options'                                  => 'گزینه های ارسال
',
    'apply_rules_checkbox'                                => 'قوانین را اعمال کنید
',
    'fire_webhooks_checkbox'                              => 'وب‌هوک‌های آتشین





',
    'select_source_account'                               => 'Please select or type a valid source account name',
    'select_dest_account'                                 => 'Please select or type a valid destination account name',

    // convert stuff:
    'convert_is_already_type_Withdrawal'                  => 'این تراکنش قبلاً یک برداشت است
',
    'convert_is_already_type_Deposit'                     => 'این تراکنش قبلاً سپرده است
',
    'convert_is_already_type_Transfer'                    => 'این تراکنش در حال حاضر انتقال است
',
    'convert_to_Withdrawal'                               => '":description" را به یک برداشت تبدیل کنید
',
    'convert_to_Deposit'                                  => '":description" را به سپرده تبدیل کنید
',
    'convert_to_Transfer'                                 => '":description" را به انتقال تبدیل کنید
',
    'convert_options_WithdrawalDeposit'                   => 'تبدیل برداشت به سپرده
',
    'convert_options_WithdrawalTransfer'                  => 'تبدیل برداشت به انتقال
',
    'convert_options_DepositTransfer'                     => 'تبدیل سپرده به حواله
',
    'convert_options_DepositWithdrawal'                   => 'تبدیل سپرده به برداشت
',
    'convert_options_TransferWithdrawal'                  => 'تبدیل انتقال به برداشت
',
    'convert_options_TransferDeposit'                     => 'تبدیل انتقال به سپرده
',
    'convert_Withdrawal_to_deposit'                       => 'این برداشت را به سپرده تبدیل کنید
',
    'convert_Withdrawal_to_transfer'                      => 'این برداشت را به انتقال تبدیل کنید
',
    'convert_Deposit_to_withdrawal'                       => 'این سپرده را به برداشت تبدیل کنید
',
    'convert_Deposit_to_transfer'                         => 'این سپرده را به حواله تبدیل کنید
',
    'convert_Transfer_to_deposit'                         => 'این انتقال را به سپرده تبدیل کنید
',
    'convert_Transfer_to_withdrawal'                      => 'این انتقال را به برداشت تبدیل کنید
',
    'convert_please_set_revenue_source'                   => 'لطفاً حساب درآمدی را انتخاب کنید که پول از آنجا می آید.
',
    'convert_please_set_asset_destination'                => 'لطفاً حساب دارایی را انتخاب کنید که پول به آنجا می رود.
',
    'convert_please_set_expense_destination'              => 'لطفاً حساب هزینه را انتخاب کنید که پول به آنجا می رود.
',
    'convert_please_set_asset_source'                     => 'لطفاً حساب دارایی را انتخاب کنید که پول از آنجا می آید.
',
    'convert_expl_w_d'                                    => 'هنگام تبدیل از برداشت به سپرده، پول به جای برداشت از آن، به حساب مقصد نمایش داده شده واریز می شود.|در هنگام تبدیل از برداشت به سپرده، به جای اینکه پول به حساب مقصد نمایش داده شده واریز شود. از آنها خارج می شود.
',
    'convert_expl_w_t'                                    => 'هنگام تبدیل برداشت به حواله، پول به جای اینکه در حساب هزینه اصلی هزینه شود، از حساب منبع به حساب دارایی یا بدهی دیگر منتقل می شود. منبع به جای اینکه در حساب های هزینه اصلی هزینه شود، در سایر حساب های دارایی یا بدهی حساب می شود.
',
    'convert_expl_d_w'                                    => 'هنگام تبدیل سپرده به برداشت، پول به جای واریز از حساب منبع نمایش داده شده برداشت می شود.|در هنگام تبدیل سپرده به برداشت، به جای واریز، از حساب های منبع نمایش داده شده برداشت می شود. به آنها.
',
    'convert_expl_d_t'                                    => 'وقتی سپرده ای را به حواله تبدیل می کنید، پول از هر حساب دارایی یا بدهی شما به حساب مقصد فهرست شده واریز می شود. حساب های دارایی یا بدهی شما
',
    'convert_expl_t_w'                                    => 'وقتی حواله ای را به برداشت تبدیل می کنید، پول به جای اینکه انتقال داده شود، در حساب مقصدی که در اینجا تعیین کرده اید، خرج می شود. ، به جای انتقال به دور.
',
    'convert_expl_t_d'                                    => 'وقتی حواله ای را به سپرده تبدیل می کنید، پول به جای واریز به حساب مقصدی که در اینجا می بینید، واریز می شود. در اینجا، به جای اینکه به آنها منتقل شود.
',
    'convert_select_sources'                              => 'برای تکمیل تبدیل، لطفاً حساب منبع جدید را در زیر تنظیم کنید.|برای تکمیل تبدیل، لطفاً حساب‌های منبع جدید را در زیر تنظیم کنید.
',
    'convert_select_destinations'                         => 'برای تکمیل تبدیل، لطفاً حساب مقصد جدید را در زیر انتخاب کنید.|برای تکمیل تبدیل، لطفاً حساب‌های مقصد جدید را در زیر انتخاب کنید.
',
    'converted_to_Withdrawal'                             => 'تراکنش به برداشت تبدیل شده است
',
    'converted_to_Deposit'                                => 'معامله به سپرده تبدیل شده است
',
    'converted_to_Transfer'                               => 'تراکنش به انتقال تبدیل شده است
',
    'invalid_convert_selection'                           => 'حسابی که انتخاب کرده اید قبلاً در این تراکنش استفاده شده است یا وجود ندارد.
',
    'source_or_dest_invalid'                              => 'نمی توان جزئیات معامله صحیح را پیدا کرد. تبدیل امکان پذیر نیست.
',
    'convert_to_withdrawal'                               => 'تبدیل به یک برداشت
',
    'convert_to_deposit'                                  => 'تبدیل به سپرده
',
    'convert_to_transfer'                                 => 'تبدیل به انتقال
',

    // create new stuff:
    'create_new_withdrawal'                               => 'برداشت جدید ایجاد کنید
',
    'create_new_deposit'                                  => 'ایجاد سپرده جدید
',
    'create_new_transfer'                                 => 'انتقال جدید ایجاد کنید
',
    'create_new_asset'                                    => 'ایجاد حساب دارایی جدید
',
    'create_new_liabilities'                              => 'مسئولیت جدید ایجاد کنید
',
    'create_new_expense'                                  => 'ایجاد حساب هزینه جدید
',
    'create_new_revenue'                                  => 'ایجاد حساب درآمد جدید
',
    'create_new_piggy_bank'                               => 'قلک جدید ایجاد کنید
',
    'create_new_bill'                                     => 'Create new subscription',
    'create_new_subscription'                             => 'اشتراک جدید ایجاد کنید
',
    'create_new_rule'                                     => 'قانون جدید ایجاد کنید
',

    // currencies:
    'create_currency'                                     => 'یک ارز جدید ایجاد کنید
',
    'store_currency'                                      => 'ذخیره ارز جدید
',
    'update_currency'                                     => 'ارز را به روز کنید
',
    'new_default_currency'                                => '":name" اکنون ارز پیش فرض است.
',
    'default_currency_failed'                             => 'نمی‌توان «:name» را به ارز پیش‌فرض تبدیل کرد. لطفا گزارش ها را بررسی کنید.
',
    'cannot_delete_currency'                              => 'نمی توان :name را حذف کرد زیرا هنوز در حال استفاده است.
',
    'cannot_delete_fallback_currency'                     => ':name ارز بازگشتی سیستم است و قابل حذف نیست.
',
    'cannot_disable_currency_journals'                    => 'نمی توان :name را غیرفعال کرد زیرا تراکنش‌ها همچنان از آن استفاده می کنند.
',
    'cannot_disable_currency_last_left'                   => 'نمی‌توان :name را غیرفعال کرد زیرا آخرین ارز فعال شده است.
',
    'cannot_disable_currency_account_meta'                => 'نمی توان :name را غیرفعال کرد زیرا در حساب‌های دارایی استفاده می‌شود.
',
    'cannot_disable_currency_bills'                       => 'Cannot disable :name because it is used in subscriptions.',
    'cannot_disable_currency_recurring'                   => 'نمی توان :name را غیرفعال کرد زیرا در تراکنش های تکراری استفاده می شود.
',
    'cannot_disable_currency_available_budgets'           => 'نمی توان :name را غیرفعال کرد زیرا در بودجه های موجود استفاده می شود.
',
    'cannot_disable_currency_budget_limits'               => 'نمی توان :name را غیرفعال کرد زیرا در محدودیت های بودجه استفاده می شود.
',
    'cannot_disable_currency_current_default'             => 'نمی توان :name را غیرفعال کرد زیرا ارز پیش فرض فعلی است.
',
    'cannot_disable_currency_system_fallback'             => 'نمی توان :name را غیرفعال کرد زیرا ارز پیش فرض سیستم است.
',
    'disable_EUR_side_effects'                            => 'یورو ارز برگشتی اضطراری سیستم است. غیرفعال کردن آن ممکن است عوارض جانبی ناخواسته ای داشته باشد و ممکن است گارانتی شما را باطل کند.
',
    'deleted_currency'                                    => 'واحد پول: نام حذف شد
',
    'created_currency'                                    => 'واحد پول: نام ایجاد شد
',
    'could_not_store_currency'                            => 'ارز جدید ذخیره نشد.
',
    'updated_currency'                                    => 'واحد پول: نام به روز شد
',
    'ask_site_owner'                                      => 'لطفاً از مالک بخواهید که ارزها را اضافه، حذف یا ویرایش کند.
',
    'currencies_intro'                                    => 'Firefly III از ارزهای مختلفی پشتیبانی می کند که می توانید آنها را در اینجا تنظیم و فعال کنید.
',
    'currencies_switch_default'                           => 'You can switch the primary currency for your current administration on the "Financial administrations"-page.',
    'make_default_currency'                               => 'پیش فرض را بسازید
',
    'default_currency'                                    => 'پیش فرض',
    'primary_currency_button'                             => 'primary',
    'currency_is_disabled'                                => 'غیرفعال شده',
    'enable_currency'                                     => 'فعال‌سازی',
    'disable_currency'                                    => 'غیرفعال',
    'currencies_default_disabled'                         => 'اکثر این ارزها به طور پیش فرض غیرفعال هستند. برای استفاده از آنها، ابتدا باید آنها را فعال کنید.
',
    'currency_is_now_enabled'                             => 'واحد پول ":name" فعال شده است
',
    'could_not_enable_currency'                           => 'ارز ":name" فعال نشد. لطفا گزارش ها را بررسی کنید.
',
    'currency_is_now_disabled'                            => 'واحد پول ":name" غیرفعال شده است
',
    'could_not_disable_currency'                          => 'ارز ":name" غیرفعال نشد. شاید هنوز در حال استفاده است؟
',

    // forms:
    'mandatoryFields'                                     => 'فیلد‌های اجباری
',
    'optionalFields'                                      => 'فیلدهای اختیاری',
    'options'                                             => 'گزینه‌ها',

    // budgets:
    'spent_this_period'                                   => 'Spent on this budget',
    'spent_this_period_per_day'                           => 'Spent on this budget per day (:days day(s))',
    'spent_in_budget_limit_outside_period'                => 'Spent on this budget, but NOT in this period',
    'spent_outside_chart'                                 => '(outside of pre-set budget amounts)',
    'spent_in_budget_limit_outside_period_per_day'        => 'Spent on this budget, but NOT in this period per day (:days day(s))',
    'left_in_budget_limit_overview'                       => 'Left in this budget',
    'left_in_budget_limit_per_day'                        => 'Left in this budget per day (:days day(s))',
    'nothing_left_in_budget'                              => 'The budget is now empty',
    'daily_budgets'                                       => 'بودجه‌های روزانه
',
    'weekly_budgets'                                      => 'بودجه‌های هفتگی
',
    'monthly_budgets'                                     => 'بودجه‌های ماهانه
',
    'quarterly_budgets'                                   => 'بودجه های فصلی
',
    'half_year_budgets'                                   => 'بودجه های شش ماهه
',
    'yearly_budgets'                                      => 'بودجه های سالانه
',
    'other_budgets'                                       => 'بودجه های زمان بندی شده سفارشی
',
    'budget_limit_not_in_range'                           => 'این مبلغ از :start تا :end:
',
    'totals'                                              => 'Totals',
    'total_available_budget'                              => 'کل بودجه موجود (بین :شروع و :پایان)
',
    'total_available_budget_in_currency'                  => 'مجموع بودجه موجود بر حسب: ارز
',
    'see_below'                                           => 'زیر را ببینید
',
    'create_new_budget'                                   => 'یک بودجه جدید ایجاد کنید
',
    'store_new_budget'                                    => 'ذخیره بودجه جدید
',
    'stored_new_budget'                                   => 'بودجه جدید ذخیره شده ":name"
',
    'available_between'                                   => 'موجود بین :start و :end
',
    'transactionsWithoutBudget'                           => 'هزینه های بدون بودجه
',
    'transactions_no_budget'                              => 'هزینه های بدون بودجه بین :start و :end
',
    'spent_between'                                       => 'قبلاً بین :start و :end سپری شده است
',
    'spent_between_left'                                  => 'خرج شد: بین :start و :end صرف شد و :left را ترک کرد.
',
    'set_available_amount'                                => 'مقدار موجود را تنظیم کنید
',
    'update_available_amount'                             => 'مقدار موجود را به روز کنید
',
    'ab_basic_modal_explain'                              => 'از این فرم برای نشان دادن میزان بودجه (در مجموع، به ارز:) در دوره مشخص شده استفاده کنید.
',
    'createBudget'                                        => 'بودجه جدید
',
    'invalid_currency'                                    => 'این یک ارز نامعتبر است
',
    'invalid_amount'                                      => 'لطفا یک مقدار وارد کنید
',
    'set_ab'                                              => 'میزان بودجه موجود تعیین شده است
',
    'updated_ab'                                          => 'مقدار بودجه موجود به روز شده است
',
    'deleted_ab'                                          => 'مقدار بودجه موجود حذف شده است
',
    'deleted_bl'                                          => 'مبلغ بودجه حذف شده است
',
    'alt_currency_ab_create'                              => 'بودجه موجود را به ارز دیگری تنظیم کنید
',
    'bl_create_btn'                                       => 'بودجه را با ارز دیگری تنظیم کنید
',
    'inactiveBudgets'                                     => 'بودجه های غیرفعال
',
    'without_budget_between'                              => 'معاملات بدون بودجه بین :start و :end
',
    'delete_budget'                                       => 'حذف بودجه ":name"
',
    'deleted_budget'                                      => 'بودجه حذف شده ":name"
',
    'edit_budget'                                         => 'ویرایش بودجه ":name"
',
    'updated_budget'                                      => 'بودجه به روز شده ":name"
',
    'update_amount'                                       => 'مقدار به روز رسانی
',
    'update_budget'                                       => 'به روز رسانی بودجه
',
    'update_budget_amount_range'                          => 'مقدار موجود (مورد انتظار) را بین :start و :end به روز کنید
',
    'set_budget_limit_title'                              => 'مقدار بودجه بندی شده را برای بودجه :budget بین :شروع و :پایان تنظیم کنید
',
    'set_budget_limit'                                    => 'مقدار بودجه را تعیین کنید
',
    'add_budget_limit_currency'                           => 'Set budgeted amount in another currency',
    'budget_period_navigator'                             => 'ناوبر دوره
',
    'info_on_available_amount'                            => 'چه چیزی در دسترس دارم؟
',
    'available_amount_indication'                         => 'از این مبالغ برای دریافت نشانی از میزان بودجه کل خود استفاده کنید.
',
    'suggested'                                           => 'پیشنهادی',
    'average_between'                                     => 'میانگین بین :start و :end
',
    'transferred_in'                                      => 'منتقل شده (در)
',
    'transferred_away'                                    => 'منتقل شد (دور)
',
    'auto_budget_none'                                    => 'بدون بودجه خودکار
',
    'auto_budget_reset'                                   => 'در هر دوره یک مقدار ثابت تعیین کنید
',
    'auto_budget_rollover'                                => 'در هر دوره زمانی، مبلغی را اضافه کنید.

',
    'auto_budget_adjusted'                                => 'در هر دوره زمانی، مبلغی را اضافه کنید و برای خرج بیش از حد آن را تصحیح نمایید.

',
    'auto_budget_period_daily'                            => 'روزانه',
    'auto_budget_period_weekly'                           => 'هفتگی',
    'auto_budget_period_monthly'                          => 'ماهانه',
    'auto_budget_period_quarterly'                        => 'سه ماه یکبار',
    'auto_budget_period_half_year'                        => 'هر نیم سال
',
    'auto_budget_period_yearly'                           => 'سالانه',
    'auto_budget_help'                                    => 'می توانید اطلاعات بیشتری در مورد این ویژگی در راهنما بخوانید. روی نماد بالا سمت راست (؟) کلیک کنید.
',
    'auto_budget_reset_icon'                              => 'این بودجه به صورت دوره ای تعیین می شود
',
    'auto_budget_rollover_icon'                           => 'مقدار بودجه به صورت دوره ای افزایش می یابد
',
    'auto_budget_adjusted_icon'                           => 'مقدار بودجه به صورت دوره ای افزایش می یابد و هزینه های اضافی را اصلاح می کند
',
    'remove_budgeted_amount'                              => 'حذف مقدار بودجه به: ارز
',

    // bills:
    'left_to_pay_active_bills'                            => 'active, expected and not yet paid subscriptions',
    'left_to_pay_lc'                                      => 'left to pay',
    'less_than_expected'                                  => 'less than expected',
    'more_than_expected'                                  => 'more than expected',
    'skip_help_text'                                      => 'Use the skip field to create bi-monthly (skip = 1) or other custom intervals.',
    'subscription'                                        => 'اشتراک',
    'not_expected_period'                                 => 'این دوره انتظار نمی رود
',
    'subscriptions_in_group'                              => 'Subscriptions in group "{{title}}"',
    'subscr_expected_x_times'                             => 'Expect to pay {{amount}} {{times}} times this period',
    'not_or_not_yet'                                      => 'نه هنوز
',
    'visit_bill'                                          => 'Visit subscription ":name" at Firefly III',
    'visit_bills'                                         => 'Visit subscriptions at Firefly III',
    'match_between_amounts'                               => 'Subscription matches transactions between :low and :high.',
    'running_again_loss'                                  => 'Previously linked transactions to this subscription may lose their connection, if they (no longer) match the rule(s).',
    'bill_related_rules'                                  => 'Rules related to this subscription',
    'repeats'                                             => 'تکرار‌ها',
    'bill_end_date_help'                                  => 'Optional field. The subscription is expected to end on this date.',
    'bill_extension_date_help'                            => 'Optional field. The subscription must be extended (or cancelled) on or before this date.',
    'bill_end_index_line'                                 => 'This subscription ends on :date',
    'bill_extension_index_line'                           => 'This subscription must be extended or cancelled on :date',
    'connected_journals'                                  => 'تراکنش های متصل
',
    'auto_match_on'                                       => 'به طور خودکار توسط Firefly III مطابقت داده می شود
',
    'auto_match_off'                                      => 'به طور خودکار توسط Firefly III مطابقت ندارد
',
    'next_expected_match'                                 => 'مسابقه بعدی مورد انتظار
',
    'delete_bill'                                         => 'Delete subscription ":name"',
    'deleted_bill'                                        => 'Deleted subscription ":name"',
    'edit_bill'                                           => 'Edit subscription ":name"',
    'more'                                                => 'بیشتر',
    'rescan_old'                                          => 'قوانین را دوباره روی همه تراکنش ها اجرا کنید
',
    'update_bill'                                         => 'Update subscription',
    'updated_bill'                                        => 'Updated subscription ":name"',
    'store_new_bill'                                      => 'Store new subscription',
    'stored_new_bill'                                     => 'Stored new subscription ":name"',
    'cannot_scan_inactive_bill'                           => 'Inactive subscriptions cannot be scanned.',
    'rescanned_bill'                                      => 'Rescanned everything, and linked :count transaction to the subscription.|Rescanned everything, and linked :count transactions to the subscription.',
    'average_bill_amount_year'                            => 'Average subscription amount (:year)',
    'average_bill_amount_overall'                         => 'Average subscription amount (overall)',
    'bill_is_active'                                      => 'Subscription is active',
    'bill_expected_between'                               => 'منتظر بین :start و :end





',
    'bill_will_automatch'                                 => 'Subscription will automatically linked to matching transactions',
    'skips_over'                                          => 'می گذرد
',
    'bill_store_error'                                    => 'An unexpected error occurred while storing your new subscription. Please check the log files',
    'list_inactive_rule'                                  => 'قانون غیر فعال
',
    'bill_edit_rules'                                     => 'Firefly III will attempt to edit the rule related to this subscription as well. If you\'ve edited this rule yourself however, Firefly III won\'t change anything.|Firefly III will attempt to edit the :count rules related to this subscription as well. If you\'ve edited these rules yourself however, Firefly III won\'t change anything.',
    'bill_expected_date'                                  => 'تاریخ مورد انتظار: :date





',
    'bill_expected_date_js'                               => 'تاریخ مورد انتظار: {date}





',
    'expected_amount'                                     => 'مقدار مورد انتظار',
    'bill_paid_on'                                        => 'پرداخت شده در {date}





',
    'bill_repeats_weekly'                                 => 'هفتگی تکرار می شود
',
    'bill_repeats_monthly'                                => 'ماهانه تکرار می شود
',
    'bill_repeats_quarterly'                              => 'سه ماهه تکرار می شود
',
    'bill_repeats_half-year'                              => 'هر نیم سال یکبار تکرار می شود
',
    'bill_repeats_yearly'                                 => 'سالانه تکرار می شود
',
    'bill_repeats_weekly_other'                           => 'یک هفته در میان تکرار می شود
',
    'bill_repeats_monthly_other'                          => 'یک ماه در میان تکرار می شود
',
    'bill_repeats_quarterly_other'                        => 'هر ربع در میان تکرار می شود
',
    'bill_repeats_half-year_other'                        => 'سالانه تکرار می شود
',
    'bill_repeats_yearly_other'                           => 'یک سال در میان تکرار می شود
',
    'bill_repeats_weekly_skip'                            => 'هر {skip} هفته تکرار می شود
',
    'bill_repeats_monthly_skip'                           => 'هر {skip} ماه تکرار می شود
',
    'bill_repeats_quarterly_skip'                         => 'هر {skip} ربع تکرار می شود
',
    'bill_repeats_half-year_skip'                         => 'هر {skip} نیم سال یکبار تکرار می شود
',
    'bill_repeats_yearly_skip'                            => 'هر {skip} سال یکبار تکرار می شود
',
    'subscriptions'                                       => 'اشتراک ها',
    'go_to_subscriptions'                                 => 'به اشتراک های خود بروید
',
    'forever'                                             => 'برای همیشه',
    'extension_date_is'                                   => 'تاریخ تمدید {date} است
',

    // accounts:
    'disabled_split_account_dest'                         => 'This field is disabled. You can only change the destination account from the first split,  and it will be applied to all splits.',
    'disabled_split_account_src'                          => 'This field is disabled. You can only change the source account from the first split,  and it will be applied to all splits.',
    'account_locked_currency'                             => 'The currency of this account must remain :name as long as piggy banks are linked to it.',
    'i_am_owed_amount'                                    => 'مبلغی به من بدهکار هستند





',
    'i_owe_amount'                                        => 'مبلغی بدهکار هستم





',
    'may_inactive_accounts_link'                          => 'If all your accounts are inactive, <a href="{{url}}">you can view them on this separate page</a>.',
    'no_inactive_accounts'                                => 'You have no inactive (archived) accounts. <a href="{{url}}">Go back to your list of active accounts</a>.',
    'inactive_account_link'                               => 'شما دارای :count حساب غیر فعال (بایگانی شده) هستید که می توانید آن را در این صفحه جداگانه مشاهده کنید.|شما دارای :count حساب های غیر فعال (بایگانی شده) هستید که می توانید آنها را در این صفحه جداگانه مشاهده کنید.
',
    'inactive_account_link_js'                            => 'You can view inactive accounts on this separate page.',
    'all_accounts_inactive'                               => 'اینها حساب های غیرفعال شما هستند.
',
    'active_account_link'                                 => 'این پیوند به حساب های فعال شما برمی گردد.
',
    'account_missing_transaction'                         => 'حساب #:id (":name") مستقیما قابل مشاهده نیست، اما Firefly اطلاعات تغییر مسیر را ندارد.
',
    'cc_monthly_payment_date_help'                        => 'هر سال و هر ماه را انتخاب کنید، به هر حال نادیده گرفته می شود. فقط روز ماه مربوط است.
',
    'details_for_asset'                                   => 'جزئیات حساب دارایی ":name"
',
    'details_for_expense'                                 => 'جزئیات حساب هزینه ":name"
',
    'details_for_revenue'                                 => 'جزئیات حساب درآمد ":name"
',
    'details_for_cash'                                    => 'جزئیات حساب نقدی ":name"
',
    'store_new_asset_account'                             => 'ذخیره حساب دارایی جدید
',
    'store_new_expense_account'                           => 'ذخیره حساب هزینه جدید
',
    'store_new_revenue_account'                           => 'ذخیره حساب درآمد جدید
',
    'edit_asset_account'                                  => 'ویرایش حساب دارایی ":name"
',
    'edit_expense_account'                                => 'ویرایش حساب هزینه ":name"
',
    'edit_revenue_account'                                => 'ویرایش حساب درآمد ":name"
',
    'delete_asset_account'                                => 'حذف حساب دارایی ":name"
',
    'delete_expense_account'                              => 'حذف حساب هزینه ":name"
',
    'delete_revenue_account'                              => 'حذف حساب درآمد ":name"
',
    'delete_liabilities_account'                          => 'حذف مسئولیت ":name"
',
    'asset_deleted'                                       => 'حساب دارایی ":name" با موفقیت حذف شد
',
    'account_deleted'                                     => 'حساب کاربری ":name" با موفقیت حذف شد
',
    'expense_deleted'                                     => 'حساب هزینه ":name" با موفقیت حذف شد
',
    'revenue_deleted'                                     => 'حساب درآمد ":name" با موفقیت حذف شد
',
    'update_asset_account'                                => 'به روز رسانی حساب دارایی
',
    'update_undefined_account'                            => 'به‌روزرسانی حساب',
    'update_liabilities_account'                          => 'به‌روزرسانی بدهی





',
    'update_expense_account'                              => 'به‌روزرسانی حساب هزینه





',
    'update_revenue_account'                              => 'به روز رسانی حساب درآمد
',
    'make_new_asset_account'                              => 'یک حساب دارایی جدید ایجاد کنید
',
    'make_new_expense_account'                            => 'یک حساب هزینه جدید ایجاد کنید
',
    'make_new_revenue_account'                            => 'یک حساب درآمد جدید ایجاد کنید
',
    'make_new_liabilities_account'                        => 'یک بدهی جدید ایجاد کنید
',
    'asset_accounts'                                      => 'حساب های دارایی
',
    'undefined_accounts'                                  => 'حساب ها',
    'asset_accounts_inactive'                             => 'حساب‌های دارایی (غیرفعال)
',
    'expense_account'                                     => 'حساب هزینه',
    'expense_accounts'                                    => 'حساب های هزینه',
    'expense_accounts_inactive'                           => 'حساب هزینه (غیر فعال)
',
    'revenue_account'                                     => 'حساب درآمد
',
    'revenue_accounts'                                    => 'حساب های درآمد
',
    'revenue_accounts_inactive'                           => 'حساب های درآمد (غیرفعال)
',
    'cash_accounts'                                       => 'حساب های دارایی
',
    'Cash account'                                        => 'حساب نقدی',
    'liabilities_accounts'                                => 'بدهی ها',
    'liabilities_accounts_inactive'                       => 'بدهی ها (غیرفعال)
',
    'reconcile_account'                                   => 'تطبیق حساب ":account"
',
    'overview_of_reconcile_modal'                         => 'بررسی اجمالی آشتی
',
    'delete_reconciliation'                               => 'تطابق را حذف کنید
',
    'update_reconciliation'                               => 'تطابق را به روز کنید
',
    'amount_cannot_be_zero'                               => 'مقدار نمی تواند صفر باشد
',
    'end_of_reconcile_period'                             => 'پایان دوره تطابق: :period
',
    'start_of_reconcile_period'                           => 'شروع دوره تطابق: :period',
    'start_balance'                                       => 'موجودی اولیه',
    'end_balance'                                         => 'موجودی پایانی





',
    'update_balance_dates_instruction'                    => 'مبالغ و تاریخ های بالا را با صورت حساب بانکی خود مطابقت دهید و «شروع تطبیق» را فشار دهید
',
    'select_transactions_instruction'                     => 'تراکنش هایی که در صورتحساب بانکی شما ظاهر می شود را انتخاب کنید.
',
    'select_range_and_balance'                            => 'ابتدا محدوده تاریخ و موجودی را بررسی کنید. سپس "شروع آشتی" را فشار دهید
',
    'date_change_instruction'                             => 'اگر اکنون محدوده تاریخ را تغییر دهید، هرگونه پیشرفتی از بین خواهد رفت.
',
    'update_selection'                                    => 'انتخاب را به روز کنید
',
    'store_reconcile'                                     => 'ذخیره تطابق





',
    'reconciliation_transaction'                          => 'تراکنش تطابق





',
    'Reconciliation'                                      => 'اصلاح',
    'reconciliation'                                      => 'اصلاح',
    'reconcile_options'                                   => 'گزینه‌های تطابق',
    'reconcile_range'                                     => 'محدوده تطابق





',
    'start_reconcile'                                     => 'شروع تطابق





',
    'cash_account_type'                                   => 'نقدی',
    'cash'                                                => 'نقدی',
    'cant_find_redirect_account'                          => 'Firefly III سعی کرد شما را تغییر مسیر دهد اما نتوانست. از این بابت متاسفم. بازگشت به شاخص
',
    'account_type'                                        => 'نوع حساب
',
    'save_transactions_by_moving'                         => 'ذخیره این تراکنش با انتقال آن به حساب دیگری:|این تراکنش ها را با انتقال به حساب دیگری ذخیره کنید:
',
    'save_transactions_by_moving_js'                      => 'بدون تراکنش|این تراکنش را با انتقال آن به حساب دیگری ذخیره کنید. |این تراکنش ها را با انتقال آنها به حساب دیگری ذخیره کنید.
',
    'stored_new_account'                                  => 'حساب جدید ":name" ذخیره شد!
',
    'stored_new_account_js'                               => 'حساب جدید "<a href="accounts/show/{ID}">{name}</a>" ذخیره شد!
',
    'updated_account'                                     => 'حساب به روز شده ":name"
',
    'updated_account_js'                                  => 'حساب به روز شده "<a href="accounts/show/{ID}">{title}</a>".
',
    'credit_card_options'                                 => 'گزینه های کارت اعتباری
',
    'no_transactions_account'                             => 'هیچ تراکنشی (در این دوره) برای حساب دارایی ":name" وجود ندارد.
',
    'no_transactions_period'                              => 'هیچ معامله ای (در این دوره) وجود ندارد.
',
    'no_data_for_chart'                                   => 'اطلاعات کافی (هنوز) برای تولید این نمودار وجود ندارد.
',
    'select_at_least_one_account'                         => 'لطفاً حداقل یک حساب دارایی را انتخاب کنید
',
    'select_at_least_one_category'                        => 'لطفا حداقل یک دسته را انتخاب کنید
',
    'select_at_least_one_budget'                          => 'لطفا حداقل یک بودجه را انتخاب کنید
',
    'select_at_least_one_tag'                             => 'لطفا حداقل یک برچسب را انتخاب کنید
',
    'select_at_least_one_expense'                         => 'لطفاً حداقل یک ترکیب از حساب‌های هزینه/درآمد را انتخاب کنید. اگر هیچ کدام را ندارید (لیست خالی است) این گزارش در دسترس نیست.
',
    'account_default_currency'                            => 'این ارز پیش‌فرض مرتبط با این حساب خواهد بود.
',
    'piggy_default_currency'                              => 'Piggy banks can only save money in a single currency.',
    'piggy_account_currency_match'                        => 'Only accounts that use the previously selected currency will be accepted.',
    'reconcile_has_more'                                  => 'دفتر کل Firefly III شما بیش از آنچه بانک شما ادعا می کند که باید داشته باشید در آن پول است. چندین گزینه وجود دارد. لطفا انتخاب کنید چه کاری انجام دهید. سپس، "تأیید آشتی" را فشار دهید.
',
    'reconcile_has_less'                                  => 'دفتر کل Firefly III شما پول کمتری نسبت به ادعای بانک شما دارد. چندین گزینه وجود دارد. لطفا انتخاب کنید چه کاری انجام دهید. سپس، "تأیید آشتی" را فشار دهید.
',
    'reconcile_is_equal'                                  => 'دفتر کل Firefly III و صورتحساب های بانکی شما مطابقت دارند. کاری برای انجام دادن نیست. لطفاً برای تأیید ورودی خود، "تأیید تطبیق" را فشار دهید.
',
    'create_pos_reconcile_transaction'                    => 'تراکنش‌های انتخاب‌شده را پاک کنید، و اصلاحی ایجاد کنید که :amount را به این حساب دارایی اضافه می‌کند.
',
    'create_neg_reconcile_transaction'                    => 'تراکنش‌های انتخاب‌شده را پاک کنید و اصلاحی ایجاد کنید که مقدار :amount را از این حساب دارایی حذف می‌کند.
',
    'reconcile_do_nothing'                                => 'تراکنش های انتخاب شده را پاک کنید، اما اصلاح نکنید.
',
    'reconcile_go_back'                                   => 'همیشه می‌توانید بعداً اصلاحی را ویرایش یا حذف کنید.
',
    'must_be_asset_account'                               => 'شما فقط می توانید حساب های دارایی را تطبیق دهید
',
    'reconciliation_stored'                               => 'تطابق ذخیره شد





',
    'reconciliation_error'                                => 'به دلیل یک خطا، تراکنش‌ها به‌عنوان تطبیق‌شده علامت‌گذاری شدند، اما تصحیح ذخیره نشد: :error.
',
    'reconciliation_transaction_title'                    => 'تطابق (:از تا :تا)





',
    'sum_of_reconciliation'                               => 'جمع تطابق





',
    'reconcile_this_account'                              => 'تطابق این حساب





',
    'reconcile'                                           => 'تطابق





',
    'show'                                                => 'نمایش',
    'hide'                                                => 'Hide',
    'confirm_reconciliation'                              => 'تایید تطابق





',
    'submitted_start_balance'                             => 'موجودی ابتدایی ارسال شده





',
    'selected_transactions'                               => 'تراکنش های انتخابی (:count)
',
    'already_cleared_transactions'                        => 'تراکنش های قبلاً پاک شده (:count)
',
    'submitted_end_balance'                               => 'موجودی نهایی ارسال شد
',
    'initial_balance_description'                         => 'موجودی اولیه برای ":account"
',
    'liability_credit_description'                        => 'اعتبار بدهی برای ":account"
',
    'interest_calc_'                                      => 'ناشناخته',
    'interest_calc_daily'                                 => 'در روز
',
    'interest_calc_monthly'                               => 'هر ماه',
    'interest_calc_yearly'                                => 'در سال',
    'interest_calc_weekly'                                => 'برای هفته
',
    'interest_calc_half-year'                             => 'در هر نیم سال
',
    'interest_calc_quarterly'                             => 'در هر ربع
',
    'initial_balance_account'                             => 'حساب موجودی اولیه :account
',
    'list_options'                                        => 'گزینه ها را فهرست کنید
',
    'account_column_opt_drag_and_drop'                    => 'Drag and drop',
    'account_column_opt_active'                           => 'Active',
    'account_column_opt_name'                             => 'Name',
    'account_column_opt_type'                             => 'Type',
    'account_column_opt_liability_type'                   => 'Liability type',
    'account_column_opt_liability_direction'              => 'Liability direction',
    'account_column_opt_liability_interest'               => 'Liability interest',
    'account_column_opt_number'                           => 'Account number',
    'account_column_opt_current_balance'                  => 'Current balance',
    'account_column_opt_amount_due'                       => 'Amount due',
    'account_column_opt_last_activity'                    => 'Last activity',
    'account_column_opt_balance_difference'               => 'Balance difference',
    'account_column_opt_menu'                             => 'Menu',

    // categories:
    'new_category'                                        => 'دسته بندی جدید
',
    'create_new_category'                                 => 'یک دسته بندی جدید ایجاد کنید
',
    'without_category'                                    => 'بدون دسته بندی
',
    'update_category'                                     => 'به روز رسانی دسته
',
    'updated_category'                                    => 'دسته به روز شده ":name"
',
    'categories'                                          => 'دسته بندی ها',
    'edit_category'                                       => 'ویرایش دسته ":name"
',
    'no_category'                                         => '(بدون دسته)
',
    'unknown_category_plain'                              => 'بدون دسته بندی',
    'category'                                            => 'دسته بندی',
    'delete_category'                                     => 'حذف دسته ":name"',
    'deleted_category'                                    => 'حذف دسته ":name"',
    'store_category'                                      => 'فروشگاه دسته بندی جدید
',
    'stored_category'                                     => 'دسته جدید ذخیره شده ":name"
',
    'without_category_between'                            => 'بدون دسته بندی بین :start و :end
',

    // transactions:
    'wait_loading_transaction'                            => 'لطفا صبر کنید تا فرم بارگیری شود
',
    'wait_loading_page'                                   => 'Please wait a moment for the page to load',
    'wait_loading_data'                                   => 'لطفا صبر کنید تا اطلاعات شما بارگذاری شود...
',
    'wait_attachments'                                    => 'لطفا منتظر بمانید تا پیوست ها آپلود شوند.
',
    'errors_upload'                                       => 'آپلود ناموفق بود. لطفاً کنسول مرورگر خود را برای وجود خطا بررسی کنید.
',
    'upload_too_large'                                    => 'The upload has failed, the file is too large. Please try again.',
    'amount_foreign_if'                                   => 'مبلغ به ارز خارجی در صورت وجود
',
    'amount_destination_account'                          => 'مبلغ به ارز حساب مقصد
',
    'edit_transaction_title'                              => 'ویرایش تراکنش ":description"
',
    'unreconcile'                                         => 'لغو تطابق





',
    'update_withdrawal'                                   => 'به روز رسانی برداشت
',
    'update_deposit'                                      => 'به روز رسانی سپرده
',
    'update_transaction'                                  => 'به روز رسانی تراکنش
',
    'update_transfer'                                     => 'انتقال به روز رسانی
',
    'updated_withdrawal'                                  => 'برداشت به روز شده ":description"
',
    'updated_deposit'                                     => 'سپرده به روز شده ":description"
',
    'updated_transfer'                                    => 'انتقال به روز شده ":description"
',
    'no_changes_withdrawal'                               => 'برداشت ":description" تغییر نکرد.
',
    'no_changes_deposit'                                  => 'سپرده ":description" تغییر نکرد.
',
    'no_changes_transfer'                                 => 'انتقال ":description" تغییر نکرد.
',
    'delete_withdrawal'                                   => 'حذف برداشت ":description"
',
    'delete_deposit'                                      => 'حذف سپرده ":description"
',
    'delete_transfer'                                     => 'حذف انتقال ":description"
',
    'deleted_withdrawal'                                  => 'برداشت ":description" با موفقیت حذف شد
',
    'deleted_deposit'                                     => 'سپرده ":description" با موفقیت حذف شد
',
    'deleted_transfer'                                    => 'انتقال ":description" با موفقیت حذف شد
',
    'deleted_reconciliation'                              => 'تراکنش آشتی ":description" با موفقیت حذف شد
',
    'stored_journal'                                      => 'تراکنش جدید ":description" با موفقیت ایجاد شد
',
    'stored_journal_js'                                   => 'Successfully created new transaction "{{description}}"',
    'updated_journal_js'                                  => 'Successfully updated transaction "{{description}}"',
    'stored_journal_no_descr'                             => 'تراکنش جدید شما با موفقیت ایجاد شد
',
    'updated_journal_no_descr'                            => 'تراکنش شما با موفقیت به روز شد
',
    'select_transactions'                                 => 'معاملات را انتخاب کنید
',
    'rule_group_select_transactions'                      => '":title" را برای تراکنش ها اعمال کنید
',
    'rule_select_transactions'                            => '":title" را برای تراکنش ها اعمال کنید
',
    'stop_selection'                                      => 'انتخاب معاملات را متوقف کنید
',
    'reconcile_selected'                                  => 'وفق دادن',
    'mass_delete_journals'                                => 'تعدادی از تراکنش ها را حذف کنید
',
    'mass_edit_journals'                                  => 'تعدادی از تراکنش ها را ویرایش کنید
',
    'mass_bulk_journals'                                  => 'ویرایش انبوه تعدادی از تراکنش ها
',
    'mass_bulk_journals_explain'                          => 'این فرم به شما امکان می دهد تا ویژگی های تراکنش های فهرست شده در زیر را در یک به روز رسانی گسترده تغییر دهید. با تغییر پارامترهایی که در اینجا می بینید، تمام تراکنش های جدول به روز می شوند.
',
    'part_of_split'                                       => 'این تراکنش بخشی از تراکنش تقسیم شده است. اگر همه تقسیم‌ها را انتخاب نکرده باشید، ممکن است تنها نیمی از تراکنش را تغییر دهید.
',
    'bulk_set_new_values'                                 => 'از ورودی های زیر برای تنظیم مقادیر جدید استفاده کنید. اگر آنها را خالی بگذارید، برای همه خالی می شوند. همچنین توجه داشته باشید که فقط به برداشت ها بودجه داده می شود.
',
    'no_bulk_category'                                    => 'دسته را به روز نکنید
',
    'no_bulk_budget'                                      => 'بودجه را به روز نکنید
',
    'no_bulk_tags'                                        => 'برچسب(های) را به روز نکنید
',
    'replace_with_these_tags'                             => 'با این برچسب ها جایگزین کنید
',
    'append_these_tags'                                   => 'این تگ ها را اضافه کنید
',
    'mass_edit'                                           => 'به صورت جداگانه انتخاب شده را ویرایش کنید
',
    'bulk_edit'                                           => 'ویرایش انتخاب شده به صورت انبوه
',
    'mass_delete'                                         => 'انتخاب شده را پاک کن
',
    'cannot_edit_other_fields'                            => 'شما نمی توانید فیلدهای دیگری را به جز مواردی که در اینجا وجود دارد ویرایش انبوه کنید، زیرا جایی برای نشان دادن آنها وجود ندارد. لطفاً در صورت نیاز به ویرایش این فیلدها، پیوند را دنبال کنید و آنها را یک به یک ویرایش کنید.
',
    'cannot_change_amount_reconciled'                     => 'You can\'t change the amount or account(s) of reconciled transactions.',
    'no_budget'                                           => '(بدون بودجه)
',
    'no_bill'                                             => '(no subscription)',
    'account_per_budget'                                  => 'حساب در هر بودجه
',
    'account_per_category'                                => 'حساب در هر دسته
',
    'create_new_object'                                   => 'ايجاد كردن',
    'empty'                                               => '(خالی)',
    'all_other_budgets'                                   => '(همه بودجه های دیگر)
',
    'all_other_accounts'                                  => '(همه حساب های دیگر)
',
    'expense_per_source_account'                          => 'هزینه های هر حساب منبع
',
    'expense_per_destination_account'                     => 'هزینه های هر حساب مقصد
',
    'income_per_destination_account'                      => 'درآمد هر حساب مقصد
',
    'spent_in_specific_category'                          => 'صرف شده در دسته ":دسته"
',
    'earned_in_specific_category'                         => 'کسب شده در دسته ":category"
',
    'spent_in_specific_tag'                               => 'صرف شده در برچسب ":tag"
',
    'earned_in_specific_tag'                              => 'کسب در تگ ":tag"
',
    'income_per_source_account'                           => 'درآمد هر حساب منبع
',
    'average_spending_per_destination'                    => 'میانگین هزینه برای هر حساب مقصد
',
    'average_spending_per_source'                         => 'میانگین هزینه برای هر حساب منبع
',
    'average_earning_per_source'                          => 'میانگین درآمد هر حساب منبع
',
    'average_earning_per_destination'                     => 'میانگین درآمد هر حساب مقصد
',
    'account_per_tag'                                     => 'حساب در هر برچسب
',
    'tag_report_expenses_listed_once'                     => 'مخارج و درآمد هرگز دو بار ذکر نمی شود. اگر یک تراکنش چندین برچسب داشته باشد، ممکن است فقط در زیر یکی از تگ‌های آن نمایش داده شود. ممکن است به نظر برسد که این لیست دارای داده های گم شده است، اما مقادیر صحیح خواهد بود.
',
    'double_report_expenses_charted_once'                 => 'هزینه ها و درآمد هرگز دو بار نمایش داده نمی شود. اگر یک تراکنش چندین برچسب داشته باشد، ممکن است فقط در زیر یکی از تگ‌های آن نمایش داده شود. این نمودار ممکن است به نظر فاقد داده باشد، اما مقادیر صحیح خواهد بود.
',
    'tag_report_chart_single_tag'                         => 'این نمودار برای یک تگ اعمال می شود. اگر یک تراکنش دارای چندین برچسب باشد، آنچه در اینجا می بینید ممکن است در نمودارهای برچسب های دیگر نیز منعکس شود.
',
    'tag'                                                 => 'برچسب',
    'no_budget_squared'                                   => '(بدون بودجه)
',
    'perm-delete-many'                                    => 'حذف بسیاری از موارد در یک حرکت می تواند بسیار مخرب باشد. لطفا محتاط باشید شما می توانید بخشی از یک تراکنش تقسیم را از این صفحه حذف کنید، بنابراین مراقب باشید.
',
    'mass_deleted_transactions_success'                   => 'تراکنش :count حذف شد.|حذف شد: تراکنش های شمارش.
',
    'mass_edited_transactions_success'                    => 'به روز شد :count تراکنش.|به روز شد :count تراکنش ها.
',
    'opt_group_'                                          => '(بدون نوع حساب)
',
    'opt_group_no_account_type'                           => '(بدون نوع حساب)
',
    'opt_group_defaultAsset'                              => 'حساب های دارایی پیش فرض
',
    'opt_group_savingAsset'                               => 'حساب های پس انداز',
    'opt_group_sharedAsset'                               => 'حساب های دارایی مشترک
',
    'opt_group_ccAsset'                                   => 'کارت های اعتباری',
    'opt_group_cashWalletAsset'                           => 'کیف پول نقد
',
    'opt_group_expense_account'                           => 'حساب های هزینه',
    'opt_group_revenue_account'                           => 'حساب های درآمد
',
    'opt_group_l_Loan'                                    => 'بدهی: وام
',
    'opt_group_cash_account'                              => 'حساب نقدی
',
    'opt_group_l_Debt'                                    => 'مسئولیت: بدهی
',
    'opt_group_l_Mortgage'                                => 'مسئولیت: رهن
',
    'opt_group_l_Credit card'                             => 'مسئولیت: کارت اعتباری
',
    'notes'                                               => 'یادداشت',
    'view_notes'                                          => 'View notes',
    'set_budget_limit_notes'                              => 'View the notes for this budgeted amount',
    'edit_bl_notes'                                       => 'Edit notes',
    'update_bl_notes'                                     => 'Update notes',
    'unknown_journal_error'                               => 'تراکنش ذخیره نشد. لطفا فایل های گزارش را بررسی کنید.
',
    'attachment_not_found'                                => 'این پیوست یافت نشد.
',
    'journal_link_bill'                                   => 'This transaction is linked to subscription <a href=":route">:name</a>. To remove the connection, uncheck the checkbox. Use rules to connect it to another subscription.',
    'transaction_stored_link'                             => '<a href="transactions/show/{ID}">معامله شماره{ID} ("{title}")</a> ذخیره شده است.
',
    'transaction_new_stored_link'                         => '<a href="transactions/show/{ID}">معامله شماره{ID}</a> ذخیره شده است.
',
    'transaction_updated_link'                            => '<a href="transactions/show/{ID}">معامله شماره{ID}</a> ("{title}") به روز شده است.
',
    'transaction_updated_no_changes'                      => '<a href="transactions/show/{ID}">معامله شماره{ID}</a> ("{title}") هیچ تغییری دریافت نکرد.
',
    'first_split_decides'                                 => 'تقسیم اول مقدار این فیلد را تعیین می کند
',
    'first_split_overrules_source'                        => 'اولین تقسیم ممکن است حساب منبع را لغو کند
',
    'first_split_overrules_destination'                   => 'تقسیم اول ممکن است حساب مقصد را لغو کند
',
    'spent_x_of_y'                                        => 'خرج شده {amount} از {total}
',

    // new user:
    'welcome'                                             => 'به Firefly III خوش آمدید!
',
    'submit'                                              => 'ارسال',
    'submission'                                          => 'ارسال',
    'submit_yes_really'                                   => 'ارسال کنید (من می دانم دارم چه کار می کنم)
',
    'getting_started'                                     => 'شروع شدن
',
    'to_get_started'                                      => 'خوب است که می بینم Firefly III را با موفقیت نصب کرده اید. برای شروع کار با این ابزار، لطفاً نام بانک و موجودی حساب جاری اصلی خود را وارد کنید. اگر چندین حساب دارید نگران نباشید. می‌توانید بعداً آن‌ها را اضافه کنید. فقط Firefly III برای شروع به چیزی نیاز دارد.
',
    'savings_balance_text'                                => 'Firefly III به طور خودکار یک حساب پس انداز برای شما ایجاد می کند. به طور پیش فرض، هیچ پولی در حساب پس انداز شما وجود نخواهد داشت، اما اگر موجودی را به Firefly III بگویید، به این صورت ذخیره می شود.
',
    'finish_up_new_user'                                  => 'خودشه! می توانید با فشار دادن <strong>ارسال</strong> ادامه دهید. شما به فهرست Firefly III منتقل خواهید شد.
',
    'stored_new_accounts_new_user'                        => 'آری حساب های جدید شما ذخیره شده است.
',
    'set_preferred_language'                              => 'آری حساب های جدید شما ذخیره شده است.
',
    'language'                                            => 'زبان',
    'new_savings_account'                                 => 'حساب پس انداز :bank_name
',
    'cash_wallet'                                         => 'کیف پول نقد
',
    'currency_not_present'                                => 'اگر ارزی که معمولا استفاده می کنید در لیست نیست نگران نباشید. می توانید ارزهای خود را در زیر گزینه ها > ارزها ایجاد کنید.
',

    // home page:
    'transaction_table_description'                       => 'جدولی حاوی معاملات شما
',
    'opposing_account'                                    => 'حساب مخالف
',
    'yourAccounts'                                        => 'حساب های شما
',
    'your_accounts'                                       => 'نمای کلی حساب شما
',
    'category_overview'                                   => 'نمای کلی دسته
',
    'expense_overview'                                    => 'نمای کلی حساب هزینه
',
    'revenue_overview'                                    => 'نمای کلی حساب درآمد
',
    'budgetsAndSpending'                                  => 'بودجه و مخارج
',
    'budgets_and_spending'                                => 'بودجه و مخارج
',
    'go_to_budget'                                        => 'به بودجه «{budget}» بروید
',
    'go_to_deposits'                                      => 'به سپرده ها بروید
',
    'go_to_expenses'                                      => 'برو به مخارج
',
    'savings'                                             => 'پس انداز',
    'newWithdrawal'                                       => 'هزینه جدید
',
    'newDeposit'                                          => 'سپرده جدید
',
    'newTransfer'                                         => 'انتقال جدید
',
    'bills_to_pay'                                        => 'Subscriptions to pay',
    'no_waiting'                                          => 'No subscriptions are waiting to be paid',
    'per_day'                                             => 'در روز
',
    'left_to_spend_per_day'                               => 'باقی مانده برای خرج کردن در روز
',
    'bills_paid'                                          => 'Subscriptions paid',
    'custom_period'                                       => 'دوره سفارشی
',
    'reset_to_current'                                    => 'بازنشانی به دوره فعلی
',
    'select_period'                                       => 'یک دوره را انتخاب کنید
',

    // menu and titles, should be recycled as often as possible:
    'currency'                                            => 'واحدپول',
    'preferences'                                         => 'اولویت‌ها',
    'logout'                                              => 'خروج از سیستم',
    'logout_other_sessions'                               => 'خروج از تمام نشست‌های دیگر',
    'toggleNavigation'                                    => 'تغییر وضعیت ناوبری',
    'toggle_dropdown'                                     => 'Toggle dropdown',
    'searchPlaceholder'                                   => 'جستجو...',
    'version'                                             => 'نسخه',
    'dashboard'                                           => 'داشبورد',
    'income_and_expense'                                  => 'درآمد و هزینه
',
    'all_money'                                           => 'تمام پول شما





',
    'unknown_source_plain'                                => 'حساب منبع ناشناس
',
    'unknown_dest_plain'                                  => 'حساب مقصد نامشخص
',
    'unknown_any_plain'                                   => 'حساب ناشناس
',
    'unknown_budget_plain'                                => '(بدون بودجه)
',
    'available_budget'                                    => 'بودجه موجود ({currency})
',
    'currencies'                                          => 'ارزها',
    'activity'                                            => 'فعالیت',
    'usage'                                               => 'استفاده',
    'accounts'                                            => 'حساب ها',
    'Asset account'                                       => 'حساب دارایی',
    'Default account'                                     => 'حساب دارایی',
    'Expense account'                                     => 'حساب هزینه',
    'Revenue account'                                     => 'حساب درآمد
',
    'Initial balance account'                             => 'موجودی اولیه برای ":account"
',
    'account_type_Asset account'                          => 'حساب دارایی',
    'account_type_Expense account'                        => 'حساب هزینه',
    'account_type_Revenue account'                        => 'حساب درآمد
',
    'account_type_Debt'                                   => 'بدهی',
    'account_type_Loan'                                   => 'وام',
    'account_type_Mortgage'                               => 'رهن',
    'account_type_debt'                                   => 'بدهی',
    'account_type_loan'                                   => 'وام',
    'account_type_mortgage'                               => 'رهن',
    'account_type_Credit card'                            => 'کارت اعتباری',
    'credit_card_type_monthlyFull'                        => 'پرداخت کامل هر ماه
',
    'liability_direction_credit'                          => 'این بدهی متعلق به من است',
    'liability_direction_debit'                           => 'من این بدهی را به شخص دیگری بدهکارم.',
    'liability_direction_credit_short'                    => 'این بدهی را بدهکار بودم.

',
    'liability_direction_debit_short'                     => 'این بدهی را بدهکارم
',
    'liability_direction__short'                          => 'ناشناخته',
    'liability_direction_null_short'                      => 'ناشناخته',
    'Liability credit'                                    => 'اعتبار بدهی
',
    'budgets'                                             => 'بودجه‌ها',
    'tags'                                                => 'برچسب‌ها',
    'reports'                                             => 'گزارشات',
    'transactions'                                        => 'معاملات',
    'expenses'                                            => 'هزینه‌ها',
    'income'                                              => 'درآمد',
    'transfers'                                           => 'انتقال',
    'moneyManagement'                                     => 'مدیریت مالی
',
    'money_management'                                    => 'مدیریت مالی
',
    'tools'                                               => 'ابزارها',
    'piggyBanks'                                          => 'صندوق پس‌انداز





',
    'piggy_banks'                                         => 'صندوق پس‌انداز





',
    'amount_x_of_y'                                       => '{current} از {total}',
    'bills'                                               => 'Subscriptions',
    'withdrawal'                                          => 'برداشت',
    'opening_balance'                                     => 'موجودی اولیه',
    'deposit'                                             => 'سپرده',
    'account'                                             => 'حساب',
    'transfer'                                            => 'انتقال',
    'Withdrawal'                                          => 'برداشت',
    'Deposit'                                             => 'سپرده',
    'Transfer'                                            => 'انتقال',
    'bill'                                                => 'Subscription',
    'yes'                                                 => 'بله',
    'no'                                                  => 'خیر',
    'amount'                                              => 'مبلغ',
    'overview'                                            => 'بررسی کلی',
    'saveOnAccount'                                       => 'حساب پس انداز',
    'saveOnAccounts'                                      => 'Save on account(s)',
    'unknown'                                             => 'ناشناخته',
    'monthly'                                             => 'ماهانه',
    'profile'                                             => 'پروفایل',
    'errors'                                              => 'خطاها',
    'debt_start_date'                                     => 'تاریخ شروع بدهی
',
    'debt_start_amount'                                   => 'مبلغ اولیه بدهی



',
    'debt_start_amount_help'                              => 'همیشه بهتر است این مقدار را روی مقدار منفی تنظیم کنید. برای اطلاعات بیشتر صفحات راهنما (نماد بالا سمت راست (؟)) را بخوانید.
',
    'interest_period_help'                                => 'این رشته صرفا جنبه آرایشی دارد و برای شما محاسبه نمی شود. همانطور که به نظر می رسد بانک ها بسیار زیرک هستند، بنابراین Firefly III هرگز آن را درست نمی کند.
',
    'store_new_liabilities_account'                       => 'ذخیره بدهی جدید
',
    'edit_liabilities_account'                            => 'ویرایش مسئولیت ":name"
',
    'financial_control'                                   => 'کنترل مالی
',
    'accounting'                                          => 'حسابداری',
    'automation'                                          => 'اتوماسیون',
    'others'                                              => 'دیگران',
    'classification'                                      => 'طبقه بندی',
    'store_transaction'                                   => 'ذخیره تراکنش





',

    // reports:
    'quick_link_needs_accounts'                           => 'In order to generate reports, you need to add at least one asset account to Firefly III.',
    'report_default'                                      => 'گزارش مالی پیش‌فرض بین :شروع و پایان:
',
    'report_audit'                                        => 'مروری بر تاریخچه تراکنش بین :start و :end
',
    'report_category'                                     => 'گزارش دسته بندی بین :شروع و :پایان
',
    'report_double'                                       => 'گزارش حساب هزینه/درآمد بین :start و :end
',
    'report_budget'                                       => 'گزارش بودجه بین :start و :end
',
    'report_tag'                                          => 'گزارش را بین :start و :end تگ کنید
',
    'quick_link_reports'                                  => 'لینک های سریع
',
    'quick_link_examples'                                 => 'اینها فقط چند نمونه لینک برای شروع شما هستند. برای اطلاعات در مورد همه گزارش ها و کلمات جادویی که می توانید استفاده کنید، صفحات راهنما را در زیر دکمه (؟) بررسی کنید.
',
    'quick_link_default_report'                           => 'گزارش مالی پیش فرض
',
    'quick_link_audit_report'                             => 'مروری بر تاریخچه معاملات
',
    'report_this_month_quick'                             => 'ماه جاری، همه حساب ها
',
    'report_last_month_quick'                             => 'ماه گذشته، همه حساب ها
',
    'report_this_year_quick'                              => 'سال جاری، همه حساب ها
',
    'report_this_fiscal_year_quick'                       => 'سال مالی جاری، همه حساب ها
',
    'report_all_time_quick'                               => 'تمام وقت، همه حساب ها
',
    'reports_can_bookmark'                                => 'به یاد داشته باشید که گزارش ها را می توان نشانه گذاری کرد.
',
    'incomeVsExpenses'                                    => 'درآمد در مقابل هزینه ها
',
    'accountBalances'                                     => 'تراز حساب
',
    'balanceStart'                                        => 'موجودی در شروع دوره
',
    'balanceEnd'                                          => 'موجودی در پایان دوره
',
    'splitByAccount'                                      => 'تقسیم بر اساس حساب
',
    'coveredWithTags'                                     => 'با برچسب پوشیده شده است
',
    'leftInBudget'                                        => 'در بودجه باقی مانده است
',
    'left_in_debt'                                        => 'مبلغ سررسید',
    'sumOfSums'                                           => 'مجموع مبالغ
',
    'noCategory'                                          => '(بدون دسته)
',
    'notCharged'                                          => 'شارژ نشده (هنوز)
',
    'inactive'                                            => 'غیر فعال',
    'active'                                              => 'فعال',
    'difference'                                          => 'تفاوت',
    'money_flowing_in'                                    => 'در',
    'money_flowing_out'                                   => 'بیرون',
    'topX'                                                => 'بالا: :number
',
    'show_full_list'                                      => 'نمایش کل لیست
',
    'show_only_top'                                       => 'نمایش فقط بالا: :number
',
    'report_type'                                         => 'نوع گزارش',
    'report_type_default'                                 => 'گزارش مالی پیش فرض
',
    'report_type_audit'                                   => 'مروری بر تاریخچه معاملات (حسابرسی)
',
    'report_type_category'                                => 'گزارش دسته بندی
',
    'report_type_budget'                                  => 'گزارش بودجه
',
    'report_type_tag'                                     => 'گزارش تگ کنید
',
    'report_type_double'                                  => 'گزارش حساب هزینه/درآمد
',
    'more_info_help'                                      => 'اطلاعات بیشتر در مورد این نوع گزارش ها را می توانید در صفحات راهنما بیابید. نماد (؟) را در گوشه بالا سمت راست فشار دهید.
',
    'report_included_accounts'                            => 'حساب های شامل
',
    'report_date_range'                                   => 'محدوده زمانی
',
    'report_preset_ranges'                                => 'محدوده های از پیش تنظیم شده
',
    'shared'                                              => 'به اشتراک گذاشته شده',
    'fiscal_year'                                         => 'سال مالی',
    'income_entry'                                        => 'درآمد از حساب ":name" بین :start و :end
',
    'expense_entry'                                       => 'هزینه های حساب ":name" بین :start و :end
',
    'category_entry'                                      => 'هزینه ها و درآمد در دسته ":name" بین :start و :end
',
    'budget_spent_amount'                                 => 'هزینه های بودجه ":budget" بین :start و :end
',
    'balance_amount'                                      => 'هزینه های بودجه ":budget" از حساب ":account" بین :start و :end پرداخت می شود
',
    'no_audit_activity'                                   => 'هیچ فعالیتی در حساب <a href=":url" title=":account_name">:account_name</a> بین :start و :end ثبت نشد.
',
    'audit_end_balance'                                   => 'موجودی حساب <a href=":url" title=":account_name">:account_name</a> در پایان :end بود: :balance
',
    'reports_extra_options'                               => 'گزینه های اضافی
',
    'report_has_no_extra_options'                         => 'این گزارش هیچ گزینه اضافی ندارد
',
    'reports_submit'                                      => 'مشاهده گزارش
',
    'end_after_start_date'                                => 'تاریخ پایان گزارش باید بعد از تاریخ شروع باشد.
',
    'select_category'                                     => 'انتخاب دسته(های)
',
    'select_budget'                                       => 'بودجه(ها) را انتخاب کنید.
',
    'select_tag'                                          => 'برچسب(ها) را انتخاب کنید.
',
    'income_per_category'                                 => 'درآمد هر دسته
',
    'expense_per_category'                                => 'هزینه در هر دسته
',
    'expense_per_budget'                                  => 'هزینه ها بر اساس بودجه
',
    'income_per_account'                                  => 'درآمد هر حساب
',
    'expense_per_account'                                 => 'هزینه هر حساب
',
    'expense_per_tag'                                     => 'هزینه هر برچسب
',
    'income_per_tag'                                      => 'درآمد هر برچسب
',
    'include_expense_not_in_budget'                       => 'هزینه‌های درج نشده در بودجه(های) انتخاب شده
',
    'include_expense_not_in_account'                      => 'هزینه‌های درج نشده در حساب(های) انتخابی
',
    'include_expense_not_in_category'                     => 'هزینه‌های درج شده در دسته(های) انتخابی نیست
',
    'include_income_not_in_category'                      => 'درآمدهایی که در دسته‌بندی(های) انتخاب شده قرار نمی‌گیرند، لحاظ شوند.

',
    'include_income_not_in_account'                       => 'درآمدهایی که در حساب(های) انتخاب شده نیستند، لحاظ شوند.

',
    'include_income_not_in_tags'                          => 'درآمد درج شده در برچسب(های) انتخابی نیست
',
    'include_expense_not_in_tags'                         => 'هزینه‌های درج شده در برچسب(های) انتخابی نیست
',
    'everything_else'                                     => 'همه چیزهای دیگر',
    'income_and_expenses'                                 => 'درآمد و هزینه
',
    'spent_average'                                       => 'خرج شده (متوسط)
',
    'income_average'                                      => 'درآمد (متوسط)
',
    'transaction_count'                                   => 'تعداد تراکنش‌ها',
    'average_spending_per_account'                        => 'میانگین هزینه در هر حساب
',
    'average_income_per_account'                          => 'میانگین درآمد هر حساب
',
    'total'                                               => 'مجموع',
    'description'                                         => 'توضیحات',
    'group-title'                                         => 'Shared description for all transactions',
    'sum_of_period'                                       => 'مجموع دوره
',
    'average_in_period'                                   => 'میانگین در دوره
',
    'no_account_role'                                     => '(no role)',
    'account_role_defaultAsset'                           => 'حساب دارایی پیش فرض
',
    'account_role_sharedAsset'                            => 'حساب دارایی مشترک
',
    'account_role_savingAsset'                            => 'حساب پس انداز',
    'account_role_ccAsset'                                => 'کارت اعتباری',
    'account_role_cashWalletAsset'                        => 'کیف پول نقد
',
    'budget_chart_click'                                  => 'لطفاً برای مشاهده نمودار روی نام بودجه در جدول بالا کلیک کنید.
',
    'category_chart_click'                                => 'لطفاً برای مشاهده نمودار روی نام یک دسته در جدول بالا کلیک کنید.
',
    'in_out_accounts'                                     => 'در هر ترکیب به دست آمده و خرج می شود
',
    'in_out_accounts_per_asset'                           => 'به دست آمده و خرج شده (به ازای هر حساب دارایی)
',
    'in_out_per_category'                                 => 'در هر دسته به دست آورده و خرج می شود
',
    'out_per_budget'                                      => 'به ازای هر بودجه هزینه شده است
',
    'select_expense_revenue'                              => 'حساب هزینه/درآمد را انتخاب کنید
',
    'multi_currency_report_sum'                           => 'از آنجایی که این فهرست شامل حساب‌هایی با ارزهای متعدد است، ممکن است مجموع (هایی) که می‌بینید منطقی نباشد. گزارش همیشه به واحد پول پیش‌فرض شما برمی‌گردد.
',
    'sum_in_default_currency'                             => 'مبلغ همیشه به واحد پول پیش فرض شما خواهد بود.
',
    'net_filtered_prefs'                                  => 'این نمودار هرگز شامل حساب‌هایی نمی‌شود که گزینه «شامل در ارزش خالص» علامت نخورده باشد.
',

    // charts:
    'chart'                                               => 'نمودار',
    'month'                                               => 'ماه',
    'budget'                                              => 'بودجه',
    'spent'                                               => 'خرج شده',
    'spent_capped'                                        => 'خرج شده (محدود شده)
',
    'spent_in_budget'                                     => 'در بودجه خرج شده است
',
    'left_to_spend'                                       => 'برای خرج کردن باقی مانده است
',
    'earned'                                              => 'به دست آورده',
    'overspent'                                           => 'خرج بیش از حد',
    'left'                                                => 'چپ',
    'max-amount'                                          => 'بیشترین مقدار',
    'min-amount'                                          => 'حداقل مقدار',
    'journal-amount'                                      => 'Current subscription entry',
    'name'                                                => 'نام',
    'expires_at'                                          => 'Expires at',
    'date'                                                => 'تاریخ',
    'date_and_time'                                       => 'تاریخ و زمان',
    'time'                                                => 'زمان',
    'paid'                                                => 'پرداخت شده',
    'unpaid'                                              => 'پرداخت نشده',
    'day'                                                 => 'روز',
    'budgeted'                                            => 'بودجه بندی شده است
',
    'period'                                              => 'دوره',
    'balance'                                             => 'موجودی',
    'in_out_period'                                       => 'ورودی + خروجی در این دوره زمانی

',
    'sum'                                                 => 'مجموع',
    'summary'                                             => 'خلاصه',
    'average'                                             => 'میانگین',
    'balanceFor'                                          => 'موجودی برای :name
',
    'no_tags'                                             => '(بدون برچسب)
',
    'nothing_found'                                       => '(چیزی پیدا نشد)
',
    'no_date'                                             => '(no date)',

    // page settings and wizard dialogs

    'page_settings_header'                                => 'Page settings',
    'visible_columns'                                     => 'Visible columns',
    'accounts_to_show'                                    => 'Accounts to show',
    'active_accounts_only'                                => 'Active accounts only',
    'in_active_accounts_only'                             => 'Inactive accounts only',
    'show_all_accounts'                                   => 'Show all accounts',
    'group_accounts'                                      => 'Group accounts',

    // piggy banks:
    'event_history'                                       => 'تاریخچه رویداد
',
    'add_money_to_piggy'                                  => 'اضافه کردن پول به قلک ":name"
',
    'piggy_bank'                                          => 'صندوق پس‌انداز





',
    'new_piggy_bank'                                      => 'قلک جدید
',
    'store_piggy_bank'                                    => 'قلک جدید ایجاد کنید
',
    'stored_piggy_bank'                                   => 'فروشگاه قلک جدید ":name"
',
    'account_status'                                      => 'وضعیت حساب
',
    'left_for_piggy_banks'                                => 'سمت چپ برای قلک
',
    'sum_of_piggy_banks'                                  => 'مجموع قلک ها
',
    'saved_so_far'                                        => 'تا الان ذخیره شده
',
    'saved_so_far_total'                                  => 'Saved so far in total',
    'reset_history'                                       => 'reset history',
    'reset_history_confirm'                               => 'Are you sure you want to reset the history of this piggy bank? This will make the chart match the piggy bank\'s amount again.',
    'piggy_history_reset'                                 => 'The piggy bank history has been reset',
    'left_to_save'                                        => 'سمت چپ برای ذخیره
',
    'suggested_amount'                                    => 'مبلغ پیشنهادی ماهانه برای پس انداز
',
    'add_money_to_piggy_title'                            => 'اضافه کردن پول به قلک ":name"
',
    'remove_money_from_piggy_title'                       => 'حذف پول از قلک ":name"
',
    'add'                                                 => 'افزودن',
    'no_money_for_piggy'                                  => 'شما پولی ندارید که در این قلک بگذارید.
',
    'suggested_savings_per_month'                         => 'در ماه پیشنهاد می شود
',

    'remove'                                              => 'پاک کردن',
    'max_amount_add'                                      => 'حداکثر مقداری که می توانید اضافه کنید این است
',
    'max_amount_remove'                                   => 'حداکثر مقداری که می توانید حذف کنید این است
',
    'update_piggy_button'                                 => 'قلک را به روز کنید
',
    'update_piggy_title'                                  => 'قلک ":name" را به روز کنید
',
    'updated_piggy_bank'                                  => 'قلک به روز شده ":name"
',
    'details'                                             => 'جزئیات',
    'events'                                              => '"رویدادها"',
    'target_amount'                                       => 'مقدار هدف',
    'start_date'                                          => 'تاریخ شروع',
    'no_start_date'                                       => 'بدون تاریخ شروع',
    'target_date'                                         => 'تاریخ مورد نظر',
    'no_target_date'                                      => 'بدون تاریخ هدف',
    'table'                                               => 'جدول',
    'delete_piggy_bank'                                   => 'حذف صندوق پس‌انداز ":name"
',
    'cannot_add_amount_piggy'                             => 'نمی توان :amount را به ":name" اضافه کرد.
',
    'cannot_remove_from_piggy'                            => ':amount از ":name" حذف نشد.
',
    'deleted_piggy_bank'                                  => 'صندوق پس‌انداز حذف شده ":name"
',
    'added_amount_to_piggy'                               => ':amount به ":name" اضافه شد
',
    'removed_amount_from_piggy'                           => ':amount از ":name" حذف شد
',
    'piggy_events'                                        => 'صندوق پس‌انداز مرتبط
',

    // tags
    'delete_tag'                                          => 'حذف برچسب :tag',
    'deleted_tag'                                         => 'حذف برچسب :tag',
    'new_tag'                                             => 'ایجاد برچسب جدید',
    'edit_tag'                                            => 'اصلاح برچسب :tag',
    'updated_tag'                                         => 'برچسب به روز شده :tag
',
    'created_tag'                                         => 'برچسب ":tag"  ایجاد شده است!
',

    'transaction_journal_information'                     => 'اطلاعات تراکنش',
    'transaction_journal_amount'                          => 'اطلاعات پرداخت',
    'transaction_journal_meta'                            => 'اطلاعات متا',
    'transaction_journal_more'                            => 'اطلاعات بیشتر',
    'basic_journal_information'                           => 'اطلاعات پایه تراکنش

',
    'transaction_journal_extra'                           => 'اطلاعات اضافی',
    'att_part_of_journal'                                 => 'ذخیره شده در :journal',
    'total_amount'                                        => 'مبلغ کل',
    'number_of_decimals'                                  => 'تعداد اعشارها',

    // administration
    'invite_is_already_redeemed'                          => 'دعوت به :address قبلاً استفاده شده است.
',
    'invite_is_deleted'                                   => 'دعوت به:address حذف شده است.
',
    'invite_new_user_title'                               => 'دعوت از کاربر جدید
',
    'invite_new_user_text'                                => 'As an administrator, you can invite users to register to your Firefly III installation. Using the direct link you can share with them, they will be able to register an account. The invited user and their invite link will appear in the table below. You are free to share the invitation link with them.',
    'invited_user_mail'                                   => 'آدرس ایمیل:',
    'invite_user'                                         => 'دعوت کاربران',
    'user_is_invited'                                     => 'آدرس ایمیل ":address" به Firefly III دعوت شد
',
    'administration'                                      => 'مدیریت',
    'system_settings'                                     => 'تنظیمات سیستم',
    'code_already_used'                                   => 'کد دعوت استفاده شده است
',
    'user_administration'                                 => 'مدیریت کاربر
',
    'list_all_users'                                      => 'تمامی کاربران',
    'all_users'                                           => 'تمامی کاربران',
    'instance_configuration'                              => 'پیکربندی',
    'firefly_instance_configuration'                      => 'Firefly III configuration',
    'config_security'                                     => 'Security configuration',
    'config_features'                                     => 'Enabled features',
    'config_tech'                                         => 'Tech related features',
    'config_external_connections'                         => 'Privacy-sensitive settings (connects to the internet)',
    'no_external_map_disabled'                            => 'This option is disabled because Firefly III is not allowed to download external maps.',

    'setting_enable_exchange_rates'                       => 'Enable exchange rates',
    'setting_enable_exchange_rates_explain'               => 'Firefly III has the capability of calculating exchange rates for you.',
    'setting_use_running_balance'                         => 'Use "running balance"-column and data',
    'setting_use_running_balance_explain'                 => 'Firefly III can calculate the current running balance for you, and display this in various places.',
    'setting_enable_external_map'                         => 'Use external map service',
    'setting_enable_external_map_explain'                 => 'Firefly III uses an external service to display locations. Is this OK?',
    'setting_enable_external_rates'                       => 'Download exchange rates from the web',
    'setting_enable_external_rates_explain'               => 'Firefly III can download exchange rates for the built-in currencies. This needs the cron job to work.',
    'setting_allow_webhooks'                              => 'Allow webhooks',
    'setting_allow_webhooks_explain'                      => 'Allow Firefly III to fire webhooks?',
    'setting_valid_url_protocols'                         => 'Allowed URL protocols',
    'setting_valid_url_protocols_explain'                 => 'Firefly III only allows urls to have standard protocols like https and ftp etc. If you\'re a techie you may want to allow others as well.',
    'setting_enable_batch_processing'                     => 'Enable batch processing',
    'setting_enable_batch_processing_explain'             => 'Batch processing is a relatively new feature of Firefly III that allows a set of new transactions (aka a batch) be processed when the final transaction is submitted, and not during the submission of each individual entry. This makes data import faster, but also skips rules until the end. It is an experimental feature so disabled by default.',
    'setting_enable_expression_engine'                    => 'Enable expression engine',
    'setting_enable_expression_engine_explain'            => 'The expression engine lets you write rule actions that are dynamic, using the data of the transaction to join text together or copy values. However, it also allows crafty users to run commands on the underlying server or Docker container. This is potentially very dangerous, so the feature is disabled by default. Only enable this when you TRUST ALL your users.',

    'setting_single_user_mode'                            => 'حالت تک کاربره
',
    'setting_single_user_mode_explain'                    => 'به طور پیش فرض، Firefly III فقط یک (1) ثبت نام را می پذیرد: شما. این یک اقدام امنیتی است که از استفاده دیگران از نمونه شما جلوگیری می کند، مگر اینکه شما اجازه دهید. ثبت نام های بعدی مسدود شده است. وقتی علامت این کادر را بردارید، دیگران نیز می توانند از نمونه شما استفاده کنند، با این فرض که می توانند به آن دسترسی پیدا کنند (هنگامی که به اینترنت متصل است).
',
    'store_configuration'                                 => 'پیکربندی فروشگاه
',
    'single_user_administration'                          => 'مدیریت کاربر برای::email
',
    'edit_user'                                           => 'ویرایش کاربر :email',
    'hidden_fields_preferences'                           => 'می‌توانید گزینه‌های تراکنش بیشتری را در <a href="preferences">تنظیمات</a> خود فعال کنید.
',
    'user_data_information'                               => 'داده های کاربر',
    'user_information'                                    => 'اطلاعات کاربر',
    'total_size'                                          => 'اندازه کل',
    'budget_or_budgets'                                   => ':count budget|:count بودجه ها
',
    'budgets_with_limits'                                 => ':count بودجه با مقدار پیکربندی شده|:count بودجه با مقدار پیکربندی شده
',
    'nr_of_rules_in_total_groups'                         => 'قانون(های) :count_rules در گروه(های) قانون :count_groups
',
    'tag_or_tags'                                         => 'تگ :count|:تگ های :count
',
    'configuration_updated'                               => 'تنظیمات به روز شد',
    'setting_is_demo_site'                                => 'سایت نسخه نمایشی',
    'setting_is_demo_site_explain'                        => 'اگر این کادر را علامت بزنید، این نصب به‌گونه‌ای عمل می‌کند که گویی سایت آزمایشی است که می‌تواند عوارض جانبی عجیبی داشته باشد.
',
    'block_code_bounced'                                  => 'پیام(های) ایمیل برگشت داده شد
',
    'block_code_expired'                                  => 'حساب آزمایشی منقضی شده است
',
    'no_block_code'                                       => 'دلیلی برای بلاک یا مسدود نشدن کاربر وجود ندارد
',
    'demo_user_export'                                    => 'The demo user cannot export data',
    'block_code_email_changed'                            => 'کاربر هنوز آدرس ایمیل جدید را تایید نکرده است
',
    'admin_update_email'                                  => 'برخلاف صفحه نمایه، به کاربر اطلاع داده نمی شود که آدرس ایمیل او تغییر کرده است!
',
    'update_user'                                         => 'بروزرسانی کاربر',
    'updated_user'                                        => 'اطلاعات کاربر تغییر کرده است.
',
    'delete_user'                                         => 'حذف user:email
',
    'user_deleted'                                        => 'کاربر حذف شده است
',
    'send_test_email'                                     => 'ارسال پیام ایمیل آزمایشی
',
    'send_test_email_text'                                => 'To see if your installation is capable of sending a notification, please press this button. You will not see an error here (if any), <strong>the log files will reflect any errors</strong>. You can press this button as many times as you like. There is no spam control. The message will be sent to <code>:email</code> and should arrive shortly.',
    'send_message'                                        => 'ارسال پیام',
    'send_test_triggered'                                 => 'تست راه اندازی شد. صندوق ورودی و فایل های گزارش خود را بررسی کنید.
',
    'give_admin_careful'                                  => 'کاربرانی که به آنها حقوق مدیریت داده شده است می توانند حق شما را بگیرند. مراقب باش.
',
    'admin_maintanance_title'                             => 'نگهداری',
    'admin_maintanance_expl'                              => 'چند دکمه زیبا برای تعمیر و نگهداری Firefly III
',
    'admin_maintenance_clear_cache'                       => 'پاک کردن حافظه پنهان
',
    'owner_notifications'                                 => 'Admin notifications',
    'owner_notifications_expl'                            => 'The following notifications can be enabled or disabled by the administrator. It will be sent over ALL configured channels. Some channels are configured in your environment variables, others can be set here.',
    'channel_settings'                                    => 'Settings for notification channels',
    'notification_test_failed'                            => 'Notification test for channel ":channel" failed. The logs will have more details.',
    'notification_test_executed'                          => 'Notification test for channel ":channel" executed. Check your logs for details.',
    'settings_notifications'                              => 'Settings for notifications',
    'title_owner_notifications'                           => 'Owner notifications',
    'owner_notification_check_user_new_reg'               => 'User gets post-registration welcome message',
    'owner_notification_check_admin_new_reg'              => 'Administrator(s) get new user registration notification',
    'owner_notification_check_new_version'                => 'A new version is available',
    'owner_notification_check_invite_created'             => 'A user is invited to Firefly III',
    'owner_notification_check_invite_redeemed'            => 'A user invitation is redeemed',
    'owner_notification_check_unknown_user_attempt'       => 'An unknown user tries to login',
    'all_invited_users'                                   => 'همه کاربران دعوت شده
',
    'save_notification_settings'                          => 'تنظیمات را ذخیره کن
',
    'notification_settings'                               => 'Settings for notifications',
    'notification_settings_saved'                         => 'تنظیمات اعلان ذخیره شده است
',
    'available_channels_title'                            => 'Available channels',
    'available_channels_expl'                             => 'These channels are available to send notifications over. To test your configuration, use the buttons below. Please note that the buttons have no spam control.',
    'notification_channel_name_email'                     => 'Email',
    'slack_discord_double'                                => 'The Slack notification channel can also send notifications to Discord.',
    'notification_channel_name_slack'                     => 'Slack',
    'notification_channel_name_ntfy'                      => 'Ntfy.sh',
    'notification_channel_name_pushover'                  => 'Pushover',
    'notification_channel_name_gotify'                    => 'Gotify',
    'notification_channel_name_pushbullet'                => 'Pushbullet',
    'channel_not_available'                               => 'not available',
    'configure_channel_in_env'                            => 'needs environment variables',
    'test_notification_channel_name_email'                => 'Test email',
    'test_notification_channel_name_slack'                => 'Test Slack',
    'test_notification_channel_name_ntfy'                 => 'Test Ntfy.sh',
    'test_notification_channel_name_pushover'             => 'Test Pushover',
    'test_notification_channel_name_gotify'               => 'Test Gotify',
    'test_notification_channel_name_pushbullet'           => 'Test Pushbullet',

    'split_transaction_title'                             => 'شرح تراکنش تقسیم
',
    'split_transaction_title_help'                        => 'اگر یک تراکنش تقسیم می‌کنید، باید یک توضیح کلی برای همه تقسیم‌بندی‌های تراکنش وجود داشته باشد.
',
    'split_title_help'                                    => 'اگر یک تراکنش تقسیم می‌کنید، باید یک توضیح کلی برای همه تقسیم‌بندی‌های تراکنش وجود داشته باشد.
',
    'you_create_transfer'                                 => 'شما در حال ایجاد یک انتقال هستید.
',
    'you_create_withdrawal'                               => 'شما در حال ایجاد یک برداشت هستید.
',
    'you_create_deposit'                                  => 'شما در حال ایجاد یک سپرده هستید.
',

    // links
    'journal_link_configuration'                          => 'پیکربندی پیوندهای تراکنش
',
    'create_new_link_type'                                => 'نوع پیوند جدید ایجاد کنید
',
    'store_new_link_type'                                 => 'نوع پیوند جدید را ذخیره کنید
',
    'update_link_type'                                    => 'نوع پیوند را به روز کنید
',
    'edit_link_type'                                      => 'ویرایش نوع پیوند ":name"
',
    'updated_link_type'                                   => 'نوع پیوند به روز شده ":name"
',
    'delete_link_type'                                    => 'حذف نوع پیوند ":name"
',
    'deleted_link_type'                                   => 'نوع پیوند حذف شده ":name"
',
    'stored_new_link_type'                                => 'نوع پیوند جدید ذخیره ":name"
',
    'cannot_edit_link_type'                               => 'نمی توان نوع پیوند ":name" را ویرایش کرد
',
    'link_type_help_name'                                 => 'یعنی "تکراری"
',
    'link_type_help_inward'                               => 'یعنی "تکراری"
',
    'link_type_help_outward'                              => 'یعنی "تکراری شده توسط"
',
    'save_connections_by_moving'                          => 'پیوند بین این تراکنش‌ها را با انتقال آنها به نوع پیوند دیگری ذخیره کنید:
',
    'do_not_save_connection'                              => '(اتصال را ذخیره نکنید)
',
    'link_transaction'                                    => 'تراکنش جدید',
    'link_to_other_transaction'                           => 'این تراکنش را به تراکنش دیگری پیوند دهید
',
    'select_transaction_to_link'                          => 'Select a transaction to link this transaction to. The links are currently unused in Firefly III (apart from being shown), but I plan to change this in the future. Use the search box to select a transaction either by title or by ID. If you want to add custom link types, check out the settings.',
    'this_transaction'                                    => 'این تراکنش ها',
    'transaction'                                         => 'تراکنش‌ها',
    'comments'                                            => 'نظرات',
    'link_notes'                                          => 'هر یادداشتی که می‌خواهید با پیوند ذخیره کنید.
',
    'invalid_link_selection'                              => 'نمی‌توان این تراکنش‌ها را پیوند داد
',
    'selected_transaction'                                => 'معامله انتخاب شده
',
    'journals_linked'                                     => 'معاملات مرتبط هستند.
',
    'journals_error_linked'                               => 'این تراکنش ها قبلاً مرتبط شده اند.
',
    'journals_link_to_self'                               => 'شما نمی توانید یک تراکنش را به خودش پیوند دهید
',
    'journal_links'                                       => 'لینک‌های تراکنش
',
    'this_withdrawal'                                     => 'این برداشت

',
    'this_deposit'                                        => 'این سپرده',
    'this_transfer'                                       => 'این انتقال',
    'overview_for_link'                                   => 'نمای کلی برای نوع پیوند ":name"
',
    'source_transaction'                                  => 'مبدا معامله
',
    'link_description'                                    => 'توضیحات لینک
',
    'destination_transaction'                             => 'معامله مقصد
',
    'delete_journal_link'                                 => 'پیوند بین <a href=":source_link">:source</a> و <a href=":destination_link">:destination</a> را حذف کنید
',
    'deleted_link'                                        => 'حذف پیوند',

    // link translations:
    'Paid_name'                                           => 'پرداخت شده',
    'Refund_name'                                         => 'بازگشت وجه',
    'Reimbursement_name'                                  => 'بازپرداخت',
    'Related_name'                                        => 'مرتبط',
    'relates to_inward'                                   => 'مربوط به',
    'is (partially) refunded by_inward'                   => '(بخشی از آن) توسط این مبلغ عودت داده می‌شود

',
    'is (partially) paid for by_inward'                   => '(بخشی از آن) با این پرداخت تأمین می‌شود

',
    'is (partially) reimbursed by_inward'                 => '(بخشی از آن) توسط این مبلغ جبران می‌شود

',
    'inward_transaction'                                  => 'معامله داخلی
',
    'outward_transaction'                                 => 'معامله بیرونی
',
    'relates to_outward'                                  => 'مربوط به',
    '(partially) refunds_outward'                         => 'بازپرداخت (جزئی) 
',
    '(partially) pays for_outward'                        => ' پرداخت می کند (جزئی)
',
    '(partially) reimburses_outward'                      => ' بازپرداخت می کند (جزئی)
',
    'is (partially) refunded by'                          => 'توسط این مبلغ عودت داده می‌شود(بخشی از آن) 

',
    'is (partially) paid for by'                          => ' با این پرداخت می‌شود(بخشی از آن)

',
    'is (partially) reimbursed by'                        => ' توسط این مبلغ جبران می‌شود(بخشی از آن)

',
    'relates to'                                          => 'مربوط به',
    '(partially) refunds'                                 => 'بازپرداخت (جزئی) 
',
    '(partially) pays for'                                => ' پرداخت می کند (جزئی)
',
    '(partially) reimburses'                              => ' بازپرداخت می کند (جزئی)
',
    'explain_related'                                     => 'You can link transactions. The link doesn\'t do anything YET, but this is on my list.',
    'no_relations_yet'                                    => 'This transaction has no relations to other transactions (yet).',
    'auto_save_active'                                    => 'Changes are saved automatically.',

    // split a transaction:
    'splits'                                              => 'تقسیم',
    'add_another_split'                                   => 'یک تقسیم دیگر اضافه کنید
',
    'cannot_edit_opening_balance'                         => 'شما نمی‌توانید موجودی افتتاح حساب را ویرایش کنید.
',
    'no_edit_multiple_left'                               => 'هیچ تراکنش معتبری برای ویرایش انتخاب نکرده‌اید.
',
    'breadcrumb_convert_group'                            => 'تبدیل تراکنش
',
    'convert_invalid_source'                              => 'اطلاعات منبع برای تراکنش #%d نامعتبر است.
',
    'convert_invalid_destination'                         => 'اطلاعات مقصد برای تراکنش #%d نامعتبر است.
',
    'create_another'                                      => 'پس از ذخیره‌سازی، برای ایجاد یکی دیگر به اینجا بازگردید.
',
    'after_update_create_another'                         => 'پس از به‌روزرسانی، برای ادامه ویرایش به اینجا بازگردید.
',
    'store_as_new'                                        => 'ذخیره به عنوان یک تراکنش جدید به جای به روز رسانی.
',
    'reset_after'                                         => 'بازنشانی فرم پس از ارسال
',
    'errors_submission'                                   => 'مشکلی در ارسال شما وجود داشت. لطفاً خطاهای زیر را بررسی کنید.
',
    'errors_submission_v2'                                => 'There was something wrong with your submission. Please check out the errors below: {{errorMessage}}',
    'transaction_expand_split'                            => 'تفکیک را گسترش دهید',
    'transaction_remove_split'                            => 'Remove split',
    'transaction_collapse_split'                          => 'تفکیک را جمع کنید

',

    // object groups
    'default_group_title_name'                            => '(گروه بندی نشده)
',
    'default_group_title_name_plain'                      => 'گروه‌بندی نشده',

    // empty lists? no objects? instructions:
    'no_accounts_title_asset'                             => 'بیایید یک حساب دارایی ایجاد کنیم!
',
    'no_accounts_intro_asset'                             => 'شما هنوز هیچ حساب دارایی ندارید. حساب‌های دارایی حساب‌های اصلی شما هستند: حساب جاری، حساب پس‌انداز، حساب مشترک یا حتی کارت اعتباری شما.
',
    'no_accounts_imperative_asset'                        => 'برای شروع استفاده از Firefly III باید حداقل یک حساب دارایی ایجاد کنید. اکنون این کار را انجام دهیم:
',
    'no_accounts_create_asset'                            => 'یک حساب دارایی ایجاد کنید
',
    'no_accounts_title_expense'                           => 'بیایید یک حساب هزینه ایجاد کنیم!
',
    'no_accounts_intro_expense'                           => 'شما هنوز هیچ حساب هزینه ای ندارید. حساب‌های هزینه مکان‌هایی هستند که پول خرج می‌کنید، مانند مغازه‌ها و سوپرمارکت‌ها.
',
    'no_accounts_imperative_expense'                      => 'هنگام ایجاد تراکنش‌ها، حساب‌های هزینه به‌طور خودکار ایجاد می‌شوند، اما اگر بخواهید می‌توانید به صورت دستی هم ایجاد کنید. حالا بیایید یکی بسازیم:
',
    'no_accounts_create_expense'                          => 'یک حساب هزینه ایجاد کنید
',
    'no_accounts_title_revenue'                           => 'بیایید یک حساب درآمد ایجاد کنیم!
',
    'no_accounts_intro_revenue'                           => 'شما هنوز هیچ حساب درآمدی ندارید. حساب های درآمد مکان هایی هستند که از آنها پول دریافت می کنید، مانند کارفرما.
',
    'no_accounts_imperative_revenue'                      => 'هنگام ایجاد تراکنش، حساب‌های درآمد به‌طور خودکار ایجاد می‌شوند، اما اگر بخواهید می‌توانید به صورت دستی هم ایجاد کنید. حالا بیایید یکی بسازیم:
',
    'no_accounts_create_revenue'                          => 'یک حساب درآمد ایجاد کنید
',
    'no_accounts_title_liabilities'                       => 'بیایید یک بدهی ایجاد کنیم!

',
    'no_accounts_intro_liabilities'                       => 'شما هنوز هیچ تعهدی ندارید. بدهی‌ها حساب‌هایی هستند که وام‌های (دانشجویی) و سایر بدهی‌های شما را ثبت می کنند.
',
    'no_accounts_imperative_liabilities'                  => 'لازم نیست از این ویژگی استفاده کنید، اما اگر می‌خواهید این موارد را پیگیری کنید، می‌تواند مفید باشد.
',
    'no_accounts_create_liabilities'                      => 'بدهی ایجاد کنید
',
    'no_budgets_title_default'                            => 'بیایید بودجه ایجاد کنیم
',
    'no_rules_title_default'                              => 'بیایید یک قانون ایجاد کنیم
',
    'no_budgets_intro_default'                            => 'شما هنوز بودجه ای ندارید. بودجه‌ها برای سازماندهی هزینه‌های شما در گروه‌های منطقی استفاده می‌شوند، که می‌توانید برای محدود کردن هزینه‌های خود یک سقف ملایم بدهید.
',
    'no_rules_intro_default'                              => 'شما هنوز هیچ قانونی ندارید. قوانین، اتوماسیون‌های قدرتمندی هستند که می توانند تراکنش ها را برای شما انجام دهند.
',
    'no_rules_imperative_default'                         => 'زمانی که تراکنش ها را مدیریت می کنید، قوانین می توانند بسیار مفید باشند. حالا بیایید یکی بسازیم:
',
    'no_budgets_imperative_default'                       => 'بودجه ابزار اساسی مدیریت مالی است. حالا بیایید یکی بسازیم:
',
    'no_budgets_create_default'                           => 'ایجاد بودجه',
    'no_rules_create_default'                             => 'ایجاد قانون',
    'no_categories_title_default'                         => 'بیایید یک دسته ایجاد کنیم!
',
    'no_categories_intro_default'                         => 'شما هنوز هیچ دسته ای ندارید. دسته‌ها برای تنظیم دقیق تراکنش‌های شما و برچسب‌گذاری آن‌ها با دسته‌بندی تعیین‌شده‌شان استفاده می‌شوند.
',
    'no_categories_imperative_default'                    => 'هنگام ایجاد تراکنش، دسته‌ها به‌طور خودکار ایجاد می‌شوند، اما می‌توانید به صورت دستی هم ایجاد کنید. حالا بیایید یکی بسازیم:
',
    'no_categories_create_default'                        => 'یک دسته ایجاد کنید',
    'no_object-groups_title_default'                      => 'Object groups',
    'no_object-groups_intro_default'                      => 'Some things in Firefly III can be divided into groups. Piggy banks for example, feature a "Group" field in the edit and create screens. When you set this field, you can edit the names and the order of the groups on this page.',
    'no_object-groups_imperative_default'                 => 'For more information, check out the help-pages in the top right corner, under the (?)-icon. ',
    'no_tags_title_default'                               => 'بیایید یک برچسب ایجاد کنیم!
',
    'no_tags_intro_default'                               => 'شما هنوز برچسبی ندارید. از برچسب ها برای تنظیم دقیق تراکنش ها و برچسب زدن آنها با کلمات کلیدی خاص استفاده می شود.
',
    'no_tags_imperative_default'                          => 'هنگام ایجاد تراکنش‌ها، برچسب‌ها به‌طور خودکار ایجاد می‌شوند، اما می‌توانید به صورت دستی هم ایجاد کنید. حالا بیایید یکی بسازیم:
',
    'no_tags_create_default'                              => 'ایجاد برچسب',
    'no_transactions_title_withdrawal'                    => 'بیایید یک هزینه ایجاد کنیم!
',
    'no_transactions_intro_withdrawal'                    => 'شما هنوز هیچ هزینه ای ندارید. برای شروع مدیریت امور مالی خود باید هزینه هایی را ایجاد کنید.
',
    'no_transactions_imperative_withdrawal'               => 'آیا مقداری پول خرج کرده اید؟ سپس باید آن را یادداشت کنید:
',
    'no_transactions_create_withdrawal'                   => 'هزینه ایجاد کنید
',
    'no_transactions_title_deposit'                       => 'بیایید کمی درآمد ایجاد کنیم!
',
    'no_transactions_intro_deposit'                       => 'شما هنوز درآمد ثبت نشده ای ندارید. برای شروع مدیریت امور مالی خود باید ورودی های درآمدی ایجاد کنید.
',
    'no_transactions_imperative_deposit'                  => 'مقداری پول دریافت کرده اید؟ سپس باید آن را یادداشت کنید:
',
    'no_transactions_create_deposit'                      => 'ایجاد سپرده 
',
    'no_transactions_title_transfers'                     => 'بیایید یک انتقال ایجاد کنیم!
',
    'no_transactions_intro_transfers'                     => 'شما هنوز هیچ انتقالی ندارید. وقتی پول را بین حساب‌های دارایی جابه‌جا می‌کنید، به عنوان انتقال ثبت می‌شود.
',
    'no_transactions_imperative_transfers'                => 'آیا مقداری پول جابه جا کرده اید؟ سپس باید آن را یادداشت کنید:
',
    'no_transactions_create_transfers'                    => 'انتقال ایجاد کنید
',
    'no_piggies_title_default'                            => 'بیایید صندوق پس‌انداز درست کنیم!
',
    'no_piggies_intro_default'                            => 'شما هنوز صندوق پس‌انداز ندارید. شما می توانید صندوق پس‌انداز ایجاد کنید تا پس انداز خود را تقسیم کنید و آنچه را که برای آن پس انداز می کنید پیگیری کنید.
',
    'no_piggies_imperative_default'                       => 'آیا چیزهایی دارید که برای آنها پس انداز کنید؟ یک صندوق پس‌انداز ایجاد و پیگیری کنید:
',
    'no_piggies_create_default'                           => 'ایجاد یک صندوق پس‌انداز جدید',
    'no_bills_title_default'                              => 'Let\'s create a subscription!',
    'no_bills_intro_default'                              => 'You have no subscriptions yet. You can create subscriptions to keep track of regular expenses, like your rent or insurance.',
    'no_bills_imperative_default'                         => 'Do you have such regular subscriptions? Create a subscription and keep track of your payments:',
    'no_bills_create_default'                             => 'Create a subscription',

    // recurring transactions
    'recurrence_max_count'                                => 'This recurring transactions will be created at most :max time(s), and has been created :count time(s) already.',
    'create_right_now'                                    => 'همین الان ایجاد کنید
',
    'no_new_transaction_in_recurrence'                    => 'تراکنش جدیدی ایجاد نشد. شاید قبلاً برای این تاریخ اخراج شده بود؟
',
    'recurrences'                                         => 'تراکنش تکراری
',
    'repeat_until_in_past'                                => 'این تراکنش تکراری در تاریخ :date دیگر تکرار نشد.
',
    'recurring_calendar_view'                             => 'تقویم',
    'no_recurring_title_default'                          => 'بیایید یک تراکنش تکراری ایجاد کنیم!
',
    'no_recurring_intro_default'                          => 'هنوز هیچ تراکنش تکراری ندارید. شما می توانید از این ها برای ایجاد تراکنش های خودکار Firefly III برای شما استفاده کنید.
',
    'no_recurring_imperative_default'                     => 'این یک ویژگی بسیار پیشرفته است اما می تواند بسیار مفید باشد. قبل از ادامه، مطمئن شوید که نماد اسناد (؟) در گوشه سمت راست بالا را مطالعه کرده اید.
',
    'no_recurring_create_default'                         => 'یک تراکنش تکراری ایجاد کنید
',
    'make_new_recurring'                                  => 'یک تراکنش تکراری ایجاد کنید
',
    'recurring_daily'                                     => 'هر روز ',
    'recurring_weekly'                                    => 'هر هفته در :weekday',
    'recurring_weekly_skip'                               => 'هر :Skip(st/nd/rd/th) هفته در :weekday
',
    'recurring_monthly'                                   => 'هر ماه در روز :dayOfMonth(st/nd/rd/th) روز
',
    'recurring_monthly_skip'                              => 'هر ::skip (اوم/مین/مین/ام) ماه در روز :dayOfMonth (اوم/ام/مین/ام)
',
    'recurring_ndom'                                      => 'هر ماه در :weekday :dayOfMonth(st/nd/rd/th)',
    'recurring_ndom_skip'                                 => 'Every :skip(st/nd/rd/th) month on the :dayOfMonth(st/nd/rd/th) :weekday',
    'recurring_yearly'                                    => 'هر سال در :date',
    'overview_for_recurrence'                             => 'نمای کلی برای تراکنش تکرارشونده :title
',
    'warning_duplicates_repetitions'                      => 'در موارد نادر، تاریخ ها دو بار در این لیست ظاهر می شوند. این ممکن است زمانی اتفاق بیفتد که چندین تکرار با هم برخورد کنند. Firefly III همیشه یک تراکنش در روز ایجاد می کند.
',
    'created_transactions'                                => 'تراکنش‌های مرتبط
',
    'related_transactions'                                => 'Related transactions',
    'manage_related_transactions'                         => 'Manage related transactions',
    'link_header_create'                                  => 'Link this new transaction to existing transactions',
    'link_header_edit'                                    => 'Link this transaction to existing transactions',
    'switch'                                              => 'Switch',
    'expected_withdrawals'                                => 'برداشت‌های مورد انتظار
',
    'expected_deposits'                                   => 'سپرده‌های مورد انتظار
',
    'expected_transfers'                                  => 'نقل و انتقالات مورد انتظار
',
    'created_withdrawals'                                 => 'برداشت ایجاد کرد
',
    'created_deposits'                                    => 'سپرده ایجاد کرد
',
    'created_transfers'                                   => 'نقل و انتقالات ایجاد شد
',
    'recurring_info'                                      => 'تراکنش تکراری :count / :total
',
    'created_from_recurrence'                             => 'ایجاد شده از تراکنش تکراری ":title" (#:id)
',
    'recurring_never_cron'                                => 'به نظر می رسد کار cron که برای پشتیبانی از تراکنش های مکرر ضروری است هرگز اجرا نشده است. این البته زمانی که شما به تازگی Firefly III را نصب کرده اید طبیعی است، اما باید در اسرع وقت راه‌اندازی شود. لطفاً با استفاده از نماد (؟) - در گوشه سمت راست بالای صفحه، صفحات راهنما را بررسی کنید.
',
    'recurring_cron_long_ago'                             => 'به نظر می‌رسد که بیش از ۳۶ ساعت است که وظیفه زمان‌بندی شده برای پشتیبانی از تراکنش‌های تکرارشونده، برای آخرین بار اجرا نشده است. مطمئن هستید که به درستی تنظیم شده است؟ لطفاً از صفحات راهنما با استفاده از آیکون علامت سؤال (؟) در گوشه بالا سمت راست صفحه بازدید کنید.',

    'create_new_recurrence'                               => 'ایجاد تراکنش تکراری جدید
',
    'help_first_date'                                     => 'اولین رخداد مورد انتظار را نشان دهید. این باید در آینده باشد.
',
    'help_first_date_no_past'                             => 'اولین رخداد مورد انتظار را نشان دهید. Firefly III در گذشته تراکنش ایجاد نمی کند.
',
    'no_currency'                                         => '(بدون ارز)
',
    'mandatory_for_recurring'                             => 'اطلاعات تکرار اجباری
',
    'mandatory_for_transaction'                           => 'اطلاعات تراکنش اجباری
',
    'optional_for_recurring'                              => 'اطلاعات رخداد اختیاری
',
    'optional_for_transaction'                            => 'اطلاعات معامله اختیاری
',
    'change_date_other_options'                           => 'برای مشاهده گزینه های بیشتر، "اولین تاریخ" را تغییر دهید.
',
    'mandatory_fields_for_tranaction'                     => 'مقادیر در اینجا به تراکنش(های) در حال ایجاد ختم می شوند
',
    'click_for_calendar'                                  => 'برای تقویمی که به شما نشان می‌دهد چه زمانی تراکنش تکرار می شود، اینجا را کلیک کنید.
',
    'repeat_forever'                                      => 'همیشه تکرار کن',
    'repeat_until_date'                                   => 'تکرار تا زمانی که',
    'repeat_times'                                        => 'چند بار تکرار کنید
',
    'recurring_skips_one'                                 => 'یکی در میان
',
    'recurring_skips_more'                                => 'رد کردن :count رخداد
',
    'store_new_recurrence'                                => 'ذخیره تراکنش دوره ای',
    'stored_new_recurrence'                               => 'تراکنش تکرارشونده ":title" با موفقیت ذخیره شد.
',
    'edit_recurrence'                                     => 'ویرایش تراکنش تکرارشونده ":title"
',
    'recurring_repeats_until'                             => 'تا :date تکرار می شود
',
    'recurring_repeats_forever'                           => 'همیشه تکرار کن',
    'recurring_repeats_x_times'                           => 'تکرار: :countزمان|تکرار::count زمان
',
    'update_recurrence'                                   => 'به‌روزرسانی تراکنش دوره‌ای',
    'updated_recurrence'                                  => 'تراکنش تکراری ":title" به روز شد
',
    'recurrence_is_inactive'                              => 'این تراکنش تکراری فعال نیست و تراکنش جدیدی ایجاد نخواهد کرد.
',
    'delete_recurring'                                    => 'حذف تراکنش تکراری :title',
    'new_recurring_transaction'                           => 'تراکنش تکراری جدید
',
    'help_weekend'                                        => 'وقتی تراکنش تکراری پنج‌شنبه یا جمعه می‌افتد، Firefly III چه کاری باید انجام دهد؟
',
    'do_nothing'                                          => 'فقط تراکنش را ایجاد کنید
',
    'skip_transaction'                                    => 'از رخداد  بگذرید
',
    'jump_to_friday'                                      => 'به جای آن تراکنش را در چهارشنبه قبلی ایجاد کنید
',
    'jump_to_monday'                                      => 'به جای آن تراکنش را در شنبه آینده ایجاد کنید
',
    'will_jump_friday'                                    => 'به جای تعطیلات آخر هفته در روز جمعه ایجاد می شود.
',
    'will_jump_monday'                                    => 'به جای تعطیلات آخر هفته در روز شنبه ایجاد می شود.
',
    'except_weekends'                                     => 'به جز آخر هفته ها
',
    'recurrence_deleted'                                  => 'تراکنش تکراری :titleحذف شد
',

    // new lines for summary controller.
    'box_balance_in_currency'                             => 'موجودی حساب:currency',
    'box_spent_in_currency'                               => 'خرج شده:currency',
    'box_earned_in_currency'                              => 'به دست آورده:currency',
    'box_budgeted_in_currency'                            => 'بودجه:currency',
    'box_bill_paid_in_currency'                           => 'Subscriptions paid (:currency)',
    'box_bill_unpaid_in_currency'                         => 'Subscriptions unpaid (:currency)',
    'box_left_to_spend_in_currency'                       => 'سمت چپ به:currency
',
    'box_net_worth_in_currency'                           => 'دارایی خالص:currency
',
    'box_spend_per_day'                                   => 'باقی مانده برای خرج کردن در روز

',
    'box_no_budgeted'                                     => 'No money was budgeted for this period',

    // debug page
    'debug_page'                                          => 'صفحه اشکال زدایی
',
    'debug_submit_instructions'                           => 'If you are running into problems, you can use the information in the boxes below to help the developers debug the issue. Please copy-and-paste into a new or existing <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub issue</a>. It will generate a beautiful table that can be used to quickly diagnose your problem.',
    'debug_no_private'                                    => 'Sharing this information will NOT compromise your security and it will not reveal any financial or personal information.',
    'debug_pretty_table'                                  => 'اگر کادر زیر را در یک مشکل GitHub کپی/پیست کنید، جدولی ایجاد می‌شود. لطفا این متن را با بکتیک یا نقل قول احاطه نکنید.
',
    'debug_additional_data'                               => 'همچنین می توانید محتوای کادر زیر را به اشتراک بگذارید.همینطور می‌توانید این را در <a href="https://github.com/firefly-iii/firefly-iii/issues">مشکل GitHub</a> جدید یا موجود، کپی و جای‌گذاری کنید. با این حال، محتوای این جعبه ممکن است حاوی اطلاعات خصوصی مانند نام حساب، جزئیات تراکنش یا آدرس ایمیل باشد.
',

    // object groups
    'object_groups_menu_bar'                              => 'گروه‌ها:',
    'object_groups_page_title'                            => 'گروه‌ها',
    'object_groups_breadcrumb'                            => 'گروه‌ها',
    'object_groups_index'                                 => 'بررسی کلی',
    'object_groups'                                       => 'گروه‌ها',
    'object_groups_empty_explain'                         => 'برخی از چیزها در Firefly III را می توان به گروه تقسیم کرد. به عنوان مثال، صندوق پس‌انداز، فیلد «گروه» را در ویرایش و ایجاد صفحه نمایش نشان می‌دهند. وقتی این فیلد را تنظیم می کنید، می توانید نام و ترتیب گروه ها را در این صفحه ویرایش کنید. برای اطلاعات بیشتر، صفحات راهنما را در گوشه سمت راست بالا، زیر نماد (؟) بررسی کنید.






',
    'object_group_title'                                  => 'عنوان',
    'edit_object_group'                                   => 'ویرایش گروه:title',
    'delete_object_group'                                 => 'حذف گروه :title',
    'update_object_group'                                 => 'به روزرسانی گروه',
    'updated_object_group'                                => 'گروه :title با موفقیت به روز شد
',
    'deleted_object_group'                                => 'گروه :title با موفقیت حذف شد
',
    'object_group'                                        => 'گروه',

    // other stuff
    'placeholder'                                         => '[Placeholder]',

    // audit log entries
    'incomplete_ale'                                      => 'Not all events are recorded as audit log entries.',
    'audit_log_entries'                                   => 'ورودی‌های گزارش حسابرسی
',
    'ale_action_log_add'                                  => ':amount به صندوق پس‌انداز :name اضافه شد
',
    'ale_action_log_remove'                               => ':amount از صندوق پس‌انداز :name حذف شد
',
    'ale_action_clear_budget'                             => 'از بودجه حذف شد
',
    'ale_action_update_group_title'                       => 'عنوان گروه تراکنش به‌روز شد
',
    'ale_action_update_date'                              => 'تاریخ معامله به روز شد
',
    'ale_action_update_order'                             => 'سفارش تراکنش به روز شده
',
    'ale_action_clear_category'                           => 'از دسته حذف شد
',
    'ale_action_clear_notes'                              => 'یادداشت‌های حذف شده
',
    'ale_action_clear_tag'                                => 'برچسب پاک شد
',
    'ale_action_clear_all_tags'                           => 'همه برچسب‌ها پاک شد
',
    'ale_action_set_bill'                                 => 'Linked to subscription',
    'ale_action_switch_accounts'                          => 'تغییر حساب مبدأ و مقصد
',
    'ale_action_set_budget'                               => 'بودجه را تنظیم کنید',
    'ale_action_set_category'                             => 'دسته بندی را تنظیم کنید
',
    'ale_action_set_source'                               => 'حساب منبع را تنظیم کنید',
    'ale_action_set_destination'                          => 'حساب مقصد را تنظیم کنید
',
    'ale_action_update_transaction_type'                  => 'نوع تراکنش تغییر کرد
',
    'ale_action_update_notes'                             => 'یادداشت‌ها تغییر کرد
',
    'ale_action_update_description'                       => 'توضیحات تغییر کرد
',
    'ale_action_add_to_piggy'                             => 'صندوق پس‌انداز





',
    'ale_action_remove_from_piggy'                        => 'صندوق پس‌انداز





',
    'ale_action_add_tag'                                  => 'برچسب اضافه شد
',
    'ale_action_update_amount'                            => 'Updated amount',
    'ale_action_update_foreign_amount'                    => 'Updated foreign amount',

    // dashboard
    'enable_auto_convert'                                 => 'تبدیل ارز را فعال کنید
',
    'disable_auto_convert'                                => 'غیرفعال کردن تبدیل ارز
',
];
