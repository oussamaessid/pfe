<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HotelImage;

class HotelImagesController extends Controller
{
    public function gethotelbyidimages($hotel_id)
    {

        $plans = HotelImage::where('hotel_id', $hotel_id)->get();
        return response()->json([
            'status' => 200,
            'images' => $plans,
        ]);
    }
}
