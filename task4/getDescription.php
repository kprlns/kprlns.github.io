<?php
include ("./csv_utils.php");

$name = implode("", $_GET);//getBookName($nameId);
$csv = array_map('str_getcsv', file('./data.csv'));
sleep(1);
echo "<div>";
echo "<span>";
echo (getDescription($name, $csv));
echo "</span>";
echo "</div>";
?>