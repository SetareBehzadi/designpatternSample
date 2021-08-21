<?php
require_once "AbstractCouponValidator.php";
class CouponExpire  extends AbstractCouponValidator
{
    public function validate($code)
    {
        if ($this->coupon->isExpired($code)){
            throw new \Exception('Code is Expired');
        }
        echo 'Coupon is not Expired ' . PHP_EOL;

        return $this->goToNextValidator($code);
    }

}