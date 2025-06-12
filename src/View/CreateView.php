<?php


namespace App\View;

use App\Core\BaseView;
use App\Entity\Post;

class CreateView extends BaseView
{
   public Post $book;

   protected function content(): void
   {
?>

      <div>
         <h1>Ajoutez un livre</h1>
         <form method="post">
            <div>
               <label for="titre">Titre</label>
               <input type="text" name="titre" id="titre" required />
            </div>



            <div>
               <label for="date_creation">Date de creation </label>
               <input type="text" name="date_creation" id="date_creation" />
            </div>

            <div>
               <label for="contenu">Contenu</label>
               <textarea name="contenu" id="contenu" rows="10" required></textarea>
            </div>
            <!-- <div> -->
            <!-- <label for="date_creation">Date de creation </label> -->
            <!-- <input type="submit"  name="submit" id="submit" /> -->
            <!-- </div> -->

            <button type="submit">Publier</button>
         </form>

      </div>



<?php

   }
}
