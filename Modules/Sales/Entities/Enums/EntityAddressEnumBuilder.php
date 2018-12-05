<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 14:43
 */

namespace Modules\Sales\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Sales\Entities\Entity;
use Modules\Sales\Entities\EntityAddress;

/**
 * Class EntityAddressEnumBuilder
 * @package Modules\Sales\Entities\Enums
 */
class EntityAddressEnumBuilder extends EnumBuilder
{

    /**
     * EntityAddressEnumBuilder constructor.
     * @param Request $request
     * @param Entity $entity
     */
    public function __construct( Request $request, Entity $entity )
    {
        parent::__construct(new EntityAddress(), $request, collect([
            'table' => 'entidade_endereco',
            'text' => 'rua',
            'sub_text' => 'numero',
            'join' => [
                [
                    'table' => 'estado',
                    'foreign_key' => 'estado_id',
                ],
                [
                    'table' => 'municipio',
                    'foreign_key' => 'municipio_id',
                ],
            ],
            'filters' => [
                [
                    'table' => 'municipio',
                    'field' => 'descricao'
                ],
                [
                    'table' => 'estado',
                    'field' => 'sigla_uf'
                ],
                [
                    'table' => 'estado',
                    'field' => 'descricao'
                ],
                [
                    'table' => 'entidade_endereco',
                    'field' => 'rua'
                ],
                [
                    'table' => 'entidade_endereco',
                    'field' => 'bairro'
                ],
            ],
            'default_filter' => [
                "entidade_id = {$entity->id}"
            ]
        ])->recursive());
    }

}