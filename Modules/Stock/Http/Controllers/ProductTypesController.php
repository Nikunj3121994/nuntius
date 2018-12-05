<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 05/11/2018
 * Time: 09:06
 */

namespace Modules\Stock\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Stock\Http\Enums\ProductTypeEnum;

/**
 * Class ProductTypeController
 * @package Modules\Stock\Http\Controllers
 */
class ProductTypesController extends Controller
{

    use ProductTypeEnum;

}