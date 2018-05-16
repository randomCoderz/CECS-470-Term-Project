<!--#!/usr/local/php5/bin/php-cgi-->

<?php
// Establish connection
$connection=mysqli_connect("cecs-db01.coe.csulb.edu","cecs470o30","eing7a");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Query the Database
$sql = "SELECT  FirstName, LastName, Major FROM cecs470o30.Club_Officers";
$result = $connection->query($sql);

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Home | Beach Launch Team</title>
    
       <link rel="stylesheet" href="css/style.css"> 
       <link rel="stylesheet" href="css/home-styles.css">
       <link rel="stylesheet" href="css/menu.css">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    </head>
    
    <body>
        <div class = "bg"></div>
        <div class="container">
            <header>
                <nav role="navigation">
                    <div id="menuToggle">
                        <input type="checkbox"/>
                        <span></span>
                        <span></span>
                        <span></span>
                    <ul id="menu">
                      <a href="#"><li>Home</li></a>
                      <a href="#"><li>About Us</li></a>
                      <a href="#"><li>Info</li></a>
                      <a href="contact.html"><li>Contact</li></a>
                    </ul>
                    </div>
                </nav>
            </header>

            <main>

 


	
                <section class="meet-the-team">
                    <h1>Meet the Team</h1>

                    <?php
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo '<div class="member-profile">';
                            echo '<i class="fas fa-user-circle avatar-icon"></i>';
                            echo '<h3>'.$row["FirstName"].' '.$row["LastName"].'</h3>';
                            echo '<h4>'.$row["Major"].'</h4>';
                            echo '</div>';
                        }
                    ?>

                    <div class="member-profile">
                        <i class="fas fa-user-circle avatar-icon"></i>
                        <h3>Derek Honkawa</h3>
                        <h4>Assistant Lead</h4>
                    </div>

                  <div class="member-profile">
                        <i class="fas fa-user-circle avatar-icon"></i>
                        <h3>Joshua Jenson</h3>
                        <h4>Propulsion Engineer</h4>
                    </div>

                    <div class="member-profile">
                        <i class="fas fa-user-circle avatar-icon"></i>
                        <h3>Candyce Palsis</h3>
                        <h4>Relations Officer</h4>
                    </div>

                    <div class="member-profile avatar-icon">
                        <i class="fas fa-user-circle avatar-icon"></i>
                        <h3>Hunter Ly</h3>
                        <h4>Construction Leader</h4>
                    </div>

                    <div class="member-profile">
                        <i class="fas fa-user-circle avatar-icon"></i>
                        <h3>Angelica Luquin</h3>
                        <h4>Construction Leader</h4>
                    </div>
                </section>
            </main>
            <footer>
                <p>Latest Update: <em><!--#echo var="LAST_MODIFIED"--></em> </p>
                <p>Web Developers:&emsp;</p> 
                <p><em>Isaac Chavez:&emsp;<span>013756039</span></em></p>
                <p><em>Ahmed Hamed:&emsp;<span>013340442</span></em></p>
                <p><em>Raviraj Mehta:&emsp;<span>013340442</span></em></p>
                <p><em>Aman Mehta:&emsp;<span>013340442</span></em></p>
                <p><em>Juan David Lopez:&emsp;<span>013101593</span></em></p>
            </footer>
    </body>
</html>