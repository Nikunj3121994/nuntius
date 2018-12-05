<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 06/11/2018
 * Time: 17:46
 */

namespace Modules\Taxes\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Taxes\Http\Enum\TaxRegimesEnum;

/**
 * Class TaxRegimesController
 * @package Modules\Taxes\Http\Controllers
 */
class TaxRegimesController extends Controller
{
    use TaxRegimesEnum;
}