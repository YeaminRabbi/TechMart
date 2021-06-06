<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
// This is main Home page Route Url Start
Route::get('/', 'App\Http\Controllers\PagesController@index')->name('homepage');

//Single product dynamic dropdowns
Route::get('product/get/price/{att_id}/{product_id}', 'App\Http\Controllers\SingleProductPagesController@findRam')->name('findRam');
Route::post('add-to-cart', 'App\Http\Controllers\SingleProductPagesController@addToCart')->name('add-to-cart')->middleware(['auth']);
Route::post('add-to-cart-onsale', 'App\Http\Controllers\SingleProductPagesController@addToCartOnSale')->name('add-to-cart-onsale')->middleware(['auth']);

//Traking order
Route::get('OrderTracker', 'App\Http\Controllers\OrderProcessPagesController@OrderTracker')->name('OrderTracker')->middleware(['auth']);
Route::get('ViewProducts/{id}', 'App\Http\Controllers\OrderProcessPagesController@ViewProducts')->name('ViewProducts')->middleware(['auth']);


//Product Review Routes
Route::post('/review', 'App\Http\Controllers\SingleProductPagesController@review')->name('Review')->middleware(['auth']);

//Product Wishlist routes
Route::get('/wishlist/{id}', 'App\Http\Controllers\SingleProductPagesController@wishlist')->name('Wishlist')->middleware(['auth']);
Route::get('/wishlist', 'App\Http\Controllers\SingleProductPagesController@wishlistshow')->name('ShowWishlist')->middleware(['auth']);
Route::get('/WishlistItemDelete/{id}', 'App\Http\Controllers\SingleProductPagesController@WishlistItemDelete')->name('WishlistItemDelete')->middleware(['auth']);

//OrderProcess routes
Route::post('/OrderPlacement', 'App\Http\Controllers\OrderProcessPagesController@OrderPlacement')->name('OrderPlacement')->middleware(['auth']);


//Cart routes
Route::get('/cart', 'App\Http\Controllers\CartPagesController@ShowCart')->name('cart')->middleware(['auth']);
Route::get('/SingleItemCartDelete/{id}', 'App\Http\Controllers\CartPagesController@SingleItemCartDelete')->name('SingleItemCartDelete');
Route::post('/quantity/update', 'App\Http\Controllers\CartPagesController@QuantityUpdate')->name('QuantityUpdate');
Route::post('/cartUpdate', 'App\Http\Controllers\CartPagesController@CartUpdate')->name('cartUpdate');

//Checkout Routes
Route::get('/checkout', 'App\Http\Controllers\OrderProcessPagesController@checkout')->name('Checkout')->middleware(['auth']);


// These are About Us routes
Route::get('/abouts/create', 'App\Http\Controllers\AboutusPagesController@create')->name('admin.abouts.create');
Route::put('/abouts/create', 'App\Http\Controllers\AboutusPagesController@store')->name('admin.abouts.store');
Route::get('/abouts/list', 'App\Http\Controllers\AboutusPagesController@list')->name('admin.abouts.list');
Route::get('/abouts/edit/{id}', 'App\Http\Controllers\AboutusPagesController@edit')->name('admin.abouts.edit');
Route::post('/abouts/update/{id}', 'App\Http\Controllers\AboutusPagesController@update')->name('admin.abouts.update');
Route::delete('/abouts/destroy/{id}', 'App\Http\Controllers\AboutusPagesController@destroy')->name('admin.abouts.destroy');


// These are Terms & Conditions routes
Route::get('/terms/create', 'App\Http\Controllers\TermsConditionsPagesController@create')->name('admin.terms.create');
Route::put('/terms/create', 'App\Http\Controllers\TermsConditionsPagesController@store')->name('admin.terms.store');
Route::get('/terms/list', 'App\Http\Controllers\TermsConditionsPagesController@list')->name('admin.terms.list');
Route::get('/terms/edit/{id}', 'App\Http\Controllers\TermsConditionsPagesController@edit')->name('admin.terms.edit');
Route::post('/terms/update/{id}', 'App\Http\Controllers\TermsConditionsPagesController@update')->name('admin.terms.update');
Route::delete('/terms/destroy/{id}', 'App\Http\Controllers\TermsConditionsPagesController@destroy')->name('admin.terms.destroy');

