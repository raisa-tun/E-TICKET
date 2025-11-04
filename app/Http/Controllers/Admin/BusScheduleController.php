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
        $bus_data = Bus_overview::with('details')->get();
        //dd($bus_data->id,$bus_data->details);
        //  foreach($bus_data->details as $bus_details){
        //dd($bus_details->code_no);

        // }
        return view('layouts.pages.bus_schedule', compact('bus_data'));
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

            'bus_brand_name' => $request->bus_brand_name,
            'total_bus_no' => $request->total_bus_no,
            'available_bus_no' => $request->available_bus_no
        ]);

        $bus_overview->details()->create([
            'code_no' => $request->code_no,
            'total_seats' => $request->total_seats,
            'price' => $request->price,
            'available_seats' => $request->available_seats,
            'start_point' => $request->start_point,
            'end_point' => $request->end_point,
            'departure_time' => $request->departure_time,
            'arrival_time' => $request->arrival_time,
            'ac_or_non_ac' => $request->ac_or_non_ac,
            'date'=> $request->date

        ]);
        return redirect('/admin/dashboard');
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
   /* public function update(Request $request, string $id)
    {
        //
       // dd($request);
        $bus_schedule = Bus_overview::with('details')->findOrFail($id);
        $allowed = ['bus_brand_name', 'total_bus_no', 'available_bus_no'];
        if (!in_array($request->field, $allowed)) {
            $first_bus_details = $bus_schedule->details->first();
            if ($first_bus_details) {
                $first_bus_details->{$request->field} = $request->value;
                $first_bus_details->save();
            } else {
                return response()->json(['error' => 'No bus details found for this bus overview.'], 404);
            }
        } else {
            $bus_schedule->{$request->field} = $request->value;
            $bus_schedule->save();
        }

        return response()->json(['success' => true]);
    }*/
        public function update(Request $request, string $id)
{
    // Find the bus schedule and related details
    $bus_schedule = Bus_overview::with('details')->findOrFail($id);

    // Define which fields belong to Bus_overview model, which belong to details
    $allowedBusOverviewFields = ['bus_brand_name', 'total_bus_no', 'available_bus_no'];
    
    // Extract only known fields from request input
    $input = $request->only([
        'bus_brand_name',
        'total_bus_no',
        'available_bus_no',
        'code_no',
        'departure_time',
        'start_point',
        'arrival_time',
        'end_point',
        'price'
    ]);
    
    // Update Bus_overview fields if present in input
    foreach ($allowedBusOverviewFields as $field) {
        if (array_key_exists($field, $input)) {
            $bus_schedule->{$field} = $input[$field];
        }
    }
    $bus_schedule->save();

    // Update the related details fields
    $details = $bus_schedule->details->first(); // Assuming only one detail related
    if ($details) {
        // Fields that belong to details model
        $detailsFields = ['code_no', 'departure_time', 'start_point', 'arrival_time', 'end_point', 'price'];

        foreach ($detailsFields as $field) {
            if (array_key_exists($field, $input)) {
                $details->{$field} = $input[$field];
            }
        }
        $details->save();
    } else {
        // Optionally create details if not exist or return error
        return response()->json(['error' => 'No bus details found for this bus overview.'], 404);
    }

    return response()->json(['success' => true]);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $bus = Bus_overview::find($id);
        if ($bus) {
            $bus->delete();
            return response()->json(['success' => 'Bus deleted successfully.']);
        } else {
            return response()->json(['success' => 'Bus not found.'], 404);
        }
    }
}
