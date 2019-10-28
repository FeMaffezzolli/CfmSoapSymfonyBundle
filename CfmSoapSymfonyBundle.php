<?php

namespace Cfm\SoapSymfonyBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Acme\HelloBundle\DependencyInjection\UnconventionalExtensionClass;

class CfmSoapSymfonyBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new UnconventionalExtensionClass();
    }
}
