<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImgCoverModel;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImgCoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nt = ImgCoverModel::all();
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
        $file="";
        $type="";
        $size="";
        if($request->file('file')!=''){
            $file=Storage::putFile('', $request->file('file'));
            $type = $request->file('file')->getClientMimeType();
            $size = $request->file('file')->getClientSize();  //bytes
        }
        ImgCoverModel::create([
            'title_th' => $request->title_th,
            'title_en' => $request->title_en,
            'sub_title_th' => $request->sub_title_th,
            'sub_title_en' => $request->sub_title_en,
            'file' => $file,
            'type' => $type,
            'size' => $size
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
        $nt = ImgCoverModel::find($id);
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
        $nt = ImgCoverModel::find($id);
    
        if($request->title_th!=''){
            $nt->title_th = $request->title_th;
        }
        if($request->title_en!=''){
            $nt->title_en = $request->title_en;
        }
        if($request->sub_title_th!=''){
            $nt->sub_title_th = $request->sub_title_th;
        }
        if($request->sub_title_en!=''){
            $nt->sub_title_en = $request->sub_title_en;
        }
        if($request->file('file')!=''){
            $file=Storage::putFile('', $request->file('file'));
            $type = $request->file('file')->getClientMimeType();
            $size = $request->file('file')->getClientSize();  //bytes
        }else{
            $file=$nt->file;
            $type=$nt->type;
            $size=$nt->size;
        }
        $nt->file = $file;
        $nt->type = $type;
        $nt->size = $size;
    
        $nt->save();

        return response()->json(['message' => 'update success'],200);
    }

    public function update_post(Request $request)
    {
        if($request->id!=''){
            $nt = ImgCoverModel::find($request->id);
            if($request->title_th!=''){
                $nt->title_th = $request->title_th;
            }
            if($request->title_en!=''){
                $nt->title_en = $request->title_en;
            }
            if($request->sub_title_th!=''){
                $nt->sub_title_th = $request->sub_title_th;
            } 
            if($request->sub_title_en!=''){
                $nt->sub_title_en = $request->sub_title_en;
            }
            if($request->file('file')!=''){
                $file=Storage::putFile('', $request->file('file'));
                $type = $request->file('file')->getClientMimeType();
                $size = $request->file('file')->getClientSize();  //bytes
            }else{
                $file=$nt->file;
                $type=$nt->type;
                $size=$nt->size;
            }
            $nt->file = $file;
            $nt->type = $type;
            $nt->size = $size;
        
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
        $nt = ImgCoverModel::find($id);
        $nt->delete(); 
       
        return response()->json(['message' => 'delete success']);
    }
}
