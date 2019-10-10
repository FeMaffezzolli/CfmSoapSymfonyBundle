<?php

namespace Soluti\BirdIdSymfonyBundle\Request;

class OauthApplication implements OauthApplicationInterface
{
    private $name;
    private $comments;
    private $redirectUris;
    private $email;

    public function __construct(
        string $name,
        string $comments,
        array  $redirectUris,
        string $email
    ) {
        $this->name         = $name;
        $this->comments     = $comments;
        $this->redirectUris = $redirectUris;
        $this->email        = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getComments(): string
    {
        return $this->comments;
    }

    public function getRedirectUris(): array
    {
        return $this->redirectUris;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
