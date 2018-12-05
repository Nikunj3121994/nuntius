<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 17:47
 */

namespace Modules\Taxes\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Taxes\Http\Enum\TaxSituationsEnum;

/**
 * Class TaxSituationsController
 * @package Modules\Taxes\Http\Controllers
 */
class TaxSituationsController extends Controller
{

    use TaxSituationsEnum;

}