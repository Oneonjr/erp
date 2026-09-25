<?php return array (
  'PragmaRX\\Google2FALaravel\\Providers\\EventServiceProvider' => 
  array (
    'Illuminate\\Auth\\Events\\Logout' => 
    array (
      0 => 'PragmaRX\\Google2FALaravel\\Listeners\\DeleteDBToken',
    ),
  ),
  'Illuminate\\Foundation\\Support\\Providers\\EventServiceProvider' => 
  array (
    'FireflyIII\\Events\\Preferences\\UserGroupChangedPrimaryCurrency' => 
    array (
      0 => 'FireflyIII\\Listeners\\System\\RecalculatesPrimaryCurrencyAmounts@handle',
    ),
    'FireflyIII\\Events\\Test\\OwnerTestsNotificationChannel' => 
    array (
      0 => 'FireflyIII\\Listeners\\Test\\SendsTestNotification@handle',
    ),
    'FireflyIII\\Events\\Test\\UserTestsNotificationChannel' => 
    array (
      0 => 'FireflyIII\\Listeners\\Test\\SendsTestNotification@handle',
    ),
    'FireflyIII\\Events\\Security\\User\\UserChangedEmailAddress' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\User\\HandlesChangeOfUserEmailAddress@handle',
    ),
    'FireflyIII\\Events\\Security\\User\\UserHasEnabledMFA' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\User\\NotifiesUserAboutEnabledMFA@handle',
    ),
    'Laravel\\Passport\\Events\\AccessTokenCreated' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\User\\NotifiesUserAboutNewAccessToken@handle',
    ),
    'Illuminate\\Auth\\Events\\Login' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\User\\RespondsToNewLogin@handle',
    ),
    'FireflyIII\\Events\\Security\\User\\UserKeepsFailingMFA' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\User\\NotifiesUserAboutRepeatedMFAFailures@handle',
    ),
    'FireflyIII\\Events\\Security\\User\\UserHasGeneratedNewBackupCodes' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\User\\NotifiesUserAboutNewBackupCodes@handle',
    ),
    'FireflyIII\\Events\\Security\\User\\UserHasDisabledMFA' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\User\\NotifiesUserAboutDisabledMFA@handle',
    ),
    'FireflyIII\\Events\\Security\\User\\UserHasUsedBackupCode' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\User\\NotifiesUserAboutUsedBackupCode@handle',
    ),
    'FireflyIII\\Events\\Security\\User\\UserLoggedInFromNewIpAddress' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\User\\NotifiesUserAboutNewIpAddress@handle',
    ),
    'FireflyIII\\Events\\Security\\User\\UserHasNoMFABackupCodesLeft' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\User\\NotifiesUserAboutNoCodesLeft@handle',
    ),
    'FireflyIII\\Events\\Security\\User\\UserSuccessfullyLoggedIn' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\User\\StoresNewIpAddress@handle',
    ),
    'FireflyIII\\Events\\Security\\User\\UserFailedLoginAttempt' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\User\\NotifiesUserAboutFailedLogin@handle',
    ),
    'FireflyIII\\Events\\Security\\User\\UserRequestedNewPassword' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\User\\SendsUserNewPassword@handle',
    ),
    'FireflyIII\\Events\\Security\\User\\UserHasFewMFABackupCodesLeft' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\User\\NotifiesUserAboutFewCodesLeft@handle',
    ),
    'FireflyIII\\Events\\Security\\System\\SystemRequestedVersionCheck' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\System\\ChecksForNewVersion@handle',
    ),
    'FireflyIII\\Events\\Security\\System\\NewUserRegistered' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\System\\HandlesNewUserRegistration@handle',
    ),
    'FireflyIII\\Events\\Security\\System\\NewInvitationCreated' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\System\\NotifiesAboutNewInvitation@handle',
    ),
    'FireflyIII\\Events\\Security\\System\\SystemFoundNewVersionOnline' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\System\\NotifiesOwnerAboutNewVersion@handle',
    ),
    'FireflyIII\\Events\\Security\\System\\UnknownUserTriedLogin' => 
    array (
      0 => 'FireflyIII\\Listeners\\Security\\System\\NotifiesOwnerAboutUnknownUser@handle',
    ),
    'FireflyIII\\Events\\Model\\Budget\\CreatedBudget' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\Budget\\ProcessesBudgets@handle',
    ),
    'FireflyIII\\Events\\Model\\Budget\\DestroyingBudget' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\Budget\\ProcessesBudgets@handle',
    ),
    'FireflyIII\\Events\\Model\\Budget\\UpdatedBudget' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\Budget\\ProcessesBudgets@handle',
    ),
    'FireflyIII\\Events\\Model\\Webhook\\WebhookMessagesRequestSending' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\Webhook\\SendsWebhookMessages@handle',
    ),
    'FireflyIII\\Events\\Model\\Rule\\RuleActionFailedOnArray' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\Rule\\NotifiesUserAboutFailedRuleAction@handle',
    ),
    'FireflyIII\\Events\\Model\\Rule\\RuleActionFailedOnObject' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\Rule\\NotifiesUserAboutFailedRuleAction@handle',
    ),
    'FireflyIII\\Events\\Model\\BudgetLimit\\CreatedBudgetLimit' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\BudgetLimit\\ProcessesBudgetLimits@handle',
    ),
    'FireflyIII\\Events\\Model\\BudgetLimit\\DestroyedBudgetLimit' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\BudgetLimit\\ProcessesBudgetLimits@handle',
    ),
    'FireflyIII\\Events\\Model\\BudgetLimit\\UpdatedBudgetLimit' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\BudgetLimit\\ProcessesBudgetLimits@handle',
    ),
    'FireflyIII\\Events\\Model\\TransactionGroup\\DestroyedSingleTransactionGroup' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\TransactionGroup\\ProcessesDestroyedTransactionGroup@handle',
    ),
    'FireflyIII\\Events\\Model\\TransactionGroup\\CreatedSingleTransactionGroup' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\TransactionGroup\\ProcessesNewTransactionGroup@handle',
    ),
    'FireflyIII\\Events\\Model\\TransactionGroup\\UserRequestedBatchProcessing' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\TransactionGroup\\ProcessesNewTransactionGroup@handle',
    ),
    'FireflyIII\\Events\\Model\\TransactionGroup\\TransactionGroupRequestsAuditLogEntry' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\TransactionGroup\\StoresAuditLogEntry@handle',
    ),
    'FireflyIII\\Events\\Model\\TransactionGroup\\UpdatedSingleTransactionGroup' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\TransactionGroup\\ProcessesUpdatedTransactionGroup@handle',
    ),
    'FireflyIII\\Events\\Model\\TransactionGroup\\TransactionGroupsRequestedReporting' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\TransactionGroup\\MailsNewTransactionsReport@handle',
    ),
    'FireflyIII\\Events\\Model\\PiggyBank\\PiggyBankNameIsChanged' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\PiggyBank\\UpdatesRulesForChangedPiggyBankName@handle',
    ),
    'FireflyIII\\Events\\Model\\PiggyBank\\PiggyBankAmountIsChanged' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\PiggyBank\\CreatesPiggyBankEventForChangedAmount@handle',
    ),
    'FireflyIII\\Events\\Model\\Subscription\\SubscriptionsAreOverdueForPayment' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\Subscription\\NotifiesAboutOverdueSubscriptions@handle',
    ),
    'FireflyIII\\Events\\Model\\Subscription\\SubscriptionNeedsExtensionOrRenewal' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\Subscription\\NotifiesAboutExtensionOrRenewal@handle',
    ),
    'FireflyIII\\Events\\Model\\Account\\CreatedNewAccount' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\Account\\UpdatesAccountInformation@handle',
    ),
    'FireflyIII\\Events\\Model\\Account\\UpdatedExistingAccount' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\Account\\UpdatesAccountInformation@handle',
    ),
    'FireflyIII\\Events\\Model\\Bill\\UpdatedExistingBill' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\Bill\\UpdatesRulesForChangedBill@handle',
    ),
    'FireflyIII\\Events\\Model\\CurrencyExchangeRate\\CreatedCurrencyExchangeRate' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\CurrencyExchangeRate\\ProcessesExchangeRates@handle',
    ),
    'FireflyIII\\Events\\Model\\CurrencyExchangeRate\\DestroyedCurrencyExchangeRate' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\CurrencyExchangeRate\\ProcessesExchangeRates@handle',
    ),
    'FireflyIII\\Events\\Model\\CurrencyExchangeRate\\UpdatedCurrencyExchangeRate' => 
    array (
      0 => 'FireflyIII\\Listeners\\Model\\CurrencyExchangeRate\\ProcessesExchangeRates@handle',
    ),
  ),
);