<?php
// Start the session to store login state
session_start();

// Database credentials
$servername = "localhost"; // Usually 'localhost'
$username = "root"; // Your MySQL username (default is 'root')
$password = ""; // Your MySQL password (default is empty for 'root' in local setups)
$dbname = "onlinevoting"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variables to store errors
$errorMessage = "";

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the input values
    $adminUsername = $_POST['username'];
    $adminPassword = $_POST['password'];

    // Sanitize input to avoid SQL injection
    $adminUsername = $conn->real_escape_string($adminUsername);
    $adminPassword = $conn->real_escape_string($adminPassword);

    // Query the database to check if the credentials are valid
    $sql = "SELECT * FROM admin WHERE username = '$adminUsername' AND password = '$adminPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Admin found, start a session and redirect to adminhome.php
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $adminUsername;
        header("Location: adminhome.php"); // Redirect to admin dashboard
        exit();
    } else {
        // If no match, show an error message
        $errorMessage = "Invalid username or password.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-5">Admin Login</h2>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <?php if (!empty($errorMessage)): ?>
                    <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
                <?php endif; ?>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
