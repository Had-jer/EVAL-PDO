<?php

namespace App\Controller;

use App\Core\BaseController;
use App\Core\BaseView;
use App\Repository\PostRepository;
use App\View\HomeView;
class HomeController extends BaseController{
    public function doGet(): BaseView{
        $repo = new PostRepository();
        $postList = $repo->findAll();
        
       return new HomeView( $postList);
    
    }
    
}

