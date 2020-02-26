<?php


namespace DeskWorks\Pricing\CalcuationMethod;


use DeskWorks\Pricing\CalculationMethod;
use Money\Money;

class RatioDiscountCalculationMethod implements CalculationMethod
{
    /**
     * @var CalculationMethod
     */
    private $calculationMethod;
    /**
     * @var float
     */
    private $ratio;

    /**
     * RatioDiscountCalculationMethod constructor.
     * @param CalculationMethod $calculationMethod
     */
    public function __construct(CalculationMethod $calculationMethod, float $ratio)
    {
        // assert

        $this->calculationMethod = $calculationMethod;
        $this->ratio = $ratio;
    }

    public function calculate(int $amount): Money
    {
        return $this->calculationMethod->calculate($amount)->multiply($this->ratio);
    }
}