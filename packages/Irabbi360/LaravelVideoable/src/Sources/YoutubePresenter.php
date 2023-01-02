<?php

namespace Irabbi360\LaravelVideoable\Sources;

final class YoutubePresenter extends BaseVideoSource
{
    /**
     * @return string
     * @throws \Throwable
     */
    public function getEmbedCode()
    {
        return view('laravel-videoable::sources.youtube', ['code' => $this->entity->code])->render();
    }
}
