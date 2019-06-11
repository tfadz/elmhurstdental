<?php
$name = $_POST['name'];
$email = $_POST['email'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Message: $message";
$recipient = "emilybartelldds@gmail.com";
$subject = "Message from Elmhurst Family Dentistry";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<div style='   border-radius: 5px;
    border: 2px solid #CCC;
    font-family: Arial, san-serif;
    font-size: 20px;
    height: 50px;
    margin: 50px auto;
    max-width: 500px;
    padding: 50px 20px;
    text-align: center;
    width: auto;'>Thank You for contacting us!" . " -" . "<a href='http://www.elmhurstfamilydentistry.com/' style='text-decoration:none;color:#d88a44;'> Return to the homepage</a></div>";
?>
