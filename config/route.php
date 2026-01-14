<?php
/**
 * This file is part of webman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link      http://www.workerman.net/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Webman\Route;


Route::any('/',[app\controller\IndexController::class,'index']);
Route::get('/products',[app\controller\IndexController::class,'products']);
Route::get('/faqs',[app\controller\IndexController::class,'faqs']);
Route::get('/contact',[app\controller\IndexController::class,'contact']);
Route::get('/developers',[app\controller\IndexController::class,'developers']);
Route::get('/about',[app\controller\IndexController::class,'about']);
Route::get('/thank-you',[app\controller\IndexController::class,'thank_you']);
Route::get('/privacy-policy',[app\controller\IndexController::class,'privacy_policy']);
Route::get('/legal',[app\controller\IndexController::class,'legal']);
Route::get('/sign-up',[app\controller\IndexController::class,'signup']);
Route::post('/sign-up',[app\controller\IndexController::class,'signup']);
Route::get('/terms-of-service',[app\controller\IndexController::class,'terms_of_service']);



