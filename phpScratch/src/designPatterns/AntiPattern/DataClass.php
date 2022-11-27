<?php

declare(strict_types=1);
/**
 * データを保持するだけのクラス(消費税を保持)
 */
final class ContrantAmount
{
    public int $amountIncludingTax;
    public string $salesTaxRate;
}

/**
 * データクラスと計算ロジックが分離してることにより発生する問題(低凝集)
 * 税込み計算ロジックが複数実装されてしまう恐れがある
 * これにより修正漏れが発生し、バグとなる恐れがある
 * コードの重複実装
 * 修正漏れ
 * 可読性の低下
 * 未初期化状態(詳細を後述)
 * 不正値の混入
 */
final class ContractManager
{
    public ContrantAmount $contrantAmount;

    /**
     * @param string $amountExcloudingTax
     * @param string $salesTaxRate
     * @return integer
     */
    public function calculateAmountIncludingTax(string $amountExcloudingTax, string $salesTaxRate): int
    {
        $multiplier = bcadd($salesTaxRate, '1.0');
        $amountIncloudingTax = bcmul($multiplier, $amountExcloudingTax);

        return (int)$amountIncloudingTax;
    }

    /**
     * @param string $amountExcloudingTax
     * @param string $salesTaxRate
     * @return void
     */
    public function concloude(string $amountExcloudingTax, string $salesTaxRate): void
    {
        $amountIncloudingTax = $this->calculateAmountIncludingTax($amountExcloudingTax, $salesTaxRate);
        $contractAmount =  new ContrantAmount();
        $contractAmount->amountIncludingTax = $amountIncloudingTax;
        $contractAmount->salesTaxRate = $salesTaxRate;
    }
}

$amount = new ContrantAmount();
//Fatal error: Uncaught Error: Typed property ContrantAmount::$salesTaxRate must not be accessed before initialization
print((int)$amount->salesTaxRate);  //生焼けオブジェクト 
$amount->salesTaxRate = '0.1'; //不正値の混入