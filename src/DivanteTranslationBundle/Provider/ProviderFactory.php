<?php

declare(strict_types=1);

namespace DivanteTranslationBundle\Provider;

use DivanteTranslationBundle\Exception\TranslationProviderNotImplemented;

class ProviderFactory
{
    private string $apiKey;
    private iterable $providers;
    private ?string $formality;

    /**
     * @param string $apiKey
     * @param iterable $providers
     * @param string|null $formality
     */
    public function __construct(string $apiKey, iterable $providers, ?string $formality)
    {
        $this->apiKey = $apiKey;
        $this->providers = $providers;
        $this->formality = $formality;
    }

    /**
     * @param string $name
     *
     * @throws \DivanteTranslationBundle\Exception\TranslationProviderNotImplemented
     * @return \DivanteTranslationBundle\Provider\ProviderInterface
     */
    public function get(string $name): ProviderInterface
    {
        /** @var ProviderInterface $provider */
        foreach ($this->providers as $provider) {
            if ($provider->getName() === $name) {
                $provider->setApiKey($this->apiKey);

                if ($provider instanceof FormalityProviderInterface) {
                    $provider->setFormality($this->formality);
                }

                return $provider;
            }
        }

        throw new TranslationProviderNotImplemented($name);
    }
}
