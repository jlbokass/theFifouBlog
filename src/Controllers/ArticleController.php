<?php
require '../src/Models/ConnexionDB.php';

class ArticleController
{
    /**
     * @return void
     */
    public function home(): void
    {
        $connexion = new ConnexionDB();
        $articles = $connexion->getAllArticles();

        require '../src/Views/home.php';
    }

    /**
     * @param $id
     *
     * @return void
     */
    public function show($id): void
    {
        $connexion = new ConnexionDB();
        $article = $connexion->getSingleArticleById($id);

        require '../src/Views/show.php';
    }

    public function add()
    {
        require '../src/Views/add.php';
    }

    /**
     * @return void
     */
    public function edit(): void
    {
        require '../src/Views/edit.php';
    }

    /**
     * @return void
     */
    public function delete(): void
    {
        require '../src/Views/delete.php';
    }
}