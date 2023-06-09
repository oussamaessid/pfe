<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;
use App\Models\EvenementImage;

class EvenementController extends Controller
{
    public function index()
    {
        $events = Evenement::all();
        $events = Evenement::with('evenementImages')->get();

        return view('event.index', compact('events'));

    }

    public function indexx()
    {
        $events = Evenement::all();
        return response()->json([
            'status' => 200,
            'message' => $events
        ]);
    }
    public function create()
    {
        return view('event.create');
    }

    public function store(Request $request)
    {
        $events = new Evenement;
        $events-> name = $request->input('name');
        $events-> id = $request->input('id');
        $events-> description = $request->input('description');
        $events-> id_hotel = $request->input('id_hotel');


        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $events["image"] = 'http://192.168.1.103:90/storage/'.$path;
        $events->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                if ($image->isValid()) {
                    $path = $image->store('images', 'public');

                    $eventImage = new EvenementImage();
                    $eventImage->evenement_id = $events->id;
                    $eventImage->image_path = 'http://192.168.1.103:90/storage/'.$path;
                    // Set any other image properties
                    $eventImage->save();
                }
            }
    }
    return redirect()->route('event.index')->with('flash_message', 'Member Added!');

}

    public function show($id)
    {
        $event = Evenement::find($id);

       return view('event.show', compact('event'));
    }

    public function edit($id)
    {
        $event = Evenement::find($id);

        return view('event.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Evenement::find($id);
        $event->update($request->all());

        return redirect()->route('event.index');
    }

    public function destroy($id)
    {
        $event = Evenement::find($id);
        $event->delete();

        return redirect()->route('event.index');
    }

    //get events by idhotel
    public function geteventsbyidhotel($id_hotel)
    {

        $events = Evenement::where('id_hotel', $id_hotel)->get();
        return response()->json([
            'status' => 200,
            'event' => $events,
        ]);
    }

    public function upload(Request $request){
        $image = $request->file('image');
        if($request->hasFile('image')){
            $new_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/uploads/images'),$new_name);
            return response()->json($new_name);
        }else {
            return response()->json('image null');
        }
    }

    public function uploadImage(Request $request)
{
    // Validate and store the uploaded image
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imagePath = $request->file('image')->store('public/images');

    // Generate the URL to access the stored image
    $imageUrl = asset('storage/'. $imagePath);

    // Return the URL of the image as a response
    return response()->json(['image_url' => $imageUrl]);
}

}

