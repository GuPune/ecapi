<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use File;
use App\NewsInformationModel;

class HomeController extends Controller
{
    //news_information
    public function newsInformationAll(){
        $query = DB::table('news_information')
                ->orderBy('id', 'desc')
                ->get();
        return response()->json([
            "data" => $query
        ],200);
            
    }
    public function newsInformationLimit(Request $req){
        $limit = ($req->limit!='')?$req->limit:'1';
        $query = DB::table('news_information')
                ->orderBy('id', 'desc')
                ->limit($limit)
                ->get();
        return response()->json([
            "data" => $query
        ],200);
            
    }

    //news_training
    public function newsTrainingAll(){
        $query = DB::table('news_training')
                ->orderBy('id', 'desc')
                ->get();
        return response()->json([
            "data" => $query
        ],200);
            
    }
    public function newsTrainingLimit(Request $req){
        $limit = ($req->limit!='')?$req->limit:'1';
        $query = DB::table('news_training')
                ->orderBy('id', 'desc')
                ->limit($limit)
                ->get();
        return response()->json([
            "data" => $query
        ],200);
            
    }

   //video_recommend
   public function video_recommendAll(){
    $query = DB::table('video_recommend')
            ->orderBy('id', 'desc')
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}
public function video_recommendLimit(Request $req){
    $limit = ($req->limit!='')?$req->limit:'1';
    $query = DB::table('video_recommend')
            ->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}

 //department_concerned
 public function department_concernedAll(){
    $query = DB::table('department_concerned')
            ->orderBy('id', 'desc')
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}
public function department_concernedLimit(Request $req){
    $limit = ($req->limit!='')?$req->limit:'1';
    $query = DB::table('department_concerned')
            ->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}

//guidebook_recommend
public function guidebook_recommendAll(){
    $query = DB::table('guidebook_recommend')
            ->orderBy('id', 'desc')
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}
public function guidebook_recommendLimit(Request $req){
    $limit = ($req->limit!='')?$req->limit:'1';
    $query = DB::table('guidebook_recommend')
            ->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}

//sop
public function sopAll(){
    $query = DB::table('sop')
            ->orderBy('id', 'desc')
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}
public function sopLimit(Request $req){
    $limit = ($req->limit!='')?$req->limit:'1';
    $query = DB::table('sop')
            ->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}

//regulation
public function regulationAll(){
    $query = DB::table('regulation')
            ->orderBy('id', 'desc')
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}
public function regulationLimit(Request $req){
    $limit = ($req->limit!='')?$req->limit:'1';
    $query = DB::table('regulation')
            ->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}

//submission
public function submissionAll(){
    $query = DB::table('submission')
            ->orderBy('id', 'desc')
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}
public function submissionLimit(Request $req){
    $limit = ($req->limit!='')?$req->limit:'1';
    $query = DB::table('submission')
            ->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}

//ethics
public function ethicsAll(){
    $query = DB::table('ethics')
            ->orderBy('id', 'desc')
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}
public function ethicsLimit(Request $req){
    $limit = ($req->limit!='')?$req->limit:'1';
    $query = DB::table('ethics')
            ->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}

//ethics guide
public function ethicsGuideAll(){
    $query = DB::table('ethics_guide')
            ->orderBy('id', 'desc')
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}
public function ethicsGuideLimit(Request $req){
    $limit = ($req->limit!='')?$req->limit:'1';
    $query = DB::table('ethics_guide')
            ->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}

//img_cover
public function img_coverAll(){
    $query = DB::table('img_cover')
            ->orderBy('id', 'desc')
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}
public function img_coverLimit(Request $req){
    $limit = ($req->limit!='')?$req->limit:'1';
    $query = DB::table('img_cover')
            ->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}

//research
public function researchAll(){
    $query = DB::table('research')
            ->orderBy('id', 'desc')
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}
public function researchLimit(Request $req){
    $limit = ($req->limit!='')?$req->limit:'1';
    $query = DB::table('research')
            ->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}

//about
public function aboutAll(){
    $query = DB::table('about')
            ->orderBy('id', 'desc')
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}
public function aboutLimit(Request $req){
    $limit = ($req->limit!='')?$req->limit:'1';
    $query = DB::table('about')
            ->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}

//consideration
public function considerationAll(){
    $query = DB::table('consideration')
            ->orderBy('id', 'desc')
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}
public function considerationLimit(Request $req){
    $limit = ($req->limit!='')?$req->limit:'1';
    $query = DB::table('consideration')
            ->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    return response()->json([
        "data" => $query
    ],200);
        
}

public function searchAll(Request $req){
    $query=DB::select(DB::raw("
    select id,title_th,title_en,file,type,'sop' from sop where 1=1 and (title_th like '%$req->search%' OR title_en like '%$req->search%')
    UNION
    select id,title_th,title_en,file,type,'news_information' from news_information where 1=1 and (title_th like '%$req->search%' OR title_en like '%$req->search%')
    UNION
    select id,title_th,title_en,file,type,'news_training' from news_training where 1=1 and (title_th like '%$req->search%' OR title_en like '%$req->search%')
    UNION
    select id,title_th,title_en,file,type,'ethics' from ethics where 1=1 and (title_th like '%$req->search%' OR title_en like '%$req->search%')
    UNION
    select id,title_th,title_en,file,type,'ethics_guide' from ethics_guide where 1=1 and (title_th like '%$req->search%' OR title_en like '%$req->search%')
    UNION
    select id,title_th,title_en,file,type,'guidebook_recommend' from guidebook_recommend where 1=1 and (title_th like '%$req->search%' OR title_en like '%$req->search%')
    UNION
    select id,title_th,title_en,file,type,'img_cover' from img_cover where 1=1 and (title_th like '%$req->search%' OR title_en like '%$req->search%')
    UNION
    select id,title_th,title_en,file,type,'regulation' from regulation where 1=1 and (title_th like '%$req->search%' OR title_en like '%$req->search%')
    UNION
    select id,title_th,title_en,file,type,'submission' from submission where 1=1 and (title_th like '%$req->search%' OR title_en like '%$req->search%')
    UNION
    select id,title_th,title_en,file,type,'video_recommend' from video_recommend where 1=1 and (title_th like '%$req->search%' OR title_en like '%$req->search%')
    UNION
    select id,title_th,title_en,link,'','department_concerned' from department_concerned where 1=1 and (title_th like '%$req->search%' OR title_en like '%$req->search%')
    UNION
    select id,title_th,title_en,file,type,'consideration' from consideration where 1=1 and (title_th like '%$req->search%' OR title_en like '%$req->search%')    
    "));

    return response()->json([
        "data" => $query
    ],200);
        
}

}
