<?php 
    require('connect_db.php');
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
        $sql = "INSERT INTO contact_info (firstname, lastname, email, tel, comment) VALUES ('". $first_name . "','" .$last_name . "','" . $email_from . "'," . $telephone .",'" . $comments . "')";
        if($conn->query($sql) === TRUE){
            echo "お問い合わせありがとうございました !";
        }
        else {
            echo "sorry error for contact us !";
        }

    }
?>