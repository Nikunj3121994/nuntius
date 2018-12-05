<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 10:58
 */

namespace Modules\Finance\Entities;


use App\Support\Tenancy\Models\CompanyTenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/***
 * Class PaymentRuleInstallment
 * @package Modules\Finance\Entities
 */
class PaymentRuleInstallment extends CompanyTenant
{

    /**
     * @var string
     */
    protected $table = 'condicao_pagamento_parcela';

    /**
     * @return BelongsTo
     */
    public function paymentRule(): BelongsTo
    {
        return $this->belongsTo(PaymentRule::class);
    }
}