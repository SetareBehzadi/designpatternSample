<?php

class Coupon
{
    public function find($code)
    {
        return true;
    }

    public function isActive($code)
    {
        return true;
    }

    public function isExpired($code)
    {
        return false;
    }
}
