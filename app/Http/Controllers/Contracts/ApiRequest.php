<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 30/10/2018
 * Time: 09:45
 */

namespace App\Http\Controllers\Contracts;


interface ApiRequest
{

    /**
     * This method sets the rules to the given request
     * @return array
     */
    public function rules(): array;

    /**
     * This methods must return if the given user is able to access the endpoint
     * @return bool
     */
    public function authorize(): bool;
}