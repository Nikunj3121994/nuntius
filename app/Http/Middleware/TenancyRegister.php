<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 30/10/2018
 * Time: 12:09
 */

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\JsonResponse;
use Modules\Admin\Entities\Company;
use Modules\Admin\Entities\Subsidiary;
use Tenant;

/**
 * Class TenancyRegister
 * @package App\Http\Middleware
 */
class TenancyRegister
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (!$request->header('X-Company-ID') || !$request->header('X-Subsidiary-ID')) {
            return JsonResponse::create(['msg' => 'Company/Subsidiary must be sent in header.'],422);
        }

        Tenant::logMeIn(
            Company::find($request->header('X-Company-ID')),
            Subsidiary::find($request->header('X-Subsidiary-ID'))
        );

        return $next($request);
    }
}