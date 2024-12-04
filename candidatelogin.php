<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
    <?php include ('includes/navbar.php'); ?>
    
    <div class="registration-form">
        <h2>Login</h2>
        <form action="auth/login_candidate.php" method="POST">
            

            <!-- Username -->
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="Username" name="Username" placeholder="enter username" required>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>


            <!-- Submit Button -->
            <button type="submit" class="btn">Login</button>
        </form>
    </div>

    <?php include ('includes/footer.php'); ?>
</body>
</html>


