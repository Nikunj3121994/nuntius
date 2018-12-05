<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 10:55
 */

namespace Modules\Finance\Entities;


use App\Support\Tenancy\Models\CompanyTenant;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class PaymentRule
 * @package Modules\Finance\Entities
 */
class PaymentRule extends CompanyTenant
{

    /**
     * @var string
     */
    protected $table = 'condicao_pagamento';

    /**
     * @return HasMany
     */
    public function paymentRuleInstallment(): HasMany
    {
        return $this->hasMany(PaymentRuleInstallment::class);
    }

}