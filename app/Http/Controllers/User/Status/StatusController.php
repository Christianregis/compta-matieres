<?php

namespace App\Http\Controllers\User\Status;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function show()
    {
        return view('User.Status.index',[
            'statuses' => Status::with('items')->orderByDesc('created_at')->get(),
        ]);
    }
}