// These are FAQ  routes
Route::get('/faqs/create', 'App\Http\Controllers\FAQPagesController@create')->name('admin.faqs.create');
Route::put('/faqs/create', 'App\Http\Controllers\FAQPagesController@store')->name('admin.faqs.store');
Route::get('/faqs/list', 'App\Http\Controllers\FAQPagesController@list')->name('admin.faqs.list');
Route::get('/faqs/edit/{id}', 'App\Http\Controllers\FAQPagesController@edit')->name('admin.faqs.edit');
Route::post('/faqs/update/{id}', 'App\Http\Controllers\FAQPagesController@update')->name('admin.faqs.update');
Route::delete('/faqs/destroy/{id}', 'App\Http\Controllers\FAQPagesController@destroy')->name('admin.faqs.destroy');


//Single Product Routes
Route::get('/SingleProduct/{id}', 'App\Http\Controllers\SingleProductPagesController@SingleProduct')->name('SingleProduct')->middleware(['auth']);

//Onsale Single product Routes
Route::get('/SingleProduct_onsale/{id}', 'App\Http\Controllers\SingleProductPagesController@SingleProduct_onsale')->name('SingleProduct_onsale')->middleware(['auth']);

//product search using autocomplete
Route::post('/product/search', 'App\Http\Controllers\PagesController@productSearch')->name('product.search');
Route::get('/product/autocomplete', 'App\Http\Controllers\PagesController@autocomplete')->name('autocomplete');

Route::get('/view_as_sort', 'App\Http\Controllers\PagesController@shopSort')->name('shop.sort');





