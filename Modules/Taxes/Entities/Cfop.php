<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 19:03
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cfop
 * @package Modules\Taxes\Entities
 */
class Cfop extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'cfop';

}