@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Pakeiskime statytojo informaciją</div>
<div class="card-body">
<form method="POST" action="{{ route('betters.update', $better->id) }}">
@csrf @method("PUT")
<div class="form-group">
<label for="">Vardas</label>
<input type="text" name="name" class="form-control" value="{{ $better->name }}">
</div>
<div class="form-group">
<label for="">Surname</label>
<input type="text" name="surname" class="form-control" value="{{ $better->surname }}">
</div>
<div class="form-group">
<label for="">Bet</label>
<input type="text" name="bet" class="form-control" value="{{ $better->bet }}">
</div>
<label for="">Horse_id</label>
<input type="text" name="horse_id" class="form-control" value="{{ $better->horse_id }}">
</div>
<button type="submit" class="btn btn-primary">Pakeisti</button>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
