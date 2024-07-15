<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AnotherMainController;
use App\Http\Controllers\Admin\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
//});

    //Front End
    Route::get('/', [AnotherMainController::class , 'index'])->name('home');
    Route::get('/about', [AnotherMainController::class , 'about'])->name('about');
    Route::get('/contact', [AnotherMainController::class , 'contact'])->name('contact');
    Route::get('/index-full', [AnotherMainController::class , 'indexFull'])->name('index.full');
    Route::get('/index-full-width-left-sidebar', [AnotherMainController::class , 'indexLeftSidebar'])->name('index.leftsidebar');
    Route::get('/index-full-width-right-sidebar', [AnotherMainController::class , 'indexRightSidebar'])->name('index.rightsidebar');
    Route::get('/index-list-style', [AnotherMainController::class , 'indexListStyle'])->name('index.listStyle');
    Route::get('/index-list-left', [AnotherMainController::class , 'indexListLeft'])->name('index.listLeft');
    Route::get('/index-list-right', [AnotherMainController::class , 'indexListright'])->name('index.listRight');
    Route::get('/author', [AnotherMainController::class , 'author'])->name('author');
    Route::get('/post-details1', [AnotherMainController::class , 'postDetails1'])->name('postDetails1');
    Route::get('/post-details2', [AnotherMainController::class , 'postDetails2'])->name('postDetails2');
    Route::get('/post-element', [AnotherMainController::class , 'postElement'])->name('postElement');
    Route::get('/privacy-policy', [AnotherMainController::class , 'privacyPolicy'])->name('policy');
    Route::get('/terms-condition', [AnotherMainController::class , 'termsCondition'])->name('termsCondition');


    //Admin All Routes
    Route::get('/admin' , [HomeController::class , 'index'])->name('index');
    Route::get('/admin/crm' , [HomeController::class , 'CRM'])->name('crm');
    Route::get('/admin/product-list' , [HomeController::class , 'productList'])->name('product.list');
    Route::get('/admin/product-add' , [HomeController::class , 'addProduct'])->name('add.product');
    Route::get('/admin/category-list' , [HomeController::class , 'categoryList'])->name('category.list');
    Route::get('/admin/login' , [HomeController::class , 'Login'])->name('login');
    Route::get('/admin/register' , [HomeController::class , 'register'])->name('register');
    Route::get('/admin/profile-setting' , [HomeController::class , 'profileSetting'])->name('profileSetting');
    Route::get('/admin/profile' , [HomeController::class , 'profile'])->name('profile');
    Route::get('/admin/logout' , [HomeController::class , 'logout'])->name('logout');

    //delete Product
    Route::get('/admin/product/delete/{id}' , [HomeController::class , 'delete'])->name('product.delete');

    //product status
    Route::get('/admin/product/status/{id}' , [HomeController::class , 'status'])->name('product.status');
    
    //product store
    Route::post('/admin/product/store' , [HomeController::class , 'productStore'])->name('product.store');

    //product edit
    Route::get('/admin/product/{id}/edit' , [HomeController::class , 'editProduct'])->name('product.edit');

     //product update
     Route::put('admin/product/update/{id}' , [HomeController::class , 'Productupdate'])->name('product.update');