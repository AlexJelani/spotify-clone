<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Spotify Clone</title>
</head>
<body>
    <div id="inputContainer">
    <form action="loginForm" action="register.php" method="POST">
        <h2>Login to your account</h2>
        <p> 
            <label for="loginUsername"></label>
            <input type="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
        </p>
        <p>
            <label for="Password"></label>
        <input id="loginPassword" name="loginUsername" type="password"  required>
        </p>
        <button type="submit" name="loginButton" >LOG IN</button>
    </form>
    </div>
</body>
</html>