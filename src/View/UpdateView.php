<?php


namespace App\View;
use App\Core\BaseView;
use App\Entity\Post;
class UpdateView extends BaseView{

    private post $post;
    public function __construct($post) {
        $this->post =$post;
    }

    public function content(): void{
        ?>
        <div>
        <form method="post">
            <label for="titre">Titre: </label>
            <input type="text" name="titre" value="<?= $this->post->getTitre() ?>" required>
            <label for="contenu" >Contenu: </label>
            <input type="text" name="contenu" >
            <textarea name="contenu"  rows="20" required  ><?= $this->post->getContenu() ?> </textarea>

            <label for="titre">Date de creation</label>
            <input type="text" name="date_creation" value="<?= $this->post->getDateCreation()->format('Y-m-d') ?>" required>
                             <input type="submit" name="modif">MODIFIEZ LE LIVRE PLS!!!💀</input>
    </form>
    </div>

    <?php

    }

}