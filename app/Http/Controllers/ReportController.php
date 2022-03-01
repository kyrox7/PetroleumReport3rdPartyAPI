<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReportController extends Controller
{
    public function index(){
        $collection = Http::get("https://raw.githubusercontent.com/younginnovations/internship-challenges/master/programming/petroleum-report/data.json")->collect();
        return view('OverallData',['collection' => $collection]);
    }
}
