<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body id="body-panorama">
<div id="box-images">
<?php
session_start();
    echo'<div><p>Votre photo a bien été envoyée. Veuillez regarder l écran dans quelques instants.</p></div>';
    header('Refresh:3; url=index.php');
?>
</div>
</body>
</html>