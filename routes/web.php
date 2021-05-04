<?php

Route::get('/', 'UserController@create')->name('create_user');
Route::post('/users', 'UserController@store')->name('store_user');

Route::get('/experience/{user_id}', 'ExperienceController@create')->name('create_experience');

Route::get('/education/{user_id}', 'EducationController@create')->name('create_education');

Route::get('/skill/{user_id}', 'SkillController@create')->name('create_skill');

Route::get('/interest/{user_id}', 'InterestController@create')->name('create_interest');

/***
 * ROUTES FOR POSTING RESSOURSES
 */
Route::post('/users/{user}/experiences', 'ExperienceController@store')->name('store_experience');

Route::post('/users/{user}/educations', 'EducationController@store')->name('store_education');

Route::post('/users/{user}/skills', 'SkillController@store')->name('store_skill');

Route::post('/users/{user}/interests', 'InterestController@store')->name('store_interest');


/**
 * PREVIEW THE RESUME
 */
Route::get('/preview/{user_id}', 'PageController@preview')->name('create_preview');

Route::get('/generate-pdf/{user_id}','PageController@generatePDF')->name('generate_pdf');