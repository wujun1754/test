<?php
$url='http://10.135.6.121/zabbix/report2.php?ddreset=1';
$fp = fopen($url, 'r'); 
$header = stream_get_meta_data($fp);//获取报头信息 
while(!feof($fp)) { 
$result .= fgets($fp, 1024); 
} 
echo "url header: {$header} <br>";
echo "url body: $result"; 
fclose($fp); 
?> 
