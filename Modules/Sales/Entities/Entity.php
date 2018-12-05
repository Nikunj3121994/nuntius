<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 17:01
 */

namespace Modules\Sales\Entities;


use App\Support\Tenancy\Models\CompanyTenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Taxes\Entities\TaxRegime;
use Modules\Taxes\Entities\TaxSituation;

/**
 * Class Entity
 * @package Modules\Sales\Entities
 */
class Entity extends CompanyTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'entidade';

    /**
     * @return HasMany
     */
    public function entityCategoryList(): HasMany
    {
        return $this->hasMany(EntityCategoryList::class);
    }

    /**
     * @return BelongsTo
     */
    public function taxRegime(): BelongsTo
    {
        return $this->belongsTo(TaxRegime::class);
    }

    /**
     * @return BelongsTo
     */
    public function taxSituation(): BelongsTo
    {
        return $this->belongsTo(TaxSituation::class);
    }

}