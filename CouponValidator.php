<?php
require 'refactor/CouponExist.php';
require 'refactor/CouponActive.php';
require 'refactor/CouponExpire.php';
class CouponValidator
{
    private $coupon;

    public function __construct(Coupon $coupon)
    {
        $this->coupon = $coupon;
    }

    public function validate($code)
    {
        $couponExist = new CouponExist($this->coupon);
        $couponActive = new CouponActive($this->coupon);
        $couponExpire = new CouponExpire($this->coupon);

        //baraye etesale zanjireha bayad dakhel har class begim ke che classi ghadame badi hast

        $couponExist->setNextValidate($couponActive);
        $couponActive->setNextValidate($couponExpire);
        $couponExist->validate($code);


    }
    
}