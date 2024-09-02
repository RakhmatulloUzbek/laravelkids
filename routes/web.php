<?php

use App\Http\Controllers\AdminPanel\CourceController;
use App\Http\Controllers\AdminPanel\ServiceController;
use App\Http\Controllers\AdminPanel\StudentController;
use App\Http\Controllers\AdminPanel\TeacherController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\AdminPanelController;

Route::get('/temp', function () {
    echo "Hola mundo";
});



Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/aboutus', [HomeController::class,'aboutus'])->name('aboutus');
Route::get('/contactus', [HomeController::class,'contactus'])->name('contactus');
Route::get('/blog', [HomeController::class,'blog'])->name('blog');
Route::get('/services', [HomeController::class,'services'])->name('services');
Route::get('/services', [HomeController::class,'services'])->name('services');
Route::get('/ourstaffs', [HomeController::class,'ourstaffs'])->name('ourstaffs');
Route::get('/portfolio', [HomeController::class,'portfolio'])->name('portfolio');
Route::get('/portfolio_detail', [HomeController::class,'portfolio_detail'])->name('portfolio_detail');
Route::get('/signin', [HomeController::class,'signin'])->name('signin');
Route::get('/signup', [HomeController::class,'signup'])->name('signup');



// Admin Panel

Route::get('/admin/home', [AdminPanelController::class, 'index'])->name('admin.index');


Route::get('/admin/courses', [CourceController::class, 'index'])->name('admin.courses');
Route::get('/admin/courses/create', [CourceController::class, 'create'])->name('admin.courses.create');
Route::post('/admin/courses/store', [CourceController::class, 'store'])->name('admin.courses.store');
Route::get('/admin/courses/destroy/{id}', [CourceController::class, 'destroy'])->name('admin.courses.destroy');
Route::get('/admin/courses/edit/{id}', [CourceController::class, 'edit'])->name('admin.courses.edit');
Route::post('/admin/courses/update/{id}', [CourceController::class, 'update'])->name('admin.courses.update');


Route::get('/admin/teachers', [TeacherController::class, 'index'])->name('admin.teachers');
Route::get('/admin/teachers/create', [TeacherController::class, 'create'])->name('admin.teachers.create');
Route::get('/admin/teachers/show/{id}', [TeacherController::class, 'show'])->name('admin.teachers.show');
Route::get('/admin/teachers/destroy/{id}', [TeacherController::class, 'destroy'])->name('admin.teachers.destroy');
Route::post('/admin/teachers/store', [TeacherController::class, 'store'])->name('admin.teachers.store');


Route::get('/admin/students', [StudentController::class, 'index'])->name('admin.students');
Route::get('/admin/students/create', [StudentController::class, 'create'])->name('admin.students.create');
Route::get('/admin/students/show/{id}', [StudentController::class, 'show'])->name('admin.students.show');
Route::get('/admin/students/destroy/{id}', [StudentController::class, 'destroy'])->name('admin.students.destroy');
Route::post('/admin/students/store', [StudentController::class, 'store'])->name('admin.students.store');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
