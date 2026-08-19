<?php

namespace App\Http\Controllers\User\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show()
    {
        return view('User\Category\index',[
            
        ]);
    }
}
