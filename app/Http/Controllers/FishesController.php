<?php

namespace App\Http\Controllers;

use App\Models\Fishes;
use Illuminate\Http\Request;

class FishesController extends Controller
{

    public function index(Request $request)
    {
        $fishes = Fishes::all();

        return response()->json($fishes);
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
        $fishes = new Fishes();
        $fishes->name = $request->name;
        $fishes->description = $request->description;
        $fishes->size = $request->size;
        $fishes->type = $request->type;

        $fishes->save();

        return response()->json($fishes, 201);
    }


    public function show(Fishes $fishes)
    {
        return $fishes;
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request,  $id)
    {
        $fishes = Fishes::findOrFail($id);
        $fishes->update($request->all());

        return response()->json($fishes, 201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fish = Fishes::findOrFail($id);
        $fish->delete();
    }
}
