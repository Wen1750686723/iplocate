<?php
function amend($rrr){   
	require_once 'ip.php';
	//$ip1 = $_SERVER['REMOTE_ADDR'];
	$ip1="122.200.86.153";
	$iplocation = new iplocate();
	$address=$iplocation->getaddress($ip1);
	$iparea = $address['area1'].$address['area2'];
    echo $iparea;
	//$exe = mysql_query( "insert into ssc_memberamend set uid = '".$_SESSION["uid"]."',username = '".$_SESSION["username"]."',level = '".$_SESSION["level"]."', cont='".$rrr."', ip='".$ip1."', area='".$iparea."', adddate='".date("Y-m-d H:i:s")."'");
//return $rrr;
}
header("Content-Type: text/html; charset=UTF-8");
amend("ss");
?>