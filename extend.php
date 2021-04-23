<?php

use Illuminted\Theme\IlluminatedTheme;
use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__ . '/less/forum.less')
        ->content(IlluminatedTheme::class),
    (new Extend\View())
        ->namespace('theme-illumiated', __DIR__ . '/views'),
];
