<!--#!/usr/local/php5/bin/php-cgi-->

<?php
// Establish connection
$connection = mysqli_connect("cecs-db01.coe.csulb.edu", "cecs470o30", "eing7a");

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
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/team.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
          integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
</head>


<body>
<?php include("navbar.php") ?>

    <div class="container">
        <main>

            <div id="about">
                <h2>About Us</h2>
                <p>Beach Launch Team is a university student group at Cal State Long Beach dedicated to designing,
                    building,
                    testing, and launching liquid fuel rockets.</p>
            </div>

            <section class="meet-the-team container pad">

                <h1>Club Officers</h1>

                <?php
                while ($row = mysqli_fetch_assoc($result)) {

                    echo '<div class="member-profile">';
                    echo '<i class="fas fa-user-circle avatar-icon"></i>';
                    echo '<h3>' . $row["FirstName"] . ' ' . $row["LastName"] . '</h3>';
                    echo '<h4>' . $row["Major"] . '</h4>';
                    echo '<h4>This is dynamically pulled into the page...</h4>';
                    echo '</div>';
                }
                ?>

            </section>

        </main>
    <?php include("footer.php") ?>
</div>
</body>
</html>