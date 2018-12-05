<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:58
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceEmissionFinality extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'nota_fiscal_finalidade_emissao';

}