<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 29/10/2018
 * Time: 18:47
 */

namespace App\Support\Tenancy\Models;


use Tenant;
use Illuminate\Database\Eloquent\Model;
use App\Support\Tenancy\Scopes\CompanyScope;

/**
 * Class CompanyTenant
 * @package App\Support\Tenancy\Models
 */
abstract class CompanyTenant extends Model
{

    /**
     * Registra os atributos conforme a Empresa/Filial Logada
     */
    protected static function boot()
    {
        parent::boot();
        static::creating(function($model) {
            $model->attributes['empresa_id'] = Tenant::getCompany()->id;
        });

        static::addGlobalScope(new CompanyScope());
    }
}