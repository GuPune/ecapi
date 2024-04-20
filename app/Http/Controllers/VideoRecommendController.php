<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VideoRecommendModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;

class VideoRecommendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vr = VideoRecommendModel::all();
        return response()->json(["message" => "get success","data" => $vr]);
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
        VideoRecommendModel::create([
            'title_th' => $request->title_th,
            'title_en' => $request->title_en,
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
        $vr = VideoRecommendModel::find($id);
        return response()->json([ "message" => "find success","data" => $vr]);
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
        $vr = VideoRecommendModel::find($id);
        if($request->title_th!=''){
            $vr->title_th = $request->title_th;
        }
        if($request->title_en!=''){
            $vr->title_en = $request->title_en;
        }
        if($request->file('file')!=''){
            $file=Storage::putFile('', $request->file('file'));
            $type = $request->file('file')->getClientMimeType();
            $size = $request->file('file')->getClientSize();  //bytes
        }else{
            $file=$vr->file;
            $type=$vr->type;
            $size=$vr->size;
        }
        $vr->file = $file;
        $vr->type = $type;
        $vr->size = $size;
        $vr->save();

        return response()->json(['message' => 'update success'],200);
    }

    public function update_post(Request $request)
    {
        if($request->id!=''){
            $vr = VideoRecommendModel::find($request->id);
            if($request->title_th!=''){
                $vr->title_th = $request->title_th;
            }
            if($request->title_en!=''){
                $vr->title_en = $request->title_en;
            }
            if($request->file('file')!=''){
                $file=Storage::putFile('', $request->file('file'));
                $type = $request->file('file')->getClientMimeType();
                $size = $request->file('file')->getClientSize();  //bytes
            }else{
                $file=$vr->file;
                $type=$vr->type;
                $size=$vr->size;
            }
            $vr->file = $file;
            $vr->type = $type;
            $vr->size = $size;
            $vr->save();
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
        $vr = VideoRecommendModel::find($id);
        $vr->delete(); 
       
        return response()->json(['message' => 'delete success']);
    }
}
