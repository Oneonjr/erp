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
    'greeting'                                   => 'Olá,',
    'closing'                                    => 'Beep boop,',
    'signature'                                  => 'O robot de email do Firefly III',
    'footer_ps'                                  => 'PS: Esta mensagem foi enviada porque um pedido do IP :ipAddress a ativou.',

    // admin test
    'admin_test_subject'                         => 'Uma mensagem de teste da instalação do Firefly III',
    'admin_test_body'                            => 'Esta é uma mensagem de teste da sua instância do Firefly III. Foi enviada para :email.',
    'admin_test_message'                         => 'Esta é uma mensagem de teste da sua instância do Firefly III por meio do canal ":channel".',
    'admin_test_link'                            => 'The following link should point to your Firefly III installation. It should be correctly adorned with "http" or "https". If not, please set your `APP_URL` environment variable: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Foi criado um convite',
    'invitation_created_body'                    => 'O utilizador administrador ":email" criou um convite que pode ser usado por alguém que detenha o email ":invitee". O convite será válido por 48 horas.',
    'invite_user_subject'                        => 'Foi convidado para criar uma conta no Firefly III.',
    'invitation_introduction'                    => 'Foi convidado para criar uma conta no Firefly III em **:host**. O Firefly III é um gestor de finanças pessoais, pessoal e auto alojado. Toda a malta fixe já o usa.',
    'invitation_invited_by'                      => 'Foi convidado por ":admin" e este convite foi enviado para ":invitee". É você, certo?',
    'invitation_url'                             => 'Este convite é válido por 48 horas e pode ser utilizado navegando para [Firefly III](:url). Divirta-se!',

    // new IP
    'login_from_new_ip'                          => 'Novo início de sessão no Firefly III',
    'slack_login_from_new_ip'                    => 'Novo início de sessão no Firefly III, a partir do IP :ip (:host)',
    'new_ip_body'                                => 'O Firefly III detetou um novo início de sessão na sua conta a partir de um endereço IP desconhecido. Se nunca iniciou sessão a partir do endereço IP abaixo, ou foi há mais de seis meses, o Firefly III irá avisá-lo.',
    'new_ip_warning'                             => 'Se reconhecer este endereço IP ou sessão, pode ignorar esta mensagem. Se não iniciou sessão ou não tenha ideia do que possa ser este inicio de sessão, verifique a segurança da sua palavra-passe, altere-a e termine todas as outras sessões iniciadas. Para fazer isso, vá à sua página de perfil. É claro que já activou a 2FA, não é? Mantenha-se seguro!',
    'ip_address'                                 => 'Endereço IP',
    'host_name'                                  => 'Anfitrião',
    'date_time'                                  => 'Data + hora',
    'user_agent'                                 => 'Navegador',

    // access token created
    'access_token_created_subject'               => 'Foi criado um novo token de acesso',
    'access_token_created_body'                  => 'Alguém (em principio você) acabou de criar um novo Token de Acesso da API Firefly III para a sua conta de utilizador.',
    'access_token_created_explanation'           => 'Com este token, eles podem aceder a **todos** os seus registos financeiros através da API do Firefly III.',
    'access_token_created_revoke'                => 'Se não foi você, por favor, revogue este token assim que for possível em :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Um utilizador desconhecido tentou fazer login',
    'unknown_user_body'                          => 'An unknown user (`:ip`) tried to log in to Firefly III. The email address they used was `:address`.',
    'unknown_user_message'                       => 'The email address they (`:ip`) used was `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III detectou uma tentativa de login falhada',
    'failed_login_body'                          => 'Firefly III detected that somebody (you?) failed to login with your account `:email`. Please verify that this was you.',
    'failed_login_message'                       => 'A failed login attempt (`:ip`) on your Firefly III account `:email` was detected.',
    'failed_login_warning'                       => 'If you recognize this IP address or the login attempt, you can ignore this message. If you didn\'t try to login, of if you have no idea what this is about, verify your password security, change it, and log out all other sessions. To do this, go to your profile page. Of course you have 2FA enabled already, right? Stay safe!',

    // registered
    'registered_subject'                         => 'Bem-vindo ao Firefly III!',
    'registered_subject_admin'                   => 'Foi registado um novo utilizador',
    'admin_new_user_registered'                  => 'Foi registado um novo utilizador. Ao utilizador **:email** foi dada a ID #:id.',
    'registered_welcome'                         => 'Bem-vindo ao [Firefly III](:address). O seu registo foi bem-sucedido e este email está aqui para o confirmar. Viva!',
    'registered_pw'                              => 'Se já se esqueceu da sua palavra-passe, por favor, reponha-a usando [a ferramenta de redefinição de palavras-passe](:address/password/reset).',
    'registered_help'                            => 'Existe um ícone de ajuda no canto superior direito de cada página. Se precisar de ajuda, clique-lhe!',
    'registered_closing'                         => 'Aproveite!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Alteração da senha:',
    'registered_doc_link'                        => 'Documentação:',

    // new version
    'new_version_email_subject'                  => 'Está disponível uma nova versão do Firefly III',

    // email change
    'email_change_subject'                       => 'O seu endereço de e-mail do Firefly III mudou',
    'email_change_body_to_new'                   => 'Ou você ou alguém com acesso à sua conta do Firefly III alterou o endereço de email associado. Se não estava a espera deste aviso, ignore o mesmo e apague-o.',
    'email_change_body_to_old'                   => 'Você, ou alguém com acesso à sua conta no Firefly III, alterou o seu endereço de email. Se não esperava que isto acontecesse, **deverá** usar a ligação "anular" abaixo para proteger a sua conta!',
    'email_change_ignore'                        => 'Se iniciou esta mudança, pode ignorar esta mensagem sem medo.',
    'email_change_old'                           => 'O endereço de email antigo era: :email',
    'email_change_new'                           => 'O novo endereço de email é: :email',
    'email_change_instructions'                  => 'Não pode utilizar o Firefly III até confirmar esta alteração. Por favor carregue no link abaixo para confirmar a mesma.',
    'email_change_undo_link'                     => 'Para desfazer a mudança, carregue neste link:',

    // OAuth token created
    'oauth_created_subject'                      => 'Um novo cliente OAuth foi criado',
    'oauth_created_body'                         => 'Alguém (esperemos que você) acabou de criar cliente de API OAuth no Firefly III para a sua conta de utilizador. Foi designado ":name" e tem o URL de resposta `:url`.',
    'oauth_created_explanation'                  => 'Com este cliente será possível aceder a **todos** os seus registos financeiros através da API do Firefly III.',
    'oauth_created_undo'                         => 'Se não foi você, por favor, revogue este cliente assim que for possível em `:url`',

    // reset password
    'reset_pw_subject'                           => 'O seu pedido de redefinição da palavra-passe',
    'reset_pw_message'                           => 'You have received password reset instructions in your email. If this was you, please follow the instructions.',
    'reset_pw_instructions'                      => 'Alguém tentou redefinir a sua palavra-passe. Se foi você, carregue no link abaixo para acabar o processo.',
    'reset_pw_warning'                           => '**POR FAVOR** verifique que a ligação atual vai ter ao Firefly III esperado!',

    // error
    'error_subject'                              => 'Ocorreu um erro no Firefly III',
    'error_intro'                                => 'Firefly III v:version encontrou um erro: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'O erro foi do tipo ":class".',
    'error_timestamp'                            => 'O erro ocorreu às: :time.',
    'error_location'                             => 'Este erro ocorreu no ficheiro "<span style="font-family: monospace;">:file</span>" na linha :line com o código :code.',
    'error_user'                                 => 'O erro foi encontrado pelo utilizador #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Não havia nenhum utilizador em sessão para este erro ou nenhum utilizador foi detetado.',
    'error_ip'                                   => 'O endereço de IP associado a este erro é: :ip',
    'error_url'                                  => 'O URL é: :url',
    'error_user_agent'                           => 'Agente de utilizador: :userAgent',
    'error_stacktrace'                           => 'The full stacktrace is below. If you think this is a bug in Firefly III, you can forward this message to <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. This can help fix the bug you just encountered.',
    'error_github_html'                          => 'Se preferir, pode também abrir uma nova questão no <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'Se preferir, pode também abrir uma nova questão em https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                     => 'O rastreamento da pilha completo é:',
    'error_headers'                              => 'Os cabeçalhos seguintes também podem ser relevantes:',
    'error_post'                                 => 'Isto foi submetido pelo utilizador:',

    // report new journals
    'new_journals_subject'                       => 'O Firefly III criou uma nova transação|O Firefly III criou :count novas transações',
    'new_journals_header'                        => 'O Firefly III criou uma transação por si. Pode encontrá-la na sua instância do Firefly III.|O Firefly III criou :count transações por si. Pode encontrá-las na sua instância do Firefly III:',

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
    'bill_warning_please_action'                 => 'Por favor, tome as medidas apropriadas.',

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
