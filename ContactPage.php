#!/usr/local/php5/bin/php-cgi

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Contact | Beach Launch Team</title>

       <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="ContactPage.css">
    </head>
    <body>
        <div class="container">
            <header>
            </header>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="team.php">Team Members</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>

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





<script>
function validatemyform()                                   
{
    var fname = document.forms["RegForm"]["fname"]; 
	var lname = document.forms["RegForm"]["lname"];  	
	
    var email = document.forms["RegForm"]["email"]; 
var phone= document.forms["RegForm"]["phone"]; 

   
  
    if (fname.value == "")                                 
    {
        window.alert("Please enter first name.");
        fname.focus();
        return false;
    }
	
	if (lname.value == "")                                 
    {
        window.alert("Please enter last name.");
        lname.focus();
        return false;
    }
	
	
    
    if (email.value == "")                                  
    {
        window.alert("Please enter valid e-mail address");
        email.focus();
        return false;
    }
  
    if (email.value.indexOf("@", 0) < 0)                
    {
        window.alert("Please enter a valid e-mail address");
        email.focus();
        return false;
    }
  
    if (email.value.indexOf(".", 0) < 0)                
    {
        window.alert("Please enter a valid e-mail address");
        email.focus();
        return false;
    }
  
    if (phone.value == "")                          
    {
        window.alert("Please enter your website.");
       phone.focus();
        return false;
    }
	
	
  
    return true;
}</script>


<h2>Contact Us</h2>

<p><div class="Error">* required field</div></p>
<form  name="RegForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  onsubmit="return validatemyform()"> 

		<div class="classinput">  <input type="text" name="fname" placeholder="First Name">
		  <span class="Error">* <?php echo $fnameError;?></span>
		  <br><br>
		 </div> 

		 <div class="classinput"> 
		   <input type="text" name="lname" placeholder="Last Name">
		  <span class="Error">* <?php echo $lnameError;?></span>
		  <br><br>
		  </div> 

		  <div class="classinput"> 
		   <input type="text" name="email" placeholder="E-mail">
		  <span class="Error">* <?php echo $emailError;?>  </span>
		  <br><br>
		  </div> 
		  
		  <div class="classinput"> 
		  <input type="text" name="phone" placeholder="Phone">
		  <span class="Error">* <?php echo $phoneError;?> </span>
		  <br><br>	
		  </div> 
		  
		  <div class="classinput"> 
			<textarea name="message" rows="5" cols="40" placeholder="Message"></textarea>
		  <br><br>
			</div> 
			
			
			<div >	<button  class="button" type="submit" value="Submit">Submit</button>
									<button class="button" type="reset" value="Reset">Reset</button>
			
			</div>
</form>
		
            </main>
            <footer>
                <p>Latest Update: <em><!--#echo var="LAST_MODIFIED"--></em> </p>
                <p>Students: <em>Raviraj Mane:<span>016670249</span></em></p>
            </footer>
        </div>
    </body>
</html>


