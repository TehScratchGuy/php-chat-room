<?php
$name = $_POST['name'];
$message = $_POST['message'];

$data = '<p>' . $name . ': ' . $message . '</p>' . PHP_EOL;
$fp = fopen('messages.php', 'a');
fwrite($fp, $data);


echo '<p>Message sent!</p><p><a href="dashboard.php">Click here to go back.</a></p>'


?>
