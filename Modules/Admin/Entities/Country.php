<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 17:47
 */

namespace Modules\Admin\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Country
 * @package Modules\Admin\Entities
 */
class Country extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'pais';
}