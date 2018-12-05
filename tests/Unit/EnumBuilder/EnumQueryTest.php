<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 12:11
 */

namespace Tests\Unit\EnumBuilder;


use App\Support\EnumBuilder\Query\EnumQuery;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Company;
use Modules\Admin\Entities\Subsidiary;
use Modules\Finance\Entities\FinanceNature;
use Tenant;
use Tests\TestCase;

class EnumQueryTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        Tenant::logMeIn(Company::find(1), Subsidiary::find(1));
    }

    public function testMakeQuery(): void
    {

        $query = new EnumQuery(new FinanceNature(), new Request(['search' => '1.03']), collect([
            'table' => 'natureza_financeira',
            'text' => 'nome',
            'sub_text' => 'codigo',
            'filters' => [
                [
                    'table' => 'natureza_financeira',
                    'field' => 'nome'
                ],
                [
                    'table' => 'natureza_financeira',
                    'field' => 'codigo'
                ],
            ],
            'default_filter' => [
                "natureza_financeira.tipo = 'R'",
                "natureza_financeira.tipo_nodo = 'A'",
            ],
        ])->recursive());

        dd($query->get());


    }


}