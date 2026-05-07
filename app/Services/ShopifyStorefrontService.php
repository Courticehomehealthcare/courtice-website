<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class ShopifyStorefrontService
{
    private string $endpoint;
    private string $token;

    public function __construct()
    {
        $this->endpoint = config('shopify.api_url');
        $this->token    = config('shopify.storefront_token');
    }

    public function query(string $query, array $variables = []): array
    {
        $response = Http::withHeaders([
            'X-Shopify-Storefront-Access-Token' => $this->token,
            'Content-Type' => 'application/json',
        ])->withoutVerifying()->post($this->endpoint, [
            'query'     => $query,
            'variables' => $variables,
        ]);

        return $response->json();
    }
}
