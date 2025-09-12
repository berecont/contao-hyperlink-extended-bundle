<?php
declare(strict_types=1);

namespace Berecont\ContaoHyperlinkExtendedBundle\Service;

final class AttributePolicy
{
    public function __construct(
        private readonly bool   $allowData,
        private readonly bool   $allowAria,
        /** @var string[] */ private readonly array $allowedNames,
        /** @var string[] */ private readonly array $allowedPatterns,
    ) {}

    public function isAllowed(string $name): bool
    {
        $n = strtolower(trim($name));

        if ($this->allowData && preg_match('/^data-[a-z][a-z0-9_-]*$/', $n)) {
            return true;
        }
        if ($this->allowAria && preg_match('/^aria-[a-z][a-z0-9_-]*$/', $n)) {
            return true;
        }
        foreach ($this->allowedNames as $exact) {
            if ($n === strtolower($exact)) {
                return true;
            }
        }
        foreach ($this->allowedPatterns as $pattern) {
            // suppress invalid pattern notices, but still check valid ones
            if (@preg_match($pattern, '') !== false && preg_match($pattern, $n)) {
                return true;
            }
        }
        return false;
    }
}