<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpecialProg extends Controller
{
    public function index()
    {
        $specials = DB::table('services')
            ->leftJoin('service_categories', 'services.category_cd', '=', 'service_categories.category_cd')
            ->select('services.*', 'service_categories.category_name')
            ->where('services.category_cd', '=', 'SP')
            ->get();
        return view('services/special', compact('specials'));
    }
}
