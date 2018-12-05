<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 19:00
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class InvoiceModel
 * @package Modules\Taxes\Entities
 */
class InvoiceModel extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'nota_fiscal_modelo';
}