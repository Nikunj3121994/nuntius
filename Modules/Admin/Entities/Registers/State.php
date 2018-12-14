<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 17:48
 */

namespace Modules\Admin\Entities\Registers;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class State
 * @package Modules\Admin\Entities\Registers
 */
class State extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'estado';

    /**
     * @var array
     */
    protected $fillable = [
        'codigo_ibge',
        'sigla_uf',
        'descricao',
        'smarter_id',
    ];

    /**
     * @return HasMany
     */
    public function city(): HasMany
    {
        return $this->hasMany(City::class);
    }

}