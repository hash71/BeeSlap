<?php
session_start();

require '../../vendor/autoload.php';

$hit = new \App\Controllers\HitController();
$result = $hit->index();

echo $result;