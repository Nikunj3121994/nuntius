<?php
/**
 * Created by PhpStorm.
 * User: fbranis
 * Date: 05/11/2018
 * Time: 09:03
 */

namespace Modules\Stock\Http\Controllers;


use App\Http\Controllers\Controller;
use Modules\Stock\Http\Enums\ProductCategoryEnum;

/**
 * Class ProductCategoryController
 * @package Modules\Stock\Http\Controllers
 */
class ProductCategoriesController extends Controller
{

    use ProductCategoryEnum;

}