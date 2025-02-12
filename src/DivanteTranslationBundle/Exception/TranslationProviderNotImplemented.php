<?php

declare(strict_types=1);

namespace DivanteTranslationBundle\Exception;

final class TranslationProviderNotImplemented extends \Exception
{
    public function __construct($provider)
    {
        parent::__construct(sprintf("Provider %s is not implemented.", $provider));
    }
}
