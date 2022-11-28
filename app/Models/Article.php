<?php

namespace App\Models;

use App\NewsApiRequest;

class Article
{

    private string $title;
    private string $url;
    private string $content;
    private ?string $imageUrl;

    public function __construct(string $title, string $url, string $content, ?string $imageUrl = null)
    {

        $this->title = $title;
        $this->url = $url;
        $this->content = $content;
        $this->imageUrl = $imageUrl;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }


}