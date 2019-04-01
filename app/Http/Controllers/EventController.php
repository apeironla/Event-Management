<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $all = Event::all();
        //dd($all);
        return view('event.index_event',['data'=>$all]);
    }

    public function create_event()
    {
        return view('event.new_event');
    }

    public function store_event(Request $request)
    {
        $this->validate($request, [
            'status'=>'required',
            'cost'=>'required',

        ]);
        //return 'dhaka';
       Event::create([
           'status'=>$request->status,
           'cost'=>$request->cost

       ]);

       return redirect(route('index'))->with('success','Event info has been added');
    }

    public function edit_event($event)
    {
        //dd($course);
        $event = Event::find($event);
        return view('event.edit_event',['id'=>$event]);
    }

    public function update_event(Request $request, Event $event)
    {
        $event->status = $request->status;
        $event->cost = $request->cost;

        $event->save();
       return redirect(route('index'))->with('success','Event info has been updated');

    }

    public function destroy_event(Event $event)
    {
        $event->delete();
        return redirect(route('index'))->with('success','Event info has been deleted');
    }
}

