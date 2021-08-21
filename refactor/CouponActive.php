<?php
require_once "AbstractCouponValidator.php";
class CouponActive extends AbstractCouponValidator
{


    public function validate($code)
    {
        if (!$this->coupon->isActive($code)){
            throw new \Exception('Code Not Active');
        }
        echo 'Coupon is Active ' . PHP_EOL;
        return $this->goToNextValidator($code);
    }

}