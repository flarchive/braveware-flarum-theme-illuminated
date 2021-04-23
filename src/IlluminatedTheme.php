<?php

namespace Illuminated\Theme;

use Flarum\Foundation\Config;
use Flarum\Frontend\Document;
use Illuminate\Contracts\View\Factory as ViewFactory;

class IlluminatedTheme
{
    private Config $config;
    private ViewFactory $factory;

    public function __construct(Config $config, ViewFactory $factory)
    {
        $this->config = $config;
        $this->factory = $factory;
    }

    public function __invoke(Document $document): void
    {
        $forumApiDocument = $document->getForumApiDocument();
        $document->head[] = '<link rel="shortcut icon" href="/assets/extensions/braveware-theme-illuminated/favicon.ico" />';

        $forumApiDocument['data']['attributes']['headerHtml'] = $this->createHeader();
        $forumApiDocument['data']['attributes']['footerHtml'] = $this->createFooter();

        $document->setForumApiDocument($forumApiDocument);
    }

    private function createHeader(): string
    {
        return $this->factory->make(
            'theme-illuminated::header',
            $this->config->offsetGet('arch') ?? []
        )->render();
    }

    private function createFooter(): string
    {
        return $this->factory->make(
            'theme-illuminated::footer',
            $this->config->offsetGet('arch') ?? []
        )->render();
    }
}
