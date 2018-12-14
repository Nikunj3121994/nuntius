<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 13/12/2018
 * Time: 14:01
 */

namespace Modules\Admin\Entities\Configuration;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserNumber
 * @package Modules\Admin\Entities\Configuration
 */
class UserNumber extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'users_telefone';

    /**
     * @var array
     */
    protected $fillable = [
        'tipo',
        'ddd',
        'numero'
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}