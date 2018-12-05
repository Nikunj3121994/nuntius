<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 29/10/2018
 * Time: 18:34
 */

namespace Modules\Sales\Entities;


use App\Support\Tenancy\Models\SubsidiaryTenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Finance\Entities\BusinessUnit;
use Modules\Finance\Entities\CostCenter;
use Modules\Finance\Entities\FinanceNature;
use Modules\Finance\Entities\PaymentMean;
use Modules\Finance\Entities\PaymentRule;
use Modules\Stock\Entities\Warehouse;
use Modules\Taxes\Entities\TaxParametrization;

/**
 * Class Order
 * @package Modules\Sales\Entities
 */
class Order extends SubsidiaryTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'pedido_venda';

    /**
     * @return HasMany
     */
    public function orderItem(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    /**
     * @return HasMany
     */
    public function orderInstallment(): HasMany
    {
        return $this->hasMany(OrderInstallment::class);
    }

    /**
     * @return HasOne
     */
    public function orderShipping(): HasOne
    {
        return $this->hasOne(OrderShipping::class);
    }

    /**
     * @return HasMany
     */
    public function orderShippingVolume(): HasMany
    {
        return $this->hasMany(OrderShippingVolume::class);
    }

    /**
     * @return HasMany
     */
    public function orderSalesComission(): HasMany
    {
        return $this->hasMany(OrderSalesComission::class);
    }

    /**
     * @return BelongsTo
     */
    public function salesGroupSeller(): BelongsTo
    {
        return $this->belongsTo(SalesGroupSeller::class);
    }

    /**
     * @return BelongsTo
     */
    public function orderStatus(): BelongsTo
    {
        return $this->belongsTo(OrderStatus::class);
    }

    /**
     * @return BelongsTo
     */
    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
    }

    /**
     * @return BelongsTo
     */
    public function entity(): BelongsTo
    {
        return $this->belongsTo(Entity::class);
    }

    /**
     * @return BelongsTo
     */
    public function priceTable(): BelongsTo
    {
        return $this->belongsTo(PriceTable::class);
    }

    /**
     * @return BelongsTo
     */
    public function taxParametrization(): BelongsTo
    {
        return $this->belongsTo(TaxParametrization::class);
    }

    /**
     * @return BelongsTo
     */
    public function paymentRule(): BelongsTo
    {
        return $this->belongsTo(PaymentRule::class);
    }

    /**
     * @return BelongsTo
     */
    public function paymentMean(): BelongsTo
    {
        return $this->belongsTo(PaymentMean::class);
    }

    /**
     * @return BelongsTo
     */
    public function businessUnit(): BelongsTo
    {
        return $this->belongsTo(BusinessUnit::class);
    }

    /**
     * @return BelongsTo
     */
    public function financeNature(): BelongsTo
    {
        return $this->belongsTo(FinanceNature::class);
    }

    /**
     * @return BelongsTo
     */
    public function costCenter(): BelongsTo
    {
        return $this->belongsTo(CostCenter::class);
    }

    /**
     * @return BelongsTo
     */
    public function entityAddress(): BelongsTo
    {
        return $this->belongsTo(EntityAddress::class);
    }


}