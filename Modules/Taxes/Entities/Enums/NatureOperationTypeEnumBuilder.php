<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:03
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\NatureOperationType;

/**
 * Class NatureOperationTypeEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class NatureOperationTypeEnumBuilder extends EnumBuilder
{

    /**
     * NatureOperationTypeEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new NatureOperationType(), $request, collect([
            'table' => 'natureza_operacao_tipo',
            'text' => 'codigo',
            'sub_text' => 'descricao',
            'filters' => [
                [
                    'table' => 'natureza_operacao_tipo',
                    'field' => 'codigo'
                ],
                [
                    'table' => 'natureza_operacao_tipo',
                    'field' => 'descricao'
                ],
            ],
        ])->recursive());
    }

}