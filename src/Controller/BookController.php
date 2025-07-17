<?php


namespace App\Controller;

use App\Core\BaseController;
use App\Core\BaseView;
use App\Repository\PostRepository;
use App\View\BookView;
use App\View\HomeView;
use App\View\UpdateView;

class BookController extends BaseController
{

    private int $id;
  
    public function doGet(): BaseView
    {

        $repo = new PostRepository();

        $post = $repo->findById($_GET["id"]);

        return new  BookView($post);
    }
    public function doPost(): BaseView
    {

        if (isset($_POST["supprimer"])) {
            $repo = new PostRepository();
            $repo->Delete($_GET["id"]);
        }



        $repo = new PostRepository();

        $books = $repo->findAll();

        return new  HomeView($books);
    }
}
