<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 17:26
 */

namespace Modules\Stock\Tests\Unit;


use Illuminate\Http\Request;
use Modules\Admin\Entities\Company;
use Modules\Admin\Entities\Subsidiary;
use Modules\Stock\Entities\Enums\ProductMeasurementUnitEnumBuilder;
use Modules\Stock\Entities\Product;
use Tenant;
use Tests\TestCase;

class ProductMeasurementUnitEnumBuilderTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        Tenant::logMeIn(Company::find(1), Subsidiary::find(1));
    }

    public function testEnum(): void
    {
        $enum = new ProductMeasurementUnitEnumBuilder(new Request(['search' => 'UN']), Product::find(1));
        $r = $enum->make()->toArray();
        dd($r);
    }

}