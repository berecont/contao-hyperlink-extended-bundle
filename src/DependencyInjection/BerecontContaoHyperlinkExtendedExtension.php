<?php
declare(strict_types=1);

namespace Berecont\ContaoHyperlinkExtendedBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

final class BerecontContaoHyperlinkExtendedExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $config = $this->processConfiguration(new Configuration(), $configs);

        $container->setParameter('berecont_hx.allow_data', $config['allow_data']);
        $container->setParameter('berecont_hx.allow_aria', $config['allow_aria']);
        $container->setParameter('berecont_hx.allowed_attribute_names', $config['allowed_attribute_names']);
        $container->setParameter('berecont_hx.allowed_attribute_patterns', $config['allowed_attribute_patterns']);

        (new YamlFileLoader($container, new FileLocator(__DIR__ . '/../../config')))
            ->load('services.yaml');
    }
}