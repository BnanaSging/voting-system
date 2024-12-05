<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <style>
        /* Ensure the HTML and body take full height */
        html, body {
            height: 100%;
            margin: 0;
        }

        /* Flexbox layout to ensure footer stays at the bottom */
        .page-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100%; /* Makes the wrapper cover the full height */
        }

        .main-content {
            flex-grow: 1; /* Pushes the footer to the bottom */
        }

        .registration-form {
            padding: 20px;
            margin: auto;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="page-wrapper">
        <?php include ('includes/navvbar.php'); ?>

        <div class="main-content">
            <div class="registration-form">
                <h2>Login as Candidate</h2>
                <form action="auth/login_process.php" method="POST">
                    <!-- Username -->
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="Username" name="Username" placeholder="Enter username" required>
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
        </div>

  
    </div>
</body>
</html>
