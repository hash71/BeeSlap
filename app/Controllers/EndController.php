<?php


namespace app\Controllers;


class EndController
{

    public function index()
    {
        $serial = 0;

        $data = "";
        for ($i = 1; $i <= 3; $i++) {
            $data .=
                "<tr>
        <td>" . ++$serial . "</td>
        <td>" . "Queen_" . $i . "</td>
        <td>100</td>
        <td>7</td>
        <td>0</td>
        <td>dead</td>
    </tr>";

        }
        for ($i = 1; $i <= 5; $i++) {
            $data .=
                "<tr>
        <td>" . ++$serial . "</td>
        <td>" . "Worker_" . $i . "</td>
        <td>75</td>
        <td>12</td>
        <td>0</td>
        <td>dead</td>
    </tr>";

        }
        for ($i = 1; $i <= 7; $i++) {
            $data .=
                "<tr>
        <td>" . ++$serial . "</td>
        <td>" . "Drone_" . $i . "</td>
        <td>50</td>
        <td>18</td>
        <td>0</td>
        <td>dead</td>
    </tr>";

        }
        return $data;
    }

}