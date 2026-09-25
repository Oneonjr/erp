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
    'greeting'                                   => 'Hola,',
    'closing'                                    => 'Bip bop,',
    'signature'                                  => 'El Robot de Correu de Firefly III',
    'footer_ps'                                  => 'PD: Aquest missatge s\'ha enviat perquè una petició de la IP :ipAddress l\'ha activat.',

    // admin test
    'admin_test_subject'                         => 'Missatge de prova de la teva instal·lació de Firefly III',
    'admin_test_body'                            => 'Aquest és un missatge de prova de la teva instància de Firefly III. S\'ha enviat a :email.',
    'admin_test_message'                         => 'Aquest és un missatge de prova de la teva instància de Firefly III a través del canal ":channel".',
    'admin_test_link'                            => 'The following link should point to your Firefly III installation. It should be correctly adorned with "http" or "https". If not, please set your `APP_URL` environment variable: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'S\'ha creat una invitació',
    'invitation_created_body'                    => 'L\'usuari administrador ":email" ha creat una invitació d\'usuari que pot utilitzar qui estigui darrere l\'adreça de correu ":invitee". La invitació serà vàlida durant 48 h.',
    'invite_user_subject'                        => 'Has estat invitat a crear un compte a Firefly III.',
    'invitation_introduction'                    => 'Has estat invitat a crear un compte a Firefly III a **:host**. Firefly III és un gestor financer personal privat i autoallotjat. Tots els nois ben parits el fan servir.',
    'invitation_invited_by'                      => 'Has estat invitat per ":admin" i la invitació s\'ha enviat a ":invitee". Ets tu, oi?',
    'invitation_url'                             => 'La invitació és vàlida durant 48 hores i es pot bescanviar navegant a [Firefly III](:url). Gaudeix!',

    // new IP
    'login_from_new_ip'                          => 'Nou inici de sessió a Firefly III',
    'slack_login_from_new_ip'                    => 'Nou inici de sessió a Firefly III des de la IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III ha detectat un nou inici de sessió al teu compte des d\'una IP desconeguda. Si no has iniciat mai sessió des de l\'adreça IP de sota, o han passat més de sis mesos, Firefly III t\'avisarà.',
    'new_ip_warning'                             => 'Si reconeixes l\'adreça IP o l\'inici de sessió, pots ignorar aquest missatge. Si no has iniciat sessió, o no en tens ni idea de què és això, verifica la seguretat de la teva contrasenya, canvia-la, i tanca totes les altres sessions. Per a fer això, ves a la pàgina del teu perfil. Per descomptat tens activada l\'A2F, oi? Cuidat!',
    'ip_address'                                 => 'Adreça IP',
    'host_name'                                  => 'Servidor',
    'date_time'                                  => 'Data + hora',
    'user_agent'                                 => 'Navegador',

    // access token created
    'access_token_created_subject'               => 'S\'ha creat un nou identificador d\'accés',
    'access_token_created_body'                  => 'Algú (esperem que tu) acaba de crear un nou Identificador d\'Accés a l\'API de Firefly III pel teu compte.',
    'access_token_created_explanation'           => 'Amb aquest identificador d\'accés, es pot accedir a **tots** els teus registres financers a través de l\'API de Firefly III.',
    'access_token_created_revoke'                => 'Si no has estat tu, si us plau, revoca aquest identificador d\'accés tan aviat com puguis a :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Un usuari desconegut ha intentat iniciar sessió',
    'unknown_user_body'                          => 'An unknown user (`:ip`) tried to log in to Firefly III. The email address they used was `:address`.',
    'unknown_user_message'                       => 'The email address they (`:ip`) used was `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III ha detectat un intent d\'inici sessió infructuós',
    'failed_login_body'                          => 'Firefly III detected that somebody (you?) failed to login with your account `:email`. Please verify that this was you.',
    'failed_login_message'                       => 'A failed login attempt (`:ip`) on your Firefly III account `:email` was detected.',
    'failed_login_warning'                       => 'Si reconeixeu aquesta adreça IP o l\'intent d\'inici de sessió, podeu ignorar aquest missatge. Si no heu intentat iniciar sessió o si no teniu ni idea de què va això, verifiqueu la seguretat de la vostra contrasenya, canvieu-la i tanqueu totes les altres sessions. Per fer-ho, aneu a la pàgina del vostre perfil. Per descomptat, ja teniu activat el 2FA, oi? Aneu amb compte!',

    // registered
    'registered_subject'                         => 'Benvingut a Firefly III!',
    'registered_subject_admin'                   => 'Un nou usuari s\'ha registrat',
    'admin_new_user_registered'                  => 'Un nou usuari s\'ha registrat. A l\'usuari **:email** se li ha donat l\'ID d\'usuari #:id.',
    'registered_welcome'                         => 'Benvingut a [Firefly III](:address). T\'has registrat correctament, i aquest correu és per confirmar-t\'ho. Visca!',
    'registered_pw'                              => 'Si ja te n\'has oblidat de la contrasenya, si us plau, reinicia-la utilitzant [l\'eina de restabliment de contrasenyes](:address/contrasenya/restablir).',
    'registered_help'                            => 'Hi ha una icona d\'ajuda a la cantonada superior dreta de cada pàgina. Si necessites ajuda, prem-la!',
    'registered_closing'                         => 'Gaudeix!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Restablir contrasenya:',
    'registered_doc_link'                        => 'Documentació:',

    // new version
    'new_version_email_subject'                  => 'Hi ha disponible una nova versió de Firefly III',

    // email change
    'email_change_subject'                       => 'S\'ha canviat la teva adreça de correu de Firefly III',
    'email_change_body_to_new'                   => 'Tu o algú amb accés al teu compte de Firefly III ha canviat la teva adreça de correu electrònic. Si no esperaves aquest missatge, si us plau, ignora\'l i elimina\'l.',
    'email_change_body_to_old'                   => 'Tu o algú amb accés al teu compte de Firefly III ha canviat la teva adreça de correu electrònic. Si no esperaves aquest canvi, **has de** seguir l\'enllaç de "desfer" de sota per protegir el teu compte!',
    'email_change_ignore'                        => 'Si has fet tu aquest canvi, pots ignorar aquest missatge de forma segura.',
    'email_change_old'                           => 'L\'adreça de correu electrònic anterior era: :email',
    'email_change_new'                           => 'La nova adreça de correu electrònic és :email',
    'email_change_instructions'                  => 'No pots utilitzar Firefly III fins que no confirmis aquest canvi. Si us plau, segueix l\'enllaç de sota per a fer-ho.',
    'email_change_undo_link'                     => 'Per desfer el canvi, segueix aquest enllaç:',

    // OAuth token created
    'oauth_created_subject'                      => 'S\'ha creat un nou client d\'OAuth',
    'oauth_created_body'                         => 'Algú (esperem que tu) acaba de crear un nou Client OAuth a l\'API de Firefly III pel teu compte. Té l\'etiqueta ":name" i l\'adreça URL de retorn \':url\'.',
    'oauth_created_explanation'                  => 'Amb aquest client, es pot accedir a **tots** els teus registres financers a través de l\'API de Firefly III.',
    'oauth_created_undo'                         => 'Si no has estat tu, si us plau, revoca aquest client tan aviat com puguis a \':url\'',

    // reset password
    'reset_pw_subject'                           => 'Petició de restabliment de contrasenya',
    'reset_pw_message'                           => 'Heu rebut instruccions per restablir la contrasenya al vostre correu electrònic. Si heu estat vosaltres, seguiu les instruccions.',
    'reset_pw_instructions'                      => 'Algú ha provat de restablir la teva contrasenya. Si has estat tu, si us plau, segueix l\'enllaç de sota per a fer-ho.',
    'reset_pw_warning'                           => '**SI US PLAU**, comprova que l\'enllaç realment va al Firefly III on esperes que vagi!',

    // error
    'error_subject'                              => 'Hi ha hagut un error a Firefly III',
    'error_intro'                                => 'Hi ha hagut un error a Firefly III v:version: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'L\'error ha estat del tipus ":class".',
    'error_timestamp'                            => 'L\'error ha succeït el :time.',
    'error_location'                             => 'L\'error ha succeït a l\'arxiu "<span style="font-family: monospace;">:file</span>" a la línia :line amb codi :code.',
    'error_user'                                 => 'L\'error ha estat trobat per l\'usuari #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Cap usuari havia iniciat sessió en aquest error o no s\'ha detectat cap usuari.',
    'error_ip'                                   => 'L\'adreça IP d\'aquest error és: :ip',
    'error_url'                                  => 'L\'URL és: :url',
    'error_user_agent'                           => 'Agent d\'usuari: :userAgent',
    'error_stacktrace'                           => 'La traça completa és a continuació. Si creus que és un error de Firefly III, pots reenviar aquest missatge a <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. Podria ajudar a solucionar l\'error que acabes de trobar.',
    'error_github_html'                          => 'Si ho prefereixes, també pots obrir un nou issue a <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'Si ho prefereixes, també pots obrir un nou issue a https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                     => 'La traça completa és a continuació:',
    'error_headers'                              => 'Les següents capçaleres també podrien ser rellevants:',
    'error_post'                                 => 'Enviat per l\'usuari:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III ha creat una nova transacció|Firefly III ha creat :count noves transaccions',
    'new_journals_header'                        => 'Firefly III ha creat una transacció per tu. Pots trobar-la a la teva instal·lació de Firefly III:|Firefly III ha creat :count transaccions per tu. Les pots trobar a la teva instal·lació de Firefly III:',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'You have :count subscriptions that are overdue to be paid',
    'subscriptions_overdue_subject_single'       => 'You have a subscription that is overdue to be paid',
    'subscriptions_overdue_warning_intro_single' => 'You have one subscription that is overdue to be paid. At the following date(s) a payment was expected, but it has not yet arrived.',
    'subscriptions_overdue_warning_intro_multi'  => 'You have :count subscription(s) that are overdue to be paid. At the following date(s) a payment was expected, but it has not yet arrived.',
    'subscriptions_overdue_please_action_single' => 'Perhaps you have simply not linked a transaction to this subscription. In that case, please do so. You will NOT get another warning about this overdue subscription. A new warning will be sent out for the NEXT due payment.',
    'subscriptions_overdue_please_action_multi'  => 'Perhaps you have simply not linked a transaction to these subscriptions. In that case, please do so. You will NOT get another warning about these overdue subscriptions. A new warning will be sent out for the NEXT due payments.',
    'subscriptions_overdue_outro'                => 'If you believe this message is wrong, please contact the Firefly III developer. Thank you for using Firefly III.',
    // bill warning
    'bill_warning_subject_end_date'              => 'La teva subscripció ":name" finalitza en :diff dies',
    'bill_warning_subject_now_end_date'          => 'La subscripció ":name" venç AVUI',
    'bill_warning_subject_extension_date'        => 'La subscripció ":name" ha de ser prorrogada o cancel·lada en :diff dies',
    'bill_warning_subject_now_extension_date'    => 'La subscripció ":name" ha de ser prorrogada o cancel·lada AVUI',
    'bill_warning_end_date'                      => 'La teva subscripció **":name"** finalitza el :date. Aquest moment passarà d\'aquí a **:diff dies**.',
    'bill_warning_extension_date'                => 'La subscripció ":name" ha de ser prorrogada o cancel·lada el :date. Això serà d\'aquí **:diff dies**.',
    'bill_warning_end_date_zero'                 => 'La subscripció **":name"** venç el :date. Això és **AVUI!**',
    'bill_warning_extension_date_zero'           => 'La subscripció **":name"** ha de ser prorrogada o cancel·lada el :date. Això és **AVUI!**',
    'bill_warning_please_action'                 => 'Si us plau, prengui les mesures oportunes.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'Heu activat l\'autenticació multifactor',
    'enabled_mfa_slack'                          => 'Has activat l\'autenticació multifactor (:email). No és correcte? Comprova la configuració!',
    'have_enabled_mfa'                           => 'Has activat l\'autenticació multifactor al teu compte de Firefly III ":email". Això vol dir que a partir d\'ara hauràs d\'utilitzar una aplicació d\'autenticació per iniciar la sessió.',
    'enabled_mfa_warning'                        => 'Si no heu habilitat això, poseu-vos en contacte amb l\'administrador immediatament o consulteu la documentació del Firefly III.',

    'disabled_mfa_subject'                       => 'Heu desactivat l\'autenticació multifactor!',
    'disabled_mfa_slack'                         => 'Heu desactivat l\'autenticació multifactor (:email). No és correcte? Comprova la configuració!',
    'have_disabled_mfa'                          => 'Heu desactivat l\'autenticació multifactor al teu compte de Firefly III ":email".',
    'disabled_mfa_warning'                       => 'Si no heu desactivat això, poseu-vos en contacte amb l\'administrador immediatament o consulteu la documentació de Firefly III.',

    'new_backup_codes_subject'                   => 'Heu generat nous codis de recuperació',
    'new_backup_codes_slack'                     => 'Heu (:email) generat nous codis de còpia de seguretat. Aquests es poden utilitzar per iniciar sessió a Firefly III. No és correcte? Reviseu la configuració!',
    'new_backup_codes_intro'                     => 'Heu (:email) generat nous codis de recuperació. Aquests es poden utilitzar per iniciar sessió a Firefly III si perdeu l\'accés a l\'aplicació d\'autenticació.',
    'new_backup_codes_warning'                   => 'Si us plau, guardeu aquests codis en un lloc segur. Si els perdeu, no podreu iniciar la sessió a Firefly III. Si no ho heu fet, poseu-vos en contacte amb el vostre administrador immediatament o consulteu la documentació de Firefly III.',

    'used_backup_code_subject'                   => 'Heu utilitzat un codi de recuperació per iniciar la sessió',
    'used_backup_code_slack'                     => 'Heu utilitzat un codi de còpia de seguretat per iniciar la sessió (:email).',

    'used_backup_code_intro'                     => 'You (:email) have used a back-up co    de to login to Firefly III. You now have one less back-up code to login with. Please remove it from your list.',
    'used_backup_code_warning'                   => 'Si no ho heu fet, poseu-vos en contacte amb l\'administrador immediatament o consulteu la documentació de Firefly III.',

    // few left:
    'mfa_few_backups_left_subject'               => 'Només et queden :count codi(s) de recuperació!',
    'mfa_few_backups_left_slack'                 => 'Només et queden (:email) :count codi(s) de recuperació!',
    'few_backup_codes_intro'                     => 'Has utilitzat la majoria dels teus codis de recuperació (:email) i ara només et queda :count. Genera\'n de nous tan aviat com sigui possible.',
    'few_backup_codes_warning'                   => 'Sense codis de recuperació, no podeu recuperar l\'inici de sessió MFA si perdeu l\'accés al generador de codi.',

    // NO left:
    'mfa_no_backups_left_subject'                => 'NO et queden codis de seguretat!',
    'mfa_no_backups_left_slack'                  => 'No et queden codis de recuperació (:email)!',
    'no_backup_codes_intro'                      => 'Has utilitzat (:email) TOTS els codis de recuperació. Genera\'n de nous tan aviat com sigui possible.',
    'no_backup_codes_warning'                    => 'Sense codis de recuperació, no podeu recuperar l\'inici de sessió MFA si perdeu l\'accés al generador de codi.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => 'Ja has intentat utilitzar l\'autenticació multifactor :count vegades i has fracassat!',
    'mfa_many_failed_slack'                      => 'Has intentat (:email) utilitzar l\'autenticació multifactor :count vegades i has fallat. No és correcte? Comprova la configuració!',
    'mfa_many_failed_attempts_intro'             => 'Has intentat (:email) :count vegades utilitzar un codi d\'autenticació multifactor, però aquests intents d\'inici de sessió han fallat. Estàs segur que estàs utilitzant el codi MFA correcte? Estàs segur que l\'hora del servidor és correcta?',
    'mfa_many_failed_attempts_warning'           => 'Si no ho heu fet, poseu-vos en contacte amb l\'administrador immediatament o consulteu la documentació de Firefly III.',
];
