<?php

namespace TDD;

class Receipt
{
    public function total(array $items = [], $coupon = null)
    {
       $total = array_sum($items);
       if($coupon) {
          $total -= ( $total * $coupon);
       }
        return $total;
    }

    public function tax($amount, $tax)
    {
        return ($amount * $tax);
    }

    public function postTaxTotal($items, $tax, $coupon)
    {
        $subTotal = $this->total($items, $coupon);
        return $subTotal + $this->tax($subTotal, $tax);
    }

}
