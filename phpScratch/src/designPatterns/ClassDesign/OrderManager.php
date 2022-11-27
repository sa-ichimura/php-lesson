<?php
declare(strict_types=1);
final class OrderManager
{
    /**
     * static methodはインスタンス変数を使用することができない
     * データとデータを操作するロジックが分離してしまうことで低凝集な構造となる
     * @param integer $monyAmount1
     * @param integer $monyAomunt2
     * @return integer
     */
    public static function add(int $monyAmount1, int $monyAomunt2): int
    {
        //高凝集なクラス = データとそれを操作するロジックをクラス内に閉じ込める
        return $monyAmount1 + $monyAomunt2;
    }
}
