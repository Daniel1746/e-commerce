<?php

namespace App\Http\Controllers;
use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function register()
    {
        return view ('Catagory.register');
        function store(Request $request)
        {
            
                $Catagory=new Catagory();
                $Catagory->name=$request->name;
                $is_successed=$Catagory::save();
                if($is_successed)
                echo"Record saved successully";
                else 
                echo"someting want wrong. try again";
            
        }
    }
}
