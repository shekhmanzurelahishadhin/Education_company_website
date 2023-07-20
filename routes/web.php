<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\BannerAndTitleController;
use App\Http\Controllers\WebsiteSettingsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ConsultancyController;
use App\Http\Controllers\ResearchController;
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

Route::get('/',[WebsiteController::class,'tech_web_home'])->name('front.page');
Route::get('/services-details/{id}', [WebsiteController::class, 'tech_web_services_details'])->name('services.details');
Route::get('/all-services', [WebsiteController::class, 'tech_web_all_services'])->name('services');
Route::get('/about-page', [WebsiteController::class, 'tech_web_about_page'])->name('about.page');
Route::get('/team-page', [WebsiteController::class, 'tech_web_team_page'])->name('team.page');
Route::get('/testimonial-page', [WebsiteController::class, 'tech_web_testimonial_page'])->name('testimonial.page');
Route::get('/blogs-page', [WebsiteController::class, 'tech_web_blogs_page'])->name('blogs.page');
Route::get('/blogs-details/{id}', [WebsiteController::class, 'tech_web_blogs_details'])->name('blogs.details');
Route::get('/consultancy-page', [WebsiteController::class, 'tech_web_consultancy_page'])->name('consultancy.page');
Route::get('/research-page', [WebsiteController::class, 'tech_web_research_page'])->name('research.page');
Route::get('/research-details/{id}', [WebsiteController::class, 'tech_web_research_details'])->name('research.details');

//---
Route::get('/gallery-page', [WebsiteController::class, 'tech_web_gallery'])->name('gallery.page');
Route::get('/contacts', [WebsiteController::class, 'tech_web_contacts'])->name('contacts');

Route::get('/user-profile-settings', [GeneralController::class, 'tech_web_user_profile_settings'])->name('user.profile.settings')->middleware('is_user');
Route::post('/user-update-profile', [GeneralController::class, 'tech_web_user_update_profile'])->name('user.update.profile')->middleware('is_user');

Route::get('/enrollment/{id}', [WebsiteController::class, 'tech_web_enrollment'])->name('enrollment')->middleware('is_user');
Route::get('/enrollment-page', [WebsiteController::class, 'tech_web_enrollment_page'])->name('enrollment.page')->middleware('is_user');
Route::post('/enroll', [WebsiteController::class, 'tech_web_enroll'])->name('enroll')->middleware('is_user');


//contact start
Route::post('/contact', [WebsiteSettingsController::class, 'tech_web_contact'])->name('contact');
//contact end

Auth::routes();

Route::get('/home', [HomeController::class, 'tech_web_index'])->name('home');
Route::get('admin/home', [HomeController::class, 'tech_web_adminHome'])->name('admin.home')->middleware('is_admin');

//gallery start
Route::get('/add-gallery', [GalleryController::class, 'tech_web_add_gallery'])->name('add.gallery')->middleware('is_admin');
Route::post('/store-gallery', [GalleryController::class, 'tech_web_store_gallery'])->name('store.gallery')->middleware('is_admin');
Route::get('/edit-gallery/{id}', [GalleryController::class, 'tech_web_edit_gallery'])->name('edit.gallery')->middleware('is_admin');
Route::post('/update-gallery', [GalleryController::class, 'tech_web_update_gallery'])->name('update.gallery')->middleware('is_admin');
//gallery end

//service start
Route::get('/add-services', [ServiceController::class, 'tech_web_add_services'])->name('add.services')->middleware('is_admin');
Route::post('/store-services', [ServiceController::class, 'tech_web_store_services'])->name('store.services')->middleware('is_admin');
Route::get('/edit-services/{id}', [ServiceController::class, 'tech_web_edit_services'])->name('edit.services')->middleware('is_admin');
Route::post('/update-services', [ServiceController::class, 'tech_web_update_services'])->name('update.services')->middleware('is_admin');
//service end

//about start
Route::get('/add-about', [AboutController::class, 'add_about'])->name('add.about')->middleware('is_admin');
Route::post('/store-about', [AboutController::class, 'store_about'])->name('store.about')->middleware('is_admin');
Route::get('/edit-about/{id}', [AboutController::class, 'edit_about'])->name('edit.about')->middleware('is_admin');
Route::post('/update-about', [AboutController::class, 'update_about'])->name('update.about')->middleware('is_admin');
//about end

//team start
Route::get('/add-team', [TeamController::class, 'tech_web_add_team'])->name('add.team')->middleware('is_admin');
Route::post('/store-team', [TeamController::class, 'tech_web_store_team'])->name('store.team')->middleware('is_admin');
Route::get('/edit-team/{id}', [TeamController::class, 'tech_web_edit_team'])->name('edit.team')->middleware('is_admin');
Route::post('/update-team', [TeamController::class, 'tech_web_update_team'])->name('update.team')->middleware('is_admin');
//team end

