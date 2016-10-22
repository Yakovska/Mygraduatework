<?	
$name 			= $_POST["name"];
$email 			= $_POST["email"];
$tel 			= $_POST["tel"];
$message		= $_POST["message"];
$userMessage	= $_POST["userMessage"];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$to 	= "irayakovskaya@gmail.com";
//$user_message = "Your message has been sent";
$admin_message = "<br>$name, $email, $tel, $userMessage";

mail($to, "New message", $admin_message, $headers);
//$headers - заголовки, стандартно
$messages = array("message" => "Your message has been sent");
print json_encode($messages);
exit;
?>