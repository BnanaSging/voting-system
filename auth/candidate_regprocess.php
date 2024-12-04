<?php 

session_start();
//received user input
include('../config/DatabaseConnect.php');

   $name        = htmlspecialchars($_POST["Name"]);
   $username        = htmlspecialchars($_POST["Username"]);
   $password        = htmlspecialchars($_POST["password"]);
   $partylist        = htmlspecialchars($_POST["Partylist"]);
   $position        = htmlspecialchars($_POST["Position"]);
   $birthday        = htmlspecialchars($_POST["birthday"]);
   $politicalplatform        = htmlspecialchars($_POST["PoliticalPlatform"]);
   $image        = htmlspecialchars($_POST["Image"]);
   
   
   $confirmPassword = htmlspecialchars($_POST["confirm_password"]);


if($_SERVER["REQUEST_METHOD"] == "POST"){
    //validate confirmpassword

    $db = new DatabaseConnect();
    $conn = $db ->connectDB();

    if(trim($password) == trim($confirmPassword)){
        

        try {
        
            $stmt = $conn->prepare('INSERT INTO candidates (Name,Username,password,Partylist, Position,birthday, PoliticalPlatform,Image ) 
                                                            VALUES (:p_fullname, :p_username,:p_password, :p_partylist, :p_position, :p_birthday ,:p_politicalplatform,:p_image )');
            $stmt->bindParam(':p_fullname',$name);
            $stmt->bindParam(':p_username',$username);
            $stmt->bindParam(':p_password',$password);
            $stmt->bindParam(':p_partylist',$partylist);
            $stmt->bindParam(':p_position',$position);
            $stmt->bindParam(':p_birthday',$birthday);
            $stmt->bindParam(':p_politicalplatform',$politicalplatform);
            $stmt->bindParam(':p_image',$image);
            
            


            $password = password_hash($password,PASSWORD_BCRYPT);
            $stmt->execute();
            header("location: /candidateReg.php?");
$_SESSION["success"] = "Registration Successful";

        exit;
        } catch (Exception $e){
            echo "Connection Failed: " . $e->getMessage();
        }


    } else {
       echo "lopit"; 

        $_SESSION["error"] = "Password not the same";
        exit;
    }
}




//connect to database

//insert data

?>