<?php

namespace DivanteTranslationBundle\Controller;

use Pimcore\Bundle\AdminBundle\Controller\AdminAbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
final class ProviderController extends AdminAbstractController
{
    private string $sourceLanguage;
    private string $provider;

    public function __construct(string $sourceLanguage, string $provider)
    {
        $this->sourceLanguage = $sourceLanguage;
        $this->provider = $provider;
    }

    /**
     * @Route("/translate-provider", methods={"GET"})
     */
    public function translationProviderInfoAction(): JsonResponse
    {
        return $this->adminJson([
            'provider' => $this->provider
        ]);
    }
}
