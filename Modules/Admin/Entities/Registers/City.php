<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 17:48
 */

namespace Modules\Admin\Entities\Registers;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class City
 * @package Modules\Admin\Entities
 */
class City extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'municipio';

    /**
     * @var array
     */
    protected $fillable = [
        'descricao',
        'estado_id',
        'codigo_ibge',
        'smarter_id',
    ];

    /**
     * @return BelongsTo
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

}