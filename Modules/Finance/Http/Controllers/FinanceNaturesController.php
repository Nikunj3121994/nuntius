<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 31/10/2018
 * Time: 10:24
 */

namespace Modules\Finance\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Finance\Http\Enums\FinanceNaturesEnum;

/**
 * Class FinanceNaturesController
 * @package Modules\Finance\Http\Controllers
 */
class FinanceNaturesController extends Controller
{

    use FinanceNaturesEnum;

}