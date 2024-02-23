<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Content\FAQController;
use App\Http\Controllers\Admin\Content\MenuController;
use App\Http\Controllers\Admin\Market\BrandController;
use App\Http\Controllers\Admin\Market\OrderController;
use App\Http\Controllers\Admin\Market\StoreController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Market\CommentController;
use App\Http\Controllers\Admin\Market\GalleryController;
use App\Http\Controllers\Admin\Market\PaymentController;
use App\Http\Controllers\Admin\Market\ProductController;
use App\Http\Controllers\Admin\Market\CategoryController;
use App\Http\Controllers\Admin\Market\DeliveryController;
use App\Http\Controllers\Admin\Market\DiscountController;
use App\Http\Controllers\Admin\Market\PropertyController;
use App\Http\Controllers\Admin\Content\CommentController as ContentCommentController;
use App\Http\Controllers\Admin\Content\CategoryController as ContentCategoryController;

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


/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.home');

    Route::prefix('market')->namespace('Market')->group(function () {
        //category
        Route::prefix('category')->group(function () {

            Route::get('/', [CategoryController::class, 'index'])->name('admin.market.category.index');
            Route::get('/create', [CategoryController::class, 'create'])->name('admin.market.category.create');
            Route::post('/store', [CategoryController::class, 'store'])->name('admin.market.category.store');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.market.category.edit');
            Route::put('/update/{id}', [CategoryController::class, 'update'])->name('admin.market.category.update');
            Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.market.category.destroy');
        });

        //brand
        Route::prefix('brand')->group(function () {

            Route::get('/', [BrandController::class, 'index'])->name('admin.market.brand.index');
            Route::get('/create', [BrandController::class, 'create'])->name('admin.market.brand.create');
            Route::post('/store', [BrandController::class, 'store'])->name('admin.market.brand.store');
            Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('admin.market.brand.edit');
            Route::put('/update/{id}', [BrandController::class, 'update'])->name('admin.market.brand.update');
            Route::delete('/destroy/{id}', [BrandController::class, 'destroy'])->name('admin.market.brand.destroy');
        });

        //comment
        Route::prefix('comment')->group(function () {

            Route::get('/', [CommentController::class, 'index'])->name('admin.market.comment.index');
            Route::get('/show', [CommentController::class, 'show'])->name('admin.market.comment.show');
            Route::post('/store', [CommentController::class, 'store'])->name('admin.market.comment.store');
            Route::get('/edit/{id}', [CommentController::class, 'edit'])->name('admin.market.comment.edit');
            Route::put('/update/{id}', [CommentController::class, 'update'])->name('admin.market.comment.update');
            Route::delete('/destroy/{id}', [CommentController::class, 'destroy'])->name('admin.market.comment.destroy');
        });


        //delivery
        Route::prefix('delivery')->group(function () {

            Route::get('/', [DeliveryController::class, 'index'])->name('admin.market.delivery.index');
            Route::get('/create', [DeliveryController::class, 'create'])->name('admin.market.delivery.create');
            Route::post('/store', [DeliveryController::class, 'store'])->name('admin.market.delivery.store');
            Route::get('/edit/{id}', [DeliveryController::class, 'edit'])->name('admin.market.delivery.edit');
            Route::put('/update/{id}', [DeliveryController::class, 'update'])->name('admin.market.delivery.update');
            Route::delete('/destroy/{id}', [DeliveryController::class, 'destroy'])->name('admin.market.delivery.destroy');
        });

        //discounts
        Route::prefix('discount')->group(function () {

            Route::get('/copan', [DiscountController::class, 'copan'])->name('admin.market.discount.copan');
            Route::get('/copan/create', [DiscountController::class, 'coponCreate'])->name('admin.market.discount.copan.create');
            Route::get('/common-discount', [DiscountController::class, 'commonDiscount'])->name('admin.market.discount.commonDiscount');
            Route::get('/common-discount/create', [DiscountController::class, 'commonDiscountCreate'])->name('admin.market.discount.commonDiscount.create');
            Route::get('/amazing-sale', [DiscountController::class, 'amazingSale'])->name('admin.market.discount.amazingSale');
            Route::get('/amazing-sale/create', [DiscountController::class, 'amazingSaleCreate'])->name('admin.market.discount.amazingSale.create');
        });

        //order
        Route::prefix('order')->group(function () {
            Route::get('/', [OrderController::class, 'all'])->name('admin.market.order.all');
            Route::get('/new-order', [OrderController::class, 'newOrders'])->name('admin.market.order.newOrders');
            Route::get('/sending', [OrderController::class, 'sending'])->name('admin.market.order.sending');
            Route::get('/unpaid', [OrderController::class, 'unpaid'])->name('admin.market.order.unpaid');
            Route::get('/canceled', [OrderController::class, 'canceled'])->name('admin.market.order.canceled');
            Route::get('/returned', [OrderController::class, 'returned'])->name('admin.market.order.returned');
            Route::get('/show', [OrderController::class, 'show'])->name('admin.market.order.show');
            Route::get('/change-send-status', [OrderController::class, 'changeSendStatus'])->name('admin.market.order.changeSendStatus');
            Route::get('/change-order-status', [OrderController::class, 'changeOrderStatus'])->name('admin.market.order.changeOrderStatus');
            Route::get('/cancel-order', [OrderController::class, 'cancelOrder'])->name('admin.market.order.cancelOrder');
        });

        //payment
        Route::prefix('payment')->group(function () {
            Route::get('/', [PaymentController::class, 'index'])->name('admin.market.payment.index');
            Route::get('/online', [PaymentController::class, 'online'])->name('admin.market.payment.online');
            Route::get('/offline', [PaymentController::class, 'offline'])->name('admin.market.payment.offline');
            Route::get('/attendance', [PaymentController::class, 'attendance'])->name('admin.market.payment.attendance');
            Route::get('/confirm', [PaymentController::class, 'confirm'])->name('admin.market.payment.confirm');
        });

        //product
        Route::prefix('product')->group(function () {
            Route::get('/', [ProductController::class, 'index'])->name('admin.market.product.index');
            Route::get('/create', [ProductController::class, 'create'])->name('admin.market.product.create');
            Route::post('/store', [ProductController::class, 'store'])->name('admin.market.product.store');
            Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('admin.market.product.edit');
            Route::put('/update/{id}', [ProductController::class, 'update'])->name('admin.market.product.update');
            Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('admin.market.product.destroy');
            Route::get('/gallery', [GalleryController::class, 'index'])->name('admin.market.gallery.index');
            Route::post('/gallery/store', [GalleryController::class, 'store'])->name('admin.market.gallery.store');
            Route::delete('/gallery/destroy/{id}', [GalleryController::class, 'delete'])->name('admin.market.gallery.destroy');
        });

        //property
        Route::prefix('property')->group(function () {

            Route::get('/', [PropertyController::class, 'index'])->name('admin.market.property.index');
            Route::get('/create', [PropertyController::class, 'show'])->name('admin.market.property.create');
            Route::post('/store', [PropertyController::class, 'store'])->name('admin.market.property.store');
            Route::get('/edit/{id}', [PropertyController::class, 'edit'])->name('admin.market.property.edit');
            Route::put('/update/{id}', [PropertyController::class, 'update'])->name('admin.market.property.update');
            Route::delete('/destroy/{id}', [PropertyController::class, 'destroy'])->name('admin.market.property.destroy');
        });


        //store
        Route::prefix('store')->group(function () {

            Route::get('/', [StoreController::class, 'index'])->name('admin.market.store.index');
            Route::get('/add-to-store', [StoreController::class, 'show'])->name('admin.market.store.add-to-store');
            Route::post('/store', [StoreController::class, 'store'])->name('admin.market.store.store');
            Route::get('/edit/{id}', [StoreController::class, 'edit'])->name('admin.market.store.edit');
            Route::put('/update/{id}', [StoreController::class, 'update'])->name('admin.market.store.update');
            Route::delete('/destroy/{id}', [StoreController::class, 'destroy'])->name('admin.market.store.destroy');
        });
    });


    Route::prefix('content')->namespace('Content')->group(function () {
        //category
        Route::prefix('category')->group(function () {

            Route::get('/', [ContentCategoryController::class, 'index'])->name('admin.content.category.index');
            Route::get('/create', [ContentCategoryController::class, 'create'])->name('admin.content.category.create');
            Route::post('/store', [ContentCategoryController::class, 'store'])->name('admin.content.category.store');
            Route::get('/edit/{id}', [ContentCategoryController::class, 'edit'])->name('admin.content.category.edit');
            Route::put('/update/{id}', [ContentCategoryController::class, 'update'])->name('admin.content.category.update');
            Route::delete('/destroy/{id}', [ContentCategoryController::class, 'destroy'])->name('admin.content.category.destroy');
        });

        //comment
        Route::prefix('comment')->group(function () {

            Route::get('/', [ContentCommentController::class, 'index'])->name('admin.content.comment.index');
            Route::get('/show', [ContentCommentController::class, 'show'])->name('admin.content.comment.show');
            Route::post('/store', [ContentCommentController::class, 'store'])->name('admin.content.comment.store');
            Route::get('/edit/{id}', [ContentCommentController::class, 'edit'])->name('admin.content.comment.edit');
            Route::put('/update/{id}', [ContentCommentController::class, 'update'])->name('admin.content.comment.update');
            Route::delete('/destroy/{id}', [ContentCommentController::class, 'destroy'])->name('admin.content.comment.destroy');
        });

        //FAQ
        Route::prefix('faq')->group(function () {

            Route::get('/', [FAQController::class, 'index'])->name('admin.content.faq.index');
            Route::get('/create', [FAQController::class, 'show'])->name('admin.content.faq.create');
            Route::post('/store', [FAQController::class, 'store'])->name('admin.content.faq.store');
            Route::get('/edit/{id}', [FAQController::class, 'edit'])->name('admin.content.faq.edit');
            Route::put('/update/{id}', [FAQController::class, 'update'])->name('admin.content.faq.update');
            Route::delete('/destroy/{id}', [FAQController::class, 'destroy'])->name('admin.content.faq.destroy');
        });
        //FAQ
        Route::prefix('faq')->group(function () {

            Route::get('/', [FAQController::class, 'index'])->name('admin.content.faq.index');
            Route::get('/create', [FAQController::class, 'show'])->name('admin.content.faq.create');
            Route::post('/store', [FAQController::class, 'store'])->name('admin.content.faq.store');
            Route::get('/edit/{id}', [FAQController::class, 'edit'])->name('admin.content.faq.edit');
            Route::put('/update/{id}', [FAQController::class, 'update'])->name('admin.content.faq.update');
            Route::delete('/destroy/{id}', [FAQController::class, 'destroy'])->name('admin.content.faq.destroy');
        });

        //FAQ
        Route::prefix('menu')->group(function () {

            Route::get('/', [MenuController::class, 'index'])->name('admin.content.menu.index');
            Route::get('/create', [MenuController::class, 'show'])->name('admin.content.menu.create');
            Route::post('/store', [MenuController::class, 'store'])->name('admin.content.menu.store');
            Route::get('/edit/{id}', [MenuController::class, 'edit'])->name('admin.content.menu.edit');
            Route::put('/update/{id}', [MenuController::class, 'update'])->name('admin.content.menu.update');
            Route::delete('/destroy/{id}', [MenuController::class, 'destroy'])->name('admin.content.menu.destroy');
        });
    });
});
