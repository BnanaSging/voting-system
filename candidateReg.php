<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register as Candidate</title>
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
            max-width: 600px;
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

        input[type="text"], input[type="password"], input[type="date"], input[type="file"], select {
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
                <h2>Register as Candidate</h2>
                <form action="auth/candidate_regprocess.php" method="POST" enctype="multipart/form-data">
                    <!-- Full Name -->
                    <div class="form-group">
                        <label for="fullname">Full Name:</label>
                        <input type="text" id="fullname" name="Name" placeholder="Enter your full name" required>
                    </div>

                    <!-- Username -->
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="Username" placeholder="Choose a username" required>
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password:</label>
                        <input type="password" id="confirmpassword" name="confirm_password" placeholder="Confirm your password" required>
                    </div>

                    <!-- Partylist -->
                    <div class="form-group">
                        <label for="partylist">Partylist:</label>
                        <select id="partylist" name="Partylist" required>
                            <option value="Blue">BLUE</option>
                            <option value="Red">RED</option>
                        </select>
                    </div>

                    <!-- Position -->
                    <div class="form-group">
                        <label for="Position">Position:</label>
                        <select id="Position" name="Position" required>
                            <option value="President">President</option>
                            <option value="Vice President">Vice President</option>
                            <option value="Muse">Muse</option>
                            <option value="Escort">Escort</option>
                        </select>
                    </div>

                    <!-- Birthday -->
                    <div class="form-group">
                        <label for="birthday">Birthday:</label>
                        <input type="date" id="birthday" name="birthday" required>
                    </div>

                    <!-- Political Platform -->
                    <div class="form-group">
                        <label for="political_platform">Political Platform:</label>
                        <input type="text" id="political_platform" name="PoliticalPlatform" placeholder="Describe your platform" required>
                    </div>

                    <!-- Profile Picture -->
                    <div class="form-group">
                        <label for="profile_picture">Image:</label>
                        <input type="file" id="image" name="Image" accept="image/*" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn">Register</button>
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
