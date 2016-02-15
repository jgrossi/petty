<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Petty Domain
    |--------------------------------------------------------------------------
    |
    | This value determines the domain used for your shortener. Every short
    | url generated will use this domain.
    |
    */

    'domain' => env('PETTY_DOMAIN', 'http://example.com'),

    /*
    |--------------------------------------------------------------------------
    | Petty minimum characters size
    |--------------------------------------------------------------------------
    |
    | This value determines the minimum number of characters generate
    | in the shortened URL.
    |
    */

    'size' => env('PETTY_SIZE', 2),

    /*
    |--------------------------------------------------------------------------
    | Petty minimum characters size
    |--------------------------------------------------------------------------
    |
    | The URL to user's avatar.
    |
    */

    'avatar' => env('PETTY_AVATAR', 'img/avatar.png'),

    /*
    |--------------------------------------------------------------------------
    | Petty user name
    |--------------------------------------------------------------------------
    |
    | The user's name to be used.
    |
    */

    'name' => env('PETTY_NAME', 'Your Name'),

    /*
    |--------------------------------------------------------------------------
    | Petty username for login purposes
    |--------------------------------------------------------------------------
    |
    | The username to login inside Bitly
    |
    */

    'username' => env('PETTY_USERNAME', 'petty'),

    /*
    |--------------------------------------------------------------------------
    | Petty password
    |--------------------------------------------------------------------------
    |
    | The user's password.
    |
    */

    'password' => env('PETTY_PASSWORD', 'secret'),

];