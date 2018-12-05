<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 09:44
 */

namespace Modules\Finance\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FinanceNature
 * @package Modules\Finance\Entities
 */
class FinanceNature extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'natureza_financeira';

    /**
     * @return BelongsTo
     */
    public function financeNature(): BelongsTo
    {
        return $this->belongsTo(FinanceNature::class);
    }

    /**
     * @return HasMany
     */
    public function childFinanceNatures(): HasMany
    {
        return $this->hasMany(FinanceNature::class, 'natureza_financeira_id');
    }

}