<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 12:54
 */

namespace Modules\Sales\Entities;


use App\Support\Tenancy\Models\SubsidiaryTenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Stock\Entities\Product;
use Modules\Stock\Entities\ProductBatch;
use Modules\Stock\Entities\Warehouse;

/**
 * Class OrderReviewItem
 * @package Modules\Sales\Entities
 */
class OrderReviewItem extends SubsidiaryTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'pedido_venda_critica_item';

    /**
     * @return BelongsTo
     */
    public function orderReview(): BelongsTo
    {
        return $this->belongsTo(OrderReview::class);
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
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * @return BelongsTo
     */
    public function poductBatch(): BelongsTo
    {
        return $this->belongsTo(ProductBatch::class);
    }

}