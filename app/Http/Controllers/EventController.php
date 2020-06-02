<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $events = Event::latest()->paginate(5);

      return view('events.index',compact('events'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
         'name' => 'required',
         'anEvent' => 'required',
         'description' => 'required',
         'publicEvent' => 'required',
         'location' => 'required'
     ]);

      Event::create($request->all());

      return redirect()->route('events.index')
                     ->with('success','events created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $event = Event::find($id);
      return view('events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $event = Event::find($id);
      return view('events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      $events = Event::find($id);

      $events->name = $request->get('name');
      $events->anEvent = $request->get('anEvent');
      $events->description = $request->get('description');
      $events->publicEvent= $request->get('publicEvent');
      $events->location= $request->get('location');
      $events->save();

      return redirect()->route('events.index')
        ->with('success','events update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $event = Event::find($id);
      $event->delete();
      return redirect()->route('events.index')
            ->with('success','events deleted successfully');
    }
}
