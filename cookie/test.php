<?php
session_start();

session_unset();
$_SESSION["SESSARR"] = ["RHAM", "RHEM", "DOOM"];

$_SESSION["SESSARR"][0]

echo "<pre>";
print_r($_SESSION);
echo "</pre>";