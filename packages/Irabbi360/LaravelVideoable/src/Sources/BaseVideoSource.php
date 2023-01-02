<?php

namespace Irabbi360\LaravelVideoable\Sources;

use Illuminate\Support\Arr;
use Irabbi360\LaravelVideoable\Models\Video;

abstract class BaseVideoSource
{
    /**
     * @var \Irabbi360\LaravelVideoable\Models\Video
     */
    protected $entity;

    public function __construct(array $vars)
    {
        $this->entity = new Video(Arr::get($vars, 'attributes', []));
    }

    /**
     * @return string
     */
    abstract public function getEmbedCode();
}
