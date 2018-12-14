<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 08/11/2018
 * Time: 13:41
 */

namespace Modules\Admin\Http\Requests\Registers;


use App\Http\Controllers\Contracts\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CountriesRequest
 * @package Modules\Admin\Http\Requests
 */
class CountriesRequest extends FormRequest implements ApiRequest
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