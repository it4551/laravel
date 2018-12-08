<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    //Socialite 
    'facebook' => [
        'client_id'     => '1431803620220137',
        'client_secret' => '65a780892ef926bd6dff130c9490c740',
        'redirect'      => 'http://localhost/login/callback/facebook',
    ],

    // https://developers.google.com/+/web/signin/
    'google' => [
        'client_id'     => '',
        'client_secret' => '',
        'redirect'      => 'http://ptpmcn.com/login/callback/google',
    ],

];
