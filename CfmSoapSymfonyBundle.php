<?php

namespace Cfm\SoapSymfonyBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Cfm\SoapSymfonyBundle\DependencyInjection\CfmSoapSymfonyExtension;

class CfmSoapSymfonyBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new CfmSoapSymfonyExtension();
    }
}
