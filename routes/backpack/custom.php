<?php

use Illuminate\Support\Facades\Route;
use Backpack\CRUD\app\Library\Widget;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('volunteer', 'VolunteerCrudController');
    Route::crud('donation', 'DonationCrudController');
    //Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('backpack.dashboard');
    Route::get('charts/weekly-users', 'Charts\WeeklyUsersChartController@response')->name('charts.weekly-users.index');
    Route::get('charts/volunteers', 'Charts\VolunteersChartController@response')->name('charts.volunteers.index');
}); // this should be the absolute last line of this file