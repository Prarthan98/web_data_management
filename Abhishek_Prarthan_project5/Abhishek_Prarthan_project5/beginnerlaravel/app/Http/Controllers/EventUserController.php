<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class EventUserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function index(){
		$events = DB::select('SELECT eventsuser.Participants,events.EventId,
            events.EventName,events.EventDescription,events.EventLocation,events.EventDate,events.EventTime
            FROM eventsuser
            RIGHT JOIN events
            ON eventsuser.eventId = events.eventId
            where eventsuser.userId=?',[auth()->user()->id]);
     return view('registeredEvents',['events'=>$events]);
    }
public function store(Request $request)
    {
    	$userId = $request->input('userId');
        $eventId = $request->input('eventId');
        $participants = $request->input('noOfParticipants');
        $data=array('userId'=>$userId,"eventId"=>$eventId,"participants"=>$participants);
        DB::table('eventsuser')->insert($data);
        return redirect('/registeredEvents');
        // return redirect('/p');

        // return view('EventUser',['events'=>$item]);
    }

    public function check(Request $request)
    {
        $datas = DB::select('SELECT * FROM eventsuser WHERE UserId=? AND EventId =?',[$request->input('userId'),$request->input('eventId')]);
        return view('updateRegisteredEvents',['participants'=>$datas]);
    }

public function updateRegisteredEvents(Request $request)
{
    $updatedData = DB::table('eventsuser')
            ->where([
                ['userId',$request->input('userId')],
                ['eventId',$request->input('eventId') ],
            ])->update(array('Participants' => $request->input('noOfParticipants')));
        return redirect('/registeredEvents');
}

public function unReg(Request $request)
{
    DB::table('eventsuser')->where([
            ['UserId',$request->input('userId')],
            ['EventId',$request->input('eventId')]
        ])->delete();
        return redirect('/registeredEvents');
}
}