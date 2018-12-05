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
use Modules\Admin\Entities\AddressType;
use Modules\Admin\Entities\City;
use Modules\Admin\Entities\Country;
use Modules\Admin\Entities\State;

/**
 * Class EntityAddress
 * @package Modules\Sales\Entities
 */
class EntityAddress extends CompanyTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'entidade_endereco';

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
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * @return BelongsTo
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    /**
     * @return BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    /**
     * @return BelongsTo
     */
    public function addressType(): BelongsTo
    {
        return $this->belongsTo(AddressType::class);
    }

}