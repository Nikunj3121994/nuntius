<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 08/11/2018
 * Time: 09:41
 */

namespace Modules\Admin\Entities\Enums;


use App\Support\EnumBuilder\EnumBuilder;
use Illuminate\Http\Request;
use Modules\Admin\Entities\EntityCategory;

/**
 * Class EntityCategoryEnumBuilder
 * @package Modules\Admin\Entities\Enums
 */
class EntityCategoryEnumBuilder extends EnumBuilder
{

    /**
     * EntityCategoryEnumBuilder constructor.
     * @param Request $request
     */
    public function __construct( Request $request )
    {
        parent::__construct(new EntityCategory(), $request, collect([
            'table' => 'entidade_categoria',
            'text' => 'nome',
            'filters' => [
                [
                    'table' => 'entidade_categoria',
                    'field' => 'nome'
                ],
            ],
        ])->recursive());
    }
}