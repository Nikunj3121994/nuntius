<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 29/10/2018
 * Time: 18:54
 */

namespace Modules\Admin\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Subsidiary
 * @package Modules\Admin\Entities
 */
class Subsidiary extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'filial';
}