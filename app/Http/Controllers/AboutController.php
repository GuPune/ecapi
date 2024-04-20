<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nt = AboutModel::all();
        return response()->json(["message" => "get success","data" => $nt]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        AboutModel::create([
            'title_th' => $request->title_th,
            'title_en' => $request->title_en,
            'detail' => $request->detail
        ]);
        return response()->json(['message' => 'insert success'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nt = AboutModel::find($id);
        return response()->json([ "message" => "find success","data" => $nt]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nt = AboutModel::find($id);
        if($request->title_th!=''){
            $nt->title_th = $request->title_th;
        }
        if($request->title_en!=''){
            $nt->title_en = $request->title_en;
        }
        if($request->detail!=''){
            $nt->detail = $request->detail;
        }
    
        $nt->save();

        return response()->json(['message' => 'update success'],200);
    }

    public function update_post(Request $request)
    {
        if($request->id!=''){
            $nt = AboutModel::find($request->id);
            if($request->title_th!=''){
                $nt->title_th = $request->title_th;
            }
            if($request->title_en!=''){
                $nt->title_en = $request->title_en;
            }
            if($request->detail!=''){
                $nt->detail = $request->detail;
            }
        
            $nt->save();
        }
        return response()->json(['message' => 'update success'],200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nt = AboutModel::find($id);
        $nt->delete(); 
       
        return response()->json(['message' => 'delete success']);
    }
}
