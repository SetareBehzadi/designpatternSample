<?php
require_once "AbstractCouponValidator.php";
class CouponExist extends AbstractCouponValidator
{

    public function validate($code)
    {
        if (empty($this->coupon->find($code))){
            throw new \Exception('Code Not Exist');
        }
        echo 'Coupon is Exist ' . PHP_EOL;
        return $this->goToNextValidator($code);
    }

}