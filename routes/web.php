<?php

use App\Http\Controllers\BenefitsProg;
use App\Http\Controllers\ContributionServ;
use App\Http\Controllers\LoanProg;
use App\Http\Controllers\MembershipServ;
use App\Http\Controllers\OnlineServ;
use App\Http\Controllers\ServiceCategoryController;
use App\Models\Service;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SpecialProg;
use Illuminate\Support\Facades\Route;

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

Route::view('/dashboard', 'dashboard')->name('dashboard');

Route::get('servCategory', [ServiceCategoryController::class, 'index'])->name('serviceCategory');

Route::get('services/list', [ServiceController::class, 'index'])->name('serviceList');

Route::get('/services/membership', [MembershipServ::class, 'index'])->name('services.membership');

Route::get('/services/contributions', [ContributionServ::class, 'index'])->name('services.contributions');

Route::get('/services/benefits', [BenefitsProg::class, 'index'])->name('services.benefits');

Route::get('/services/loans', [LoanProg::class, 'index'])->name('services.loans');

Route::get('/services/online', [OnlineServ::class, 'index'])->name('services.online');

Route::get('/services/special', [SpecialProg::class, 'index'])->name('services.special');

