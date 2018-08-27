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
$a= scandir("temp/");
for ($i=0; $i<count($a);$i++ ){
    if(strlen($a[$i])>10){ /*Capture que les images qui ont une string de plus de 10 caractères*/
    echo'<div class="box-image"><img src="temp/'.$a[$i].'"width="10%" height="auto"alt="from camera"></div>';
    echo'<div class="text-image">'.$_SESSION["message"].'</div>';
    }
}
?>
</div>
</body>
</html>