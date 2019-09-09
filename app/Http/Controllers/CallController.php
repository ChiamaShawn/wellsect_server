<?php

namespace App\Http\Controllers;
use App\Call;
use Illuminate\Http\Request;

class CallController extends Controller
{
    //
    public function requestCall(Request $request){
        $call = new Call;
        $user = $request->user();
        $call->user_id = $user->id;
        $call->call_time = $request->call_time;
        $call->agenda = $request->agenda;
        return $call;
    }
    public function retrieveCalls(Request $request){
        $call = Call::orderBy('id', 'desc')->get();
        return $call;
    }

}
