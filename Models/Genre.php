<?php

namespace App\Models;

class Genre extends BaseModel
{
    public static function all()
    {
        $sql = 'SELECT * FROM genres';
        $pdo_statement = self::$db->prepare($sql);
        $pdo_statement->execute();

        $db_items = $pdo_statement->fetchAll();

        return self::castToModel($db_items);
    }

    protected function search($search)
    {

        $sql = 'SELECT * FROM `' . $this->table . '`
        WHERE name LIKE :search OR description LIKE :search
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
        $sql = "INSERT INTO `db`.`genres` (`name`, `description`) VALUES (:name, :description)";
        $pdo_statement = $this->db->prepare($sql);
        $success = $pdo_statement->execute([
            ':name' => $this->name,
            ':description' => $this->description
        ]);

        return $success;
    }

    public function delete()
    {
        $sql = "DELETE FROM `db`.`genres` WHERE id = :id";
        $pdo_statement = $this->db->prepare($sql);
        $success = $pdo_statement->execute([
            ':id' => $this->id
        ]);

        return $success;
    }
}
