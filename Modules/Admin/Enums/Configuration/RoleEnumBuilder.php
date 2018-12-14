<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 13/12/2018
 * Time: 15:27
 */

namespace Modules\Admin\Enums\Configuration;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Configuration\Role;

/**
 * Class RoleEnumBuilder
 * @package Modules\Admin\Enums\Configuration
 */
class RoleEnumBuilder extends EnumBuilder
{
    /**
     * CompanyEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new Role(), $request, collect([
            'table' => 'roles',
            'text' => 'display_name',
            'filters' => [
                [
                    'table' => 'roles',
                    'field' => 'display_name'
                ],
            ],
        ])->recursive());
    }
}