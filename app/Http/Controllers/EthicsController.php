<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EthicsModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;

class EthicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dc = EthicsModel::all();
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
        $file="";
        $type="";
        $size="";
        if($request->file('file')!=''){
            $file=Storage::putFile('', $request->file('file'));
            $type = $request->file('file')->getClientMimeType();
            $size = $request->file('file')->getClientSize();  //bytes
        }
        EthicsModel::create([
            'title_th' => $request->title_th,
            'title_en' => $request->title_en,
            'file' => $file,
            'type' => $type,
            'size' => $size,
            'link' => $request->link
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
        $dc = EthicsModel::find($id);
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
        $dc = EthicsModel::find($id);
        if($request->title_th!=''){
            $dc->title_th = $request->title_th;
        }
        if($request->title_en!=''){
            $dc->title_en = $request->title_en;
        }
        if($request->link!=''){
            $dc->link = $request->link;
        }
        if($request->file('file')!=''){
            $file=Storage::putFile('', $request->file('file'));
            $type = $request->file('file')->getClientMimeType();
            $size = $request->file('file')->getClientSize();  //bytes
        }else{
            $file=$dc->file;
            $type=$dc->type;
            $size=$dc->size;
        }
        $dc->file = $file;
        $dc->type = $type;
        $dc->size = $size;
        $dc->save();

        return response()->json(['message' => 'update success'],200);
    }

    public function update_post(Request $request)
    {
        if($request->id!=''){
            $dc = EthicsModel::find($request->id);
            if($request->title_th!=''){
                $dc->title_th = $request->title_th;
            }
            if($request->title_en!=''){
                $dc->title_en = $request->title_en;
            }
            if($request->link!=''){
                $dc->link = $request->link;
            }
            if($request->file('file')!=''){
                $file=Storage::putFile('', $request->file('file'));
                $type = $request->file('file')->getClientMimeType();
                $size = $request->file('file')->getClientSize();  //bytes
            }else{
                $file=$dc->file;
                $type=$dc->type;
                $size=$dc->size;
            }
            $dc->file = $file;
            $dc->type = $type;
            $dc->size = $size;
            $dc->save();

            return response()->json(['message' => 'update success'],200);
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dc = EthicsModel::find($id);
        $dc->delete(); 
       
        return response()->json(['message' => 'delete success']);
    }
}
