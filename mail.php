<?php 
$name = $_POST['name'];
$mobile  = $_POST['mobile'];
$email = $_POST['email'];
$message = $_POST['message'];

$msg = "<html><body>";
$msg .= "<h2>Hello Aldousphysio Rehab,</h2>";
$msg .= "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse;'>";
$msg .= "<tr><th>Name</th><td>{$name}</td></tr>";
$msg .= "<tr><th>Mobile</th><td>{$mobile}</td></tr>";
$msg .= "<tr><th>Email</th><td>{$email}</td></tr>";
$msg .= "<tr><th>Message</th><td>{$message}</td></tr>";
$msg .= "</table>";
$msg .= "<br><br>";
$msg .= "<p>Regards,<br>{$name}</p>";
$msg .= "</body></html>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'Cc:yamee.mari@gmail.com' . "\r\n";

mail("devkesavan1999@gmail.com","Enquiry from " . $name ,$msg ,$headers);
header("Location: contact.html");
exit();
?>