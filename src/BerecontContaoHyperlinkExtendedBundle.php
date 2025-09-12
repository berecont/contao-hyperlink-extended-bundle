<?php

declare(strict_types=1);

namespace Berecont\ContaoHyperlinkExtendedBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Berecont\ContaoHyperlinkExtendedBundle\DependencyInjection\BerecontContaoHyperlinkExtendedExtension;

final class BerecontContaoHyperlinkExtendedBundle extends AbstractBundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        // sorgt dafür, dass deine Extension + Configuration geladen werden
        return new BerecontContaoHyperlinkExtendedExtension();
    }
}