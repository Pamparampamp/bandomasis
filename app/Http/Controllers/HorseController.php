<?php

namespace App\Http\Controllers;

use App\Models\Horse;
use Illuminate\Http\Request;


class HorseController extends Controller{
public function index(Request $request){
if(isset($request->better_id) && $request->better_id !== 0)
$horses = \App\Models\Horse::where('better_id', $request->better_id)->orderBy('runs')->get();
else
$horses = \App\Models\Horse::orderBy('runs')->get();
$betters = \App\Models\Better::orderBy('name')->get();
return view('horses.index', ['horses' => $horses, 'betters' => $betters]);
}


public function create(){
$horses = \App\Models\Horse::orderBy('name')->get();
return view('horses.create', ['horses' => $horses]);
}
public function store(Request $request){
$horse = new horse();
// can be used for seeing the insides of the incoming request
// dd($request->all());;
$horse->fill($request->all());
$horse->save();
return redirect()->route('horses.index');
}
public function show(Horse $horse){
//
}
public function edit(Horse $horse){
$betters = \App\Models\Better::orderBy('name')->get();
return view('horses.edit', ['horse' => $horse, 'betters' => $betters]);
}
public function update(Request $request, Horse $horse){
$horse->fill($request->all());
$horse->save();
return redirect()->route('horses.index');
}
public function travel($id){
$horse = Horse::find($id);
return view('horses.travel', ['horse' => $horse]);
}


public function destroy(Horse $horse, Request $request)
{
$horse->delete();
return redirect()->route('horses.index', ['horse_id'=> $request->input('horse_id')]);
}
}
