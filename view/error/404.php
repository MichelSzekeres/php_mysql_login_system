<?php
header('HTTP/1.1 404 Not Found');
$title = 'Page Not Found';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <h1>404 Not Found</h1>
    <h2>Page do not exists or you dont have permission.</h2>
    <p>Please return to main page of this website.</p>
</body>
</html>
<?php die(); ?>
