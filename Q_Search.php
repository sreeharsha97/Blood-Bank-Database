<?php
include("db_config.php");


$bgroup=$_POST['Q_bgroup'];
$city=$_POST['Q_city'];
//$bgroup="O+";
//$city="Karnataka";

$conn = OCIlogon($user,$pass,$db);

if(!$conn){
	echo "Connection is invalid" . var_dump(OCIError());
	die();
}

$sql = oci_parse($conn, "SELECT NAME,BGROUP,CITY,PHONE,EMIL,LDONATION FROM BLOOD WHERE bgroup='$bgroup' AND city='$city'");

oci_execute($sql);

$data_A="<table id='SearchTable'  cellspacing='0' width='90%' class='mGrid'><thead><tr><th>Name</th><th>Blood group</th><th>City</th><th>Phone</th><th>Email</th><th>Last Donation</th></tr></thead><tbody>\n";
$data_B="<tr>\n";
$data_C="</tr>\n";
$data_D="";
$data_E="</tbody></table>\n";
$i=0;

while ($row = oci_fetch_array($sql, OCI_ASSOC+OCI_RETURN_NULLS)) {
$i=$i+1;
$data_D=$data_D.$data_B;
    foreach ($row as $item) {
        $data_D=$data_D."<td>". $item."</td>\n";
    }
$data_D=$data_D.$data_C;
}

if ($i==0)
{
echo "No Records";    
}
else
{
echo $data_A.$data_D.$data_E;    
}

OCIlogoff($conn);
