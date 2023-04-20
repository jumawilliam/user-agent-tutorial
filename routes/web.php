<?php

use Illuminate\Support\Facades\Route;
use Jenssegers\Agent\Agent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return $_SERVER['HTTP_USER_AGENT'];
    //return request()->header('user-agent');

    $agent=new Agent();
    /*
    if($agent->isDesktop()){
        return 'Agent is Desktop';
    }else if($agent->isMobile()){
        return 'Agent is mobile';
    }
    */

    // $browser=$agent->browser();
    //return $version=$agent->version($browser);

    //$platform= $agent->platform();
    //return $agent->version($platform);
     
    return $robot=$agent->robot();


    return view('welcome');
});
