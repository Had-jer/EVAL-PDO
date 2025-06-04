<?php


namespace App\Entity;
class Post{
    private ? int $id;
    private string $titre;
    private string $contenu;
    private \DateTime $date_creation;
    

    public function __construct(string $titre, string $contenu , $date_creation, ? int $id) {
        $this->id = $id;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->date_creation = $date_creation;
    }

 

}