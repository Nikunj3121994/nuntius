<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 14:49
 */

namespace Modules\Finance\Tests\Unit;


use Tests\TestCase;
use Modules\Admin\Entities\Company;
use Modules\Admin\Entities\Subsidiary;
use Tenant;

class BusinessUnitsControllerTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        Tenant::logMeIn(Company::find(1), Subsidiary::find(1));
    }

    public function testEnum(): void
    {
        $response = $this->withHeaders([
            'X-Company-ID' => 1,
            'X-Subsidiary-ID' => 1,
        ])->get('/api/finance/business-units/enum');
        dd($response->getContent());
    }
}