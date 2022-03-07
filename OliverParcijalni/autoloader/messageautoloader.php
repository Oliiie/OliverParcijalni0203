<?php
require_once "../core/init.php";

use Config\Config;
use DB\Db;

if(isset($_POST)){
    $bazaSingleton = Db::getInstance(Config::get("dbconfig"));

    $message = $_POST["message"];

    echo $message;

    $bazaSingleton->send($message);
}