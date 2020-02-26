<?php

namespace DeskWorks\Pricing;

use Money\Money;

interface CalculationMethod
{
    public function calculate(int $amount): Money;
}