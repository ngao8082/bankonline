<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'sources' => [
        'youtube' => \Irabbi360\LaravelVideoable\Sources\YoutubePresenter::class,
        'vimeo' => \Irabbi360\LaravelVideoable\Sources\VimeoPresenter::class,
    ],
];