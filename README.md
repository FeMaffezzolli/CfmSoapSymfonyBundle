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
        'client_id_here',
        'client_secret_here'
    );

    $response = BirdIdOauthService::clientToken($clientTokenRequest);

    // var_dump($response->getStatusCode());
    // var_dump($response->getContent(false));
