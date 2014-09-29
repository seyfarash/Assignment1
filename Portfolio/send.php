<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Email Sent</title>
</head>

<body>


<?php

//store the user input in a variable
$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];


//submit a message to the email that was entered
mail($email, $name, $message, 'From:200263939@student.georgianc.on.ca');


?>


</body>

</html>
