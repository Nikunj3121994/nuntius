<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 10:34
 */

namespace Modules\Sales\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrderReviewType
 * @package Modules\Sales\Entities
 */
class OrderReviewType extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'pedido_venda_critica_tipo';

}