<?php

namespace Soluti\BirdIdSymfonyBundle\Request;

class ClientToken implements ClientTokenInterface
{
    private $clientId;
    private $clientSecret;

    public function __construct(
        string $clientId,
        string $clientSecret
    ) {
        $this->clientId     = $clientId;
        $this->clientSecret = $clientSecret;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }
}
