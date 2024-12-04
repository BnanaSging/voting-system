<?php 

session_start();
//received user input
include('../config/DatabaseConnect.php');

   $lastname        = htmlspecialchars($_POST["LastName"]);
   $firstname        = htmlspecialchars($_POST["FirstName"]);
   $email        = htmlspecialchars($_POST["Email"]);
   $username        = htmlspecialchars($_POST["Username"]);
   $password        = htmlspecialchars($_POST["password"]);
   $confirmPassword = htmlspecialchars($_POST["confirm_password"]);


if($_SERVER["REQUEST_METHOD"] == "POST"){
    //validate confirmpassword

    $db = new DatabaseConnect();
    $conn = $db ->connectDB();

    if(trim($password) == trim($confirmPassword)){
        

        try {
        
            $stmt = $conn->prepare('INSERT INTO voters (Lastname,Firstname,Email,Username, password) VALUES (:p_lastname, :p_firstname,:p_email, :p_username, :p_password)');
            $stmt->bindParam(':p_lastname',$lastname);
            $stmt->bindParam(':p_firstname',$firstname);
            $stmt->bindParam(':p_email',$email);
            $stmt->bindParam(':p_username',$username);
            $stmt->bindParam(':p_password',$password);
            


            $password = password_hash($password,PASSWORD_BCRYPT);
            $stmt->execute();
            header("location: /register.php?");
$_SESSION["success"] = "Registration Successful";

        exit;
        } catch (Exception $e){
            echo "Connection Failed: " . $e->getMessage();
        }


    } else {
        header("location: /registration.php?");

        $_SESSION["error"] = "Password not the same";
        exit;
    }
}




//connect to database

//insert data

?>