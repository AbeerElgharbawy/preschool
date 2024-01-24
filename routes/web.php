<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassRoomController;
use App\Models\Classroom;

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
Route::get('/', function () {
    return view('welcome');
});
// Route::get('home',[pageController::class,'home'])->name('home');
Route::get('about',[pageController::class,'about'])->name('about');
Route::get('index',[pageController::class,'testHome'])->name('home');
Route::get('team',[pageController::class,'team'])->name('team');
Route::get('testimonial',[pageController::class,'testimonial'])->name('testimonial');
Route::get('contact',[pageController::class,'contact'])->name('contact');
Route::get('appointment',[pageController::class,'appointment'])->name('appointment');
Route::get('classes',[ClassRoomController::class,'classList'])->name('classes');
Route::get('facilities',[pageController::class,'facilities'])->name('facilities');
// Route::get('home',[pageController::class,'team'])->name('team');
Route::get('callToAction',[pageController::class,'callToAction'])->name('callToAction');
Route::fallback(pageController::class)->name('404');

//testimonials

Route::get('addTestimonial',[TestimonialController::class,'create'])->name('addTestimonial');
Route::post('storeTestimonial',[TestimonialController::class,'store'])->name("storeTestimonial");
Route::get('testimonials',[TestimonialController::class,'index'])->name('testimonials');
Route::get('showTestimonial/{id}',[TestimonialController::class,'show'])->name('showTestimonial');
Route::get('update/{id}',[TestimonialController::class,'edit']);
Route::put('updateTestimonial/{id}',[TestimonialController::class,'update'])->name('updateTestimonial');// Route::get('showTestimonials',function(){
Route::get('deleteTestimonial/{id}',[TestimonialController::class,'destroy']);

Route::get('testimonial',[TestimonialController::class,'testList'])->name('testimonial');

//appointment
Route::get('addAppointment',[AppointmentController::class,'create'])->name('addAppointment');
Route::post('storeAppointment',[AppointmentController::class,'store'])->name('storeAppointment');
Route::get('showAppointments',[AppointmentController::class,'index'])->name('showAppointments');
Route::get('deleteAppointment/{id}',[AppointmentController::class,'destroy']);
//     return view('admin.testimonial.testimonials');
// })->name("testimonials");

//contact
Route::post('contactMail',[ContactController::class,'contactMail']);
Route::get('showContacts',[ContactController::class,'index'])->name('showContacts');
Route::get('showContact/{id}',[ContactController::class,'show']);
Route::get('deleteContact/{id}',[ContactController::class,'destroy']);
//Teachers
Route::get('addTeacher',[TeacherController::class,'create'])->name('addTeacher');
Route::post('storeTeacher',[TeacherController::class,'store'])->name('storeTeacher');
Route::get('teachers',[TeacherController::class,'index'])->name('teachers');
Route::get('showTeacher/{id}',[TeacherController::class,'show'])->name('showTeacher');
Route::get('update/{id}',[TeacherController::class,'edit']);
Route::put('updateTeacher/{id}',[TeacherController::class,'update'])->name('updateTeacher');
Route::get('deleteTeacher/{id}',[TeacherController::class,'destroy']);
Route::get('team',[TeacherController::class,'teacherList'])->name('team');

//classes
// Route::get('addClass',function(){
//     return view('admin.classes.addClass');
// });
Route::get('addClass',[ClassRoomController::class,'create'])->name('addClass');
Route::post('storeClass',[ClassRoomController::class,'store'])->name('storeClass');
Route::get('classrooms',[ClassRoomController::class,'index'])->name('classes');
Route::get('showClass/{id}',[ClassRoomController::class,'show'])->name('showClass');
Route::get('update/{id}',[ClassRoomController::class,'edit']);
Route::put('updateClass/{id}',[ClassRoomController::class,'update'])->name('updateClass');
Route::get('deleteClass/{id}',[TeacherController::class,'destroy']);
// Route::get('classlist',[TeacherController::class,'teacherList'])->name('team');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
