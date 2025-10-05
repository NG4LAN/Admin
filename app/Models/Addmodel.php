<?php

namespace app\Models;

use config\DBConnection;
use PDO;

class Addmodel
{
    private $db;

    public function __construct(DBConnection $db)
    {
        $this->db = $db->getConnection();
    }
    


    public function insertFaculty($firstName, $lastName, $password, $gender, $email, $idNumber)
    {
        $stmt = $this->db->prepare(
            "INSERT INTO faculty (first_name, last_name, password, gender, email, id_number, status) 
             VALUES (:first_name, :last_name, :password, :gender, :email, :id_number, 'active')"
        );

        return $stmt->execute([
            ':first_name' => $firstName,
            ':last_name'  => $lastName,
            ':password'   => $password,
            ':gender'     => $gender,
            ':email'      => $email,
            ':id_number'  => $idNumber
        ]);
    }

    // Add your custom methods below to interact with the database.
}