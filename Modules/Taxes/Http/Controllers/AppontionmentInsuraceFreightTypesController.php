<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 16:51
 */

namespace Modules\Taxes\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Taxes\Entities\ApportionmentInsuranceFreitghtType;
use Modules\Taxes\Http\Enum\ApportionmentInsuranceFreightTypesEnum;

/**
 * Class AppontionmentInsuraceFreightTypesController
 * @package Modules\Taxes\Http\Controllers
 */
class AppontionmentInsuraceFreightTypesController extends Controller
{

    use ApportionmentInsuranceFreightTypesEnum;

    /**
     * @param ApportionmentInsuranceFreitghtType $apportionmentInsuranceFreitghtType
     * @return JsonResponse
     */
    public function show( ApportionmentInsuranceFreitghtType $apportionmentInsuranceFreitghtType ): JsonResponse
    {
        return JsonResponse::create($apportionmentInsuranceFreitghtType->toArray());
    }

}