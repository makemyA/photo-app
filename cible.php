<?php
session_start();
$_SESSION['message']=$_POST['message'];
$_SESSION['image']=$_FILES['image']['name'];
$_SESSION['submit']=$_POST['submit'];
print_r($_FILES);
$file = "temp/" .basename($_FILES["image"]["name"]); /*renseigne le répertoire d'ou l'image va être envoyée*/
    move_uploaded_file($_FILES["image"]["tmp_name"], $file); /*bouge le temp vers le bon répertoire*/
$video = "temp/" .basename($_FILES["video"]["name"]);
    move_uploaded_file($_FILES["video"]["tmp_name"], $video);
    header('Location: page_streaming.php');
?>
