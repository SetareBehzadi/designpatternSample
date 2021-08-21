<?php

error_reporting(E_ALL);
ini_set('display_errors',1);
require './Coupon.php';
require './CouponValidator.php';


$code = '1234';
$coupon = new Coupon;
$validator = new CouponValidator($coupon);

$validator->validate($code);
