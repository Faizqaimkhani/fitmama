<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfileAnswer;
use App\Models\ProfileQuestion;

class ProfileAnswerController extends Controller
{
    public function store($id,Request $request)
    {   
        if(!empty($id)){
            
            $profile_question=ProfileQuestion::find($id);
            
            $profile_answer=ProfileAnswer::create([
             
             'answer' => $request->answer,
             'user_id' => auth()->user()->id, 
             'profile_question_id' => $profile_question->id
    
            ]);

             return response()->json([              
              'status' => 200,
              'message'=> 'Answer Submitted Successfully'

             ] ,200);
        }

           else
        {
          
          return response()->json([
          
           'status' => false,
           'message' => 'Answer Submitted Failed'

          ]);

        }  
    }
}
