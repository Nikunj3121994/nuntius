<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:05
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\Ncm;

/**
 * Class NcmEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class NcmEnumBuilder extends EnumBuilder
{

    /**
     * NcmEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new Ncm(), $request, collect([
            'table' => 'ncm',
            'text' => 'posicao',
            'sub_text' => 'descricao',
            'filters' => [
                [
                    'table' => 'ncm',
                    'field' => 'nome'
                ],
                [
                    'table' => 'ncm',
                    'field' => 'descricao'
                ],
            ],
        ])->recursive());
    }
}