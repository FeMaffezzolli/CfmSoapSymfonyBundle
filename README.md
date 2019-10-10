# Soluti Bird ID Symfony Bundle

## Installation

    $ composer require cm2tech/soluti-bird-id-symfony-bundle

## Available Routes

- https://api.birdid.com.br/v0/oauth/application
- https://api.birdid.com.br/v0/oauth/client_token

## Usage

    use Soluti\BirdIdSymfonyBundle\Service\OauthService as BirdIdOauthService;
    use Soluti\BirdIdSymfonyBundle\Request\ClientToken as ClientTokenRequest;

    $clientTokenRequest = new ClientTokenRequest(
        'b0c3ba9a3016da39493e007709625c15402ecf45',
        'fa9adfefeb381a2c4fbac27e7ece8b148ee03c6a'
    );

    $response = BirdIdOauthService::clientToken($clientTokenRequest);

    // var_dump($response->getStatusCode());
    // var_dump($response->getContent(false));
