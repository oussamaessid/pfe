<?php

namespace App\Http\Controllers;

use App\Models\PlatImage;
use Illuminate\Http\Request;

class PlatImagesController extends Controller
{
    public function getplatbyidimages($plat_id)
    {

        $plans = PlatImage::where('plat_id', $plat_id)->get();
        return response()->json([
            'status' => 200,
            'images' => $plans,
        ]);
    }
}
