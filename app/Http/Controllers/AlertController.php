<?php

namespace App\Http\Controllers;

use App\Models\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AlertController extends Controller
{
    public function create($coin)
    {
        return view('alerts.create', ['coin' => $coin]);
    }

    function index(){

        $alerts = Alert::all();
        //dd($alerts);
        return view('alerts.index', ['alerts' => $alerts]);
    }
}
