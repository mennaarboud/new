<?php

namespace App\Http\Controllers;

use App\property;
use App\type;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = type::all();
        $property = property::all();
        return view('properties')->with(compact('property','type'));
        // $type = type::all();
        // $property = property::all();
        // return view("properties",compact('property','type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $property = new property();
        $property->name = $request->name;
        $property->location = $request->location;
        $property->description = $request->description;
        // $property->image = 'images/propertyerty-2.jpg';
        $property->price = $request->price;
        $property->type_id = $request->type;
        $property->save();
        return redirect('/properties');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    // public function show(property $property)
    // {
    //     //
    // }

    public function show($id)
    {
        //show property by id
        $type = type::all();
        $property = property::find($id);
        return view("properties",compact('property','type'));
    
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    // public function edit(property $property)
    // {
    // }
    public function edit($id)
    {
        $type = type::all();
        $property = property::find($id);
        return view("properties",compact('property','type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, property $property, $id)
    {
        $property = property::find($id);
        $property->name = $request->name;
        $property->location = $request->location;
        $property->description = $request->description;
        $property->price = $request->price;
        $property->type_id = $request->type;
        $property->save();
        return redirect('/properties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = property::find($id);
        $property->delete();
        return redirect('/properties');
    }
}
