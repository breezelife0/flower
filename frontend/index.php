<?php
/**
 * Created by PhpStorm.
 * User: breeze
 * Date: 16/10/26
 * Time: 16:07
 */

define('VENDOR_PATH',__DIR__.'/../vendor');
require(VENDOR_PATH.'/autoload.php');

$ipHelper = new \breeze\IpHelper();
$ipHelper->test();