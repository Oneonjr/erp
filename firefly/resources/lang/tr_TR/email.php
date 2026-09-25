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
    'greeting'                                   => 'Selam',
    'closing'                                    => 'Bip bop',
    'signature'                                  => 'Firefly III Posta Robotu',
    'footer_ps'                                  => 'Not: Bu ileti, IP:ıpaddress\'den gelen bir istek tetiklediği için gönderildi.',

    // admin test
    'admin_test_subject'                         => 'Firefly III kurulumunuzdan bir test mesajı',
    'admin_test_body'                            => 'Bu, Firefly III örneğinizden gelen bir test mesajıdır. Şu adrese gönderildi: e-posta.',
    'admin_test_message'                         => 'Bu ":channel" kanalı üzerinden gönderilen sizin Firely III örneğinizden gelen bir test mesajıdır.',
    'admin_test_link'                            => 'Aşağıdaki bağlantı sizin Firefly III kurulumunuza işaret etmeli. Bağlantı doğru bir şekilde "http" ya da "https" ile başlamalıdır. Değilse lütfen `APP_URL` ortam değişkenini ayarlayın: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Bir davet oluşturuldu',
    'invitation_created_body'                    => 'Admin kullanıcı ":email",:invitee" adresinin arkasındaki kişi tarafından kullanılabilecek bir kullanıcı daveti oluşturdu. Bu davet 48 saat boyunca geçerli olacak.',
    'invite_user_subject'                        => 'Firefly III hesabı oluşturmanız için davet edildiniz.',
    'invitation_introduction'                    => '"":host"" adresinde bir Firefly III hesabı oluşturmak için davet edildiniz. Firefly III, kişisel, kendi kendine barındırılan, özel bir finans yöneticisidir.',
    'invitation_invited_by'                      => '":admin" tarafından davet edildiniz ve bu davetiye ":invitee" adresine gönderilmiştir. Bu sensin, değil mi?',
    'invitation_url'                             => 'Davetiye 48 saat boyunca geçerlidir ve [Firefly III](:url)\'e dalmak için kullanılabilir. Tadını çıkar!',

    // new IP
    'login_from_new_ip'                          => 'Firefly III yeni giriş',
    'slack_login_from_new_ip'                    => ':ip (:host) üzerinden yeni Firefly III girişi',
    'new_ip_body'                                => 'Firefly III, hesabınızda bilinmeyen bir IP adresinden yeni bir giriş tespit etti. Aşağıdaki IP adresinden hiç giriş yapmadıysanız veya altı aydan daha uzun bir süre önce yapıldıysa, Firefly III sizi uyaracaktır.',
    'new_ip_warning'                             => 'Bu IP adresini veya oturum açmayı tanıyorsanız, bu iletiyi yoksayabilirsiniz. Eğer giriş eğer konuyla ilgili hiçbir fikriniz varsa, şifre güvenliğinizi doğrulamak, ve çıkış tüm oturumlar bu değişiklik olmadıysa. Bunu yapmak için profil sayfanıza gidin. Tabii ki zaten 2FA etkin, değil mi? Güvende kalın!',
    'ip_address'                                 => 'IP adresi',
    'host_name'                                  => 'Host',
    'date_time'                                  => 'Tarih + saat',
    'user_agent'                                 => 'Tarayıcı',

    // access token created
    'access_token_created_subject'               => 'Yeni bir erişim belirteci oluşturuldu',
    'access_token_created_body'                  => 'Birisi (umarız sensindir) hesabın için yeni bir Firefly III API Erişim Anahtarı oluşturdu.',
    'access_token_created_explanation'           => 'Bu belirteçle, Firefly III API\'sı aracılığıyla tüm finansal kayıtlarınıza erişebilirler.',
    'access_token_created_revoke'                => 'Bu siz değilseniz, lütfen bu belirteci mümkün olan en kısa sürede iptal edin :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Bilinmeyen bir kullanıcı giriş yapmaya çalıştı',
    'unknown_user_body'                          => 'Bilinmeyen bir kullanıcı (`:ip`) Firefly III\'e giriş yapmaya çalıştı. Kullandıkları email adresi `:address`.',
    'unknown_user_message'                       => 'Kullandıkları (`:ip`) email adresi `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III başarısız bir oturum açma girişimi tespit etti',
    'failed_login_body'                          => 'Firefly III birisinin (siz?) sizin `:email` hesabınızla giriş yapamadığını tespit etti. Lütfen bunun siz olduğunu doğrulayın.',
    'failed_login_message'                       => 'Sizin Firefly III hesabınız `:email` e/a başarısız bir giriş denemesi (`:ip`) tespit edildi.',
    'failed_login_warning'                       => 'Bu IP adresini veya oturum açma girişimini tanıyorsanız, bu iletiyi yoksayabilirsiniz. Eğer giriş yapmayı denemediyseniz ya da bunun ne olduğu hakkında hiçbir fikriniz yoksa şifre güvenliğinizi doğrulayın, değiştirin ve tüm diğer oturumlardan çıkış yapın. Bunu yapmak için profil sayfanıza gidin. Tabii ki zaten iki adımlı doğrulamayı (2FA) etkinleştirdiniz, değil mi? Güvende kalın!',

    // registered
    'registered_subject'                         => 'Firefly III\'e hoşgeldiniz!',
    'registered_subject_admin'                   => 'Yeni bir kullanıcı kayıt edildi',
    'admin_new_user_registered'                  => 'Yeni bir kullanıcı kayıt edildi. **:email** kullanıcısına #:id kimlik numarası verildi.',
    'registered_welcome'                         => '[Firefly III] \'e hoş geldiniz(:address). Kaydınız yapıldı ve bu e-posta onaylamak için burada. Yay!',
    'registered_pw'                              => 'Parolanızı zaten unuttuysanız, lütfen [parola sıfırlama aracı] (:adres/parola/sıfırla) kullanarak sıfırlayın.',
    'registered_help'                            => 'Her sayfanın sağ üst köşesinde bir yardım simgesi bulunur. Yardıma ihtiyacınız olursa, tıklayın!',
    'registered_closing'                         => 'Tadını çıkarın!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Şifre sıfırlama:',
    'registered_doc_link'                        => 'Belge:',

    // new version
    'new_version_email_subject'                  => 'Yeni bir Firefly III güncellemesi mevcut',

    // email change
    'email_change_subject'                       => 'Firefly III e-posta adresiniz değişti',
    'email_change_body_to_new'                   => 'Siz veya Firefly III hesabınıza erişimi olan biri e-posta adresinizi değiştirdi. Bu iletiyi beklemediyseniz, lütfen yoksayın ve silin.',
    'email_change_body_to_old'                   => 'Siz veya Firefly III hesabınıza erişimi olan biri e-posta adresinizi değiştirdi. Bunun olmasını beklemediyseniz, hesabınızı korumak için aşağıdaki "geri al" bağlantısını takip etmeniz gerekir!',
    'email_change_ignore'                        => 'Bu değişikliği başlattıysanız, bu iletiyi güvenle yoksayabilirsiniz.',
    'email_change_old'                           => 'Önceki e-posta adresi: :email',
    'email_change_new'                           => 'Yeni e-posta adresi: :email',
    'email_change_instructions'                  => 'Bu değişikliği onaylayana kadar Firefly Iıı\'ü kullanamazsınız. Lütfen bunu yapmak için aşağıdaki bağlantıyı takip edin.',
    'email_change_undo_link'                     => 'Değişikliği geri almak için bu bağlantıyı takip edin:',

    // OAuth token created
    'oauth_created_subject'                      => 'Yeni bir OAuth istemcisi oluşturuldu',
    'oauth_created_body'                         => 'Birisi (umarım siz) kullanıcı hesabınız için yeni bir Firefly III API OAuth İstemcisi oluşturmuştur. ":name" etiketli ve `:url\' geri arama URL\'sine sahip.',
    'oauth_created_explanation'                  => 'Bu müşteri ile Firefly III API\'sı aracılığıyla **tüm ** finansal kayıtlarınıza erişebilirler.',
    'oauth_created_undo'                         => 'Bu siz değilseniz, lütfen bu istemciyi mümkün olan en kısa sürede `:url\' adresinden iptal edin',

    // reset password
    'reset_pw_subject'                           => 'Parola sıfırlama isteğin',
    'reset_pw_message'                           => 'Parolanızı sıfırlama talimatlarınızı email olarak aldınız. Eğer bu sizseniz lütfen talimatları takip edin.',
    'reset_pw_instructions'                      => 'Birisi şifrenizi sıfırlamaya çalıştı. Siz olsaydınız, bunu yapmak için lütfen aşağıdaki bağlantıyı takip edin.',
    'reset_pw_warning'                           => '** LÜTFEN ** bağlantının gerçekten gitmesini beklediğiniz Firefly III\'e gittiğinden emin olun!',

    // error
    'error_subject'                              => 'Firefly III\'te bir hata yakalandı',
    'error_intro'                                => 'Firefly III v: sürüm bir hatayla karşılaştı: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'Hata ":class türündeydi.',
    'error_timestamp'                            => 'Hata açık / kapalı olarak oluştu: :time.',
    'error_location'                             => 'Bu hata dosyada oluştu "<span style="font-family: monospace;">:file</span>" on line :line with code :code.',
    'error_user'                                 => 'Hatayla kullanıcı karşılaştı #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Bu hata için kullanıcı oturum açmadı veya kullanıcı algılanmadı.',
    'error_ip'                                   => 'Bu hatayla ilgili IP adresi: :ip',
    'error_url'                                  => 'Link: :url',
    'error_user_agent'                           => 'User agent: :userAgent',
    'error_stacktrace'                           => 'Tüm stacktrace aşağıda. Eğer bunun Firefly III\'de bir hata olduğunu düşünüyorsanız bu mesajı <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>\'a iletebilirsiniz. Bu bulduğunuz hatanın düzeltilmesine yardım edebilir.',
    'error_github_html'                          => 'İsterseniz, yeni bir sayı da açabilirsiniz <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'İsterseniz, yeni bir sayı da açabilirsiniz https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                     => 'Tam stacktrace aşağıdadır:',
    'error_headers'                              => 'Aşağıdaki başlıklar da alakalı olabilir:',
    'error_post'                                 => 'Bu şu kullanıcı tarafından gönderildi:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III yeni bir işlem yarattı / Firefly III yarattı :count yeni işlemler',
    'new_journals_header'                        => 'Firefly III sizin için bir anlaşma yaptı. Firefly III kurulumunuzda bulabilirsiniz: / Firefly III sizin için :count sayım işlemleri. Bunları Firefly III kurulumunuzda bulabilirsiniz:',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'Ödenmesi gecikmiş :count aboneliğiniz var',
    'subscriptions_overdue_subject_single'       => 'Ödenmesi gecikmiş bir aboneliğiniz var',
    'subscriptions_overdue_warning_intro_single' => 'Ödenmesi gecikmiş bir aboneliğiniz var. Aşağıdaki tarihlerde ödemenin gerçekleşmesi bekleniyordu ama daha gerçekleşmedi.',
    'subscriptions_overdue_warning_intro_multi'  => 'Ödemesi gecikmiş :count aboneliğiniz var. Aşağıdaki tarihlerde ödemenin gerçekleşmesi bekleniyordu ama daha gerçekleşmedi.',
    'subscriptions_overdue_please_action_single' => 'Belki de bir işlemi bu aboneliğe bağlamayı unuttunuz. Eğer böyle ise lütfen bağlayın. Ödemesi geçmiş bu abonelik için tekrar bir uyarı ALMAYACAKSINIZ. Yeni bir uyarı bir SONRAKİ ödeme zamanında gönderilecek.',
    'subscriptions_overdue_please_action_multi'  => 'Belki de bir işlemi bu aboneliklere bağlamayı unuttunuz. Eğer böyle ise lütfen bağlayın. Ödemesi geçmiş bu abonelikler için tekrar bir uyarı ALMAYACAKSINIZ. Yeni bir uyarı bir SONRAKİ ödeme zamanında gönderilecek.',
    'subscriptions_overdue_outro'                => 'Eğer bu mesajın hatalı olduğunu düşünüyorsanız lütfen Firefly III geliştiricileri ile iletişime geçin. Firefly III\'ü kullandığınız için teşekkür ederiz.',
    // bill warning
    'bill_warning_subject_end_date'              => '":name" aboneliğiniz :diff gün içinde sona erecek',
    'bill_warning_subject_now_end_date'          => '":name" aboneliğiniz BUGÜN sona erecek',
    'bill_warning_subject_extension_date'        => '":name" aboneliğiniz :diff gün içinde uzatılacak ya da iptal edilecek',
    'bill_warning_subject_now_extension_date'    => '":name" aboneliğiniz BUGÜN uzatılacak ya da iptal edilecek',
    'bill_warning_end_date'                      => '**":name"** aboneliğiniz :date tarihinde sona erecek. Bu tarihe **:diff gün** kaldı.',
    'bill_warning_extension_date'                => '**":name"** aboneliğiniz :date tarihinde uzatılacak ya da iptal edilecek.. Bu tarihe **:diff gün** kaldı.',
    'bill_warning_end_date_zero'                 => '**":name"** aboneliğiniz :date tarihinde sona erecek. O tarih **BUGÜN!**',
    'bill_warning_extension_date_zero'           => '**":name"** aboneliğiniz :date tarihinde uzatılacak ya da iptal edilecek. O tarih **BUGÜN!**',
    'bill_warning_please_action'                 => 'Lütfün gerekli işlemleri yapın.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'Çok adımlı doğrulamayı etkinleştirdiniz',
    'enabled_mfa_slack'                          => 'Siz (:email) çok adımlı doğrulamayı etkinleştirdiniz. Bu doğru değil mi? Ayarlarını kontrol et!',
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
    'mfa_many_failed_attempts_warning'           => 'Bunu yapmadıysanız, lütfen derhal yöneticinizle iletişime geçin veya Firefly III belgelerini kontrol edin.',
];
