<?php

namespace App\Services;
use GuzzleHttp\Client;

class BingNewsService {
    protected $apiKey;
    protected $client;

    public function __construct() {
        // Retrieve the API key from the .env file
        $this->apiKey = env('BING_NEWS_API_KEY');
        $this->client = new Client([
            'base_uri' => 'https://api.bing.microsoft.com/v7.0/news/search'
        ]);
    }

    public function getNews($query) {
        $response = $this->client->request('GET', '', [
            'headers' => ['Ocp-Apim-Subscription-Key' => $this->apiKey],
            'query' => ['q' => $query, 'mkt' => 'en-US']
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }
}
