<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:41
 */

namespace Modules\Stock\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class WarehouseType
 * @package Modules\Stock\Entities
 */
class WarehouseType extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'armazem_tipo';

}