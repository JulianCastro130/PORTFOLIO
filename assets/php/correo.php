<?php
if(isset($_POST["submit"])) {
$recipient = "cococastro619@gmail.com"; //my email
echo $name = $_POST ["yourName"];
echo $email = $_POST["yourEmail"];
echo  $message = $_POST["yourMessage"];

 $mailBody="Name: $name\nEmail: $email\n\n$message"; 

 mail($recipient, $mailBody, "From: $name <$email>");

echo $gracias="<p>Gracias! Me voy a comunicar contigo a la brevedad.</p>";

}
?>
