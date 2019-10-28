<?php

namespace Cfm\SoapSymfonyBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('cfm');

        $rootNode
            ->children()
                ->arrayNode('service')
                    ->children()
                        ->scalarNode('key')->end()
                    ->end()
                ->end() // service
            ->end()
        ;

        return $treeBuilder;
    }
}