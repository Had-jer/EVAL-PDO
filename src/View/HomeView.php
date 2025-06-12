<?php


namespace App\View;

use App\Core\BaseView;

class HomeView extends BaseView
{
   private array $livres;

   public function __construct(array $livres)
   {
      $this->livres = $livres;
   }
   protected function content(): void
   {
      foreach ($this->livres as $line) {
         ?>
         <a href="/book?id=<?= $line->getId()?>"><div>
            
          <h2>"Titre :" <?= $line->getTitre()?></h2>
          <p> <?= $line->getContenu() ?></p>
          <p> <?= $line->getDateCreation()->format('Y-m-d')?>  </p>
      </div></a>
      <?php

   }
   }
}
