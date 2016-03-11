<?php


namespace App\Controllers;


class ResetController
{
    public function index()
    {
        $_SESSION = $this->sessionDefaults();
        $serial = 0;
        $data = "";
        for ($i = 1; $i <= Queen::$total; $i++) {
            $data .=
                "<tr>
        <td>" . ++$serial . "</td>
        <td>" . "Queen_" . $i . "</td>
        <td>" . Queen::$initial . "</td>
        <td>" . Queen::$hp . "</td>
        <td>" . Queen::$initial . "</td>
        <td>alive</td>
    </tr>";

        }
        for ($i = 1; $i <= Worker::$total; $i++) {
            $data .=
                "<tr>
        <td>" . ++$serial . "</td>
        <td>" . "Worker_" . $i . "</td>
        <td>" . Worker::$initial . "</td>
        <td>" . Worker::$hp . "</td>
        <td>" . Worker::$initial . "</td>
        <td>alive</td>
    </tr>";

        }
        for ($i = 1; $i <= Drone::$total; $i++) {
            $data .=
                "<tr>
        <td>" . ++$serial . "</td>
        <td>" . "Drone_" . $i . "</td>
        <td>" . Drone::$initial . "</td>
        <td>" . Drone::$hp . "</td>
        <td>" . Drone::$initial . "</td>
        <td>alive</td>
    </tr>";

        }
        return $data;
    }

    /**
     * @return array
     */
    private function sessionDefaults()
    {
        return [
            "q1" => Queen::$initial,
            "q2" => Queen::$initial,
            "q3" => Queen::$initial,
            "w1" => Worker::$initial,
            "w2" => Worker::$initial,
            "w3" => Worker::$initial,
            "w4" => Worker::$initial,
            "w5" => Worker::$initial,
            "d1" => Drone::$initial,
            "d2" => Drone::$initial,
            "d3" => Drone::$initial,
            "d4" => Drone::$initial,
            "d5" => Drone::$initial,
            "d6" => Drone::$initial,
            "d7" => Drone::$initial
        ];
    }

}