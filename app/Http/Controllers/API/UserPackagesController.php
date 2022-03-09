<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\UserPackage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
   
    class UserPackagesController extends Controller
     {
    
        public function store($id, Request $request){
                
                if($id > 0){
                $packages=Package::find($id);
                $userpackages = new UserPackage;
                $userpackages->user_id=1;
                $userpackages->package_id=$packages->id;
                $userpackages->days = $packages->days;
                $userpackages->end_date = Carbon::now()->addDays($packages->days);
                $userpackages->save();
    
                return response()->json([
                    'status' => 200,
                    'message'=> 'Package Subscribed Successfully'
                ],200);           
            }

            else

               {
                return response()->json([
                    'message'=> 'Package Not Found'
                ],200);

               }           
            
        }
        // public function show($id){
        //     $userpackages =UserPackages::find($id);
        //     if($userpackages){
              
        //     return response()->json([
        //         'status'=>200,
        //         'userpackages'=>$userpackages,
        //     ]);
        //     }
        //     else{
        //     return response()->json([
        //         'status'=>404,
        //         'userpackages'=>'id not find',
        //     ]);
        //     }
        // }
    
        // public function update(Request $request, $id){
    
        //     $userpackages =UserPackages::find($id);
        //     if($userpackages){
        //       $userpackages->days = $request->days;
        //       $userpackages->weeks = $request->weeks;
        //       $userpackages->end_date = $request->end_date;
        //       $userpackages->update();
            
              
        //     return response()->json([
        //         'status'=>200,
        //         'userpackages'=>'Student updated Successfully',
        //     ]);
        //     }
        //     else{
        //     return response()->json([
        //         'status'=>404,
        //         'userpackages'=>'id not find',
        //     ]);
        //     }
        // }
    
        // public function delete($id)
        // {
        //     $userpackages =UserPackages::find($id);
        //     if($userpackages){
        //         $userpackages->delete();
        //         return response()->json([
        //             'status'=>200,
        //             'userpackages'=>'Student Data Delete Successfully',
        //         ]); 
                    
        //     }else{
               
        //     return response()->json([
        //         'status'=>404,
        //         'userpackages'=>'id not find',
        //     ]); 
        //     }
        // }
    
    }
    
