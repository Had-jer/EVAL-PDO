<?php

namespace App\Controller;

use App\Core\BaseController;
use App\Core\BaseView;
use App\Entity\Post;
use App\Repository\PostRepository;
use App\View\CreateView;
use App\View\HomeView;
use DateTime;

class CreateController extends BaseController {

    public function doGet(): CreateView {
        // Créer un nouveau post vide
        // $post = new PostRepository();
        return new CreateView();
    }
    
    public  function doPost():BaseView{

        // 1. Récupération des données
        $titre = $_POST['titre'] ;
        $contenu = $_POST['contenu'] ;
        $date_creation =  new DateTime( $_POST['date_creation']);

        //  $date_creation = $_POST['date_creation']; 
        // $date = DateTime::createFromFormat('d/m/Y', $date_creation);
     

        // 2. Création de l'entité
        $post = new Post($titre, $contenu, $date_creation );
      
 
       
        $repository = new PostRepository();
        $repository->persist($post);
        // $tab = $repository->findAll();
        // return new HomeView($tab);
        header('Location: /');
        exit;
    }
}