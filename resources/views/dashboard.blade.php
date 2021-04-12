@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        @foreach($json as $coin)
        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-6 mb-5">
            <div class="shadow px-4 py-3 rounded text-center">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h5 class="mb-0">{{$coin['name']}}</h5>
                    <p class="mb-0" style="font-size: 0.8rem;">{{$coin['current_price']}} $</p>
                </div>

                <div>
                    <img width="60" src="{{$coin['image']}}">
                </div>
                <br>
                @if($coin['price_change_percentage_24h'] < 0)
                    <p class="mb-0" style="font-size: 0.8rem; color:red"> 24h : {{ round($coin['price_change_percentage_24h'], 3)}}%</p>
                @else
                    <p class="mb-0" style="font-size: 0.8rem; color:green">24h : +{{ round($coin['price_change_percentage_24h'], 3)}}%</p>
                @endif

                <a href="{{route('createCoin', ['coin' => $coin['symbol']])}}" class="mt-3 btn btn-primary w-100">Créer une alerte</a>
            </div>
        </div>
        @endforeach
    </div >

@endsection
