@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Sukurkime klientą:</div>
<div class="card-body">
<form action="{{ route('horses.store') }}" method="POST">
@csrf
<div class="form-group">
<label>Vardas: </label>
<input type="text" name="name" class="form-control">
</div>
<div class="form-group">
<label>Runs: </label>
<input type="text" name="runs" class="form-control">
</div>
<div class="form-group">
<label>Wins: </label>
<input type="text" name="wins" class="form-control">
</div>
<div class="form-group">
<label>About: </label>
<input type="text" name="about" class="form-control">
</div>
<div class="form-group">
<label>Keliaus į: </label>
<select name="horse_id" id="" class="form-control">
<option value="" selected disabled>Pasirinkite šalį</option>
@foreach ($betters as $better)
<option value="{{ $better->id }}">{{ $better->name }}</option>
@endforeach
</select>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
