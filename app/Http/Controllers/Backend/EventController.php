<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::all();
        return view('backend.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Events::create([
            'name' => $request->name,
            'date' => $request->date,
            'state' => $request->state,
            'location' => $request->location,
            'price_type' => json_encode(array_filter($request->price_type)),
            'price' => json_encode(array_filter($request->price)),
            'description' => $request->description,
        ]);

        return redirect()->route('event.index')->with('message', 'Event Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Events::find($id);
        return view('backend.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $event = Events::find($id);
        $event->name      = $request['name'];
        $event->price_type      = json_encode(array_filter($request->price_type));
        $event->price      = json_encode(array_filter($request->price));
        $event->date      = $request['date'];
        $event->description = $request['description'];
        $event->state = $request['state'];
        $event->location = $request['location'];
      
        $event->save();
        return redirect()->route('event.index')->with('message', 'Event Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $event)
    {
        $event->delete();
        return redirect()->route('event.index')->with('message', 'Event Deleted Successfully');
    }
}
