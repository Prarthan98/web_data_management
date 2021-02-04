<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\EventList;
use Session;

class eventListController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	
    //
    public function index(){
        $events = DB::select('select * from events');
        return view('EventList',['events'=>$events]);
        //return "HelloWorldController index method called.";
    }
}

