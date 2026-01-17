<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Registration Form</h2>

<form>
    <label>Username</label><br>
    <input type="text" id="username">
    <span id="charCount">0</span>/3<br>
    <small id="status"></small><br><br>

    <label>Email</label><br>
    <input type="email"><br><br>

    <label>Password</label><br>
    <input type="password"><br><br>

    <button id="submitBtn" disabled>Register</button>
</form>

<script src="script.js"></script>
</body>
</html>
