<?php

/**
 * validation.php
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
    'no_auth_present'                 => 'Looks like you\'re not authenticated',
    'unique_currency_symbol'          => 'The currency symbol is already in use.',
    'bad_url_parts'                   => 'The redirect URL is invalid.',
    'verifying_password'              => 'Verifying password...',
    'invalid_account_list'            => 'Invalid account type list entry ":value"',
    'invalid_transaction_type_list'   => 'Invalid transaction type list',
    'limit_exists'                    => 'There is already a budget limit (amount) for this budget and currency in the given period.',
    'invalid_sort_instruction'        => 'The sort instruction is invalid for an object of type ":object".',
    'invalid_sort_instruction_index'  => 'The sort instruction at index #:index is invalid for an object of type ":object".',
    'no_sort_instructions'            => 'There are no sort instructions defined for an object of type ":object".',
    'webhook_budget_info'             => 'Cannot deliver budget information for transaction related webhooks.',
    'webhook_account_info'            => 'Cannot deliver account information for budget related webhooks.',
    'webhook_transaction_info'        => 'Cannot deliver transaction information for budget related webhooks.',
    'invalid_account_type'            => 'A piggy bank can only be linked to asset accounts and liabilities',
    'unique_currency_code'            => 'This currency code is already in use',
    'invalid_account_currency'        => 'This account does not use the currency you have selected',
    'current_amount_too_much'         => 'The combined amount in "current_amount" cannot exceed the "target_amount".',
    'filter_must_be_in'               => 'Filter ":filter" must be one of: :values',
    'filter_not_string'               => 'Filter ":filter" is expected to be a string of text',
    'bad_api_filter'                  => 'This API endpoint does not support ":filter" as a filter.',
    'nog_logged_in'                   => 'You are not logged in.',
    'prohibited'                      => 'You must not submit anything in field.',
    'bad_webhook_combination'         => 'Webhook trigger ":trigger" cannot be combined with webhook response ":response".',
    'unknown_webhook_trigger'         => 'Unknown webhook trigger ":trigger".',
    'only_any_trigger'                => 'If you select the "Any event"-trigger, you may not select any other triggers.',
    'bad_type_source'                 => 'Firefly III نمی تواند نوع تراکنش را بر اساس این حساب منبع تعیین کند.',
    'bad_type_destination'            => 'Firefly III نمی تواند نوع تراکنش را بر اساس این حساب منبع تعیین کند.
',
    'missing_where'                   => 'آرایه عبارت "where" را ندارد
',
    'missing_update'                  => 'آرایه عبارت "update" را ندارد
',
    'invalid_where_key'               => 'JSON حاوی یک کلید نامعتبر برای عبارت "where" است
',
    'invalid_update_key'              => 'JSON حاوی یک کلید نامعتبر برای عبارت "update" است
',
    'invalid_query_data'              => 'داده های نامعتبر در قسمت %s:%s درخواست شما وجود دارد.
',
    'invalid_query_account_type'      => 'درخواست شما حاوی حساب هایی از انواع مختلف است که مجاز نیست.
',
    'invalid_query_currency'          => 'درخواست شما حاوی حساب هایی از انواع مختلف است که مجاز نیست.
',
    'iban'                            => 'این یک IBAN معتبر نیست.
',
    'zero_or_more'                    => 'مقدار نمی تواند منفی باشد.
',
    'more_than_zero'                  => 'مقدار باید بیشتر از صفر باشد.
',
    'more_than_zero_correct'          => 'مقدار باید صفر یا بیشتر باشد.
',
    'no_asset_account'                => 'این یک حساب دارایی نیست.
',
    'date_or_time'                    => 'مقدار باید یک مقدار تاریخ یا زمان معتبر باشد (ISO 8601).
',
    'source_equals_destination'       => 'حساب مبدأ برابر با حساب مقصد است.
',
    'unique_account_number_for_user'  => 'به نظر می رسد این شماره حساب قبلاً در حال استفاده است.
',
    'unique_user_group_for_user'      => 'It looks like this administration title is already in use.',
    'unique_iban_for_user'            => 'به نظر می رسد این IBAN در حال حاضر در حال استفاده است.
',
    'reconciled_forbidden_field'      => 'این تراکنش قبلاً تطبیق شده است، شما نمی توانید ":فیلد" را تغییر دهید
',
    'deleted_user'                    => 'به دلیل محدودیت های امنیتی، نمی توانید با استفاده از این آدرس ایمیل ثبت نام کنید.
',
    'rule_trigger_value'              => 'این مقدار برای محرک انتخابی نامعتبر است.
',
    'rule_action_expression'          => 'Invalid expression. :error',
    'rule_action_value'               => 'این مقدار برای اقدام انتخاب شده نامعتبر است.
',
    'file_already_attached'           => 'فایل آپلود شده ":name" قبلاً به این شی پیوست شده است.
',
    'file_attached'                   => 'فایل ":name" با موفقیت آپلود شد.
',
    'cannot_add_piggy_amount'         => 'This amount cannot be added to the piggy bank.',
    'file_zero'                       => 'The file is zero bytes in size.',
    'must_exist'                      => 'شناسه فیلد :ویژگی در پایگاه داده وجود ندارد.
',
    'all_accounts_equal'              => 'همه حساب ها در این زمینه باید برابر باشند.
',
    'group_title_mandatory'           => 'عنوان گروه زمانی اجباری است که بیش از یک تراکنش وجود داشته باشد.
',
    'transaction_types_equal'         => 'همه تقسیم ها باید از یک نوع باشند.
',
    'invalid_transaction_type'        => 'نوع تراکنش نامعتبر است.
',
    'invalid_selection'               => 'انتخاب شما نامعتبر است.
',
    'belongs_user'                    => 'این مقدار به یک شی مرتبط است که به نظر وجود ندارد.
',
    'belongs_user_or_user_group'      => 'این مقدار به شیئی مرتبط است که به نظر می رسد در مدیریت مالی فعلی شما وجود ندارد.
',
    'no_access_group'                 => 'The user has no access to this administration.',
    'no_accepted_roles_defined'       => 'No access roles have been defined for this endpoint, access denied.',
    'at_least_one_transaction'        => 'حداقل به یک تراکنش نیاز دارید.
',
    'recurring_transaction_id'        => 'حداقل به یک تراکنش نیاز دارید.
',
    'need_id_to_match'                => 'شما باید این ورودی را با یک شناسه برای API ارسال کنید تا بتواند با آن مطابقت داشته باشد.
',
    'too_many_unmatched'              => 'تعداد زیادی از تراکنش های ارسال شده را نمی توان با ورودی های پایگاه داده مربوطه خود مطابقت داد. اطمینان حاصل کنید که ورودی های موجود دارای شناسه معتبر هستند.
',
    'id_does_not_match'               => 'شناسه ارسالی #:id با شناسه مورد انتظار مطابقت ندارد. مطمئن شوید که با فیلد مطابقت دارد یا حذف می شود.
',
    'at_least_one_repetition'         => 'حداقل به یک تکرار نیاز دارید.
',
    'require_repeat_until'            => 'به تعدادی تکرار یا تاریخ پایان (repeat_until) نیاز دارید. نه هر دو.
',
    'require_currency_info'           => 'محتوای این فیلد بدون اطلاعات ارز نامعتبر است.
',
    'require_currency_id_code'        => 'Please set either "transaction_currency_id" or "transaction_currency_code".',
    'not_transfer_account'            => 'این حساب حسابی نیست که بتوان از آن برای انتقال استفاده کرد.
',
    'require_currency_amount'         => 'محتوای این فیلد بدون اطلاعات مقدار خارجی نامعتبر است.
',
    'require_foreign_currency'        => 'این فیلد به یک عدد نیاز دارد
',
    'require_foreign_dest'            => 'این مقدار فیلد باید با واحد پول حساب مقصد مطابقت داشته باشد.
',
    'require_foreign_src'             => 'این مقدار فیلد باید با واحد پول حساب منبع مطابقت داشته باشد.
',
    'equal_description'               => 'شرح تراکنش نباید با توصیف کلی برابری کند.
',
    'file_invalid_mime'               => 'فایل ":name" از نوع ":mime" است که به عنوان آپلود جدید پذیرفته نمی شود.
',
    'file_too_large'                  => 'فایل ":name" خیلی بزرگ است.
',
    'belongs_to_user'                 => 'مقدار :خصیصه ناشناخته است.
',
    'accepted'                        => 'ویژگی : باید پذیرفته شود.
',
    'bic'                             => 'این یک BIC معتبر نیست.
',
    'at_least_one_trigger'            => 'قانون باید حداقل یک ماشه داشته باشد.
',
    'at_least_one_active_trigger'     => 'قانون باید حداقل یک ماشه فعال داشته باشد.
',
    'at_least_one_action'             => 'قانون باید حداقل یک عمل داشته باشد.
',
    'at_least_one_active_action'      => 'قانون باید حداقل یک کنش فعال داشته باشد.
',
    'base64'                          => 'این داده های رمزگذاری شده base64 معتبر نیست.
',
    'model_id_invalid'                => 'شناسه داده شده برای این مدل نامعتبر به نظر می رسد.
',
    'less'                            => ':attribute باید کمتر از 10,000,000 باشد
',
    'active_url'                      => ':attribute یک URL معتبر نیست.
',
    'after'                           => ':attribute باید تاریخی بعد از :date باشد.
',
    'date_after'                      => 'تاریخ شروع باید قبل از تاریخ پایان باشد.
',
    'alpha'                           => 'ویژگی : ممکن است فقط شامل حروف باشد.
',
    'alpha_dash'                      => ':attribute ممکن است فقط شامل حروف، اعداد و خط تیره باشد.
',
    'alpha_num'                       => 'ویژگی : ممکن است فقط شامل حروف و اعداد باشد.
',
    'array'                           => ':attribute باید یک آرایه باشد.
',
    'unique_for_user'                 => 'قبلاً یک ورودی با این :attribute وجود دارد.
',
    'before'                          => 'ویژگی : باید تاریخی قبل از :date باشد.
',
    'unique_object_for_user'          => 'این نام قبلا استفاده شده است.
',
    'unique_account_for_user'         => 'این نام حساب در حال حاضر در حال استفاده است.
',

    'between.numeric'                 => 'مقدار :attribute باید بین :min و :max باشد.',
    'between.file'                    => ':attribute باید بین :min و :max کیلوبایت باشد.',
    'between.string'                  => 'ویژگی باید بین حداقل حداکثر کاراکتر باشد.',
    'between.array'                   => ':attribute باید بین :min و :max آیتم باشد.',
    'between_date'                    => 'The date must be between the given start and end date.',
    'boolean'                         => 'فیلد «:attribute» باید درست یا نادرست باشد.',
    'confirmed'                       => 'تایید ویژگی منطبق نیست.',
    'date'                            => ':attribute یک تاریخ معتبر نیست.',
    'date_format'                     => ':attribute با قالب :format مطابقت ندارد.
',
    'different'                       => ':attribute و :other باید متفاوت باشند.
',
    'digits'                          => ':attribute باید ارقام :digits باشد.
',
    'digits_between'                  => 'ویژگی باید بین حداقل و حداکثر رقم باشد.',
    'email'                           => '«:attribute» باید یک آدرس ایمیل معتبر باشد.',
    'filled'                          => 'فیلد ::attributeنامعتبر است.
',
    'exists'                          => ':attribute انتخاب شده نامعتبر است.
',
    'image'                           => ':attribute باید یک تصویر باشد.
',
    'in'                              => ':attribute انتخاب شده نامعتبر است.
',
    'integer'                         => ':attribute باید یک عدد صحیح باشد.
',
    'ip'                              => ':attribute باید یک آدرس IP معتبر باشد.
',
    'no_reserved_ip'                  => 'The URL must point to a valid IP address.',
    'bad_url_prefix'                  => 'This URL is invalid.',
    'json'                            => ':attribute باید یک رشته JSON معتبر باشد.
',
    'max.numeric'                     => ':attribute ممکن است بیشتر از :max نباشد.
',
    'max.file'                        => ':attribute ممکن است از :max کیلوبایت بیشتر نباشد.
',
    'max.string'                      => ':attribute ممکن است از نویسه های :max بیشتر نباشد.
',
    'max.array'                       => ':attribute ممکن است بیش از موارد :max نداشته باشد.
',
    'mimes'                           => ':attribute باید فایلی از نوع: :values ​​باشد.',
    'min.numeric'                     => ':attribute باید حداقل :min باشد.
',
    'lte.numeric'                     => 'ویژگی : باید کمتر یا مساوی :value باشد.',
    'min.file'                        => ':attribute باید حداقل :min کیلوبایت باشد.
',
    'min.string'                      => ':attribute باید حداقل کاراکتر :min باشد.
',
    'min.array'                       => ':attribute باید حداقل موارد :min داشته باشد.
',
    'not_in'                          => ':attribute انتخاب شده نامعتبر است.
',
    'numeric'                         => ':attribute باید یک عدد باشد.
',
    'convert_to_itself'               => 'Cannot store currency exchange rate for ":code", because from and to currency are the same.',
    'invalid_currency_code'           => 'Currency code ":code" is invalid',
    'scientific_notation'             => 'ویژگی : نمی تواند از نماد علمی استفاده کند.
',
    'numeric_primary'                 => 'The primary currency amount must be a number.',
    'numeric_destination'             => 'The destination amount must be a number.',
    'numeric_source'                  => 'مقدار منبع باید یک عدد باشد.
',
    'generic_invalid'                 => 'This value is invalid.',
    'transaction_type_changed'        => 'If you change the type of the transaction, make sure the correct source/destination accounts are set.',
    'regex'                           => 'قالب :ویژگی نامعتبر است.
',
    'required'                        => 'فیلد :ویژگی الزامی است.
',
    'required_if'                     => 'فیلد :attribute اجباری است تا زمانی که :other در :values باشد.',
    'required_unless'                 => 'فیلد :ویژگی الزامی است مگر اینکه :other در :values ​​باشد.
',
    'required_with'                   => 'در صورت وجود فیلد :values، فیلد :attribute نیز الزامی است.',
    'required_with_all'               => 'در صورت وجود فیلد :values، فیلد :attribute نیز الزامی است.',
    'required_without'                => 'فیلد :attribute اجباری است تا زمانی که :values وجود نداشته باشد.',
    'required_without_all'            => 'در صورت عدم وجود هر یک از فیلدهای :values، فیلد :attribute الزامی است.',
    'same'                            => ':attribute:و :otherباید مطابقت داشته باشند.
',
    'size.numeric'                    => ':Attribute باید برابر با :size باشد.',
    'amount_min_over_max'             => 'حداقل مقدار نمی تواند از حداکثر مقدار بیشتر باشد.
',
    'size.file'                       => ':attribute باید برابر با :size کیلوبایت باشد.',
    'size.string'                     => ':attribute باید برابر با :size کاراکتر باشد.',
    'size.array'                      => 'ویژگی : باید شامل موارد :size باشد.
',
    'unique'                          => ':attribute: قبلاً گرفته شده است.
',
    'string'                          => ':attribute : باید یک رشته باشد.
',
    'url'                             => 'قالب ::attributeنامعتبر است.
',
    'timezone'                        => ':attribute: باید یک ناحیه معتبر باشد.
',
    '2fa_code'                        => 'فیلد ::attributeنامعتبر است.
',
    'dimensions'                      => ':attribute: دارای ابعاد تصویر نامعتبر است.
',
    'distinct'                        => 'فیلد :attribute دارای یک مقدار تکراری است.
',
    'file'                            => ':attribute باید یک فایل باشد.
',
    'in_array'                        => 'فیلد :attribute در :other وجود ندارد.
',
    'present'                         => 'فیلد :attribute باید وجود داشته باشد.
',
    'amount_zero'                     => 'مقدار کل نمی تواند صفر باشد.
',
    'current_target_amount'           => 'مقدار فعلی باید کمتر از مقدار هدف باشد.
',
    'unique_piggy_bank_for_user'      => 'نام قلک باید منحصر به فرد باشد.
',
    'unique_object_group'             => 'نام گروه باید منحصر به فرد باشد
',
    'starts_with'                     => 'مقدار باید با :values ​​شروع شود.
',
    'unique_webhook'                  => 'شما قبلاً یک وب هوک با این ترکیب URL، راه‌انداز، پاسخ و تحویل دارید.
',
    'unique_existing_webhook'         => 'شما در حال حاضر وب هوک دیگری با این ترکیب از URL، راه‌انداز، پاسخ و تحویل دارید.
',
    'same_account_type'               => 'هر دو حساب باید از یک نوع حساب باشند
',
    'same_account_currency'           => 'هر دو حساب باید تنظیمات واحد پولی داشته باشند
',
    'piggy_no_change_currency'        => 'Because there are piggy banks linked to this account, you cannot change the currency of the account.',

    'secure_password'                 => 'This is not a secure password. Please try again. For more information, visit https://bit.ly/FF3-password',
    'valid_recurrence_rep_type'       => 'نوع تکرار نامعتبر برای تراکنش های مکرر.
',
    'valid_recurrence_rep_moment'     => 'لحظه تکرار نامعتبر برای این نوع تکرار.
',
    'invalid_account_info'            => 'اطلاعات حساب نامعتبر است.
',
    'attributes'                      => [
        'email'                   => 'آدرس ایمیل
',
        'description'             => 'توضیحات',
        'amount'                  => 'مبلغ',
        'transactions.*.amount'   => 'مبلغ تراکنش',
        'name'                    => 'نام',
        'piggy_bank_id'           => 'شناسه قلک





',
        'targetamount'            => 'مقدار هدف',
        'opening_balance_date'    => 'تاریخ موجودی اولیه',
        'opening_balance'         => 'موجودی اولیه',
        'match'                   => 'مطابقت',
        'amount_min'              => 'کمترین مبلغ',
        'amount_max'              => 'بیشترین مبلغ',
        'title'                   => 'عنوان',
        'tag'                     => 'برچسب',
        'transaction_description' => 'شرح معامله',
        'rule-action-value.1'     => 'مقدار عمل قانون #1
',
        'rule-action-value.2'     => 'مقدار عمل قانون #2
',
        'rule-action-value.3'     => 'مقدار عمل قانون #3
',
        'rule-action-value.4'     => 'مقدار عمل قانون #4
',
        'rule-action-value.5'     => 'مقدار عمل قانون #5',
        'rule-action.1'           => 'مقدار عمل قانون #1',
        'rule-action.2'           => 'عمل قانون شماره 2',
        'rule-action.3'           => 'عمل قانون شماره 3',
        'rule-action.4'           => 'عمل قانون شماره 4',
        'rule-action.5'           => 'عمل قانون شماره 5',
        'rule-trigger-value.1'    => 'عمل قانون شماره 1',
        'rule-trigger-value.2'    => 'مقدار ماشه قانون شماره 2
',
        'rule-trigger-value.3'    => 'مقدار ماشه قانون #3',
        'rule-trigger-value.4'    => 'مقدار ماشه قانون شماره 4
',
        'rule-trigger-value.5'    => 'مقدار ماشه قانون شماره 5
',
        'rule-trigger.1'          => 'ماشه قانون شماره 1
',
        'rule-trigger.2'          => 'ماشه قانون شماره 2
',
        'rule-trigger.3'          => 'ماشه قانون شماره 3
',
        'rule-trigger.4'          => 'ماشه قانون شماره 4
',
        'rule-trigger.5'          => 'ماشه قانون شماره 5
',
    ],

    // validation of accounts:
    'withdrawal_source_need_data'     => 'برای ادامه، باید یک شناسه حساب منبع معتبر و/یا نام حساب منبع معتبر دریافت کنید.
',
    'withdrawal_source_bad_data'      => '[a] هنگام جستجوی شناسه ":id" یا نام ":name" یک حساب منبع معتبر پیدا نشد.
',
    'withdrawal_dest_need_data'       => '[a] برای ادامه، باید یک شناسه حساب مقصد معتبر و/یا نام حساب مقصد معتبر دریافت کنید.
',
    'withdrawal_dest_bad_data'        => 'هنگام جستجوی شناسه ":id" یا نام ":name"، یک حساب مقصد معتبر پیدا نشد.
',

    'withdrawal_dest_iban_exists'     => 'این حساب مقصد IBAN در حال حاضر توسط یک حساب دارایی یا بدهی استفاده می شود و نمی توان از آن به عنوان مقصد برداشت استفاده کرد.
',
    'deposit_src_iban_exists'         => 'این حساب منبع IBAN در حال حاضر توسط یک حساب دارایی یا بدهی استفاده می شود و نمی توان از آن به عنوان منبع سپرده استفاده کرد.
',

    'reconciliation_source_bad_data'  => 'هنگام جستجوی شناسه ":id" یا نام ":name" یک حساب تطبیقی ​​معتبر پیدا نشد.
',

    'generic_source_bad_data'         => '[e] هنگام جستجوی شناسه ":id" یا نام ":name" یک حساب منبع معتبر پیدا نشد.
',

    'deposit_source_need_data'        => 'برای ادامه، باید یک شناسه حساب منبع معتبر و/یا نام حساب منبع معتبر دریافت کنید.
',
    'deposit_source_bad_data'         => '[b] هنگام جستجوی شناسه ":id" یا نام ":name" یک حساب منبع معتبر پیدا نشد.
',
    'deposit_dest_need_data'          => '[b] برای ادامه، باید یک شناسه حساب مقصد معتبر و/یا نام حساب مقصد معتبر دریافت کنید.
',
    'deposit_dest_bad_data'           => 'هنگام جستجوی شناسه ":id" یا نام ":name"، یک حساب مقصد معتبر پیدا نشد.
',
    'deposit_dest_wrong_type'         => 'حساب مقصد ارسال شده از نوع درستی نیست.
',

    'transfer_source_need_data'       => 'برای ادامه، باید یک شناسه حساب منبع معتبر و/یا نام حساب منبع معتبر دریافت کنید.
',
    'transfer_source_bad_data'        => '[c] هنگام جستجوی شناسه ":id" یا نام ":name" یک حساب منبع معتبر پیدا نشد.
',
    'transfer_dest_need_data'         => '[c] برای ادامه، باید یک شناسه حساب مقصد معتبر و/یا نام حساب مقصد معتبر دریافت کنید.
',
    'transfer_dest_bad_data'          => 'هنگام جستجوی شناسه ":id" یا نام ":name"، یک حساب مقصد معتبر پیدا نشد.
',
    'need_id_in_edit'                 => 'هر تقسیم باید Transaction_journal_id (شناسه معتبر یا 0) داشته باشد.
',

    'ob_source_need_data'             => 'برای ادامه، باید یک شناسه حساب منبع معتبر و/یا نام حساب منبع معتبر دریافت کنید.
',
    'lc_source_need_data'             => 'برای ادامه، باید یک شناسه حساب منبع معتبر دریافت کنید.
',
    'ob_dest_need_data'               => '[d] برای ادامه، باید یک شناسه حساب مقصد معتبر و/یا نام حساب مقصد معتبر دریافت کنید.
',
    'ob_dest_bad_data'                => 'هنگام جستجوی شناسه ":id" یا نام ":name"، یک حساب مقصد معتبر پیدا نشد.
',
    'reconciliation_either_account'   => 'برای ارسال یک آشتی، باید یک حساب منبع یا مقصد ارسال کنید. نه هر دو، نه هیچکدام.
',

    'generic_invalid_source'          => 'شما نمی توانید از این حساب به عنوان حساب منبع استفاده کنید.
',
    'generic_invalid_destination'     => 'شما نمی توانید از این حساب به عنوان حساب مقصد استفاده کنید.
',

    'generic_no_source'               => 'شما باید اطلاعات حساب منبع را ارسال کنید یا شناسه ژورنال تراکنش را ارسال کنید.
',
    'generic_no_destination'          => 'شما باید اطلاعات حساب مقصد را ارسال کنید یا شناسه ژورنال تراکنش را ارسال کنید.
',

    'gte.numeric'                     => 'The :attribute must be greater than or equal to :value.',
    'gt.numeric'                      => ':Attribute باید بزرگتر از :value باشد.',
    'gte.file'                        => ':attribute باید بزرگتر یا مساوی با :value کیلوبایت باشد.
',
    'gte.string'                      => ':attribute باید بزرگتر یا مساوی با نویسه های :value باشد.
',
    'gte.array'                       => ':attribute باید دارای آیتم های :value یا بیشتر باشد.
',
    'missing_with'                    => 'The :attribute cannot be combined with another field.',

    'amount_required_for_auto_budget' => 'مقدار مورد نیاز است.
',
    'auto_budget_amount_positive'     => 'مقدار باید بیشتر از صفر باشد.
',

    'auto_budget_period_mandatory'    => 'دوره بودجه خودکار یک زمینه اجباری است.
',

    // no access to administration:
    'no_auth_user_group'              => 'You have to be logged in to access this administration.',
    'no_access_user_group'            => 'شما حقوق دسترسی صحیحی برای این مدیریت ندارید.
',
    'administration_owner_rename'     => 'You can\'t rename your standard administration.',
    'existing_mfa_code'               => 'Please enter a valid code',
];
