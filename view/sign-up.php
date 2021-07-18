<?php
$title = ' Sign Up || Login System';
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
            <h1>Sign Up</h1>
            <form action=<?=page::url().'/reg'?> method="POST">
                <lable class="input">
                    <input type="text" name="fname" id="l-u-fname" placeholder=" ">
                    <span>First Name</span>
                </lable></br>
                <lable class="input">
                    <input type="email" name="lname" id="l-u-lname" placeholder=" ">
                    <span>Last Name</span>
                </lable></br>
                <lable class="input">
                    <input type="email" name="username" id="l-u-email" placeholder=" ">
                    <span>Enter Email</span>
                </lable></br>
                <lable class="input">
                    <input type="password" name="password" id="l-u-pass" placeholder=" ">
                    <span>Enter Password</span>
                </lable></br>
                <lable class="input">
                    <input type="password" name="repassword" id="l-u-repass" placeholder=" ">
                    <span>Re-Enter Password</span>
                </lable></br>
                <input type="submit" value="Login">
            </form>
            </div>
        </div>
    </main>
    <?php page::footer();?>
</body>
</html>