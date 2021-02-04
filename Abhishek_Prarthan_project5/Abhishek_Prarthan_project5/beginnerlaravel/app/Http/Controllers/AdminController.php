<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //this function is used to display all the events to admin
    public function index(){
        $events = DB::table('events')->get();
        return view('adminevents',['events'=>$events]);
    }

    //this function is used to take the values from the database to the form.
    public function updateEvent(Request $request)
    {
        $eventData = DB::select('SELECT * from events WHERE EventId=?',[$request->input('eventId')]);
        return view('updateEventForm',['eventData'=>$eventData]);
    }

    //this function is used to update the event selected
    public function updateEventExtended(Request $request)
    {
        $updatedData = DB::table('events')
            ->where([
                ['EventId',$request->input('eventId') ],
            ])->update(array('EventName' => $request->input('eventName'),
                'EventDescription' => $request->input('eventDescription'),
                'EventLocation' => $request->input('eventLocation'),
                'EventDate' => $request->input('eventDate'),
                'EventTime' => $request->input('eventTime')));
        return redirect('/adminevents');
    }

    //this function inserts the newly created event into the database
    public function store(Request $request)
    {
        $eventName = $request->input('eventName');
        $eventDescription = $request->input('eventDescription');
        $eventLocation = $request->input('eventLocation');
        $eventDate = $request->input('eventDate');
        $eventTime = $request->input('eventTime');

        $data=array('EventName'=>$eventName,
            "EventDescription"=>$eventDescription,
            "EventLocation"=>$eventLocation,
            "EventDate"=>$eventDate,
            "EventTime"=>$eventTime);
        DB::table('events')->insert($data);
        return redirect('/adminevents');
    }

    //this function is to delete the event
    public function delete(Request $request)
    {
        DB::table('eventsuser')->where([['EventId',$request->input('eventId')]])->delete();
        DB::table('events')->where([['EventId',$request->input('eventId')]])->delete();
        return redirect('/adminevents');
    }
}
