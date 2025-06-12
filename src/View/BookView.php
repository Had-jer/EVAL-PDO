<?php


namespace App\View;

use App\Core\BaseView;
// use App\Repository\PostRepository;
use App\Entity\Post;

class BookView extends BaseView
{

    private post $post;
    public function __construct($post)
    {
        $this->post = $post;
    }
    public function content(): void
    {
?>
        <div>

            <h2>"Titre :" <?= $this->post->getTitre() ?></h2>
            <p> <?= $this->post->getContenu() ?></p>
            <p> <?= $this->post->getDateCreation()->format('Y-m-d') ?> </p>
        </div>
        <form method="post">
            <input type="submit" value="supprimer" name="supprimer">
            </form>

            <form method="post" action="/update?id=<?= $this->post->getId()?>">
            <input type="submit" value="modifier" >
            </form>
<?php

    }
}
