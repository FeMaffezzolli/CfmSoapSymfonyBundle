<?php

namespace Cfm\SoapSymfonyBundle\Request;

interface CfmSoapInterface
{
    public function getWsdl(): string;
}
