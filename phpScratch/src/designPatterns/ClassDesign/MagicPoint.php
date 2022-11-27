<?php

declare(strict_types=1);

final class MagicPoint
{

    private int $currentMagicPoint;
    private int $originalMaxMagicPoint;
    /** @var array<integer> */
    private array $maxMagicPointIncrements;


    private function __construct()
    {
        $this->currentMagicPoint = 0;
        $this->originalMaxMagicPoint = 0;
        $this->maxMagicPointIncrements = [];
    }
    /**
     * リファクタリング前のコード
     * 引数が多い
     * 引数が多い＝複雑なロジックになりがち
     * @param integer $currentMagicPoint
     * @param integer $originalMaxMagicPoint
     * @param array<integer> $maxMagicPointIncrements
     * @param integer $recoveryAmount
     * @return void
     */
    // public function recoverMagicPoint(
    //     int $currentMagicPoint,
    //     int $originalMaxMagicPoint,
    //     array $maxMagicPointIncrements,
    //     int $recoveryAmount
    // ) {
    //     $currentMagicPoint = $originalMaxMagicPoint;
    //     foreach($maxMagicPointIncrements as $maxMagicPointIncrement){
    //         $currentMagicPoint+=$maxMagicPointIncrement;
    //     }

    //     return $currentMagicPoint+$recoveryAmount+$currentMagicPoint;
    // }

    /**
     * @return integer
     */
    public function current(): int
    {
        return $this->currentMagicPoint;
    }

    /**
     * Undocumented function
     *
     * @return integer
     */
    public function max(): int
    {
        $amount = $this->originalMaxMagicPoint;
        foreach ($this->maxMagicPointIncrements as $maxMagicPointIncrement) {
            $amount += $maxMagicPointIncrement;
        }

        return $amount;
    }

    public function consume(int $consumeAmount): void
    {
        /** */
    }
}
