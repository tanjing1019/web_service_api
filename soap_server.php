<?php   
class test   
{   
    function show()   
    {   
        return 'the data you request!';   
    }   
}   
function getUserInfo($name)   
{   
    return 'fbbin';   
}   
//实例化的参数手册上面有，这个是没有使用wsdl的，所以第一个参数为null，如果有使用wsdl，那么第一个参数就是这个wsdl文件的地址。   
$server = new SoapServer(null, array('uri' => "http://soap/",'location' => "http://127.0.0.1/php_webservice/web_service_api/soap_server.php"));  
$server->setClass('test');   
//$server->addFunction('getUserInfo');   
$server->handle();   



//得到：'the data you request!'   
  
//echo $soap->getUserInfo('sss');

 

//https://www.cnblogs.com/AloneSword/p/3501541.html
//https://blog.csdn.net/s371795639/article/details/80008486
//https://www.cnblogs.com/lauhp/p/7999675.html
?>
