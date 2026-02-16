<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\PuppeteerController;
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
Route::get('/','PublicController@getIndex');
Route::get('liveScore','PublicController@getliveScore');
Route::get('about','PublicController@getAbout');
Route::post('contact','PublicController@postContact');

Route::get('blog','PublicController@getBlog');
Route::get('cron', 'PublicController@getDataAuto');
Auth::routes();
Route::get('contact','PublicController@getContact');

Route::post('postContactDetails', ['middleware' =>'auth', 'uses' =>'ContactController@postContactDetails']);
Route::get('getDynamicWords', ['middleware' =>'auth', 'uses' =>'PublicController@getDynamicWords']);
Route::get('/puppeteer', [PuppeteerController::class, 'getData']);
Route::get('profile', ['middleware' =>'auth', 'uses' =>'PublicController@getProfile']);
Route::get('getReport', ['middleware' =>'auth', 'uses' =>'PublicController@getReport']);
Route::post('saveUserAttempts', ['middleware' =>'auth', 'uses' =>'PublicController@saveAttempts']);

 Route::post('score', ['middleware' =>'auth', 'uses' =>'PublicController@postScore']);

Route::get('game', ['middleware' =>'auth', 'uses' =>'PublicController@getGame']);
Route::get('game-2', ['middleware' =>'auth', 'uses' =>'PublicController@getGame2']);




Route::get('game-details','PublicController@getGameDetails');

Route::Post('question', ['middleware' =>'auth', 'uses' =>'PublicController@getQuestion']);
Route::post('answerOne', ['middleware' =>'auth', 'uses' =>'PublicController@postAnswer']);
Route::get('report', ['middleware' =>'auth', 'uses' =>'PublicController@getReportDisplay'])->name('report');

Route::Post('start', ['middleware' =>'auth', 'uses' =>'PublicController@getStartGame']);  
Route::get('after-start','PublicController@getafterStart')->name('after-start');

// Route::get("after-start", function(){
//    return View::make("after-start");
// });
Route::get("firststart", ['middleware' =>'auth', 'uses' =>'PublicController@firstStart']);

Route::get('answer', ['middleware' =>'auth', 'uses' =>'PublicController@getAnswer']);

// Route::get("answer", function(){

//    return View::make("answer");
// });

Route::get('questions/create', [QuestionController::class, 'create'])->name('questions.create');
Route::post('questions', [QuestionController::class, 'store'])->name('questions.store');

// teacher

Route::post('addteacher', ['middleware' =>'auth', 'uses' =>'TeacherController@addteacher']);
Route::get('getAddteacher', ['middleware' =>'auth', 'uses' =>'TeacherController@getAddteacher']);

Route::get('teacherGame', ['middleware' =>'auth', 'uses' =>'TeacherController@teacherGame']);
Route::post('studentDetail', ['middleware' =>'auth', 'uses' =>'TeacherController@studentDetail']);
Route::post('scoreBoard', ['middleware' =>'auth', 'uses' =>'TeacherController@scoreBoard']);

Route::post('endpointScore', ['middleware' =>'auth', 'uses' =>'TeacherController@endpointScore']);
Route::get('localone', ['middleware' =>'auth', 'uses' =>'PublicController@localone']);

// Route::get('/', function () {
//     return view('welcome');
// });

   



  









 // Route::get('admin/question/add', ['middleware' =>'auth', 'uses' =>'QuestionController@getAddQuestion']);
 //   Route::post('admin/question/add', ['middleware' =>'auth', 'uses' =>'QuestionController@postAddQuestion']);
   Route::get('admin/question/edit/{id}', ['middleware' =>'auth', 'uses' =>'QuestionController@getEditQuestion']);
   Route::post('admin/question/edit/{id}', ['middleware' =>'auth', 'uses' =>'QuestionController@postEditQuestion']);
   Route::get('admin/question/all', ['middleware' =>'auth', 'uses' =>'QuestionController@all']);
   Route::get('admin/question/allData', ['middleware' =>'auth', 'uses' =>'QuestionController@allData']);
   Route::get('admin/question/delete/{id}', ['middleware' =>'auth', 'uses' =>'QuestionController@delete']);
   Route::post('admin/question/inactive/{id}', ['middleware' =>'auth', 'uses' =>'QuestionController@inactive']);
   Route::post('admin/question/active/{id}', ['middleware' =>'auth', 'uses' =>'QuestionController@active']);

