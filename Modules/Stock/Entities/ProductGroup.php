<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:18
 */

namespace Modules\Stock\Entities;


use App\Support\Tenancy\Models\CompanyTenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Finance\Entities\BusinessUnit;

/**
 * Class ProductGroup
 * @package Modules\Stock\Entities
 */
class ProductGroup extends CompanyTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'grupo_produto';

    /**
     * @return BelongsTo
     */
    public function businessUnity(): BelongsTo
    {
        return $this->belongsTo(BusinessUnit::class);
    }

    /**
     * @return BelongsTo
     */
    public function productGroup(): BelongsTo
    {
        return $this->belongsTo(ProductGroup::class);
    }

    /**
     * @return HasMany
     */
    public function childProductGroup(): HasMany
    {
        return $this->hasMany(ProductGroup::class,'grupo_produto_id');
    }
}