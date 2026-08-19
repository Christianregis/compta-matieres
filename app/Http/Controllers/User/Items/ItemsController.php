<?php

namespace App\Http\Controllers\User\Items;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function show()
    {
        return view('User\Materials\index',[
            
        ]);
    }
}
