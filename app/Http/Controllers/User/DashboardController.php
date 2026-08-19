<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\StockMovement;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('User.dashboard', [
            'user' => $user,
            'totalItems' => Item::count(),
            'totalCategories' => Category::count(),
            'itemsUnderThreshold' => Item::whereColumn('quantity', '<=', 'alert_threshold')->count(),
            'movementsThisMonth' => StockMovement::whereBetween('movement_date', [
                now()->startOfMonth(),
                now()->endOfMonth()
            ])->count(),
        ]);
    }
}
