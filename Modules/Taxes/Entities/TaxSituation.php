<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 17:04
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TaxSituation
 * @package Modules\Taxes\Entities
 */
class TaxSituation extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'situacao_fiscal';

}