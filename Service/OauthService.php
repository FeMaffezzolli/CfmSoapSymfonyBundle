<?php

namespace Soluti\BirdIdSymfonyBundle\Service;

use Symfony\Component\HttpClient\HttpClient;

use Soluti\BirdIdSymfonyBundle\Request\OauthApplicationInterface;
use Soluti\BirdIdSymfonyBundle\Request\ClientTokenInterface;

class OauthService
{
    private $obj;

    public static function application(OauthApplicationInterface $request)
    {
        $client = HttpClient::create();

        $requestHeaders = [
            'Content-Type' => 'application/json',
            'Accept'       => 'application/json',
        ];

        $jsonData = [
            'name'          => $request->getName(),
            'comments'      => $request->getComments(),
            'redirect_uris' => $request->getRedirectUris(),
            'email'         => $request->getEmail(),
        ];

        $response = $client->request(
            'POST',
            'https://api.birdid.com.br/v0/oauth/application',
            [
                'headers' => $requestHeaders,
                'json'    => $jsonData,
            ]
        );

        return $response;
    }

    public static function clientToken(ClientTokenInterface $request)
    {
        $client = HttpClient::create();

        $requestHeaders = [
            'Content-Type' => 'application/json',
            'Accept'       => 'application/json',
        ];

        $jsonData = [
            'grant_type'    => 'client_credentials',
            'client_id'     => $request->getClientId(),
            'client_secret' => $request->getClientSecret(),
        ];

        $response = $client->request(
            'POST',
            'https://api.birdid.com.br/v0/oauth/client_token',
            [
                'headers' => $requestHeaders,
                'json'    => $jsonData,
            ]
        );

        return $response;
    }
}
