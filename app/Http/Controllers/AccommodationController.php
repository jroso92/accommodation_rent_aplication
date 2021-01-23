<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accommodation;
use App\Accommodation_type;
use App\City;


class AccommodationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accommodations = Accommodation::with(['accommodationType', 'city'])->paginate();

        return view('accommodations.index', compact('accommodations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accommodations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'address' => 'required|max:255',
            'room_count' => 'required|numeric',
            'bed_count' => 'required|numeric',
            'max_person_count' => 'required|numeric',
            'is_available' => 'required',
            'price_per_night' => 'required|numeric',
            'accommodation_type_id' => 'required|numeric',
            'city_id' => 'required|numeric'
        ]);

        $accommodation = Accommodation::create($validated);
        return view('accommodations.show', compact('accommodation'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $accommodation = Accommodation::findOrFail($id);
        $content = $accommodation->contents()->paginate();
        $contentName = '';
        foreach($content->items() as $c) {
            $contentName = $c['name'];
        }
        $activity = $accommodation->activities()->paginate();
        $activityName = '';
        foreach($activity->items() as $c) {
            $activityName = $c['name'];
        }
        return view('accommodations.show', compact('accommodation', 'contentName', 'activityName'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accommodation = Accommodation::findOrFail($id);
        $content = $accommodation->contents()->paginate();
        $contentName = '';
        foreach($content->items() as $c) {
            $contentName = $c['name'];
        }
        $activity = $accommodation->activities()->paginate();
        $activityName = '';
        foreach($activity->items() as $c) {
            $activityName = $c['name'];
        }
        $cities = City::pluck('name', 'id');
        $accommodation_types = Accommodation_type::pluck('name', 'id');

        return view('accommodations.edit', compact('accommodation', 'contentName', 'activityName', 'cities', 'accommodation_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'address' => 'required|max:255',
            'room_count' => 'required|numeric',
            'bed_count' => 'required|numeric',
            'max_person_count' => 'required|numeric',
            'is_available' => 'required',
            'price_per_night' => 'required|numeric',
            'accommodation_type_id' => 'required|numeric',
            'city_id' => 'required|numeric'
        ]);

        $accommodation = Accommodation::findOrFail($id);
        $accommodation->fill($validated);
        $accommodation->save();

        return view('accommodations.show', compact('accommodation'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Accommodation::destroy($id);

        return redirect()->route('accommodations.index');
    }
}
