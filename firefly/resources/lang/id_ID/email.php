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
    'greeting'                                   => 'Halo',
    'closing'                                    => 'Bip bip,',
    'signature'                                  => 'Robot pesan Firefly III',
    'footer_ps'                                  => 'NB: Pesan ini dikirim karena ada permintaan dari IP :ipAddress: yang memicunya.',

    // admin test
    'admin_test_subject'                         => 'Sebuah pesan tes dari instalasi Firefly III Anda',
    'admin_test_body'                            => 'Ini adalah sebuah pesan tes dari instans Firefly III Anda. Pesan ini dikirim ke :email.',
    'admin_test_message'                         => 'Ini adalah sebuah pesan tes dari instans Firefly III anda melalui kanal ":channel".',
    'admin_test_link'                            => 'The following link should point to your Firefly III installation. It should be correctly adorned with "http" or "https". If not, please set your `APP_URL` environment variable: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Undangan telah terkirim',
    'invitation_created_body'                    => 'Admin dengan pengguna ":email" telah membuat undangan pengguna yang dapat digunakan oleh siapa pun yang menggunakan alamat email ":invitee". Undangan ini akan berlaku selama 48 jam.',
    'invite_user_subject'                        => 'Anda diundang untuk membuat akun Firefly III.',
    'invitation_introduction'                    => 'Anda diundang untuk membuat akun Firefly III di **:host**. Firefly III adalah pengelola keuangan personal yang bersifat privat dan dapat di-host sendiri. Semua orang keren menggunakannya.',
    'invitation_invited_by'                      => 'Anda diundang oleh ":admin" dan undangan ini dikirim ke ":invitee". Itu Anda, kan?',
    'invitation_url'                             => 'Undangan ini berlaku selama 48 jam dan dapat digunakan dengan mengunjungi [Firefly III](:url). Selamat menikmati!',

    // new IP
    'login_from_new_ip'                          => 'Masuk baru pada Firefly III',
    'slack_login_from_new_ip'                    => 'Login baru Firefly III dari IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III mendeteksi adanya percobaan masuk baru pada akun Anda dari alamat IP yang tidak diketahui. Jika Anda tidak pernah masuk dari alamat IP di bawah, atau jika sudah lebih dari enam bulan lalu, Firefly III akan memperingatkan Anda.',
    'new_ip_warning'                             => 'Jika Anda mengenali alamat IP atau percobaan masuk ini, Anda dapat mengabaikan pesan ini. Jika Anda tidak masuk ke akun Anda, atau Anda tidak tahu arti pesan ini, ubah keamanan kata sandi Anda, dan keluar dari semua sesi lain. Untuk melakukan ini, masuk ke halaman profil Anda. Tentu saja Anda sudah memiliki otentikasi dua faktor, bukan? Tetaplah aman!',
    'ip_address'                                 => 'Alamat IP',
    'host_name'                                  => 'Tuan rumah',
    'date_time'                                  => 'Tanggal + waktu',
    'user_agent'                                 => 'Peramban',

    // access token created
    'access_token_created_subject'               => 'Token akses telah dibuat',
    'access_token_created_body'                  => 'Seseorang (semoga Anda) baru saja membuat sebuah token akses API Firefly III pada akun pengguna Anda.',
    'access_token_created_explanation'           => 'Dengan token ini, pihak tersebut dapat mengakses **seluruh** catatan keuangan Anda melalui API Firefly III.',
    'access_token_created_revoke'                => 'Jika ini bukan Anda, segera cabut token ini di :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Pengguna tidak dikenal mencoba masuk',
    'unknown_user_body'                          => 'An unknown user (`:ip`) tried to log in to Firefly III. The email address they used was `:address`.',
    'unknown_user_message'                       => 'The email address they (`:ip`) used was `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III mendeteksi upaya login yang gagal',
    'failed_login_body'                          => 'Firefly III detected that somebody (you?) failed to login with your account `:email`. Please verify that this was you.',
    'failed_login_message'                       => 'A failed login attempt (`:ip`) on your Firefly III account `:email` was detected.',
    'failed_login_warning'                       => 'If you recognize this IP address or the login attempt, you can ignore this message. If you didn\'t try to login, of if you have no idea what this is about, verify your password security, change it, and log out all other sessions. To do this, go to your profile page. Of course you have 2FA enabled already, right? Stay safe!',

    // registered
    'registered_subject'                         => 'Selamat Datang di Firefly III!',
    'registered_subject_admin'                   => 'A new user has registered',
    'admin_new_user_registered'                  => 'A new user has registered. User **:email** was given user ID #:id.',
    'registered_welcome'                         => 'Welcome to [Firefly III](:address). Your registration has made it, and this email is here to confirm it. Yay!',
    'registered_pw'                              => 'If you have forgotten your password already, please reset it using [the password reset tool](:address/password/reset).',
    'registered_help'                            => 'Ada ikon bantuan di pojok kanan atas di setiap halaman. Jika Anda membutuhkannya, klik ikonnya!',
    'registered_closing'                         => 'Selamat menikmati!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Atur ulang kata sandi:',
    'registered_doc_link'                        => 'Dokumentasi:',

    // new version
    'new_version_email_subject'                  => 'A new Firefly III version is available',

    // email change
    'email_change_subject'                       => 'Alamat surel Firefly III Anda telah diubah',
    'email_change_body_to_new'                   => 'Anda atau seseorang dengan akses ke akun Firefly III Anda telah mengubah alamat surel Anda. Jika Anda tidak merasa Anda membutuhkan pesan ini, mohon abaikan dan hapus.',
    'email_change_body_to_old'                   => 'You or somebody with access to your Firefly III account has changed your email address. If you did not expect this to happen, you **must** follow the "undo"-link below to protect your account!',
    'email_change_ignore'                        => 'Jika Anda yang melakukan perubahan, Anda dapat mengabaikan pesan ini.',
    'email_change_old'                           => 'Alamat surel yang lama adalah :email',
    'email_change_new'                           => 'Alamat surel yang baru adalah :email',
    'email_change_instructions'                  => 'Anda tidak dapat menggunakan Firefly III hingga Anda mengonfirmasi perubahan ini. Mohon ikuti tautan di bawah untuk melakukannya.',
    'email_change_undo_link'                     => 'Untuk membatalkan perubahan, ikuti tautan ini:',

    // OAuth token created
    'oauth_created_subject'                      => 'Klien OAuth telah dibuat',
    'oauth_created_body'                         => 'Somebody (hopefully you) just created a new Firefly III API OAuth Client for your user account. It\'s labeled ":name" and has callback URL `:url`.',
    'oauth_created_explanation'                  => 'With this client, they can access **all** of your financial records through the Firefly III API.',
    'oauth_created_undo'                         => 'If this wasn\'t you, please revoke this client as soon as possible at `:url`',

    // reset password
    'reset_pw_subject'                           => 'Permintaan atur ulang kata sandi Anda',
    'reset_pw_message'                           => 'You have received password reset instructions in your email. If this was you, please follow the instructions.',
    'reset_pw_instructions'                      => 'Seseorang mencoba mengatur ulang kata sandi Anda. Jika itu adalah Anda, mohon ikuti tautan di bawah untuk melakukannya.',
    'reset_pw_warning'                           => '**PLEASE** verify that the link actually goes to the Firefly III you expect it to go!',

    // error
    'error_subject'                              => 'Mendapati kesalahan pada Firefly III',
    'error_intro'                                => 'Firefly III v:version mendapati kesalahan: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'Kesalahan bertipe ":class".',
    'error_timestamp'                            => 'Kesalahan terjadi pada: :time.',
    'error_location'                             => 'Kesalahan ini terjadi pada file "<span style="font-family: monospace;">:file</span>" pada baris :line dengan kode :code.',
    'error_user'                                 => 'Kesalahan terjadi pada pengguna #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Tidak ada pengguna masuk untuk kesalahan ini atau tidak ada pengguna terdeteksi.',
    'error_ip'                                   => 'Alamat IP yang berhubungan dengan kesalahan ini adalah: :ip',
    'error_url'                                  => 'URL adalah: :url',
    'error_user_agent'                           => 'User agent: :userAgent',
    'error_stacktrace'                           => 'The full stacktrace is below. If you think this is a bug in Firefly III, you can forward this message to <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. This can help fix the bug you just encountered.',
    'error_github_html'                          => 'Jika Anda mau, Anda juga dapat membuka isu baru di <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'Jika Anda mau, Anda juga dapat membuka isu baru di https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                     => 'Jejak tumpukan lengkap ada di bawah:',
    'error_headers'                              => 'The following headers may also be relevant:',
    'error_post'                                 => 'This was submitted by the user:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III telah membuat transaksi baru|Firefly III telah membuat :count transaksi baru',
    'new_journals_header'                        => 'Firefly III telah membuat transaksi untuk Anda. Anda dapat menemukannya di instalasi Firefly III Anda:|Firefly telah membuat :count transaksi untuk Anda. Anda dapat menemukannya di instalasi Firefly III Anda:',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'Anda memiliki :count langganan yang jatuh tempo untuk dibayar',
    'subscriptions_overdue_subject_single'       => 'Anda memiliki satu langganan yang jatuh tempo untuk dibayar',
    'subscriptions_overdue_warning_intro_single' => 'Anda memiliki satu langganan yang jatuh tempo untuk dibayar. Pada tanggal berikut, pembayaran diharapkan, tetapi belum diterima.',
    'subscriptions_overdue_warning_intro_multi'  => 'Anda memiliki :count langganan yang jatuh tempo untuk dibayar. Pada tanggal berikut, pembayaran diharapkan, tetapi belum diterima.',
    'subscriptions_overdue_please_action_single' => 'Mungkin Anda hanya belum menautkan transaksi ke langganan ini. Jika demikian, silakan lakukan. Anda TIDAK akan menerima peringatan lain untuk langganan yang jatuh tempo ini. Peringatan baru akan dikirim untuk pembayaran berikutnya.',
    'subscriptions_overdue_please_action_multi'  => 'Mungkin Anda hanya belum menautkan transaksi ke langganan-langganan ini. Jika demikian, silakan lakukan. Anda TIDAK akan menerima peringatan lain untuk langganan yang jatuh tempo ini. Peringatan baru akan dikirim untuk pembayaran berikutnya.',
    'subscriptions_overdue_outro'                => 'Jika Anda merasa pesan ini salah, silakan hubungi pengembang Firefly III. Terima kasih telah menggunakan Firefly III.',
    // bill warning
    'bill_warning_subject_end_date'              => 'Langganan Anda ":name" akan berakhir dalam :diff hari',
    'bill_warning_subject_now_end_date'          => 'Langganan Anda ":name" berakhir HARI INI',
    'bill_warning_subject_extension_date'        => 'Langganan Anda ":name" harus diperpanjang atau dibatalkan dalam :diff hari',
    'bill_warning_subject_now_extension_date'    => 'Langganan Anda ":name" harus diperpanjang atau dibatalkan HARI INI',
    'bill_warning_end_date'                      => 'Langganan **":name"** dijadwalkan berakhir pada :date. Momen ini akan terjadi dalam sekitar **:diff hari**.',
    'bill_warning_extension_date'                => 'Langganan **":name"** harus diperpanjang atau dibatalkan pada :date. Momen ini akan terjadi dalam sekitar **:diff hari**.',
    'bill_warning_end_date_zero'                 => 'Langganan **":name"** dijadwalkan berakhir pada :date. Momen ini terjadi **HARI INI!**',
    'bill_warning_extension_date_zero'           => 'Langganan **":name"** harus diperpanjang atau dibatalkan pada :date. Momen ini terjadi **HARI INI!**',
    'bill_warning_please_action'                 => 'Please take the appropriate action.',

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
