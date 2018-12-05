<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 17:23
 */

namespace Modules\Taxes\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Taxes\Http\Enum\InvoicePrintTypesEnum;

/**
 * Class InvoicePrintTypesController
 * @package Modules\Taxes\Http\Controllers
 */
class InvoicePrintTypesController extends Controller
{

    use InvoicePrintTypesEnum;

}