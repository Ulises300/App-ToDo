<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Models\Event;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(){
        $user = Auth::user();
        if($user->role == 'admin'){
            $events = Event::orderBy('id','desc')->paginate(10);
        }else{
            $events = Event::where('iduser', $user->id)
            ->orderBy('id', 'desc')
            ->paginate(10);
        }
        
        return view('events.index', compact('events'));
    }

    public function create(){
        return view('events.create');
    }

    public function store(StoreEventRequest $request)
    {
        $event = Event::create($request->all());

        return redirect()->route('events.index');
    }

    public function show(Event $event){
        return view('events.show',compact('event'));
    }

    public function edit(Event $event){
        return view('events.edit',compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|min:5|max:255',
            'content' => "required",
            'important' => 'boolean',
        ]);
        $event->update($request->all());

        return redirect()->route('events.show',$event);
    }

    public function destroy(Event $event){

        $event->delete();

        return redirect()->route('events.index');
    }    //
}



