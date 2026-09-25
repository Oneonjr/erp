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
    'signature'                                  => 'El Robot de Correo de Firefly III',
    'footer_ps'                                  => 'PD: Este mensaje fue enviado porque una solicitud de IP :ipAddress lo activó.',

    // admin test
    'admin_test_subject'                         => 'Un mensaje de prueba de su instalación de Firefly III',
    'admin_test_body'                            => 'Este es un mensaje de prueba de tu instancia de Firefly III. Fue enviado a :email.',
    'admin_test_message'                         => 'Este es un mensaje de prueba de su instancia de Firefly III a través del canal ":channel".',
    'admin_test_link'                            => 'The following link should point to your Firefly III installation. It should be correctly adorned with "http" or "https". If not, please set your `APP_URL` environment variable: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Se ha creado una invitación',
    'invitation_created_body'                    => 'El usuario administrador ":email" creó una invitación de usuario que puede ser utilizada por quien esté detrás de la dirección de correo electrónico ":invitee". La invitación será válida durante 48 horas.',
    'invite_user_subject'                        => 'Has sido invitado a crear una cuenta de Firefly III.',
    'invitation_introduction'                    => 'Has sido invitado a crear una cuenta de Firefly III en **:host**. Firefly III es un gestor de finanzas personales privado, autohospedado y personal.',
    'invitation_invited_by'                      => 'Has sido invitado por ":admin" y esta invitación ha sido enviada a ":invitee". Ese eres tú, ¿verdad?',
    'invitation_url'                             => 'La invitación es válida por 48 horas y puede ser canjeada navegando a [Firefly III](:url). ¡Disfrútala!',

    // new IP
    'login_from_new_ip'                          => 'Nuevo inicio de sesión en Firefly III',
    'slack_login_from_new_ip'                    => 'Nuevo inicio de sesión de Firefly III desde la IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III detectó un nuevo inicio de sesión en su cuenta desde una dirección IP desconocida. Si nunca ha iniciado sesión desde la dirección IP de abajo, o fué hace más de seis meses, Firefly III le avisará.',
    'new_ip_warning'                             => 'Si reconoce esta dirección IP o el inicio de sesión, puede ignorar este mensaje. Si no ha iniciado sesión, o sí no tiene idea de qué es esto, verifique la seguridad de su contraseña, cámbiela y cierre todas las demás sesiones. Para hacer esto, valla a su página de perfil. Por supuesto que ya tiene A2F habilitado, ¿verdad? ¡Manténgase seguro!',
    'ip_address'                                 => 'Dirección IP',
    'host_name'                                  => 'Servidor',
    'date_time'                                  => 'Fecha + hora',
    'user_agent'                                 => 'Navegador',

    // access token created
    'access_token_created_subject'               => 'Se ha creado un nuevo token de acceso',
    'access_token_created_body'                  => 'Alguien (esperemos que usted) acaba de crear un nuevo token de acceso a la API de Firefly III para tu cuenta de usuario.',
    'access_token_created_explanation'           => 'Con este token, pueden acceder a **todos** sus registros financieros a través de la API de Firefly III.',
    'access_token_created_revoke'                => 'Si no era usted, por favor, revoque este token tan pronto como sea posible, en :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Un usuario desconocido intentó iniciar sesión',
    'unknown_user_body'                          => 'An unknown user (`:ip`) tried to log in to Firefly III. The email address they used was `:address`.',
    'unknown_user_message'                       => 'The email address they (`:ip`) used was `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III detectó un intento de inicio de sesión fallido',
    'failed_login_body'                          => 'Firefly III detected that somebody (you?) failed to login with your account `:email`. Please verify that this was you.',
    'failed_login_message'                       => 'A failed login attempt (`:ip`) on your Firefly III account `:email` was detected.',
    'failed_login_warning'                       => 'Si reconoce esta dirección IP o el inicio de sesión, puede ignorar este mensaje. Si no ha iniciado sesión, o sí no tiene idea de qué es esto, verifique la seguridad de su contraseña, cámbiela y cierre todas las demás sesiones. Para hacer esto, vaya a su página de perfil. ¿Tiene ya 2FA activado, verdad? ¡Manténgase protegido!',

    // registered
    'registered_subject'                         => 'Bienvenido a Firefly III!',
    'registered_subject_admin'                   => 'Un nuevo usuario se ha registrado',
    'admin_new_user_registered'                  => 'Un nuevo usuario se ha registrado. El usuario **:email** ha recibido el ID de usuario #:id.',
    'registered_welcome'                         => 'Bienvenido/a a [Firefly III](:address). Su registro se ha realizado correctamente, y este correo electrónico está aquí para confirmarlo. ¡Yeah!',
    'registered_pw'                              => 'Si ya has olvidado tu contraseña, por favor resetéala usando [la herramienta de restablecimiento de contraseña](:address/password/reset).',
    'registered_help'                            => 'Hay un icono de ayuda en la esquina superior derecha de cada página. Si necesita ayuda, ¡Haga clic en él!',
    'registered_closing'                         => '¡Disfrute!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Restablecer contraseña:',
    'registered_doc_link'                        => 'Documentación:',

    // new version
    'new_version_email_subject'                  => 'Una nueva versión de Firefly III está disponible',

    // email change
    'email_change_subject'                       => 'Se cambió su dirección de email de Firefly III',
    'email_change_body_to_new'                   => 'Usted o alguien con acceso a su cuenta de Firefly III ha cambiado su dirección de correo electrónico. Si no esperabas este mensaje, por favor ignórelo y elimínelo.',
    'email_change_body_to_old'                   => 'Usted o alguien con acceso a su cuenta de Firefly III ha cambiado su dirección de correo electrónico. Si no esperaba que esto suceda, <strong>debe</strong> seguir el enlace "deshacer" para proteger tu cuenta.',
    'email_change_ignore'                        => 'Si inició este cambio, puede ignorar este mensaje de forma segura.',
    'email_change_old'                           => 'La antigua dirección de correo electrónico era: :email',
    'email_change_new'                           => 'La nueva dirección de correo es: :email',
    'email_change_instructions'                  => 'No puede usar Firefly III hasta que confirme este cambio. Por favor, siga el enlace de abajo para hacerlo.',
    'email_change_undo_link'                     => 'Para deshacer el cambio, siga este enlace:',

    // OAuth token created
    'oauth_created_subject'                      => 'Se ha creado un nuevo cliente OAuth',
    'oauth_created_body'                         => 'Alguien (esperemos que usted) acaba de crear un nuevo cliente API OAuth Firefly III para su cuenta de usuario. Está etiquetado como ":name" y tiene URL de devolución de llamada `:url`.',
    'oauth_created_explanation'                  => 'Con este cliente, pueden acceder a **todos** sus registros financieros a través de la API de Firefly III.',
    'oauth_created_undo'                         => 'Si no fue usted, por favor revoque este cliente tan pronto como sea posible en :url',

    // reset password
    'reset_pw_subject'                           => 'Su solicitud de restablecimiento de contraseña',
    'reset_pw_message'                           => 'Has recibido instrucciones para restablecer tu contraseña en tu correo electrónico. Si fuiste tú, por favor sigue las instrucciones.',
    'reset_pw_instructions'                      => 'Alguien intentó restablecer su contraseña. Si fue usted, por favor siga el enlace de abajo para hacerlo.',
    'reset_pw_warning'                           => '**PLAZA** verifica que el enlace vaya al Firefly III ¡que esperas que se vaya!',

    // error
    'error_subject'                              => 'Ocurrió un error en Firefly III',
    'error_intro'                                => 'Firefly III v:version tuvo un error: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'El error fue de tipo ":class".',
    'error_timestamp'                            => 'El error ocurrió el: :time.',
    'error_location'                             => 'Este error ocurrió en el archivo "<span style="font-family: monospace;">:file</span>" en línea :line con código :code.',
    'error_user'                                 => 'El error fue encontrado por el usuario #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'No había ningún usuario conectado para este error o no se detectó ningún usuario.',
    'error_ip'                                   => 'La dirección IP relacionada con este error es: :ip',
    'error_url'                                  => 'La URL es: :url',
    'error_user_agent'                           => 'Agente de usuario: :userAgent',
    'error_stacktrace'                           => 'El stacktrace completo está a continuación. Si crees que esto es un error en Firefly III, puedes reenviar este mensaje a <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii. rg</a>. Esto puede ayudar a solucionar el error que acabas de encontrar.',
    'error_github_html'                          => 'Si prefiere, también puede abrir un nuevo issue en <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'Si prefiere, también puedes abrir un nuevo problema en https://github.com/firefly-iiii/firefly-iiii/issues.',
    'error_stacktrace_below'                     => 'El stacktrace completo está a continuación:',
    'error_headers'                              => 'Los siguientes encabezados también pueden ser relevantes:',
    'error_post'                                 => 'Esto fue enviado por el usuario:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III ha creado una nueva transacción|Firefly III ha creado :count nuevas transacciones',
    'new_journals_header'                        => 'Firefly III ha creado una transacción para usted. La puede encontrar en su instalación de Firefly III:|Firefly III ha creado :count transacciones para usted. Las puede encontrar en su instalación de Firefly III:',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'Tienes :count suscripciones que están pendientes de pago',
    'subscriptions_overdue_subject_single'       => 'Tienes una suscripción que está pendiente de pago',
    'subscriptions_overdue_warning_intro_single' => 'Tienes una suscripción que está pendiente de pagar. En la(s) siguiente(s) fecha(s) se esperaba un pago, pero aún no ha llegado.',
    'subscriptions_overdue_warning_intro_multi'  => 'Tienes :count suscripción(es) que están pendientes de pagar. En la(s) siguiente(s) fecha(s) se esperaba un pago, pero aún no ha llegado.',
    'subscriptions_overdue_please_action_single' => 'Tal vez simplemente no haya vinculado una transacción a esta suscripción. En ese caso, por favor hágalo. NO recibirá otra advertencia sobre esta suscripción atrasada. Se enviará una nueva advertencia para el SIGUIENTE pago.',
    'subscriptions_overdue_please_action_multi'  => 'Tal vez simplemente no haya vinculado una transacción a estas suscripciones. En ese caso, por favor hágalo. NO recibirá otra advertencia sobre estas suscripciones atrasadas. Se enviará una nueva advertencia para los SIGUIENTES pagos.',
    'subscriptions_overdue_outro'                => 'Si crees que este mensaje es incorrecto, por favor contacta al desarrollador de Firefly III. Gracias por usar Firefly III.',
    // bill warning
    'bill_warning_subject_end_date'              => 'Tu suscripción ":name" termina en :diff días',
    'bill_warning_subject_now_end_date'          => 'Tu suscripción ":name" se debe abonar HOY',
    'bill_warning_subject_extension_date'        => 'Tu suscripción ":name" debe ampliarse o cancelarse en :diff días',
    'bill_warning_subject_now_extension_date'    => 'Tu suscripción ":name" debe ser extendida o cancelada HOY',
    'bill_warning_end_date'                      => 'Tu suscripción **":name"** debe terminar el :date. Este momento pasará alrededor de **:diff días**.',
    'bill_warning_extension_date'                => 'Tu suscripción **":name"** debe ampliarse o cancelarse el :date. Este momento tendrá lugar alrededor de **:diff días**.',
    'bill_warning_end_date_zero'                 => 'Tu suscripción **":name"** debe terminar el :date. ¡Este momento pasará **¡HOY!**',
    'bill_warning_extension_date_zero'           => 'Tu suscripción **":name"** debe ser extendida o cancelada el :date. ¡Este momento pasará **¡HOY!**',
    'bill_warning_please_action'                 => 'Por favor, tomen las medidas adecuadas.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'Ha habilitado la autenticación multifactor',
    'enabled_mfa_slack'                          => 'Usted (:email) ha habilitado la autenticación de factores múltiples ¿Es esto incorrecto? ¡Compruebe su configuración!',
    'have_enabled_mfa'                           => 'Ha habilitado la autenticación de múltiples factores en su cuenta Firefly III ":email". Esto significa que tendrás que usar una aplicación de autenticación para iniciar sesión a partir de ahora.',
    'enabled_mfa_warning'                        => 'Si no lo ha habilitado, póngase en contacto con su administrador inmediatamente o revise la documentación de Firefly III.',

    'disabled_mfa_subject'                       => '¡Has desactivado la autenticación de múltiples factores!',
    'disabled_mfa_slack'                         => 'Usted (:email) ha deshabilitado la autenticación de múltiples factores. ¿Es esto incorrecto? ¡Compruebe su configuración!',
    'have_disabled_mfa'                          => 'Has deshabilitado la autenticación de múltiples factores en tu cuenta de Firefly III ":email".',
    'disabled_mfa_warning'                       => 'Si no lo desactivó, por favor contacte a su administrador inmediatamente o revise la documentación de Firefly III.',

    'new_backup_codes_subject'                   => 'Has generado nuevos códigos de copia de seguridad',
    'new_backup_codes_slack'                     => 'Usted (:email) ha generado nuevos códigos de copia de seguridad. Estos pueden utilizarse para iniciar sesión en Firefly III. ¿Es esto incorrecto? ¡Compruebe su configuración!',
    'new_backup_codes_intro'                     => 'Tú (:email) has generado nuevos códigos de respaldo. Estos se pueden utilizar para iniciar sesión en Firefly III si pierdes el acceso a tu aplicación de autenticación.',
    'new_backup_codes_warning'                   => 'Por favor, almacena estos códigos en un lugar seguro. Si los pierdes, no podrás iniciar sesión en Firefly III. Si no lo ha hecho, póngase en contacto con su administrador inmediatamente o consulte la documentación de Firefly III.',

    'used_backup_code_subject'                   => 'Has usado un código de copia de seguridad para iniciar sesión',
    'used_backup_code_slack'                     => 'Tú (:email) has usado un código de copia de seguridad para iniciar sesión',

    'used_backup_code_intro'                     => 'You (:email) have used a back-up co    de to login to Firefly III. You now have one less back-up code to login with. Please remove it from your list.',
    'used_backup_code_warning'                   => 'Si no lo ha hecho, póngase en contacto con su administrador inmediatamente o consulte la documentación de Firefly III.',

    // few left:
    'mfa_few_backups_left_subject'               => '¡Solo dispone de :count códigos de recuperación!',
    'mfa_few_backups_left_slack'                 => '¡Tú (:email) solo te quedan códigos de copia de seguridad :count!',
    'few_backup_codes_intro'                     => 'Tú (:email) has utilizado la mayoría de tus códigos de copia de seguridad y ahora solo te quedan :count . Por favor, genera otros nuevos tan pronto como sea posible.',
    'few_backup_codes_warning'                   => 'Sin códigos de respaldo, no puede recuperar su inicio de sesión de MFA si pierde el acceso a su generador de código.',

    // NO left:
    'mfa_no_backups_left_subject'                => '¡No te quedan códigos de respaldo!',
    'mfa_no_backups_left_slack'                  => '¡Tú (:email) NO quedan códigos de respaldo!',
    'no_backup_codes_intro'                      => 'Usted (:email) ha usado TODOS de sus códigos de respaldo. Por favor, genere nuevos tan pronto como sea posible.',
    'no_backup_codes_warning'                    => 'Sin códigos de respaldo, no puede recuperar su inicio de sesión de MFA si pierde el acceso a su generador de código.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => '¡Ha intentado y no ha podido utilizar la autenticación multi-factor :count veces ahora!',
    'mfa_many_failed_slack'                      => 'Usted (:email) ha intentado y no ha podido utilizar la autenticación multi-factor :count veces. ¿No es esto correcto? ¡Compruebe su configuración!',
    'mfa_many_failed_attempts_intro'             => 'Tú (:email) has probado :count veces para usar un código de autenticación multifactor, pero estos intentos de inicio de sesión han fallado. ¿Estás seguro de que estás usando el código MFA correcto? ¿Estás seguro de que la hora en el servidor es correcta?',
    'mfa_many_failed_attempts_warning'           => 'Si no lo ha hecho, póngase en contacto con su administrador inmediatamente o consulte la documentación de Firefly III.',
];
