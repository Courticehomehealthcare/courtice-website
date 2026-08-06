<?php
return [
    'store_domain'     => env('SHOPIFY_STORE_DOMAIN'),
    'api_version'      => env('SHOPIFY_API_VERSION', '2024-01'),
    'api_url'          => env('SHOPIFY_API_URL'),
    'storefront_token' => env('SHOPIFY_STOREFRONT_TOKEN'),
    'admin_token'      => env('SHOPIFY_ADMIN_TOKEN'),
    'webhook_secret'   => env('SHOPIFY_WEBHOOK_SECRET'),
];
