<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\StockMovement;
use App\Models\Category;

class PublicController extends Controller
{
    public function home()
    {
        return view('welcome',[
            'items_count' => Item::count(),
            'stock_movements_count' => StockMovement::count(),
            'categories_count' => Category::count(),
        ]);
    }
}
