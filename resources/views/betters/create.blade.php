@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Sukurkime statyma:</div>
<div class="card-body">
<form action="{{ route('betters.store') }}" method="POST">
@csrf
<div class="form-group">
<label>Pavadinimas: </label>
<input type="text" name="name" class="form-control">
</div>
<div class="form-group">
<label>Surname: </label>
<input type="number" name="surname" class="form-control">
</div>
<label>Bet: </label>
<input type="number" name="bet" class="form-control">
</div>
<label>Horse_id: </label>
<input type="number" name="horse_id" class="form-control">
</div>
<div class="form-group">
{{-- <label>Aprašymas: </label>
<textarea id="mce" name="description" rows=10 cols=100 class="form-control"></textarea>
</div> --}}
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
