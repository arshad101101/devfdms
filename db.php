<?php
date_default_timezone_set('Asia/Kuala_Lumpur');
$date = date('Y/m/d H:ia');

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "mysql";
$db = "fdsdb";

$conn = mysqli_connect("$dbhost", "$dbuser", "$dbpass", "$db") or die("Connection failed: " . $conn->connect_error);

function encryptIt( $q ) {

	$key = 'HqE0luoquf';

	return base64_encode(base64_encode($key.$q));
}


function decryptIt( $q ) {

	$key = 'HqE0luoquf';
	$decoded_key =  base64_decode(base64_decode($q));

	return str_replace("HqE0luoquf", "", $decoded_key);

}


?>