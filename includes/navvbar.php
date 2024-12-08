<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: gray;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-size: 16px;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="logo">
            <a href="admin/adminlogin.php">Administrator</a>
        </div>
        <div class="links">
        <a href="index.php">Home</a>
            <a href="login.php">Login voter</a>
            <a href="register.php">Register as Voter</a>
            <a href="candidateReg.php">Register as Candidate</a>
            <a href="candidatelogin.php">Login as Candidate</a>
        </div>
    </div>

</body>
</html>