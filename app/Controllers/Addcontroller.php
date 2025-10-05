<?php

namespace app\Controllers;

use config\DBConnection;
use app\Models\Addmodel;

class Addcontroller
{
    private $Addmodel;

    public function __construct()
    {
        $db = new DBConnection();
        $this->Addmodel = new Addmodel($db);
    }
    public function addFaculty()
    {
        $firstName = $data['first_name'] ?? '';
        $lastName  = $data['last_name'] ?? '';
        $password  = $data['password'] ?? '';
        $gender    = $data['gender'] ?? '';
        $email     = $data['email'] ?? '';
        $idNumber  = $data['id_number'] ?? '';

        if (empty($firstName) || empty($lastName) || empty($password) || empty($gender) || empty($email) || empty($idNumber)) {
            return ["success" => false, "message" => "All fields are required."];
        }

        // Secure password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $result = $this->Addmodel->insertFaculty($firstName, $lastName, $hashedPassword, $gender, $email, $idNumber);

        if ($result) {
            return ["success" => true, "message" => "Faculty added successfully."];
        }
        return ["success" => false, "message" => "Error adding faculty."];
    }
    // Add your custom controllers below to handle business logic.
}