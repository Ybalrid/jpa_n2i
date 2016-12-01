<?php 
session_start();

//This simple thing permit to contruct all the pages of the site
require_once("./template/template.php");

startHTML();

addHeader("This is only a test","test.css");

$indexPage = getTxtInFile("index.html");

insertBody($indexPage);

endHTML();

?>

