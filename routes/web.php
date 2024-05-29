<?php

use Illuminate\Support\Facades\Route;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PageController;
use App\Http\Controllers\Web\LoginController;
use App\Http\Controllers\Web\RegisterController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Web\ProductDetailsController;
use App\Http\Controllers\web\CartController;
use App\Http\Controllers\web\CheckoutController;
use App\Http\Controllers\web\OrderDetailsController;
use App\Http\Controllers\Admin\FranchiseController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DemoController;
use App\Http\Controllers\Admin\ScoController;
use App\Http\Controllers\Machine\MachineController;
use App\Http\Controllers\Admin\MachineController1;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SitemapController;


// use App\Http\Controllers\Admin\Website;
// use App\Http\Controllers\web\Website;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('SuperAdmin')->group(function(){
    //  Route::get('admin/brand/mail1', function () {Mail::to('@gmail.com')->send(new SendMail($data));});
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
//admin
Route::get('admin/admin/list', [AdminController::class, 'admin_list']);
Route::get('admin/admin/add', [AdminController::class, 'admin_add']);
Route::post('admin/admin/add', [AdminController::class, 'add_admin_insert']);
Route::get('admin/admin/edit/{id}', [AdminController::class, 'add_admin_edit']);
Route::post('admin/admin/edit/{id}', [AdminController::class, 'admin_add_update']);
Route::get('admin/admin/delete/{id}', [AdminController::class, 'admin_add_delete']);



    Route::get('admin/category/list', [CategoryController::class, 'category_list']);
    Route::get('admin/category/add', [CategoryController::class, 'category_add']);
    Route::post('admin/category/add', [CategoryController::class, 'category_insert']);
    Route::get('admin/category/edit/{id}', [CategoryController::class, 'category_edit']);
    Route::post('admin/category/edit/{id}', [CategoryController::class, 'category_update']);
    Route::get('admin/category/delete/{id}', [CategoryController::class, 'category_delete']);


    Route::get('admin/brand/add', [MailController::class, 'brand_add'])->name('add-new');
    Route::post('admin/brand/add', [MailController::class, 'store']);
    Route::get('admin/brand/list', [MailController::class, 'list'])->name('brand-list');
    Route::get('admin/brand/edit/{id}', [MailController::class, 'brand_edit'])->name('edit-brand');
    Route::post('admin/brand/edit/{id}', [MailController::class, 'brand_update']);
    Route::get('admin/brand/delete/{id}', [MailController::class, 'brand_delete'])->name('delete-brand');
 
    Route::get('admin/franchiselist', [FranchiseController::class, 'list'])->name('franchiselist');
    Route::get('admin/franchise/delete/{id}', [FranchiseController::class, 'delete']);



    // Route::get('admin/brand/mail/{arg1}/{arg2}', [BrandController::class, 'mail']);




    Route::resource('admin/products', ProductController::class);

    Route::get('admin/allOrders', [OrdersController::class, 'listOrders'])->name('list-orders');
    Route::patch('/orders/{orderId}/update-status', [OrdersController::class, 'updateStatus'])->name('orders.updateStatus');
    Route::delete('/orders/{orderId}', [OrdersController::class, 'destroy'])->name('orders.destroy');
    Route::get('admin/orders/{orderId}/invoice', [OrdersController::class, 'generateInvoice'])->name('orders.generateInvoice');
    Route::resource('admin/gallery', GalleryController::class);
    // Route::get('mail1', [Website::class, 'mail']);
    
    Route::post('/upload-images', [DemoController::class, 'upload'])->name('upload.images');
    Route::post('image/upload/store', [DemoController::class, 'fileStore']);
    Route::post('/image/remove', 'DemoController@fileRemove')->name('file.remove');
    // routes/web.php or routes/web/web.php (depending on your Laravel version)


    Route::post('upload-multiple', [BlogController::class, 'uploadMultiple']);
    Route::get('fetch-images', [BlogController::class, 'fetchImages'])->name('fetch.images');
    //   Route::delete('delete-image/{filename}', [BlogController::class, 'deleteImage'])->name('delete.image');
    Route::delete('/delete-image/{id}', [BlogController::class, 'deleteimage']);
    //   SCO link
    Route::get('admin/seo/seolist', [ScoController::class, 'scolist'])->name('sco-list');
    Route::post('admin/seo/addlink', [ScoController::class, 'create_link'])->name('create-link');
    Route::get('admin/seo/delete/{id}', [ScoController::class, 'link_delete']);
    Route::get('admin/link/edit/{id}', [ScoController::class, 'link_edit']);
    Route::post('admin/link/edit/{id}', [ScoController::class, 'link_update'])->name('update-link');
    //   SCO home
    Route::get('admin/home/homelist', [ScoController::class, 'homelist'])->name('home-list');
    Route::post('admin/home/addhome', [ScoController::class, 'create_home'])->name('create-home');
    Route::get('admin/home/delete/{id}', [ScoController::class, 'home_delete']);
    Route::get('admin/home/edit/{id}', [ScoController::class, 'home_edit']);
    Route::post('admin/home/edit/{id}', [ScoController::class, 'home_update'])->name('home-update');
    //   SCO About
    Route::get('admin/about/aboutlist', [ScoController::class, 'aboutlist'])->name('about-list');
    Route::post('admin/about/addabout', [ScoController::class, 'create_about'])->name('create-about');
    Route::get('admin/about/delete/{id}', [ScoController::class, 'about_delete']);
    Route::get('admin/about/edit/{id}', [ScoController::class, 'about_edit']);
    Route::post('admin/about/edit/{id}', [ScoController::class, 'about_update'])->name('about-update');
    //   SCO service
    Route::get('admin/service/servicelist', [ScoController::class, 'servicelist'])->name('service-list');
    Route::post('admin/service/addservice', [ScoController::class, 'create_service'])->name('create-service');
    Route::get('admin/service/delete/{id}', [ScoController::class, 'service_delete']);
    Route::get('admin/service/edit/{id}', [ScoController::class, 'service_edit']);
    Route::post('admin/service/edit/{id}', [ScoController::class, 'service_update'])->name('service-update');
    //   SCO contact
    Route::get('admin/contact/contactlist', [ScoController::class, 'contactlist'])->name('contact-list');
    Route::post('admin/contact/addcontact', [ScoController::class, 'create_contact'])->name('create-contact');
    Route::get('admin/contact/delete/{id}', [ScoController::class, 'contact_delete']);
    Route::get('admin/contact/edit/{id}', [ScoController::class, 'contact_edit']);
    Route::post('admin/contact/edit/{id}', [ScoController::class, 'contact_update'])->name('contact-update');

    //   SCO content blog
    Route::get('admin/scoblog/scobloglist', [ScoController::class, 'scobloglist'])->name('scoblog-list');
    Route::post('admin/scoblog/addscoblog', [ScoController::class, 'create_scoblog'])->name('create-scoblog');
    Route::get('admin/scoblog/delete/{id}', [ScoController::class, 'scoblog_delete']);
    Route::get('admin/scoblog/edit/{id}', [ScoController::class, 'edit_scoblog']);
    Route::post('admin/scoblog/edit/{id}', [ScoController::class, 'scoblog_update'])->name('scoblog-update');
    //   SCO work
    Route::get('admin/work/worklist', [ScoController::class, 'worklist'])->name('work-list');
    Route::post('admin/work/addwork', [ScoController::class, 'create_work'])->name('create-work');
    Route::get('admin/work/delete/{id}', [ScoController::class, 'work_delete']);
    Route::get('admin/work/edit/{id}', [ScoController::class, 'work_edit']);
    Route::post('admin/work/edit/{id}', [ScoController::class, 'work_update'])->name('work-update');
    //SCO work find id page
    Route::get('admin/solo/solowork', [ScoController::class, 'soloworklist'])->name('solowork-list');
    Route::post('admin/solo/solowork', [ScoController::class, 'solowork_work'])->name('create-solowork');
    Route::get('admin/solowork/delete/{id}', [ScoController::class, 'solowork_delete']);
    Route::get('admin/solowork/edit/{id}', [ScoController::class, 'solowork_edit']);
    Route::post('admin/solowork/edit/{id}', [ScoController::class, 'solowork_update'])->name('solowork-update');
    //SCO blog page find id page
    Route::get('admin/oneblog/onebloglist', [ScoController::class, 'onebloglist'])->name('oneblog-list');
    Route::post('admin/oneblog/onebloglist', [ScoController::class, 'create_oneblog'])->name('create-oneblog');
    Route::get('admin/oneblog/delete/{id}', [ScoController::class, 'oneblog_delete']);
    Route::get('admin/oneblog/edit/{id}', [ScoController::class, 'oneblog_edit']);
    Route::post('admin/oneblog/edit/{id}', [ScoController::class, 'oneblog_update'])->name('oneblog-update');
    Route::post('/check-slug-availability', [ScoController::class, 'checkSlugAvailability']);
    Route::post('/validate-slug', 'ScoController@validateSlug')->name('validate-slug');



});

