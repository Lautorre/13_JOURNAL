<?php


class ArticlesController {

    public function ajout() {

        view('articles.add');
    }

    public function save() {

        $article = new Article;

        // On visualise à quoi ressemble $article :
        dump($article);

        /********************
         * TEST DES GETTERS
         ********************/

        echo "Test de getId() : ";
        dump($article->getId());

        echo "Test de getTitle() : ";
        dump($article->getTitle());

        echo "Test de getContent() : ";
        dump($article->getContent());

        echo "Test de getAuthorId() : ";
        dump($article->getAuthorId());

        echo "Test de getCreatedAt() : ";
        dump($article->getCreatedAt());

        echo "Test de getCreatedAtFr() : ";
        dump($article->getCreatedAtFr());

        echo "Test de getUpdatedAt() : ";
        dump($article->getUpdatedAt());

        echo "Test de getUpdatedAtFr() : ";
        dump($article->getUpdatedAtFr());


    }

    public function show() {

        echo "Affichage de l'article";
    }
}