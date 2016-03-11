<?php
namespace App\Controllers;

class HitController
{
    public function index()
    {
        $data = "";
        $class = "";
        $end = 0;//end will be 1 when there will be nothing to update

        /*this block is put before while block
        for one extra click
        it can be put under the while loop as well.
        its just a matter of preference
        */
        if (($_SESSION["q1"] + $_SESSION["q2"] + $_SESSION["q3"]) <= 0) {
            $end = 1;
            $data = "end";
        }
        while (!$end) {
            $flag = 1;//using flag to determine which row gets updated so others rows doesnt need more calcualtion
            $serial = 0;
            $data = "";
            $rand = rand(1, 15);
            for ($i = 1; $i <= Queen::$total; $i++) {
                $index = "q" . $i;
                ++$serial;
                if ($flag) {
                    if ($serial === $rand && $_SESSION[$index] > 0) {
                        $flag = 0;
                        $_SESSION[$index] -= Queen::$hp;
                        if ($_SESSION[$index] <= 0) {
                            $_SESSION[$index] = 0;
                        }
                    }
                }
                if ($_SESSION[$index] > 0) {
                    $condition = "alive";
                } else {
                    $condition = "dead";
                }

                $data .=
                    "<tr class= " . $class . ">
        <td>" . $serial . "</td>
        <td>" . "Queen_" . $i . "</td>
        <td>" . Queen::$initial . "</td>
        <td>" . Queen::$hp . "</td>
        <td>" . $_SESSION[$index] . "</td>
        <td>" . $condition . "</td>
    </tr>";
            }
            for ($i = 1; $i <= Worker::$total; $i++) {
                $index = "w" . $i;
                ++$serial;
                if ($flag) {
                    if ($serial === $rand && $_SESSION[$index] > 0) {
                        $flag = 0;
                        $_SESSION[$index] -= Worker::$hp;
                        if ($_SESSION[$index] <= 0) {
                            $_SESSION[$index] = 0;
                        }
                    }
                }
                if ($_SESSION[$index] > 0) {
                    $condition = "alive";
                } else {
                    $condition = "dead";
                }
                $data .=
                    "<tr class= " . $class . ">
        <td>" . $serial . "</td>
        <td>" . "Worker_" . $i . "</td>
                <td>" . Worker::$initial . "</td>
        <td>" . Worker::$hp . "</td>
        <td>" . $_SESSION[$index] . "</td>
        <td>" . $condition . "</td>
    </tr>";
            }
            for ($i = 1; $i <= Drone::$total; $i++) {
                $index = "d" . $i;
                ++$serial;
                if ($flag) {
                    if ($serial === $rand && $_SESSION[$index] > 0) {
                        $flag = 0;
                        $_SESSION[$index] -= Drone::$hp;
                        if ($_SESSION[$index] <= 0) {
                            $_SESSION[$index] = 0;
                        }
                    }
                }
                if ($_SESSION[$index] > 0) {
                    $condition = "alive";
                } else {
                    $condition = "dead";
                }
                $data .=
                    "<tr class= " . $class . ">
        <td>" . $serial . "</td>
        <td>" . "Drone_" . $i . "</td>
                <td>" . Drone::$initial . "</td>
        <td>" . Drone::$hp . "</td>
        <td>" . $_SESSION[$index] . "</td>
        <td>" . $condition . "</td>
    </tr>";
            }
            if ($flag == 0) {
                break;
            }
        }
        return $data;
    }
}