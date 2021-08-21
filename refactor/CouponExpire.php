<?php
class CouponExpire
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
        if ($this->coupon->isExpired($code)){
            throw new \Exception('Code is Expired');
        }
        echo 'Coupon is not Expired ' . PHP_EOL;

        return $this->goToNextValidator($code);
    }
    private function goToNextValidator($code){
        if ($this->nextValidator == null){
            return true;
        }
        return $this->nextValidator->validate($code);
    }
}