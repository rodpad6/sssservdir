<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BenefitsProg extends Controller
{
    public function index()
    {
        $benefits = DB::table('services')
            ->leftJoin('service_categories', 'services.category_cd', '=', 'service_categories.category_cd')
            ->select('services.*', 'service_categories.category_name')
            ->where('services.category_cd', '=', 'BP')
            ->get();
        return view('services/benefits', compact('benefits'));
    }
}
