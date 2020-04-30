<?php
$un = $_REQUEST["username"];
$pwd = $_REQUEST["password"];

if ($un == "admin" and $pwd = "12345") {
	print("Selamat Datang Admin");
} else{
	print("Username/Password Salah");
}


// print($un);
// print($pwd);

// print ("respond page");
// var_dump($_REQUEST);
?>
