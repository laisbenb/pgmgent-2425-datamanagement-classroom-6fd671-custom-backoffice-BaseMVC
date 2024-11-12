<?php

namespace App\Models;

class Movie extends BaseModel
{

    protected function search($search)
    {

        $sql = 'SELECT * FROM `' . $this->table . '`
        WHERE title LIKE :search OR short_description LIKE :search
        ';
        $pdo_statement = $this->db->prepare($sql);
        $pdo_statement->execute([
            ':search' => '%' . $search . '%'
        ]);

        $db_items = $pdo_statement->fetchAll();

        return self::castToModel($db_items);
    }

    public function save()
    {
        $sql = "INSERT INTO `db`.`movies` (`title`, `duration`, `rating`, `short_description`, `description`, `genre_id`) VALUES (:title, :duration, :rating, :short_description, :description, :genre_id)";
        $pdo_statement = $this->db->prepare($sql);
        $success = $pdo_statement->execute([
            ':title' => $this->title,
            ':description' => $this->description,
            ':short_description' => $this->short_description,
            ':duration' => $this->duration,
            ':rating' => $this->rating,
            ':genre_id' => $this->genre_id
        ]);

        return $success;
    }

    public function delete()
    {
        $sql = "DELETE FROM `db`.`movies` WHERE id = :id";
        $pdo_statement = $this->db->prepare($sql);
        $success = $pdo_statement->execute([
            ':id' => $this->id
        ]);

        return $success;
    }
}
