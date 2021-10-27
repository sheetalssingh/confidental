<?PHP

$fname = $_POST["name1"];
//$lname = $_POST["lname"];
$mobile_no = $_POST["mobile_no1"];
$email = $_POST["email1"];
$msg = $_POST["msg1"];
$to = "ssme0801@gmail.com";
$subject = "New Message from confi-denta.in";
$headers = "From: $name1\n";

$message = "A visitor to your site has Sent Message from confi-denta.in.\n

Email Address: $email;
Name : $fname;

Mobile No. : $mobile_no
Email : $email
Message : $msg";
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