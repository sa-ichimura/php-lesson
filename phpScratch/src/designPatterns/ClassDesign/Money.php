<?php

declare(strict_types=1);

final class Money
{
    // readonlyをつけることにより初期化以降不変の値とする
    public readonly int $amount; //金額

    public function __construct(int $amount)
    {
        // 適切な初期化処理を実装し、生焼けオブジェクトを防ぐ
        //バリデーションをコンストラクタ内で定義し、不正値が渡された場合例外をスローする
        $this->amount = $amount;
        if ($amount <  0) {
            throw new Exception('金額が0円以上ではありません');
        }
    }

    /**
     * @param Money $order //引数にクラスの型を指定し、金額以外の値を渡せないようにする
     * @return Money
     */
    public function add(self $order): self
    {
        //amountはreadonryなので変更ができない
        $added = $this->amount + $order->amount;

        // 変更したい場合は新しいインスタンスを作成する
        // これにより不変かつ更新が可能となる
        return new self($added);
    }
}

// コンストラクタでバリデーションを行うことによりエラー
// $moneyValidateError = new Money(-100); 

// readonlyを付与したことにより初期化後の上書きはできないためエラー(php8.1から)
// https://www.php.net/manual/ja/language.oop5.properties.php
// 再代入を防ぐことが目的
$money = new Money(100);
// $money->amount = 200;
