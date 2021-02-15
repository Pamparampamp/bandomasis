@extends('layouts.app')
@section('content')
<div class="card">
<div class="card-header">Apie arkli duomenys</div>
<div class="card-body">
<h5>Užsakovas: {{ $horse->name }} {{$horse->surname}}</h5>
<h5>Runs: {{ $horse->runs }}</h5>
<h5>Wins: {{ $horse->wins }}</h5>
<hr>

<h5>About: {{ $horse->about }}</h5>
<table class="table">


</table>
</div>
</div>
@endsection
