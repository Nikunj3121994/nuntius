<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 18:57
 */

namespace Modules\Taxes\Entities;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DestinationOperationLocal
 * @package Modules\Taxes\Entities
 */
class DestinationOperationLocal extends Model
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'local_destino_operacao';

}