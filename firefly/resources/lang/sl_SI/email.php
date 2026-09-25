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
    'greeting'                                   => 'Živjo,',
    'closing'                                    => 'Beep boop,',
    'signature'                                  => 'Firefly III poštni robot',
    'footer_ps'                                  => 'PS: To sporočilo je bilo poslano, ker ga je sprožila zahteva iz naslova IP :ipAddress.',

    // admin test
    'admin_test_subject'                         => 'Testno sporočilo vaše Firefly III namestitve',
    'admin_test_body'                            => 'To je testno sporočilo iz vašega primerka Firefly III. Poslano je bilo na elektronski naslov :email.',
    'admin_test_message'                         => 'To je testno sporočilo iz vašega primerka Firefly III. Poslano je bilo na preko kanala ":channel".',
    'admin_test_link'                            => 'Naslednja povezava naj kaže na vašo namestitev Firefly III. Ustrezno mora biti opremljena s »http« ali »https«. Če ni, nastavite okoljsko spremenljivko `APP_URL`: [:link](:link)',
    'firefly_iii_url'                            => 'Firefly III',

    // invite
    'invitation_created_subject'                 => 'Ustvarjeno je bilo povabilo',
    'invitation_created_body'                    => 'Administratorski uporabnik ":email" je ustvaril povabilo, ki ga lahko uporabi vsak, ki se skriva za e-poštnim naslovom ":invitee". Vabilo velja 48 ur.',
    'invite_user_subject'                        => 'Povabljeni ste bili, da ustvarite račun Firefly III.',
    'invitation_introduction'                    => 'Povabljeni ste, da ustvarite račun Firefly III na **:host**. Firefly III je zasebni upravitelj osebnih financ, ki ga gostite sami. Uporabljajo ga vsi kul otroci.',
    'invitation_invited_by'                      => 'Povabil vas je ":admin", to vabilo pa je bilo poslano ":invitee". To ste vi, kajne?',
    'invitation_url'                             => 'Vabilo velja 48 ur in ga lahko unovčite tako, da brskate po spletnem mestu [Firefly III](:url). Uživajte!',

    // new IP
    'login_from_new_ip'                          => 'Nova prijava v Firefly III',
    'slack_login_from_new_ip'                    => 'Nova prijava v Firefly III iz IP :ip (:host)',
    'new_ip_body'                                => 'Firefly III je zaznal novo prijavo v vaš račun z neznanega IP naslova. Če se še nikoli niste prijavili s spodnjega IP naslova ali je to že več kot šest mesecev nazaj, vas bo program Firefly III na to opozoril.',
    'new_ip_warning'                             => 'Če ta naslov IP ali prijavo prepoznate, tega sporočila ne upoštevajte. Če se niste prijavili ali če nimate pojma, za kaj gre, preverite varnostno geslo, ga spremenite in odjavite vse druge seje. To storite tako, da obiščete stran svojega profila. Seveda že imate omogočeno funkcijo 2FA, kajne? Ostanite varni!',
    'ip_address'                                 => 'IP naslov',
    'host_name'                                  => 'Gostitelj',
    'date_time'                                  => 'Datum + ura',
    'user_agent'                                 => 'Brskalnik',

    // access token created
    'access_token_created_subject'               => 'Nov žeton za dostop je bil ustvarjen',
    'access_token_created_body'                  => 'Nekdo (upajmo da vi) je ustvaril nov Firefly III API dostopni žeton za Vaš uporabniški račun.',
    'access_token_created_explanation'           => 'S tem žetonom lahko prek vmesnika API Firefly III dostopajo do **vseh** vaših finančnih evidenc.',
    'access_token_created_revoke'                => 'Če to niste bili vi, čim prej prekličite ta žeton na spletnem naslovu :url',

    // unknown user login attempt
    'unknown_user_subject'                       => 'Neznani uporabnik se je poskušal prijaviti',
    'unknown_user_body'                          => 'Neznan uporabnik (`:ip`) se je poskušal prijaviti v Firefly III. Uporabljen e-poštni naslov je bil `:address`.',
    'unknown_user_message'                       => 'E-poštni naslov, ki ga je uporabil (`:ip`), je bil `:address`.',

    // known user login attempt
    'failed_login_subject'                       => 'Firefly III je zaznal neuspešen poskus prijave',
    'failed_login_body'                          => 'Firefly III je zaznal, da se je nekdo (vi?) neuspešno poskušal prijaviti z vašim računom `:email`. Prosimo, potrdite, da ste bili to vi.',
    'failed_login_message'                       => 'Zaznan je bil neuspešen poskus prijave (`:ip`) na vaš račun Firefly III `:email`.',
    'failed_login_warning'                       => 'Če prepoznate ta naslov IP ali poskus prijave, lahko to sporočilo prezrete. Če se niste poskusili prijaviti ali če ne veste, za kaj gre, preverite varnost svojega gesla, ga spremenite in se odjavite iz vseh drugih sej. Če želite to narediti, pojdite na stran svojega profila. Seveda imate 2FA že omogočeno, kajne? Ostanite varni!',

    // registered
    'registered_subject'                         => 'Dobrodošli v Firefly III!',
    'registered_subject_admin'                   => 'Registriral se je nov uporabnik',
    'admin_new_user_registered'                  => 'Registriral se je nov uporabnik. Uporabniku **:email** je bilo dodeljeno uporabniško ime #:id.',
    'registered_welcome'                         => 'Dobrodošli v [Firefly III](:address). Vaša registracija je bila opravljena in to e-poštno sporočilo jo potrjuje. Juhu!',
    'registered_pw'                              => 'Če ste geslo že pozabili, ga ponastavite z uporabo [orodja za ponastavitev gesla](:address/password/reset).',
    'registered_help'                            => 'V zgornjem desnem kotu vsake strani je ikona pomoči. Če potrebujete pomoč, jo kliknite!',
    'registered_closing'                         => 'Uživajte!',
    'registered_firefly_iii_link'                => 'Firefly III:',
    'registered_pw_reset_link'                   => 'Ponastavitev geslo:',
    'registered_doc_link'                        => 'Dokumentacija:',

    // new version
    'new_version_email_subject'                  => 'Na voljo je nova različica Firefly III',

    // email change
    'email_change_subject'                       => 'Vaš Firefly III e-poštni naslov je bil spremenjen',
    'email_change_body_to_new'                   => 'Vi ali nekdo z dostopom do vašega računa Firefly III je spremenil vaš e-poštni naslov. Če tega sporočila niste pričakovali, ga prezrite in izbrišite.',
    'email_change_body_to_old'                   => 'Vi ali nekdo z dostopom do vašega računa Firefly III je spremenil vaš e-poštni naslov. Če tega niste pričakovali, morate za zaščito svojega računa slediti spodnji povezavi "razveljavi"!',
    'email_change_ignore'                        => 'Če ste vi sprožili to spremembo, lahko to sporočilo mirno prezrete.',
    'email_change_old'                           => 'Stari e-poštni naslov je bil: :email',
    'email_change_new'                           => 'Nov e-poštni naslov je: :email',
    'email_change_instructions'                  => 'Dokler te spremembe ne potrdite, Firefly III ne morete uporabljati. Za to sledite spodnji povezavi.',
    'email_change_undo_link'                     => 'Če želite preklicati spremembo, sledite tej povezavi:',

    // OAuth token created
    'oauth_created_subject'                      => 'Ustvarjen je bil nov odjemalec OAuth',
    'oauth_created_body'                         => 'Nekdo (upam, da vi) je pravkar ustvaril novega odjemalca Firefly III API OAuth za vaš uporabniški račun. Ima oznako ":name" in povratni naslov URL `:url`.',
    'oauth_created_explanation'                  => 'S tem odjemalcem lahko prek vmesnika API Firefly III dostopajo do **vseh** vaših finančnih evidenc.',
    'oauth_created_undo'                         => 'Če to niste bili vi, čim prej prekličite to stranko na naslovu `:url`',

    // reset password
    'reset_pw_subject'                           => 'Vaša zahteva za ponastavitev gesla',
    'reset_pw_message'                           => 'Na vašo e-pošto ste prejeli navodila za ponastavitev gesla. Če ste bili to vi, sledite navodilom.',
    'reset_pw_instructions'                      => 'Nekdo je poskušal ponastaviti vaše geslo. Če ste to storili vi, sledite spodnji povezavi.',
    'reset_pw_warning'                           => '**PROSIM** preverite, ali povezava dejansko vodi do Firefly III, kamor naj bi vodila!',

    // error
    'error_subject'                              => 'Ujel sem napako v Firefly III',
    'error_intro'                                => 'Firefly III v:version se je zaletel v napako: <span style="font-family: monospace;">:errorMessage</span>.',
    'error_type'                                 => 'Napaka je bila tipa ":class".',
    'error_timestamp'                            => 'Napaka se je pojavila na/ob: :time.',
    'error_location'                             => 'Ta napaka se je pojavila v datoteki "<span style="font-family: monospace;">:file</span>" v vrstici :line s kodo :code.',
    'error_user'                                 => 'Na napako je naletel uporabnik #:id, <a href="mailto::email">:email</a>.',
    'error_no_user'                              => 'Za to napako ni bil prijavljen noben uporabnik ali pa ni bil zaznan noben uporabnik.',
    'error_ip'                                   => 'Naslov IP, povezan s to napako, je: :ip',
    'error_url'                                  => 'URL je: :url',
    'error_user_agent'                           => 'Uporabniški agent: :userAgent',
    'error_stacktrace'                           => 'Celotna sled sklada je spodaj. Če mislite, da je to hrošč v Firefly III, lahko to sporočilo posredujete na <a href="mailto:james@firefly-iii.org?subject=I%20found%20a%20bug!">james@firefly-iii.org</a>. To lahko pomaga popraviti hrošča, ki ste ga pravkar našli.',
    'error_github_html'                          => 'Če vam je ljubše, lahko odprete tudi novo vprašanje na <a href="https://github.com/firefly-iii/firefly-iii/issues">GitHubu</a>.',
    'error_github_text'                          => 'Če želite, lahko novo številko odprete tudi na spletnem mestu https://github.com/firefly-iii/firefly-iii/issues.',
    'error_stacktrace_below'                     => 'Celotna sled sklada je spodaj:',
    'error_headers'                              => 'Uporabne so lahko tudi naslednje HTTP glave:',
    'error_post'                                 => 'To je poslal uporabnik:',

    // report new journals
    'new_journals_subject'                       => 'Firefly III je ustvaril novo transakcijo|Firefly III je ustvaril :count novih transakcij',
    'new_journals_header'                        => 'Firefly III je ustvaril transakcijo za vas. Najdete jo v svoji namestitvi Firefly III:|Firefly III je za vas ustvaril :count transakcij. Najdete jih v svoji namestitvi Firefly III:',

    // subscription is overdue.
    'subscriptions_overdue_subject_multi'        => 'Imate :count naročnin, ki so zapadle za plačilo',
    'subscriptions_overdue_subject_single'       => 'Imate zapadlo naročnino, ki jo je treba plačati',
    'subscriptions_overdue_warning_intro_single' => 'Imate eno zapadlo naročnino, ki jo je treba plačati. Na naslednji datum je bilo plačilo pričakovano, vendar še ni prispelo.',
    'subscriptions_overdue_warning_intro_multi'  => 'Imate :count naročnin, ki jih ni treba plačati. Na naslednji datum je bilo pričakovano plačilo, vendar še ni prispelo.',
    'subscriptions_overdue_please_action_single' => 'Morda preprosto niste povezali transakcije s to naročnino. V tem primeru to storite. O tej zapadli naročnini NE boste prejeli novega opozorila. Novo opozorilo bo poslano za NASLEDNJE zapadlo plačilo.',
    'subscriptions_overdue_please_action_multi'  => 'Morda preprosto niste povezali transakcije s to naročnino. V tem primeru to storite. O tej zapadli naročnini NE boste prejeli novega opozorila. Novo opozorilo bo poslano za NASLEDNJE zapadlo plačilo.',
    'subscriptions_overdue_outro'                => 'Če menite, da je to sporočilo napačno, se obrnite na razvijalca programa Firefly III. Hvala, ker uporabljate Firefly III.',
    // bill warning
    'bill_warning_subject_end_date'              => 'Vaša naročnina ":name" bo potekla čez :diff dni',
    'bill_warning_subject_now_end_date'          => 'Vaša naročnina ":name" bo plačana DANES',
    'bill_warning_subject_extension_date'        => 'Vaša naročnina ":name" bo podaljšana ali preklicana čez :diff dni',
    'bill_warning_subject_now_extension_date'    => 'Vaša naročnina ":name" bo DANES podaljšana ali preklicana',
    'bill_warning_end_date'                      => 'Vaša naročnina **":name"** naj bi se končala :date. Ta trenutek bo minil čez približno **:diff dni**.',
    'bill_warning_extension_date'                => 'Vaša naročnina **":name"** bo podaljšana ali preklicana :date. Ta trenutek bo minil čez približno **:diff dni**.',
    'bill_warning_end_date_zero'                 => 'Vaša naročnina **":name"** naj bi se končala :date. Ta trenutek bo minil **DANES!**',
    'bill_warning_extension_date_zero'           => 'Vaša naročnina **":name"** bo podaljšana ali preklicana :date. Ta trenutek bo minil **DANES!**',
    'bill_warning_please_action'                 => 'Prosim, da ustrezno ukrepate.',

    // user has enabled MFA
    'enabled_mfa_subject'                        => 'Omogočili ste večfaktorsko avtentikacijo',
    'enabled_mfa_slack'                          => '(:email) je omogočili večfaktorsko avtentikacijo. Ali to morda ni prav? Preverite nastavitve!',
    'have_enabled_mfa'                           => 'V svojem računu Firefly III ":email" ste omogočili večfaktorsko avtentikacijo. To pomeni, da boste odslej morali za prijavo uporabljati aplikacijo za preverjanje pristnosti.',
    'enabled_mfa_warning'                        => 'Če tega niste omogočili, se nemudoma obrnite na skrbnika ali si oglejte dokumentacijo Firefly III.',

    'disabled_mfa_subject'                       => 'Onemogočili ste večfaktorsko avtentikacijo!',
    'disabled_mfa_slack'                         => '(:email) je omogočili večfaktorsko avtentikacijo. Ali to morda ni prav? Preverite nastavitve!',
    'have_disabled_mfa'                          => 'V svojem računu Firefly III ":email" ste onemogočili večfaktorsko avtentikacijo.',
    'disabled_mfa_warning'                       => 'Če tega niste onemogočili, se nemudoma obrnite na skrbnika ali si oglejte dokumentacijo Firefly III.',

    'new_backup_codes_subject'                   => 'Ustvarili ste nove varnostne kode',
    'new_backup_codes_slack'                     => '(:email) je ustvarili nove rezervne kode. Te lahko uporabite za prijavo v Firefly III. Ali to morda ni prav? Preverite nastavitve!',
    'new_backup_codes_intro'                     => '(:email) je ustvaril nove varnostne kode. Te lahko uporabite za prijavo v Firefly III, če izgubite dostop do aplikacije za preverjanje pristnosti.',
    'new_backup_codes_warning'                   => 'Prosimo, da te kode shranite na varno mesto. Če jih izgubite, se ne boste mogli prijaviti v Firefly III. Če tega niste storili, se nemudoma obrnite na skrbnika ali si oglejte dokumentacijo Firefly III.',

    'used_backup_code_subject'                   => 'Za prijavo ste uporabili varnostno kodo',
    'used_backup_code_slack'                     => 'Za prijavo je (:email) uporabil varnostno kodo',

    'used_backup_code_intro'                     => 'Uporabili ste varnostno kodo (`:email`) za prijavo v Firefly III. Zdaj imate eno varnostno kodo manj. Prosimo, odstranite jo s svojega seznama.',
    'used_backup_code_warning'                   => 'Če tega niste storili, se nemudoma obrnite na skrbnika ali si oglejte dokumentacijo Firefly III.',

    // few left:
    'mfa_few_backups_left_subject'               => 'Imate samo še :count varnostnih kod!',
    'mfa_few_backups_left_slack'                 => '(:email) ima samo še :count varnostnih kod!',
    'few_backup_codes_intro'                     => '(:email) je porabil večino svojih varnostnih kod, zdaj jih ima še :count. Čim prej ustvarite nove.',
    'few_backup_codes_warning'                   => 'Brez varnostnih kod ne morete obnoviti prijave MFA, če izgubite dostop do generatorja kod.',

    // NO left:
    'mfa_no_backups_left_subject'                => 'Nimate več varnostnih kod!',
    'mfa_no_backups_left_slack'                  => '(:email) NIMA več rezervnih kod!',
    'no_backup_codes_intro'                      => '(:email) je uporabil VSE svoje varnostne kode. Čim prej ustvarite nove.',
    'no_backup_codes_warning'                    => 'Brez varnostnih kod ne morete obnoviti prijave MFA, če izgubite dostop do generatorja kod.',

    // many failed MFA attempts
    'mfa_many_failed_subject'                    => 'Poskusili ste uporabiti večfaktorsko avtentikacijo, vendar vam ni uspelo že :count krat!',
    'mfa_many_failed_slack'                      => '(:email) je že :count krat poskusil uporabiti večfaktorsko avtentikacijo, vendar ni bilo uspšno. Ali to morda ni prav? Preverite nastavitve!',
    'mfa_many_failed_attempts_intro'             => '(:email) je :count krat poskusil uporabiti kodo za večfaktorno avtentikacijo, vendar so bili ti poskusi prijave neuspešni. Ali ste prepričani, da uporabljate pravo kodo MFA? Ali ste prepričani, da je čas na strežniku pravilen?',
    'mfa_many_failed_attempts_warning'           => 'Če tega niste storili, se nemudoma obrnite na skrbnika ali si oglejte dokumentacijo Firefly III.',
];
