<?php

declare(strict_types=1);

final class GiftPoint
{
    private static const MIN_POINT = 0;
    private static const STANDARD_MEMBER_POINT = 3000;
    private static const PREMIUMN_MEMBER_POINT = 10000;
    public int $value;

    /**
     * コンストラクタをprivateにする
     * @param integer $point
     */
    private function __construct(int $point)
    {
        if ($point < self::MIN_POINT) {
            throw new Exception('ポイントが0以上ではありません');
        }
        $this->value = $point;
    }

    /**
     * コンストラクタがprivateなので目的別のファクトリmethodを作成する
     * @return self
     */
    public static function forStandardMembership(): self
    {
        return new self(self::STANDARD_MEMBER_POINT);
    }

    /**
     * @return self
     */
    public static function forPremiumnMembership(): self
    {
        return new self(self::PREMIUMN_MEMBER_POINT);
    }

    /**
     * @param GiftPoint $order
     * @return GiftPoint
     */
    public function add(self $order): self
    {
        return new self($this->value +  $order->value);
    }

    /**
     * @param ConsumptionPoint $point
     * @return boolean
     */
    public function isEnouth(ConsumptionPoint $point): bool
    {
        return $point->value <= $this->value;
    }


    /**
     * @param ConsumptionPoint $point
     * @return self
     */
    public function consume(ConsumptionPoint $point): self
    {
        if ($this->isEnouth($point)) {
            throw new Exception('ポイントが不足しています');
        }

        return new self($this->value - $point->value);
    }
}

final class ConsumptionPoint
{
    public int $value;
}
