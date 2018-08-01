<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Category;
use App\Address;
use App\Region;

class HomeController extends Controller
{
    public function index(){
    	$menu = DB::table('region')
    			->select('region.name as rname','addess.name as ad_name')
    			->join('addess','addess.region_id','=','region.id')
    			->get();
    	return view('homepage',compact('menu'));
    }
}
