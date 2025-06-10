<?php


namespace App\View;

use App\Core\BaseView;
class HomeView extends BaseView{
 private array $livres;

public function __construct(array $livres) {
   $this->livres = $livres;

}
protected function content(): void{
   // echo "nkfkfkfj";
foreach ($this->livres as $line) {
   echo " <h2>".$line->getTitre()."</h2>";
   echo " <p>".$line->getContenu()."</p>";
   echo " <p>".$line->getDateCreation()->format('Y-m-d H:i:s')."</p>";
  


}

}
}
