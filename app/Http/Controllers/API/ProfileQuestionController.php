<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfileQuestion;

class ProfileQuestionController extends Controller
{
    public function index($id)
    {
        if(!empty($id)){
            
            $profile_questions= ProfileQuestion::where('package_id','=',$id)->OrderBy('sort_num' , 'asc')->get();
            
            return response()->json([
                'status'=> 200,
                'profile_questions'=> $profile_questions
                
            ]);
        }
        
        return response()->json([
            'status'=> 200,
            'message'=> 'Invalid package'
            
        ]);
    }
}
