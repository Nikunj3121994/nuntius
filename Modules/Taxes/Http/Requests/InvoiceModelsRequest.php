<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 07/11/2018
 * Time: 17:31
 */

namespace Modules\Taxes\Http\Requests;


use App\Http\Controllers\Contracts\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class InvoiceModelsRequest
 * @package Modules\Taxes\Http\Requests
 */
class InvoiceModelsRequest extends FormRequest implements ApiRequest
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