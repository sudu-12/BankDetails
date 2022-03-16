<?php

namespace App\Http\Controllers;
use App\Models\Bankdata;
use Illuminate\Http\Request;

class logingController extends Controller
{
    public function store(Request $request)
    {
        $bank=new Bankdata;
        $this->validate($request,['exampleInputEmail1'=>'required|max:100|min:5']);
        $bank->exampleInputEmail1=$request->exampleInputEmail1;
        $bank->save();
        
    }
}
