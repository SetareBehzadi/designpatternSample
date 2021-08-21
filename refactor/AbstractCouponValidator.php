<?php


abstract class AbstractCouponValidator
{
    protected $coupon;
    protected $nextValidator;

    public function __construct(Coupon $coupon)
    {
        $this->coupon = $coupon;
    }

    public function setNextValidate(AbstractCouponValidator $validator)
    {
        $this->nextValidator = $validator;
    }
    protected function goToNextValidator($code){
        if ($this->nextValidator == null){
            return true;
        }
        return $this->nextValidator->validate($code);
    }

    abstract public function validate($code);
}