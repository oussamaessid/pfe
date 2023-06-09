<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvenementImage;

class EvenementImagesController extends Controller
{
        //get event by idhotel
        public function geteventsbyidhotel($evenement_id)
        {

            $events = EvenementImage::where('evenement_id', $evenement_id)->get();
            return response()->json([
                'status' => 200,
                'images' => $events,
            ]);
        }
}
