<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 17:09
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TaxRegime
 * @package Modules\Taxes\Entities
 */
class TaxRegime extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'regime_tributario';
}