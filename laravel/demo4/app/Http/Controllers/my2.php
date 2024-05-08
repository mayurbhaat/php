<?php

namespace App\Http\Controllers;
use App\Models\my1;
use Illuminate\Http\Request;

class my2 extends Controller
{
    //

    function insert(request $req){

        $m1=$req->get("em");
        $m2=$req->get("ep");
        $m3=$req->get("es");
        $m4=$req->get("et");
    
       $sql=new my1();
    
       $sql->employename=$m1;
       $sql->employepost=$m2;
       $sql->employesalary=$m3;
       $sql->employetime=$m4;
    
       $sql->save();
       return redirect('/');
    } 
    

    function show(){

        $sql=my1::all();
        return view('show',['jarvis'=>$sql]);


    }
    
    function  clean($id){

        $sql=my1::find($id);
        $sql->delete();

        return redirect('show');
    }
       

    function upshow($id){

        $sql=my1::find($id);
        return view('update',['row'=>$sql]);

    }

    function update(request $req){

        $sql=my1::find($req->id);

        $sql->employename=$req->em;
       $sql->employepost=$req->ep;
       $sql->employesalary=$req->es;
       $sql->employetime=$req->et;
    
       $sql->save();
       return redirect('show');
    }
}
