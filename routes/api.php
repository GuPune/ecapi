<?php


Route::get('/',function(){
    return "Api home...";
});



Route::group([
    'middleware' => 'api',
], function ($router) {

    Route::post('login', 'UserController@authenticate');
    Route::post('signup','UserController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('sendPasswordResetLink', 'ResetPasswordController@sendEmail');
    Route::post('resetPassword', 'ChangePasswordController@process');
    Route::apiResource('manage_user', 'ManageUserController');


    //////////////frontend/////////////////////////////////////
    Route::post('news_info_all','HomeController@newsInformationAll');
    Route::post('news_info_limit','HomeController@newsInformationLimit');

    Route::post('news_train_all','HomeController@newsTrainingAll');
    Route::post('news_train_limit','HomeController@newsTrainingLimit');

    Route::post('regulation_all','HomeController@regulationAll');
    Route::post('regulation_limit','HomeController@regulationLimit');

    Route::post('video_recommend_all','HomeController@video_recommendAll');
    Route::post('video_recommend_limit','HomeController@video_recommendLimit');

    Route::post('department_concerned_all','HomeController@department_concernedAll');
    Route::post('department_concerned_limit','HomeController@department_concernedLimit');

    Route::post('guidebook_recommend_all','HomeController@guidebook_recommendAll');
    Route::post('guidebook_recommend_limit','HomeController@guidebook_recommendLimit');

    Route::post('sop_all','HomeController@sopAll');
    Route::post('sop_limit','HomeController@sopLimit');

    Route::post('submission_all','HomeController@submissionAll');
    Route::post('submission_limit','HomeController@submissionLimit');

    Route::post('ethics_all','HomeController@ethicsAll');
    Route::post('ethics_limit','HomeController@ethicsLimit');

    Route::post('img_cover_all','HomeController@img_coverAll');
    Route::post('img_cover_limit','HomeController@img_coverLimit');
    
    Route::post('ethics_guide_all','HomeController@ethicsGuideAll');
    Route::post('ethics_guide_limit','HomeController@ethicsGuideLimit');

    Route::post('search_all','HomeController@searchAll');

    Route::post('research_all','HomeController@researchAll');
    Route::post('research_limit','HomeController@researchLimit');

    Route::post('about_all','HomeController@aboutAll');
    Route::post('about_limit','HomeController@aboutLimit');

    Route::post('consideration_all','HomeController@considerationAll');
    Route::post('consideration_limit','HomeController@considerationLimit');


    Route::post('qa_info_all','QAController@QaInformationAll');

    //////////////frontend/////////////////////////////////////

    ///////////////dashboard//////////////////////////////////

    Route::apiResource('videos','VideoRecommendController');
    Route::post('videos_update','VideoRecommendController@update_post');

    Route::apiResource('train','NewsTrainingController');
    Route::post('train_update','NewsTrainingController@update_post');

    Route::apiResource('relations','NewsInformationController');
    Route::post('relations_update','NewsInformationController@update_post');

    Route::apiResource('department','DepartmentConcernedController');
    Route::post('department_update','DepartmentConcernedController@update_post');

    Route::apiResource('manual','GuidebookRecommendConcernedController');
    Route::post('manual_update','GuidebookRecommendConcernedController@update_post');

    Route::apiResource('regulation','RegulationController');
    Route::post('regulation_update','RegulationController@update_post');

    Route::apiResource('submission','SubmissionController');
    Route::post('submission_update','SubmissionController@update_post');

    Route::apiResource('ethics','EthicsController');
    Route::post('ethics_update','EthicsController@update_post');

   
    Route::apiResource('sop','SopController');
    Route::post('sop_update','SopController@update_post');

    Route::apiResource('img','ImgCoverController');
    Route::post('img_update','ImgCoverController@update_post');
    
    Route::apiResource('ethics_guide','EthicsGuideController');
    Route::post('ethics_guide_update','EthicsGuideController@update_post');

    Route::apiResource('research','ResearchController');
    Route::post('research_update','ResearchController@update_post');

    Route::apiResource('about','AboutController');
    Route::post('about_update','AboutController@update_post');

    Route::apiResource('consideration','ConsiderationController');
    Route::post('consideration_update','ConsiderationController@update_post');


    

    Route::apiResource('manage_qa','QAController');



    ///////////////dashboard//////////////////////////////////
});

// Route::group(['middleware' => ['jwt.verify','cors']], function() {
    
//  });

