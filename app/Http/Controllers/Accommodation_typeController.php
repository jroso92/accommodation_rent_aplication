<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accommodation_type;

class Accommodation_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accommodation_types = Accommodation_type::paginate();
        return view('accommodation_types.index', compact('accommodation_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accommodation_types.create');
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
            'name' => 'required|max:255'
        ]);
        $accommodation_type = Accommodation_type::create($validated);
        return view('accommodation_types.show', compact('accommodation_type'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $accommodation_type = Accommodation_type::findOrFail($id);
        return view('accommodation_types.show', compact('accommodation_type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accommodation_type = Accommodation_type::findOrFail($id);
        return view('accommodation_types.edit', compact('accommodation_type'));
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
            'name' => 'required|max:255'
        ]);
        $accommodation_type = Accommodation_type::findOrFail($id);
        $accommodation_type->fill($validated);
        $accommodation_type->save();

        return view('accommodation_types.show', compact('accommodation_type'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Accommodation_type::destroy($id);

        return redirect()->route('accommodation_types.index');
    }
}
