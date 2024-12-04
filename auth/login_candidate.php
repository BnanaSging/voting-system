
<?php 
//received user input
$username = $_POST["Username"];
$password = $_POST["password"];

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        //connect to database
        $host = "localhost";
        $database = "onlinevoting";
        $dbusername = "root";
        $dbpassword = "";

        $dsn = "mysql: host=$host;dbname=$database;";
        try {
            $conn = new PDO($dsn, $dbusername, $dbpassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
            $stmt = $conn->prepare('SELECT * FROM `candidates` WHERE Username = :p_username');
            $stmt->bindParam(':p_username',$username);
            $stmt->execute();
            $users = $stmt->fetchAll();
            if($users){
                if(password_verify($password,$users[0]["password"])){
                    $_SESSION = [];
                    session_regenerate_id(true);
                    $_SESSION["user_id"] = $users[0]["id"];
                    $_SESSION["Username"] = $users[0]["Username"];
                    $_SESSION["Name"] = $users[0]["Name"];
                    

                    header("location: /index.php");
                } else {
                    echo "password did not match";
                }
            } else {
                echo "user not exist";
            }

        } catch (Exception $e){
            echo "Connection Failed: " . $e->getMessage();
        }

}
?>
