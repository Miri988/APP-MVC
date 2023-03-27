<?php

namespace App\Mvc\Model;

use App\Mvc\Component\Database;
use PDO;

class User
{
    private int $id;
    private string $name;
    private string $surname;

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string 
    {
        return $this->name;
    }

    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }

    public function getSurname(): string 
    {
        return $this->surname;
    }

    public static function getAll()
    {
        $db = Database::getConnection();

        $stmt = $db->query("SELECT * FROM users");

        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class); // User::class ='App\Mvc\Model\User' 

        return $stmt->fetchAll();
    }
    public static function create()
    {
        User::create();
    }
}
