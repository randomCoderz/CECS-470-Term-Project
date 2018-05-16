#!/usr/local/php5/bin/php-cgi
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Home | Beach Launch Team</title>
    
       <link rel="stylesheet" href="css/style.css"> 
       <link rel="stylesheet" href="css/menu.css">

        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/contact.css">
    </head>

    <body>
    <?php include("navbar.php") ?>
        <div class="container">
            <main>
                <?php
                $fname =$lname = $email = $phone = $message = "";
                $fnameError = $lnameError = $emailError = $phoneError = "";


                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $valid = true;

                    if (empty($_POST["fname"])) {
                        $fnameError = "First Name is required";
                        $valid = false;
                    } else {
                        $fname = test_input($_POST["fname"]);

                        if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
                            $fnameError = "Only letters and white space allowed";
                            $valid = false;
                        }
                    }

                    if (empty($_POST["lname"])) {
                        $lnameError = "Last Name is required";
                        $valid = false;
                    } else {
                        $lname = test_input($_POST["lname"]);

                        if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
                            $lnameError = "Only letters and white space allowed";
                            $valid = false;
                        }
                    }


                    if (empty($_POST["email"])) {
                        $emailError = "Email is required";
                        $valid = false;
                    } else {
                        $email = test_input($_POST["email"]);

                        if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/",$email)) {
                            $emailError = "Invalid Email Format";
                            $valid = false;
                        }
                    }



                    if (empty($_POST["phone"])) {
                        $phoneError = "Phone number is required";
                        $valid = false;
                    } else {
                        $phone = test_input($_POST["phone"]);

                        if (!preg_match( "/^[1][0-9]{10}$/",$phone)) {
                            $phoneError = "Your phone number start with 1 and with 10 digits number, Example : 15622902642";
                            $valid = false;
                        }
                    }

                    if (empty($_POST["message"])) {
                        $message = "";
                    } else {
                        $message = test_input($_POST["message"]);
                    }


                    if($valid)
                    {

                        $to = 'ravimane1316@gmail.com';


                        $subject = "Contact Us";
                        $message = "Message:".$_POST['message'];
                        $from = "From: ".$_POST['email'];

                        $send = mail($to,$subject,$message,$from);
                        if($send)
                        {
                            echo "Your information has been mailed successfully. We will contact you soon...!!!";
                        }


                    }
                    else if(!$valid)
                        echo "Failed to send message.Please try again";

                }

                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                ?>

                <h2>Send Us a Message</h2>
                <p>If you are interested in joining Beach Launch, or if you simply would like more information, please fill out this contact form today.</p>

                <p><div class="Error">* required field</div></p>
                <form name="RegForm" id="RegForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                    <div class="classinput">  <input type="text" id="fname" name="fname" placeholder="First Name"><label for="fname">First Name:</label>
                        <span class="Error">* <?php echo $fnameError;?></span>
                        <br><br>
                    </div>

                    <div class="classinput">
                        <input type="text" name="lname" id="lname" placeholder="Last Name"><label for="lname">Last name:</label>
                        <span class="Error">* <?php echo $lnameError;?></span>
                        <br><br>
                    </div>

                    <div class="classinput">
                        <input type="text" name="email" id="email" placeholder="E-mail"><label for="email">Email:</label>
                        <span class="Error">* <?php echo $emailError;?>  </span>
                        <br><br>
                    </div>

                    <div class="classinput">
                        <input type="text" name="phone" id="phone" placeholder="Phone"><label for="phone">Phone:</label>
                        <span class="Error">* <?php echo $phoneError;?> </span>
                        <br><br>
                    </div>

                    <div class="classinput">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="5" cols="40" placeholder="Enter your message here..."></textarea>
                        <br><br>
                    </div>


                    <div >
                        <button  class="button" type="submit" value="Submit">Submit</button>
                        <button class="button" type="reset" value="Reset">Reset</button>
                    </div>
                </form>

            </main>
        <?php include("footer.php") ?>
        </div>
    <script src="js/form-validation.js"></script>
    </body>
</html>