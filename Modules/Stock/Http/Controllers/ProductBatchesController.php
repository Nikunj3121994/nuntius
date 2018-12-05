<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 05/11/2018
 * Time: 09:02
 */

namespace Modules\Stock\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Stock\Http\Enums\ProductBatchEnum;

/**
 * Class ProductBatchController
 * @package Modules\Stock\Http\Controllers
 */
class ProductBatchesController extends Controller
{

    use ProductBatchEnum;

}