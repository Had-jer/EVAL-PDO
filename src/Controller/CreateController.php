<?php


namespace App\Controller;

use App\Core\BaseController;
use App\Repository\PostRepository;
use App\View\CreateView;

class CreateController extends BaseController{

    public function doGet(): CreateView{
        $repo = new PostRepository();
        $post = $repo->persist();
        return new CreateView ($post);


    }
}