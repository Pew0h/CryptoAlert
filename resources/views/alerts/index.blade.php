@extends('layouts.app')
@section('title')
    Mes alertes
@endsection
@section('content')
    <div class="row">
        @foreach($alerts as $alert)
            <div class="w-100 shadow-sm mb-4 rounded px-4 py-3">
                Alerte sur le {{ $alert->symbol }} (${{ $alert->price }}) créé le {{ $alert->created_at }}
            </div>
        @endforeach
    </div>
@endsection
