<?php
$url='http://www.google.com/url?q=http://stock.591hx.com/article/2014-03-14/0000788030s.shtml&sa=U&ei=kM-RU5GtENLMsQTSrYCQAw&ved=0CBcQFjAA&usg=AFQjCNGI63NncYrR2IoW9r3XXN7Qg-fpDw'; 
$ch=curl_init(); 
$timeout=5; 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 
$lines_string=curl_exec($ch); 
curl_close($ch); 
echo $lines_string;