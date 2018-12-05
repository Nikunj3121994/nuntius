<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 11:01
 */

namespace Modules\Finance\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Finance\Http\Enums\PaymentRulesEnum;

/**
 * Class PaymentRulesController
 * @package Modules\Finance\Http\Controllers
 */
class PaymentRulesController extends Controller
{

    use PaymentRulesEnum;
}