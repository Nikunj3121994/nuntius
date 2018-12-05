<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 30/10/2018
 * Time: 09:37
 */

namespace App\Support\Tenancy\Facades;


use App\Support\Tenancy\GetSubsidiaryParameter;
use Illuminate\Support\Facades\Facade;

/**
 * Class GetSubsidiaryParameterFacade
 * @package App\Support\Tenancy\Facades
 */
class GetSubsidiaryParameterFacade extends Facade
{

    /**
     * Register the class that will be used as a Facade by the alias
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return GetSubsidiaryParameter::class;
    }
}