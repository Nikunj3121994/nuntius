<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 29/10/2018
 * Time: 18:47
 */

namespace App\Support\Tenancy\Models;


use Tenant;
use App\Support\Tenancy\Scopes\SubsidiaryScope;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SubsidiaryTenant
 * @package App\Support\Tenancy\Models
 */
abstract class SubsidiaryTenant extends Model
{

    /**
     * Registra os atributos conforme a Empresa/Filial Logada
     */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ( $model ) {
            $model->attributes['empresa_id'] = Tenant::getCompany()->id;
            $model->attributes['filial_id'] = Tenant::getSubsidiary()->id;
        });
        static::addGlobalScope(new SubsidiaryScope());
    }
}