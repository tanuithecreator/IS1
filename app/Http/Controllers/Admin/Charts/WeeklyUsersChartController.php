<?php

namespace App\Http\Controllers\Admin\Charts;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WeeklyUsersChartController extends Controller
{
    public function index()
    {
        $startDate = now()->subDays(7);
        $endDate = now();

        $weeklyUsers = User::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as users'))
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        $labels = $weeklyUsers->pluck('date');
        $data = $weeklyUsers->pluck('users');

        return response()->json([
            'labels' => $labels,
            'data' => $data,
        ]);
    }
}
