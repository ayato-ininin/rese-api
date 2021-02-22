<?php

namespace App\Http\Controllers;

use App\Models\Reserved;
use Illuminate\Http\Request;

class ReservedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Reserve::all();
        return response()->json([
            'message'=>'ok',
            'data'=>$items
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $now=Carbon::now();
        $item=new Reserve;
        $item->user_id=$request->user_id;
        $item->shop_id=$request->shop_id;
        $item->date=$request->date;
        $item->time=$request->time;
        $item->number=$request->number;
        $item->created_at=$now;
        $item->updated_at=$now;
        $item->save();
        return response()->json([
            'message'=>'reserve succesfully',
            'data'=>$item
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reserved  $reserved
     * @return \Illuminate\Http\Response
     */
    public function show(Reserved $reserved)
    {
        $item=Reserve::where('id',$reserve->id)->first();
        if ($item) {
            return response()->json([
                'message' => 'OK',
                'data' => $item
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reserved  $reserved
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserved $reserved)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reserved  $reserved
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserved $reserved)
    {
        $item=Reserve::where('id',$reserve->id)->delete();
        if ($item) {
            return response()->json([
                'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }

    }
}
