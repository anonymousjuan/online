<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSensorRequest;
use App\Http\Requests\UpdateSensorRequest;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'this is the home page';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validate = $request->validate([
        'temperature'=>'required',
        'humidity'=>'required',
        'waterlevel'=>'required',
        'light'=>'required',
        ]);
         // Assuming you have a SensorData model or similar
        Sensor::create($validate);

    }

    
  

   
    /**
     * Display the specified resource.
     */
    public function show(Sensor $sensor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSensorRequest $request, Sensor $sensor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sensor $sensor)
    {
        //
    }
}
