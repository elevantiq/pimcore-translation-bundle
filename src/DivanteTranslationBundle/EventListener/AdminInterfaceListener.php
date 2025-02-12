<?php

namespace DivanteTranslationBundle\EventListener;

use Pimcore\Event\BundleManager\PathsEvent;

class AdminInterfaceListener
{
    /**
     * @param \Pimcore\Event\BundleManager\PathsEvent $event
     */
    public function addJsFiles(PathsEvent $event): void
    {
        $event->setPaths(
            array_merge(
                $event->getPaths(),
                [
                    '/bundles/divantetranslation/js/pimcore/startup.js',
                    '/bundles/divantetranslation/js/pimcore/object/elementservice.js',
                    '/bundles/divantetranslation/js/pimcore/object/tags/input.js',
                    '/bundles/divantetranslation/js/pimcore/object/tags/textarea.js',
                    '/bundles/divantetranslation/js/pimcore/object/tags/wysiwyg.js',
                ]
            )
        );
    }
}
