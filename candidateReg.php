<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register as Candidate</title>
</head>
<body>
    <?php include ('includes/navvbar.php'); ?>
    
    <div class="registration-form">
        <h2>Register as Candidate</h2>
        <form action="auth/candidate_regprocess.php" method="POST">

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

            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirmpassword" name="confirm_password" placeholder="confirm your password" required>
            </div>

           

            <div class="form-group">
    <label for="partylist">Partylist:</label>
    <select id="partylist" name="Partylist" required>
        <option value="Blue">BLUE</option>
        <option value="Red">RED</option>

    </select>
</div>

           
            <div class="form-group">
    <label for="Position">Position:</label>
    <select id="Position" name="Position" required>
        <option value="President">President</option>
        <option value="Vice President">Vice President</option>
        <option value="Muse">Muse</option>
        <option value="Escort">Escort</option>

            
            <div class="form-group">
             <label for="birthday">Birthday:</label>
             <input type="date" id="birthday" name="birthday" placeholder="Select your birthday" required>
            </div>

            
            <div class="form-group">
                <label for="Political Platform">Political Platform:</label>
                <input type="text" id="political_platform" name="PoliticalPlatform" placeholder="platform" required>
            </div>
            
            <div class="form-group">
         <label for="profile_picture">Image:</label>
          <input type="file" id="image" name="Image" accept="image/*" required>
            </div>

           

            <!-- Submit Button -->
            <button type="submit" class="btn">Register</button>
        </form>
    </div>

   
</body>
</html>


