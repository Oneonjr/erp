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
    'greeting'                                   => 'Dobrý deň,',
    'closing'                                    => 'Píp píp,',
    'signature'                                  => 'E-mailový robot Firefly III',
    'footer_ps'                                  => 'PS: Táto správa bola odoslaná na základe požiadavky z IP adresy :ipAddress.',

    // admin test
    'admin_test_subject'                         => 'Testovacia správa z vašej inštalácie Firefly III',
    'admin_test_body'                            => 'Toto je testovacia správa z vašej inštancie Firefly III. Bola odoslaná na adresu :email.',
    'admin_test_message'                         => 'Toto je testovacia správa z vašej inštancie Firefly III odoslaná cez kanál „:channel“.',
    'admin_test_link'                            => 'Nasledujúci odkaz by mal smerovať na vašu inštanciu Firefly III a mal by obsahovať správny protokol „http“ alebo „https“. Ak ho neobsahuje, nastavte premennú prostredia `APP_URL`: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Bola vytvorená pozvánka',
    'invitation_created_body'                    => 'Správca „:email“ vytvoril pozvánku, ktorú môže použiť osoba s e-mailovou adresou „:invitee“. Pozvánka bude platná 48 hodín.',
    'invite_user_subject'                        => 'Boli ste pozvaní na vytvorenie účtu Firefly III.',
    'invitation_introduction'                    => 'Boli ste pozvaní na vytvorenie účtu Firefly III na **:host**. Firefly III je súkromný, samostatne prevádzkovaný správca osobných financií. Používajú ho všetci správni ľudia.',
    'invitation_invited_by'                      => 'Pozval vás používateľ „:admin“ a pozvánka bola odoslaná na adresu „:invitee“. To ste vy, však?',
    'invitation_url'                             => 'Pozvánka je platná 48 hodín a môžete ju použiť otvorením odkazu [Firefly III](:url). Príjemné používanie!',

    // new IP
    'login_from_new_ip'                          => 'Nové prihlásenie do Firefly III',
    'slack_login_from_new_ip'                    => 'Nové prihlásenie do Firefly III z IP adresy :ip (:host)',
    'new_ip_body'                                => 'Firefly III zistil nové prihlásenie do vášho účtu z neznámej IP adresy. Ak ste sa z uvedenej adresy ešte neprihlásili alebo od posledného prihlásenia uplynulo viac ako šesť mesiacov, Firefly III vás na to upozorní.',
    'new_ip_warning'                             => 'Ak túto IP adresu alebo prihlásenie poznáte, správu môžete ignorovať. Ak ste sa neprihlásili vy alebo neviete, o čo ide, skontrolujte zabezpečenie hesla, zmeňte ho a na stránke profilu odhláste všetky ostatné relácie. Dvojfaktorové overovanie už máte zapnuté, však? Chráňte svoj účet!',
    'ip_address'                                 => 'IP adresa',
    'host_name'                                  => 'Hostiteľ',
    'date_time'                                  => 'Dátum a čas',
    'user_agent'                                 => 'Prehliadač',

    // access token created
    'access_token_created_subject'               => 'Bol vytvorený nový prístupový token',
    'access_token_created_body'                  => 'Niekto (dúfajme, že vy) práve vytvoril pre váš používateľský účet nový prístupový token k API Firefly III.',
    'access_token_created_explanation'           => 'Pomocou tohto tokenu možno cez API Firefly III pristupovať ku **všetkým** vašim finančným záznamom.',
    'access_token_created_revoke'                => 'Ak ste token nevytvorili vy, čo najskôr ho zrušte na adrese :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Neznámy používateľ sa pokúsil prihlásiť',
    'unknown_user_body'                          => 'Neznámy používateľ (`:ip`) sa pokúsil prihlásiť do Firefly III. Použil e-mailovú adresu `:address`.',
    'unknown_user_message'                       => 'Použitá e-mailová adresa (`:ip`) bola `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III zistil neúspešný pokus o prihlásenie',
    'failed_login_body'                          => 'Firefly III zistil, že sa niekto (vy?) neúspešne pokúsil prihlásiť do vášho účtu `:email`. Overte, či ste to boli vy.',
    'failed_login_message'                       => 'Bol zistený neúspešný pokus o prihlásenie (`:ip`) do vášho účtu Firefly III `:email`.',
    'failed_login_warning'                       => 'Ak túto IP adresu alebo pokus o prihlásenie poznáte, správu môžete ignorovať. Ak ste sa prihlásiť nepokúšali alebo neviete, o čo ide, skontrolujte zabezpečenie hesla, zmeňte ho a na stránke profilu odhláste všetky ostatné relácie. Dvojfaktorové overovanie už máte zapnuté, však? Chráňte svoj účet!',

    // registered
    'registered_subject'                         => 'Vitajte vo Firefly III!',
    'registered_subject_admin'                   => 'Zaregistroval sa nový používateľ',
    'admin_new_user_registered'                  => 'Zaregistroval sa nový používateľ. Používateľovi **:email** bolo pridelené ID č. :id.',
    'registered_welcome'                         => 'Vitajte vo [Firefly III](:address). Registrácia prebehla úspešne a tento e-mail ju potvrdzuje. Hurá!',
    'registered_pw'                              => 'Ak ste už zabudli heslo, obnovte ho pomocou [nástroja na obnovenie hesla](:address/password/reset).',
    'registered_help'                            => 'V pravom hornom rohu každej stránky je ikona pomocníka. Ak potrebujete pomoc, kliknite na ňu!',
    'registered_closing'                         => 'Príjemné používanie!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Obnova hesla:',
    'registered_doc_link'                        => 'Dokumentácia:',

    // new version
    'new_version_email_subject'                  => 'Je dostupná nová verzia Firefly III',

    // email change
    'email_change_subject'                       => 'E-mailová adresa vášho účtu Firefly III bola zmenená',
    'email_change_body_to_new'                   => 'Vy alebo niekto s prístupom k vášmu účtu Firefly III zmenil vašu e-mailovú adresu. Ak ste túto správu neočakávali, môžete ju ignorovať a odstrániť.',
    'email_change_body_to_old'                   => 'Vy alebo niekto s prístupom k vášmu účtu Firefly III zmenil vašu e-mailovú adresu. Ak ste túto zmenu neočakávali, na ochranu účtu **musíte** použiť odkaz „vrátiť späť“ uvedený nižšie!',
    'email_change_ignore'                        => 'Ak o tejto zmene viete, môžete túto správu pokojne ignorovať.',
    'email_change_old'                           => 'Pôvodná e-mailová adresa bola :email',
    'email_change_new'                           => 'Nová e-mailová adresa je: :email',
    'email_change_instructions'                  => 'Kým túto zmenu nepotvrdíte, Firefly III nebudete môcť používať. Pokračujte pomocou odkazu nižšie.',
    'email_change_undo_link'                     => 'Zmenu vrátite späť pomocou tohto odkazu:',

    // OAuth token created
    'oauth_created_subject'                      => 'Bol vytvorený nový klient OAuth',
    'oauth_created_body'                         => 'Niekto (dúfajme, že vy) práve vytvoril pre váš používateľský účet nového klienta OAuth pre API Firefly III. Klient má názov „:name“ a URL spätného volania `:url`.',
    'oauth_created_explanation'                  => 'Pomocou tohto klienta možno cez API Firefly III pristupovať ku **všetkým** vašim finančným záznamom.',
    'oauth_created_undo'                         => 'Ak ste klienta nevytvorili vy, čo najskôr ho zrušte na adrese `:url`.',

    // reset password
    'reset_pw_subject'                           => 'Žiadosť o obnovenie hesla',
    'reset_pw_message'                           => 'Pokyny na obnovenie hesla ste dostali e-mailom. Ak ste o ne požiadali vy, postupujte podľa nich.',
    'reset_pw_instructions'                      => 'Niekto sa pokúsil obnoviť vaše heslo. Ak ste to boli vy, pokračujte pomocou odkazu nižšie.',
    'reset_pw_warning'                           => '**DÔLEŽITÉ:** Overte, že odkaz skutočne smeruje na očakávanú inštanciu Firefly III!',

    // error
    'error_subject'                              => 'Zachytená chyba vo Firefly III',
    'error_intro'                                => 'Firefly III v:version narazil na chybu: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'Chyba bola typu „:class“.',
    'error_timestamp'                            => 'Dátum a čas chyby: :time.',
    'error_location'                             => 'Chyba sa vyskytla v súbore „<span style="font-family: monospace;">:file</span>“ na riadku :line s kódom :code.',
    'error_user'                                 => 'Chyba sa vyskytla u používateľa č. :id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Pri vyskytnutí chyby nebol prihlásený žiadny používateľ alebo žiadny nebol zistený.',
    'error_ip'                                   => 'IP adresa súvisiaca s touto chybou: :ip',
    'error_url'                                  => 'URL je: :url',
    'error_user_agent'                           => 'Používateľský agent: :userAgent',
    'error_stacktrace'                           => 'Úplné trasovanie zásobníka je uvedené nižšie. Ak si myslíte, že ide o chybu Firefly III, môžete túto správu preposlať na <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. Pomôže to opraviť chybu, na ktorú ste narazili.',
    'error_github_html'                          => 'Prípadne môžete vytvoriť hlásenie na <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a>.',
    'error_github_text'                          => 'Prípadne môžete vytvoriť hlásenie na https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                     => 'Úplné trasovanie zásobníka je uvedené nižšie:',
    'error_headers'                              => 'Relevantné môžu byť aj nasledujúce hlavičky:',
    'error_post'                                 => 'Používateľ odoslal tieto údaje:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III vytvoril novú transakciu|Firefly III vytvoril :count nových transakcií',
    'new_journals_header'                        => 'Firefly III pre vás vytvoril transakciu. Nájdete ju vo svojej inštalácii Firefly III:|Firefly III pre vás vytvoril :count transakcií. Nájdete ich vo svojej inštalácii Firefly III:',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'Máte :count pravidelných platieb po termíne splatnosti',
    'subscriptions_overdue_subject_single'       => 'Máte pravidelnú platbu po termíne splatnosti',
    'subscriptions_overdue_warning_intro_single' => 'Máte jednu pravidelnú platbu po termíne splatnosti. Platba sa očakávala v nasledujúcom termíne, ale zatiaľ nebola zaznamenaná.',
    'subscriptions_overdue_warning_intro_multi'  => 'Máte :count pravidelných platieb po termíne splatnosti. Platby sa očakávali v nasledujúcich termínoch, ale zatiaľ neboli zaznamenané.',
    'subscriptions_overdue_please_action_single' => 'Možno ste s touto pravidelnou platbou iba neprepojili transakciu. V takom prípade ju prepojte. Na túto platbu po termíne už ďalšie upozornenie NEDOSTANETE. Nové upozornenie sa odošle pri ĎALŠOM termíne splatnosti.',
    'subscriptions_overdue_please_action_multi'  => 'Možno ste s týmito pravidelnými platbami iba neprepojili transakcie. V takom prípade ich prepojte. Na tieto platby po termíne už ďalšie upozornenie NEDOSTANETE. Nové upozornenie sa odošle pri ĎALŠÍCH termínoch splatnosti.',
    'subscriptions_overdue_outro'                => 'Ak sa domnievate, že táto správa nie je správna, obráťte sa na vývojára Firefly III. Ďakujeme, že používate Firefly III.',
    // bill warning
    'bill_warning_subject_end_date'              => 'Pravidelná platba „:name“ sa skončí o :diff dní',
    'bill_warning_subject_now_end_date'          => 'Pravidelná platba „:name“ sa má skončiť DNES',
    'bill_warning_subject_extension_date'        => 'Pravidelnú platbu „:name“ je potrebné o :diff dní predĺžiť alebo zrušiť',
    'bill_warning_subject_now_extension_date'    => 'Pravidelnú platbu „:name“ je potrebné predĺžiť alebo zrušiť DNES',
    'bill_warning_end_date'                      => 'Pravidelná platba **„:name“** sa má skončiť :date. Do tohto termínu zostáva približne **:diff dní**.',
    'bill_warning_extension_date'                => 'Pravidelnú platbu **„:name“** je potrebné :date predĺžiť alebo zrušiť. Do tohto termínu zostáva približne **:diff dní**.',
    'bill_warning_end_date_zero'                 => 'Pravidelná platba **„:name“** sa má skončiť :date, teda **DNES!**',
    'bill_warning_extension_date_zero'           => 'Pravidelnú platbu **„:name“** je potrebné :date predĺžiť alebo zrušiť, teda **DNES!**',
    'bill_warning_please_action'                 => 'Vykonajte potrebné kroky.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'Zapli ste viacfaktorové overovanie',
    'enabled_mfa_slack'                          => 'Pre účet :email ste zapli viacfaktorové overovanie. Ak ste túto zmenu nevykonali vy, skontrolujte nastavenia!',
    'have_enabled_mfa'                           => 'Pre účet Firefly III „:email“ ste zapli viacfaktorové overovanie. Odteraz budete pri prihlasovaní potrebovať overovaciu aplikáciu.',
    'enabled_mfa_warning'                        => 'Ak ste ho nezapli vy, okamžite sa obráťte na správcu alebo si pozrite dokumentáciu Firefly III.',

    'disabled_mfa_subject'                       => 'Vypli ste viacfaktorové overovanie!',
    'disabled_mfa_slack'                         => 'Pre účet :email ste vypli viacfaktorové overovanie. Ak ste túto zmenu nevykonali vy, skontrolujte nastavenia!',
    'have_disabled_mfa'                          => 'Pre účet Firefly III „:email“ ste vypli viacfaktorové overovanie.',
    'disabled_mfa_warning'                       => 'Ak ste ho nevypli vy, okamžite sa obráťte na správcu alebo si pozrite dokumentáciu Firefly III.',

    'new_backup_codes_subject'                   => 'Vytvorili ste nové záložné kódy',
    'new_backup_codes_slack'                     => 'Pre účet :email ste vytvorili nové záložné kódy, ktoré možno použiť na prihlásenie do Firefly III. Ak ste ich nevytvorili vy, skontrolujte nastavenia!',
    'new_backup_codes_intro'                     => 'Pre účet :email ste vytvorili nové záložné kódy. Môžete ich použiť na prihlásenie do Firefly III, ak stratíte prístup k overovacej aplikácii.',
    'new_backup_codes_warning'                   => 'Kódy uložte na bezpečné miesto. Ak ich stratíte, nebudete sa môcť prihlásiť do Firefly III. Ak ste ich nevytvorili vy, okamžite sa obráťte na správcu alebo si pozrite dokumentáciu Firefly III.',

    'used_backup_code_subject'                   => 'Na prihlásenie ste použili záložný kód',
    'used_backup_code_slack'                     => 'Pre účet :email bol na prihlásenie použitý záložný kód.',

    'used_backup_code_intro'                     => 'Na prihlásenie do účtu :email vo Firefly III ste použili záložný kód. Teraz máte o jeden záložný kód menej. Odstráňte použitý kód zo svojho zoznamu.',
    'used_backup_code_warning'                   => 'Ak ste to neurobili vy, okamžite sa obráťte na správcu alebo si pozrite dokumentáciu Firefly III.',

    // few left:
    'mfa_few_backups_left_subject'               => 'Počet zostávajúcich záložných kódov: :count',
    'mfa_few_backups_left_slack'                 => 'Účtu :email zostáva iba :count záložných kódov!',
    'few_backup_codes_intro'                     => 'Pre účet :email ste použili väčšinu záložných kódov a zostáva vám už iba :count. Čo najskôr si vytvorte nové.',
    'few_backup_codes_warning'                   => 'Ak stratíte prístup ku generátoru kódov, bez záložných kódov nebudete môcť obnoviť prístup chránený viacfaktorovým overovaním.',

    // NO left:
    'mfa_no_backups_left_subject'                => 'Nezostal vám ŽIADNY záložný kód!',
    'mfa_no_backups_left_slack'                  => 'Účtu :email nezostal ŽIADNY záložný kód!',
    'no_backup_codes_intro'                      => 'Pre účet :email ste použili VŠETKY záložné kódy. Čo najskôr si vytvorte nové.',
    'no_backup_codes_warning'                    => 'Ak stratíte prístup ku generátoru kódov, bez záložných kódov nebudete môcť obnoviť prístup chránený viacfaktorovým overovaním.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => 'Viacfaktorové overenie zlyhalo už :count-krát!',
    'mfa_many_failed_slack'                      => 'Pri účte :email zlyhalo viacfaktorové overenie už :count-krát. Ak ste sa neprihlasovali vy, skontrolujte nastavenia!',
    'mfa_many_failed_attempts_intro'             => 'Pri účte :email ste sa :count-krát pokúsili použiť kód viacfaktorového overovania, ale prihlásenie zlyhalo. Používate správny kód MFA? Je čas na serveri nastavený správne?',
    'mfa_many_failed_attempts_warning'           => 'Ak ste to neurobili vy, okamžite sa obráťte na správcu alebo si pozrite dokumentáciu Firefly III.',
];
