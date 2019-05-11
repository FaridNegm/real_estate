<?php

// Start Admin Routes

Route::group(['namespace' => 'admin'] , function (){
    Route::get('admin-panel' , 'usersController@index');

    // users Routes
    Route::get('admin-panel/all-users' , 'usersController@all_users');
    Route::get('admin-panel/add-users' , 'usersController@add_new_user');
    Route::post('admin-panel/add-users' , 'usersController@save_new_user');
    Route::get('admin-panel/users/edit/{id}' , 'usersController@edit_user');
    Route::post('admin-panel/users/edit/{id}' , 'usersController@save_edit_user');
    Route::get('admin-panel/users/delete/{id}' , 'usersController@delete_user');

    // build Routes
    Route::get('admin-panel/all-realestates' , 'buildController@all_builds');
    Route::get('admin-panel/add-realestate' , 'buildController@add_new_build');
    Route::post('admin-panel/add-realestae' , 'buildController@save_new_build');
    Route::get('admin-panel/realestate/edit/{id}' , 'buildController@edit_build');
    Route::post('admin-panel/realestate/edit/{id}' , 'buildController@save_edit_build');
    Route::get('admin-panel/realestate/delete/{id}' , 'buildController@delete_build');

    // works and posts Routes
    Route::get('admin-panel/all-posts' , 'postsController@all_posts');
    Route::get('admin-panel/add-posts' , 'postsController@add_new_post');
    Route::post('admin-panel/add-posts' , 'postsController@save_new_post');
    Route::get('admin-panel/posts/edit/{id}' , 'postsController@edit_post');
    Route::post('admin-panel/posts/edit/{id}' , 'postsController@save_edit_post');
    Route::get('admin-panel/posts/delete/{id}' , 'postsController@delete_post');

    // site Settings Routes
    Route::get('admin-panel/all-settings', 'sitesettingsController@allsetting');
    Route::get('admin-panel/settings/edit/{name}', 'sitesettingsController@editsiteSetting');
    Route::post('admin-panel/settings/update/{name}', 'sitesettingsController@updateSiteSetting');

    // My Services Routes
    Route::get('admin-panel/all-services', 'servicesController@allservices');
    Route::get('admin-panel/add-new-service', 'servicesController@addNewservice');
    Route::post('admin-panel/add-new-service', 'servicesController@saveNewService');
    Route::get('admin-panel/service/edit/{id}', 'servicesController@editService');
    Route::post('admin-panel/service/update/{id}', 'servicesController@updateService');
    Route::get('admin-panel/service/delete/{id}', 'servicesController@deleteService');

    // Testmonilas Routes
    Route::get('admin-panel/all-testmonials', 'testmonialsController@allTestmonial');
    Route::get('admin-panel/add-new-testmonial', 'testmonialsController@addNewTestmonial');
    Route::post('admin-panel/add-new-testmonial', 'testmonialsController@saveNewSeTestmonial');
    Route::get('admin-panel/testmonial/edit/{id}', 'testmonialsController@editTestmonial');
    Route::post('admin-panel/testmonial/update/{id}', 'testmonialsController@updateTestmonial');
    Route::get('admin-panel/testmonial/delete/{id}', 'testmonialsController@deleteTestmonial');

    // message Routes
    Route::post('send-message', 'usersController@saveMessage');
    Route::get('admin-panel/all-messages', 'usersController@allMessage');
    Route::get('admin-panel/message/{id}', 'usersController@singleMessage');
    Route::get('admin-panel/message/delete/{id}', 'usersController@deleteMessage');
});


// End Admin Routes

Route::group(['namespace' => 'website'] , function () {

    // Realestates Routes
    Route::get('/', 'websiteController@index');
    Route::get('/details-properties/{id}/price/{price}', 'detailsController@index');
    Route::get('/all-realstates', 'allRealStatesController@index');

    // Add Property Routes
    Route::get('/add-new-property', 'addNewPropertyController@index');
    Route::post('/add-property', 'addNewPropertyController@save_new_property');

    // Serach Routes
    Route::post('/search', 'websiteController@search');
    Route::post('/global-search', 'websiteController@global_search');

    // Serach By Type & Price & Status Routes
    Route::get('/Flat', 'websiteController@Flat');
    Route::get('/Villa', 'websiteController@Villa');
    Route::get('/Chalet', 'websiteController@Chalet');
    Route::get('/Sale', 'websiteController@Sale');
    Route::get('/Rent', 'websiteController@Rent');
    Route::get('/Between-than-0-and-200000', 'websiteController@Between_than_200000');
    Route::get('/Between-than-200000-and-500000', 'websiteController@Between_than_500000');
    Route::get('/Bigger-than-500000', 'websiteController@Bigger_than_500000');

    // Contact Routes
    Route::get('/contact', 'contactController@index');

    Route::get('/about', function () {
        return view('website/about');
    });

    Route::get('/blog', function () {
        return view('website/blog');
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
