<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../asset/favicon-32x32.png">
</head>
<body>
    <section id="login">
        <div class="login-left">
            <div class="text-hero">

            </div>
            <img src="" alt="hero-login">
        </div>

        <div class="login-right">
            <div class="login-form">
                <img src="" alt="logo">

                <form action="../config/proses-login.php" method="post">
                    <div class="text-login">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username">

                        <label for="password">Password</label>
                        <input type="password" name="password" id="username" placeholder="********">
                    </div>
                    <div class="button">
                        <button type="reset">Cancel</button>
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>