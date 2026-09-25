<?php return array (
  'concurrency' => 
  array (
    'default' => 'process',
  ),
  'images' => 
  array (
    'default' => 'gd',
  ),
  'api' => 
  array (
    'filters' => 
    array (
      'allowed' => 
      array (
        'accounts' => 
        array (
          'name' => 'string',
          'active' => 'boolean',
          'iban' => 'iban',
          'balance' => 'numeric',
          'last_activity' => 'date',
          'balance_difference' => 'numeric',
        ),
      ),
    ),
    'sorting' => 
    array (
      'allowed' => 
      array (
        'transactions' => 
        array (
          0 => 'description',
          1 => 'amount',
        ),
        'accounts' => 
        array (
          0 => 'name',
          1 => 'active',
          2 => 'iban',
          3 => 'order',
          4 => 'account_number',
          5 => 'balance',
          6 => 'last_activity',
          7 => 'balance_difference',
          8 => 'current_debt',
        ),
      ),
    ),
    'valid_query_sort' => 
    array (
      'FireflyIII\\Models\\Account' => 
      array (
        0 => 'id',
        1 => 'name',
        2 => 'active',
        3 => 'iban',
        4 => 'order',
      ),
    ),
    'valid_api_sort' => 
    array (
      'FireflyIII\\Models\\Account' => 
      array (
        0 => 'account_number',
      ),
    ),
    'full_data_set' => 
    array (
      'FireflyIII\\Models\\Account' => 
      array (
        0 => 'last_activity',
        1 => 'balance',
        2 => 'balance_difference',
        3 => 'current_debt',
        4 => 'account_number',
      ),
    ),
    'valid_query_filters' => 
    array (
      'FireflyIII\\Models\\Account' => 
      array (
        0 => 'id',
        1 => 'name',
        2 => 'iban',
        3 => 'active',
      ),
    ),
    'valid_api_filters' => 
    array (
      'FireflyIII\\Models\\Account' => 
      array (
        0 => 'id',
        1 => 'name',
        2 => 'iban',
        3 => 'active',
        4 => 'type',
      ),
    ),
  ),
  'app' => 
  array (
    'name' => 'Firefly III',
    'env' => 'production',
    'debug' => false,
    'url' => 'http://localhost:8082',
    'frontend_url' => 'http://localhost:3000',
    'asset_url' => NULL,
    'timezone' => 'America/Sao_Paulo',
    'locale' => 'en_US',
    'fallback_locale' => 'en_US',
    'faker_locale' => 'en_US',
    'cipher' => 'AES-256-CBC',
    'key' => 'base64:oH9Z/8oD3o3g3A0y1m2b+3/U8T2v9r4k5t9d6h0Y2g4=',
    'previous_keys' => 
    array (
    ),
    'maintenance' => 
    array (
      'driver' => 'file',
      'store' => 'database',
    ),
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Concurrency\\ConcurrencyServiceProvider',
      6 => 'Illuminate\\Cookie\\CookieServiceProvider',
      7 => 'Illuminate\\Database\\DatabaseServiceProvider',
      8 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      9 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      10 => 'Illuminate\\Image\\ImageServiceProvider',
      11 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      12 => 'Illuminate\\Hashing\\HashServiceProvider',
      13 => 'Illuminate\\Mail\\MailServiceProvider',
      14 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      15 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      16 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      17 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      18 => 'Illuminate\\Queue\\QueueServiceProvider',
      19 => 'Illuminate\\Redis\\RedisServiceProvider',
      20 => 'Illuminate\\Session\\SessionServiceProvider',
      21 => 'Illuminate\\Translation\\TranslationServiceProvider',
      22 => 'Illuminate\\Validation\\ValidationServiceProvider',
      23 => 'Illuminate\\View\\ViewServiceProvider',
      24 => 'FireflyIII\\Providers\\AppServiceProvider',
      25 => 'FireflyIII\\Providers\\AuthServiceProvider',
      26 => 'FireflyIII\\Providers\\RouteServiceProvider',
      27 => 'PragmaRX\\Google2FALaravel\\ServiceProvider',
      28 => 'FireflyIII\\Providers\\AccountServiceProvider',
      29 => 'FireflyIII\\Providers\\AttachmentServiceProvider',
      30 => 'FireflyIII\\Providers\\BillServiceProvider',
      31 => 'FireflyIII\\Providers\\BudgetServiceProvider',
      32 => 'FireflyIII\\Providers\\CategoryServiceProvider',
      33 => 'FireflyIII\\Providers\\CurrencyServiceProvider',
      34 => 'FireflyIII\\Providers\\FireflyServiceProvider',
      35 => 'FireflyIII\\Providers\\JournalServiceProvider',
      36 => 'FireflyIII\\Providers\\PiggyBankServiceProvider',
      37 => 'FireflyIII\\Providers\\RuleServiceProvider',
      38 => 'FireflyIII\\Providers\\RuleGroupServiceProvider',
      39 => 'FireflyIII\\Providers\\SearchServiceProvider',
      40 => 'FireflyIII\\Providers\\TagServiceProvider',
      41 => 'FireflyIII\\Providers\\AdminServiceProvider',
      42 => 'FireflyIII\\Providers\\RecurringServiceProvider',
    ),
    'aliases' => 
    array (
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Html' => 'Spatie\\Html\\Facades\\Html',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'AccountForm' => 'FireflyIII\\Support\\Facades\\AccountForm',
      'CurrencyForm' => 'FireflyIII\\Support\\Facades\\CurrencyForm',
      'ExpandedForm' => 'FireflyIII\\Support\\Facades\\ExpandedForm',
      'PiggyBankForm' => 'FireflyIII\\Support\\Facades\\PiggyBankForm',
      'RuleForm' => 'FireflyIII\\Support\\Facades\\RuleForm',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
        'remember' => 524160,
      ),
      'remote_user_guard' => 
      array (
        'driver' => 'remote_user_guard',
        'provider' => 'remote_user_provider',
      ),
      'api' => 
      array (
        'driver' => 'passport',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'FireflyIII\\User',
      ),
      'remote_user_provider' => 
      array (
        'driver' => 'remote_user_provider',
        'model' => 'FireflyIII\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 300,
      ),
    ),
    'password_timeout' => 10800,
    'guard_header' => 'REMOTE_USER',
    'guard_email' => NULL,
  ),
  'bindables' => 
  array (
    'bindables' => 
    array (
      'account' => 'FireflyIII\\Models\\Account',
      'attachment' => 'FireflyIII\\Models\\Attachment',
      'availableBudget' => 'FireflyIII\\Models\\AvailableBudget',
      'bill' => 'FireflyIII\\Models\\Bill',
      'budget' => 'FireflyIII\\Models\\Budget',
      'budgetLimit' => 'FireflyIII\\Models\\BudgetLimit',
      'category' => 'FireflyIII\\Models\\Category',
      'linkType' => 'FireflyIII\\Models\\LinkType',
      'transactionType' => 'FireflyIII\\Models\\TransactionType',
      'journalLink' => 'FireflyIII\\Models\\TransactionJournalLink',
      'currency' => 'FireflyIII\\Models\\TransactionCurrency',
      'objectGroup' => 'FireflyIII\\Models\\ObjectGroup',
      'piggyBank' => 'FireflyIII\\Models\\PiggyBank',
      'preference' => 'FireflyIII\\Models\\Preference',
      'preferenceName' => 'FireflyIII\\Models\\Preference',
      'tj' => 'FireflyIII\\Models\\TransactionJournal',
      'tag' => 'FireflyIII\\Models\\Tag',
      'recurrence' => 'FireflyIII\\Models\\Recurrence',
      'rule' => 'FireflyIII\\Models\\Rule',
      'ruleGroup' => 'FireflyIII\\Models\\RuleGroup',
      'transactionGroup' => 'FireflyIII\\Models\\TransactionGroup',
      'user' => 'FireflyIII\\User',
      'webhook' => 'FireflyIII\\Models\\Webhook',
      'webhookMessage' => 'FireflyIII\\Models\\WebhookMessage',
      'webhookAttempt' => 'FireflyIII\\Models\\WebhookAttempt',
      'invitedUser' => 'FireflyIII\\Models\\InvitedUser',
      'currency_code' => 'FireflyIII\\Support\\Binder\\CurrencyCode',
      'start_date' => 'FireflyIII\\Support\\Binder\\Date',
      'end_date' => 'FireflyIII\\Support\\Binder\\Date',
      'date' => 'FireflyIII\\Support\\Binder\\Date',
      'accountList' => 'FireflyIII\\Support\\Binder\\AccountList',
      'doubleList' => 'FireflyIII\\Support\\Binder\\AccountList',
      'budgetList' => 'FireflyIII\\Support\\Binder\\BudgetList',
      'journalList' => 'FireflyIII\\Support\\Binder\\JournalList',
      'categoryList' => 'FireflyIII\\Support\\Binder\\CategoryList',
      'tagList' => 'FireflyIII\\Support\\Binder\\TagList',
      'preferenceList' => 'FireflyIII\\Support\\Binder\\PreferenceList',
      'fromCurrencyCode' => 'FireflyIII\\Support\\Binder\\CurrencyCode',
      'toCurrencyCode' => 'FireflyIII\\Support\\Binder\\CurrencyCode',
      'cliToken' => 'FireflyIII\\Support\\Binder\\CLIToken',
      'tagOrId' => 'FireflyIII\\Support\\Binder\\TagOrId',
      'dynamicConfigKey' => 'FireflyIII\\Support\\Binder\\DynamicConfigKey',
      'eitherConfigKey' => 'FireflyIII\\Support\\Binder\\EitherConfigKey',
      'userGroupAccount' => 'FireflyIII\\Support\\Binder\\UserGroupAccount',
      'userGroupTransaction' => 'FireflyIII\\Support\\Binder\\UserGroupTransaction',
      'userGroupBill' => 'FireflyIII\\Support\\Binder\\UserGroupBill',
      'userGroupExchangeRate' => 'FireflyIII\\Support\\Binder\\UserGroupExchangeRate',
      'userGroup' => 'FireflyIII\\Models\\UserGroup',
    ),
  ),
  'breadcrumbs' => 
  array (
    'view' => 'partials/layout/breadcrumbs-v3',
    'files' => '/var/www/html/routes/breadcrumbs.php',
    'unnamed-route-exception' => true,
    'missing-route-bound-breadcrumb-exception' => true,
    'invalid-named-breadcrumb-exception' => true,
    'manager-class' => 'Diglactic\\Breadcrumbs\\Manager',
    'generator-class' => 'Diglactic\\Breadcrumbs\\Generator',
  ),
  'broadcasting' => 
  array (
    'default' => 'null',
    'connections' => 
    array (
      'reverb' => 
      array (
        'driver' => 'reverb',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'host' => NULL,
          'port' => 443,
          'scheme' => 'https',
          'useTLS' => true,
        ),
        'client_options' => 
        array (
        ),
      ),
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'cluster' => NULL,
          'host' => 'api-mt1.pusher.com',
          'port' => 443,
          'scheme' => 'https',
          'encrypted' => true,
          'useTLS' => true,
        ),
        'client_options' => 
        array (
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'mercure' => 
      array (
        'driver' => 'mercure',
        'url' => NULL,
        'public_url' => NULL,
        'secret' => NULL,
        'encryption_key' => NULL,
        'claims' => 
        array (
          'iss' => NULL,
          'client_id' => NULL,
        ),
        'cookie_name' => NULL,
        'subscribe_expiration' => 5,
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
  ),
  'bulk' => 
  array (
    'transaction' => 
    array (
      'where' => 
      array (
        'account_id' => 'required|numeric|belongsToUser:accounts,id',
      ),
      'update' => 
      array (
        'account_id' => 'required|numeric|belongsToUser:accounts,id',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'session' => 
      array (
        'driver' => 'session',
        'key' => '_cache',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/var/www/html/storage/framework/cache/data',
      ),
      'storage' => 
      array (
        'driver' => 'storage',
        'disk' => NULL,
        'path' => 'framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => NULL,
        'secret' => NULL,
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
      'failover' => 
      array (
        'driver' => 'failover',
        'stores' => 
        array (
          0 => 'database',
          1 => 'array',
        ),
      ),
      'apc' => 
      array (
        'driver' => 'apc',
      ),
    ),
    'prefix' => 'firefly',
  ),
  'cer' => 
  array (
    'url' => 'https://ff3exchangerates.z6.web.core.windows.net',
    'enabled' => false,
    'download_enabled' => false,
    'date' => '2025-04-15',
    'rates' => 
    array (
      'EUR' => 1,
      'HUF' => 410.79798,
      'GBP' => 0.86003261,
      'UAH' => 46.867455,
      'PLN' => 4.2802098,
      'TRY' => 43.180054,
      'DKK' => 7.4591,
      'RON' => 7.4648336,
      'USD' => 1.1349044,
      'BRL' => 6.6458518,
      'CAD' => 1.575105,
      'MXN' => 22.805278,
      'IDR' => 19070.382,
      'AUD' => 1.787202,
      'NZD' => 1.9191078,
      'EGP' => 57.874172,
      'MAD' => 10.549438,
      'ZAR' => 21.444356,
      'JPY' => 162.47195,
      'RMB' => 8.2849977,
      'CNY' => 8.2849977,
      'RUB' => 93.34423,
      'INR' => 97.572815,
      'ILS' => 4.1801786,
      'CHF' => 0.92683126,
      'HRK' => 7.5345,
      'ISK' => 145.10532,
      'NOK' => 11.980824,
      'SEK' => 11.08809,
      'HKD' => 8.8046322,
      'CZK' => 25.092213,
    ),
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
      0 => '*',
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'firefly',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => 'mariadb',
        'port' => '3306',
        'database' => 'firefly',
        'username' => 'firefly_user',
        'password' => 'firefly_password',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'strict' => true,
        'engine' => 'InnoDB',
        'options' => 
        array (
        ),
      ),
      'mariadb' => 
      array (
        'driver' => 'mariadb',
        'url' => NULL,
        'host' => 'mariadb',
        'port' => '3306',
        'database' => 'firefly',
        'username' => 'firefly_user',
        'password' => 'firefly_password',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'mask_bindings_in_exception_messages' => false,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => 'mariadb',
        'port' => '3306',
        'database' => 'firefly',
        'username' => 'firefly_user',
        'password' => 'firefly_password',
        'charset' => 'utf8',
        'prefix' => '',
        'search_path' => 'public',
        'schema' => 'public',
        'sslmode' => 'prefer',
        'sslcert' => '',
        'sslkey' => '',
        'sslrootcert' => '',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => 'mariadb',
        'port' => '3306',
        'database' => 'firefly',
        'username' => 'firefly_user',
        'password' => 'firefly_password',
        'charset' => 'utf8',
        'prefix' => '',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'options' => 
      array (
        'cluster' => 'predis',
      ),
      'default' => 
      array (
        'scheme' => 'tcp',
        'url' => NULL,
        'path' => NULL,
        'host' => '127.0.0.1',
        'port' => 6379,
        'username' => NULL,
        'password' => '',
        'database' => '0',
      ),
      'cache' => 
      array (
        'scheme' => 'tcp',
        'url' => NULL,
        'path' => NULL,
        'host' => '127.0.0.1',
        'port' => 6379,
        'username' => NULL,
        'password' => '',
        'database' => '1',
      ),
    ),
  ),
  'debugbar' => 
  array (
    'enabled' => NULL,
    'collect_jobs' => false,
    'except' => 
    array (
      0 => 'telescope*',
      1 => 'horizon*',
    ),
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => false,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => true,
      'livewire' => true,
      'jobs' => false,
    ),
    'options' => 
    array (
      'time' => 
      array (
        'memory_usage' => false,
      ),
      'messages' => 
      array (
        'trace' => true,
      ),
      'memory' => 
      array (
        'reset_peak' => false,
        'with_baseline' => false,
        'precision' => 0,
      ),
      'auth' => 
      array (
        'show_name' => true,
        'show_guards' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'backtrace_exclude_paths' => 
        array (
        ),
        'timeline' => false,
        'duration_background' => true,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => false,
        'show_copy' => false,
        'slow_threshold' => false,
        'memory_usage' => false,
        'soft_limit' => 250,
        'hard_limit' => 500,
      ),
      'mail' => 
      array (
        'timeline' => false,
        'show_body' => true,
      ),
      'views' => 
      array (
        'timeline' => false,
        'data' => false,
        'group' => 50,
        'exclude_paths' => 
        array (
          0 => 'vendor/filament',
        ),
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'session' => 
      array (
        'hiddens' => 
        array (
        ),
      ),
      'symfony_request' => 
      array (
        'hiddens' => 
        array (
        ),
      ),
      'events' => 
      array (
        'data' => false,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'custom_collectors' => 
    array (
    ),
    'editor' => 'phpstorm',
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'ajax_handler_auto_show' => true,
    'ajax_handler_enable_tab' => true,
    'capture_streamed' => false,
    'streamed_content_types' => 
    array (
      0 => 'text/event-stream',
    ),
    'defer_datasets' => false,
    'remote_sites_path' => NULL,
    'local_sites_path' => NULL,
    'storage' => 
    array (
      'enabled' => true,
      'open' => NULL,
      'driver' => 'file',
      'path' => '/var/www/html/storage/debugbar',
      'connection' => NULL,
      'provider' => '',
      'hostname' => '127.0.0.1',
      'port' => 2304,
    ),
    'force_allow_enable' => false,
    'use_dist_files' => true,
    'include_vendors' => true,
    'error_handler' => false,
    'error_level' => 30719,
    'clockwork' => false,
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_middleware' => 
    array (
    ),
    'route_domain' => NULL,
    'theme' => 'auto',
    'debug_backtrace_limit' => 50,
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/app/public',
        'url' => 'http://localhost:8082/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'throw' => false,
        'report' => false,
      ),
      'upload' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/upload',
      ),
      'export' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/export',
      ),
      'database' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/storage/database',
      ),
      'seeds' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/resources/seeds',
      ),
      'stubs' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/resources/stubs',
      ),
      'resources' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/html/resources',
      ),
    ),
    'links' => 
    array (
      '/var/www/html/public/storage' => '/var/www/html/storage/app/public',
    ),
  ),
  'firefly' => 
  array (
    'configuration' => 
    array (
      'single_user_mode' => true,
      'is_demo_site' => false,
    ),
    'feature_flags' => 
    array (
      'export' => true,
      'telemetry' => false,
      'webhooks' => true,
      'handle_debts' => true,
      'expression_engine' => true,
      'running_balance_column' => true,
    ),
    'version' => '6.7.4',
    'build_time' => 1790349172,
    'api_version' => '2.1.0',
    'db_version' => 28,
    'is_docker' => false,
    'base_image_build' => '413',
    'base_image_date' => '08-09-2026 11:46:57 CEST',
    'is_local_dev' => false,
    'maxUploadSize' => 1073741824,
    'send_error_message' => true,
    'site_owner' => 'user@example.com',
    'fixer_api_key' => '',
    'static_cron_token' => '',
    'enable_external_map' => false,
    'disable_frame_header' => false,
    'disable_csp_header' => false,
    'allow_webhooks' => false,
    'demo_username' => '',
    'demo_password' => '',
    'tracker_site_id' => '',
    'tracker_url' => '',
    'authentication_guard' => 'web',
    'custom_logout_url' => '',
    'update_endpoint' => 'https://version.firefly-iii.org/index.json',
    'update_minimum_age' => 7,
    'system_preference_keys' => 
    array (
      0 => 'email_change_undo_token',
      1 => 'email_change_confirm_token',
      2 => 'access_token',
      3 => 'login_ip_history',
      4 => 'previous_email_latest',
      5 => 'previous_email_',
      6 => 'remote_guard_alt_email',
      7 => 'mfa_failure_count',
      8 => 'mfa_history',
      9 => 'mfa_recovery',
      10 => 'temp-mfa-secret',
    ),
    'languages' => 
    array (
      'ar_SA' => 
      array (
        'name_locale' => 'العربية',
        'name_english' => 'Arabic',
      ),
      'bg_BG' => 
      array (
        'name_locale' => 'Български',
        'name_english' => 'Bulgarian',
      ),
      'cs_CZ' => 
      array (
        'name_locale' => 'Czech',
        'name_english' => 'Czech',
      ),
      'da_DK' => 
      array (
        'name_locale' => 'Danish',
        'name_english' => 'Danish',
      ),
      'de_DE' => 
      array (
        'name_locale' => 'Deutsch',
        'name_english' => 'German',
      ),
      'el_GR' => 
      array (
        'name_locale' => 'Ελληνικά',
        'name_english' => 'Greek',
      ),
      'en_GB' => 
      array (
        'name_locale' => 'English (GB)',
        'name_english' => 'English (GB)',
      ),
      'en_US' => 
      array (
        'name_locale' => 'English (US)',
        'name_english' => 'English (US)',
      ),
      'es_ES' => 
      array (
        'name_locale' => 'Español',
        'name_english' => 'Spanish',
      ),
      'ca_ES' => 
      array (
        'name_locale' => 'Català (Espanya)',
        'name_english' => 'Catalan (Spain)',
      ),
      'fa_IR' => 
      array (
        'name_locale' => 'فارسی',
        'name_english' => 'Persian',
      ),
      'fi_FI' => 
      array (
        'name_locale' => 'Suomi',
        'name_english' => 'Finnish',
      ),
      'fr_FR' => 
      array (
        'name_locale' => 'Français',
        'name_english' => 'French',
      ),
      'hu_HU' => 
      array (
        'name_locale' => 'Hungarian',
        'name_english' => 'Hungarian',
      ),
      'id_ID' => 
      array (
        'name_locale' => 'Bahasa Indonesia',
        'name_english' => 'Indonesian',
      ),
      'it_IT' => 
      array (
        'name_locale' => 'Italiano',
        'name_english' => 'Italian',
      ),
      'ja_JP' => 
      array (
        'name_locale' => 'Japanese',
        'name_english' => 'Japanese',
      ),
      'ko_KR' => 
      array (
        'name_locale' => 'Korean',
        'name_english' => 'Korean',
      ),
      'nb_NO' => 
      array (
        'name_locale' => 'Norsk Bokmål',
        'name_english' => 'Norwegian Bokmål',
      ),
      'nn_NO' => 
      array (
        'name_locale' => 'Norsk Nynorsk',
        'name_english' => 'Norwegian Nynorsk',
      ),
      'nl_NL' => 
      array (
        'name_locale' => 'Nederlands',
        'name_english' => 'Dutch',
      ),
      'pl_PL' => 
      array (
        'name_locale' => 'Polski',
        'name_english' => 'Polish',
      ),
      'pt_BR' => 
      array (
        'name_locale' => 'Português do Brasil',
        'name_english' => 'Portuguese (Brazil)',
      ),
      'pt_PT' => 
      array (
        'name_locale' => 'Português',
        'name_english' => 'Portuguese',
      ),
      'ro_RO' => 
      array (
        'name_locale' => 'Română',
        'name_english' => 'Romanian',
      ),
      'ru_RU' => 
      array (
        'name_locale' => 'Русский',
        'name_english' => 'Russian',
      ),
      'sk_SK' => 
      array (
        'name_locale' => 'Slovenčina',
        'name_english' => 'Slovak',
      ),
      'sl_SI' => 
      array (
        'name_locale' => 'Slovenian',
        'name_english' => 'Slovenian',
      ),
      'sv_SE' => 
      array (
        'name_locale' => 'Svenska',
        'name_english' => 'Swedish',
      ),
      'tr_TR' => 
      array (
        'name_locale' => 'Türkçe',
        'name_english' => 'Turkish',
      ),
      'uk_UA' => 
      array (
        'name_locale' => 'Українська',
        'name_english' => 'Ukrainian',
      ),
      'vi_VN' => 
      array (
        'name_locale' => 'Tiếng Việt',
        'name_english' => 'Vietnamese',
      ),
      'zh_TW' => 
      array (
        'name_locale' => 'Chinese Traditional',
        'name_english' => 'Chinese Traditional',
      ),
      'zh_CN' => 
      array (
        'name_locale' => 'Chinese Simplified',
        'name_english' => 'Chinese Simplified',
      ),
    ),
    'trusted_proxies' => '',
    'default_location' => 
    array (
      'longitude' => '5.916667',
      'latitude' => '51.983333',
      'zoom_level' => '6',
    ),
    'admin_specific_prefs' => 
    array (
    ),
    'darkMode' => 'browser',
    'list_length' => 10,
    'default_preferences' => 
    array (
      'anonymous' => false,
      'frontpageAccounts' => 
      array (
      ),
      'listPageSize' => 50,
      'currencyPreference' => 'EUR',
      'language' => 'en_US',
      'locale' => 'equal',
      'convertToPrimary' => false,
    ),
    'default_currency' => 'EUR',
    'default_language' => 'en_US',
    'default_locale' => 'equal',
    'valid_currency_account_types' => 
    array (
      0 => 'Asset account',
      1 => 'Loan',
      2 => 'Debt',
      3 => 'Mortgage',
      4 => 'Cash account',
      5 => 'Initial balance account',
      6 => 'Liability credit account',
      7 => 'Reconciliation account',
    ),
    'valid_attachment_models' => 
    array (
      0 => 'FireflyIII\\Models\\Account',
      1 => 'FireflyIII\\Models\\Bill',
      2 => 'FireflyIII\\Models\\Budget',
      3 => 'FireflyIII\\Models\\Category',
      4 => 'FireflyIII\\Models\\PiggyBank',
      5 => 'FireflyIII\\Models\\Tag',
      6 => 'FireflyIII\\Models\\Transaction',
      7 => 'FireflyIII\\Models\\TransactionJournal',
      8 => 'FireflyIII\\Models\\Recurrence',
    ),
    'available_dark_modes' => 
    array (
      0 => 'light',
      1 => 'dark',
      2 => 'browser',
    ),
    'bill_reminder_periods' => 
    array (
      0 => 90,
      1 => 30,
      2 => 14,
      3 => 7,
      4 => 0,
    ),
    'valid_view_ranges' => 
    array (
      0 => '1D',
      1 => '1W',
      2 => '1M',
      3 => '3M',
      4 => '6M',
      5 => '1Y',
    ),
    'valid_url_protocols' => 'http,https,ftp,ftps,mailto,abacusfiiiapp',
    'allowedMimes' => 
    array (
      0 => 'text/plain',
      1 => 'text/html',
      2 => 'text/xml',
      3 => 'application/xml',
      4 => 'image/jpeg',
      5 => 'image/svg+xml',
      6 => 'image/png',
      7 => 'image/heic',
      8 => 'image/heic-sequence',
      9 => 'image/webp',
      10 => 'image/gif',
      11 => 'image/tiff',
      12 => 'image/bmp',
      13 => 'image/x-icon',
      14 => 'image/vnd.microsoft.icon',
      15 => 'application/pdf',
      16 => 'application/octet-stream',
      17 => 'application/msword',
      18 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
      19 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
      20 => 'application/vnd.ms-excel',
      21 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
      22 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.template',
      23 => 'application/vnd.ms-powerpoint',
      24 => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
      25 => 'application/vnd.openxmlformats-officedocument.presentationml.template',
      26 => 'application/vnd.openxmlformats-officedocument.presentationml.slideshow',
      27 => 'application/x-iwork-pages-sffpages',
      28 => 'application/vnd.sun.xml.writer',
      29 => 'application/vnd.sun.xml.writer.template',
      30 => 'application/vnd.sun.xml.writer.global',
      31 => 'application/vnd.stardivision.writer',
      32 => 'application/vnd.stardivision.writer-global',
      33 => 'application/vnd.sun.xml.calc',
      34 => 'application/vnd.sun.xml.calc.template',
      35 => 'application/vnd.stardivision.calc',
      36 => 'application/vnd.sun.xml.impress',
      37 => 'application/vnd.sun.xml.impress.template',
      38 => 'application/vnd.stardivision.impress',
      39 => 'application/vnd.sun.xml.draw',
      40 => 'application/vnd.sun.xml.draw.template',
      41 => 'application/vnd.stardivision.draw',
      42 => 'application/vnd.sun.xml.math',
      43 => 'application/vnd.stardivision.math',
      44 => 'application/vnd.oasis.opendocument.text',
      45 => 'application/vnd.oasis.opendocument.text-template',
      46 => 'application/vnd.oasis.opendocument.text-web',
      47 => 'application/vnd.oasis.opendocument.text-master',
      48 => 'application/vnd.oasis.opendocument.graphics',
      49 => 'application/vnd.oasis.opendocument.graphics-template',
      50 => 'application/vnd.oasis.opendocument.presentation',
      51 => 'application/vnd.oasis.opendocument.presentation-template',
      52 => 'application/vnd.oasis.opendocument.spreadsheet',
      53 => 'application/vnd.oasis.opendocument.spreadsheet-template',
      54 => 'application/vnd.oasis.opendocument.chart',
      55 => 'application/vnd.oasis.opendocument.formula',
      56 => 'application/vnd.oasis.opendocument.database',
      57 => 'application/vnd.oasis.opendocument.image',
      58 => 'message/rfc822',
      59 => 'application/json',
    ),
    'accountRoles' => 
    array (
      0 => 'defaultAsset',
      1 => 'sharedAsset',
      2 => 'savingAsset',
      3 => 'ccAsset',
      4 => 'cashWalletAsset',
    ),
    'valid_liabilities' => 
    array (
      0 => 'Debt',
      1 => 'Loan',
      2 => 'Mortgage',
    ),
    'ccTypes' => 
    array (
      'monthlyFull' => 'Full payment every month',
    ),
    'credit_card_types' => 
    array (
      0 => 'monthlyFull',
    ),
    'bill_periods' => 
    array (
      0 => 'daily',
      1 => 'weekly',
      2 => 'monthly',
      3 => 'quarterly',
      4 => 'half-year',
      5 => 'yearly',
    ),
    'interest_periods' => 
    array (
      0 => 'daily',
      1 => 'weekly',
      2 => 'monthly',
      3 => 'quarterly',
      4 => 'half-year',
      5 => 'yearly',
    ),
    'range_to_repeat_freq' => 
    array (
      '1D' => 'weekly',
      '1W' => 'weekly',
      '1M' => 'monthly',
      '3M' => 'quarterly',
      '6M' => 'half-year',
      '1Y' => 'yearly',
      'custom' => 'custom',
    ),
    'subTitlesByIdentifier' => 
    array (
      'asset' => 'Asset accounts',
      'expense' => 'Expense accounts',
      'revenue' => 'Revenue accounts',
      'cash' => 'Cash accounts',
      'liabilities' => 'Liabilities',
      'liability' => 'Liabilities',
    ),
    'subIconsByIdentifier' => 
    array (
      'asset' => 'bi-cash',
      'Asset account' => 'bi-cash',
      'Default account' => 'bi-cash',
      'Cash account' => 'bi-cash',
      'expense' => 'bi-cart',
      'Expense account' => 'bi-cart',
      'Beneficiary account' => 'bi-cart',
      'revenue' => 'bi-box-arrow-down',
      'Revenue account' => 'bi-box-arrow-down',
      'import' => 'bi-box-arrow-down',
      'Import account' => 'bi-box-arrow-down',
      'liabilities' => 'bi-ticket-detailed',
    ),
    'accountTypesByIdentifier' => 
    array (
      'asset' => 
      array (
        0 => 'Default account',
        1 => 'Asset account',
      ),
      'expense' => 
      array (
        0 => 'Expense account',
        1 => 'Beneficiary account',
      ),
      'revenue' => 
      array (
        0 => 'Revenue account',
      ),
      'import' => 
      array (
        0 => 'Import account',
      ),
      'liabilities' => 
      array (
        0 => 'Loan',
        1 => 'Debt',
        2 => 'Credit card',
        3 => 'Mortgage',
      ),
    ),
    'accountTypeByIdentifier' => 
    array (
      'asset' => 
      array (
        0 => 'Asset account',
      ),
      'expense' => 
      array (
        0 => 'Expense account',
      ),
      'revenue' => 
      array (
        0 => 'Revenue account',
      ),
      'opening' => 
      array (
        0 => 'Initial balance account',
      ),
      'initial' => 
      array (
        0 => 'Initial balance account',
      ),
      'import' => 
      array (
        0 => 'Import account',
      ),
      'reconcile' => 
      array (
        0 => 'Reconciliation account',
      ),
      'loan' => 
      array (
        0 => 'Loan',
      ),
      'debt' => 
      array (
        0 => 'Debt',
      ),
      'mortgage' => 
      array (
        0 => 'Mortgage',
      ),
      'liabilities' => 
      array (
        0 => 'Loan',
        1 => 'Debt',
        2 => 'Mortgage',
        3 => 'Credit card',
      ),
      'liability' => 
      array (
        0 => 'Loan',
        1 => 'Debt',
        2 => 'Mortgage',
        3 => 'Credit card',
      ),
    ),
    'shortNamesByFullName' => 
    array (
      'Default account' => 'asset',
      'Asset account' => 'asset',
      'Import account' => 'import',
      'Expense account' => 'expense',
      'Beneficiary account' => 'expense',
      'Revenue account' => 'revenue',
      'Cash account' => 'cash',
      'Initial balance account' => 'initial-balance',
      'Reconciliation account' => 'reconciliation',
      'Credit card' => 'liabilities',
      'Loan' => 'liabilities',
      'Debt' => 'liabilities',
      'Mortgage' => 'liabilities',
    ),
    'shortLiabilityNameByFullName' => 
    array (
      'Credit card' => 'creditcard',
      'Loan' => 'Loan',
      'Debt' => 'Debt',
      'Mortgage' => 'Mortgage',
    ),
    'transactionTypesByType' => 
    array (
      'all' => 
      array (
        0 => 'Withdrawal',
        1 => 'Deposit',
        2 => 'Transfer',
      ),
      'expenses' => 
      array (
        0 => 'Withdrawal',
      ),
      'withdrawal' => 
      array (
        0 => 'Withdrawal',
      ),
      'revenue' => 
      array (
        0 => 'Deposit',
      ),
      'deposit' => 
      array (
        0 => 'Deposit',
      ),
      'transfer' => 
      array (
        0 => 'Transfer',
      ),
      'transfers' => 
      array (
        0 => 'Transfer',
      ),
    ),
    'transactionTypesToShort' => 
    array (
      'Withdrawal' => 'withdrawal',
      'Deposit' => 'deposit',
      'Transfer' => 'transfer',
      'Opening balance' => 'opening-balance',
      'Reconciliation' => 'reconciliation',
    ),
    'transactionIconsByType' => 
    array (
      'expenses' => 'bi-arrow-left',
      'withdrawal' => 'bi-arrow-left',
      'revenue' => 'bi-arrow-right',
      'deposit' => 'bi-arrow-right',
      'transfer' => 'bi-arrow-left-right',
      'transfers' => 'bi-arrow-left-right',
    ),
    'rule-actions' => 
    array (
      'set_category' => 'FireflyIII\\TransactionRules\\Actions\\SetCategory',
      'clear_category' => 'FireflyIII\\TransactionRules\\Actions\\ClearCategory',
      'set_budget' => 'FireflyIII\\TransactionRules\\Actions\\SetBudget',
      'clear_budget' => 'FireflyIII\\TransactionRules\\Actions\\ClearBudget',
      'add_tag' => 'FireflyIII\\TransactionRules\\Actions\\AddTag',
      'remove_tag' => 'FireflyIII\\TransactionRules\\Actions\\RemoveTag',
      'remove_all_tags' => 'FireflyIII\\TransactionRules\\Actions\\RemoveAllTags',
      'set_description' => 'FireflyIII\\TransactionRules\\Actions\\SetDescription',
      'set_source_account' => 'FireflyIII\\TransactionRules\\Actions\\SetSourceAccount',
      'set_destination_account' => 'FireflyIII\\TransactionRules\\Actions\\SetDestinationAccount',
      'set_notes' => 'FireflyIII\\TransactionRules\\Actions\\SetNotes',
      'clear_notes' => 'FireflyIII\\TransactionRules\\Actions\\ClearNotes',
      'link_to_bill' => 'FireflyIII\\TransactionRules\\Actions\\LinkToBill',
      'convert_withdrawal' => 'FireflyIII\\TransactionRules\\Actions\\ConvertToWithdrawal',
      'convert_deposit' => 'FireflyIII\\TransactionRules\\Actions\\ConvertToDeposit',
      'convert_transfer' => 'FireflyIII\\TransactionRules\\Actions\\ConvertToTransfer',
      'switch_accounts' => 'FireflyIII\\TransactionRules\\Actions\\SwitchAccounts',
      'update_piggy' => 'FireflyIII\\TransactionRules\\Actions\\UpdatePiggyBank',
      'delete_transaction' => 'FireflyIII\\TransactionRules\\Actions\\DeleteTransaction',
      'set_source_to_cash' => 'FireflyIII\\TransactionRules\\Actions\\SetSourceToCashAccount',
      'set_destination_to_cash' => 'FireflyIII\\TransactionRules\\Actions\\SetDestinationToCashAccount',
      'set_amount' => 'FireflyIII\\TransactionRules\\Actions\\SetAmount',
    ),
    'context-rule-actions' => 
    array (
      0 => 'set_category',
      1 => 'set_budget',
      2 => 'add_tag',
      3 => 'remove_tag',
      4 => 'set_description',
      5 => 'append_description',
      6 => 'prepend_description',
      7 => 'set_source_account',
      8 => 'set_destination_account',
      9 => 'set_notes',
      10 => 'append_notes',
      11 => 'prepend_notes',
      12 => 'link_to_bill',
      13 => 'convert_transfer',
    ),
    'test-triggers' => 
    array (
      'limit' => 10,
      'range' => 200,
    ),
    'expected_source_types' => 
    array (
      'source' => 
      array (
        'Withdrawal' => 
        array (
          0 => 'Asset account',
          1 => 'Loan',
          2 => 'Debt',
          3 => 'Mortgage',
        ),
        'Deposit' => 
        array (
          0 => 'Loan',
          1 => 'Debt',
          2 => 'Mortgage',
          3 => 'Revenue account',
          4 => 'Cash account',
        ),
        'Transfer' => 
        array (
          0 => 'Asset account',
          1 => 'Loan',
          2 => 'Debt',
          3 => 'Mortgage',
        ),
        'Opening balance' => 
        array (
          0 => 'Initial balance account',
          1 => 'Asset account',
          2 => 'Loan',
          3 => 'Debt',
          4 => 'Mortgage',
        ),
        'Reconciliation' => 
        array (
          0 => 'Reconciliation account',
          1 => 'Asset account',
        ),
        'Liability credit' => 
        array (
          0 => 'Liability credit account',
          1 => 'Loan',
          2 => 'Debt',
          3 => 'Mortgage',
        ),
        'none' => 
        array (
          0 => 'Asset account',
          1 => 'Expense account',
          2 => 'Revenue account',
          3 => 'Loan',
          4 => 'Debt',
          5 => 'Mortgage',
        ),
      ),
      'destination' => 
      array (
        'Withdrawal' => 
        array (
          0 => 'Loan',
          1 => 'Debt',
          2 => 'Mortgage',
          3 => 'Expense account',
          4 => 'Cash account',
        ),
        'Deposit' => 
        array (
          0 => 'Asset account',
          1 => 'Loan',
          2 => 'Debt',
          3 => 'Mortgage',
        ),
        'Transfer' => 
        array (
          0 => 'Asset account',
          1 => 'Loan',
          2 => 'Debt',
          3 => 'Mortgage',
        ),
        'Opening balance' => 
        array (
          0 => 'Initial balance account',
          1 => 'Asset account',
          2 => 'Loan',
          3 => 'Debt',
          4 => 'Mortgage',
        ),
        'Reconciliation' => 
        array (
          0 => 'Reconciliation account',
          1 => 'Asset account',
        ),
        'Liability credit' => 
        array (
          0 => 'Liability credit account',
          1 => 'Loan',
          2 => 'Debt',
          3 => 'Mortgage',
        ),
      ),
    ),
    'allowed_opposing_types' => 
    array (
      'source' => 
      array (
        'Asset account' => 
        array (
          0 => 'Asset account',
          1 => 'Cash account',
          2 => 'Debt',
          3 => 'Expense account',
          4 => 'Initial balance account',
          5 => 'Loan',
          6 => 'Reconciliation account',
          7 => 'Mortgage',
        ),
        'Cash account' => 
        array (
          0 => 'Asset account',
        ),
        'Debt' => 
        array (
          0 => 'Asset account',
          1 => 'Debt',
          2 => 'Expense account',
          3 => 'Initial balance account',
          4 => 'Loan',
          5 => 'Mortgage',
          6 => 'Liability credit account',
        ),
        'Expense account' => 
        array (
        ),
        'Initial balance account' => 
        array (
          0 => 'Asset account',
          1 => 'Debt',
          2 => 'Loan',
          3 => 'Mortgage',
        ),
        'Loan' => 
        array (
          0 => 'Asset account',
          1 => 'Debt',
          2 => 'Expense account',
          3 => 'Initial balance account',
          4 => 'Loan',
          5 => 'Mortgage',
          6 => 'Liability credit account',
        ),
        'Mortgage' => 
        array (
          0 => 'Asset account',
          1 => 'Debt',
          2 => 'Expense account',
          3 => 'Initial balance account',
          4 => 'Loan',
          5 => 'Mortgage',
          6 => 'Liability credit account',
        ),
        'Reconciliation account' => 
        array (
          0 => 'Asset account',
        ),
        'Revenue account' => 
        array (
          0 => 'Asset account',
          1 => 'Debt',
          2 => 'Loan',
          3 => 'Mortgage',
        ),
        'Liability credit account' => 
        array (
          0 => 'Debt',
          1 => 'Loan',
          2 => 'Mortgage',
        ),
      ),
      'destination' => 
      array (
        'Asset account' => 
        array (
          0 => 'Asset account',
          1 => 'Cash account',
          2 => 'Debt',
          3 => 'Initial balance account',
          4 => 'Loan',
          5 => 'Mortgage',
          6 => 'Reconciliation account',
          7 => 'Revenue account',
        ),
        'Cash account' => 
        array (
          0 => 'Asset account',
        ),
        'Debt' => 
        array (
          0 => 'Asset account',
          1 => 'Debt',
          2 => 'Initial balance account',
          3 => 'Loan',
          4 => 'Mortgage',
          5 => 'Revenue account',
        ),
        'Expense account' => 
        array (
          0 => 'Asset account',
          1 => 'Debt',
          2 => 'Loan',
          3 => 'Mortgage',
        ),
        'Initial balance account' => 
        array (
          0 => 'Asset account',
          1 => 'Debt',
          2 => 'Loan',
          3 => 'Mortgage',
        ),
        'Loan' => 
        array (
          0 => 'Asset account',
          1 => 'Debt',
          2 => 'Initial balance account',
          3 => 'Loan',
          4 => 'Mortgage',
          5 => 'Revenue account',
        ),
        'Mortgage' => 
        array (
          0 => 'Asset account',
          1 => 'Debt',
          2 => 'Initial balance account',
          3 => 'Loan',
          4 => 'Mortgage',
          5 => 'Revenue account',
        ),
        'Reconciliation account' => 
        array (
          0 => 'Asset account',
        ),
        'Revenue account' => 
        array (
        ),
        'Liability credit account' => 
        array (
        ),
      ),
    ),
    'allowed_transaction_types' => 
    array (
      'source' => 
      array (
        'Asset account' => 
        array (
          0 => 'Withdrawal',
          1 => 'Transfer',
          2 => 'Opening balance',
          3 => 'Reconciliation',
        ),
        'Expense account' => 
        array (
        ),
        'Revenue account' => 
        array (
          0 => 'Deposit',
        ),
        'Loan' => 
        array (
          0 => 'Withdrawal',
          1 => 'Deposit',
          2 => 'Transfer',
          3 => 'Opening balance',
          4 => 'Liability credit',
        ),
        'Debt' => 
        array (
          0 => 'Withdrawal',
          1 => 'Deposit',
          2 => 'Transfer',
          3 => 'Opening balance',
          4 => 'Liability credit',
        ),
        'Mortgage' => 
        array (
          0 => 'Withdrawal',
          1 => 'Deposit',
          2 => 'Transfer',
          3 => 'Opening balance',
          4 => 'Liability credit',
        ),
        'Initial balance account' => 
        array (
          0 => 'Opening balance',
        ),
        'Reconciliation account' => 
        array (
          0 => 'Reconciliation',
        ),
        'Liability credit account' => 
        array (
          0 => 'Liability credit',
        ),
      ),
      'destination' => 
      array (
        'Asset account' => 
        array (
          0 => 'Deposit',
          1 => 'Transfer',
          2 => 'Opening balance',
          3 => 'Reconciliation',
        ),
        'Expense account' => 
        array (
          0 => 'Withdrawal',
        ),
        'Revenue account' => 
        array (
        ),
        'Loan' => 
        array (
          0 => 'Withdrawal',
          1 => 'Deposit',
          2 => 'Transfer',
          3 => 'Opening balance',
        ),
        'Debt' => 
        array (
          0 => 'Withdrawal',
          1 => 'Deposit',
          2 => 'Transfer',
          3 => 'Opening balance',
        ),
        'Mortgage' => 
        array (
          0 => 'Withdrawal',
          1 => 'Deposit',
          2 => 'Transfer',
          3 => 'Opening balance',
        ),
        'Initial balance account' => 
        array (
          0 => 'Opening balance',
        ),
        'Reconciliation account' => 
        array (
          0 => 'Reconciliation',
        ),
        'Liability credit account' => 
        array (
        ),
      ),
    ),
    'account_to_transaction' => 
    array (
      'Asset account' => 
      array (
        'Asset account' => 'Transfer',
        'Cash account' => 'Withdrawal',
        'Debt' => 'Withdrawal',
        'Expense account' => 'Withdrawal',
        'Initial balance account' => 'Opening balance',
        'Loan' => 'Withdrawal',
        'Mortgage' => 'Withdrawal',
        'Reconciliation account' => 'Reconciliation',
      ),
      'Cash account' => 
      array (
        'Asset account' => 'Deposit',
        'Loan' => 'Deposit',
        'Debt' => 'Deposit',
        'Mortgage' => 'Deposit',
      ),
      'Debt' => 
      array (
        'Asset account' => 'Deposit',
        'Debt' => 'Transfer',
        'Expense account' => 'Withdrawal',
        'Initial balance account' => 'Opening balance',
        'Loan' => 'Transfer',
        'Mortgage' => 'Transfer',
      ),
      'Initial balance account' => 
      array (
        'Asset account' => 'Opening balance',
        'Debt' => 'Opening balance',
        'Loan' => 'Opening balance',
        'Mortgage' => 'Opening balance',
      ),
      'Loan' => 
      array (
        'Asset account' => 'Deposit',
        'Debt' => 'Transfer',
        'Expense account' => 'Withdrawal',
        'Initial balance account' => 'Opening balance',
        'Loan' => 'Transfer',
        'Mortgage' => 'Transfer',
      ),
      'Mortgage' => 
      array (
        'Asset account' => 'Deposit',
        'Debt' => 'Transfer',
        'Expense account' => 'Withdrawal',
        'Initial balance account' => 'Opening balance',
        'Loan' => 'Transfer',
        'Mortgage' => 'Transfer',
      ),
      'Reconciliation account' => 
      array (
        'Asset account' => 'Reconciliation',
      ),
      'Revenue account' => 
      array (
        'Asset account' => 'Deposit',
        'Debt' => 'Deposit',
        'Loan' => 'Deposit',
        'Mortgage' => 'Deposit',
      ),
      'Liability credit account' => 
      array (
        'Debt' => 'Liability credit',
        'Loan' => 'Liability credit',
        'Mortgage' => 'Liability credit',
      ),
    ),
    'source_dests' => 
    array (
      'Withdrawal' => 
      array (
        'Asset account' => 
        array (
          0 => 'Expense account',
          1 => 'Loan',
          2 => 'Debt',
          3 => 'Mortgage',
          4 => 'Cash account',
        ),
        'Loan' => 
        array (
          0 => 'Expense account',
          1 => 'Cash account',
        ),
        'Debt' => 
        array (
          0 => 'Expense account',
          1 => 'Cash account',
        ),
        'Mortgage' => 
        array (
          0 => 'Expense account',
          1 => 'Cash account',
        ),
      ),
      'Deposit' => 
      array (
        'Revenue account' => 
        array (
          0 => 'Asset account',
          1 => 'Loan',
          2 => 'Debt',
          3 => 'Mortgage',
        ),
        'Cash account' => 
        array (
          0 => 'Asset account',
          1 => 'Loan',
          2 => 'Debt',
          3 => 'Mortgage',
        ),
        'Loan' => 
        array (
          0 => 'Asset account',
        ),
        'Debt' => 
        array (
          0 => 'Asset account',
        ),
        'Mortgage' => 
        array (
          0 => 'Asset account',
        ),
      ),
      'Transfer' => 
      array (
        'Asset account' => 
        array (
          0 => 'Asset account',
        ),
        'Loan' => 
        array (
          0 => 'Loan',
          1 => 'Debt',
          2 => 'Mortgage',
        ),
        'Debt' => 
        array (
          0 => 'Loan',
          1 => 'Debt',
          2 => 'Mortgage',
        ),
        'Mortgage' => 
        array (
          0 => 'Loan',
          1 => 'Debt',
          2 => 'Mortgage',
        ),
      ),
      'Opening balance' => 
      array (
        'Asset account' => 
        array (
          0 => 'Initial balance account',
        ),
        'Loan' => 
        array (
          0 => 'Initial balance account',
        ),
        'Debt' => 
        array (
          0 => 'Initial balance account',
        ),
        'Mortgage' => 
        array (
          0 => 'Initial balance account',
        ),
        'Initial balance account' => 
        array (
          0 => 'Asset account',
          1 => 'Loan',
          2 => 'Debt',
          3 => 'Mortgage',
        ),
      ),
      'Reconciliation' => 
      array (
        'Reconciliation account' => 
        array (
          0 => 'Asset account',
        ),
        'Asset account' => 
        array (
          0 => 'Reconciliation account',
        ),
      ),
      'Liability credit' => 
      array (
        'Loan' => 
        array (
          0 => 'Liability credit account',
        ),
        'Debt' => 
        array (
          0 => 'Liability credit account',
        ),
        'Mortgage' => 
        array (
          0 => 'Liability credit account',
        ),
        'Liability credit account' => 
        array (
          0 => 'Loan',
          1 => 'Debt',
          2 => 'Mortgage',
        ),
      ),
    ),
    'journal_meta_fields' => 
    array (
      0 => 'sepa_cc',
      1 => 'sepa_ct_op',
      2 => 'sepa_ct_id',
      3 => 'sepa_db',
      4 => 'sepa_country',
      5 => 'sepa_ep',
      6 => 'sepa_ci',
      7 => 'sepa_batch_id',
      8 => 'external_url',
      9 => 'interest_date',
      10 => 'book_date',
      11 => 'process_date',
      12 => 'due_date',
      13 => 'payment_date',
      14 => 'invoice_date',
      15 => 'recurrence_id',
      16 => 'internal_reference',
      17 => 'bunq_payment_id',
      18 => 'import_hash',
      19 => 'import_hash_v2',
      20 => 'external_id',
      21 => 'original_source',
      22 => 'recurrence_total',
      23 => 'recurrence_count',
      24 => 'recurrence_date',
    ),
    'webhooks' => 
    array (
      'max_attempts' => 3,
    ),
    'can_have_virtual_amounts' => 
    array (
      0 => 'Asset account',
    ),
    'can_have_opening_balance' => 
    array (
      0 => 'Asset account',
      1 => 'Loan',
      2 => 'Debt',
      3 => 'Mortgage',
    ),
    'dynamic_creation_allowed' => 
    array (
      0 => 'Expense account',
      1 => 'Revenue account',
      2 => 'Initial balance account',
      3 => 'Reconciliation account',
      4 => 'Liability credit account',
    ),
    'valid_asset_fields' => 
    array (
      0 => 'account_role',
      1 => 'account_number',
      2 => 'currency_id',
      3 => 'BIC',
      4 => 'include_net_worth',
    ),
    'valid_cc_fields' => 
    array (
      0 => 'account_role',
      1 => 'cc_monthly_payment_date',
      2 => 'cc_type',
      3 => 'account_number',
      4 => 'currency_id',
      5 => 'BIC',
      6 => 'include_net_worth',
    ),
    'valid_account_fields' => 
    array (
      0 => 'account_number',
      1 => 'currency_id',
      2 => 'BIC',
      3 => 'interest',
      4 => 'interest_period',
      5 => 'include_net_worth',
      6 => 'liability_direction',
    ),
    'dynamic_date_ranges' => 
    array (
      0 => 'last7',
      1 => 'last30',
      2 => 'last90',
      3 => 'last365',
      4 => 'MTD',
      5 => 'QTD',
      6 => 'YTD',
    ),
    'allowed_sort_parameters' => 
    array (
      'Account' => 
      array (
        0 => 'id',
        1 => 'order',
        2 => 'name',
        3 => 'iban',
        4 => 'active',
        5 => 'account_type_id',
        6 => 'current_balance',
        7 => 'pc_current_balance',
        8 => 'opening_balance',
        9 => 'pc_opening_balance',
        10 => 'virtual_balance',
        11 => 'pc_virtual_balance',
        12 => 'debt_amount',
        13 => 'pc_debt_amount',
        14 => 'balance_difference',
        15 => 'pc_balance_difference',
      ),
    ),
    'allowed_db_sort_parameters' => 
    array (
      'Account' => 
      array (
        0 => 'id',
        1 => 'order',
        2 => 'name',
        3 => 'iban',
        4 => 'active',
        5 => 'account_type_id',
      ),
    ),
    'preselected_accounts' => 
    array (
      0 => 'all',
      1 => 'assets',
      2 => 'liabilities',
    ),
    'piggy_bank_account_types' => 
    array (
      0 => 'Asset account',
      1 => 'Loan',
      2 => 'Debt',
      3 => 'Mortgage',
    ),
  ),
  'google2fa' => 
  array (
    'enabled' => true,
    'lifetime' => 0,
    'keep_alive' => true,
    'store_in_cookie' => true,
    'cookie_lifetime' => 8035200,
    'guard' => '',
    'cookie_name' => 'firefly_iii_mfa_token',
    'auth' => 'auth',
    'session_var' => 'firefly_iii_mfa',
    'otp_input' => 'one_time_password',
    'window' => 1,
    'forbid_old_passwords' => false,
    'otp_secret_column' => 'mfa_secret',
    'view' => 'auth.mfa',
    'error_messages' => 
    array (
      'wrong_otp' => 'The \'One Time Password\' typed was wrong.',
    ),
    'throw_exceptions' => true,
    'qrcode_image_backend' => 'svg',
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 65536,
      'threads' => 1,
      'time' => 4,
    ),
    'rehash_on_login' => true,
  ),
  'ide-helper' => 
  array (
    'filename' => '_ide_helper',
    'models_filename' => '_ide_helper_models.php',
    'meta_filename' => '.phpstorm.meta.php',
    'include_fluent' => true,
    'write_query_methods' => true,
    'write_model_magic_where' => true,
    'write_model_external_builder_methods' => true,
    'write_model_relation_count_properties' => true,
    'write_model_relation_exists_properties' => false,
    'write_eloquent_model_mixins' => false,
    'include_helpers' => false,
    'helper_files' => 
    array (
      0 => '/var/www/html/vendor/laravel/framework/src/Illuminate/Support/helpers.php',
    ),
    'model_locations' => 
    array (
      0 => 'app',
    ),
    'ignored_models' => 
    array (
    ),
    'model_hooks' => 
    array (
    ),
    'extra' => 
    array (
      'Eloquent' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Builder',
        1 => 'Illuminate\\Database\\Query\\Builder',
      ),
      'Session' => 
      array (
        0 => 'Illuminate\\Session\\Store',
      ),
    ),
    'magic' => 
    array (
      'Log' => 
      array (
        'debug' => 'Monolog\\Logger::addDebug',
        'info' => 'Monolog\\Logger::addInfo',
        'notice' => 'Monolog\\Logger::addNotice',
        'warning' => 'Monolog\\Logger::addWarning',
        'error' => 'Monolog\\Logger::addError',
        'critical' => 'Monolog\\Logger::addCritical',
        'alert' => 'Monolog\\Logger::addAlert',
        'emergency' => 'Monolog\\Logger::addEmergency',
      ),
    ),
    'interfaces' => 
    array (
    ),
    'model_camel_case_properties' => false,
    'type_overrides' => 
    array (
      'integer' => 'int',
      'boolean' => 'bool',
    ),
    'include_class_docblocks' => false,
    'force_fqn' => false,
    'use_generics_annotations' => true,
    'macro_default_return_types' => 
    array (
      'Illuminate\\Http\\Client\\Factory' => 'Illuminate\\Http\\Client\\PendingRequest',
    ),
    'additional_relation_types' => 
    array (
    ),
    'additional_relation_return_types' => 
    array (
    ),
    'enforce_nullable_relationships' => true,
    'soft_deletes_force_nullable' => true,
    'post_migrate' => 
    array (
    ),
    'format' => 'php',
    'custom_db_types' => 
    array (
    ),
  ),
  'intro' => 
  array (
    'index' => 
    array (
      'intro' => 
      array (
      ),
      'accounts-chart' => 
      array (
        'element' => '#accounts-chart',
      ),
      'box_out_holder' => 
      array (
        'element' => '#box_out_holder',
      ),
      'help' => 
      array (
        'element' => '#help',
        'position' => 'bottom',
      ),
      'sidebar-toggle' => 
      array (
        'element' => '#create-menu',
        'position' => 'bottom',
      ),
      'cash_account' => 
      array (
        'element' => '#all_transactions',
        'position' => 'left',
      ),
      'outro' => 
      array (
      ),
    ),
    'accounts_create' => 
    array (
      'iban' => 
      array (
        'element' => '#ffInput_iban',
        'position' => 'bottom',
      ),
    ),
    'transactions_create' => 
    array (
      'basic_info' => 
      array (
        'element' => '.transaction-info',
        'position' => 'right',
      ),
      'amount_info' => 
      array (
        'element' => '.amount-info',
        'position' => 'bottom',
      ),
      'optional_info' => 
      array (
        'element' => '.optional-info',
        'position' => 'left',
      ),
      'split' => 
      array (
        'element' => '.split_add_btn',
        'position' => 'top',
      ),
    ),
    'transactions_create_withdrawal' => 
    array (
    ),
    'transactions_create_deposit' => 
    array (
    ),
    'transactions_create_transfer' => 
    array (
    ),
    'accounts_create_asset' => 
    array (
      'opening_balance' => 
      array (
        'element' => '#ffInput_opening_balance',
      ),
      'currency' => 
      array (
        'element' => '#ffInput_currency_id',
      ),
      'virtual' => 
      array (
        'element' => '#ffInput_virtual_balance',
      ),
    ),
    'budgets_index' => 
    array (
      'intro' => 
      array (
      ),
      'see_expenses_bar' => 
      array (
        'element' => '.spent_bar',
        'position' => 'bottom',
      ),
      'navigate_periods' => 
      array (
        'element' => '#periodNavigator',
        'position' => 'bottom',
      ),
      'list_of_budgets' => 
      array (
        'element' => '#budgetList',
        'position' => 'bottom',
      ),
      'outro' => 
      array (
      ),
    ),
    'reports_index' => 
    array (
      'intro' => 
      array (
      ),
      'inputReportType' => 
      array (
        'element' => '#inputReportType',
      ),
      'inputAccountsSelect' => 
      array (
        'element' => '#inputAccountsSelect',
      ),
      'inputDateRange' => 
      array (
        'element' => '#inputDateRange',
      ),
      'extra-options-box' => 
      array (
        'element' => '#extra-options-box',
        'position' => 'top',
      ),
    ),
    'reports_report_default' => 
    array (
      'intro' => 
      array (
      ),
    ),
    'reports_report_audit' => 
    array (
      'intro' => 
      array (
      ),
      'optionsBox' => 
      array (
        'element' => '#optionsBox',
      ),
    ),
    'reports_report_category' => 
    array (
      'intro' => 
      array (
      ),
      'pieCharts' => 
      array (
        'element' => '#pieCharts',
      ),
      'incomeAndExpensesChart' => 
      array (
        'element' => '#incomeAndExpensesChart',
        'position' => 'top',
      ),
    ),
    'reports_report_tag' => 
    array (
      'intro' => 
      array (
      ),
      'pieCharts' => 
      array (
        'element' => '#pieCharts',
      ),
      'incomeAndExpensesChart' => 
      array (
        'element' => '#incomeAndExpensesChart',
        'position' => 'top',
      ),
    ),
    'reports_report_budget' => 
    array (
      'intro' => 
      array (
      ),
      'pieCharts' => 
      array (
        'element' => '#pieCharts',
      ),
      'incomeAndExpensesChart' => 
      array (
        'element' => '#incomeAndExpensesChart',
        'position' => 'top',
      ),
    ),
    'piggy-banks_index' => 
    array (
      'saved' => 
      array (
        'element' => '.piggySaved',
      ),
      'button' => 
      array (
        'element' => '.piggyBar',
      ),
      'accountStatus' => 
      array (
        'element' => '#accountStatus',
        'position' => 'top',
      ),
    ),
    'piggy-banks_create' => 
    array (
      'name' => 
      array (
        'element' => '#ffInput_name',
      ),
      'date' => 
      array (
        'element' => '#ffInput_targetdate',
      ),
    ),
    'piggy-banks_show' => 
    array (
      'piggyChart' => 
      array (
        'element' => '#piggyChart',
      ),
      'piggyDetails' => 
      array (
        'element' => '#piggyDetails',
      ),
      'piggyEvents' => 
      array (
        'element' => '#piggyEvents',
      ),
    ),
    'bills_index' => 
    array (
      'rules' => 
      array (
        'element' => '.rules',
      ),
      'paid_in_period' => 
      array (
        'element' => '.paid_in_period',
      ),
      'expected_in_period' => 
      array (
        'element' => '.expected_in_period',
      ),
    ),
    'bills_create' => 
    array (
      'intro' => 
      array (
      ),
      'name' => 
      array (
        'element' => '#name_holder',
      ),
      'amount_min_holder' => 
      array (
        'element' => '#amount_min_holder',
      ),
      'repeat_freq_holder' => 
      array (
        'element' => '#repeat_freq_holder',
      ),
      'skip_holder' => 
      array (
        'element' => '#skip_holder',
      ),
    ),
    'bills_show' => 
    array (
      'billInfo' => 
      array (
        'element' => '#billInfo',
      ),
      'billButtons' => 
      array (
        'element' => '#billButtons',
      ),
      'billChart' => 
      array (
        'element' => '#billChart',
        'position' => 'top',
      ),
    ),
    'rules_index' => 
    array (
      'intro' => 
      array (
      ),
      'new_rule_group' => 
      array (
        'element' => '#new_rule_group',
      ),
      'new_rule' => 
      array (
        'element' => '.new_rule',
      ),
      'prio_buttons' => 
      array (
        'element' => '.prio_buttons',
      ),
      'test_buttons' => 
      array (
        'element' => '.test_buttons',
      ),
      'rule-triggers' => 
      array (
        'element' => '.rule-triggers',
      ),
      'outro' => 
      array (
      ),
    ),
    'rules_create' => 
    array (
      'mandatory' => 
      array (
        'element' => '#mandatory',
      ),
      'ruletriggerholder' => 
      array (
        'element' => '.rule-trigger-box',
      ),
      'test_rule_triggers' => 
      array (
        'element' => '.test_rule_triggers',
      ),
      'actions' => 
      array (
        'element' => '.rule-action-box',
        'position' => 'top',
      ),
    ),
    'preferences_index' => 
    array (
      'tabs' => 
      array (
        'element' => '.nav-tabs',
      ),
    ),
    'currencies_index' => 
    array (
      'intro' => 
      array (
      ),
      'default' => 
      array (
        'element' => '#default-currency',
      ),
      'buttons' => 
      array (
        'element' => '.buttons',
      ),
    ),
    'currencies_create' => 
    array (
      'code' => 
      array (
        'element' => '#ffInput_code',
      ),
    ),
  ),
  'laravel-model-caching' => 
  array (
    'cache-prefix' => '',
    'enabled' => false,
    'use-database-keying' => true,
    'store' => NULL,
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'deprecations' => 
    array (
      'channel' => 'null',
      'trace' => false,
    ),
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'daily',
          1 => 'stdout',
        ),
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/var/www/html/storage/logs/laravel.log',
        'level' => 'info',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/var/www/html/storage/logs/ff3-cli.log',
        'level' => 'info',
        'days' => 7,
      ),
      'monthly' => 
      array (
        'driver' => 'monthly',
        'path' => '/var/www/html/storage/logs/laravel.log',
        'level' => 'debug',
        'max_files' => 3,
        'replace_placeholders' => true,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
        'replace_placeholders' => true,
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'info',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'handler_with' => 
        array (
          'stream' => 'php://stderr',
        ),
        'formatter' => NULL,
        'processors' => 
        array (
          0 => 'Monolog\\Processor\\PsrLogMessageProcessor',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'info',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'info',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '/var/www/html/storage/logs/laravel.log',
      ),
      'audit' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'audit_daily',
          1 => 'audit_stdout',
        ),
      ),
      'stdout' => 
      array (
        'driver' => 'single',
        'path' => 'php://stdout',
        'level' => 'info',
      ),
      'audit_papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'info',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'tap' => 
        array (
          0 => 'FireflyIII\\Support\\Logging\\AuditLogger',
        ),
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'audit_stdout' => 
      array (
        'driver' => 'single',
        'path' => 'php://stdout',
        'tap' => 
        array (
          0 => 'FireflyIII\\Support\\Logging\\AuditLogger',
        ),
        'level' => 'info',
      ),
      'audit_daily' => 
      array (
        'driver' => 'daily',
        'path' => '/var/www/html/storage/logs/ff3-audit.log',
        'tap' => 
        array (
          0 => 'FireflyIII\\Support\\Logging\\AuditLogger',
        ),
        'level' => 'info',
        'days' => 90,
      ),
      'audit_syslog' => 
      array (
        'driver' => 'syslog',
        'tap' => 
        array (
          0 => 'FireflyIII\\Support\\Logging\\AuditLogger',
        ),
        'level' => 'info',
      ),
      'audit_errorlog' => 
      array (
        'driver' => 'errorlog',
        'tap' => 
        array (
          0 => 'FireflyIII\\Support\\Logging\\AuditLogger',
        ),
        'level' => 'info',
      ),
    ),
    'level' => 'info',
  ),
  'mail' => 
  array (
    'default' => 'log',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'smtp.mailtrap.io',
        'port' => 0,
        'encryption' => 'tls',
        'username' => 'user@example.com',
        'password' => 'password',
        'timeout' => NULL,
        'scheme' => NULL,
        'url' => NULL,
        'local_domain' => 'localhost',
        'verify_peer' => true,
        'allow_self_signed' => false,
        'verify_peer_name' => true,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'resend' => 
      array (
        'transport' => 'resend',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => 'stack',
        'level' => 'info',
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
        'retry_after' => 60,
      ),
      'roundrobin' => 
      array (
        'transport' => 'roundrobin',
        'mailers' => 
        array (
          0 => 'ses',
          1 => 'postmark',
        ),
        'retry_after' => 60,
      ),
      'mailersend' => 
      array (
        'transport' => 'mailersend',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'mandrill' => 
      array (
        'transport' => 'mandrill',
      ),
      'null' => 
      array (
        'transport' => 'log',
        'channel' => 'stack',
        'level' => 'notice',
      ),
    ),
    'from' => 
    array (
      'address' => 'changeme@example.com',
      'name' => 'Firefly III Mailer',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/var/www/html/resources/views/vendor/mail',
      ),
    ),
  ),
  'notifications' => 
  array (
    'channels' => 
    array (
      'email' => 
      array (
        'enabled' => true,
        'ui_configurable' => 0,
      ),
      'slack' => 
      array (
        'enabled' => true,
        'ui_configurable' => 1,
      ),
      'pushover' => 
      array (
        'enabled' => true,
        'ui_configurable' => 1,
      ),
    ),
    'notifications' => 
    array (
      'user' => 
      array (
        'bill_reminder' => 
        array (
          'enabled' => true,
          'configurable' => true,
        ),
        'transaction_creation' => 
        array (
          'enabled' => true,
          'configurable' => true,
        ),
        'rule_action_failures' => 
        array (
          'enabled' => true,
          'configurable' => true,
        ),
        'new_access_token' => 
        array (
          'enabled' => true,
          'configurable' => true,
        ),
        'user_login' => 
        array (
          'enabled' => true,
          'configurable' => true,
        ),
        'login_failure' => 
        array (
          'enabled' => true,
          'configurable' => true,
        ),
        'new_password' => 
        array (
          'enabled' => true,
          'configurable' => false,
        ),
        'enabled_mfa' => 
        array (
          'enabled' => true,
          'configurable' => false,
        ),
        'disabled_mfa' => 
        array (
          'enabled' => true,
          'configurable' => false,
        ),
        'few_left_mfa' => 
        array (
          'enabled' => true,
          'configurable' => false,
        ),
        'no_left_mfa' => 
        array (
          'enabled' => true,
          'configurable' => false,
        ),
        'many_failed_mfa' => 
        array (
          'enabled' => true,
          'configurable' => false,
        ),
        'new_backup_codes' => 
        array (
          'enabled' => true,
          'configurable' => false,
        ),
      ),
      'owner' => 
      array (
        'admin_new_reg' => 
        array (
          'enabled' => true,
        ),
        'user_new_reg' => 
        array (
          'enabled' => true,
        ),
        'new_version' => 
        array (
          'enabled' => true,
        ),
        'invite_created' => 
        array (
          'enabled' => true,
        ),
        'invite_redeemed' => 
        array (
          'enabled' => true,
        ),
        'unknown_user_attempt' => 
        array (
          'enabled' => true,
        ),
      ),
    ),
  ),
  'ntfy-notification-channel' => 
  array (
    'server' => 'https://ntfy.sh',
    'topic' => '',
    'authentication' => 
    array (
      'enabled' => false,
      'username' => '',
      'password' => '',
    ),
  ),
  'passport' => 
  array (
    'guard' => 'web',
    'middleware' => 
    array (
    ),
    'private_key' => '',
    'public_key' => '',
    'connection' => NULL,
    'personal_access_client' => 
    array (
      'id' => NULL,
      'secret' => NULL,
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => NULL,
        'secret' => NULL,
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'suffix' => NULL,
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
      'deferred' => 
      array (
        'driver' => 'deferred',
      ),
      'failover' => 
      array (
        'driver' => 'failover',
        'connections' => 
        array (
          0 => 'database',
          1 => 'deferred',
        ),
      ),
    ),
    'batching' => 
    array (
      'database' => 'mysql',
      'table' => 'job_batches',
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => '',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'middleware' => 
    array (
      'verify_csrf_token' => 'FireflyIII\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'FireflyIII\\Http\\Middleware\\EncryptCookies',
    ),
  ),
  'search' => 
  array (
    'operators' => 
    array (
      'user_action' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'account_id' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'reconciled' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'source_account_id' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'destination_account_id' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'transaction_type' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'type' => 
      array (
        'alias' => true,
        'alias_for' => 'transaction_type',
        'needs_context' => true,
      ),
      'tag_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'tag_is_not' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'tag' => 
      array (
        'alias' => true,
        'alias_for' => 'tag_is',
        'needs_context' => true,
      ),
      'tag_contains' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'tag_ends' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'tag_starts' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'description_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'description' => 
      array (
        'alias' => true,
        'alias_for' => 'description_is',
        'needs_context' => true,
      ),
      'description_contains' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'description_ends' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'description_starts' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'notes_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'notes_are' => 
      array (
        'alias' => true,
        'alias_for' => 'notes_is',
        'needs_context' => true,
      ),
      'notes_contains' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'notes_contain' => 
      array (
        'alias' => true,
        'alias_for' => 'notes_contains',
        'needs_context' => true,
      ),
      'notes' => 
      array (
        'alias' => true,
        'alias_for' => 'notes_contains',
        'needs_context' => true,
      ),
      'notes_ends' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'notes_end' => 
      array (
        'alias' => true,
        'alias_for' => 'notes_ends',
        'needs_context' => true,
      ),
      'notes_starts' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'notes_start' => 
      array (
        'alias' => true,
        'alias_for' => 'notes_starts',
        'needs_context' => true,
      ),
      'source_account_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'from_account_is' => 
      array (
        'alias' => true,
        'alias_for' => 'source_account_is',
        'needs_context' => true,
      ),
      'source_account_contains' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'source' => 
      array (
        'alias' => true,
        'alias_for' => 'source_account_contains',
        'needs_context' => true,
      ),
      'from' => 
      array (
        'alias' => true,
        'alias_for' => 'source_account_contains',
        'needs_context' => true,
      ),
      'from_account_contains' => 
      array (
        'alias' => true,
        'alias_for' => 'source_account_contains',
        'needs_context' => true,
      ),
      'source_account_ends' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'from_account_ends' => 
      array (
        'alias' => true,
        'alias_for' => 'source_account_ends',
        'needs_context' => true,
      ),
      'source_account_starts' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'from_account_starts' => 
      array (
        'alias' => true,
        'alias_for' => 'source_account_starts',
        'needs_context' => true,
      ),
      'source_account_nr_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'from_account_nr_is' => 
      array (
        'alias' => true,
        'alias_for' => 'source_account_nr_is',
        'needs_context' => true,
      ),
      'source_account_nr_contains' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'from_account_nr_contains' => 
      array (
        'alias' => true,
        'alias_for' => 'source_account_nr_contains',
        'needs_context' => true,
      ),
      'source_account_nr_ends' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'from_account_nr_ends' => 
      array (
        'alias' => true,
        'alias_for' => 'source_account_nr_ends',
        'needs_context' => true,
      ),
      'source_account_nr_starts' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'from_account_nr_starts' => 
      array (
        'alias' => true,
        'alias_for' => 'source_account_nr_starts',
        'needs_context' => true,
      ),
      'destination_account_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'to_account_is' => 
      array (
        'alias' => true,
        'alias_for' => 'destination_account_is',
        'needs_context' => true,
      ),
      'destination_account_contains' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'destination' => 
      array (
        'alias' => true,
        'alias_for' => 'destination_account_contains',
        'needs_context' => true,
      ),
      'to' => 
      array (
        'alias' => true,
        'alias_for' => 'destination_account_contains',
        'needs_context' => true,
      ),
      'to_account_contains' => 
      array (
        'alias' => true,
        'alias_for' => 'destination_account_contains',
        'needs_context' => true,
      ),
      'destination_account_ends' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'to_account_ends' => 
      array (
        'alias' => true,
        'alias_for' => 'destination_account_ends',
        'needs_context' => true,
      ),
      'destination_account_starts' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'to_account_starts' => 
      array (
        'alias' => true,
        'alias_for' => 'destination_account_starts',
        'needs_context' => true,
      ),
      'destination_account_nr_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'to_account_nr_is' => 
      array (
        'alias' => true,
        'alias_for' => 'destination_account_nr_is',
        'needs_context' => true,
      ),
      'destination_account_nr_contains' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'to_account_nr_contains' => 
      array (
        'alias' => true,
        'alias_for' => 'destination_account_nr_contains',
        'needs_context' => true,
      ),
      'destination_account_nr_ends' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'to_account_nr_ends' => 
      array (
        'alias' => true,
        'alias_for' => 'destination_account_nr_ends',
        'needs_context' => true,
      ),
      'destination_account_nr_starts' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'to_account_nr_starts' => 
      array (
        'alias' => true,
        'alias_for' => 'destination_account_nr_starts',
        'needs_context' => true,
      ),
      'account_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'account_contains' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'account_ends' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'account_starts' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'account_nr_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'account_nr_contains' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'account_nr_ends' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'account_nr_starts' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'category_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'category_contains' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'category' => 
      array (
        'alias' => true,
        'alias_for' => 'category_contains',
        'needs_context' => true,
      ),
      'category_ends' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'category_starts' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'budget_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'budget_contains' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'budget' => 
      array (
        'alias' => true,
        'alias_for' => 'budget_contains',
        'needs_context' => true,
      ),
      'budget_ends' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'budget_starts' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'bill_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'bill_contains' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'bill' => 
      array (
        'alias' => true,
        'alias_for' => 'bill_contains',
        'needs_context' => true,
      ),
      'bill_ends' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'bill_starts' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'subscription_is' => 
      array (
        'alias' => true,
        'alias_for' => 'bill_is',
        'needs_context' => true,
      ),
      'subscription_contains' => 
      array (
        'alias' => true,
        'alias_for' => 'bill_contains',
        'needs_context' => true,
      ),
      'subscription' => 
      array (
        'alias' => true,
        'alias_for' => 'bill_contains',
        'needs_context' => true,
      ),
      'subscription_ends' => 
      array (
        'alias' => true,
        'alias_for' => 'bill_ends',
        'needs_context' => true,
      ),
      'subscription_starts' => 
      array (
        'alias' => true,
        'alias_for' => 'bill_starts',
        'needs_context' => true,
      ),
      'external_id_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'external_id_contains' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'external_id' => 
      array (
        'alias' => true,
        'alias_for' => 'external_id_contains',
        'needs_context' => true,
      ),
      'external_id_ends' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'external_id_starts' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'internal_reference_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'internal_reference_contains' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'internal_reference' => 
      array (
        'alias' => true,
        'alias_for' => 'internal_reference_contains',
        'needs_context' => true,
      ),
      'internal_reference_ends' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'internal_reference_starts' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'external_url_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'external_url_contains' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'external_url' => 
      array (
        'alias' => true,
        'alias_for' => 'external_url_contains',
        'needs_context' => true,
      ),
      'external_url_ends' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'external_url_starts' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'has_attachments' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'has_any_category' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'has_any_budget' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'has_any_bill' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'has_any_subscription' => 
      array (
        'alias' => true,
        'needs_context' => false,
        'alias_for' => 'has_any_bill',
      ),
      'has_any_tag' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'any_notes' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'has_any_notes' => 
      array (
        'alias' => true,
        'alias_for' => 'any_notes',
        'needs_context' => false,
      ),
      'has_notes' => 
      array (
        'alias' => true,
        'alias_for' => 'any_notes',
        'needs_context' => false,
      ),
      'any_external_url' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'has_any_external_url' => 
      array (
        'alias' => true,
        'alias_for' => 'any_external_url',
        'needs_context' => false,
      ),
      'has_no_attachments' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'has_no_category' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'has_no_budget' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'has_no_bill' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'has_no_subscription' => 
      array (
        'alias' => true,
        'needs_context' => false,
        'alias_for' => 'has_no_bill',
      ),
      'has_no_tag' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'no_notes' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'no_external_url' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'source_is_cash' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'destination_is_cash' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'account_is_cash' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'currency_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'foreign_currency_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'has_foreign_amount' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'id' => 
      array (
        'alias' => false,
        'trigger_class' => '',
        'needs_context' => true,
      ),
      'journal_id' => 
      array (
        'alias' => false,
        'trigger_class' => '',
        'needs_context' => true,
      ),
      'recurrence_id' => 
      array (
        'alias' => false,
        'trigger_class' => '',
        'needs_context' => true,
      ),
      'date_on' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'date' => 
      array (
        'alias' => true,
        'alias_for' => 'date_on',
        'needs_context' => true,
      ),
      'date_is' => 
      array (
        'alias' => true,
        'alias_for' => 'date_on',
        'needs_context' => true,
      ),
      'on' => 
      array (
        'alias' => true,
        'alias_for' => 'date_on',
        'needs_context' => true,
      ),
      'date_before' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'before' => 
      array (
        'alias' => true,
        'alias_for' => 'date_before',
        'needs_context' => true,
      ),
      'date_after' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'after' => 
      array (
        'alias' => true,
        'alias_for' => 'date_after',
        'needs_context' => true,
      ),
      'interest_date_on' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'interest_date' => 
      array (
        'alias' => true,
        'alias_for' => 'interest_date_on',
        'needs_context' => true,
      ),
      'interest_date_is' => 
      array (
        'alias' => true,
        'alias_for' => 'interest_date_on',
        'needs_context' => true,
      ),
      'interest_date_before' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'interest_date_after' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'book_date_on' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'book_date' => 
      array (
        'alias' => true,
        'alias_for' => 'book_date_on',
        'needs_context' => true,
      ),
      'book_date_is' => 
      array (
        'alias' => true,
        'alias_for' => 'book_date_on',
        'needs_context' => true,
      ),
      'book_date_before' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'book_date_after' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'process_date_on' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'process_date' => 
      array (
        'alias' => true,
        'alias_for' => 'process_date_on',
        'needs_context' => true,
      ),
      'process_date_is' => 
      array (
        'alias' => true,
        'alias_for' => 'process_date_on',
        'needs_context' => true,
      ),
      'process_date_before' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'process_date_after' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'due_date_on' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'due_date' => 
      array (
        'alias' => true,
        'alias_for' => 'due_date_on',
        'needs_context' => true,
      ),
      'due_date_is' => 
      array (
        'alias' => true,
        'alias_for' => 'due_date_on',
        'needs_context' => true,
      ),
      'due_date_before' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'due_date_after' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'payment_date_on' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'payment_date' => 
      array (
        'alias' => true,
        'alias_for' => 'payment_date_on',
        'needs_context' => true,
      ),
      'payment_date_is' => 
      array (
        'alias' => true,
        'alias_for' => 'payment_date_on',
        'needs_context' => true,
      ),
      'payment_date_before' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'payment_date_after' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'invoice_date_on' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'invoice_date' => 
      array (
        'alias' => true,
        'alias_for' => 'invoice_date_on',
        'needs_context' => true,
      ),
      'invoice_date_is' => 
      array (
        'alias' => true,
        'alias_for' => 'invoice_date_on',
        'needs_context' => true,
      ),
      'invoice_date_before' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'invoice_date_after' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'created_at_on' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'created_at' => 
      array (
        'alias' => true,
        'alias_for' => 'created_at_on',
        'needs_context' => true,
      ),
      'created_at_is' => 
      array (
        'alias' => true,
        'alias_for' => 'created_at_on',
        'needs_context' => true,
      ),
      'created_at_before' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'created_at_after' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'updated_at_on' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'updated_at' => 
      array (
        'alias' => true,
        'alias_for' => 'updated_at_on',
        'needs_context' => true,
      ),
      'updated_at_is' => 
      array (
        'alias' => true,
        'alias_for' => 'updated_at_on',
        'needs_context' => true,
      ),
      'updated_at_before' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'updated_at_after' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'created_on_on' => 
      array (
        'alias' => true,
        'alias_for' => 'created_at_on',
        'needs_context' => true,
      ),
      'created_on' => 
      array (
        'alias' => true,
        'alias_for' => 'created_at',
        'needs_context' => true,
      ),
      'created_on_before' => 
      array (
        'alias' => true,
        'alias_for' => 'created_at_before',
        'needs_context' => true,
      ),
      'created_on_after' => 
      array (
        'alias' => true,
        'alias_for' => 'created_at_after',
        'needs_context' => true,
      ),
      'updated_on_on' => 
      array (
        'alias' => true,
        'alias_for' => 'updated_at_on',
        'needs_context' => true,
      ),
      'updated_on' => 
      array (
        'alias' => true,
        'alias_for' => 'updated_at',
        'needs_context' => true,
      ),
      'updated_on_before' => 
      array (
        'alias' => true,
        'alias_for' => 'updated_at_before',
        'needs_context' => true,
      ),
      'updated_on_after' => 
      array (
        'alias' => true,
        'alias_for' => 'updated_at_after',
        'needs_context' => true,
      ),
      'amount_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'amount' => 
      array (
        'alias' => true,
        'alias_for' => 'amount_is',
        'needs_context' => true,
      ),
      'amount_exactly' => 
      array (
        'alias' => true,
        'alias_for' => 'amount_is',
        'needs_context' => true,
      ),
      'amount_less' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'amount_max' => 
      array (
        'alias' => true,
        'alias_for' => 'amount_less',
        'needs_context' => true,
      ),
      'less' => 
      array (
        'alias' => true,
        'alias_for' => 'amount_less',
        'needs_context' => true,
      ),
      'amount_more' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'amount_min' => 
      array (
        'alias' => true,
        'alias_for' => 'amount_more',
        'needs_context' => true,
      ),
      'more' => 
      array (
        'alias' => true,
        'alias_for' => 'amount_more',
        'needs_context' => true,
      ),
      'foreign_amount_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'foreign_amount' => 
      array (
        'alias' => true,
        'alias_for' => 'foreign_amount_is',
        'needs_context' => true,
      ),
      'foreign_amount_less' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'foreign_amount_max' => 
      array (
        'alias' => true,
        'alias_for' => 'foreign_amount_less',
        'needs_context' => true,
      ),
      'foreign_amount_more' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'foreign_amount_min' => 
      array (
        'alias' => true,
        'alias_for' => 'foreign_amount_more',
        'needs_context' => true,
      ),
      'attachment_name_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'attachment' => 
      array (
        'alias' => true,
        'alias_for' => 'attachment_name_is',
        'needs_context' => true,
      ),
      'attachment_is' => 
      array (
        'alias' => true,
        'alias_for' => 'attachment_name_is',
        'needs_context' => true,
      ),
      'attachment_name' => 
      array (
        'alias' => true,
        'alias_for' => 'attachment_name_is',
        'needs_context' => true,
      ),
      'attachment_name_contains' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'attachment_name_starts' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'attachment_name_ends' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'attachment_notes' => 
      array (
        'alias' => true,
        'alias_for' => 'attachment_notes_are',
        'needs_context' => true,
      ),
      'attachment_notes_are' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'attachment_notes_contains' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'attachment_notes_contain' => 
      array (
        'alias' => true,
        'alias_for' => 'attachment_notes_contains',
        'needs_context' => true,
      ),
      'attachment_notes_starts' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'attachment_notes_start' => 
      array (
        'alias' => true,
        'alias_for' => 'attachment_notes_starts',
        'needs_context' => true,
      ),
      'attachment_notes_ends' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'attachment_notes_end' => 
      array (
        'alias' => true,
        'alias_for' => 'attachment_notes_ends',
        'needs_context' => true,
      ),
      'exists' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'sepa_ct_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'no_external_id' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'any_external_id' => 
      array (
        'alias' => false,
        'needs_context' => false,
      ),
      'has_any_external_id' => 
      array (
        'alias' => true,
        'alias_for' => 'any_external_id',
        'needs_context' => false,
      ),
      'source_balance_gte' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'source_balance_gt' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'source_balance_lte' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'source_balance_lt' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'source_balance_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'destination_balance_gte' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'destination_balance_gt' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'destination_balance_lte' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'destination_balance_lt' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
      'destination_balance_is' => 
      array (
        'alias' => false,
        'needs_context' => true,
      ),
    ),
  ),
  'sentry' => 
  array (
    'dsn' => 'https://cf9d7aea92537db1e97e3e758b88b0a3@o4510302583848960.ingest.de.sentry.io/4510302585290832',
    'release' => NULL,
    'environment' => NULL,
    'sample_rate' => 1.0,
    'traces_sample_rate' => NULL,
    'profiles_sample_rate' => NULL,
    'enable_logs' => false,
    'logs_channel_level' => 'debug',
    'send_default_pii' => false,
    'ignore_exceptions' => 
    array (
      0 => 'Illuminate\\Auth\\AuthenticationException',
    ),
    'ignore_transactions' => 
    array (
      0 => '/up',
    ),
    'breadcrumbs' => 
    array (
      'logs' => true,
      'cache' => true,
      'livewire' => true,
      'sql_queries' => true,
      'sql_bindings' => false,
      'queue_info' => true,
      'command_info' => true,
      'http_client_requests' => true,
      'notifications' => true,
    ),
    'tracing' => 
    array (
      'queue_job_transactions' => true,
      'queue_jobs' => true,
      'sql_queries' => true,
      'sql_bindings' => false,
      'sql_origin' => true,
      'sql_origin_threshold_ms' => 100,
      'views' => true,
      'livewire' => true,
      'http_client_requests' => true,
      'cache' => true,
      'redis_commands' => false,
      'redis_origin' => true,
      'notifications' => true,
      'missing_routes' => false,
      'continue_after_response' => true,
      'default_integrations' => true,
    ),
  ),
  'services' => 
  array (
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'resend' => 
    array (
      'key' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'slack' => 
    array (
      'notifications' => 
      array (
        'bot_user_oauth_token' => NULL,
        'channel' => NULL,
      ),
    ),
    'mailgun' => 
    array (
      'domain' => '',
      'endpoint' => '',
      'secret' => '',
    ),
    'sparkpost' => 
    array (
      'secret' => '',
    ),
    'stripe' => 
    array (
      'model' => 'FireflyIII\\User',
      'key' => NULL,
      'secret' => NULL,
    ),
    'mandrill' => 
    array (
      'secret' => '',
    ),
    'pushover' => 
    array (
      'token' => 'fake_token',
      'user_token' => 'fake_token',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => 120,
    'expire_on_close' => true,
    'encrypt' => true,
    'files' => '/var/www/html/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'firefly_iii_session',
    'path' => '/',
    'domain' => '',
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
    'partitioned' => false,
  ),
  'translations' => 
  array (
    'json' => 
    array (
      'v3' => 
      array (
        'config' => 
        array (
          0 => 'html_language',
          1 => 'date_time_fns',
          2 => 'month_and_day_fns',
          3 => 'does_not_exist',
          4 => 'date_time_fns_short',
        ),
        'form' => 
        array (
          0 => 'title',
          1 => 'from_currency_to_currency',
          2 => 'to_currency_from_currency',
          3 => 'date',
          4 => 'rate',
          5 => 'triggers',
          6 => 'help_rate_form',
        ),
        'list' => 
        array (
          0 => 'drag_and_drop',
          1 => 'active',
          2 => 'name',
          3 => 'responds_when',
          4 => 'responds_with',
          5 => 'type',
          6 => 'number',
          7 => 'liability_type',
          8 => 'current_balance',
          9 => 'last_activity',
          10 => 'amount_due',
          11 => 'balance_difference',
          12 => 'menu',
        ),
        'validation' => 
        array (
          0 => 'bad_type_source',
          1 => 'bad_type_destination',
        ),
        'firefly' => 
        array (
          0 => 'you_create_transfer',
          1 => 'you_create_withdrawal',
          2 => 'you_create_deposit',
          3 => 'wait_loading_page',
          4 => 'save_transaction_working',
          5 => 'save_links_working',
          6 => 'never',
          7 => 'account_type_loan',
          8 => 'account_type_mortgage',
          9 => 'account_type_debt',
          10 => 'withdrawal',
          11 => 'i_owe_amount',
          12 => 'intro_next_label',
          13 => 'today',
          14 => 'intro_prev_label',
          15 => 'intro_done_label',
          16 => 'i_am_owed_amount',
          17 => 'no_data_for_chart',
          18 => 'deposit',
          19 => 'transfer',
          20 => 'could_not_load_chart',
          21 => 'inactive_account_link_js',
          22 => 'inactive',
          23 => 'liability_direction_debit_short',
          24 => 'liability_direction_credit_short',
          25 => 'liability_direction_null_short',
          26 => 'help_rate_form',
          27 => 'pref_optional_tj_interest_date',
          28 => 'pref_optional_tj_book_date',
          29 => 'pref_optional_tj_process_date',
          30 => 'pref_optional_tj_due_date',
          31 => 'pref_optional_tj_payment_date',
          32 => 'pref_optional_tj_invoice_date',
          33 => 'save_new_rate',
          34 => 'interest_calc_yearly',
          35 => 'loading',
          36 => 'exchange_rates_from_to',
          37 => 'administrations_page_edit_sub_title_js',
          38 => 'errors_upload',
          39 => 'updated_journal_js',
          40 => 'upload_too_large',
          41 => 'interest_calc_',
          42 => 'wait_attachments',
          43 => 'interest_calc_null',
          44 => 'interest_calc_daily',
          45 => 'interest_calc_monthly',
          46 => 'interest_calc_weekly',
          47 => 'interest_calc_half-year',
          48 => 'interest_calc_quarterly',
          49 => 'spent',
          50 => 'budgeted',
          51 => 'administration_owner',
          52 => 'administration_you',
          53 => 'administration_role_owner',
          54 => 'administration_role_ro',
          55 => 'administration_role_mng_trx',
          56 => 'administration_role_mng_meta',
          57 => 'administration_role_mng_budgets',
          58 => 'administration_role_mng_piggies',
          59 => 'administration_role_mng_subscriptions',
          60 => 'administration_role_mng_rules',
          61 => 'administration_role_mng_recurring',
          62 => 'administration_role_mng_webhooks',
          63 => 'may_inactive_accounts_link',
          64 => 'no_inactive_accounts',
          65 => 'administration_role_mng_currencies',
          66 => 'administration_role_view_reports',
          67 => 'administration_role_full',
          68 => 'new_administration_created',
          69 => 'left',
          70 => 'paid',
          71 => 'errors_submission_v2',
          72 => 'unpaid',
          73 => 'default_group_title_name_plain',
          74 => 'subscriptions_in_group',
          75 => 'subscr_expected_x_times',
          76 => 'overspent',
          77 => 'money_flowing_in',
          78 => 'money_flowing_out',
          79 => 'category',
          80 => 'unknown_category_plain',
          81 => 'all_money',
          82 => 'unknown_source_plain',
          83 => 'unknown_dest_plain',
          84 => 'unknown_any_plain',
          85 => 'unknown_budget_plain',
          86 => 'stored_journal_js',
          87 => 'wait_loading_transaction',
          88 => 'nothing_found',
          89 => 'wait_loading_data',
          90 => 'Transfer',
          91 => 'Withdrawal',
          92 => 'Deposit',
          93 => 'expense_account',
          94 => 'revenue_account',
          95 => 'budget',
          96 => 'hide',
          97 => 'account_type_undefined',
          98 => 'account_type_Asset account',
          99 => 'account_type_Expense account',
          100 => 'account_type_Revenue account',
          101 => 'account_type_Debt',
          102 => 'account_type_Loan',
          103 => 'account_type_Mortgage',
          104 => 'account_role_defaultAsset',
          105 => 'account_role_sharedAsset',
          106 => 'account_role_savingAsset',
          107 => 'account_role_ccAsset',
          108 => 'account_role_cashWalletAsset',
          109 => 'webhook_trigger_ANY',
          110 => 'webhook_trigger_STORE_TRANSACTION',
          111 => 'webhook_trigger_UPDATE_TRANSACTION',
          112 => 'webhook_response_RELEVANT',
          113 => 'webhook_delivery_JSON',
        ),
      ),
      'v1' => 
      array (
        'firefly' => 
        array (
          0 => 'explain_pats',
          1 => 'profile_oauth_clients_explain',
          2 => 'regenerate_secret',
          3 => 'administrations_page_title',
          4 => 'administrations_index_menu',
          5 => 'expires_at',
          6 => 'temp_administrations_introduction',
          7 => 'administration_currency_form_help',
          8 => 'administrations_page_edit_sub_title_js',
          9 => 'table',
          10 => 'hide',
          11 => 'welcome_back',
          12 => 'flash_error',
          13 => 'flash_warning',
          14 => 'flash_success',
          15 => 'close',
          16 => 'select_dest_account',
          17 => 'select_source_account',
          18 => 'split_transaction_title',
          19 => 'errors_submission',
          20 => 'is_reconciled',
          21 => 'split',
          22 => 'single_split',
          23 => 'not_enough_currencies',
          24 => 'not_enough_currencies_enabled',
          25 => 'transaction_stored_link',
          26 => 'webhook_stored_link',
          27 => 'webhook_updated_link',
          28 => 'transaction_updated_link',
          29 => 'transaction_new_stored_link',
          30 => 'transaction_journal_information',
          31 => 'submission_options',
          32 => 'apply_rules_checkbox',
          33 => 'fire_webhooks_checkbox',
          34 => 'no_budget_pointer',
          35 => 'no_bill_pointer',
          36 => 'source_account',
          37 => 'hidden_fields_preferences',
          38 => 'destination_account',
          39 => 'add_another_split',
          40 => 'submission',
          41 => 'stored_journal',
          42 => 'create_another',
          43 => 'reset_after',
          44 => 'submit',
          45 => 'amount',
          46 => 'date',
          47 => 'is_reconciled_fields_dropped',
          48 => 'tags',
          49 => 'no_budget',
          50 => 'no_bill',
          51 => 'category',
          52 => 'attachments',
          53 => 'notes',
          54 => 'external_url',
          55 => 'update_transaction',
          56 => 'after_update_create_another',
          57 => 'store_as_new',
          58 => 'reset_after',
          59 => 'split_title_help',
          60 => 'none_in_select_list',
          61 => 'no_piggy_bank',
          62 => 'description',
          63 => 'split_transaction_title_help',
          64 => 'destination_account_reconciliation',
          65 => 'source_account_reconciliation',
          66 => 'budget',
          67 => 'bill',
          68 => 'you_create_withdrawal',
          69 => 'you_create_transfer',
          70 => 'you_create_deposit',
          71 => 'edit',
          72 => 'delete',
          73 => 'name',
          74 => 'profile_whoops',
          75 => 'profile_something_wrong',
          76 => 'profile_try_again',
          77 => 'profile_oauth_clients',
          78 => 'profile_oauth_no_clients',
          79 => 'profile_oauth_clients_header',
          80 => 'profile_oauth_client_id',
          81 => 'profile_oauth_client_name',
          82 => 'profile_oauth_client_secret',
          83 => 'profile_oauth_create_new_client',
          84 => 'profile_oauth_create_client',
          85 => 'profile_oauth_edit_client',
          86 => 'profile_oauth_name_help',
          87 => 'profile_oauth_redirect_url',
          88 => 'profile_oauth_clients_external_auth',
          89 => 'profile_oauth_redirect_url_help',
          90 => 'profile_authorized_apps',
          91 => 'profile_authorized_clients',
          92 => 'profile_scopes',
          93 => 'profile_revoke',
          94 => 'profile_personal_access_tokens',
          95 => 'profile_personal_access_token',
          96 => 'profile_personal_access_token_explanation',
          97 => 'profile_no_personal_access_token',
          98 => 'profile_create_new_token',
          99 => 'profile_create_token',
          100 => 'profile_create',
          101 => 'profile_save_changes',
          102 => 'default_group_title_name',
          103 => 'piggy_bank',
          104 => 'profile_oauth_client_secret_title',
          105 => 'profile_oauth_client_secret_expl',
          106 => 'profile_oauth_confidential',
          107 => 'profile_oauth_confidential_help',
          108 => 'multi_account_warning_unknown',
          109 => 'multi_account_warning_withdrawal',
          110 => 'multi_account_warning_deposit',
          111 => 'multi_account_warning_transfer',
          112 => 'webhook_trigger_ANY',
          113 => 'webhook_trigger_STORE_TRANSACTION',
          114 => 'webhook_trigger_UPDATE_TRANSACTION',
          115 => 'webhook_trigger_DESTROY_TRANSACTION',
          116 => 'webhook_trigger_STORE_BUDGET',
          117 => 'webhook_trigger_UPDATE_BUDGET',
          118 => 'webhook_trigger_DESTROY_BUDGET',
          119 => 'webhook_trigger_STORE_UPDATE_BUDGET_LIMIT',
          120 => 'webhook_response_TRANSACTIONS',
          121 => 'webhook_response_RELEVANT',
          122 => 'webhook_response_ACCOUNTS',
          123 => 'webhook_response_NONE',
          124 => 'webhook_delivery_JSON',
          125 => 'actions',
          126 => 'meta_data',
          127 => 'webhook_messages',
          128 => 'inactive',
          129 => 'no_webhook_messages',
          130 => 'inspect',
          131 => 'edit',
          132 => 'delete',
          133 => 'create_new_webhook',
          134 => 'webhooks',
          135 => 'webhook_trigger_form_help',
          136 => 'webhook_response_form_help',
          137 => 'webhook_delivery_form_help',
          138 => 'webhook_active_form_help',
          139 => 'edit_webhook_js',
          140 => 'webhook_was_triggered',
          141 => 'view_message',
          142 => 'view_attempts',
          143 => 'message_content_title',
          144 => 'message_content_help',
          145 => 'attempt_content_title',
          146 => 'attempt_content_help',
          147 => 'no_attempts',
          148 => 'webhook_attempt_at',
          149 => 'logs',
          150 => 'response',
          151 => 'visit_webhook_url',
          152 => 'reset_webhook_secret',
          153 => 'header_exchange_rates',
          154 => 'exchange_rates_intro',
          155 => 'exchange_rates_from_to',
          156 => 'exchange_rates_intro_rates',
          157 => 'header_exchange_rates_rates',
          158 => 'header_exchange_rates_table',
          159 => 'help_rate_form',
          160 => 'add_new_rate',
          161 => 'save_new_rate',
        ),
        'form' => 
        array (
          0 => 'url',
          1 => 'active',
          2 => 'interest_date',
          3 => 'administration_currency',
          4 => 'title',
          5 => 'date',
          6 => 'book_date',
          7 => 'process_date',
          8 => 'due_date',
          9 => 'foreign_amount',
          10 => 'payment_date',
          11 => 'invoice_date',
          12 => 'internal_reference',
          13 => 'webhook_response',
          14 => 'webhook_trigger',
          15 => 'webhook_delivery',
          16 => 'from_currency_to_currency',
          17 => 'to_currency_from_currency',
          18 => 'rate',
        ),
        'list' => 
        array (
          0 => 'title',
          1 => 'active',
          2 => 'primary_currency',
          3 => 'trigger',
          4 => 'response',
          5 => 'delivery',
          6 => 'url',
          7 => 'secret',
        ),
        'config' => 
        array (
          0 => 'html_language',
          1 => 'date_time_fns',
        ),
      ),
    ),
    'languages' => 
    array (
      0 => 'af_ZA',
      1 => 'ar_SA',
      2 => 'bg_BG',
      3 => 'cs_CZ',
      4 => 'da_DK',
      5 => 'de_DE',
      6 => 'el_GR',
      7 => 'en_GB',
      8 => 'en_US',
      9 => 'es_ES',
      10 => 'ca_ES',
      11 => 'fa_IR',
      12 => 'fi_FI',
      13 => 'fr_FR',
      14 => 'hu_HU',
      15 => 'id_ID',
      16 => 'it_IT',
      17 => 'ja_JP',
      18 => 'ko_KR',
      19 => 'nb_NO',
      20 => 'nn_NO',
      21 => 'nl_NL',
      22 => 'pl_PL',
      23 => 'pt_BR',
      24 => 'pt_PT',
      25 => 'ro_RO',
      26 => 'ru_RU',
      27 => 'sk_SK',
      28 => 'sl_SI',
      29 => 'sv_SE',
      30 => 'tr_TR',
      31 => 'uk_UA',
      32 => 'vi_VN',
      33 => 'zh_TW',
      34 => 'zh_CN',
    ),
  ),
  'trustedproxy' => 
  array (
    'proxies' => '',
  ),
  'upgrade' => 
  array (
    'text' => 
    array (
      'upgrade' => 
      array (
        '4.3' => 'Make sure you run the migrations and clear your cache. If you need more help, please check Github or the Firefly III website.',
        '4.6.3' => 'This will be the last version to require PHP7.0. Future versions will require PHP7.1 minimum.',
        '4.6.4' => 'This version of Firefly III requires PHP7.1.',
        '4.7.3' => 'This version of Firefly III handles bills differently. See http://bit.ly/FF3-new-bills for more information.',
        '4.7.4' => 'This version of Firefly III has a new import routine. See http://bit.ly/FF3-new-import for more information.',
        '4.7.6' => 'This will be the last version to require PHP7.1. Future versions will require PHP7.2 minimum.',
        '4.7.7' => 'This version of Firefly III requires PHP7.2.',
        '4.7.10' => 'Firefly III no longer encrypts database values. To protect your data, make sure you use TDE or FDE. Read more: https://bit.ly/FF3-encryption',
        '4.8.0' => 'This is a huge upgrade for Firefly III. Please expect bugs and errors, and bear with me as I fix them. I tested a lot of things but pretty sure I missed some. Thanks for understanding.',
        '4.8.1' => 'This version of Firefly III requires PHP7.3.',
        '5.3.0' => 'This version of Firefly III requires PHP7.4.',
        '6.1' => 'This version of Firefly III requires PHP8.3.',
      ),
      'install' => 
      array (
        '4.3' => 'Welcome to Firefly! Make sure you follow the installation guide. If you need more help, please check Github or the Firefly III website. The installation guide has a FAQ which you should check out as well.',
        '4.6.3' => 'This will be the last version to require PHP7.0. Future versions will require PHP7.1 minimum.',
        '4.6.4' => 'This version of Firefly III requires PHP7.1.',
        '4.7.3' => 'This version of Firefly III handles bills differently. See http://bit.ly/FF3-new-bills for more information.',
        '4.7.4' => 'This version of Firefly III has a new import routine. See http://bit.ly/FF3-new-import for more information.',
        '4.7.6' => 'This will be the last version to require PHP7.1. Future versions will require PHP7.2 minimum.',
        '4.7.7' => 'This version of Firefly III requires PHP7.2.',
        '4.7.10' => 'Firefly III no longer encrypts database values. To protect your data, make sure you use TDE or FDE. Read more: https://bit.ly/FF3-encryption',
        '4.8.0' => 'This is a huge upgrade for Firefly III. Please expect bugs and errors, and bear with me as I fix them. I tested a lot of things but pretty sure I missed some. Thanks for understanding.',
        '4.8.1' => 'This version of Firefly III requires PHP7.3.',
        '5.3.0' => 'This version of Firefly III requires PHP7.4.',
        '6.1' => 'This version of Firefly III requires PHP8.3.',
      ),
    ),
  ),
  'user_roles' => 
  array (
    'ro' => 
    array (
    ),
    'mng_trx' => 
    array (
    ),
    'mng_meta' => 
    array (
    ),
    'read_budgets' => 
    array (
    ),
    'read_piggies' => 
    array (
    ),
    'read_subscriptions' => 
    array (
    ),
    'read_rules' => 
    array (
    ),
    'read_recurring' => 
    array (
    ),
    'read_webhooks' => 
    array (
    ),
    'read_currencies' => 
    array (
    ),
    'mng_budgets' => 
    array (
    ),
    'mng_piggies' => 
    array (
    ),
    'mng_subscriptions' => 
    array (
    ),
    'mng_rules' => 
    array (
    ),
    'mng_recurring' => 
    array (
    ),
    'mng_webhooks' => 
    array (
    ),
    'mng_currencies' => 
    array (
    ),
    'view_reports' => 
    array (
    ),
    'view_memberships' => 
    array (
    ),
    'full' => 
    array (
    ),
    'owner' => 
    array (
    ),
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/var/www/html/resources/views',
    ),
    'compiled' => '/var/www/html/storage/framework/views',
  ),
  'webhooks' => 
  array (
    'force_relevant_response' => 
    array (
      'STORE_TRANSACTION' => 
      array (
        0 => 'STORE_BUDGET',
        1 => 'UPDATE_BUDGET',
        2 => 'DESTROY_BUDGET',
        3 => 'STORE_UPDATE_BUDGET_LIMIT',
      ),
      'UPDATE_TRANSACTION' => 
      array (
        0 => 'STORE_BUDGET',
        1 => 'UPDATE_BUDGET',
        2 => 'DESTROY_BUDGET',
        3 => 'STORE_UPDATE_BUDGET_LIMIT',
      ),
      'DESTROY_TRANSACTION' => 
      array (
        0 => 'STORE_BUDGET',
        1 => 'UPDATE_BUDGET',
        2 => 'DESTROY_BUDGET',
        3 => 'STORE_UPDATE_BUDGET_LIMIT',
      ),
      'STORE_BUDGET' => 
      array (
        0 => 'STORE_TRANSACTION',
        1 => 'UPDATE_TRANSACTION',
        2 => 'DESTROY_TRANSACTION',
      ),
      'UPDATE_BUDGET' => 
      array (
        0 => 'STORE_TRANSACTION',
        1 => 'UPDATE_TRANSACTION',
        2 => 'DESTROY_TRANSACTION',
      ),
      'DESTROY_BUDGET' => 
      array (
        0 => 'STORE_TRANSACTION',
        1 => 'UPDATE_TRANSACTION',
        2 => 'DESTROY_TRANSACTION',
      ),
      'STORE_UPDATE_BUDGET_LIMIT' => 
      array (
        0 => 'STORE_TRANSACTION',
        1 => 'UPDATE_TRANSACTION',
        2 => 'DESTROY_TRANSACTION',
      ),
    ),
    'forbidden_responses' => 
    array (
      'ANY' => 
      array (
        0 => 'BUDGET',
        1 => 'TRANSACTIONS',
        2 => 'ACCOUNTS',
      ),
      'STORE_TRANSACTION' => 
      array (
        0 => 'BUDGET',
      ),
      'UPDATE_TRANSACTION' => 
      array (
        0 => 'BUDGET',
      ),
      'DESTROY_TRANSACTION' => 
      array (
        0 => 'BUDGET',
      ),
      'STORE_BUDGET' => 
      array (
        0 => 'TRANSACTIONS',
        1 => 'ACCOUNTS',
      ),
      'UPDATE_BUDGET' => 
      array (
        0 => 'TRANSACTIONS',
        1 => 'ACCOUNTS',
      ),
      'DESTROY_BUDGET' => 
      array (
        0 => 'TRANSACTIONS',
        1 => 'ACCOUNTS',
      ),
      'STORE_UPDATE_BUDGET_LIMIT' => 
      array (
        0 => 'TRANSACTIONS',
        1 => 'ACCOUNTS',
      ),
    ),
  ),
  'mailersend-driver' => 
  array (
    'api_key' => '',
    'host' => 'api.mailersend.com',
    'protocol' => 'https',
    'api_path' => 'v1',
  ),
  'flare' => 
  array (
    'key' => NULL,
    'flare_middleware' => 
    array (
      0 => 'Spatie\\FlareClient\\FlareMiddleware\\RemoveRequestIp',
      1 => 'Spatie\\FlareClient\\FlareMiddleware\\AddGitInformation',
      2 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddNotifierName',
      3 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddEnvironmentInformation',
      4 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddExceptionInformation',
      5 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddDumps',
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddLogs' => 
      array (
        'maximum_number_of_collected_logs' => 200,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddQueries' => 
      array (
        'maximum_number_of_collected_queries' => 200,
        'report_query_bindings' => true,
      ),
      'Spatie\\LaravelIgnition\\FlareMiddleware\\AddJobs' => 
      array (
        'max_chained_job_reporting_depth' => 5,
      ),
      6 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddContext',
      7 => 'Spatie\\LaravelIgnition\\FlareMiddleware\\AddExceptionHandledStatus',
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestBodyFields' => 
      array (
        'censor_fields' => 
        array (
          0 => 'password',
          1 => 'password_confirmation',
        ),
      ),
      'Spatie\\FlareClient\\FlareMiddleware\\CensorRequestHeaders' => 
      array (
        'headers' => 
        array (
          0 => 'API-KEY',
          1 => 'Authorization',
          2 => 'Cookie',
          3 => 'Set-Cookie',
          4 => 'X-CSRF-TOKEN',
          5 => 'X-XSRF-TOKEN',
        ),
      ),
    ),
    'send_logs_as_events' => true,
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'auto',
    'enable_share_button' => true,
    'register_commands' => false,
    'solution_providers' => 
    array (
      0 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\BadMethodCallSolutionProvider',
      1 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\MergeConflictSolutionProvider',
      2 => 'Spatie\\Ignition\\Solutions\\SolutionProviders\\UndefinedPropertySolutionProvider',
      3 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\IncorrectValetDbCredentialsSolutionProvider',
      4 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingAppKeySolutionProvider',
      5 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\DefaultDbNameSolutionProvider',
      6 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\TableNotFoundSolutionProvider',
      7 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingImportSolutionProvider',
      8 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\InvalidRouteActionSolutionProvider',
      9 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\ViewNotFoundSolutionProvider',
      10 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\RunningLaravelDuskInProductionProvider',
      11 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingColumnSolutionProvider',
      12 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownValidationSolutionProvider',
      13 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingMixManifestSolutionProvider',
      14 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingViteManifestSolutionProvider',
      15 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\MissingLivewireComponentSolutionProvider',
      16 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UndefinedViewVariableSolutionProvider',
      17 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\GenericLaravelExceptionSolutionProvider',
      18 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\OpenAiSolutionProvider',
      19 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\SailNetworkSolutionProvider',
      20 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownMysql8CollationSolutionProvider',
      21 => 'Spatie\\LaravelIgnition\\Solutions\\SolutionProviders\\UnknownMariadbCollationSolutionProvider',
    ),
    'ignored_solution_providers' => 
    array (
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '/var/www/html',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
    'settings_file_path' => '',
    'recorders' => 
    array (
      0 => 'Spatie\\LaravelIgnition\\Recorders\\DumpRecorder\\DumpRecorder',
      1 => 'Spatie\\LaravelIgnition\\Recorders\\JobRecorder\\JobRecorder',
      2 => 'Spatie\\LaravelIgnition\\Recorders\\LogRecorder\\LogRecorder',
      3 => 'Spatie\\LaravelIgnition\\Recorders\\QueryRecorder\\QueryRecorder',
    ),
    'open_ai_key' => NULL,
    'with_stack_frame_arguments' => true,
    'argument_reducers' => 
    array (
      0 => 'Spatie\\Backtrace\\Arguments\\Reducers\\BaseTypeArgumentReducer',
      1 => 'Spatie\\Backtrace\\Arguments\\Reducers\\ArrayArgumentReducer',
      2 => 'Spatie\\Backtrace\\Arguments\\Reducers\\StdClassArgumentReducer',
      3 => 'Spatie\\Backtrace\\Arguments\\Reducers\\EnumArgumentReducer',
      4 => 'Spatie\\Backtrace\\Arguments\\Reducers\\ClosureArgumentReducer',
      5 => 'Spatie\\Backtrace\\Arguments\\Reducers\\DateTimeArgumentReducer',
      6 => 'Spatie\\Backtrace\\Arguments\\Reducers\\DateTimeZoneArgumentReducer',
      7 => 'Spatie\\Backtrace\\Arguments\\Reducers\\SymphonyRequestArgumentReducer',
      8 => 'Spatie\\LaravelIgnition\\ArgumentReducers\\ModelArgumentReducer',
      9 => 'Spatie\\LaravelIgnition\\ArgumentReducers\\CollectionArgumentReducer',
      10 => 'Spatie\\Backtrace\\Arguments\\Reducers\\StringableArgumentReducer',
    ),
  ),
);
