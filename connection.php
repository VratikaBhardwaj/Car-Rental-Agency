<?php
$con = mysqli_connect("localhost","root","", "login_register");

if (mysqli_connect_errno()) {
die("Cannot connect to database".mysqli_connect_errno());
}

define("UPLOAD_SRC",$_SERVER['DOCUMENT_ROOT']."/login-register/uploads/");

define("FETCH_SRC","http://127.0.0.1/login-register/uploads/")

?>
