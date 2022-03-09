<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    
    public function users_list()
    {
        $users=User::all();
        $data=['page_title' => 'Users' , 'users' => $users];
        return view('admin.users.userslist' ,$data);
    }

    public function user_profile($id)
    {

       $users = User::find($id);

        // $users=DB::table('user_packages')
        //        ->select('profile_questions.question' , 'users.name' , 'users.email' , 'packages.title' , 'profile_answers.answer')
        //        ->leftJoin('packages' , 'user_packages.package_id' , '=' , 'packages.id')
        //        ->leftJoin('users' , 'users.package_id' , '=' , 'user_packages.user_id')
        //        ->leftJoin('profile_questions' , 'profile_questions.package_id' , '=' , 'packages.id')
        //        ->leftJoin('profile_answers' , 'profile_answers.user_id' , '=' , 'users.id')
        //        ->where(['user_id' => $id])
        //        ->distinct()->get();
               // dd($users);
        $data=['page_title' => 'User Profile' , 'users' => $users];
        return view('admin.users.UserProfile',$data);
    }
}
