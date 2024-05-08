<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\my1;


class my2 extends Controller
{
    function insert(request $req){

     $g1=$req->file("gimg")->getClientOriginalName();
     $req->gimg->move(public_path("img"),$g1);

     $g2=$req->get("gname");
     $g3=$req->get("gprice"); 
     
      $sql=new my1();

      $sql->gameimg=$g1;
      $sql->gamename=$g2;
      $sql->gameprice=$g3;


     $sql-> save();
     return redirect('/');

    }



    function show(){

     $sql=my1::all();
     return view('show',['jarvis'=>$sql]);   
    }

    function delete($id){
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

     $g1=$req->file("gimg")->getClientOriginalName();
     $req->gimg->move(public_path("img"),$g1);


     $sql->gameimg=$req->gimg->getClientOriginalName();

     $sql->gamename=$req->gname;
     $sql->gameprice=$req->gprice;

     $sql->save();
     return  redirect('show');

    }


}
