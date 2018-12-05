<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 15:10
 */

namespace Tests\Unit\EnumBuilder;


use App\Support\EnumBuilder\Models\Enum;
use Tests\TestCase;

class EnumTest extends TestCase
{

    public function testToArrayConversion(): void
    {
        $enum = new Enum(['id'=> 1,'text' => 'teste','sub_text' => 'Texto de teste']);
        $a = $enum->toArray();
        dd($a);
    }
}