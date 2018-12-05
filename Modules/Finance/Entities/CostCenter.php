<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 10:29
 */

namespace Modules\Finance\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CostCenter extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'centro_custo';

    /**
     * @return BelongsTo
     */
    public function centerCost(): BelongsTo
    {
        return $this->belongsTo(CostCenter::class);
    }

    /**
     * @return HasMany
     */
    public function childCenterCost(): HasMany
    {
        return $this->hasMany(CostCenter::class,'centro_custo_id');
    }

}