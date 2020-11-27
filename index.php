<?php


use barysheva\BaryshevaExeption;
use barysheva\MyLog;

include "core/EquationInterface.php";
include "core/LogAbstract.php";
include "core/LogInterface.php";

include "barysheva/LEquation.php";
include "barysheva/MyLog.php";
include "barysheva/QuEquation.php";
include "barysheva/BaryshevaExeption.php";

ini_set("display_errors", 1);
error_reporting(-1);

$n = new barysheva\QuEquation();
try {
    $version = file_get_contents('./version/version.txt');
    MyLog::log("Версия программы: ".$version);
    echo "Enter 3 values" . "\n";

    $a = readline();
    $b = readline();
    $c = readline();

    barysheva\MyLog::log("You have entered the equation: " . $a . "x^2 + " . $b . "x + " . $c);
    $x = $n->solve($a, $b, $c);
    $str = implode(",", $x);
    barysheva\MyLog::log("There are the roots: " . $str);
} catch (BaryshevaExeption $e) {
    barysheva\MyLog::log($e->getMessage());

}
barysheva\MyLog::write();