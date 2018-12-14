<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 08/11/2018
 * Time: 08:16
 */

namespace Modules\Admin\Enums\Registers;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Registers\Country;

/**
 * Class CountryEnumBuilder
 * @package Modules\Admin\Entities\Enums
 */
class CountryEnumBuilder extends EnumBuilder
{

    /**
     * CountryEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new Country(), $request, collect([
            'table' => 'pais',
            'text' => 'descricao',
            'filters' => [
                [
                    'table' => 'pais',
                    'field' => 'descricao'
                ],
            ],
        ])->recursive());
    }
}