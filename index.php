
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>WEDDING</h1>
    <h1>JU & MARTI</h1>

   <div id="container-main">
        <div id="container-image">
            <div id="box-black">
                <div id="box-image">
                    <img src="" id="img"alt="from camera">
                </div>
            </div>
            <form action="cible.php" id ="myform" method="post"enctype="multipart/form-data">
                <!-- <div id="message" class="hide">
                    <label for="text"></label>
                    <input type="text" name="message" id="text" placeholder="Your Message" required>
                </div> -->
                <div id="buttons-photo">
                    <label id ="takepicture"class="button"for="capture">
                        <input type="file"id="capture" name = "image" accept="image/*" capture>
                        PHOTO
                    </label>
                    <div id="loading"class="button hide">LOADING</div>
            <!--  <input type="file" id="capture-video" name="video" accept="video/*" capture> -->
                    <button id="submit"class="button hide"type="submit" name="submit">VALIDER</button>
                </div>
            </form>
        </div>
    </div>
   <!--  <p><video width="150" height="90" controls>
        <source id="video"src ="" type="video/*">
        Video
    </video></p> -->
    <p><?php $b = scandir("temp/");
             /* print_r($b); */  ?>        
    </p>
    <script src="script.js"></script>
  
</body>
</html>


<!-- <video width="320" height="240" controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.
</video> -->