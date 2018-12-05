<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 14:49
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tax
 * @package Modules\Taxes\Entities
 */
class Tax extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'imposto';


}