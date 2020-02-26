<?php


namespace DeskWorks\Pricing\CalcuationMethod;


use DeskWorks\Pricing\CalculationMethod;
use Money\Money;
use Ramsey\Uuid\UuidInterface;

class Pricing
{
    /**
     * @var UuidInterface
     */
    private $id;

    /**
     * @var CalculationMethod
     */
    private $calculationMethod;

    /**
     * Pricing constructor.
     * @param UuidInterface $id
     * @param CalculationMethod $calculationMethod
     */
    public function __construct(UuidInterface $id, CalculationMethod $calculationMethod)
    {
        $this->id = $id;
        $this->calculationMethod = $calculationMethod;
    }

    public function calculate(int $amount): Money
    {
        return $this->calculationMethod->calculate($amount);
    }

    /**
     * @return UuidInterface
     */
    public function getId()
    {
        return $this->id;
    }
}