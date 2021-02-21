<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Like;

class LikesController extends Controller
{
    public function index()
    {
        // 
    }
     public function store(Request $request)
    {
        $now = Carbon::now();
        $param=new Like;
        $param->user_id=$request->user_id;
        $param->shop_id=$request->shop_id;
        $param->created_at=$now;
        $param->updated_at=$now;
        $param->save();
        return response()->json([
            'message'=>'like successfully',
            'data'=>$param
        ],200);
    }
     public function delete(Request $request)
    {
        $item=Like::where('id',$request->id)->delete();
         if ($item) {
            return response()->json(
                ['message' => 'Like deleted successfully'],
                200
            );
        } else {
            return response()->json(
                ['message' => 'not found'],
                404
            );
    }
}
}

