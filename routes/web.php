<?php
  
use App\Livewire\Auth\AuthLogin;  
use App\Livewire\Admin\AdminDashboard;
use App\Livewire\Admin\AdminButtons; 
use App\Livewire\Admin\AdminForms; 
use App\Livewire\Admin\AdminIndex;
use App\Livewire\Admin\AdminModals; 
use App\Livewire\Admin\AdminRegister;
use App\Livewire\Admin\AdminTables;
use App\Livewire\Admin\AdminUI;  
use App\Livewire\Admin\Admin404;   

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', AuthLogin::class)->name('login');
Route::get('/dashboard', AdminDashboard::class)->name('dashboard');
Route::get('/buttons', AdminButtons::class)->name('buttons');
Route::get('/forms', AdminForms::class)->name('forms');
Route::get('/index', AdminIndex::class)->name('index');
Route::get('/modals', AdminModals::class)->name('modals');
Route::get('/register', AdminRegister::class)->name('register');
Route::get('/tables', AdminTables::class)->name('tables');
Route::get('/UI', AdminDashboard::class)->name('UI');
Route::get('/404', AdminDashboard::class)->name('404');