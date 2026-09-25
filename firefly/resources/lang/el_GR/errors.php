<?php

/**
 * firefly.php
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
    '404_header'                    => 'Το Firefly III δεν μπορεί να βρει αυτή τη σελίδα.',
    '404_page_does_not_exist'       => 'Η σελίδα που ζητήσατε δεν υπάρχει. Βεβαιωθείτε ότι δεν έχετε εισαγάγει λάθος διεύθυνση URL. Μήπως κάνατε τυπογραφικό λάθος;',

    '405_header'                    => 'Firefly III does not allow this method.',
    '405_page_does_not_exist'       => 'You cannot use this request method on this page. Please check that you have not entered the wrong URL. Did you make a typo perhaps?',
    '405_github_link'               => 'If you are sure this page should work, please open a ticket on <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    '404_send_error'                => 'Εάν καταλήξατε σε αυτή τη σελίδα από αυτόματη ανακατεύθυνση, σας ζητώ συγγνώμη. Υπάρχει αναφορά αυτού του σφάλματος στα αρχεία καταγραφής σας και θα ήμουν ευγνώμων εάν μου στείλετε το σφάλμα.',
    '404_github_link'               => 'Εάν είστε βέβαιοι ότι αυτή η σελίδα πρέπει να υπάρχει, ανοίξτε ένα νέο θέμα στο <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">GitHub</a></strong>.',
    'note_not_found_account'        => 'Account ":name" has been deleted and can no longer be viewed. Please enjoy this overview of all other accounts of the same type.',
    'note_not_found_group'          => 'Transaction ":description" has been deleted and can no longer be viewed. Please enjoy this overview of all other transactions of the same type.',
    'note_not_found_reconciliation' => 'Reconciliation ":description" has been deleted and can no longer be viewed. Here is an overview of the account it belonged to.',

    'maintenance_mode'              => 'Το Firefly III βρίσκεται σε λειτουργία συντήρησης.',
    'be_right_back'                 => 'Επιστρέφω αμέσως!',
    'check_back'                    => 'Firefly III is down for some necessary maintenance. Please check back in a second. If you happen to see this message on the demo site, just wait a few minutes. The database is reset every few hours.',
    'error_occurred'                => 'Ωχ! Παρουσιάστηκε σφάλμα.',
    'db_error_occurred'             => 'Ουπς! Προέκυψε ένα σφάλμα στη βάση δεδομένων.',
    'error_not_recoverable'         => 'Δυστυχώς, αυτό το σφάλμα δεν ήταν δυνατό να ξεπεραστεί :(. Το Firefly III δε λειτουργεί. Το σφάλμα είναι:',
    'error'                         => 'Σφάλμα',
    'error_location'                => 'This error occurred in file <span style="font-family: monospace;">:file</span> on line :line with code :code.',
    'stacktrace'                    => 'Ιχνηλάτηση στοίβας',
    'more_info'                     => 'Περισσότερες πληροφορίες',

    'collect_info'                  => 'Συλλέξτε περισσότερες πληροφορίες στον κατάλογο <code>storage/logs</code> όπου θα βρείτε αρχεία καταγραφής. Εάν χρησιμοποιείτε το Docker, χρησιμοποιήστε το <code>docker logs -f [container]</code>.',
    'collect_info_more'             => 'Μπορείτε να διαβάσετε περισσότερα σχετικά με τη συλλογή πληροφοριών σφαλμάτων στο <a href="https://docs.firefly-iii.org/how-to/general/debug/">FAQ</a>.',
    'github_help'                   => 'Λάβετε βοήθεια στο GitHub',
    'github_instructions'           => 'Είστε ευπρόσδεκτοι να ανοίξετε ένα νέο θέμα <strong><a href="https://github.com/firefly-iii/firefly-iii/issues">στο GitHub</a></strong>.',
    'use_search'                    => 'Χρησιμοποιήστε την αναζήτηση!',
    'include_info'                  => 'Συμπεριλάβετε τις πληροφορίες <a href=":link">από αυτή τη σελίδα εντοπισμού σφαλμάτων</a>.',
    'tell_more'                     => 'Πείτε μας λίγα περισσότερα από το "μου λέει Ουπς!"',
    'include_logs'                  => 'Συμπεριλάβετε αρχεία καταγραφής σφαλμάτων (δείτε παραπάνω).',
    'what_did_you_do'               => 'Πείτε μας τι κάνατε.',
];