//category

   Route::get('admin/question-category/add', ['middleware' =>'auth', 'uses' =>'QuestionCategoryController@getQuestionCategoryAdd']);
   Route::post('admin/question-category/add', ['middleware' =>'auth', 'uses' =>'QuestionCategoryController@postQuestionCategoryAdd']);
   Route::get('admin/question-category/edit/{id}', ['middleware' =>'auth', 'uses' =>'QuestionCategoryController@getQuestionCategoryEdit']);
  Route::post('admin/question-category/edit/{id}', ['middleware' =>'auth', 'uses' =>'QuestionCategoryController@postQuestionCategoryEdit']);
  Route::get('admin/question-category/all', ['middleware' =>'auth', 'uses' =>'QuestionCategoryController@all']);
  Route::get('admin/question-category/allData', ['middleware' =>'auth', 'uses' =>'QuestionCategoryController@allData']);
  Route::get('admin/question-category/delete/{id}', ['middleware' =>'auth', 'uses' =>'QuestionCategoryController@delete']);
  Route::get('admin/question-category/inactive/{id}', ['middleware' =>'auth', 'uses' =>'QuestionCategoryController@inactive']);
  Route::get('admin/question-category/active/{id}', ['middleware' =>'auth', 'uses' =>'QuestionCategoryController@active']);



//Inquiry

 Route::get('admin/inquiry/add', ['middleware' =>'auth', 'uses' =>'InquiryController@getInquiryAdd']);
 Route::post('admin/inquiry/add', ['middleware' =>'auth', 'uses' =>'InquiryController@postInquiryAdd']);
 Route::get('admin/inquiry/all', ['middleware' =>'auth', 'uses' =>'InquiryController@all']);
  Route::get('admin/inquiry/allData', ['middleware' =>'auth', 'uses' =>'InquiryController@allData']);
  Route::get('admin/inquiry/delete/{id}', ['middleware' =>'auth', 'uses' =>'InquiryController@delete']);


  //user

   Route::get('admin/user/add', ['middleware' =>'auth', 'uses' =>'UserController@getUserAdd']);
   Route::post('admin/user/add', ['middleware' =>'auth', 'uses' =>'UserController@postUserAdd']);

   Route::get('admin/user/edit/{id}', ['middleware' =>'auth', 'uses' =>'UserController@getUserEdit']);
   Route::post('admin/user/edit/{id}', ['middleware' =>'auth', 'uses' =>'UserController@postUserEdit']);
   Route::get('admin/user/all', ['middleware' =>'auth', 'uses' =>'UserController@all']);
   Route::get('admin/user/allData', ['middleware' =>'auth', 'uses' =>'UserController@allData']);
   Route::get('admin/user/delete/{id}', ['middleware' =>'auth', 'uses' =>'UserController@delete']);
   Route::get('admin/user/inactive/{id}', ['middleware' =>'auth', 'uses' =>'UserController@inactive']);
   Route::get('admin/user/active/{id}', ['middleware' =>'auth', 'uses' =>'UserController@active']);
      Route::get('resetPassword','UserController@getresetPassword');
Route::post('postReset','UserController@postReset');


   //level 

   Route::get('admin/level/add', ['middleware' =>'auth', 'uses' =>'LevelController@getLevelAdd']);
   Route::post('admin/level/add', ['middleware' =>'auth', 'uses' =>'LevelController@postLevelAdd']);
   Route::get('admin/level/edit/{id}', ['middleware' =>'auth', 'uses' =>'LevelController@getLevelEdit']);
   Route::post('admin/level/edit/{id}', ['middleware' =>'auth', 'uses' =>'LevelController@postLevelEdit']);
   Route::get('admin/level/all', ['middleware' =>'auth', 'uses' =>'LevelController@all']);
   Route::get('admin/level/allData', ['middleware' =>'auth', 'uses' =>'LevelController@allData']);

   Route::get('admin/level/inactive/{id}', ['middleware' =>'auth', 'uses' =>'LevelController@inactive']);
   
   Route::get('admin/level/active/{id}', ['middleware' =>'auth', 'uses' =>'LevelController@active']);

