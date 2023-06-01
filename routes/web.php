<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\CaseStudiesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\CareerFormSubmitController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

Route::get('/login', [LoginController::class, 'index']);

Auth::routes();

Route::get('logout', [LogoutController::class, 'perform'])->name('logout.perform');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//test slider in home page
Route::get('/test', [WebsiteController::class, 'index'])->name('website.home');
// website
Route::get('/', [WebsiteController::class, 'index'])->name('website.home');
Route::get('/old_home', [WebsiteController::class, 'old_home'])->name('website.old_home');
Route::get('/about', [WebsiteController::class, 'aboutUsPage'])->name('website.about');
Route::get('/verticals', [WebsiteController::class, 'verticalsPage'])->name('website.verticals');
Route::get('/domains', [WebsiteController::class, 'domainPage'])->name('website.domains');

Route::get('/portfolio/{id}', [WebsiteController::class, 'porfolioListCategory'])->name('website.porfolioListCategory');


Route::get('/portfolio/{id}/{category}', [WebsiteController::class, 'porfolioListPage'])->name('website.porfolioList');
Route::get('/portfolio/{category}/{subcategory}/{id}', [WebsiteController::class, 'porfolioSinglePage'])->name('website.porfolioSingle');
Route::get('/library', [WebsiteController::class, 'libraryPage'])->name('website.library');
/* Route::get('/library/{id}', [WebsiteController::class, 'librarySinglePage'])->name('website.librarysingle'); */
Route::get('/careers', [WebsiteController::class, 'careerPage'])->name('website.career');
Route::get('/careers/{id}', [WebsiteController::class, 'careerSinglePage'])->name('website.career.apply');
Route::post('/careers-form/submit/{id}', [CareerFormSubmitController::class, 'formDataStore'])->name('website.career.formsubmit');
Route::get('/contact-us', [WebsiteController::class, 'contactPage'])->name('website.contactus');
Route::get('/csr', [WebsiteController::class, 'csrPage'])->name('website.csr');
Route::get('/policy', [WebsiteController::class, 'policypage'])->name('website.policy');
Route::get('/search', [WebsiteController::class, 'search'])->name('website.search');

Route::get('/library/categiry/{category?}', [WebsiteController::class, 'libraryCategoryList'])->name('website.librarycategory');
Route::get('/library/detalis/{id}/{category}', [WebsiteController::class, 'libraryDetalis'])->name('website.librarydetalis');




Route::group(['prefix' => 'domains'], function () {
  Route::get('/electrical-solutions', [WebsiteController::class, 'electricalsolutionsPage'])->name('domains.electrical-solutions');
  Route::get('/instrumentation-control', [WebsiteController::class, 'instrumentationcontrolPage'])->name('domains.instrumentation-control');
  Route::get('/fire-protection', [WebsiteController::class, 'fireprotectionPage'])->name('domains.fire-protection');
  Route::get('/it-infrastructure', [WebsiteController::class, 'itinfrastructurePage'])->name('domains.it-infrastructure');
  Route::get('/building-automation-systems', [WebsiteController::class, 'buildingautomationsystemsPage'])->name('domains.building-automation-systems');
  Route::get('/e-house', [WebsiteController::class, 'ehousePage'])->name('domains.e-house');
  Route::get('/manufacturing-facility', [WebsiteController::class, 'manufacturingFacility'])->name('domains.manufacturing-facility');
});


Route::post('/request/callback', [ContactController::class, 'requestCallback'])->name('request.callback');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


Route::fallback(function () {
  return view('errors.404');
});

// Admin Login

Route::group(['middleware' => ['auth', 'permission']], function () {

  Route::resource('profile', UserProfileController::class);


  Route::get('logout', [LogoutController::class, 'perform'])->name('logout.perform');
  Route::resource('roles', RolesController::class);
  Route::resource('permissions', PermissionsController::class);

  /**
   * User Routes
   */
  Route::get('/users', [UsersController::class, 'index'])->name('all_users');
  Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
  Route::post('/users/store', [UsersController::class, 'store'])->name('users.store');
  Route::get('/users/index', [UsersController::class, 'index'])->name('users.index');
  Route::get('/users/show/{id}', [UsersController::class, 'show'])->name('users.show');
  Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
  Route::post('/users/update/{id}', [UsersController::class, 'update'])->name('users.update');
  Route::get('/users/delete/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
  Route::post('/users/{id}/status', [UsersController::class, 'changeStatus'])->name('users.changeStatus');

  /**
   * Category Routes
   */

  Route::resource('categories', CategoryController::class);
  Route::get('/subcategories/{id}', [CategoryController::class, 'Sub_Categories'])->name('portfolio.subcategory');
  /**
   * Testimonial Routes
   */
  Route::resource('testimonials', TestimonialController::class);

  /**
   * library Routes
   */
  Route::resource('libraries', LibraryController::class);
  /**
   * Portfoliop Routes
   */
  Route::resource('portfolios', PortfolioController::class);


  /**
   * Portfoliop Routes
   */
  Route::resource('career', CareerController::class);



  // /**
  //  * Gallery Routes
  //  */
  // Route::resource('gallery', GalleryController::class);

  /**
   * Team Routes
   */
  Route::resource('team', TeamController::class);

  /**
   * Career Apllied Routes
   */
  Route::resource('jobs-applied', CareerFormSubmitController::class);

  /**
   * Contact Routes
   */

  Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
  Route::get('/contact/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
  Route::post('/contact/update/{id}', [ContactController::class, 'update'])->name('contact.update');
  Route::get('/contact/{id}/delete', [ContactController::class, 'destroy'])->name('contact.destroy');

   /**
   * Blogs Routes
   */
  Route::resource('blog', BlogController::class);


   /**
   * Case Studies
   */
  Route::resource('case-studies', CaseStudiesController::class);
    /**
   * client
   */
  Route::resource('client', ClientController::class);
});
