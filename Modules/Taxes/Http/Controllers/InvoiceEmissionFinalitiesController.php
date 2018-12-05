<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 17:21
 */

namespace Modules\Taxes\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Taxes\Http\Enum\InvoiceEmissionFinalitiesEnum;

/**
 * Class InvoiceEmissionFinalitiesController
 * @package Modules\Taxes\Http\Controllers
 */
class InvoiceEmissionFinalitiesController extends Controller
{

    use InvoiceEmissionFinalitiesEnum;

}