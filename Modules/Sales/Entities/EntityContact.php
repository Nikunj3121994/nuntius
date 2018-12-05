<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 17:30
 */

namespace Modules\Sales\Entities;


use App\Support\Tenancy\Models\CompanyTenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EntityContact
 * @package Modules\Sales\Entities
 */
class EntityContact extends CompanyTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'entidade_contato';

    /**
     * @return BelongsTo
     */
    public function entity(): BelongsTo
    {
        return $this->belongsTo(Entity::class);
    }

}