<?php
$servername='10.135.6.253';
$username='Wangluoshebei';
$password='Wangluoshebei0532';

$conn=new mysqli($servername,$username,$password);
if($conn->connect_error){
	die("连接失败：".$conn->connect_error);
}
?>