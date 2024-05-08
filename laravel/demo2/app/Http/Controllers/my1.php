<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\super;

class my1 extends Controller
{
    //
    function insert(request $req){

 $fname=$req->get("fn");
 $lname=$req->get("ln");
 $email=$req->get("em");
 $psd=$req->get("ps");

 $sql=new super();
 $sql->firstname=$fname;
 $sql->lastname=$lname;
 $sql->email=$email;
 $sql->password=$psd;

 $sql->save();
 return redirect('/');









    }
}
