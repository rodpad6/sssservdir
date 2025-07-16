<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoanProg extends Controller
{
    public function index()
    {
        $loans = DB::table('services')
            ->leftJoin('service_categories', 'services.category_cd', '=', 'service_categories.category_cd')
            ->select('services.*', 'service_categories.category_name')
            ->where('services.category_cd', '=', 'LP')
            ->get();
        return view('services/loans', compact('loans'));
    }
}
