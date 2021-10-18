<?php

namespace App\Http\Controllers;

use App\Models\Fishes;
use App\Models\Places;
use Illuminate\Http\Request;

class PlacesController extends Controller
{

    public function index(Request $request)
    {
        $places = Places::all();

        return response()->json($places);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }


    public function store(Request $request)
    {

        $place = Places::create([
            'name' => $request->name,
            'country' => $request->country,
            'address_latitude' => $request->address_latitude,
            'address_longitude' => $request->address_longitude,


        ]);
        $place->save();

        return response()->json($place, 201);


    }



/**
 * Display the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public
function show($id)
{
    //
}

/**
 * Show the form for editing the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public
function edit($id)
{
    //
}

/**
 * Update the specified resource in storage.
 *
 * @param \Illuminate\Http\Request $request
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public
function update(Request $request, $id)
{

    $places = Fishes::findOrFail($id);
    $places->update($request->all());

    return $places;
}

/**
 * Remove the specified resource from storage.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public
function destroy($id)
{

}
}
