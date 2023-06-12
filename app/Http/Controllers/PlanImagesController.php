<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlanImage;

class PlanImagesController extends Controller
{
    public function getplanbyidimages($plan_id)
    {

        $plans = PlanImage::where('plan_id', $plan_id)->get();
        return response()->json([
            'status' => 200,
            'images' => $plans,
        ]);
    }
}
