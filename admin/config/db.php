<?php
error_reporting(0);
session_start();

define("HOST", "localhost");
define("USER", "ehmscomn_ehms");
define("PASSWORD", "100%wallyehms");
define("DBNAME", "ehmscomn_ehms");

// define("HOST", "localhost");
// define("USER", "root");
// define("PASSWORD", "");
// define("DBNAME", "carenow");

//$your_preferred_variable_name
$link = mysqli_connect(HOST, USER, PASSWORD, DBNAME);

require_once 'helpers.php';
require_once 'functions.php';

// if ($link) {
//     echo "connected";
// } else {
//   echo "Something is wrong!";
// }