//userLevel


   Route::get('admin/user-level/add', ['middleware' =>'auth', 'uses' =>'UserlevelController@getUserLevelAdd']);
   Route::post('admin/user-level/add', ['middleware' =>'auth', 'uses' =>'UserlevelController@postUserLevelAdd']);
   Route::get('admin/user-level/edit/{id}', ['middleware' =>'auth', 'uses' =>'UserlevelController@getUserLevelEdit']);
   Route::post('admin/user-level/edit/{id}', ['middleware' =>'auth', 'uses' =>'UserlevelController@postUserLevelEdit']);
   Route::get('admin/user-level/all', ['middleware' =>'auth', 'uses' =>'UserlevelController@all']);
   Route::get('admin/user-level/allData', ['middleware' =>'auth', 'uses' =>'UserlevelController@allData']);



//rank

Route::get('admin/rank/all/{id}', ['middleware' =>'auth', 'uses' =>'RankController@all']);
Route::get('admin/rank/allData/{id}', ['middleware' =>'auth', 'uses' =>'RankController@allData']);





Route::get('logout',['middleware' => 'auth', 'uses' =>'HomeController@getLogout']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('dashboard', ['middleware' => 'auth', 'uses' =>'UserController@dashboard']);  

// Admin
Route::get('admin/user/all', ['middleware' => 'auth', 'uses' =>'UserController@UserAll']);  
Route::get('admin/user/allData', ['middleware' => 'auth', 'uses' =>'UserController@allData']);  

Route::get('admin/user/change-password/{id}', ['middleware' => 'auth', 'uses' =>'UserController@getChangePassword']);  
Route::post('admin/user/change-password/{id}', ['middleware' => 'auth', 'uses' =>'UserController@postChangePassword']);  


//User

Route::get('admin/user/active/{id}', ['middleware' => 'auth', 'uses' =>'UserController@isActive']);  
Route::get('admin/user/inactive/{id}', ['middleware' => 'auth', 'uses' =>'UserController@isInactive']);  

Route::get('admin/user/update/{id}', ['middleware' => 'auth', 'uses' =>'UserController@getUpdate']);  
Route::post('admin/user/update/{id}', ['middleware' => 'auth', 'uses' =>'UserController@postUpdate']);  

//Question

Route::get('admin/question/add', ['middleware' => 'auth', 'uses' =>'QuestionController@getQuestionAdd']);  
Route::post('admin/question/add', ['middleware' => 'auth', 'uses' =>'QuestionController@postQuestionAdd']);  

Route::get('admin/question/all', ['middleware' => 'auth', 'uses' =>'QuestionController@all']);  
Route::get('admin/question/allData', ['middleware' => 'auth', 'uses' =>'QuestionController@allData']);  

Route::get('admin/question/update/{id}', ['middleware' => 'auth', 'uses' =>'QuestionController@getUpdate']);  
Route::post('admin/question/update/{id}', ['middleware' => 'auth', 'uses' =>'QuestionController@postUpdate']);  

Route::get('admin/question/active/{id}', ['middleware' => 'auth', 'uses' =>'QuestionController@isActive']);  
Route::get('admin/question/inactive/{id}', ['middleware' => 'auth', 'uses' =>'QuestionController@isInactive']);  



Route::get('admin/contact/all', ['middleware' => 'auth', 'uses' =>'ContactController@all']);  
Route::get('admin/contact/allData', ['middleware' => 'auth', 'uses' =>'ContactController@allData']);  

Route::get('admin/change-password', ['middleware' => 'auth', 'uses' =>'HomeController@getAdminChangePassword']);  
Route::get('admin/change-password/{id}', ['middleware' => 'auth', 'uses' =>'HomeController@postAdminChangePassword']);  