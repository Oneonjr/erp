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
    'greeting'                                   => '您好，',
    'closing'                                    => '哔——啵——',
    'signature'                                  => 'Firefly III 邮件机器人',
    'footer_ps'                                  => 'PS: 此消息是由来自 IP :ipAddress 的请求触发的。',

    // admin test
    'admin_test_subject'                         => '来自 Firefly III 安装的测试消息',
    'admin_test_body'                            => '这是来自 Firefly III 站点的测试消息，收件人是 :email。',
    'admin_test_message'                         => '这是你的 Fifly III 实例通过频道":channel "发出的测试消息。',
    'admin_test_link'                            => '以下链接应指向您的 Firefly III 实例。该链接应该带有“http”或“https”前缀。若没有，请设置您的 `APP_URL` 环境变量：[:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => '邀请已发送',
    'invitation_created_body'                    => '管理员用户:email创建了用户邀请，可以由电子邮件地址背后的任何人使用":invitee"。 邀请将对48小时有效。',
    'invite_user_subject'                        => '您已被邀请创建一个Fifly III帐户。',
    'invitation_introduction'                    => '您已被邀请在 **:host**创建一个 Firefly III 帐户。 Firefly III是一个个人的、自托管的私人财务经理。所有很酷的人都在使用它。',
    'invitation_invited_by'                      => '您已经被“:admin”邀请，这个邀请已经被发送到“:invitee”。这是您，对吗？',
    'invitation_url'                             => '邀请有效期为48小时，可以通过访问 [Firefly III](:url)来兑现。享受！',

    // new IP
    'login_from_new_ip'                          => 'Firefly III 上有新的登录活动',
    'slack_login_from_new_ip'                    => '新 Firefly III 登录 IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III 检测到了来自未知 IP 地址的登录活动。如果您从未在下列 IP 地址登录，或上次登录已超过6个月，Firefly III 会提醒您。',
    'new_ip_warning'                             => '如果您认识该 IP 地址或知道该次登录，您可以忽略此信息。如果您没有登录，或者您不知道发生了什么，请立即前往个人档案页面，确认您的密码安全、修改新密码，并立即退出登录其他所有设备。为了保证帐户的安全性，请务必启用两步验证功能。',
    'ip_address'                                 => 'IP 地址',
    'host_name'                                  => '主机',
    'date_time'                                  => '日期与时间',
    'user_agent'                                 => '浏览器',

    // access token created
    'access_token_created_subject'               => '创建了一个新的访问令牌',
    'access_token_created_body'                  => '有人（希望是您）刚刚为您的帐户创建了一个新的 Firefly III API 访问令牌。',
    'access_token_created_explanation'           => '使用这个令牌，任何人都可以通过Firefly III API访问您的所有财务记录。',
    'access_token_created_revoke'                => '如果这不是您的操作，请尽快访问链接撤销该令牌：:url。',

    // unknown user login attempt
    'unknown_user_subject'                       => '一个未知用户尝试登录',
    'unknown_user_body'                          => '一个未知用户（`:ip`）尝试登录 Fifrefly III。他们使用的电子邮件地址是 `:address`。',
    'unknown_user_message'                       => '他们（`:ip`）使用的电子邮件地址是 `:address`。',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III 检测到登录失败',
    'failed_login_body'                          => 'Firefly III 检测到某人(您？) 无法使用您的帐户登录`:email`。请确认这是您。',
    'failed_login_message'                       => '检测到您的 Firefly III 账户`:email`尝试登录失败（`:ip`）。',
    'failed_login_warning'                       => '如果您确认此IP地址或登录尝试，您可以忽略此消息。 如果您没有尝试登录，那么如果您不知道这是什么， 验证您的密码安全性，更改它并注销所有其他会话。 要做到这一点，请到您的个人资料页面。确认您已经启用了2FA，对吗？保持安全！',

    // registered
    'registered_subject'                         => '欢迎使用 Firefly III！',
    'registered_subject_admin'                   => '一个新用户已注册',
    'admin_new_user_registered'                  => '一个新用户已经注册。用户 **:email** 已被授予用户 ID #:id。',
    'registered_welcome'                         => '欢迎来到 [Firefly III](:address)。收到这封电子邮件即确认您的注册已经完成。耶！',
    'registered_pw'                              => '如果您忘记了您的密码，请使用 [密码重置工具] (:address/password/reset) 重置密码。',
    'registered_help'                            => '每个页面右上角都有一个帮助图标。如果您需要帮助，请点击它！',
    'registered_closing'                         => '祝您使用愉快！',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => '密码已重置',
    'registered_doc_link'                        => '文档',

    // new version
    'new_version_email_subject'                  => '有新的 Firefly III 版本可用',

    // email change
    'email_change_subject'                       => '您的 Firefly III 电子邮件地址已更改',
    'email_change_body_to_new'                   => '您或有人访问您的 Firefly III 帐户已更改您的电子邮件地址。 如果不是您操作的，请忽略并删除。',
    'email_change_body_to_old'                   => '您或拥有您帐户访问权限的人修改了您的电子邮件地址。如果您没有进行该操作，您**必须**点击下方的“撤销操作”链接来保护您的帐户！',
    'email_change_ignore'                        => '如果该操作由您本人进行，您可以安全地忽略此消息。',
    'email_change_old'                           => '旧的电子邮件地址为：:email',
    'email_change_new'                           => '新的电子邮件地址为：:email',
    'email_change_instructions'                  => '在您确认该项更改前，您无法使用 Firefly III。请点击下方链接进行操作。',
    'email_change_undo_link'                     => '若要撤销改动，请点击此链接：',

    // OAuth token created
    'oauth_created_subject'                      => '新的 OAuth 客户端完成创建',
    'oauth_created_body'                         => '有人（希望是您）刚刚使用您的账户创建了一个新的 Firefly III API OAuth 客户端。客户端标签是“:name”，回调地址是 `:url`。',
    'oauth_created_explanation'                  => '通过该客户端，您的**所有**财务信息都可以通过 Firefly III API 来获取。',
    'oauth_created_undo'                         => '如果这不是您的操作，请尽快访问链接撤销该客户端授权：`:url`',

    // reset password
    'reset_pw_subject'                           => '您的密码重置请求',
    'reset_pw_message'                           => '您已收到电子邮件中的密码重置说明。如果是您，请按照说明操作。',
    'reset_pw_instructions'                      => '有人尝试重置您的密码。如果是您本人的操作，请点击下方链接进行重置。',
    'reset_pw_warning'                           => '请您**务必**确认打开的链接为真正的 Firefly III 站点。',

    // error
    'error_subject'                              => 'Firefly III 发生了错误',
    'error_intro'                                => 'Firefly III v:version 发生了错误：<span style="font-family: monospace;">:errorMessage</span>。',
    'error_type'                                 => '错误类型为“:class”。',
    'error_timestamp'                            => '错误发生于“:time”。',
    'error_location'                             => '错误产生于文件“<span style="font-family: monospace;">:file</span>” 第 :line 行代码 :code。',
    'error_user'                                 => '错误由用户 #:id（<a href="mailto::email">:email</a>）遇到。',
    'error_no_user'                              => '没有已登录用户遇到该错误，或未检测到用户信息。',
    'error_ip'                                   => '与该错误关联的 IP 地址是：:ip',
    'error_url'                                  => '网址为：:url',
    'error_user_agent'                           => '用户代理: :userAgent',
    'error_stacktrace'                           => '完整堆栈跟踪如下。如果您认为这是Fifrefly III中的错误，您可以将此消息转发到 <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefrechy-iiii。 rg</a>。这可以帮助修复您刚刚遇到的错误。',
    'error_github_html'                          => '如果您愿意，您也可以在 <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a> 上创建新工单。',
    'error_github_text'                          => '如果您愿意，您也可以在 https://github.com/firefrechy-iii/firefrechy-iii/issues 上创建新工单。',
    'error_stacktrace_below'                     => '完整的堆栈跟踪如下：',
    'error_headers'                              => '以下标题也可能具有相关性：',
    'error_post'                                 => '这是由用户提交的：',

    // report new journals
    'new_journals_subject'                       => 'Firefly III 创建了一笔新的交易|Firefly III 创建了 :count 笔新的交易',
    'new_journals_header'                        => 'Firefly III 为您创建了一笔交易，您可以在您的 Firefly III 站点中查看：|Firefly III 为您创建了 :count 笔交易，您可以在您的 Firefly III 站点中查看：',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => '您有 :count 个逾期未支付的周期性账单',
    'subscriptions_overdue_subject_single'       => '您有一个逾期未支付的周期性账单',
    'subscriptions_overdue_warning_intro_single' => '您有一个周期性账单逾期未支付。预期在下述日期付款，但尚未支付。',
    'subscriptions_overdue_warning_intro_multi'  => '您有 :count 个周期性账单逾期未支付。预期在下述日期付款，但尚未支付。',
    'subscriptions_overdue_please_action_single' => '或许您没有将交易关联到此周期性账单。如果是这样的，请将其关联。 您将不会再收到关于此周期性账单逾期的警告。新的警告将在下一个付款到期时发送。',
    'subscriptions_overdue_please_action_multi'  => '或许您没有将交易关联到这些周期性账单。如果是这样的，请将其关联。 您将不会再收到关于这些周期性账单逾期的警告。新的警告将在下一付款到期时发送。',
    'subscriptions_overdue_outro'                => '如果您认为这个消息是错误的，请联系 Fifly III 开发者。感谢您使用 Firefly III。',
    // bill warning
    'bill_warning_subject_end_date'              => '您的订阅 ":name" 将在 :diff 天内结束',
    'bill_warning_subject_now_end_date'          => '您的订阅“:name”将于今天到期',
    'bill_warning_subject_extension_date'        => '您的订阅 ":name" 将在 :diff 天内延长或取消',
    'bill_warning_subject_now_extension_date'    => '您的订阅":name" 将被延期或取消，就在今日',
    'bill_warning_end_date'                      => '您的订阅 **":name**将在 :date结束。此时此刻将传递大约**:diff days**。',
    'bill_warning_extension_date'                => '您的订阅 **":name**将在 :date上延长或取消。此时此刻将传递大约**:diff days**。',
    'bill_warning_end_date_zero'                 => '您的订阅 **":name**将于 :date结束。此时此刻将通过 **TODAY!**',
    'bill_warning_extension_date_zero'           => '您的订阅 **":name**将在 :date上延长或取消。此时此刻将通过 **TODAY!**',
    'bill_warning_please_action'                 => '请采取适当的行动。',

    // user has enabled MFA
    'enabled_mfa_subject'                        => '您已启用多因素认证',
    'enabled_mfa_slack'                          => '您(:email) 已启用多元素认证。这不正确吗？请检查您的设置！',
    'have_enabled_mfa'                           => '您已经在您的 Firefly III 帐户“:email”上启用了多因素认证。这意味着从现在起您需要使用验证器应用进行登录。',
    'enabled_mfa_warning'                        => '如果您没有启用此项，请立即联系您的管理员或查看 Firefly III 文档。',

    'disabled_mfa_subject'                       => '您已禁用多因素认证！',
    'disabled_mfa_slack'                         => '您 (:email) 已禁用多因素认证。如果这不正确，请检查您的设置！',
    'have_disabled_mfa'                          => '您已经禁用 Firefly III 账户“:email”的多因素认证。',
    'disabled_mfa_warning'                       => '如果您没有禁用此项，请立即联系您的管理员或查看 Firefly III 文档。',

    'new_backup_codes_subject'                   => '您已生成新的备份代码',
    'new_backup_codes_slack'                     => '您(:email) 已经生成了新的备用代码。这些代码可以用于登录到 Firefly III。如果这不正确，请检查您的设置！',
    'new_backup_codes_intro'                     => '您(:email) 已经生成了新的备用代码。这些代码可以用于在您无法使用您的验证 app 的时候登录到 Firefly III。',
    'new_backup_codes_warning'                   => '请将这些代码存储在一个安全的地方。如果你丢失了这些代码，你将无法登录到 Fifrefly III。 如果您没有这样做，请立即联系您的管理员或查看 Firefly III 文档。',

    'used_backup_code_subject'                   => '您使用了备用代码进行登录',
    'used_backup_code_slack'                     => '您 (:email) 使用了备用代码进行登录',

    'used_backup_code_intro'                     => '您（:email）使用了一个备用代码登录到 Fifrefly III。现在您可用于登录的备用代码减少一个。请从您的列表中删除它。',
    'used_backup_code_warning'                   => '如果您没有这样做，请立即联系您的管理员或查看 Firefly III文档。',

    // few left:
    'mfa_few_backups_left_subject'               => '您只剩 :count 个备用代码！',
    'mfa_few_backups_left_slack'                 => '您 (:email) 只剩 :count 个备用代码！',
    'few_backup_codes_intro'                     => '您 (:email) 已经使用了大部分的备用代码，只剩 :count 个。请尽快生成新的备用代码。',
    'few_backup_codes_warning'                   => '没有备用代码的话，如果您失去了对代码生成器的访问权限，您不能恢复您的多因素认证登录。',

    // NO left:
    'mfa_no_backups_left_subject'                => '您没有剩余的备份代码！',
    'mfa_no_backups_left_slack'                  => '您 (:email) 没有剩余的备份代码！',
    'no_backup_codes_intro'                      => '您 (:email) 已经使用了所有备用代码。请尽快生成新的备用代码。',
    'no_backup_codes_warning'                    => '没有备用代码的话，如果您失去了对代码生成器的访问权限，您不能恢复您的多因素认证登录。',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => '您已尝试使用多因素认证并且认证失败 :count 次！',
    'mfa_many_failed_slack'                      => '您 (:email) 已尝试使用多因素认证并且认证失败 :count 次。如果这不正确，请检查您的设置！',
    'mfa_many_failed_attempts_intro'             => '您 (:email) 已尝试使用多因素认证代码 :count 次，单这些登录尝试均已失败。您是否确认使用了正确的多因素认证代码？您是否确认服务器时间设置正确？',
    'mfa_many_failed_attempts_warning'           => '如果您没有这样做，请立即联系您的管理员或查看 Firefly III 文档。',
];
