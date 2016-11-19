<?php
include("db_config.php");


$name=$_POST['Q_Name'];
$bgroup=$_POST['Q_bgroup'];
$street=$_POST['Q_street'];
$city=$_POST['Q_city'];
$phone=$_POST['Q_phone'];
$emil=$_POST['Q_emil'];
$Ldonation=$_POST['Q_Ldonation'];

 


$conn = OCIlogon($user,$pass,$db);

if(!$conn){
	echo "Connection is invalid" . var_dump(OCIError());
	die();
}

$sql = oci_parse($conn, "INSERT INTO BLOOD VALUES ('$name','$bgroup','$city','$phone','$emil','$Ldonation','$street')");

oci_execute($sql);
echo 'successfully submitted';
OCICommit($conn);
OCIlogoff($conn);
