@extends('layouts.app')
@section('content')
<div class="card">
<div class="card-header">Kliento ir jo kelionės detalės</div>
<div class="card-body">
<h5>Užsakovas: {{ $better->name }} {{$better->surname}}</h5>
<h5>Pavadinimas: {{ $better->surname }}</h5>
<h5>Bet: {{ $better->bet }}</h5>
<h5> horse id: {{ $better->horse_id }}</h5>
<hr>



</table>
</div>
</div>
@endsection
