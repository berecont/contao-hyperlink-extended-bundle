<?php
declare(strict_types=1);

namespace Berecont\ContaoHyperlinkExtendedBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $tb = new TreeBuilder('berecont_contao_hyperlink_extended');
        $root = $tb->getRootNode();

        $root
            ->children()
                ->booleanNode('allow_data')->defaultTrue()->end()
                ->booleanNode('allow_aria')->defaultTrue()->end()
                ->arrayNode('allowed_attribute_names')
                    ->prototype('scalar')->end()
                    ->defaultValue(['tabindex']) // Beispiel-Default
                ->end()
                ->arrayNode('allowed_attribute_patterns')
                    ->prototype('scalar')->end()
                    ->defaultValue([])          // z. B. '/^x-[\w-]+$/i'
                ->end()
            ->end();

        return $tb;
    }
}