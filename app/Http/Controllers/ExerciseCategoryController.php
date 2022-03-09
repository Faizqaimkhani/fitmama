<?php

namespace App\Http\Controllers;

use App\Models\ExerciseCategory;
use App\Http\Requests\StoreExerciseCategoryRequest;
use App\Http\Requests\UpdateExerciseCategoryRequest;

class ExerciseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExerciseCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExerciseCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExerciseCategory  $exerciseCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ExerciseCategory $exerciseCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExerciseCategory  $exerciseCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ExerciseCategory $exerciseCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExerciseCategoryRequest  $request
     * @param  \App\Models\ExerciseCategory  $exerciseCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExerciseCategoryRequest $request, ExerciseCategory $exerciseCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExerciseCategory  $exerciseCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExerciseCategory $exerciseCategory)
    {
        //
    }
}
