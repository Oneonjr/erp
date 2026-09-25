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
    'greeting'                                   => 'ようこそ',
    'closing'                                    => 'ピーピー',
    'signature'                                  => 'Firely-iiiのメールロボット',
    'footer_ps'                                  => 'このメールは:ipAddressのリクエストにより送信されました。',

    // admin test
    'admin_test_subject'                         => 'あなたの Firefly III からのテストメッセージ',
    'admin_test_body'                            => 'これはあなたの Firefly III からのテストメッセージです。:email 宛に送信しました。',
    'admin_test_message'                         => 'This is a test message from your Firefly III instance over channel ":channel".',
    'admin_test_link'                            => 'The following link should point to your Firefly III installation. It should be correctly adorned with "http" or "https". If not, please set your `APP_URL` environment variable: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => '招待が作成されました',
    'invitation_created_body'                    => '管理者ユーザー「:email」はメールアドレス「:invitee」に関連する人が使える招待を作成しました。 招待は48時間有効です。',
    'invite_user_subject'                        => 'Firefly IIIアカウントの作成に招待されました。',
    'invitation_introduction'                    => 'あなたは**:host**上のFirefly IIIにアカウントを作成するよう招待されています。 Firefly IIIは個人でホストする、プライベートで個人的な財務管理ツールです。クールなキッズたちはみんな使っています。',
    'invitation_invited_by'                      => 'あなたは「:admin」に招待され、この招待は「:invitee」に送信されました。あなたですよね？',
    'invitation_url'                             => '招待は48時間有効で、[Firefly III](:url)にアクセスすれば招待を受けられます。お楽しみください。',

    // new IP
    'login_from_new_ip'                          => 'Firefly III に新しいログイン',
    'slack_login_from_new_ip'                    => 'IPアドレス :ip（:host）からの新しいFirefly IIIログイン',
    'new_ip_body'                                => 'Firefly III が未知のIPアドレスからあなたのアカウントへの新しいログインを検出しました。 以下のIPアドレスからログインしたことがないか、ログインから6ヶ月以上経過している場合、Firefly IIIは警告します。',
    'new_ip_warning'                             => 'この IP アドレスまたはログインに覚えがある場合は、このメッセージを無視してください。 ログインしていないか、これが何であるかがわからない場合、 パスワードの安全性を確認、変更し、すべてのセッションをログアウトしてください。 これはプロフィールページからできます。もちろん、すでに2要素認証は有効にしていますよね？ご安全に！',
    'ip_address'                                 => 'IPアドレス',
    'host_name'                                  => 'ホスト',
    'date_time'                                  => '日付と時刻',
    'user_agent'                                 => 'Browser',

    // access token created
    'access_token_created_subject'               => '新しいアクセストークンが作成されました。',
    'access_token_created_body'                  => 'あなたのユーザーアカウントの利用するために、新しいアクセストークンを作成した方がいます。',
    'access_token_created_explanation'           => 'このトークンを使用すると、Firefly III API を通してあなたの財務記録の **すべて** にアクセスできます。',
    'access_token_created_revoke'                => 'これがあなたではない場合、 :url にて即刻このトークンを無効化してください',

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
    'registered_subject'                         => 'Firefly III へようこそ！',
    'registered_subject_admin'                   => '新しいユーザーが登録されました',
    'admin_new_user_registered'                  => '新しいユーザーが登録されました。ユーザー **:email** にユーザー ID #:id が付与されました。',
    'registered_welcome'                         => '[Firefly III](:address) へようこそ。このメールにて登録が完了したことをお知らせします。やった！',
    'registered_pw'                              => 'パスワードを忘れた場合は、[パスワードリセットツール](:address/password/reset)を使用してリセットしてください。',
    'registered_help'                            => '各ページの右上にヘルプアイコンがあります。ヘルプが必要な場合は、クリックしてください。',
    'registered_closing'                         => 'では！',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'パスワードのリセット:',
    'registered_doc_link'                        => 'ドキュメント:',

    // new version
    'new_version_email_subject'                  => 'Firefly IIIの新しいバージョンが利用可能です',

    // email change
    'email_change_subject'                       => 'Firefly III のメールアドレスが変更されました',
    'email_change_body_to_new'                   => 'あなた、もしくはあなたのFirefly IIIアカウントにアクセスできるユーザーが、メールアドレスを変更しました。 このメッセージに覚えがない場合は、無視して削除してください。',
    'email_change_body_to_old'                   => 'あなた、もしくはあなたの Firefly III アカウントにアクセスできるユーザーが、メールアドレスを変更しました。 このメッセージに覚えがない場合は、 **必ず**以下の「元に戻す」リンクに従いアカウントを保護してください！',
    'email_change_ignore'                        => 'あなたがこの変更を開始した場合は、このメッセージを無視してください。',
    'email_change_old'                           => '古いメールアドレス: :email',
    'email_change_new'                           => '新しいメールアドレス: :email',
    'email_change_instructions'                  => 'この変更を確認するまで Firefly III を使用できません。以下のリンクに従ってください。',
    'email_change_undo_link'                     => '変更を元に戻すには、次のリンクに従ってください:',

    // OAuth token created
    'oauth_created_subject'                      => '新しいOAuthクライアントが作成されました',
    'oauth_created_body'                         => '誰か（おそらくあなた）があなたのユーザーアカウント用の新しい Firefly III API OAuth クライアントを作成しました。「:name」というラベルが付けられており、コールバック URL は「:url」です。',
    'oauth_created_explanation'                  => 'このトークンがあれば、Firefly III API を通してあなたの財務記録の **すべて** にアクセスできます。',
    'oauth_created_undo'                         => 'これがあなたではない場合、:url にて即刻このトークンを無効化してください',

    // reset password
    'reset_pw_subject'                           => 'パスワードリセットのリクエスト',
    'reset_pw_message'                           => 'You have received password reset instructions in your email. If this was you, please follow the instructions.',
    'reset_pw_instructions'                      => '誰かがあなたのパスワードをリセットしようとしました。もしあなたであれば、以下のリンクに従ってください。',
    'reset_pw_warning'                           => '**必ず** リンクが実際に Firefly III にリンクされていることを確認してください！',

    // error
    'error_subject'                              => 'Firefly III でエラーが発生しました',
    'error_intro'                                => 'Firefly III v:version でエラーが発生しました: <span style="font-family: monospace;">:errorMessage</span>。',
    'error_type'                                 => 'エラー種別は ":class" でした。',
    'error_timestamp'                            => 'エラーは :time に発生しました',
    'error_location'                             => 'このエラーは、ファイル "<span style="font-family: monospace;">:file</span>" :line 行目のコード :code で発生しました。',
    'error_user'                                 => 'ユーザー #:id <a href="mailto::email">:email</a> がエラーに遭遇しました。',
    'error_no_user'                              => 'このエラーの際、ユーザーはログインしていないか、ユーザーは検出されませんでした。',
    'error_ip'                                   => 'このエラーに関連する IP アドレス: :ip',
    'error_url'                                  => 'URL: :url',
    'error_user_agent'                           => 'ユーザーエージェント: :userAgent',
    'error_stacktrace'                           => 'The full stacktrace is below. If you think this is a bug in Firefly III, you can forward this message to <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. This can help fix the bug you just encountered.',
    'error_github_html'                          => 'ご希望の場合は、<a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>で新しいissueを作ることもできます。',
    'error_github_text'                          => 'ご希望の場合は、https://github.com/fofoflifly-iii/firelify-ii/issuesで新しいissueを作ることもできます。',
    'error_stacktrace_below'                     => '完全なスタックトレースは以下の通りです:',
    'error_headers'                              => '「headers」は技術用語「HTTP headers」を参照します',
    'error_post'                                 => 'This was submitted by the user:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III が取引を作成しました|Firefly III が:count件の取引を作成しました',
    'new_journals_header'                        => 'Firefly III が取引を作成しました。Firefly III で参照できます:|Firefly III が:count件の取引を作成しました。 Firefly III でそれらを参照できます。',

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
    'bill_warning_please_action'                 => '適切に対処してください。',

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
