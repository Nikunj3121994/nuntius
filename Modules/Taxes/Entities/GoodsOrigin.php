<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 09:16
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GoodsOrigin
 * @package Modules\Taxes\Entities
 */
class GoodsOrigin extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table  = 'origem_mercadoria';

}