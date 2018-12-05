<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 30/10/2018
 * Time: 10:37
 */

namespace App\Support\Tenancy\Scopes;


use Tenant;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class SubsidiaryScope implements Scope
{

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return void
     */
    public function apply( Builder $builder, Model $model )
    {
        $builder->where($model->getTable() . '.empresa_id', '=', Tenant::getCompany()->id)
            ->where($model->getTable() . '.filial_id', '=', Tenant::getSubsidiary()->id);
    }
}