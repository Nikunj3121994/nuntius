<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 12:53
 */

namespace Modules\Sales\Entities;


use App\Support\Tenancy\Models\SubsidiaryTenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrderReview
 * @package Modules\Sales\Entities
 */
class OrderReview extends SubsidiaryTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'pedido_venda_critica';

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
    public function orderReviewType(): BelongsTo
    {
        return $this->belongsTo(OrderReviewType::class);
    }

    /**
     * @return HasMany
     */
    public function orderReviewLiberation(): HasMany
    {
        return $this->hasMany(OrderReviewLiberation::class);
    }

    /**
     * @return HasMany
     */
    public function orderReviewItem(): HasMany
    {
        return $this->hasMany(OrderReviewItem::class);
    }

}