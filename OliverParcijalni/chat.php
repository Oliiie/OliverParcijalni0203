<?php



require_once "core/init.php";

use Config\Config;
use DB\Db;

$bazaSingleton = Db::getInstance(Config::get("dbconfig"));

$bazaSingleton->Login();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Chat Soba</title>
</head>
<body>
    <h1> <?php echo $_SESSION["username"] ?> Chats </h1>
    <br>

<?php

$messages = $bazaSingleton->chatchat($_SESSION["username"]);
foreach($messages as $message){
    $brojac++;
    echo "<p>[" . $brojac . "] -> " . "Sent by: " . $message["nickname"] . "" . $message["message"] . "</p>"; 
    
}
?>
</body>
</html>