<?php

return [

    /*
     |--------------------------------------------------------------------------
     | Pagination
     |--------------------------------------------------------------------------
     */

    'per_page' => 50,
    'max_per_page' => 100,

    /*
     |--------------------------------------------------------------------------
     | Caching Status
     |--------------------------------------------------------------------------
     */

    'cache_enabled' => true,

    /*
     |--------------------------------------------------------------------------
     | Skip Cache Params
     |--------------------------------------------------------------------------
     |
     | Use this to override the caching of a repository method response.
     |
     | Ex: http://myapp.local/?search=lorem&skipCache=true
     |
     */

    'cache_skip_param' => 'skipCache',

    /*
     |--------------------------------------------------------------------------
     | Core Scopes
     |--------------------------------------------------------------------------
     |
     | Use this to the core scopes used for such things as searching and ordering.
     |
     */

    'scopes' => [
        'search' => 'Osiom\Repository\Scopes\Search',
        'order_by' => 'Osiom\Repository\Scopes\OrderBy',
    ],
];
