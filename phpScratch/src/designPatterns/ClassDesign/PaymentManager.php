<?php

declare(strict_types=1);
final class PaymentManager{
    private int $discounRate; //割引率

    /**
     * staticがついていないが、static methodと同じ問題があるメソッド
     * staticを付与しても問題なく動く場合、実質的にstatic method
     * @param integer $monyAmount1
     * @param integer $monyAmount2
     * @return integer
     */
    public function add(int $monyAmount1, int $monyAmount2): int
    {
        return $monyAmount1 + $monyAmount2;
    }
}