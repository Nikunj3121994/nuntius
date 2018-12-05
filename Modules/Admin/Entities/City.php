<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 17:48
 */

namespace Modules\Admin\Entities;


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
     * @return BelongsTo
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

}