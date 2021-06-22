<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PlanController extends Controller
{
    public function index()
    {
        $plans = DB::table('plans')->get();
        return view('admin/plans', compact('plans'));
    }
}
