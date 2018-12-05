<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 10:49
 */

namespace Modules\Sales\Entities;


use App\Support\Tenancy\Models\SubsidiaryTenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Stock\Entities\Product;
use Modules\Stock\Entities\ProductBatch;
use Modules\Stock\Entities\ProductMeasurementUnit;

/**
 * Class OrderItem
 * @package Modules\Sales\Entities
 */
class OrderItem extends SubsidiaryTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'pedido_venda_item';

    /**
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * @return BelongsTo
     */
    public function productMeasurementUnit(): BelongsTo
    {
        return $this->belongsTo(ProductMeasurementUnit::class);
    }

    /**
     * @return HasMany
     */
    public function orderItemProductBatch(): HasMany
    {
        return $this->hasMany(ProductBatch::class);
    }


}