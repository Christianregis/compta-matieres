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
            'totalItems' => $user->items()->count(),
            'totalCategories' => Category::count(),
            'itemsUnderThreshold' => $user->items()->whereColumn('quantity', '<=', 'alert_threshold')->count(),
            'movementsThisMonth' => $user->stockMovements()->whereBetween('movement_date', [
                now()->startOfMonth(),
                now()->endOfMonth()
            ])->count(),
            'categoriesChartData' => Category::withCount('items')
                ->get()
                ->map(function ($category) {
                    return [
                        'label' => $category->name,
                        'total' => $category->items_count,
                    ];
                })
                ->values(),
            'items' => $user->items()->with('stockmovements', 'stockmovements.movementType')->orderBy('created_at', 'desc')->limit(5)->get()
        ]);
    }
}
