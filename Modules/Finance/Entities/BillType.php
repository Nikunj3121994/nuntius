<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:51
 */

namespace Modules\Finance\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BillType extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'titulo_tipo';

}