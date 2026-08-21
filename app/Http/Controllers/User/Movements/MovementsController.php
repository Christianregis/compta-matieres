<?php

namespace App\Http\Controllers\User\Movements;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\MovementType;
use App\Models\StockMovement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovementsController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('User.Movements.index', [
            'movements' => StockMovement::with(['movementType', 'item', 'user'])->where('user_id', $user->id)->orderByDesc('created_at')->get(),
            'users' => User::latest('created_at')->get(),
            'movementTypes' => MovementType::latest()->get(),
            'items' => Item::latest()->get(),
        ]);
    }
}
