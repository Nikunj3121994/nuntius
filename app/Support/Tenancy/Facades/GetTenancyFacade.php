<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 30/10/2018
 * Time: 09:35
 */

namespace App\Support\Tenancy\Facades;


use App\Support\Tenancy\GetTenancy;
use Illuminate\Support\Facades\Facade;

/**
 * Class GetTenancyFacade
 * @package App\Support\Tenancy\Facades
 */
class GetTenancyFacade extends Facade
{

    /**
     * Register the class that will be used as a Facade by the alias
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return GetTenancy::class;
    }
}