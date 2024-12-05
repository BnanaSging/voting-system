<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register as Voter</title>
    
</head>
<body>
    <?php include ('includes/navvbar.php'); ?>
    
    <div class="registration-form">
        <h2>Register as Voter</h2>
        <form action="auth/register_process.php" method="POST">
            <!-- Full Name -->
            <div class="form-group">
                <label for="fullname">Last Name:</label>
                <input type="text" id="LastName" name="LastName" placeholder="Enter your last name" required>
            </div>

            <div class="form-group">
                <label for="fullname">First Name:</label>
                <input type="text" id="FirstName" name="FirstName" placeholder="Enter your first name" required>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="Email" name="Email" placeholder="Enter your email address" required>
            </div>

            <!-- Username -->
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="Username" name="Username" placeholder="Choose a username" required>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn">Register</button>
        </form>
    </div>

   
</body>
</html>


