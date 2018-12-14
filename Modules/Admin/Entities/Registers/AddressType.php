<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 17:53
 */

namespace Modules\Admin\Entities\Registers;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AddressType
 * @package Modules\Admin\Entities
 */
class AddressType extends Model
{

    use SoftDeletes;

    const GENERAL = 1; // geral
    const SALE = 2; // faturamento
    const BILLING = 3; // cobrança
    const DELIVERY = 4; // entrega


    /**
     * @var string
     */
    protected $table = 'endereco_tipo';

    /**
     * @var array
     */
    protected $fillable = [
        'descricao',
        'smarter_id',
    ];
}