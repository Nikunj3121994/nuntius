<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 14/12/2018
 * Time: 09:54
 */

namespace Modules\Admin\Http\Requests\Parametrizations;


use App\Http\Controllers\Contracts\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class RoutineEventsRequest
 * @package Modules\Admin\Http\Requests\Parametrizations
 */
class RoutineEventsRequest extends FormRequest implements ApiRequest
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