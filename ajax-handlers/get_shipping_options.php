<?php
$Level = "../";
include "../config.php";
include "../system/class_mimeo_order_service.php";
include "../system/mimeo-rest-client.php";
include "../system/xml_string_to_array.php";

$PDF_ID = $_POST['PDF_ID'];

$IP_Address = $_POST['IP_Address'];
//echo "ip address: " . $IP_Address . "<br />";
	
$MimeoOrderService = new MimeoOrderService($dbserver,$dbname,$dbuser,$dbpassword);
$ShippingOptions = $MimeoOrderService->getShippingOptions($PDF_ID,$root_url,$user_name,$password,$IP_Address);

echo $ShippingOptions;
	 
?>