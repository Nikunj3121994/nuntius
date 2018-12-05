<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 10:27
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FreightMode
 * @package Modules\Taxes\Entities
 */
class FreightMode extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'modalidade_frete';

}