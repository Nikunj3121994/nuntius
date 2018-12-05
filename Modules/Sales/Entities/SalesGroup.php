<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:00
 */

namespace Modules\Sales\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SalesGroup
 * @package Modules\Sales\Entities
 */
class SalesGroup extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'grupo_vendas';

    /**
     * @return BelongsTo
     */
    public function invoceEntity(): BelongsTo
    {
        return $this->belongsTo(Entity::class,'entidade_nota_id');
    }

    /**
     * @return BelongsTo
     */
    public function managerEntity(): BelongsTo
    {
        return $this->belongsTo(Entity::class,'entidade_gerente_id');
    }
}