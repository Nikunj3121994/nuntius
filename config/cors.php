<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */
   
    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedHeaders' => ['Content-Type', 'X-Requested-With','X-Company-ID','X-Subsidiary-ID'],
    'allowedMethods' => ['GET', 'POST', 'PUT',  'DELETE','PATCH','OPTIONS'],
    'exposedHeaders' => [],
    'maxAge' => 0,

];
