<?php

namespace Cfm\SoapSymfonyBundle\Request;

class CfmSoapClient implements CfmSoapInterface
{
    private $wsdl;

    public function __construct(
        string $wsdl
    ) {
        $this->wsdl = $wsdl;
    }

    public function getWsdl(): string
    {
        return $this->wsdl;
    }
}
