<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
       public function index(){
            $userpackages = Package::all();
            return response()->json([
                'status'=>200,
                'userpackages'=>$userpackages
                
            ]);

        }
}
