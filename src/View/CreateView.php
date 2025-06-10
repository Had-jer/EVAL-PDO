<?php


namespace App\View;

use App\Core\BaseView;
use App\Entity\Post;

class CreateView extends BaseView{
public Post $book;
    public function __construct($book)
    {
       $this->book = $book; 
    }
    protected function content(): void{
       echo "<input>";
       echo 
       echo "</input>";
    }
}