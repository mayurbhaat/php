<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m1;

class m2 extends Controller
{
  function insert(request $req){

  $m=$req->file("mimg")->getClientOriginalName();
  $req->mimg->move(public_path("images"),$m);  

  $mname=$req->get("mname");
  $mbuget=$req->get("mbuget");

  $sql=new m1();

  $sql->movieimg=$m;
  $sql->moviename=$mname;
  $sql->movieibuget=$mbuget;

  $sql-> save();
  return redirect('/');


  }

  function show(){


    $sql=m1::all();
    return view('2show',['tony'=>$sql]);
  }

  function delete1($id){
    $sql=m1::find($id);
    $sql->delete();

    return redirect('2show');
  }

  function upshow2($id){

    $sql=m1::find($id);
    return view('2update',['row'=>$sql]);

  }

  function update1(request $req){

    $sql=m1::find($req->id);

    $m=$req->file("mimg")->getClientOriginalName();
    $req->mimg->move(public_path("images"),$m); 
    
    $sql->movieimg=$req->mimg->getClientOriginalName();

    $sql->moviename=$req->mname;
    $sql->movieibuget=$req->mbuget;

    $sql->save();
    return redirect('2show');
  
  }
}
