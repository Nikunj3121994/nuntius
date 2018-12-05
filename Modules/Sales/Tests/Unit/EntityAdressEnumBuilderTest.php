<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 01/11/2018
 * Time: 14:53
 */

namespace Modules\Sales\Tests\Unit;


use Illuminate\Http\Request;
use Modules\Admin\Entities\Company;
use Modules\Admin\Entities\Subsidiary;
use Modules\Sales\Entities\Entity;
use Modules\Sales\Entities\Enums\EntityAddressEnumBuilder;
use Tenant;
use Tests\TestCase;

class EntityAdressEnumBuilderTest extends TestCase
{

    /**
     *
     */
    public function setUp(): void
    {
        parent::setUp();
        Tenant::logMeIn(Company::find(3),Subsidiary::find(3));
    }

    public function testWiithoutSearch(): void
    {
        $enum = new EntityAddressEnumBuilder(new Request(['search' => '']),Entity::find(276));
        $a = $enum->make()->toArray();
        dd($a);
    }

}