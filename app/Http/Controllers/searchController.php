<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus_overview;
use App\Models\Bus_details;

class searchController extends Controller
{
    //
    public function search(Request $request)
    {


        /*$query = Bus_details::with('bus_overview')
               ->when($request->from,fn($q)=>$q->where('start_point',$request->from))
               ->when($request->to,fn($q)=>$q->where('end_point',$request->to))
               ->when($request->date,fn($q)=>$q->where('date',$request->date));

        $results = $query->get();
        foreach($results as $bus_details_result){
             dd($bus_details_result->bus_brand_name);
        }*/
        $bus_data=Bus_overview::whereHas('details', function ($q) use ($request) {
            $q ->when($request->from,fn($q)=>$q->where('start_point',$request->from))
               ->when($request->to,fn($q)=>$q->where('end_point',$request->to))
               ->when($request->date,fn($q)=>$q->where('date',$request->date));
        })
            ->with('details')
            ->get();
        foreach($bus_data as $bus_details_result){
             //dd($bus_details_result->bus_brand_name);
        }
        return view('layouts.contents.bus_schedule', compact('bus_data'));
    }
}