//testimonial start
Route::get('/add-testimonial', [TestimonialController::class, 'tech_web_add_testimonial'])->name('add.testimonial')->middleware('is_admin');
Route::post('/store-testimonial', [TestimonialController::class, 'tech_web_store_testimonial'])->name('store.testimonial')->middleware('is_admin');
Route::get('/edit-testimonial/{id}', [TestimonialController::class, 'tech_web_edit_testimonial'])->name('edit.testimonial')->middleware('is_admin');
Route::post('/update-testimonial', [TestimonialController::class, 'tech_web_update_testimonial'])->name('update.testimonial')->middleware('is_admin');
//testimonial end


//Blogs start
Route::get('/add-blogs', [BlogController::class, 'tech_web_add_blogs'])->name('add.blogs')->middleware('is_admin');
Route::post('/store-blogs', [BlogController::class, 'tech_web_store_blogs'])->name('store.blogs')->middleware('is_admin');
Route::get('/edit-blogs/{id}', [BlogController::class, 'tech_web_edit_blogs'])->name('edit.blogs')->middleware('is_admin');
Route::post('/update-blogs', [BlogController::class, 'tech_web_update_blogs'])->name('update.blogs')->middleware('is_admin');
//Blogs end

//Research start
Route::get('/add-research', [ResearchController::class, 'tech_web_add_research'])->name('add.research')->middleware('is_admin');
Route::post('/store-research', [ResearchController::class, 'tech_web_store_research'])->name('store.research')->middleware('is_admin');
Route::get('/edit-research/{id}', [ResearchController::class, 'tech_web_edit_research'])->name('edit.research')->middleware('is_admin');
Route::post('/update-research', [ResearchController::class, 'tech_web_update_research'])->name('update.research')->middleware('is_admin');
//Research end

//Consultancy start
Route::get('/add-consultancy', [ConsultancyController::class, 'tech_web_add_consultancy'])->name('add.consultancy')->middleware('is_admin');
Route::post('/store-consultancy', [ConsultancyController::class, 'tech_web_store_consultancy'])->name('store.consultancy')->middleware('is_admin');
//Consultancy end

//manage enrollment start
Route::get('/manage-enrollment', [WebsiteController::class, 'tech_web_manage_enrollment'])->name('mange.enrollment')->middleware('is_admin');
Route::get('/update-enrollment/{id}', [WebsiteController::class, 'tech_web_update_enrollment'])->name('update.enrollment')->middleware('is_admin');
//manage enrollment end


//Banner and Tile
Route::post('/store-banner-title', [BannerAndTitleController::class, 'tech_web_store_banner_tile'])->name('store.banner.title')->middleware('is_admin');
Route::get('/edit-banner-title/{id}', [BannerAndTitleController::class, 'tech_web_edit_banner_tile'])->name('edit.banner.title')->middleware('is_admin');
Route::post('/update-banner-title/{id}', [BannerAndTitleController::class, 'tech_web_update_banner_tile'])->name('update.banner.title')->middleware('is_admin');
//Banner and title

//Logo start
Route::post('/store-logo', [WebsiteSettingsController::class, 'tech_web_store_logo'])->name('store.logo')->middleware('is_admin');
//Logo end

//links start
Route::post('/store-links', [WebsiteSettingsController::class, 'tech_web_store_links'])->name('store.links')->middleware('is_admin');
//Links end


//payment numbers start
Route::post('/store-number', [WebsiteSettingsController::class, 'tech_web_store_numbers'])->name('store.numbers')->middleware('is_admin');
//payment numbers end

//footer start
Route::post('/store-footer', [WebsiteSettingsController::class, 'tech_web_store_footer'])->name('store.footer')->middleware('is_admin');

//footer end

//banner start
Route::post('/store-main-banner', [WebsiteSettingsController::class, 'tech_web_store_main_banner'])->name('store.main.banner')->middleware('is_admin');
Route::get('/edit-main-banner/{id}', [WebsiteSettingsController::class, 'tech_web_edit_main_banner'])->name('edit.main.banner')->middleware('is_admin');
Route::post('/update-main-banner/{id}', [WebsiteSettingsController::class, 'tech_web_update_main_banner'])->name('update.main.banner')->middleware('is_admin');
//banner end




//general settings start
Route::get('/general-settings', [GeneralController::class, 'tech_web_general_settings'])->name('general.settings')->middleware('is_admin');
//general settings end


//profile settings start
Route::get('/profile-settings', [GeneralController::class, 'tech_web_profile_settings'])->name('profile.settings')->middleware('is_admin');
Route::post('/update-profile', [GeneralController::class, 'tech_web_update_profile'])->name('update.profile')->middleware('is_admin');
//profile settings end
