<?php

namespace App\Http\Controllers;

use App\QAModel;
use Illuminate\Http\Request;

class QAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

 

        $vr = QAModel::all();
       
        return response()->json(["message" => "get success","data" => $vr]);



    }


    public function QaInformationAll()
    {
        //

 

        $vr = QAModel::all();
       
        return response()->json(["message" => "get success","data" => $vr]);



    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        QAModel::create([
            'ask' => $request->ask,
            'reply' => $request->reply,
            'type' =>  'Y'
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
        //

        $dc = QAModel::find($id);
        return response()->json([ "message" => "find success","data" => $dc]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //

        $updateqa = QAModel::where('id',$id)->update([
            "ask" => $request->ask,
            "reply" => $request->reply,
            "type" => 'Y',
        ]);
        return response()->json([
            'msg_return' => 'บันทึกสำเร็จ',
            'code_return' => 1,
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $del = QAModel::find($id)->delete();
      

            return response()->json([
                'msg_return' => 'ลบสำเร็จ',
                'code_return' => 1,
            ]);
    }
}
