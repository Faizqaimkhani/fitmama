@extends('admin.layouts.app' , ['page_name' => 'profile_question'])
@section('page_title' , $page_title)
@section('content')
<div id="content" class="main-content">
<div class="container" style="margin-top: 30px;">
<div class="container">
	                        <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-9 col-md-9 col-sm-9 col-9">
                                            <h4>Subscription Questions</h4>
                                        </div>
                                        <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                           <a href="{{ url('/profile_questions') }}" class="btn" style="background-color: #1abc9c; color: white;">See Questions</a>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form action="{{ url('/profile_questions/'.$profile_question->id.'/update') }}" method="POST">
                                    	@csrf
                                        @method('PUT')
                                    	<div class="row">
                                    	<div class="col-md-6">
                                    		<div class="form-group mb-3">
                                            <select name="package_id" class="form-control"> 
                                            <option value="{{$profile_question->package->id }}">{{ $profile_question->package->title }}</option>    
                                            <option>-- Select Package --</option>
                                            @foreach($package as $value)
                                            <option value="{{ $value->id }}">{{ $value->title }}</option>
                                            @endforeach 
                                            </select>
                                        </div>
                                    	</div>
                                    	<div class="col-md-6">
                                    	<div class="form-group mb-3">
                                            <input type="text" class="form-control" name="question" id="sEmail" aria-describedby="emailHelp1" placeholder="Question" value="{{ $profile_question->question }}">
                                            <small id="emailHelp1" class="form-text text-muted">you'll be create own questions</small>
                                        </div>	
                                    	</div>
                                    	<div class="col-md-6">
                                    		<div class="form-group mb-4">
                                            <select name="type" class="form-control type">
                                            <option>-- Select Type --</option>
                                            <option value="text" {{ $profile_question->type == 'text' ? 'selected' : '' }}>Text</option>
                                            <option value="Checkbox" {{ $profile_question->type == 'Checkbox' ? 'selected' : '' }}>Checkbox</option>
                                            <option value="Numbers" {{ $profile_question->type == 'Numbers' ? 'selected' : '' }}>Numbers</option>
                                            </select>
                                        </div>
                                    	</div>
                                    	<div class="col-md-6">
                                    	<input type="number" name="sort_num" class="form-control" min="1" value="{{ $profile_question->sort_num}}">
                                    	</div>
                                    </div>
                                        <div class="options" style="display: none;">
                                        <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" name="options[]" class="form-control" placeholder="Option">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                        <button type="button" class="btn add_more" style="background-color: #1abc9c; color: white;">+ Add More</button>
                                        </div>
                                        </div>
                                        <div class="multiple_options mt-3"></div>
                                    </div>
                                        <button type="submit" class="btn mt-3" style="background-color: #1abc9c; color: white;">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
</div>
</div>
</div>
@endsection