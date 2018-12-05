<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:14
 */

namespace Modules\Stock\Entities;


use App\Support\Tenancy\Models\CompanyTenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Taxes\Entities\{Ncm, TaxFrame};

/**
 * Class Product
 * @package Modules\Stock\Entities
 */
class Product extends CompanyTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'produto';

    /**
     * @return BelongsTo
     */
    public function ncm(): BelongsTo
    {
        return $this->belongsTo(Ncm::class);
    }

    /**
     * @return BelongsTo
     */
    public function productType(): BelongsTo
    {
        return $this->belongsTo(ProductType::class);
    }

    /**
     * @return BelongsTo
     */
    public function taxFrame(): BelongsTo
    {
        return $this->belongsTo(TaxFrame::class);
    }

    /**
     * @return BelongsTo
     */
    public function productGroup(): BelongsTo
    {
        return $this->belongsTo(ProductGroup::class);
    }

    /**
     * @return BelongsTo
     */
    public function productCategory(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class);
    }

}