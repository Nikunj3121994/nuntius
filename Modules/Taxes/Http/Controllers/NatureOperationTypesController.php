<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 17:30
 */

namespace Modules\Taxes\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Taxes\Http\Enum\NatureOperationTypesEnum;

/**
 * Class NatureOperationTypesController
 * @package Modules\Taxes\Http\Controllers
 */
class NatureOperationTypesController extends Controller
{

    use NatureOperationTypesEnum;

}