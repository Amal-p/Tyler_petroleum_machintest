<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Userlanguage;
use App\Models\Language;


class userData extends Controller
{
    //
    function insertData(Request $request){
        
        //$data = $req->input();
        $l1=$request-> english;
        $l2=$request-> malayalm;
        $l3=$request-> hindi;
        $l4=$request-> thamil;
        
        $reg = Registration::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'language1'=>$l1,
            'language2'=>$l2,
            'language3'=>$l3,
            'language4'=>$l4,
          ]);
          
          return redirect('/')->with('message', 'Record creat');
        
    }
    function showData(){
        $reg = Registration::all();
        return view('detail',compact('reg'));
    }
    function editData(Request $request){
        $id = $request -> id;
        $reg = Registration::find($id);
        //return $reg;
        
        return view('editpage',compact('reg'));
    }
    function deleteData(Request $request){
        $id = $request -> id;
        $reg = Registration::find($id);
        
        $reg->delete();
        return redirect('/showdata');

    }
    function editedData(Request $request){
        $l1=$request-> english;
        $l2=$request-> malayalm;
        $l3=$request-> hindi;
        $l4=$request-> thamil;

        $id = $request -> id;
        $reg = Registration::find($id);
        $reg -> name = $request ->name;
        $reg -> age = $request ->age;
        $reg -> gender = $request ->gender;
        $reg -> language1 = $l1;
        $reg -> language2 = $l2;
        $reg -> language3 = $l3;
        $reg -> language4 = $l4;
        $reg -> save();
        return redirect('/showdata');
    }

}
