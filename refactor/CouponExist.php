<?php

class CouponExist
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
        if (empty($this->coupon->find($code))){
            throw new \Exception('Code Not Exist');
        }
        echo 'Coupon is Exist ' . PHP_EOL;
        return $this->goToNextValidator($code);
    }
    private function goToNextValidator($code){
        if ($this->nextValidator == null){
            return true;
        }
        return $this->nextValidator->validate($code);
    }
}