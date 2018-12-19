<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interest;

class InterestsController extends Controller
{
    //
    public function index()
    {
        return Interest::all();
    }



    public function store(Request $request)
    {
        $data = new Interest;
        $data->interest = $request->interest;
        $data->save();

        return response()->json(['message'=>'success'], 200);
    }

    public function update(Request $request){
      
        $data = Interest::findOrFail($request->idinterest);
        $data->interest = $request->interest;
        $data->save();

        return response()->json([
            'message'   => '',
            'result'    => true,
        ]);
    }

    public function delete(Request $request)
    {
        $data = Interest::findOrFail($request->idinterest);
        $data->delete();

        return response()->json([
            'message'   => '',
            'result'    => true,
        ]);
    }
}
