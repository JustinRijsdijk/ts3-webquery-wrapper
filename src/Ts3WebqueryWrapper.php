<?php

namespace Justinrijsdijk\Ts3WebqueryWrapper;

use GuzzleHttp\Client;

class Ts3WebqueryWrapper
{
    protected Client $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client([
            'base_uri' => config('ts3webquerywrapper.url'),
            'headers' => [
                'apikey' => config('ts3webquerywrapper.apikey'),
            ],
        ]);
    }

    public function webQueryRequest(string $url, array $params = [])
    {
        $uriParams = [];
        $uriParams['api-key'] = config('ts3webquerywrapper.apikey');

        $url .= '?'.http_build_query($params);

        $this->httpClient->post($url, $params);
    }
}
