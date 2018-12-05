<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:17
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TaxFrame
 * @package Modules\Taxes\Entities
 */
class TaxFrame extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'imposto_enquadramento';
}