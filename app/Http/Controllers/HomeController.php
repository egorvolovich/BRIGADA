<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Place;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sortPlace = $request->get('sort_place');
        $sortDate = $request->get('sort_date');



        $concerts = Event::query()
            ->with(['place','concert'])
            ->where('is_popular',0);

        $concertsPopular = Event::query()
            ->with(['place','concert'])
            ->where('is_popular',1);

        if($sortDate && $sortDate != ''){
            $concerts->where('concert_date',$sortDate);
            $concertsPopular->where('concert_date',$sortDate);
        }
        if($sortPlace && $sortPlace != ''){
            $concerts->where('place_id',$sortPlace);
            $concertsPopular->where('place_id',$sortPlace);
        }

        $concertsPopular = $concertsPopular->get();
        $concerts = $concerts->get();

        $places = Place::all();

        return view('welcome')->with(
            [
                'events'=>$concerts,
                'eventsPopular'=>$concertsPopular,
                'places'=>$places
            ]);
    }

    public function contacts(){
        return view('contacts');
    }

    public function aboutUs(){
        return view('aboutUs');
    }
}
