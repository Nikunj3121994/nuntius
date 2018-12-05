<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 17:11
 */

namespace Modules\Admin\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EntityCategory
 * @package Modules\Admin\Entities
 */
class EntityCategory extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'entidade_categoria';

}