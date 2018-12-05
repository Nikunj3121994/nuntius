<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 14:41
 */

namespace Modules\Sales\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Sales\Entities\Entity;

class EntityEnumBuilder extends EnumBuilder
{

    /**
     * EntityEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new Entity(), $request, collect([
            'table' => 'entidade',
            'text' => 'nome_fantasia',
            'sub_text' => 'cnpj',
            'filters' => [
                [
                    'table' => 'entidade',
                    'field' => 'nome_fantasia'
                ],
                [
                    'table' => 'entidade',
                    'field' => 'razao_social'
                ],
                [
                    'table' => 'entidade',
                    'field' => 'cnpj'
                ],
                [
                    'table' => 'entidade',
                    'field' => 'cpf'
                ],
            ],
        ])->recursive());
    }
}