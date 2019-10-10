<?php

namespace Soluti\BirdIdSymfonyBundle\Request;

interface OauthApplicationInterface
{
    public function getName(): string;

    public function getComments(): string;

    public function getRedirectUris(): array;

    public function getEmail(): string;
}
