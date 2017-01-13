<?php
$servername='10.135.6.253';
$username='Wangluoshebei';
$password='Wangluoshebei0532';

$con=mysqli_connect($servername,$username,$password,"zabbix");
if(mysqli_connect_errno($con))
{
	echo "连接MySql失败：".mysqli_connect_error();
}

?>