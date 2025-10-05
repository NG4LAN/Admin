<?php

namespace app\Controllers;

use config\DBConnection;
use app\Models\AddSubjectModel;

class AddSubjectController
{
    private $AddSubjectModel;

    public function __construct()
    {
        $db = new DBConnection();
        $this->AddSubjectModel = new AddSubjectModel($db);
    }
    
    public function addsubject()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $subject_code = $_POST['subject_code'] ?? '';
            $subject_name = $_POST['subject_name'] ?? '';
            $semester = $_POST['semester'] ?? '';
            $credit_units = $_POST['credit_units'] ?? '';

            if (empty($subject_code) || empty($subject_name) || empty($semester) || empty($credit_units)) {
                return ["success" => false, "message" => "All fields are required."];
            }
        }
        $result = $this->AddSubjectModel->addSubject($subject_code, $subject_name, $semester, $credit_units);

        if ($result) {
            return "Subject added successfully.";
            // header("Location: /AddSubjectView");

        }
        return "Error adding subject.";
    }




    public function showForm()
    {
        \app\Router::render('AddSubjectView');


    }
    

    // Add your custom controllers below to handle business logic.
}