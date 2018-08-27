<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="page_streaming.css">
    <title>Document</title>
</head>
<body>
<?php
session_start();

/* print_r($_SESSION); */

$file = "temp/" .basename($_SESSION["image"]);
try 
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=wedding;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
/* $resultat = $bdd->query('SELECT image FROM photos ORDER BY id DESC LIMIT 1'); */
$resultat = $bdd->query('SELECT * FROM photos');
/* print_r($resultat); */
/* echo $resultat; */
$donnees = $resultat->fetch();
/* print_r($donnees); */
/* print_r($donnees['image']); */
echo count($donnees['image']);
/* echo
'<div>
    <img src="temp/'.$donnees['image'].'" id ="img2" class="img-streaming"alt="from camera">
</div>'; */
echo
'<div id="container">
    <div id="container-image">
        <div id="box-black">
            <div id="box-image">
            ';
while ($donnees = $resultat->fetch())
{

/* print_r($donnees['image']); */

echo
'
    <img src="temp/'.$donnees['image'].'" id ="img" class="img-streaming" alt="from camera">
';

}
echo 
'       </div>  
    </div>  
</div>';
$resultat->closeCursor();

/*ADD photos to DB*/
 if(isset($_SESSION["submit"])){
     sleep(5);
   /*  echo($_SESSION['image']);
    print_r($_SESSION); */
    $heure = date("H:i");
    echo $heure;
     $bdd->query('INSERT INTO photos VALUES ("'.$_SESSION['image'].'", "'.$heure.'")');
     unset($_SESSION["submit"]);
     
     /* unset($_POST['submit']); */
      /* header('Refresh:3; url=index.php'); */
    /*  header('location:index.php?5'); */
  }
  ?> 
   <script src="ajax.js"></script>
  </body>
</html>