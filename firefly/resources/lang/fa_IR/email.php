<?php

/**
 * email.php
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
    // common items
    'greeting'                                   => 'سلام،',
    'closing'                                    => 'بیپ بوپ،
',
    'signature'                                  => 'ربات ایمیل Firefly III
',
    'footer_ps'                                  => 'PS: این پیام ارسال شده است زیرا درخواستی از IP :ipAddress آن را راه اندازی کرده است.
',

    // admin test
    'admin_test_subject'                         => 'یک پیام آزمایشی از نصب Firefly III شما
',
    'admin_test_body'                            => 'این یک پیام آزمایشی از نمونه Firefly III شما است. به :email ارسال شد.
',
    'admin_test_message'                         => 'This is a test message from your Firefly III instance over channel ":channel".',
    'admin_test_link'                            => 'The following link should point to your Firefly III installation. It should be correctly adorned with "http" or "https". If not, please set your `APP_URL` environment variable: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'یک دعوت نامه ایجاد شده است
',
    'invitation_created_body'                    => 'کاربر ادمین ":email" یک دعوت نامه کاربر ایجاد کرد که می تواند توسط هر کسی که پشت آدرس ایمیل ":invitee" است از آن استفاده کند. مدت اعتبار دعوتنامه 48 ساعت خواهد بود.
',
    'invite_user_subject'                        => 'از شما دعوت شده است که یک حساب کاربری Firefly III ایجاد کنید.
',
    'invitation_introduction'                    => 'از شما دعوت شده است که یک حساب Firefly III در **:host** ایجاد کنید.Firefly III یک برنامه کاربردی،خود میزبان و خصوصی است برای مدیریت مالی شخصی است. همه بچه های باحال از آن استفاده می کنند.
',
    'invitation_invited_by'                      => 'شما توسط ":admin" دعوت شده اید و این دعوت به ":invitee" ارسال شده است.اون شما هستی، درسته؟
',
    'invitation_url'                             => ' دعوت‌نامه به مدت 48 ساعت اعتبار داره و می‌تونی با رفتن به[Firefly III](:url)  ازش استفاده کنی. لذت ببر!
',

    // new IP
    'login_from_new_ip'                          => 'ورود جدید در Firefly III
',
    'slack_login_from_new_ip'                    => 'لاگین جدید Firefly III از IP :ip (:host)
',
    'new_ip_body'                                => 'Firefly III یک ورود جدید در حساب شما از یک آدرس IP ناشناخته شناسایی کرد. اگر هرگز از آدرس IP زیر وارد نشده اید یا بیش از شش ماه پیش بوده است، Firefly III به شما هشدار می دهد.
',
    'new_ip_warning'                             => 'اگر این آدرس IP یا ورود به سیستم را می‌شناسید، می توانید این پیام را نادیده بگیرید. اگر وارد نشدید، اگر نمی‌دانید این درباره چیست، امنیت رمز عبور خود را تأیید کنید، آن را تغییر دهید و از تمام جلسات دیگر خارج شوید. برای این کار به صفحه پروفایل خود بروید. البته شما قبلاً 2FA را فعال کرده اید، درست است؟مراقب خودت باش! ',
    'ip_address'                                 => 'آدرس IP',
    'host_name'                                  => 'میزبان (هاست) ',
    'date_time'                                  => 'تاریخ و زمان',
    'user_agent'                                 => 'Browser',

    // access token created
    'access_token_created_subject'               => 'یک نشانه دسترسی جدید ایجاد شد
',
    'access_token_created_body'                  => 'یک نفر (امیدوارم شما) به تازگی یک توکن دسترسی API Firefly III جدید برای حساب کاربری شما ایجاد کرده است.
',
    'access_token_created_explanation'           => 'با این توکن، می توانند از طریق API Firefly III به همه سوابق مالی شما دسترسی داشته باشند.
',
    'access_token_created_revoke'                => 'اگر این شما نبودید، لطفاً این توکن را در اسرع وقت در :url لغو کنید
',

    // unknown user login attempt
    'unknown_user_subject'                       => 'An unknown user tried to log in',
    'unknown_user_body'                          => 'An unknown user (`:ip`) tried to log in to Firefly III. The email address they used was `:address`.',
    'unknown_user_message'                       => 'The email address they (`:ip`) used was `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III detected a failed login attempt',
    'failed_login_body'                          => 'Firefly III detected that somebody (you?) failed to login with your account `:email`. Please verify that this was you.',
    'failed_login_message'                       => 'A failed login attempt (`:ip`) on your Firefly III account `:email` was detected.',
    'failed_login_warning'                       => 'If you recognize this IP address or the login attempt, you can ignore this message. If you didn\'t try to login, of if you have no idea what this is about, verify your password security, change it, and log out all other sessions. To do this, go to your profile page. Of course you have 2FA enabled already, right? Stay safe!',

    // registered
    'registered_subject'                         => 'به Firefly III خوش آمدید!',
    'registered_subject_admin'                   => 'کاربر جدیدی ثبت نام کرده است
',
    'admin_new_user_registered'                  => 'کاربر جدیدی ثبت نام کرده است. به کاربر **:email** شناسه کاربری #:id داده شد.
',
    'registered_welcome'                         => 'به [Firefly III](:address) خوش آمدید! ثبت نام شما با موفقیت انجام شد و این ایمیل برای تایید آن ارسال شده است. آری
',
    'registered_pw'                              => 'اگر رمز عبور خود را فراموش کرده اید، لطفاً با استفاده از [ابزار بازنشانی رمز عبور] (:address/password/reset) آن را بازیابی کنید.

',
    'registered_help'                            => 'یک نماد راهنما در گوشه سمت راست بالای هر صفحه وجود دارد. اگر به کمک نیاز دارید، روی آن کلیک کنید!
',
    'registered_closing'                         => 'لذت ببرید!',
    'registered_firefly_iii_link'                => 'فایرفلای',
    'registered_pw_reset_link'                   => 'بازیابی کلمه عبور',
    'registered_doc_link'                        => 'مستندات',

    // new version
    'new_version_email_subject'                  => 'نسخه جدید Firefly III در دسترس است
',

    // email change
    'email_change_subject'                       => 'آدرس ایمیل Firefly III شما تغییر کرده است
',
    'email_change_body_to_new'                   => 'شما یا شخصی که به حساب Firefly III شما دسترسی دارد آدرس ایمیل شما را تغییر داده است. اگر انتظار این پیام را نداشتید، لطفا آن را نادیده بگیرید و حذف کنید.

',
    'email_change_body_to_old'                   => 'شما یا شخصی که به حساب Firefly III شما دسترسی دارد آدرس ایمیل شما را تغییر داده است. اگر انتظار نداشتید این اتفاق بیفتد، **باید** پیوند "undo"-زیر را دنبال کنید تا از حساب خود محافظت کنید!
',
    'email_change_ignore'                        => 'اگر خودتان این تغییر را انجام داده‌اید، می‌توانید این پیام را نادیده بگیرید.

',
    'email_change_old'                           => 'آدرس ایمیل قدیمی این بود: :email
',
    'email_change_new'                           => 'آدرس ایمیل جدید: :email 
',
    'email_change_instructions'                  => 'تا زمانی که این تغییر را تأیید نکنید، نمی‌توانید از  Firefly III استفاده کنید. لطفاً برای تأیید، روی لینک زیر کلیک کنید.

',
    'email_change_undo_link'                     => 'برای لغو این تغییر، این لینک را دنبال کنید:


',

    // OAuth token created
    'oauth_created_subject'                      => 'یک سرویس گیرنده OAuth جدید ایجاد شده است
',
    'oauth_created_body'                         => 'فردی (احتمالا شما) به تازگی یک Firefly III API OAuth Client جدید برای حساب کاربری شما ایجاد کرده است. این برچسب ":name" دارد و دارای URL بازگشت به تماس `:url` است.
',
    'oauth_created_explanation'                  => 'با استفاده از این مشتری، آنها می توانند از طریق API Firefly III به **همه** سوابق مالی شما دسترسی داشته باشند.
',
    'oauth_created_undo'                         => 'اگر شما نبودید، لطفاً این مشتری را در اسرع وقت در `:url` لغو کنید


',

    // reset password
    'reset_pw_subject'                           => 'درخواست بازنشانی رمز عبور شما
',
    'reset_pw_message'                           => 'You have received password reset instructions in your email. If this was you, please follow the instructions.',
    'reset_pw_instructions'                      => 'فردی سعی کرد رمز عبور شما را بازنشانی کند. اگر شما بودید، لطفا لینک زیر را دنبال کنید تا این کار را انجام دهید.
',
    'reset_pw_warning'                           => '**لطفا** بررسی کنید که لینک واقعاً به Firefly III مورد نظر شما می‌رود 


',

    // error
    'error_subject'                              => 'در Firefly III خطایی رخ داد
',
    'error_intro'                                => 'Firefly III v:version با خطا مواجه شد: <span style="font-family: monospace;">:errorMessage</span>.
',
    'error_type'                                 => 'خطا از نوع ":class" بود.
',
    'error_timestamp'                            => 'خطا در: :time رخ داد.
',
    'error_location'                             => 'این خطا در فایل "<span style="font-family: monospace;">:file</span>" on line :line with code :code رخ داده است.
',
    'error_user'                                 => 'کاربر #:id، <a href="mailto::email">:email</a> با خطا مواجه شد.
',
    'error_no_user'                              => 'هیچ کاربری برای این خطا وارد نشده است یا هیچ کاربری شناسایی نشده است.
',
    'error_ip'                                   => 'آدرس IP مربوط به این خطا: :ip است
',
    'error_url'                                  => 'آدرس اینترنتی: :url است
',
    'error_user_agent'                           => 'عامل کاربر: :userAgent
',
    'error_stacktrace'                           => 'The full stacktrace is below. If you think this is a bug in Firefly III, you can forward this message to <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. This can help fix the bug you just encountered.',
    'error_github_html'                          => 'اگر ترجیح می دهید، می توانید یک موضوع جدید را نیز در <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a> باز کنید.',
    'error_github_text'                          => 'اگر ترجیح می دهید، می توانید یک موضوع جدید را نیز در https://github.com/firefly-iii/firefly-iii/issues باز کنید.
',
    'error_stacktrace_below'                     => 'stacktrace کامل در زیر آمده است:
',
    'error_headers'                              => 'سرفصل های زیر نیز ممکن است مرتبط باشند:
',
    'error_post'                                 => 'این توسط کاربر ارسال شده است:
',

    // report new journals
    'new_journals_subject'                       => 'Firefly III یک تراکنش جدید ایجاد کرده است|Firefly III تراکنش های جدید :count را ایجاد کرده است
',
    'new_journals_header'                        => 'Firefly III یک تراکنش برای شما ایجاد کرده است. می توانید آن را در نصب Firefly III خود پیدا کنید:|Firefly III تراکنش های :count را برای شما ایجاد کرده است. می توانید آنها را در نصب Firefly III خود پیدا کنید:
',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'You have :count subscriptions that are overdue to be paid',
    'subscriptions_overdue_subject_single'       => 'You have a subscription that is overdue to be paid',
    'subscriptions_overdue_warning_intro_single' => 'You have one subscription that is overdue to be paid. At the following date(s) a payment was expected, but it has not yet arrived.',
    'subscriptions_overdue_warning_intro_multi'  => 'You have :count subscription(s) that are overdue to be paid. At the following date(s) a payment was expected, but it has not yet arrived.',
    'subscriptions_overdue_please_action_single' => 'Perhaps you have simply not linked a transaction to this subscription. In that case, please do so. You will NOT get another warning about this overdue subscription. A new warning will be sent out for the NEXT due payment.',
    'subscriptions_overdue_please_action_multi'  => 'Perhaps you have simply not linked a transaction to these subscriptions. In that case, please do so. You will NOT get another warning about these overdue subscriptions. A new warning will be sent out for the NEXT due payments.',
    'subscriptions_overdue_outro'                => 'If you believe this message is wrong, please contact the Firefly III developer. Thank you for using Firefly III.',
    // bill warning
    'bill_warning_subject_end_date'              => 'Your subscription ":name" is due to end in :diff days',
    'bill_warning_subject_now_end_date'          => 'Your subscription ":name" is due to end TODAY',
    'bill_warning_subject_extension_date'        => 'Your subscription ":name" is due to be extended or cancelled in :diff days',
    'bill_warning_subject_now_extension_date'    => 'Your subscription ":name" is due to be extended or cancelled TODAY',
    'bill_warning_end_date'                      => 'Your subscription **":name"** is due to end on :date. This moment will pass in about **:diff days**.',
    'bill_warning_extension_date'                => 'Your subscription **":name"** is due to be extended or cancelled on :date. This moment will pass in about **:diff days**.',
    'bill_warning_end_date_zero'                 => 'Your subscription **":name"** is due to end on :date. This moment will pass **TODAY!**',
    'bill_warning_extension_date_zero'           => 'Your subscription **":name"** is due to be extended or cancelled on :date. This moment will pass **TODAY!**',
    'bill_warning_please_action'                 => 'لطفاً اقدام لازم را انجام دهید.

',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'You have enabled multi-factor authentication',
    'enabled_mfa_slack'                          => 'You (:email) have enabled multi-factor authentication. Is this not correct? Check your settings!',
    'have_enabled_mfa'                           => 'You have enabled multi-factor authentication on your Firefly III account ":email". This means that you will need to use an authenticator app to log in from now on.',
    'enabled_mfa_warning'                        => 'If you did not enable this, please contact your administrator immediately or check out the Firefly III documentation.',

    'disabled_mfa_subject'                       => 'You have disabled multi-factor authentication!',
    'disabled_mfa_slack'                         => 'You (:email) have disabled multi-factor authentication. Is this not correct? Check your settings!',
    'have_disabled_mfa'                          => 'You have disabled multi-factor authentication on your Firefly III account ":email".',
    'disabled_mfa_warning'                       => 'If you did not disable this, please contact your administrator immediately or check out the Firefly III documentation.',

    'new_backup_codes_subject'                   => 'You have generated new back-up codes',
    'new_backup_codes_slack'                     => 'You (:email) have generated new back-up codes. These can be used to login to Firefly III. Is this not correct? Check your settings!',
    'new_backup_codes_intro'                     => 'You (:email) have generated new back-up codes. These can be used to login to Firefly III if you lose access to your authenticator app.',
    'new_backup_codes_warning'                   => 'Please store these codes in a safe place. If you lose them, you will not be able to log in to Firefly III. If you did not do this, please contact your administrator immediately or check out the Firefly III documentation.',

    'used_backup_code_subject'                   => 'You have used a back-up code to login',
    'used_backup_code_slack'                     => 'You (:email) have used a back-up code to login',

    'used_backup_code_intro'                     => 'You (:email) have used a back-up co    de to login to Firefly III. You now have one less back-up code to login with. Please remove it from your list.',
    'used_backup_code_warning'                   => 'If you did not do this, please contact your administrator immediately or check out the Firefly III documentation.',

    // few left:
    'mfa_few_backups_left_subject'               => 'You have only :count backup code(s) left!',
    'mfa_few_backups_left_slack'                 => 'You (:email) have only :count backup code(s) left!',
    'few_backup_codes_intro'                     => 'You (:email) have used most of your backup codes, and now have only :count left. Please generate new ones as soon as possible.',
    'few_backup_codes_warning'                   => 'Without backup codes, you cannot recover your MFA login if you lose access to your code generator.',

    // NO left:
    'mfa_no_backups_left_subject'                => 'You have NO backup codes left!',
    'mfa_no_backups_left_slack'                  => 'You (:email) NO backup codes left!',
    'no_backup_codes_intro'                      => 'You (:email) have used ALL of your backup codes. Please generate new ones as soon as possible.',
    'no_backup_codes_warning'                    => 'Without backup codes, you cannot recover your MFA login if you lose access to your code generator.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => 'You have tried and failed to use multi-factor authentication :count times now!',
    'mfa_many_failed_slack'                      => 'You (:email) have tried and failed to use multi-factor authentication :count times now. Is this not correct? Check your settings!',
    'mfa_many_failed_attempts_intro'             => 'You (:email) have tried :count times to use a multi-factor authentication code, but these login attempts have failed. Are you sure you are using the right MFA code? Are you sure the time on the server is correct?',
    'mfa_many_failed_attempts_warning'           => 'If you did not do this, please contact your administrator immediately or check out the Firefly III documentation.',
];
