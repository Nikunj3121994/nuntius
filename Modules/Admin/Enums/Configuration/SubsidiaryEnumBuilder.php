<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 08/11/2018
 * Time: 09:51
 */

namespace Modules\Admin\Enums\Configuration;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Configuration\Company;
use Modules\Admin\Entities\Configuration\Subsidiary;

/**
 * Class SubsidiaryEnumBuilder
 * @package Modules\Admin\Entities\Enums
 */
class SubsidiaryEnumBuilder extends EnumBuilder
{

    /**
     * SubsidiaryEnumBuilder constructor.
     * @param Request $request
     * @param Company $company
     */
    public function __construct( Request $request, Company $company )
    {
        parent::__construct(new Subsidiary(), $request, collect([
            'table' => 'filial',
            'text' => 'nome',
            'sub_text' => 'cnpj',
            'filters' => [
                [
                    'table' => 'filial',
                    'field' => 'nome'
                ],
                [
                    'table' => 'filial',
                    'field' => 'cnpj'
                ],
            ],
            'default_filter' => [
                "company_id = {$company->id}",
            ],
        ])->recursive());
    }
}