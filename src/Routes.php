<?php


namespace App;

use App\Controller\CreateController;
use App\Controller\HomeController;
use App\Controller\BookController;
use App\Controller\UpdateController;



/**
 * Classe qui contient toutes les routes disponibles sur notre application et
 * quel contrôleur est lié à chaque page
 */
class Routes
{
    /**
     * Méthode qui sera appelée dans le index.php pour récupérer la liste des routes à
     * donner à manger au App\Core\Router
     * @return \App\Core\BaseController[]
     */
    public static function defineRoutes()
    {
        return [
            "/" => new HomeController(),
            "/add-book" => new CreateController(),
            '/book'=> new BookController(),
            "/update" => new UpdateController(),

         
        ];
       
    }
}