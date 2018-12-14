<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 13/12/2018
 * Time: 14:42
 */

namespace Modules\Admin\Enums\Configuration;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Configuration\Permission;

/**
 * Class PermissionEnumBuilder
 * @package Modules\Admin\Enums\Configuration
 */
class PermissionEnumBuilder extends EnumBuilder
{

    /**
     * CompanyEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new Permission(), $request, collect([
            'table' => 'permissions',
            'text' => 'display_name',
            'filters' => [
                [
                    'table' => 'permissions',
                    'field' => 'display_name'
                ],
            ],
        ])->recursive());
    }

}