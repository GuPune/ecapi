<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DepartmentConcernedModel;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;

class DepartmentConcernedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dc = DepartmentConcernedModel::all();
        return response()->json(["message" => "get success","data" => $dc]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        DepartmentConcernedModel::create([
            'title_th' => $request->title_th,
            'title_en' => $request->title_en,
            'link' =>  $request->link
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
        $dc = DepartmentConcernedModel::find($id);
        return response()->json([ "message" => "find success","data" => $dc]);
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
        $dc = DepartmentConcernedModel::find($id);
        if($request->title_th!=''){
            $dc->title_th = $request->title_th;
        }
        if($request->title_en!=''){
            $dc->title_en = $request->title_en;
        }
        if($request->link!=''){
            $dc->link = $request->link;
        }
        $dc->save();

        return response()->json(['message' => 'update success'],200);
    }

    public function update_post(Request $request)
    {
        if($request->id!=''){
            $dc = DepartmentConcernedModel::find($request->id);
            if($request->title_th!=''){
                $dc->title_th = $request->title_th;
            }
            if($request->title_en!=''){
                $dc->title_en = $request->title_en;
            }
            if($request->link!=''){
                $dc->link = $request->link;
            }
            $dc->save();
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
        $dc = DepartmentConcernedModel::find($id);
        $dc->delete(); 
       
        return response()->json(['message' => 'delete success']);
    }
}
