<?PHP

$fname = $_POST["fname"];
//$lname = $_POST["lname"];
$mobile_no = $_POST["mobile_no"];
$email = $_POST["email"];
$date = $_POST["date"];
$time = $_POST["time"];
$to = "ssme0801@gmail.com";
$subject = "New Appointment from confi-denta.in";
$headers = "From: $name\n";

$message = "A visitor to your site has Booked and Appointment from confi-denta.in.\n

Email Address: $email;
Name : $fname;

Mobile No. : $mobile_no
Email : $email
Date : $date
Time : $time";
//$user = "$email";
//$usersubject = "Thank You";
//$userheaders = "From: you@youremailaddress.com\n";
//$usermessage = "Thank you for subscribing to our mailing list.";
mail($to,$subject,$message,$headers);
// header('Location: thank_you.html');
//mail($user,$usersubject,$usermessage,$userheaders);

//  $thank_you = "Your appointment has been booked. <br>We will Contact you soon";
//  echo  "$thank_you .";

?>