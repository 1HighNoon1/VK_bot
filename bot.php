<?php 
require_once('vendor/autoload.php');
use DigitalStar\vk_api\vk_api;

$VK_key='c642d5702a3e34a185fd256923549317c8d5b541620c5f59417b43654851b0ecb0c5ed6a7a368892da707';
$version ='5.102';
$confirm_str='aa03346d';


$vk = vk_api::create($VK_key, $version)->setConfirm($confirm_str);
$vk->initVars($id, $message);
$vk->reply($message);
 ?>