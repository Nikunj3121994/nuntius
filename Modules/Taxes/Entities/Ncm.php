<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:15
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ncm
 * @package Modules\Taxes\Entities
 */
class Ncm extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'ncm';

}