Route::prefix('admin')->group(function(){
    Route::get('/dashboard', 'App\Http\Controllers\HomeController@dashboard')->name('admin.dashboard');
    //These are order routes 
    Route::get('/OrderPending', 'App\Http\Controllers\HomeController@ShowPendingList')->name('OrderPending');
    Route::get('/OrderApproveStatus/{id}', 'App\Http\Controllers\HomeController@OrderApproveStatus')->name('OrderApproveStatus');
    Route::get('/OrderProcessing', 'App\Http\Controllers\HomeController@OrderProcessingList')->name('OrderProcessing');
    Route::get('/OrderCompleteStatus/{id}', 'App\Http\Controllers\HomeController@OrderCompleteStatus')->name('OrderCompleteStatus');
    Route::get('/OrderComplete', 'App\Http\Controllers\HomeController@OrderCompleteList')->name('OrderComplete');
    Route::get('/OrderProductList/{id}', 'App\Http\Controllers\HomeController@OrderProductList')->name('OrderProductList');

    // These are brands routes
    Route::get('/brands/create', 'App\Http\Controllers\BrandsPagesController@create')->name('admin.brands.create');
    Route::put('/brands/create', 'App\Http\Controllers\BrandsPagesController@store')->name('admin.brands.store');
    Route::get('/brands/list', 'App\Http\Controllers\BrandsPagesController@list')->name('admin.brands.list');
    Route::get('/brands/edit/{id}', 'App\Http\Controllers\BrandsPagesController@edit')->name('admin.brands.edit');
    Route::post('/brands/update/{id}', 'App\Http\Controllers\BrandsPagesController@update')->name('admin.brands.update');
    Route::delete('/brands/destroy/{id}', 'App\Http\Controllers\BrandsPagesController@destroy')->name('admin.brands.destroy');



    // These are category routes
    Route::get('/categories/create', 'App\Http\Controllers\CategoriesPagesController@create')->name('admin.categories.create');
    Route::put('/categories/create', 'App\Http\Controllers\CategoriesPagesController@store')->name('admin.categories.store');
    Route::get('/categories/list', 'App\Http\Controllers\CategoriesPagesController@list')->name('admin.categories.list');
    Route::get('/categories/edit/{id}', 'App\Http\Controllers\CategoriesPagesController@edit')->name('admin.categories.edit');
    Route::post('/categories/update/{id}', 'App\Http\Controllers\CategoriesPagesController@update')->name('admin.categories.update');
    Route::delete('/categories/destroy/{id}', 'App\Http\Controllers\CategoriesPagesController@destroy')->name('admin.categories.destroy');

    // These are color routes
    Route::get('/colors/create', 'App\Http\Controllers\ColorsPagesController@create')->name('admin.colors.create');
    Route::put('/colors/create', 'App\Http\Controllers\ColorsPagesController@store')->name('admin.colors.store');
    Route::get('/colors/list', 'App\Http\Controllers\ColorsPagesController@list')->name('admin.colors.list');
    Route::get('/colors/edit/{id}', 'App\Http\Controllers\ColorsPagesController@edit')->name('admin.colors.edit');
    Route::post('/colors/update/{id}', 'App\Http\Controllers\ColorsPagesController@update')->name('admin.colors.update');
    Route::delete('/colors/destroy/{id}', 'App\Http\Controllers\ColorsPagesController@destroy')->name('admin.colors.destroy');

    // These are size routes
    Route::get('/sizes/create', 'App\Http\Controllers\SizesPagesController@create')->name('admin.sizes.create');
    Route::put('/sizes/create', 'App\Http\Controllers\SizesPagesController@store')->name('admin.sizes.store');
    Route::get('/sizes/list', 'App\Http\Controllers\SizesPagesController@list')->name('admin.sizes.list');
    Route::get('/sizes/edit/{id}', 'App\Http\Controllers\SizesPagesController@edit')->name('admin.sizes.edit');
    Route::post('/sizes/update/{id}', 'App\Http\Controllers\SizesPagesController@update')->name('admin.sizes.update');
    Route::delete('/sizes/destroy/{id}', 'App\Http\Controllers\SizesPagesController@destroy')->name('admin.sizes.destroy');

    // These are Model or Subcategory routes
    Route::get('/subcategories/create', 'App\Http\Controllers\SubCategoryPagesController@create')->name('admin.subcategories.create');
    Route::put('/subcategories/create', 'App\Http\Controllers\SubCategoryPagesController@store')->name('admin.subcategories.store');
    Route::get('/subcategories/list', 'App\Http\Controllers\SubCategoryPagesController@list')->name('admin.subcategories.list');
    Route::get('/subcategories/edit/{id}', 'App\Http\Controllers\SubCategoryPagesController@edit')->name('admin.subcategories.edit');
    Route::post('/subcategories/update/{id}', 'App\Http\Controllers\SubCategoryPagesController@update')->name('admin.subcategories.update');
    Route::delete('/subcategories/destroy/{id}', 'App\Http\Controllers\SubCategoryPagesController@destroy')->name('admin.subcategories.destroy');

    // These are product Attributes routes
    Route::get('/attributes/edit/{id}', 'App\Http\Controllers\AttributePagesController@edit')->name('admin.attributes.edit');
    Route::post('/attributes/update/{id}', 'App\Http\Controllers\AttributePagesController@update')->name('admin.attributes.update');
    Route::delete('/attributes/destroy/{id}', 'App\Http\Controllers\AttributePagesController@destroy')->name('admin.attributes.destroy');

    // These are product routes
    Route::get('/products/create', 'App\Http\Controllers\ProductPagesController@create')->name('admin.products.create');
    Route::put('/products/create', 'App\Http\Controllers\ProductPagesController@store')->name('admin.products.store');
    Route::get('/products/list', 'App\Http\Controllers\ProductPagesController@list')->name('admin.products.list');
    Route::get('/products/edit/{id}', 'App\Http\Controllers\ProductPagesController@edit')->name('admin.products.edit');
    Route::post('/products/update', 'App\Http\Controllers\ProductPagesController@update')->name('admin.products.update');
    Route::delete('/products/destroy/{id}', 'App\Http\Controllers\ProductPagesController@destroy')->name('admin.products.destroy');
    Route::get('/products/attribute/edit/{id}', 'App\Http\Controllers\ProductPagesController@attributeedit')->name('admin.products.attribute.edit');
    Route::post('attribute_update', 'App\Http\Controllers\ProductPagesController@attributeupdate')->name('attribute_update');
    Route::post('attribute_add', 'App\Http\Controllers\ProductPagesController@attribute_add')->name('attribute_add');
    Route::get('/attribute_delete/{id}', 'App\Http\Controllers\ProductPagesController@attributedelete')->name('attribute_delete');

    // These are feature routes
    Route::get('/features/create', 'App\Http\Controllers\FeaturePagesController@create')->name('admin.features.create');
    Route::get('/features/addfeatured/{id}', 'App\Http\Controllers\FeaturePagesController@addfeatured')->name('admin.features.addfeatured');
    Route::get('/features/list', 'App\Http\Controllers\FeaturePagesController@list')->name('admin.features.list');
    Route::get('/features/removefeatured/{id}', 'App\Http\Controllers\FeaturePagesController@removefeatured')->name('admin.features.removefeatured');
    
    
    // These are onsale routes
    Route::get('/onsales/create', 'App\Http\Controllers\OnsalePagesController@create')->name('admin.onsales.create');
    Route::get('/onsales/list', 'App\Http\Controllers\OnsalePagesController@list')->name('admin.onsales.list');
    Route::post('/onsales/inserting', 'App\Http\Controllers\OnsalePagesController@inserting')->name('admin.onsales.inserting');
    Route::get('/onsales/removeOnsale/{id}', 'App\Http\Controllers\OnsalePagesController@removeOnsale')->name('admin.onsales.removeOnsale');
    

    // These are blog routes
    Route::get('/blogs/create', 'App\Http\Controllers\BlogPagesController@create')->name('admin.blogs.create');
    Route::put('/blogs/create', 'App\Http\Controllers\BlogPagesController@store')->name('admin.blogs.store');
    Route::get('/blogs/list', 'App\Http\Controllers\BlogPagesController@list')->name('admin.blogs.list');
    Route::get('/blogs/edit/{id}', 'App\Http\Controllers\BlogPagesController@edit')->name('admin.blogs.edit');
    Route::post('/blogs/update/{id}', 'App\Http\Controllers\BlogPagesController@update')->name('admin.blogs.update');
    Route::delete('/blogs/destroy/{id}', 'App\Http\Controllers\BlogPagesController@destroy')->name('admin.blogs.destroy');

    // Future working routes and functions
    Route::get('/blogtags/create', 'App\Http\Controllers\BlogTagPagesController@create')->name('admin.blogtags.create');
    Route::put('/blogtags/create', 'App\Http\Controllers\BlogTagPagesController@store')->name('admin.blogtags.store');
    Route::get('/blogtags/list', 'App\Http\Controllers\BlogTagPagesController@list')->name('admin.blogtags.list');
    Route::get('/blogtags/edit/{id}', 'App\Http\Controllers\BlogTagPagesController@edit')->name('admin.blogtags.edit');
    Route::post('/blogtags/update/{id}', 'App\Http\Controllers\BlogTagPagesController@update')->name('admin.blogtags.update');
    Route::delete('/blogtags/destroy/{id}', 'App\Http\Controllers\BlogTagPagesController@destroy')->name('admin.blogtags.destroy');

    // Blog Comment Part 
    Route::get('/comments/list', 'App\Http\Controllers\CommentDeletePagesController@list')->name('admin.comment.list');
    Route::delete('/comments/destroy/{id}', 'App\Http\Controllers\CommentDeletePagesController@destroy')->name('admin.comment.destroy');
    
    Route::get('/commentsReply/list', 'App\Http\Controllers\CommentReplyDeletePagesController@list')->name('admin.commentreply.list');
    Route::delete('/commentsReply/destroy/{id}', 'App\Http\Controllers\CommentReplyDeletePagesController@destroy')->name('admin.commentreply.destroy');
    // These are slider routes
    Route::get('/sliders/create', 'App\Http\Controllers\SliderPagesController@create')->name('admin.sliders.create');
    Route::put('/sliders/create', 'App\Http\Controllers\SliderPagesController@store')->name('admin.sliders.store');
    Route::get('/sliders/list', 'App\Http\Controllers\SliderPagesController@list')->name('admin.sliders.list');
    Route::get('/sliders/edit/{id}', 'App\Http\Controllers\SliderPagesController@edit')->name('admin.sliders.edit');
    Route::post('/sliders/update/{id}', 'App\Http\Controllers\SliderPagesController@update')->name('admin.sliders.update');
    Route::delete('/sliders/destroy/{id}', 'App\Http\Controllers\SliderPagesController@destroy')->name('admin.sliders.destroy');


  

    
    

});


