<?php


namespace App\Repository;

use App\Entity\Post;
use App\Repository\Connexion;
use DateTime;


class PostRepository{
    public function findAll(): array{
       $posts = [];
        $blabla = Connexion::connect();
        $preparedQuery = $blabla-> prepare("SELECT * FROM post");
        $preparedQuery->execute();

        while($line = $preparedQuery->fetch()){
            $post = $this-> lineToArticle($line);
        array_push($posts, $post);

        }
        return $posts;


    }
    private function lineToArticle(array $line):Post {
        return  new Post(
                $line["titre"],
                $line["contenu"],
                new DateTime(datetime: $line["date_creation"])
            );
    }
    public function persist(Post $post): void
    {
        $connection = Connexion::connect();

        $preparedQuery = $connection->prepare("INSERT INTO post (titre,contenu,id,date_creation) VALUES (:titre,:content,:id,:dateCreation)");

        $preparedQuery->bindValue(":title", $post->getTitre());
        $preparedQuery->bindValue(":content", $post->getContenu());
        $preparedQuery->bindValue(":id", $post->getId());
        $preparedQuery->bindValue(":dateCreation", $post->getDateCreation());

        $preparedQuery->execute();

        //On récupère l'id auto incrémenté par mysql et on l'assigne à notre article
        $post->setId($connection->lastInsertId());


    }


    

}