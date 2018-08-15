<?php 
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = 'contacts';
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if($conn->select_db($dbname) === false){
        $sql  = "CREATE DATABASE IF NOT EXISTS contacts";
        
        if($conn->query($sql) ===TRUE){
            $conn->select_db($dbname);
            $sql = "CREATE TABLE contact_info (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(50) NOT NULL,
                tel int NOT NULL,
                comment VARCHAR(500) NOT NULL
                )";
            if($conn->query($sql) === false){
                echo "Error creating database: " . $db->error;
            }
        } else {
            echo "Error creating database: " . $db->error;
        }
    }
    if(isset($_POST['email'])){
        if(!isset($_POST['first_name']) || !isset($_POST['last_name']) || !isset($_POST['email']) || !isset($_POST['telephone']) || !isset($_POST['comment'])) {
            die('We are sorry, please input to form');
        }
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email_from = $_POST['email']; 
        $telephone = $_POST['telephone']; 
        $comments = $_POST['comment']; 
        $error_message = "";
        if(strlen($comments) < 2){
            $error_message = "the comments you entered too short. <br />";
        }
        if(strlen($error_message) > 0){
            die($error_message);
        }
        $sql = "INSERT INTO contact_info (firstname, lastname, email, tel, comment) VALUES ('". $first_name . "','" .$last_name . "','" . $email_from . "','" . $telephone ."','" . $comments . "')";
        if($conn->query($sql) === TRUE){
            echo "thank for contact !";
        }
        else {
            echo "sorry error for contact us !";
        }

    }
?>