<?php
session_start();

require '../../vendor/autoload.php';

$reset = new \App\Controllers\ResetController();
$result = $reset->index();

echo $result;