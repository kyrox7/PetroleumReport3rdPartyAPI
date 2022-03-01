<?php

namespace App\Http\Controllers;
use App\Models\Report;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    //Fetching data from API and storing in database
    public function store(){
        
        $checkingData = Report::all()->count();
        if($checkingData == 0 ){
        $collection = Http::get("https://raw.githubusercontent.com/younginnovations/internship-challenges/master/programming/petroleum-report/data.json")->collect();
        foreach($collection as $item){
            $report = new Report;
            $report->year = $item['year'];
            $report->petroleum_product = $item['petroleum_product'];
            $report->sale = $item['sale'];
            $report->country = $item['country'];
            $report->save();
        }
        $totalDataDisplay = Report::all();
        return view('DisplayOverallData')->with('totalDataDisplay', $totalDataDisplay);
        
    }else{
        $totalDataDisplay = Report::all();
        return view('DisplayOverallData')->with('totalDataDisplay', $totalDataDisplay);
    }

    }

    //Listing Total Sales of each petroleum product
    public function ListingTotalSales(){
        $totalSales = Report::all();
        return view('totalSales')->with('totalSales', $totalSales);

    }

    //Listing Countries
    public function ListingCountries(){
        $countries = DB::select('Select Country, sum(sale) as totalSale from reports  group by Country order By totalSale DESC');
        // dd($countries);
        return view('listingCountries')->with('countries',$countries);
    }
}
