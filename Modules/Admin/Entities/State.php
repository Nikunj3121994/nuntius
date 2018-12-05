<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 17:48
 */

namespace Modules\Admin\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'estado';

}