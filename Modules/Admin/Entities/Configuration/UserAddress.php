<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 13/12/2018
 * Time: 13:56
 */

namespace Modules\Admin\Entities\Configuration;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\Registers\City;
use Modules\Admin\Entities\Registers\State;

/**
 * Class UserAddress
 * @package Modules\Admin\Entities\Configuration
 */
class UserAddress extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'users_endereco';

    /**
     * @var array
     */
    protected $fillable = [
        'rua',
        'cep',
        'numero',
        'complemento',
        'estado_id',
        'municipio_id',
        'bairro',
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
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

}