<?php

namespace Cfm\SoapSymfonyBundle\Request;

interface CfmSoapClientInterface
{
    public function getWsdl(): string;

    public function getClient(): ?nusoap_client;

    public function createClient(): void;
}
