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
    'greeting'                                   => 'Ciao,',
    'closing'                                    => 'Bip bop,',
    'signature'                                  => 'Il Mail Robot di Firefly III',
    'footer_ps'                                  => 'PS: Questo messaggio è stato inviato perché generato da una richiesta da :ipAddress.',

    // admin test
    'admin_test_subject'                         => 'Un messaggio di prova dalla tua installazione di Firefly III',
    'admin_test_body'                            => 'Questo è un messaggio di prova dalla tua istanza Firefly III. È stato inviato a :email.',
    'admin_test_message'                         => 'Questo è un messaggio di prova inviato dalla tua istanza di Firefly III via ":channel".',
    'admin_test_link'                            => 'Il seguente link dovrebbe puntare alla tua installazione di Firefly III. Dovrebbe essere correttamente preceduto da "http" o "https". In caso contrario, imposta la variabile d\'ambiente `APP_URL`: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'È stato creato un invito',
    'invitation_created_body'                    => 'L\'utente amministratore ":email" ha creato l\'invito utente per chiunque sia associato all\'indirizzo email ":invitee". L\'invito sarò valido per 48 ore.',
    'invite_user_subject'                        => 'Sei stato invitato a creare un account su Firefly III.',
    'invitation_introduction'                    => 'Sei stato invitato a creare un account su Firefly III su **:host**. Firefly III è un gestore della finanza personale, "self-hosted", privato e personale. È la moda del momento.',
    'invitation_invited_by'                      => 'Sei stato invitato da ":admin" e questo invito è stato inviato a ":invitee". Sei tu, vero?',
    'invitation_url'                             => 'L\'invito è valido per 48 ore e può essere riscattato navigando su [Firefly III](:url). Divertiti!',

    // new IP
    'login_from_new_ip'                          => 'Nuovo accesso a Firefly III',
    'slack_login_from_new_ip'                    => 'Nuovo accesso a Firefly III dall\'IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III ha rilevato un nuovo accesso al tuo account da un indirizzo IP sconosciuto. Se non hai mai effettuato l\'accesso dall\'indirizzo sottostante, o se è stato effettuato più di sei mesi fa, Firefly III ti avviserà.',
    'new_ip_warning'                             => 'Se riconosci questo indirizzo IP o l\'accesso, puoi ignorare questo messaggio. Se non hai effettuato l\'accesso, o se non hai idea di cosa si tratti, verifica la sicurezza della tua password, cambiala e disconnetti tutte le altre sessioni. Per fare questo, vai alla pagina del tuo profilo. Naturalmente hai già attivato l\'autenticazione a due fattori, giusto? Resta al sicuro!',
    'ip_address'                                 => 'Indirizzo IP',
    'host_name'                                  => 'Host',
    'date_time'                                  => 'Date e ora',
    'user_agent'                                 => 'Browser',

    // access token created
    'access_token_created_subject'               => 'È stato creato un nuovo token di accesso',
    'access_token_created_body'                  => 'Qualcuno (si spera tu) ha appena creato un nuovo token di accesso personale per le API di Firefly III per il tuo account utente.',
    'access_token_created_explanation'           => 'Con questo token è possibile accedere a **tutte** le tue informazioni finanziarie tramite le API di Firefly III.',
    'access_token_created_revoke'                => 'Se non sei stato tu, revoca questo token il prima possibile all\'indirizzo :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Un utente sconosciuto ha tentato di accedere',
    'unknown_user_body'                          => 'Un utente sconosciuto (`:ip`) ha provato ad accedere a Firefly III. L\'indirizzo email utilizzato era `:address`.',
    'unknown_user_message'                       => 'L\'indirizzo email utilizzato (`:ip`) era `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III ha rilevato un tentativo di accesso fallito',
    'failed_login_body'                          => 'Firefly III ha rilevato che qualcuno (tu?) non è riuscito ad accedere con il tuo account `:email`. Si prega di verificare che questo fossi tu.',
    'failed_login_message'                       => 'È stato rilevato un tentativo di accesso fallito (`:ip`) sul tuo account Firefly III `:email.',
    'failed_login_warning'                       => 'Se riconosci questo indirizzo IP o il tentativo di accesso, puoi ignorare questo messaggio. Se non hai tentato di accedere o non sai di cosa si tratti, verifica la sicurezza della tua password, cambiala e disconnetti tutte le altre sessioni. Per farlo, vai alla pagina del tuo profilo. Ovviamente hai già attivato l\'autenticazione a due fattori, giusto? Resta al sicuro!',

    // registered
    'registered_subject'                         => 'Benvenuto in Firefly III!',
    'registered_subject_admin'                   => 'Un nuovo utente si è registrato',
    'admin_new_user_registered'                  => 'Un nuovo utente si è registrato. L\'utente **:email** ha ricevuto l\'ID utente #:id.',
    'registered_welcome'                         => 'Benvenuto in [Firefly III](:address). La tua registrazione è stata completata, e questa è una email di conferma. Olè!',
    'registered_pw'                              => 'Se hai dimenticato la tua password, reimpostala usando [lo strumento di reimpostazione della password](:address/password/reset).',
    'registered_help'                            => 'C\'è un\'icona di aiuto nell\'angolo in alto a destra di ogni pagina. Se hai bisogno di aiuto, clicca su di essa!',
    'registered_closing'                         => 'Divertiti!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Reimposta la password:',
    'registered_doc_link'                        => 'Documentazione:',

    // new version
    'new_version_email_subject'                  => 'È disponibile una nuova versione di Firefly III',

    // email change
    'email_change_subject'                       => 'Il tuo indirizzo email Firefly III è cambiato',
    'email_change_body_to_new'                   => 'Tu o qualcuno che ha accesso al tuo account Firefly III ha cambiato il tuo indirizzo email. Se non ti aspettavi questo messaggio, ignoralo ed eliminalo.',
    'email_change_body_to_old'                   => 'Tu o qualcuno avente accesso al tuo profilo di Firefly III ha cambiato il tuo indirizzo email. Se non ti aspettavi che succedesse, **devi** seguire il link "annulla" di seguito per proteggere il tuo profilo!',
    'email_change_ignore'                        => 'Se hai effettuato tu questa modifica, puoi ignorare questo messaggio.',
    'email_change_old'                           => 'Il vecchio indirizzo email era: :email',
    'email_change_new'                           => 'Il nuovo indirizzo email è: :email',
    'email_change_instructions'                  => 'Non puoi usare Firefly III finché non confermi questa modifica. Per favore, segui il link qui sotto per farlo.',
    'email_change_undo_link'                     => 'Per annullare la modifica, segui questo link:',

    // OAuth token created
    'oauth_created_subject'                      => 'È stato creato un nuovo client OAuth',
    'oauth_created_body'                         => 'Qualcuno (si spera tu) ha appena creato un nuovo client OAuth per le API di Firefly III per il tuo account utente. È etichettato ":name" e ha come URL di callback `:url`.',
    'oauth_created_explanation'                  => 'Con questo token è possibile accedere a **tutte** le tue informazioni finanziarie tramite le API di Firefly III.',
    'oauth_created_undo'                         => 'Se non sei stato tu, revoca questo client il prima possibile all\'indirizzo `:url`',

    // reset password
    'reset_pw_subject'                           => 'La tua richiesta di reimpostazione password',
    'reset_pw_message'                           => 'Hai ricevuto le istruzioni per il reset della password via email. Se sei stato tu, segui le istruzioni.',
    'reset_pw_instructions'                      => 'Qualcuno ha provato a reimpostare la password. Se è stato tu, segui il link qui sotto per farlo.',
    'reset_pw_warning'                           => '**PER FAVORE** controlla che il link vada effettivamente al Firefly III che ti aspetti!',

    // error
    'error_subject'                              => 'Incontrato un errore in Firefly III',
    'error_intro'                                => 'Firefly III v:version ha riscontrato un errore: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'L\'errore era di tipo ":class".',
    'error_timestamp'                            => 'L\'errore si è verificato il: :time.',
    'error_location'                             => 'Questo errore si è verificato nel file <span style="font-family: monospace;">:file</span> alla riga :line con codice :code.',
    'error_user'                                 => 'L\'errore è stato riscontrato dall\'utente #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Non c\'era alcun utente loggato per questo errore o nessun utente è stato rilevato.',
    'error_ip'                                   => 'L\'indirizzo IP relativo a questo errore è: :ip',
    'error_url'                                  => 'L\'URL è: :url',
    'error_user_agent'                           => 'User agent: :userAgent',
    'error_stacktrace'                           => 'Lo stacktrace completo è riportato qui sotto. Se pensi che si tratti di un bug in Firefly III, puoi inoltrare questo messaggio a <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. Questo può aiutare a risolvere il bug che hai appena incontrato.',
    'error_github_html'                          => 'Se preferisci puoi anche aprire una nuova issue su <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'Se preferisci puoi anche aprire una nuova issue su https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                     => 'Lo stacktrace completo è qui sotto:',
    'error_headers'                              => 'Anche le seguenti intestazioni potrebbero esser rilevanti:',
    'error_post'                                 => 'Questo è stato inviato dall\'utente:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III ha creato una nuova transazione|Firefly III ha creato :count nuove transazioni',
    'new_journals_header'                        => 'Firefly III ha creato una transazione per te. Puoi trovarla nella tua installazione di Firefly III:|Firefly III ha creato :count transazioni per te. Puoi trovarle nella tua installazione di Firefly III:',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'Tu hai :count abbonamenti che sono in ritardo per essere pagati',
    'subscriptions_overdue_subject_single'       => 'Hai un abbonamento che è in ritardo per essere pagato',
    'subscriptions_overdue_warning_intro_single' => 'Hai un abbonamento che è in ritardo di essere pagato. Alla data(e) seguente era previsto un pagamento, ma non è ancora arrivato.',
    'subscriptions_overdue_warning_intro_multi'  => 'Tu hai :count abbonamento(i) che sono in ritardo di essere pagato. Alla data(e) seguente era previsto un pagamento, ma non è ancora arrivato.',
    'subscriptions_overdue_please_action_single' => 'Forse non hai semplicemente collegato una transazione a questo abbonamento. In tal caso, fallo. NON riceverai un altro avviso relativo a questo abbonamento in ritardo. Verrà inviato un nuovo avviso per il PROSSIMO pagamento in scadenza.',
    'subscriptions_overdue_please_action_multi'  => 'Forse non hai semplicemente collegato una transazione a questi abbonamenti. In tal caso, fallo. NON riceverai un altro avviso relativo a questi abbonamenti scaduti. Verrà inviato un nuovo avviso per i PROSSIMI pagamenti in scadenza.',
    'subscriptions_overdue_outro'                => 'Se credi che questo messaggio sia sbagliato, contatta lo sviluppatore di Firefly III. Grazie per aver utilizzato Firefly III.',
    // bill warning
    'bill_warning_subject_end_date'              => 'La tua spesa ricorrente ":name" scade tra :diff giorni',
    'bill_warning_subject_now_end_date'          => 'La tua spesa ricorrente ":name" scade OGGI',
    'bill_warning_subject_extension_date'        => 'Il tuo pagamento ricorrente ":name" verrà esteso o annullato in :diff giorni',
    'bill_warning_subject_now_extension_date'    => 'Il tuo pagamento ricorrente ":name" dovrebbe essere esteso o annullato OGGI',
    'bill_warning_end_date'                      => 'Il tuo pagamento ricorrente **":name"** terminerà il :date, ovvero tra circa **:diff giorni**.',
    'bill_warning_extension_date'                => 'Il tuo pagamento ricorrente **":name"** dovrebbe essere esteso o annullato il :date, ovvero tra circa **:diff giorni**.',
    'bill_warning_end_date_zero'                 => 'Il tuo pagamento ricorrente **":name"** terminerà il :date, ovvero **OGGI!**',
    'bill_warning_extension_date_zero'           => 'Il tuo pagamento ricorrente **":name"** dovrebbe essere esteso o annullato il :date, ovvero **OGGI!**',
    'bill_warning_please_action'                 => 'Si prega di adottare le misure appropriate.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'Hai abilitato l\'autenticazione a più fattori',
    'enabled_mfa_slack'                          => 'Tu (:email) hai abilitato l\'autenticazione a più fattori. Non è corretto? Controlla le tue impostazioni!',
    'have_enabled_mfa'                           => 'Hai abilitato l\'autenticazione a più fattori sul tuo account Firefly III ":email". Ciò significa che sarà necessario utilizzare un\'app di autenticazione per accedere da ora in poi.',
    'enabled_mfa_warning'                        => 'Se non l\'hai abilitato tu, per favore contatta il tuo amministratore immediatamente oppure controlla la documentazione di Firefly III.',

    'disabled_mfa_subject'                       => 'Hai disabilitato l\'autenticazione a più fattori!',
    'disabled_mfa_slack'                         => 'Tu (:email) hai disabilitato l\'autenticazione a più fattori. Non è corretto? Controlla le tue impostazioni!',
    'have_disabled_mfa'                          => 'Hai disabilitato l\'autenticazione a più fattori sul tuo account Firefly III ":email".',
    'disabled_mfa_warning'                       => 'Se non l\'hai disabilitato tu, per favore contatta il tuo amministratore immediatamente oppure controlla la documentazione di Firefly III.',

    'new_backup_codes_subject'                   => 'Hai generato nuovi codici di backup',
    'new_backup_codes_slack'                     => 'Tu (:email) hai generato nuovi codici di backup. Questi possono essere usati per accedere a Firefly III. Non è corretto? Controlla le tue impostazioni!',
    'new_backup_codes_intro'                     => 'Tu (:email) hai generato nuovi codici di backup. Questi possono essere usati per accedere a Firefly III se perdi l\'accesso alla tua app di autenticazione.',
    'new_backup_codes_warning'                   => 'Si prega di memorizzare questi codici in un luogo sicuro. Se li perdi, non sarà possibile accedere a Firefly III. Se non l\'hai fatto tu, contatta immediatamente l\'amministratore o controlla la documentazione di Firefly III.',

    'used_backup_code_subject'                   => 'Hai usato un codice di backup per accedere',
    'used_backup_code_slack'                     => 'Tu (:email) hai usato un codice di backup per accedere',

    'used_backup_code_intro'                     => 'Tu (:email) hai usato un codice di backup per accedere a Firefly III. Ora hai un codice di backup in meno con cui effettuare il login. Si prega di rimuoverlo dalla tua lista.',
    'used_backup_code_warning'                   => 'Se non sei stato tu, per favore contatta il tuo amministratore immediatamente oppure controlla la documentazione di Firefly III.',

    // few left:
    'mfa_few_backups_left_subject'               => 'Hai solo :count codice(i) di backup rimasti!',
    'mfa_few_backups_left_slack'                 => 'Tu (:email) hai solo :count codice(i) di backup rimasti!',
    'few_backup_codes_intro'                     => 'Tu (:email) hai usato la maggior parte dei tuoi codici di backup, e ora ne hai solo :count rimanente(i). Si prega di generarne di nuovi il più presto possibile.',
    'few_backup_codes_warning'                   => 'Senza codici di backup, non è possibile recuperare il login MFA se si perde l\'accesso al generatore di codici.',

    // NO left:
    'mfa_no_backups_left_subject'                => 'NON hai più codici di backup rimanenti!',
    'mfa_no_backups_left_slack'                  => 'Tu (:email) NON hai più codici di backup rimanenti!',
    'no_backup_codes_intro'                      => 'Tu (:email) hai usato TUTTI i tuoi codici di backup. Si prega di generarne di nuovi il più presto possibile.',
    'no_backup_codes_warning'                    => 'Senza codici di backup, non è possibile recuperare il login MFA se si perde l\'accesso al generatore di codici.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => 'Hai provato e non sei riuscito a utilizzare l\'autenticazione a più fattori :count volta(e)!',
    'mfa_many_failed_slack'                      => 'Tu (:email) hai provato e non sei riuscito a utilizzare l\'autenticazione a più fattori :count volta(e). Non è corretto? Controlla le tue impostazioni!',
    'mfa_many_failed_attempts_intro'             => 'Tu (:email) hai provato :count volta(e) a utilizzare un codice di autenticazione a più fattori, ma questi tentativi di login non sono riusciti. Sei sicuro di aver utilizzato il codice MFA corretto? Sei sicuro che l\'ora sul server sia corretta?',
    'mfa_many_failed_attempts_warning'           => 'Se non sei stato tu, per favore contatta il tuo amministratore immediatamente oppure controlla la documentazione di Firefly III.',
];
