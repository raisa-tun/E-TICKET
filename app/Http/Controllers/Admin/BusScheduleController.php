<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bus_overview;
use App\Models\Bus_details;

class BusScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bus_data= Bus_overview::with('details')->get();
        //dd($bus_data->id,$bus_data->details);
      //  foreach($bus_data->details as $bus_details){
        //dd($bus_details->code_no);

       // }
        return view('layouts.contents.bus_schedule',compact('bus_data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        $bus_overview = Bus_overview::create([

            'bus_brand_name'=> $request->bus_brand_name,
            'total_bus_no'=> $request->total_bus_no,
            'available_bus_no'=> $request->available_bus_no
        ]);

        $bus_overview->details()->create([
            'code_no'=>$request->code_no,
            'total_seats'=>$request->total_seats,
            'price'=>$request->price,
            'available_seats'=>$request->available_seats,
            'starting_point'=>$request->starting_point,
            'end_point'=>$request->end_point,
            'departure_time'=>$request->departure_time,
            'arrival_time'=>$request->arrival_time,
            'ac_or_non_ac'=>$request->ac_or_non_ac,
            
        ]);
        return redirect('/admindashboard');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
       // dd("kjhks");
        $bus_schedule = Bus_overview::with('details')->findOrFail($id);
        $allowed = ['bus_brand_name','total_bus_no','available_bus_no'];
        if(!in_array($request->field,$allowed)){
          $first_bus_details= $bus_schedule->details->first();  
          if ($first_bus_details) {
            $first_bus_details->{$request->field} = $request->value;
            $first_bus_details->save();
        } else {
            return response()->json(['error' => 'No bus details found for this bus overview.'], 404);
        }
        }
        else{
            $bus_schedule->{$request->field} = $request->value;
            $bus_schedule->save();
        }

        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
