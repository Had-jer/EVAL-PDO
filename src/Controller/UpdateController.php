<?php

namespace App\Controller;

use App\Core\BaseController;
use App\Core\BaseView;
use App\Entity\Post;
use App\Repository\PostRepository;
use App\View\UpdateView;
use DateTime;

class UpdateController extends BaseController
{

    public function doPost(): BaseView
    {

        $repo = new PostRepository();

        $post = $repo->findById($_GET["id"]);

        if (isset($_POST["modifier"])) {
            $repo = new PostRepository();
            $book = $repo->findById($_GET["id"]);
            return new UpdateView($book);
        }

        if (isset($_POST["modif"])) {

            $post->setId($_GET["id"]);
            $post->setTitre($_POST["titre"]);
            $post->setContenu($_POST["contenu"]);
            $post->setDateCreation(new DateTime($_POST["date_creation"]));
        }

        $result = $repo->Update($post);


        return new  UpdateView($post);
    }
}