Route::post('logout', [LoginController::class, 'logout'])->name('logout');
 Route::get('/', [MachineController::class, 'index']);
 Route::get('/about', [MachineController::class, 'about']);
 Route::get('/service', [MachineController::class, 'service']);
 Route::get('/gallery', [MachineController::class, 'gallery']);
 Route::get('/getservice', [MachineController::class, 'getservice'])->name('getservice');

 Route::get('/blog', [MachineController::class, 'blog']);
 Route::get('/contact', [MachineController::class, 'contact']);
 Route::get('/singleblog', [MachineController::class, 'singleblog']);
 Route::get('admin', [AuthController::class, 'login']);
 Route::post('admin', [AuthController::class, 'auth_login_admin']);
 Route::get('admin/logout', [AuthController::class, 'logout_admin']);
 Route::get('/header', [MachineController::class, 'get_logo1'])->name('header');
 Route::post('/contact', [MachineController::class, 'store'])->name('contact.store');
 Route::get('/profile', [MachineController::class, 'get_profile'])->name('profile');
 Route::get('/service1', [MachineController::class, 'get_service'])->name('service1');
 Route::get('/singleblog/{id}/{slug}', [MachineController::class, 'get_blog']);
 Route::get('/allget', [MachineController::class, 'get_all'])->name('allget');
 Route::get('/singleblog/{id}', [MachineController::class, 'get_single_blog']);
 Route::get('sitemap.xml', [SitemapController::class, 'index']);



    Route::middleware('auth')->group(function () {
        //gallery
        Route::get('admin/gallery3/list3', [MachineController1::class, 'gallery_list3'])->name('gallery-list3');
        Route::post('admin/gallery2/add', [MachineController1::class, 'gallery_add'])->name('add-gallery');
        Route::post('admin/gallery/update/{id}', [MachineController1::class, 'gallery_update'])->name('updategallery');
        Route::get('admin/gallery/edit/{id}', [MachineController1::class, 'galleryedit']);
         Route::get('admin/gallery/delete/{id}', [MachineController1::class,'gallerydelete']);

            // service
    Route::get('admin/service1/list', [MachineController1::class, 'client_list'])->name('ser-list');
    Route::post('admin/service1/add', [MachineController1::class, 'client_add'])->name('add-client');
    Route::post('admin/client/test', [MachineController1::class, 'test_add'])->name('add-test');
    Route::get('admin/client/edit/{id}', [MachineController1::class, 'clientedit']);
    Route::post('admin/client/update/{id}', [MachineController1::class, 'client_update'])->name('updateclient');
    Route::post('admin/service1/update/{id}', [MachineController1::class, 'client_update1'])->name('updateclient1');
    Route::get('admin/service1/edit/{id}', [MachineController1::class, 'serviceedit']);
    Route::post('admin/service2/add', [MachineController1::class, 'service_add'])->name('add-service');
    Route::get('admin/addclient/deleteclient/{id}', [MachineController1::class, 'deleteclient']);
    
    Route::get('admin/test/delete/{id}', [MachineController1::class, 'testdelete']);
//Banner
    Route::get('admin/Banner/Bannerlist', [MachineController1::class, 'Bannerlist'])->name('Banner-list');
    Route::post('admin/banner/add', [MachineController1::class, 'create_banner'])->name('create-banner');
    Route::get('admin/banner/delete/{id}', [MachineController1::class, 'banner_delete']);
    Route::get('admin/banner/edit/{id}', [MachineController1::class, 'banner_edit']);
    Route::post('admin/banner/update/{id}', [MachineController1::class, 'banner_update'])->name('banner-update');
    //details
    Route::get('admin/detail/list', [MachineController1::class, 'detail_list'])->name('detail-list');
     Route::post('admin/detail/add', [MachineController1::class, 'detail_add'])->name('add-detail');

     Route::post('admin/detail/update/{id}', [MachineController1::class, 'detail_update'])->name('updatedetail');
     Route::get('admin/detail/edit/{id}', [MachineController1::class, 'detailedit']);
    
     Route::get('admin/detail/delete/{id}', [MachineController1::class, 'detaildelete']);   

      Route::get('admin/admin1/list', [AdminController::class, 'admin_list1']);

    //link and Query
    Route::get('admin/social/list', [MachineController1::class, 'social_list'])->name('social-list');
    Route::post('admin/social/add', [MachineController1::class, 'social_add'])->name('add-social');
    // Route::post('admin/client/test', [MachineController1::class, 'test_add'])->name('add-test');
      Route::get('admin/social/edit/{id}', [MachineController1::class, 'socialedit']);
    Route::post('admin/social/update/{id}', [MachineController1::class, 'social_update'])->name('updatesocial');

     Route::post('admin/query/update/{id}', [MachineController1::class, 'query_update'])->name('updatequery');
     Route::get('admin/query/edit/{id}', [MachineController1::class, 'queryedit']);
     Route::post('admin/query/add', [MachineController1::class, 'query_add'])->name('add-query');

     Route::get('admin/social/delete/{id}', [MachineController1::class, 'socialclient']);
    
    Route::get('admin/query/delete/{id}', [MachineController1::class, 'querydelete']);
    //message
    Route::get('admin/message', [MailController::class, 'maillist']);
    Route::get('admin/brand/deletemail/{id}', [MailController::class, 'deletemail']);
        //   SCO blog no sco
        Route::get('admin/blogseo/bloglist', [ScoController::class, 'bloglist'])->name('blogsco-list');
        Route::post('admin/blogseo/addblog', [ScoController::class, 'create_blogsco'])->name('create-blogsco');
        Route::get('admin/blogseo/delete/{id}', [ScoController::class, 'blogsco_delete']);
        Route::get('admin/blogseo/edit/{id}', [ScoController::class, 'blogsco_edit']);
        Route::post('admin/blogseo/edit/{id}', [ScoController::class, 'blogsco_update'])->name('blogsco-update');
    
        Route::post('admin/sco/edit/{id}', [ScoController::class, 'sco_update'])->name('sco-update');
        Route::get('view_blogcontent/{id}', [ScoController::class, 'content_view'])->name('view_blogcontent');
        //logo
        Route::get('admin/logo/logo', [BlogController::class, 'logo'])->name('blog-logo');
        Route::post('admin/addlogo/logo', [BlogController::class, 'create_logo'])->name('create-logo');
        Route::get('admin/logo/delete/{id}', [BlogController::class, 'gallery_delete'])->name('delete-brand');
        //doubt
        Route::get('admin/blog/list', [BlogController::class, 'list'])->name('blog-list');

    Route::get('admin/addblog/add', [BlogController::class, 'blog_add'])->name('add-blog');
    Route::post('admin/addblog/add', [BlogController::class, 'create_blog'])->name('create-blog');
  
    Route::get('admin/brand/delete/{id}', [BlogController::class, 'delete'])->name('delete-brand');
    Route::get('admin/blog/edit/{id}', [BlogController::class, 'blog_edit']);
    Route::post('admin/blog/edit/{id}', [BlogController::class, 'blog_update'])->name('update-brand');
    Route::get('add-blogcontent/{id}', [BlogController::class, 'content_add'])->name('add-blogcontent');
    Route::post('admin/addcontentblog/add', [BlogController::class, 'create_content_blog'])->name('create-content-blog');
    Route::get('view-blogcontent/{id}', [BlogController::class, 'content_view'])->name('view-blogcontent');
    Route::get('admin/blog/delete/{id}', [BlogController::class, 'delete_blog'])->name('delete-blog');
    // routes/web.php or routes/api.php
    Route::post('/upload-image', [BlogController::class, 'uploadImage'])->name('upload.image.route');
    Route::get('/content_add1', function () {
        return view('editor');
    });
    Route::get('/editor', [BlogController::class, 'content_add1']);
    // routes/web.php
    Route::post('ckeditor/upload', [BlogController::class, 'upload'])->name('ckeditor.upload');
    Route::get('admin/contentblog/edit/{id}', [BlogController::class, 'content_edit']);
    Route::post('admin/updateblog/edit/{id}', [BlogController::class, 'create_content_update_blog'])->name('update-content');
    Route::get('admin/alex', [BlogController::class, 'demo']);

    });
    