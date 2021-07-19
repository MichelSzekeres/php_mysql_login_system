<?php
$title = 'Index Page || Login System';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?=page::meta()?>
    <title><?=$title?></title>
    <?=page::style()?>
    <?=page::javascript()?>
</head>
<body>
    <?=page::header()?>
    <main>
        <?php if(user::is_logged_in()){ ?>

            <h1>Welcome <?=$_SESSION['first_name'].' '.$_SESSION['last_name'];?> </h1>
            
        <?php }else{ ?>

            <h1>Login System Index Page</h1>
            
        <?php } ?>
    </main>
    <?=page::footer()?>
</body>
</html>
