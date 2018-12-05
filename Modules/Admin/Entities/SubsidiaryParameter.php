<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 30/10/2018
 * Time: 08:52
 */

namespace Modules\Admin\Entities;


use App\Support\Tenancy\Models\SubsidiaryTenant;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubsidiaryParameter extends SubsidiaryTenant
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'parametro_filial';

    /**
     * @var array
     */
    protected $fillable = [
        'empresa_id',
        'filial_id',
        'variavel',
        'tipo',
        'conteudo',
        'descricao',
    ];
}