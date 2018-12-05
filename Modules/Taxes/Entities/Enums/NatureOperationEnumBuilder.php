<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:00
 */

namespace Modules\Taxes\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Taxes\Entities\NatureOperation;

/**
 * Class NatureOperationEnumBuilder
 * @package Modules\Taxes\Entities\Enums
 */
class NatureOperationEnumBuilder extends EnumBuilder
{

    /**
     * NatureOperationEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new NatureOperation(), $request, collect([
            'table' => 'natureza_operacao',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'natureza_operacao',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }

}