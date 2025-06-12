<?php


namespace App\Repository;

use App\Entity\Post;
use App\Repository\Connexion;
use DateTime;


class PostRepository
{
    public function findAll(): array
    {
        $posts = [];
        $blabla = Connexion::connect();
        $preparedQuery = $blabla->prepare("SELECT * FROM post");
        $preparedQuery->execute();

        while ($line = $preparedQuery->fetch()) {
            $post = $this->lineToArticle($line);
            array_push($posts, $post);
        }
        return $posts;
    }
    private function lineToArticle(array $line): Post
    {
        return  new Post(
            $line["titre"],
            $line["contenu"],
            new DateTime(datetime: $line["date_creation"]),
            $line["id"]
        );
    }
    public function persist(Post $post): void
    {
        $connection = Connexion::connect();

        $preparedQuery = $connection->prepare("INSERT INTO post (titre,contenu,id,date_creation,categorie_id) VALUES (:title,:content,:id,:dateCreation, :categorie_id)");

        $preparedQuery->bindValue(":title", $post->getTitre());
        $preparedQuery->bindValue(":content", $post->getContenu());
        $preparedQuery->bindValue(":id", $post->getId());
        $preparedQuery->bindValue(":categorie_id", 1);

        $preparedQuery->bindValue(":dateCreation", $post->getDateCreation()->format('Y-m-d'));

        $preparedQuery->execute();

        //On récupère l'id auto incrémenté par mysql et on l'assigne à notre article
        $post->setId($connection->lastInsertId());
    }

    public function findById(int $id): ?Post {
        $connection = Connexion::connect();
        $preparedQuery = $connection->prepare("SELECT * FROM post WHERE id=:id");

        $preparedQuery->bindValue(":id", $id);
        $preparedQuery->execute();

        $line = $preparedQuery->fetch();
        if ($line) {
            $article = $this->lineToArticle($line);
            return $article;

}
 return null;
}
public function Delete(int $id){
    $connection = Connexion::connect();

    $preparedQuery = $connection->prepare("DELETE   FROM post WHERE id=:id");
    $preparedQuery->bindValue(":id", $id);
    $preparedQuery->execute();
    return $preparedQuery->rowCount()>0;

}
public function Update( post $post){

    $connection = Connexion::connect();

    $preparedQuery = $connection->prepare("UPDATE  post SET titre=:titre, contenu = :contenu, date_creation= :date_creation WHERE id=:id");
    $preparedQuery->bindValue(":titre", $post->getTitre());
        $preparedQuery->bindValue(":contenu", $post->getContenu());
        $preparedQuery->bindValue(":date_creation", $post->getDateCreation()->format('Y-m-d'));
        $preparedQuery->bindValue(":id", $post->getId());

        $preparedQuery->execute();

        return $preparedQuery->rowCount() > 0;

}

}
