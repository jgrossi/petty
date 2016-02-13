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

];