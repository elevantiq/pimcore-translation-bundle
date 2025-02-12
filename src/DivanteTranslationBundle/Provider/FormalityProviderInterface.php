<?php

declare(strict_types=1);

namespace DivanteTranslationBundle\Provider;

interface FormalityProviderInterface
{
    public function setFormality(?string $formality): self;
}
