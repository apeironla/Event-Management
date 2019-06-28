<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Package;
use App\User;
use Auth;

class BookController extends Controller
{
    //
    public function index()
    {
        $all = Book::all();
        //dd($all);
        return view('Book.index_book',['data'=>$all]);
    }

    // public function create_event()
    // {
    //     return view('event.new_event');
    // }

    public function store_book(Request $request)
    {
        // $this->validate($request, [
            // 'status'=>'required',
            // 'cost'=>'required',

        // ]);
        //return 'dhaka';
       Book::create([
           'user_email'=>$request->email,
           'date'=>$request->date,
           'package_id'=>$request->packageid,
           'More Requirements'=>$request->req

       ]);

       return redirect(route('home'))->with('success','Booking has been confirmed . You will be contacted soon');
    }

    public function book($packageid)
    {
        //dd($course);
        $event = Package::find($packageid);
        $email = User::find(Auth::user()->id);

        return view('book.form',['id'=>$event,'email'=>$email]);
    }

    // public function update_event(Request $request, Event $event)
    // {
    //     $event->status = $request->status;
    //     $event->cost = $request->cost;

    //     $event->save();
    //    return redirect(route('index'))->with('success','Event info has been updated');

    // }

    public function destroy_book(Event $event)
    {
        $event->delete();
        return redirect(route('index'))->with('success','Event info has been deleted');
    }
}
