<?php

namespace App\Http\Controllers\User\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('User\Category\index',[
            'categories' => Category::with(['items'])->where('user_id', $user->id)->orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function save(Request $request)
    {
        $user =Auth::user();
        $data = $request->validate([
            'name' => ['string', 'max:2500', 'required'],
        ]);

        Category::create([
            'name' => $data['name'],
            'user_id' => $user->id,
        ]);

        return redirect()->back()->with('success', 'Categorie ajoutee avec success !');
    }

    public function delete(mixed $id)
    {
        $category = Category::where('id', $id)->findOrdFail();
        $category->delete();

        return back()->with('success', 'Suppression reussie !');
    }
}
