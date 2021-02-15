@extends('layouts.app')
@section('content')
<div class="card-body">
<form class="form-inline" action="{{ route('horses.index') }}" method="GET">
<select name="country_id" id="" class="form-control">
<option value="" selected disabled>Pasirinkite šalį klientų filtravimui:</option>
@foreach ($betters as $better)
<option value="{{ $better->id }}"
@if($better->id == app('request')->input('better_id'))
selected="selected"
@endif>{{ $better->name }}</option>
@endforeach
</select>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="card-body">
@if($errors->any())
<h4 style="color: red">{{$errors->first()}}</h4>
@endif
<table class="table">
<tr>
<th>Vardas</th>
<th>Begimai</th>
<th>Pergales</th>
<th>Aprašas</th>
<th>Veikmai</th>
</tr>
@foreach ($horses as $horse)
<tr>
<td>{{ $horse->name }}</td>
<td>{{ $horse->runs }}</td>
<td>{{ $horse->wins }}</td>
<td>{{ $horse->about }}</td>

<td>
<form action={{ route('horses.destroy', $horse->id) }} method="POST">
<a class="btn btn-success" href={{ route('horses.edit', $horse->id) }}>Redaguoti</a>
@csrf @method('delete')
<input type="submit" class="btn btn-danger" value="Trinti"/>
<a href="{{ route('horses.travel', $horse->id) }}" class="btn btn-primary m-1">Peržiūrėti kelionę</a>
</form>
</td>
</tr>
@endforeach
</table>
<div>
<a href="{{ route('horses.create') }}" class="btn btn-success">Pridėti</a>
</div>
</div>
@endsection
