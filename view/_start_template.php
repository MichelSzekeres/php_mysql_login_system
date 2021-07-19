<?php
$title = 'Template';
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
    <main></main>
    <?php page::footer();?>
</body>
</html>
