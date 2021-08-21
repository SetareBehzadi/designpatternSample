<?php

class CouponActive
{
    private $coupon;
    private $nextValidator;

    public function __construct(Coupon $coupon)
    {
        $this->coupon = $coupon;
    }

    public function setNextValidate($validator)
    {
        $this->nextValidator = $validator;
    }

    public function validate($code)
    {
        if (!$this->coupon->isActive($code)){
            throw new \Exception('Code Not Active');
        }
        echo 'Coupon is Active ' . PHP_EOL;
        return $this->goToNextValidator($code);
    }
    private function goToNextValidator($code){
        if ($this->nextValidator == null){
            return true;
        }
        return $this->nextValidator->validate($code);
    }
}