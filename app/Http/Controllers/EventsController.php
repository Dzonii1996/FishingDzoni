<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Places;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function index(Request $request)
    {
        $search_place = $request->search_place;
        $search_data = $request->search_data;

        $events = Events::with(['places' => function ($query) use ($search_place) {
            if ($search_place !== null) {
                return $query->where('title', 'like', '%' . $search_place . '%');
            }
        }
        ])->whereDate('created_at', '2016-12-31', $search_data);


        return response()->json($events);
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
        $event = new Events();
        $event->name = $request->name;
        $event->description = $request->description;
        $event->StartAt = $request->size;
        $event->EndsAt = $request->type;

        $event->save();

        return response()->json($event, 201);

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
