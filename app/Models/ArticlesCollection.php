<?php

namespace App\Models;


class ArticlesCollection
{
    private array $articles = [];

    public function addArticle(Article $article)
    {
        $this->articles[] = $article;
    }

    public function getArticles()
    {
        return $this->articles;
    }
}