//Search product & Autosearch product

Route::get('autosearch','App\Http\Controllers\PagesController@autosearch')->name('autosearch');

Route::get('search','App\Http\Controllers\PagesController@search')->name('search');






Route::post('/comment/{blogs}','App\Http\Controllers\CommentController@store')->name('comment.store');

Route::post('/comment-reply/{comment}','App\Http\Controllers\CommentReplyPagesController@store')->name('commentReply.store');

// This is about Route Url Start
Route::get('/about', 'App\Http\Controllers\PagesController@about')->name('about');
// This is about Route Url End



// This is about Route Url Start
Route::get('/user', 'App\Http\Controllers\PagesController@user')->name('user');
// This is about Route Url End



// This is Shop Route Url Start
Route::get('/shop', 'App\Http\Controllers\PagesController@shop')->name('shop');
// This is Shop Route Url End

// This is Shop Route Url Start
Route::post('/shop-filter', 'App\Http\Controllers\PagesController@shop_filter')->name('shop_filter');
// This is Shop Route Url End

// This is Single Product Route Url Start
Route::get('/singleProduct', 'App\Http\Controllers\PagesController@singleProduct')->name('singleProduct');
// This is Single Product Route Url End

// This is order track Url Start
Route::get('/ordertrack', 'App\Http\Controllers\PagesController@ordertrack')->name('ordertrack');
// This is order track Route Url End


