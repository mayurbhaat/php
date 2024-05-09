<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prom;

class proc extends Controller
{
    function insert (request $req){

        $pimg=$req->file("pimg")->getClientOriginalName();

        $req->pimg->move(public_path("Product"),$pimg);

        $pname= $req->get("pname");
        $pcat= $req->get("pcat");
        $dprice= $req->get("dprice");
        $oprice= $req->get("oprice");


    $sql=new prom();

    $sql->image=$pimg;
    $sql->name=$pname;
    $sql->category=$pcat;
    $sql->deleteprice=$dprice;
    $sql->originalprice=$oprice;

    $sql->save();
    return redirect('/');

    }

    function show(){

    $sql=prom::all();
    return view('show',['jarvis'=>$sql]);    
    }


    function delete($id){
     $sql=prom::find($id);
     $sql->delete();
     return redirect('show');   
    }

    function upshow($id){
       $sql=prom::find($id);
       return view('update',['row'=>$sql]); 
    }

    function update(request $req){
    
        $sql=prom::find($req->id);

        $pimg=$req->file("pimg")->getClientOriginalName();
          $req->pimg->move(public_path("Product"),$pimg);

    $sql->image=$req->pimg->getClientOriginalName();

    $sql->name=$req->pname;
    $sql->category=$req->pcat;
    $sql->deleteprice=$req->dprice;
    $sql->originalprice=$req->oprice;

    $sql->save();
    return redirect('show');

    }

    
    function webshow(){

        $sql=prom::where('category','AC')->get();
        $sql1=prom::where('category','TV')->get();
        $sql2=prom::where('category','game')->get();
        $sql3=prom::where('category','phone')->get();
        $sql4=prom::where('category','laptop')->get();
        $sql5=prom::where('category','Refrigerator')->get();
        return view('index',compact('sql','sql1','sql2','sql3','sql4','sql5'));    
        }


        function search(request $req){
$search=$req->get('sea');

$sql=prom::query()->where('name','LIKE',"%{$search}%")->get();
$sql1=prom::query()->where('name','LIKE',"%{$search}%")->get();
$sql2=prom::query()->where('name','LIKE',"%{$search}%")->get();
$sql3=prom::query()->where('name','LIKE',"%{$search}%")->get();
$sql4=prom::query()->where('name','LIKE',"%{$search}%")->get();
$sql5=prom::query()->where('name','LIKE',"%{$search}%")->get();

return view('index',compact('sql','sql1','sql2','sql3','sql4','sql5'));

        }
}
