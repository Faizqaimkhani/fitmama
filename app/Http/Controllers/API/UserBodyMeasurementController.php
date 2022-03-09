<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserBodyMeasurement;
use Carbon\Carbon;

class UserBodyMeasurementController extends Controller
{
        public function store(Request $request)
    {
        $user_measurement=UserBodyMeasurement::create([

         'hips' => $request->hips,
         'waist' => $request->waist,
         'biceps' => $request->biceps,
         'thighs' => $request->thighs,
         'chest' => $request->chest,
         'days' => Carbon::now(),
         'user_id' => 3

        ]);

        return response()->json([

         'status' => 200,
         'message' => 'User Body Measurement Inserted Successfully'

        ]);
    }
}
