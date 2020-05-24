<?php
include("Class.XML_DOM.php");
$xml=new xml_dom("cars_test.xml");//载入xml文件
$xmlarr=$xml->getData();//读取xml文件内容
print_r($xmlarr);
?>