// This is FAQ Url Start
Route::get('/faq', 'App\Http\Controllers\PagesController@faq')->name('faq');
// This is FAQ Route Url End


// This is Terms & Conditions Url Start
Route::get('/terms', 'App\Http\Controllers\PagesController@terms')->name('terms');
// This is Terms & Conditions Route Url End


// This is allpost Route Url Start
Route::get('/blog', 'App\Http\Controllers\PagesController@blog')->name('blog');
// This is allpost Route Url End

// This is Blog Search Route Url Start
Route::get('/blog/search/', 'App\Http\Controllers\AutocompletePagesController@blogsearch')->name('blog-search');
// This is Blog Search Route Url End



// This is singlepost Route Url Start
Route::get('/allpost/singlePost/{id}/{category}', 'App\Http\Controllers\PagesController@allpost')->name('allpost');
// This is singlepost Route Url End






// This is politics Route Url Start
Route::get('/politics', 'App\Http\Controllers\PagesController@politics')->name('politics');
// This is politics Route Url End

// This is travel Route Url Start
Route::get('/travel', 'App\Http\Controllers\PagesController@travel')->name('travel');
// This is travel Route Url End


// This is InternationalNews Route Url Start
Route::get('/internationalnews', 'App\Http\Controllers\PagesController@internationalnews')->name('internationalnews');
// This is internationalNews Route Url End

// This is InternationalNews Route Url Start
Route::get('/business', 'App\Http\Controllers\PagesController@business')->name('business');
// This is internationalNews Route Url End

// This is Job Route Url Start
Route::get('/job', 'App\Http\Controllers\PagesController@job')->name('job');
// This is Job Route Url End


// This is health Route Url Start
Route::get('/health', 'App\Http\Controllers\PagesController@health')->name('health');
// This is health Route Url End

// This is coronaVirus Route Url Start
Route::get('/coronavirus', 'App\Http\Controllers\PagesController@coronavirus')->name('coronavirus');
// This is coronaVirus Route Url End

// This is Bangladesh Route Url Start
Route::get('/Bangladesh', 'App\Http\Controllers\PagesController@Bangladesh')->name('Bangladesh');
// This is Bangladesh Route Url End

// This is Education Route Url Start
Route::get('/education', 'App\Http\Controllers\PagesController@education')->name('education');
// This is Education Route Url End

// This is Religion Route Url Start
Route::get('/religion', 'App\Http\Controllers\PagesController@religion')->name('religion');
// This is Religion Route Url End


// This is gadget Route Url Start
Route::get('/gadget', 'App\Http\Controllers\PagesController@gadget')->name('gadget');
// This is gadget Route Url End

// This is lifestyle Route Url Start
Route::get('/lifestyle', 'App\Http\Controllers\PagesController@lifestyle')->name('lifestyle');
// This is lifestyle Route Url End


// This is fashion Route Url Start
Route::get('/fashion', 'App\Http\Controllers\PagesController@fashion')->name('fashion');
// This is fashion Route Url End


// This is sports Route Url Start
Route::get('/sports', 'App\Http\Controllers\PagesController@sports')->name('sports');
// This is sports Route Url End

// This is specialNews Route Url Start
Route::get('/specialnews', 'App\Http\Controllers\PagesController@specialnews')->name('specialnews');
// This is specialNews Route Url End





Route::get('login-with-github', 'App\Http\Controllers\SocialPagesController@loginWithGithub')->name('loginWithGithub');
Route::get('github-callback-url', 'App\Http\Controllers\SocialPagesController@GithubCallBack')->name('GithubCallBack');


Route::get('login-with-google', 'App\Http\Controllers\SocialPagesController@loginWithGoogle')->name('loginWithGoogle');
Route::get('callback-url', 'App\Http\Controllers\SocialPagesController@GoogleCallBack')->name('GoogleCallBack');


Route::get('login-with-facebook', 'App\Http\Controllers\SocialPagesController@loginWithFacebook')->name('loginWithFacebook');
Route::get('facebook-callback-url', 'App\Http\Controllers\SocialPagesController@FacebookCallBack')->name('FacebookCallBack');











//perfect Login



Route::get('home',function(){
    
    // dd(\Illuminate\Support\Facades\Auth::user());

    return redirect('/');


})->middleware(['auth','verified']);




Route::get('/logout',function(){
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('login');
});



// Auth::routes();

