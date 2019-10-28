<?php

namespace Cfm\SoapSymfonyBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Cfm\SoapSymfonyBundle\DependencyInjection\UnconventionalExtensionClass;

class CfmSoapSymfonyBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new UnconventionalExtensionClass();
    }
}
