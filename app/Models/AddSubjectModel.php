<?php

namespace app\Models;

use config\DBConnection;
use PDO;

class AddSubjectModel
{
    private $db;

    public function __construct(DBConnection $db)
    {
        $this->db = $db->getConnection();
    }
    


    public function addSubject($subject_code, $subject_name, $semester, $credit_units)
    {
        $stmt = $this->db->prepare("INSERT INTO subjects (subject_code, subject_name, semester, credit_units) VALUES (:subject_code, :subject_name, :semester, :credit_units)");
        $stmt->bindParam(':subject_code', $subject_code, PDO::PARAM_STR);
        $stmt->bindParam(':subject_name', $subject_name, PDO::PARAM_STR);
        $stmt->bindParam(':semester', $semester, PDO::PARAM_STR);
        $stmt->bindParam(':credit_units', $credit_units, PDO::PARAM_INT);
        return $stmt->execute();
    }

// Method to update faculty details
public function updateFaculty($id, $firstName, $lastName, $password, $gender, $email, $idNumber)
{
    $stmt = $this->db->prepare(
        "UPDATE faculty 
         SET first_name = :first_name, 
             last_name = :last_name, 
             password = :password, 
             gender = :gender, 
             email = :email, 
             id_number = :id_number 
         WHERE id = :id"
    );

    $stmt->bindParam(':first_name', $firstName, PDO::PARAM_STR);
    $stmt->bindParam(':last_name', $lastName, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':id_number', $idNumber, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    return $stmt->execute();
}





    // Add your custom methods below to interact with the database.
}