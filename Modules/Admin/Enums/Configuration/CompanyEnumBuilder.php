<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 08/11/2018
 * Time: 08:14
 */

namespace Modules\Admin\Enums\Configuration;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Configuration\Company;

/**
 * Class CompanyEnumBuilder
 * @package Modules\Admin\Entities\Enums
 */
class CompanyEnumBuilder extends EnumBuilder
{

    /**
     * CompanyEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new Company(), $request, collect([
            'table' => 'empresa',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'empresa',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }

}