<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:07
 */

namespace Modules\Sales\Entities;


use App\Support\Tenancy\Models\SubsidiaryTenant;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PriceTable
 * @package Modules\Sales\Entities
 */
class PriceTable extends SubsidiaryTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'tabela_preco';

    /**
     * @return HasMany
     */
    public function priceTableItem(): HasMany
    {
        return $this->hasMany(PriceTableItem::class);
    }

    /**
     * @return HasMany
     */
    public function priceTableMarkup(): HasMany
    {
        return $this->hasMany(PriceTableMarkup::class);
    }

}