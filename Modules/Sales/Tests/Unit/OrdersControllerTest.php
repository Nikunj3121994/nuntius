<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 30/10/2018
 * Time: 10:47
 */

namespace Modules\Sales\Tests\Unit;


use Tests\TestCase;

class OrdersControllerTest extends TestCase
{

    public function testIndexRequestWithoutHeaders(): void
    {

        $response = $this->get('api/sales/orders');
        $response->assertStatus(402);
    }

    public function testDelete(): void
    {
        $response = $this->withHeaders([
            'X-Company-ID' => 1,
            'X-Subsidiary-ID' => 1,
        ])->delete('/api/sales/orders/1');
        dd($response->getContent());
    }

    public function testGet(): void
    {
        $response = $this->withHeaders([
            'X-Company-ID' => 1,
            'X-Subsidiary-ID' => 1,
        ])->call('GET','/api/sales/orders/1');
        dd($response->getContent());
    }
}