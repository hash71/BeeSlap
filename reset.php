<?php
session_start();
session_reset();
$_SESSION = [
    "q1" => 100,
    "q2" => 100,
    "q3" => 100,
    "w1" => 75,
    "w2" => 75,
    "w3" => 75,
    "w4" => 75,
    "w5" => 75,
    "d1" => 50,
    "d2" => 50,
    "d3" => 50,
    "d4" => 50,
    "d5" => 50,
    "d6" => 50,
    "d7" => 50
];


$serial = 0;

$data = "";
for ($i = 1; $i <= 3; $i++) {
    $data .=
        "<tr>
        <td>" . ++$serial . "</td>
        <td>" . "Queen_" . $i . "</td>
        <td>100</td>
        <td>7</td>
        <td>100</td>
        <td>alive</td>
    </tr>";

}
for ($i = 1; $i <= 5; $i++) {
    $data .=
        "<tr>
        <td>" . ++$serial . "</td>
        <td>" . "Worker_" . $i . "</td>
        <td>75</td>
        <td>12</td>
        <td>75</td>
        <td>alive</td>
    </tr>";

}
for ($i = 1; $i <= 7; $i++) {
    $data .=
        "<tr>
        <td>" . ++$serial . "</td>
        <td>" . "Drone_" . $i . "</td>
        <td>50</td>
        <td>18</td>
        <td>50</td>
        <td>alive</td>
    </tr>";

}
echo $data;
