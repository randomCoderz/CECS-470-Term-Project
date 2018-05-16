#!/usr/local/php5/bin/php-cgi
<!DOCTYPE html>
<html>
    <head>
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
        <img src="image/img1.jpg" style="width:100%">
        <img src="image/img2.jpg" style="width:100%">
        <img src="image/img3.jpg" style="width:100%">
        <img src="image/img4.JPG" style="width:100%">
      </div>
      <div class="column">
        <img src="image/img5.JPG" style="width:100%">
        <img src="image/img6.JPG" style="width:100%">
        <img src="image/img7.JPG" style="width:100%">
        <img src="image/img8.JPG" style="width:100%">
      </div>
      <div class="column">
        <img src="image/img9.JPG" style="width:100%">
        <img src="image/img10.jpg" style="width:100%">
        <img src="image/img11.JPG" style="width:100%">
      </div>
    <div class="column">
        <img src="image/img13.jpg" style="width:100%">
        <img src="image/img12.jpg" style="width:100%">
    </div>
</div>
</main>

<?php include("footer.php") ?>
</body>
</html>
