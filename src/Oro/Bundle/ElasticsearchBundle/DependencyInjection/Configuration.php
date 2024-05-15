<?php
/**
 * Copyright © 2017 Divante, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Oro\Bundle\ElasticsearchBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc]
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('divante_elasticsearch');
        $rootNode    = $treeBuilder->getRootNode();

        $rootNode->children()
            ->scalarNode('index')
                ->cannotBeEmpty()
                ->defaultValue('oro')
            ->end()
            ->scalarNode('type')
                ->cannotBeEmpty()
                ->defaultValue('oro_product_1')
            ->end();

        return $treeBuilder;

    }
}
