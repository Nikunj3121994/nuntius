<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 08/11/2018
 * Time: 09:54
 */

namespace Modules\Admin\Enums\Parametrizations;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Configuration\Subsidiary;
use Modules\Admin\Entities\Parametrizations\SubsidiaryParameter;

/**
 * Class SubsidiaryParameterEnumBuilder
 * @package Modules\Admin\Entities\Enums
 */
class SubsidiaryParameterEnumBuilder extends EnumBuilder
{

    /**
     * SubsidiaryParameterEnumBuilder constructor.
     * @param Request $request
     * @param Subsidiary $subsidiary
     */
    public function __construct( Request $request, Subsidiary $subsidiary )
    {
        parent::__construct(new SubsidiaryParameter(), $request, collect([
            'table' => 'parametro_filial',
            'text' => 'variavel',
            'sub_text' => 'descricao',
            'filters' => [
                [
                    'table' => 'parametro_filial',
                    'field' => 'variavel'
                ],
                [
                    'table' => 'parametro_filial',
                    'field' => 'descricao'
                ],
            ],
            'default_filter' => [
                "filial_id = {$subsidiary->id}",
            ],
        ])->recursive());
    }
}