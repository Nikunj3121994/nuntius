<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 30/10/2018
 * Time: 09:21
 */

namespace App\Providers;


use App\Exceptions\TenancyNotFoundException;
use App\Support\Tenancy\GetTenancy;
use Illuminate\Support\ServiceProvider;
use Modules\Admin\Entities\Company;
use Modules\Admin\Entities\Subsidiary;

/**
 * Class SubsidiaryServiceProvider
 * @package App\Providers
 */
class SubsidiaryServiceProvider extends ServiceProvider
{

    /**
     * Register the tenant using the header parameters
     */
    public function register(): void
    {
        $this->app->singleton(GetTenancy::class, function ( $app ) {
            $getTenancy = new GetTenancy(
                Company::find(request()->header('company_id')),
                Subsidiary::find(request()->header('subsidiary_id'))
            );

            if (!$getTenancy->isRegistered()) {
                throw new TenancyNotFoundException('Company and/or Subsidiary not Registered properly. Check the header parameters.');
            }

            return $getTenancy;
        });
    }
}