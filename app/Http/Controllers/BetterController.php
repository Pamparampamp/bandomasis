<?php

namespace App\Http\Controllers;

use App\Models\Better;
use Illuminate\Http\Request;

class BetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('betters.index', ['betters' => Better::orderBy('name')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('betters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $better = new Better();
// can be used for seeing the insides of the incoming request
// dd($request->all()); die();
$better->fill($request->all());
$better->save();
return redirect()->route('better.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Better  $better
     * @return \Illuminate\Http\Response
     */
    public function show(Better $better)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Better  $better
     * @return \Illuminate\Http\Response
     */
    public function edit(Better $better)
    {
        //
        return view('betters.edit', ['better' => $better]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Better  $better
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Better $better)
    {
        //
        $better->fill($request->all());
$better->save();
return redirect()->route('better.index');
    }
public function info($id){
$better = Better::find($id);
return view('betters.info', ['better' => $better]);
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Better  $better
     * @return \Illuminate\Http\Response
     */
    public function destroy(Better $better)
    {
        $better->delete();
return redirect()->route('betters.index');
        //
    }
}
