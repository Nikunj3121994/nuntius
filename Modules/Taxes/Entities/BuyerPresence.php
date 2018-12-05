<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 19:01
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BuyerPresence
 * @package Modules\Taxes\Entities
 */
class BuyerPresence extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'presenca_comprador';

}