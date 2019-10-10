<?php

namespace Soluti\BirdIdSymfonyBundle\Request;

interface ClientTokenInterface
{
    public function getClientId(): string;

    public function getClientSecret(): string;
}
