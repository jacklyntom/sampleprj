<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\table;

class jac extends Controller
{
public $obj1;
    public function __construct()
        {
             $this->obj1=new table();
        }
    public function index()
        {
             return view('hello');
             
        }
    public function store(Request $request)
         {
    //      $name=$request->input('name');
    //      $age=$request->input('age');
    //      $address=$request->input('address');
    //      $array=['name'=>$name,'age'=>$age,'address'=>$address];
    //      $this->obj1->insertdata('hello',$array); or
             $array['name']=$request->input('name');
             $array['age']=$request->input('age');
             $array['address']=$request->input('address');
             $this->obj1->insertdata('hello',$array);
             return redirect('/viewdata');
             
         }
    public function viewdata()
        {
             $result['data']=$this->obj1->selectData('hello');
             return view('viewdata',$result);
        }
     
}

