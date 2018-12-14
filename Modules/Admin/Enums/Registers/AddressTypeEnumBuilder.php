<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 07/11/2018
 * Time: 17:54
 */

namespace Modules\Admin\Enums\Registers;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Registers\AddressType;

/**
 * Class AddressTypeEnumBuilder
 * @package Modules\Admin\Entities\Enums
 */
class AddressTypeEnumBuilder extends EnumBuilder
{

    /**
     * AddressTypeEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new AddressType(), $request, collect([
            'table' => 'endereco_tipo',
            'text' => 'descricao',
            'filters' => [
                [
                    'table' => 'endereco_tipo',
                    'field' => 'descricao'
                ],
            ],
        ])->recursive());
    }
}