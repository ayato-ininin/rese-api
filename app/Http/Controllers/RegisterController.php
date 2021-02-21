<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;

class RegisterController extends Controller
{
    public function post(Request $request)
    {
        $now=Carbon::now();
        $hashed_password=Hash::make($request->password);
        $param=new User;
        
            $param->name=$request->name;
            $param->email=$request->email;
            $param->password=$hashed_password;
            $param->created_at=$now;
            $param->updated_at=$now;
        
        $param->save();
        return response()->json([
            'message'=>'Created successfully',
            'data'=>$param
        ],200);
       
        
    }
}
