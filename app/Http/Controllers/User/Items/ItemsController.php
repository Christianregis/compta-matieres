<?php

namespace App\Http\Controllers\User\Items;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ItemsController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('User\Materials\index', [
            'categories' => Category::with(['items'])->where('user_id', $user->id)->orderBy('created_at', 'desc')->get(),
            'statuses' => Status::all(),
            'items' => Item::with(['status'])->where('user_id', $user->id)->orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function save(Request $request)
    {
        $user = Auth::user();
        $data = $request->validate([
            'code' => ['string', 'max:500', 'nullable'],
            'name' => ['string', 'max:1000', 'required'],
            'description' => ['string', 'max:5000', 'nullable'],
            'location' => ['string', 'required'],
            'quantity' => ['integer', 'min:0'],
            'alert_threshold' => ['integer', 'min:0'],
            'category_id' => ['exists:categories,id', 'required'],
            'status_id' => ['exists:statuses,id', 'required']
        ]);

        Item::create([
            'code' => $data['code'] ?? 'UDO-' . Str::randon(5),
            'name' => $data['name'],
            'description' => $data['description'],
            'location' => $data['location'],
            'quantity' => $data['quantity'],
            'alert_threshold' => $data['alert_threshold'],
            'category_id' => $data['category_id'],
            'status_id' => $data['status_id'],
            'user_id' => $user->id,
        ]);

        return redirect()->back()->with('success', 'Nouveau materiel ajoute !');
    }

    public function delete(mixed $id)
    {
        $item = Item::where('id', $id)->findOrFail();
        $item->delete();

        return redirect()->back()->with('success', 'Materiel supprime !');
    }
}
