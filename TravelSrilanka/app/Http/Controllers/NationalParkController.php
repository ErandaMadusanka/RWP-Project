<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NationalPark;
use App\OpenHours;
use DB;


class NationalParkController extends Controller
{
    public function nationalPark(){

        return view('national_parks');
    }

    public function index()
    {
    	$province_list = DB::table('provinces')
                        ->get();
        return view('admin.nationalPark.nationalPark')->with('province_list',$province_list);
    }
 
 	function fetch(Request $request)
    {
         //$select = $request->get('select');
        $select = 'province_id';
        $value = $request->get('value');
        $dependent = $request->get('dependent');

        $data = DB::table('districts')
            ->where($select, $value)
            ->get();

          $output = '<option value="">colombo</option>';
            echo $output;
    }

    public function storeData(Request $request)
    {
    	//dd($request->all());

    	$nationalPark = new NationalPark;
        $nationalPark->name =$request->name;
    	$nationalPark->description =$request->desc;
    	$nationalPark->latitude =$request->lat;
    	$nationalPark->longitude =$request->long;
    	$nationalPark->contact_info =$request->cont;
    	$nationalPark->website =$request->website;
    	$nationalPark->user_id ="1";
    	$nationalPark->city_id ="1";

    	$nationalPark->save();

    	$openHours = new OpenHours;
    	$openHours->day="Monday";
    	$openHours->open_time= $request->mot;
    	$openHours->close_time= $request->mct;
    	$openHours->nationalPark_id="1";
        $openHours->save();

        $openHours = new OpenHours;
    	$openHours->day="Tuesday";
    	$openHours->open_time= $request->tot;
    	$openHours->close_time= $request->tct;
    	$openHours->nationalPark_id="1";
        $openHours->save();

        $openHours = new OpenHours;
    	$openHours->day="Wendsday";
    	$openHours->open_time= $request->wot;
    	$openHours->close_time= $request->wct;
    	$openHours->nationalPark_id="1";
        $openHours->save();

        $openHours = new OpenHours;
    	$openHours->day="Thursday";
    	$openHours->open_time= $request->thot;
    	$openHours->close_time= $request->thct;
    	$openHours->nationalPark_id="1";
        $openHours->save();

        $openHours = new OpenHours;
    	$openHours->day="Friday";
    	$openHours->open_time= $request->fot;
    	$openHours->close_time= $request->fct;
    	$openHours->nationalPark_id="1";
        $openHours->save();

        $openHours = new OpenHours;
    	$openHours->day="Saturday";
    	$openHours->open_time= $request->stot;
    	$openHours->close_time= $request->stct;
    	$openHours->nationalPark_id="1";
        $openHours->save();

        $openHours = new OpenHours;
    	$openHours->day="Sunday";
    	$openHours->open_time= $request->sot;
    	$openHours->close_time= $request->sct;
    	$openHours->nationalPark_id="1";
        $openHours->save();
    }
}
