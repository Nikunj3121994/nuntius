<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 17:53
 */

namespace Modules\Admin\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AddressType
 * @package Modules\Admin\Entities
 */
class AddressType extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $appends = 'endereco_tipo';
}