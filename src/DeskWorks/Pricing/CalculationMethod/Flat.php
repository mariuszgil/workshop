<?php

namespace DeskWorks\Pricing\CalcuationMethod;

use DeskWorks\Pricing\CalculationMethod;
use Money\Money;

class Flat implements CalculationMethod
{
    /**
     * @var Money
     */
    private $money;

    /**
     * Flat constructor.
     * @param Money $money
     */
    public function __construct(Money $money)
    {
        $this->money = $money;
    }

    public function calculate(int $amount): Money
    {
        return $this->money;
    }
}