<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:16
 */

namespace Modules\Stock\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProductType
 * @package Modules\Stock\Entities
 */
class ProductType extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'produto_tipo';

}