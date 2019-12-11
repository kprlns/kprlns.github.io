<?php
include ("./csv_utils.php");

$name = implode("", $_GET);//getBookName($nameId);
$csv = array_map('str_getcsv', file('./data.csv'));
sleep(0.1);
echo "<div>";
echo "<span>";
echo (getGengre($name, $csv));
echo "</span>";
echo "</div>";
?>