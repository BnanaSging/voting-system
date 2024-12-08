<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register as Voter</title>
    <style>
        /* General styling */
        html, body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        .page-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .main-content {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .registration-form {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .registration-form h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="page-wrapper">
        <!-- Include navbar -->
        <?php include('includes/navvbar.php'); ?>

        <!-- Main Content -->
        <div class="main-content">
            <div class="registration-form">
                <h2>Register as Voter</h2>
                <form action="auth/register_process.php" method="POST">
                    <!-- Last Name -->
                    <div class="form-group">
                        <label for="LastName">Last Name:</label>
                        <input type="text" id="LastName" name="LastName" placeholder="Enter your last name" required>
                    </div>

                    <!-- First Name -->
                    <div class="form-group">
                        <label for="FirstName">First Name:</label>
                        <input type="text" id="FirstName" name="FirstName" placeholder="Enter your first name" required>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="Email">Email:</label>
                        <input type="email" id="Email" name="Email" placeholder="Enter your email address" required>
                    </div>

                    <!-- Username -->
                    <div class="form-group">
                        <label for="Username">Username:</label>
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
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <p>&copy; 2024 Your Organization. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
