<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 13/12/2018
 * Time: 15:45
 */

namespace Modules\Admin\Enums\Configuration;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Configuration\User;

/**
 * Class UserEnumBuilder
 * @package Modules\Admin\Enums\Configuration
 */
class UserEnumBuilder extends EnumBuilder
{

    /**
     * UserEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new User(), $request, collect([
            'table' => 'users',
            'text' => 'name',
            'sub_text' => 'email',
            'filters' => [
                [
                    'table' => 'users',
                    'field' => 'name'
                ],
                [
                    'table' => 'users',
                    'field' => 'email'
                ],
            ],
        ])->recursive());
    }
}