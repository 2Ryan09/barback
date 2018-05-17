<?php
use Monolog\Handler\StreamHandler;

return [
    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that gets used when writing
    | messages to the logs. The name specified in this option should match
    | one of the channels defined in the "channels" configuration array.
    |
    */
    'default' => env('LOG_CHANNEL', 'single'),
    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog",
    |                    "custom", "stack"
    |
    */
    'channels' => [
        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => 'debug',
        ],
        'activity' => [
            'driver' => 'single',
            'path' => storage_path('logs/activity.log'),
            'level' => 'info',
        ],
        'bws' => [
            'driver' => 'single',
            'path' => storage_path('logs/bws.log'),
            'level' => 'info',
        ],
        'offering' => [
            'driver' => 'single',
            'path' => storage_path('logs/offering.log'),
            'level' => 'info',
        ],
        'bottle' => [
            'driver' => 'single',
            'path' => storage_path('logs/bottle.log'),
            'level' => 'info',
        ],
        'user' => [
            'driver' => 'single',
            'path' => storage_path('logs/user.log'),
            'level' => 'info',
        ],
        'location' => [
            'driver' => 'single',
            'path' => storage_path('logs/location.log'),
            'level' => 'info',
        ],
        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => 'debug',
            'days' => 7,
        ],
        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Laravel Log',
            'emoji' => ':boom:',
            'level' => 'critical',
        ],
        'stderr' => [
            'driver' => 'monolog',
            'handler' => StreamHandler::class,
            'with' => [
                'stream' => 'php://stderr',
            ],
        ],
        'syslog' => [
            'driver' => 'syslog',
            'level' => 'debug',
        ],
        'errorlog' => [
            'driver' => 'errorlog',
            'level' => 'debug',
        ],
    ],
];
