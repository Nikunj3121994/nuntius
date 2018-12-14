<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 13/12/2018
 * Time: 10:56
 */

namespace Modules\Admin\Entities\Parametrizations;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Admin\Entities\Configuration\User;

/**
 * Class RoutineEvent
 * @package Modules\Admin\Entities\Parametrizations
 */
class RoutineEvent extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'evento_rotina';

    /**
     * @var array
     */
    protected $fillable = [
        'nome',
        'slug',
        'descricao',
    ];

    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'evento_rotina_users', 'evento_rotina_id', 'users_id');
    }

    /**
     * @return BelongsToMany
     */
    public function entity(): BelongsToMany
    {
        return $this->belongsToMany('', 'evento_rotina_entidade', 'evento_rotina_id', 'entidade_id');
    }
}