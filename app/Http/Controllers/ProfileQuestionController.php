<?php

namespace App\Http\Controllers;

use App\Models\ProfileQuestion;
use App\Http\Requests\StoreProfileQuestionRequest;
use App\Http\Requests\UpdateProfileQuestionRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Package;

class ProfileQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions=ProfileQuestion::OrderBy('sort_num' , 'asc')->get();
        $data=['page_title' => 'Subscribition Questions List' , 'questions' => $questions];
        return view('admin.profile_question.index' , $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $package=Package::all();
        $data=['page_title' => 'Add Subscribition Questions' , 'package' => $package];
        return view('admin.profile_question.create'  , $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfileQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileQuestionRequest $request)
    {
          
          ProfileQuestion::create([
          
              'package_id' => $request->package_id,
              'question' => $request->question,
              'type' => $request->type,
              'options' => $request->options,
              'sort_num' => $request->sort_num

          ]);
         
         return redirect(url('/profile_questions'))->with('success' , 'Subscribition Question added Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfileQuestion  $profileQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(ProfileQuestion $profileQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfileQuestion  $profileQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit($id,ProfileQuestion $profileQuestion)
    {
        $profile_question=ProfileQuestion::find($id);
        $package=Package::all();
        $data=['page_title' => 'Edit Subscribition Questions' , 'profile_question' => $profile_question , 'package' => $package];
        return view('admin.profile_question.edit' ,$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileQuestionRequest  $request
     * @param  \App\Models\ProfileQuestion  $profileQuestion
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateProfileQuestionRequest $request, ProfileQuestion $profileQuestion)
    {
        $profile_question=ProfileQuestion::find($id);
        $profile_question->update($request->all());
        return redirect(url('/profile_questions'))->with('success' , 'Subscribition Question Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfileQuestion  $profileQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,ProfileQuestion $profileQuestion)
    {
        $profile_question=ProfileQuestion::find($id);
        $profile_question->delete();
        return redirect(url('/profile_questions'))->with('success' , 'Subscribition Question Delete Successfully');
    }
}
