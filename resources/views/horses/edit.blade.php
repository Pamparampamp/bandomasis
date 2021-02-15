@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Pakeiskime kliento informaciją</div>
<div class="card-body">
<form method="POST" action="{{ route('horses.update', $horse->id) }}">
@csrf @method("PUT")
<div class="form-group">
<label>Vardas: </label>
<input type="text" name="name" class="form-control" value="{{ $horse->name }}">
</div>
<div class="form-group">
<label>Runs: </label>
<input type="text" name="runs" class="form-control" value="{{ $horse->runs }}">
</div>
<div class="form-group">
<label>Wins: </label>
<input type="text" name="wins" class="form-control" value="{{ $horse->wins }}">
</div>
<div class="form-group">
<label>About: </label>
<input type="text" name="about" class="form-control" value="{{ $horse->about }}">
<textarea name="about" id="mce" placeholder="Apie arkli"></textarea>
</div>

<div class="form-group">
<label>Savininkas: </label>
<select name="country_id" id="" class="form-control">
<option value="" selected disabled>Pasirinkite </option>
@foreach ($betters as $better)
<option value="{{ $better->id }}" @if($better->id == $better->better_id) selected="selected" @endif>{{ $better->name }}</option>
@endforeach
</select>
</div>
<button type="submit" class="btn btn-primary">Pakeisti</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
