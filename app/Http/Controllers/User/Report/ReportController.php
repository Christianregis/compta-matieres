<?php

namespace App\Http\Controllers\User\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function show()
    {
        return view('User.Reports.index');
    }
}
