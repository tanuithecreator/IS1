<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Widget;

class DashboardController extends Controller
{
    public function index()
    {
        // Add a chart widget
        Widget::add([
            'type'       => 'chart',
            'controller' => \App\Http\Controllers\Admin\Charts\WeeklyUsersChartController::class,
            'wrapper'    => ['class' => 'card mb-2'],
            'content'    => [
                'header' => 'Weekly New Users',
                'body'   => 'This chart shows the number of new users registered in the past 7 days.',
            ],
        ]);
        // Add more widgets if needed

        return view('backpack::base.dashboard');
    }
}
