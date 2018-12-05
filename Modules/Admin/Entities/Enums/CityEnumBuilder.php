<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 07/11/2018
 * Time: 17:59
 */

namespace Modules\Admin\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Admin\Entities\City;
use Modules\Admin\Entities\State;

/**
 * Class CityEnumBuilder
 * @package Modules\Admin\Entities\Enums
 */
class CityEnumBuilder extends EnumBuilder
{

    /**
     * CityEnumBuilder constructor.
     * @param Request $request
     * @param State $state
     */
    public function __construct( Request $request, State $state )
    {
        parent::__construct(new City(), $request, collect([
            'table' => 'municipio',
            'text' => 'descricao',
            'filters' => [
                [
                    'table' => 'municipio',
                    'field' => 'descricao'
                ],
            ],
            'default_filter' => [
                "estado_id = {$state->id}",
            ],
        ])->recursive());
    }
}