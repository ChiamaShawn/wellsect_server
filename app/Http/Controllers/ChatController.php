<?php

namespace App\Http\Controllers;
use App\Chat;
use App\Message;
use App\Responses;
use App\Answer;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
   public function createMessage(Request $request){
       $message = new Message;
       $message->message = $request->message;
    //    return $answers;
       $wholesome = $this->createResponse($request->response, $message->id, $request->answers);
        return $wholesome;
    //    $message->save();
    //    return $message;

   }
   public function createResponse($response_string, $message_id, $answers){
       $response_array;
       $response = new Responses;
        $response->message_id = $message_id;
        $response->response_string = $response_string;
        $answers = $this->createAnswers($response->id, $answers);
        $response_array['answers']= $answers;
        // $response->save();
        return $response_array;
   }
   public function createAnswers($response_id, $answers_array){
       return $answers_array;
    //    print_r($answers_array);
    //    echo
    // foreach ($answers_array as $answer_string){
    //     $answer = new Answer;
    //     $answer->response_id = $response_id;
    //     $answer->answer_string = $answer_string->answer_text;
    //     $answer->save();
    //     return true;
    }
   }





