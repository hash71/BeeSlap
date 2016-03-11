<?php
session_start();
session_reset();

require '../../vendor/autoload.php';

$end = new \App\Controllers\EndController();
$result = $end->index();

echo $result;