<?php

namespace DeskWorks\Pricing\CalcuationMethod;

use DeskWorks\Pricing\CalculationMethod;
use Money\Money;

class Linear implements CalculationMethod
{
    /**
     * @var Money
     */
    private $unitPrice;

    /**
     * Flat constructor.
     * @param Money $money
     */
    public function __construct(Money $money)
    {
        $this->unitPrice = $money;
    }

    public function calculate(int $amount): Money
    {
        return $this->unitPrice->multiply($amount);
    }
}