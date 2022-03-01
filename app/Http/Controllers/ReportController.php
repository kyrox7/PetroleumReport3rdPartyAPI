<?php

namespace App\Http\Controllers;
use App\Models\Report;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReportController extends Controller
{
    // public function index(){
    //     $collection = Http::get("https://raw.githubusercontent.com/younginnovations/internship-challenges/master/programming/petroleum-report/data.json")->collect();
    //     return view('OverallData',['collection' => $collection]);
    // }

    public function store(){
        $collection = Http::get("https://raw.githubusercontent.com/younginnovations/internship-challenges/master/programming/petroleum-report/data.json")->collect();
        foreach($collection as $item){
            $report = new Report;
            $report->year = $item['year'];
            $report->petroleum_product = $item['petroleum_product'];
            $report->sale = $item['sale'];
            $report->country = $item['country'];
            $report->save();
        }

    }
}
