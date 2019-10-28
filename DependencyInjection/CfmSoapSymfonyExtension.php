<?php

namespace Cfm\SoapSymfonyBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

class CfmSoapSymfonyExtension extends Extension
{
  public function load(array $configs, ContainerBuilder $container)
  {
      $loader = new YamlFileLoader(
          $container,
          new FileLocator(__DIR__.'/Resources/config')
      );
      $loader->load('cfm_soap_symfony.yaml');
  }

  public function getAlias()
  {
    return 'cfm_soap';
  }
}
