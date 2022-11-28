<?php

namespace App\Controllers;

use App\NewsApiRequest;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class NewsController
{

    public function index()
    {
        $country = 'lv';
        $loader = new FilesystemLoader('Twig/views');
        $twig = new Environment($loader);
        $requestedArticles = new NewsApiRequest();
        $requestedArticles->setCategory($country);
        $requestedArticles->getApiResponse();
        $response = $requestedArticles->getArticles();
        //var_dump($response);
        echo $twig->render('head.php');
        echo $twig->render('navbar.php');
        foreach ($response->getArticles() as $article) {
            echo $twig->render('article.php',
                ['articleTitle' => $article->getTitle(),
                    'articleContent' => $article->getContent(),
                    'articleImgUrl' => $article->getImageUrl(),
                    'articleUrl' => $article->getUrl(),
                ]);
        }
    }

    public function section()
    {
        $section = $_GET['section'];
        $loader = new FilesystemLoader('Twig/views');
        $twig = new Environment($loader);
        //var_dump($section);
        $requestedArticles = new NewsApiRequest();
        $requestedArticles->setCategory($section);
        $requestedArticles->getApiResponse();
        $response = $requestedArticles->getArticles();
        echo $twig->render('head.php');
        echo $twig->render('navbar.php');
        foreach ($response->getArticles() as $article) {
            echo $twig->render('article.php',
                ['articleTitle' => $article->getTitle(),
                    'articleContent' => $article->getContent(),
                    'articleImgUrl' => $article->getImageUrl(),
                    'articleUrl' => $article->getUrl(),
                ]);
        }
    }

    public function search()
    {
        $search = (string)$_GET['search'];
        $loader = new FilesystemLoader('Twig/views');
        $twig = new Environment($loader);
        //var_dump($search);
        $requestedArticles = new NewsApiRequest();
        $requestedArticles->setQ($search);
        $requestedArticles->getApiResponse();
        $response = $requestedArticles->getArticles();
        echo $twig->render('head.php');
        echo $twig->render('navbar.php');
        foreach ($response->getArticles() as $article) {
            echo $twig->render('article.php',
                ['articleTitle' => $article->getTitle(),
                    'articleContent' => $article->getContent(),
                    'articleImgUrl' => $article->getImageUrl(),
                    'articleUrl' => $article->getUrl(),
                ]);
        }

        //var_dump($response);
    }


}