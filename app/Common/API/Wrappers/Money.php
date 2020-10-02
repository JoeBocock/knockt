<?php

namespace App\Common\API\Wrappers;

class Money
{
    /**
     * The base amount
     *
     * @var Int
     */
    private $amount;

    /**
     * The difference between raw and visual
     *
     * @var int
     */
    private const SEPARATOR = 1000;

    /**
     * Construct the class
     *
     * @param int $amount
     */
    public function __construct(int $amount = 0)
    {
        $this->amount = (int) $amount;
    }

    /**
     * Creates a new class instance from float
     *
     * @param float $amount
     * @return Money
     */
    public static function constructFromFloat(float $amount): Money
    {
        return new static($amount * self::SEPARATOR);
    }

    /**
     * Return the raw penny amount.
     *
     * @return integer
     */
    public function asRaw(): int
    {
        return (int) $this->amount;
    }

    /**
     * Return the base amount as a float.
     *
     * @return float
     */
    public function asFloat(): float
    {
        return (float) round($this->amount / self::SEPARATOR, 2);
    }

    /**
     * Return the prettified base amount
     *
     * @return string
     */
    public function prettified(): string
    {
        return (string) '£' . number_format($this->amount / self::SEPARATOR, 2);
    }

    /**
     * Prettify a provided amount.
     *
     * @param integer $value
     * @return string
     */
    public static function prettify(int $value): string
    {
        return (string) '£' . number_format($value / self::SEPARATOR, 2);
    }

    /**
     * Is current amount less than or equal to a value?
     *
     * @param integer $comparisonValue
     * @return boolean
     */
    public function lessThanOrEqualTo(int $comparisonValue = 0): bool
    {
        return (bool) $this->amount <= $comparisonValue;
    }

    /**
     * Is current amount greater than or equal to a value?
     *
     * @param integer $comparisonValue
     * @return boolean
     */
    public function GreaterThanOrEqualTo(int $comparisonValue = 0): bool
    {
        return (bool) ($this->amount >= $comparisonValue);
    }
}
