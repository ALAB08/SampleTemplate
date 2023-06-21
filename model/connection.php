<?php

// $host_new = "localhost";
// $username_new = "elenrzgy_ALAB08";
// $password_new = "HohoHoho00010001";
// $db_new = "elenrzgy_devmetropost";


$host_new = "localhost";
$username_new = "root";
$password_new = "";
$db_new = "devmetropost";


$conn_new = mysqli_connect($host_new, $username_new, $password_new, $db_new);


if (!$conn_new) {
	 die("Connection failed: " . mysqli_connect_error());
}


// // $host_wp = "184.168.96.254";
// // $username_wp = "ALAB08";
// // $password_wp = "HohoHoho00010001";
// // $db_wp = "i7699551_wp18";

// $host_wp = "184.168.96.254";
// $username_wp = "i7699551_wp18";
// $password_wp = "T.RDQCJMGbHSTcpVnYZ11";
// $db_wp = "i7699551_wp18";

// $conn_wp = mysqli_connect($host_wp, $username_wp, $password_wp, $db_wp);


// if (!$conn_wp) {
// 	 die("Connection failed WP    : " . mysqli_connect_error());
// }

// $servername_new = "localhost";
// $username_new = "elenrzgy_neitivitidev";
// $password_new = "!123123_@@";
// $db_new = "elenrzgy_wp225";

// $conn_new = mysqli_connect($servername_new, $username_new, $password_new, $db_new);


?>