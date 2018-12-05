<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 14/11/2018
 * Time: 16:31
 */

namespace Modules\Taxes\Services\TaxCalculator\Builders\Models;


/**
 * POJO representation of the ICMS tax
 * Class Icms
 * @package Modules\Taxes\Services\TaxCalculator\Builders\Models
 */
class Icms extends AbstracTax
{

    const ALLOWED_CSTS = [
        '00',
        '10',
        '20',
        '30',
        '40',
        '41',
        '50',
        '51',
        '60',
        '70',
        '90'
    ];

    /**
     * CST is a code that defines the nature of tax calculation
     * @var string
     */
    private $cstCode;

    /**
     * The origin of goods will determine some particularity of tax calculation
     * @var string
     */
    private $goodsOriginCode;

    /**
     * This will determine the way that the base amount will be used to calculate the tax amount
     * @var string
     */
    private $calculationModeCode;

    /**
     * This attribute must be defined if the product has some special reduction to be applied in the
     * base amount
     * @var float
     */
    private $baseAmountReductionPercent;

    /**
     * This is the decresead base amount based on the base amount reduction percent
     * This attribute must be used to calculate the tax amount if it's higher than zero
     * @var float
     */
    private $decreasedBaseAmount;

    /**
     * This attribute will determine if the base amount is different, based on a fixed base amount
     * @var bool
     */
    private $isDifferentiatedBaseAmount;

    /**
     * The fixed base amount
     * @var float
     */
    private $differentiatedBaseAmount;

    /**
     * Icms constructor.
     * @param array|null $data
     */
    public function __construct( array $data = null)
    {
        parent::__construct($data);

        // first we need to initialize some fields
        $this->baseAmountReductionPercent = 0;
        $this->decreasedBaseAmount = 0;
        $this->isDifferentiatedBaseAmount = false;
        $this->differentiatedBaseAmount = 0;

        if ($data) {

        }


    }

    /**
     * @return string
     */
    public function getCstCode(): string
    {
        return $this->cstCode;
    }

    /**
     * @param string $cstCode
     */
    public function setCstCode( string $cstCode ): void
    {
        $this->cstCode = $cstCode;
    }

    /**
     * @return string
     */
    public function getGoodsOriginCode(): string
    {
        return $this->goodsOriginCode;
    }

    /**
     * @param string $goodsOriginCode
     */
    public function setGoodsOriginCode( string $goodsOriginCode ): void
    {
        $this->goodsOriginCode = $goodsOriginCode;
    }

    /**
     * @return string
     */
    public function getCalculationModeCode(): string
    {
        return $this->calculationModeCode;
    }

    /**
     * @param string $calculationModeCode
     */
    public function setCalculationModeCode( string $calculationModeCode ): void
    {
        $this->calculationModeCode = $calculationModeCode;
    }

    /**
     * @return float
     */
    public function getBaseAmountReductionPercent(): float
    {
        return $this->baseAmountReductionPercent;
    }

    /**
     * @param float $baseAmountReductionPercent
     */
    public function setBaseAmountReductionPercent( float $baseAmountReductionPercent ): void
    {
        $this->baseAmountReductionPercent = $baseAmountReductionPercent;
    }

    /**
     * @return float
     */
    public function getDecreasedBaseAmount(): float
    {
        return $this->decreasedBaseAmount;
    }

    /**
     * @param float $decreasedBaseAmount
     */
    public function setDecreasedBaseAmount( float $decreasedBaseAmount ): void
    {
        $this->decreasedBaseAmount = $decreasedBaseAmount;
    }

    /**
     * @return bool
     */
    public function isDifferentiatedBaseAmount(): bool
    {
        return $this->isDifferentiatedBaseAmount;
    }

    /**
     * @param bool $isDifferentiatedBaseAmount
     */
    public function setIsDifferentiatedBaseAmount( bool $isDifferentiatedBaseAmount ): void
    {
        $this->isDifferentiatedBaseAmount = $isDifferentiatedBaseAmount;
    }

    /**
     * @return float
     */
    public function getDifferentiatedBaseAmount(): float
    {
        return $this->differentiatedBaseAmount;
    }

    /**
     * @param float $differentiatedBaseAmount
     */
    public function setDifferentiatedBaseAmount( float $differentiatedBaseAmount ): void
    {
        $this->differentiatedBaseAmount = $differentiatedBaseAmount;
    }

}