<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 10:54
 */

namespace Modules\Finance\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Finance\Http\Enums\PaymentMeansEnum;

/**
 * Class PaymentMeansController
 * @package Modules\Finance\Http\Controllers
 */
class PaymentMeansController extends Controller
{

    use PaymentMeansEnum;
}