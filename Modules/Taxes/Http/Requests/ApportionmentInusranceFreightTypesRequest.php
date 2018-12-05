<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 07/11/2018
 * Time: 16:56
 */

namespace Modules\Taxes\Http\Requests;


use App\Http\Controllers\Contracts\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ApportionmentInusranceFreightTypesRequest
 * @package Modules\Taxes\Http\Requests
 */
class ApportionmentInusranceFreightTypesRequest extends FormRequest implements ApiRequest
{

    /**
     * This method sets the rules to the given request
     * @return array
     */
    public function rules(): array
    {
        return [

        ];
    }

    /**
     * This methods must return if the given user is able to access the endpoint
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
}