<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:54
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class InvoicePrintType
 * @package Modules\Taxes\Entities
 */
class InvoicePrintType extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'tipo_impressao_danfe';


}