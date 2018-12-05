<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:01
 */

namespace Modules\Sales\Entities;


use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SalesGroupSeller
 * @package Modules\Sales\Entities
 */
class SalesGroupSeller extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'grupo_venda_representante';

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
    public function salesGroup(): BelongsTo
    {
        return $this->belongsTo(SalesGroup::class);
    }

}