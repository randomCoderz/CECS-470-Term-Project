#!/usr/local/php5/bin/php-cgi
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Gallery | Beach Launch Team</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/mosaic.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/footer.css">
    </head>

<body>


<?php include("navbar.php") ?>

<h2>Gallery</h2>
<!-- Photo Grid -->
<main>
<div class="row"> 
      <div class="column">
        <img src="image/img1.jpg" alt="Cristian teaching." style="width:100%">
        <img src="image/img2.jpg" alt="Corner view of rocket." style="width:100%">
        <img src="image/img3.jpg" alt="BLT Team picture." style="width:100%">
        <img src="image/img4.JPG" alt="Creating in darkness." style="width:100%">
      </div>
      <div class="column">
        <img src="image/img5.JPG" alt="Plugging wires." style="width:100%">
        <img src="image/img6.JPG" alt="View of rocket at night." style="width:100%">
        <img src="image/img7.JPG" alt="Rocket progress." style="width:100%">
        <img src="image/img8.JPG" alt="Loading rocket inside container." style="width:100%">
      </div>
      <div class="column">
        <img src="image/img9.JPG" alt="Team picture 2." style="width:100%">
        <img src="image/img10.jpg" alt="View of rocket at night 2." style="width:100%">
        <img src="image/img11.JPG" alt="Cutting carbon fiber." style="width:100%">
      </div>
    <div class="column">
        <img src="image/img13.jpg" alt="Working together." style="width:100%">
        <img src="image/img12.jpg" alt="Inspecting rocket." style="width:100%">
    </div>
</div>
</main>

<?php include("footer.php") ?>
</body>
</html>
