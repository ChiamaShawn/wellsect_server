<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'auth',
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::group([
        'middleware' => 'auth:api',
    ], function () {
        Route::post('createDoctor', 'DoctorCOntroller@createDoctor');
        Route::get('retrieveDoctors', 'DoctorController@getDoctors');
        Route::post('chat', 'ChatController@chat');
        Route::post('requestCall', 'CallController@createCall');
        Route::get('getRequestedCalls', "CallController@getCalls");
        Route::get('programs', "ProgramsControler@getPrograms");
        Route::post('createAppointment', 'AppointmentController@createAppointment');
        Route::get('getAppointments', 'AppointmentController@getAppointments');
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

Route::post('createQuestion', 'ChatController@createMessage');
