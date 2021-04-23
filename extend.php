<?php

use Illuminated\Theme\IlluminatedTheme;
use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__ . '/less/forum.less')
        ->content(IlluminatedTheme::class),
    (new Extend\View())
        ->namespace('theme-illuminated', __DIR__ . '/views'),
];
