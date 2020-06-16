<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use Illuminate\Support\Facades\DB;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donor = new Donor;
        $donor->name = $request->name;
        $donor->email = $request->email;
        $donor->city = $request->city;
        $donor->number = $request->number;
        $donor->blood = $request->blood;
        $donor->save();
        
        return \redirect('/obrigado');
    }

   public function login(){
       return view('login');
   }

   public function list(Request $request){
    
            $city = $request['city'];
            $blood = $request['blood'];
    
           if($city){
               $donors = DB::table('donors')->where('city', '=', $city)->paginate(10);
           }elseif($blood){
               $donors = DB::table('donors')->where('blood', '=', $blood)->paginate(10);
           }else{
               $donors = DB::table('donors')->paginate(10);
           }
        

        return view('list', compact('donors'));
   }
}
