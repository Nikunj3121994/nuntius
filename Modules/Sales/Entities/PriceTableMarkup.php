<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:32
 */

namespace Modules\Sales\Entities;


use App\Support\Tenancy\Models\SubsidiaryTenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PriceTableMarkup
 * @package Modules\Sales\Entities
 */
class PriceTableMarkup extends SubsidiaryTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'tabela_preco_markup';

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
    public function markupVariable(): BelongsTo
    {
        return $this->belongsTo(MarkupVariable::class);
    }

}