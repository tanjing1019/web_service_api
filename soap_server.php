<?php   

$soap = new SoapClient(null, array('location'=>'http://localhost/php_webservice/server.php','uri' =>'http://soap/'));     
  
echo $soap->show();   
//得到：'the data you request!'   
  
//echo $soap->getUserInfo('sss');


//https://www.cnblogs.com/AloneSword/p/3501541.html 
//https://blog.csdn.net/s371795639/article/details/80008486
//https://www.cnblogs.com/lauhp/p/7999675.html

?>
