<?php


namespace App\Entity;
class Post{
    private ?int $id;
    private string $titre;
    private string $contenu;
    private \DateTime $date_creation;
    

    public function __construct(string $titre, string $contenu , $date_creation, ?int $id=null) {
        $this->id = $id;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->date_creation = $date_creation;
    }

 


    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of titre
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     */
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of contenu
     */
    public function getContenu(): string
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     */
    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get the value of date_creation
     */
    public function getDateCreation(): \DateTime
    {
        return $this->date_creation;
    }

    /**
     * Set the value of date_creation
     */
    public function setDateCreation(\DateTime $date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    } 
}