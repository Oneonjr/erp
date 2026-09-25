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
    'greeting'                                   => 'Hallo,',
    'closing'                                    => 'Piep piep,',
    'signature'                                  => 'Der Firefly III E-Mail-Roboter',
    'footer_ps'                                  => 'PS: Diese Nachricht wurde wegen einer Anfrage durch die IP-Adresse :ipAddress versendet.',

    // admin test
    'admin_test_subject'                         => 'Eine Testmeldung von Ihrer Firefly III Installation',
    'admin_test_body'                            => 'Dies ist eine Testnachricht von Ihrer Firefly III-Instanz. Sie wurde an :email gesendet.',
    'admin_test_message'                         => 'Dies ist eine Testnachricht Ihrer Firefly III-Instanz über den Kanal „:channel“.',
    'admin_test_link'                            => 'Der folgende Link sollte auf Ihre Firefly III-Installation verweisen. Er sollte korrekt mit „http“ oder „https“ beginnen. Ist dies nicht der Fall, legen Sie bitte Ihre Umgebungsvariable `APP_URL` fest: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Eine Einladung wurde erstellt',
    'invitation_created_body'                    => 'Admin-Benutzer „:email” hat eine Benutzereinladung erstellt, die von demjenigen benutzt werden kann, der hinter der E-Mail-Adresse „:invitee” steht. Die Einladung ist 48 Stunden lang gültig.',
    'invite_user_subject'                        => 'Sie wurden eingeladen, ein Firefly III-Konto zu erstellen.',
    'invitation_introduction'                    => 'Sie wurden eingeladen, ein Firefly III-Konto auf **:host** zu erstellen. Firefly III ist ein persönlicher, selbst gehosteter, privater Finanzmanager. Alle coolen Kids benutzen ihn.',
    'invitation_invited_by'                      => 'Sie wurden von „:admin” eingeladen und diese Einladung wurde an „:invitee” gesendet. Das sind Sie, richtig?',
    'invitation_url'                             => 'Die Einladung ist 48 Stunden lang gültig und kann durch einen Besuch von [Firefly III](:url) eingelöst werden. Viel Spaß!',

    // new IP
    'login_from_new_ip'                          => 'Neue Anmeldung bei Firefly III',
    'slack_login_from_new_ip'                    => 'Neue Firefly III Anmeldung von IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III hat eine neue Anmeldung auf Ihrem Konto von einer unbekannten IP-Adresse erkannt. Wenn Sie sich noch nie von der unten angegebenen IP-Adresse aus angemeldet haben oder dies mehr als sechs Monate her ist, warnt Sie Firefly III.',
    'new_ip_warning'                             => 'Wenn Sie diese IP-Adresse oder diese Anmeldung erkennen, können Sie diese Meldung ignorieren. Wenn Sie sich nicht angemeldet haben, oder wenn Sie keine Ahnung haben, worum es hier geht, überprüfen Sie die Sicherheit Ihres Passworts, ändern Sie es und melden Sie alle anderen Sitzungen ab. Rufen Sie dazu Ihre Profilseite auf. Es wird empfohlen die Zwei-Faktor-Authentifizierung (2FA) zu aktivieren. Bleiben Sie geschützt!',
    'ip_address'                                 => 'IP-Adresse',
    'host_name'                                  => 'Host',
    'date_time'                                  => 'Datum und Uhrzeit',
    'user_agent'                                 => 'Browser',

    // access token created
    'access_token_created_subject'               => 'Ein neuer Zugriffstoken wurde erstellt',
    'access_token_created_body'                  => 'Jemand (hoffentlich Sie) hat gerade einen neuen Firefly III API Zugangstoken für Ihr Benutzerkonto erstellt.',
    'access_token_created_explanation'           => 'Mit diesem Token haben Sie, mittels der Firefly III API, Zugriff auf **alle** Ihrer Finanzdaten.',
    'access_token_created_revoke'                => 'Wenn Sie das nicht waren, widerrufen Sie dieses Token bitte so schnell wie möglich unter :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Ein unbekannter Benutzer hat versucht, sich anzumelden',
    'unknown_user_body'                          => 'Ein unbekannter Benutzer („:ip”) hat versucht, sich bei Firefly III anzumelden. Die verwendete E-Mail-Adresse lautete „:address”.',
    'unknown_user_message'                       => 'Die verwendete E-Mail-Adresse „:address“ verwendete („:ip“).',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III hat einen fehlgeschlagenen Anmeldeversuch festgestellt',
    'failed_login_body'                          => 'Firefly III hat festgestellt, dass jemand (Sie?) sich nicht mit Ihrem Konto „:email“ anmelden konnte. Bitte überprüfen Sie, ob dies tatsächlich Sie waren.',
    'failed_login_message'                       => 'Ein fehlgeschlagener Anmeldeversuch („:ip“) für Ihr Firefly III-Konto „:email“ wurde erkannt.',
    'failed_login_warning'                       => 'Wenn Sie diese IP-Adresse oder den Anmeldeversuch wiedererkennen, können Sie diese Meldung ignorieren. Wenn Sie nicht versucht haben, sich anzumelden, oder wenn Sie keine Ahnung haben, worum es hier geht, überprüfen Sie die Sicherheit Ihres Passworts, ändern Sie es und melden Sie alle anderen Sitzungen ab. Öffnen Sie dazu Ihre Profilseite. Natürlich haben Sie 2FA bereits aktiviert, richtig? Bleiben Sie geschützt!',

    // registered
    'registered_subject'                         => 'Willkommen bei Firefly III!',
    'registered_subject_admin'                   => 'Ein neuer User hat sich registriert',
    'admin_new_user_registered'                  => 'Ein neuer Benutzer hat sich registriert. Der Benutzer **:email** hat die Benutzer-ID #:id erhalten.',
    'registered_welcome'                         => 'Willkommen bei [Firefly III](:address). Ihre Registrierung ist abgeschlossen und diese E-Mail erhalten Sie zur Bestätigung. Hurra!',
    'registered_pw'                              => 'Wenn Sie Ihr Passwort bereits vergessen haben, setzen Sie es bitte mit dem [Tool zum Zurücksetzen des Passworts](:address/password/reset) zurück.',
    'registered_help'                            => 'Es gibt ein Hilfe-Icon in der oberen rechten Ecke jeder Seite. Wenn Sie Hilfe benötigen, klicken Sie dort drauf!',
    'registered_closing'                         => 'Viel Spaß!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Passwort zurücksetzen:',
    'registered_doc_link'                        => 'Dokumentation:',

    // new version
    'new_version_email_subject'                  => 'Eine neue Firefly III-Version ist verfügbar',

    // email change
    'email_change_subject'                       => 'Ihre Firefly III E-Mail-Adresse hat sich geändert',
    'email_change_body_to_new'                   => 'Sie oder jemand mit Zugriff auf Ihr Firefly III-Konto hat Ihre E-Mail-Adresse geändert. Wenn Sie diese Nachricht nicht erwartet haben, bitte ignorieren und löschen Sie sie.',
    'email_change_body_to_old'                   => 'Durch Sie oder jemanden, der Zugriff auf Ihr Firefly III Konto hat, wurde Ihre E-Mail-Adresse geändert. Wenn Sie nicht mit diesem Vorfall gerechnet haben, **müssen** Sie dem nachfolgenden Link zum „Widerufen” folgen, um Ihr Konto zu schützen!',
    'email_change_ignore'                        => 'Wenn Sie diese Änderung initiiert haben, können Sie diese Nachricht ignorieren.',
    'email_change_old'                           => 'Die alte E-Mail-Adresse war: :email',
    'email_change_new'                           => 'Die neue E-Mail-Adresse ist: :email',
    'email_change_instructions'                  => 'Sie können Firefly III erst verwenden, wenn Sie diese Änderung bestätigen. Bitte folgen Sie dem unten stehenden Link, um dies zu tun.',
    'email_change_undo_link'                     => 'Um die Änderung rückgängig zu machen, folgen Sie diesem Link:',

    // OAuth token created
    'oauth_created_subject'                      => 'Ein neuer OAuth Client wurde erstellt',
    'oauth_created_body'                         => 'Jemand (hoffentlich Sie) hat gerade einen neuen Firefly III API OAuth Client für Ihr Benutzerkonto erstellt. Er trägt die Bezeichnung ":name" und hat die Callback-URL `:url`.',
    'oauth_created_explanation'                  => 'Mit diesem Client können Sie über die API von Firefly III auf **alle** Ihrer Finanzdaten zugreifen.',
    'oauth_created_undo'                         => 'Wenn Sie es nicht waren, widerrufen Sie diesen Client bitte so schnell wie möglich unter „:url”',

    // reset password
    'reset_pw_subject'                           => 'Anfrage zum Zurücksetzen des Passworts',
    'reset_pw_message'                           => 'Sie haben in Ihrer E-Mail Anweisungen zum Zurücksetzen des Passworts erhalten. Wenn Sie es waren, befolgen Sie bitte die Anweisungen.',
    'reset_pw_instructions'                      => 'Jemand hat versucht, Ihr Passwort zurückzusetzen. Wenn Sie es waren, folgen Sie bitte dem untenstehenden Link.',
    'reset_pw_warning'                           => '**BITTE** überprüfen Sie, dass der Link tatsächlich zu der erwarteten Firefly III Instanz führt!',

    // error
    'error_subject'                              => 'Fehler in Firefly III gefunden',
    'error_intro'                                => 'Firefly III v:version ist auf einen Fehler gestoßen: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'Der Fehler war vom Typ ":class".',
    'error_timestamp'                            => 'Der Fehler trat auf: :time.',
    'error_location'                             => 'Dieser Fehler ist in der Datei "<span style="font-family: monospace;">:file</span>" in Zeile :line mit dem Code :code aufgetreten.',
    'error_user'                                 => 'Der Fehler ist bei Benutzer #:id, <a href="mailto::email">:email</a> aufgetreten.',
    'error_no_user'                              => 'Es war kein Benutzer für diesen Fehler eingeloggt oder es wurde kein Benutzer erkannt.',
    'error_ip'                                   => 'Die IP-Adresse bezogen auf diesen Fehler lautet: :ip',
    'error_url'                                  => 'URL ist: :url',
    'error_user_agent'                           => 'User Agent: :userAgent',
    'error_stacktrace'                           => 'Der vollständige Stacktrace ist unten aufgeführt. Wenn Sie glauben, dass es sich um einen Fehler in Firefly III handelt, können Sie diese Nachricht an <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a> weiterleiten. Dies kann helfen, den gerade aufgetretenen Fehler zu beheben.',
    'error_github_html'                          => 'Wenn Sie es bevorzugen, können Sie auch einen Fehlerbericht auf <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a> eröffnen.',
    'error_github_text'                          => 'Wenn Sie es bevorzugen, können Sie auch einen Fehlerbericht auf https://github.com/firefly-iii/firefly-iii/issues eröffnen.',
    'error_stacktrace_below'                     => 'Der vollständige Stacktrace ist unten:',
    'error_headers'                              => 'Die folgenden Kopfzeilen können ebenfalls von Bedeutung sein:',
    'error_post'                                 => 'Dies wurde vom Benutzer eingereicht:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III hat eine neue Transaktion erstellt|Firefly III hat :count neue Transaktionen erstellt',
    'new_journals_header'                        => 'Firefly III hat eine Transaktion für Sie erstellt. Sie finden sie in Ihrer Firefly III Installation:|Firefly III hat :count Transaktionen für Sie erstellt. Sie können sie in Ihrer Firefly III Installation finden:',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'Es gibt :count überfällige Zahlungen für Abonnements',
    'subscriptions_overdue_subject_single'       => 'Es gibt ein Abonnement, dessen Zahlung überfällig ist',
    'subscriptions_overdue_warning_intro_single' => 'Es gibt eine überfällige Zahlung für ein Abonnement. Zu folgende(m/n) Termin(en) wurde eine Zahlung erwartet, die jedoch noch nicht eingegangen ist.',
    'subscriptions_overdue_warning_intro_multi'  => 'Es gibt :count überfällige Zahlunge(n) für Ihr Abonnement. Zu folgende(m/n) Termin(en) wurde eine Zahlung erwartet, die jedoch noch nicht eingegangen ist.',
    'subscriptions_overdue_please_action_single' => 'Möglicherweise haben Sie einfach keine Buchung mit diesem Abonnement verknüpft. In diesem Fall tun Sie dies bitte. Sie erhalten KEINE weitere Warnung zu diesem überfälligen Abonnement. Eine neue Warnung wird für die NÄCHSTE fällige Zahlung versandt.',
    'subscriptions_overdue_please_action_multi'  => 'Möglicherweise haben Sie einfach keine Buchung mit diesen Abonnements verknüpft. In diesem Fall tun Sie dies bitte. Sie erhalten KEINE weitere Warnung zu diesen überfälligen Abonnements. Eine neue Warnung wird für die NÄCHSTEN fälligen Zahlungen versandt.',
    'subscriptions_overdue_outro'                => 'Wenn Sie der Meinung sind, dass diese Meldung unzutreffend ist, wenden Sie sich bitte an den Entwickler von Firefly III. Vielen Dank, dass Sie Firefly III verwenden.',
    // bill warning
    'bill_warning_subject_end_date'              => 'Ihr Abonnement „:name“ läuft in :diff Tagen aus',
    'bill_warning_subject_now_end_date'          => 'Ihr Abonnement „:name“ endet HEUTE',
    'bill_warning_subject_extension_date'        => 'Ihr Abonnement „:name“ wird in :diff Tagen verlängert oder gekündigt',
    'bill_warning_subject_now_extension_date'    => 'Ihr Abonnement „:name“ wird HEUTE verlängert oder gekündigt',
    'bill_warning_end_date'                      => 'Ihr Abonnement **":name “** endet am :date. Dieser Zeitpunkt ist in **:diff Tagen** erreicht.',
    'bill_warning_extension_date'                => 'Ihr Abonnement **":name “** wird zum :date verlängert oder gekündigt. Dieser Zeitpunkt ist in **:diff Tagen** erreicht.',
    'bill_warning_end_date_zero'                 => 'Ihr Abonnement **":name “** endet am :date. Dieser Zeitpunkt ist **Heute!** erreicht',
    'bill_warning_extension_date_zero'           => 'Ihr Abonnement **":name “** wird zum :date verlängert oder gekündigt. Dieser Zeitpunkt ist **Heute!** erreicht.',
    'bill_warning_please_action'                 => 'Bitte ergreifen Sie die entsprechende Maßnahme.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'Sie haben die Multifaktor-Authentifizierung aktiviert',
    'enabled_mfa_slack'                          => 'Sie (:email) haben die Multifaktor-Authentifizierung aktiviert. Dies ist nicht korrekt? Überprüfen Sie Ihre Einstellungen!',
    'have_enabled_mfa'                           => 'Sie haben die Multifaktor-Authentifizierung für Ihr Firefly III-Konto „:email“ aktiviert. Das bedeutet, dass Sie von nun an eine Authentifizierungs-App verwenden müssen, um sich anzumelden.',
    'enabled_mfa_warning'                        => 'Wenn Sie dies nicht aktiviert haben, wenden Sie sich bitte umgehend an Ihren Administrator oder lesen Sie die Firefly III Dokumentation.',

    'disabled_mfa_subject'                       => 'Sie haben die Multifaktor-Authentifizierung deaktiviert!',
    'disabled_mfa_slack'                         => 'Sie (:email) haben die Multifaktor-Authentifizierung deaktiviert. Dies ist nicht korrekt? Überprüfen Sie Ihre Einstellungen!',
    'have_disabled_mfa'                          => 'Sie haben die Multifaktor-Authentifizierung in Ihrem Firefly III-Konto „:email“ deaktiviert.',
    'disabled_mfa_warning'                       => 'Wenn Sie dies nicht deaktiviert haben, wenden Sie sich bitte umgehend an Ihren Administrator oder lesen Sie die Firefly III Dokumentation.',

    'new_backup_codes_subject'                   => 'Sie haben neue Wiederherstellungscodes generiert',
    'new_backup_codes_slack'                     => 'Sie (:email) haben neue Wiederherstellungscodes generiert. Diese können zum Anmelden bei Firefly III verwendet werden. Dies ist nicht korrekt? Prüfen Sie Ihre Einstellungen!',
    'new_backup_codes_intro'                     => 'Sie (:email) haben neue Wiederherstellungscodes generiert. Diese können verwendet werden, um sich bei Firefly III anzumelden, wenn Sie den Zugang zu Ihrer Authenticator-App verlieren.',
    'new_backup_codes_warning'                   => 'Bitte bewahren Sie diese Codes an einem sicheren Ort auf. Wenn Sie sie verlieren, können Sie sich nicht mehr bei Firefly III anmelden. Wenn Sie dies nicht getan haben, wenden Sie sich bitte sofort an Ihren Administrator oder lesen Sie die Firefly III Dokumentation.',

    'used_backup_code_subject'                   => 'Sie haben einen Wiederherstellungscode für die Anmeldung verwendet',
    'used_backup_code_slack'                     => 'Sie (:email) haben einen Wiederherstellungscode für die Anmeldung verwendet',

    'used_backup_code_intro'                     => 'Sie (:email) haben einen Backup-Code verwendet, um sich bei Firefly III anzumelden. Er steht Ihnen damit nicht mehr zur Verfügung. Bitte entfernen Sie ihn aus Ihrer Liste.',
    'used_backup_code_warning'                   => 'Wenn Sie dies nicht getan haben, wenden Sie sich bitte umgehend an Ihren Administrator oder lesen Sie die Firefly III Dokumentation.',

    // few left:
    'mfa_few_backups_left_subject'               => 'Sie haben nur noch :count Wiederherstellungscode(s)!',
    'mfa_few_backups_left_slack'                 => 'Sie (:email) haben nur noch :count Wiederherstellungscode(s)!',
    'few_backup_codes_intro'                     => 'Sie (:email) haben die meisten Ihrer Wiederherstellungscodes verbraucht und es verbleibt nur noch :count. Bitte generieren Sie so schnell wie möglich neue Codes.',
    'few_backup_codes_warning'                   => 'Ohne Wiederherstellungscodes können Sie Ihre MFA-Anmeldung nicht wiederherstellen, wenn Sie den Zugriff auf Ihren Codegenerator verlieren.',

    // NO left:
    'mfa_no_backups_left_subject'                => 'Sie verfügen über KEINE Wiederherstellungscodes mehr!',
    'mfa_no_backups_left_slack'                  => 'Sie (:email) haben KEINE Wiederherstellungscodes mehr!',
    'no_backup_codes_intro'                      => 'Sie (:email) haben ALLE Ihre Wiederherstellungscodes verwendet. Bitte generieren Sie so bald wie möglich neue Codes.',
    'no_backup_codes_warning'                    => 'Ohne Wiederherstellungscodes können Sie Ihre MFA-Anmeldung nicht wiederherstellen, wenn Sie den Zugriff auf Ihren Codegenerator verlieren.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => 'Sie haben versucht, die Multifaktor-Authentifizierung zu verwenden und sind schon :count gescheitert!',
    'mfa_many_failed_slack'                      => 'Sie (:email) haben versucht, die Multifaktor-Authentifizierung zu verwenden und sind jetzt :count mal gescheitert. Dies ist nicht korrekt? Überprüfen Sie Ihre Einstellungen!',
    'mfa_many_failed_attempts_intro'             => 'Sie (:email) haben :count mal versucht, einen Code für die Multifaktor-Authentifizierung zu verwenden, aber diese Anmeldeversuche sind fehlgeschlagen. Sind Sie sicher, dass Sie den richtigen MFA-Code verwenden? Sind Sie sicher, dass die Uhrzeit auf dem Server korrekt ist?',
    'mfa_many_failed_attempts_warning'           => 'Wenn Sie dies nicht getan haben, wenden Sie sich bitte umgehend an Ihren Administrator oder lesen Sie die Firefly III Dokumentation.',
];
