<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Music Player</title>
    <link rel="stylesheet" type="text/css" href="styleD.css">
</head>
<body>
<div class="header">
    <h2>Login</h2>
</div>

<form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <div class="text">
    <p>
        If you are not a member <a href="register.php">Sign up</a>
    </p>
    </div>
</form>
</body>
</html>
