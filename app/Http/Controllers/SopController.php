<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SopModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;

class SopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sop = SopModel::all();
        return response()->json(["message" => "get success","data" => $sop]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file="";
        $type="";
        $size="";
        if($request->file('file')!=''){
            $file=Storage::putFile('', $request->file('file'));
            $type = $request->file('file')->getClientMimeType();
            $size = $request->file('file')->getClientSize();  //bytes
        }
        SopModel::create([
            'title_th' => $request->title_th,
            'title_en' => $request->title_en,
            'file' => $file,
            'type' => $type,
            'size' => $size,
            'version' => $request->version
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
        $sop = SopModel::find($id);
        return response()->json([ "message" => "find success","data" => $sop]);
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
        $sop2 = SopModel::find($id);
        if($request->input('title_th')!=''){
            $sop2->title_th = $request->input('title_th');
        }
        if($request->input('title_en')!=''){
            $sop2->title_en = $request->input('title_en');
        }
        if($request->input('version')!=''){
            $sop2->version = $request->input('version');
        }
        if($request->file('file')!=''){
            $file=Storage::putFile('', $request->file('file'));
            $type = $request->file('file')->getClientMimeType();
            $size = $request->file('file')->getClientSize();  //bytes
        }else{
            $file=$sop2->file;
            $type=$sop2->type;
            $size=$sop2->size;
        }

        $sop2->file = $file;
        $sop2->type = $type;
        $sop2->size = $size;
        
    
        $sop2->save();
        return response()->json(['message' => 'update success'],200);
    }
    public function update_post(Request $request)
    {
        if($request->input('id')!=''){
            $sop2 = SopModel::find($request->input('id'));
            if($request->input('title_th')!=''){
                $sop2->title_th = $request->input('title_th');
            }
            if($request->input('title_en')!=''){
                $sop2->title_en = $request->input('title_en');
            }
            if($request->input('version')!=''){
                $sop2->version = $request->input('version');
            }
            if($request->file('file')!=''){
                $file=Storage::putFile('', $request->file('file'));
                $type = $request->file('file')->getClientMimeType();
                $size = $request->file('file')->getClientSize();  //bytes
            }else{
                $file=$sop2->file;
                $type=$sop2->type;
                $size=$sop2->size;
            }

            $sop2->file = $file;
            $sop2->type = $type;
            $sop2->size = $size;
        
    
         $sop2->save();
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
        $sop = SopModel::find($id);
        $sop->delete(); 
       
        return response()->json(['message' => 'delete success']);
    }
}
