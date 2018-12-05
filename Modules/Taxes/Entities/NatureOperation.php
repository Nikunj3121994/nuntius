<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:47
 */

namespace Modules\Taxes\Entities;


use App\Support\Tenancy\Models\CompanyTenant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class NatureOperation
 * @package Modules\Taxes\Entities
 */
class NatureOperation extends CompanyTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'natureza_operacao';

    /**
     * @return BelongsTo
     */
    public function natureOperationType(): BelongsTo
    {
        return $this->belongsTo(NatureOperationType::class);
    }

}