<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:48
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Finance\Entities\BillType;

/**
 * Class NatureOperationType
 * @package Modules\Taxes\Entities
 */
class NatureOperationType extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'natureza_operacao_tipo';

    /**
     * @return BelongsTo
     */
    public function billType(): BelongsTo
    {
        return $this->belongsTo(BillType::class);
    }
}