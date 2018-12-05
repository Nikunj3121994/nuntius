<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 12:34
 */

namespace Modules\Sales\Entities;


use App\Support\Tenancy\Models\SubsidiaryTenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrderInstallment
 * @package Modules\Sales\Entities
 */
class OrderInstallment extends SubsidiaryTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'pedido_venda_parcelas';

    /**
     * @return BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

}