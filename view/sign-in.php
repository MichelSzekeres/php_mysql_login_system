<?php
$title = 'Sign In || Login System';
user::login();
user::is_logged_in() ? header("Location: ".page::url()).die(): false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php page::meta();?>
    <title><?=$title?></title>
    <?php page::style();?>
    <?php page::javascript();?>
</head>
<body>
    <?php page::header();?>
    <main>
        <div class="wrap">
            <div class="inner">
            <h1>Sign In</h1>
            <form action=<?=page::url().'/sign-in'?> method="POST">
                <lable class="input">
                    <input type="email" name="username" id="l-u-name" placeholder=" ">
                    <span>Enter Email</span>
                </lable></br>
                <lable class="input">
                    <input type="password" name="password" id="l-u-pass" placeholder=" ">
                    <span>Enter Password</span>
                </lable></br>
                <input type="submit" value="Login">
            </form>
            </div>
        </div>
    </main>
    <?php page::footer();?>
</body>
</html>
