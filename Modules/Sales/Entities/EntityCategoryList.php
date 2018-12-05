<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 17:20
 */

namespace Modules\Sales\Entities;


use App\Support\Tenancy\Models\CompanyTenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\EntityCategory;

/**
 * Class EntityCategoryList
 * @package Modules\Sales\Entities
 */
class EntityCategoryList extends CompanyTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'entidade_categoria_lista';

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
    public function entityCategory(): BelongsTo
    {
        return $this->belongsTo(EntityCategory::class);
    }

}