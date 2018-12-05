<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 14/11/2018
 * Time: 16:26
 */

namespace Modules\Taxes\Services\TaxCalculator\Builders\Models;


/**
 * This class is a POJO that reprsents an abstract model for all taxes from the TaxCalculator Package
 * Class AbstracTax
 * @package Modules\Taxes\Services\TaxCalculator\Builders\Models
 */
abstract class AbstracTax
{

    /**
     * The tax percent for calculation
     * @var float
     */
    protected $aliquot;

    /**
     * The item amount which will be used to calculate the tax amount
     * @var float
     */
    protected $baseAmount;

    /**
     * The tax amount based on aliquot and baseAmount
     * @var float
     */
    protected $amount;

    /**
     * AbstracTax constructor.
     * @param array|null $data
     */
    public function __construct( array $data = null )
    {

        // first we initialize the fields
        $this->aliquot = 0;
        $this->baseAmount = 0;
        $this->amount = 0;

        // if we got data, then will be defined
        if ($data) {
            $this->aliquot = isset($data['aliquot']) ? floatval($data['aliquot']) : 0;
            $this->baseAmount = isset($data['base_amount']) ? floatval($data['base_amount']) : 0;
            $this->amount = isset($data['amount']) ? floatval($data['amount']) : 0;
        }

    }


    /**
     * @return float
     */
    public function getAliquot(): float
    {
        return $this->aliquot;
    }

    /**
     * @param float $aliquot
     */
    public function setAliquot( float $aliquot ): void
    {
        $this->aliquot = $aliquot;
    }

    /**
     * @return float
     */
    public function getBaseAmount(): float
    {
        return $this->baseAmount;
    }

    /**
     * @param float $baseAmount
     */
    public function setBaseAmount( float $baseAmount ): void
    {
        $this->baseAmount = $baseAmount;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount( float $amount ): void
    {
        $this->amount = $amount;
    }

}