<?php

$EmailFrom = "Appointments";
$to = "emergemedspaandsalon@gmail.com";
$Subject = "New Appointment";
$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$date = Trim(stripslashes($_POST['date']));
$dropdown = $_POST['dropdown'];

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$formcontent=" From: $name \n Phone Number: $email \n Date: $date \n Type: $dropdown \n";

// send email
$success = mail($to, $Subject, $formcontent, $EmailFrom) or die("Error!");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=../thanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>
