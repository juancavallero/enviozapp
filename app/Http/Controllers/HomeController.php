<?php

namespace App\Http\Controllers;


use App\Models\Ubicacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Helpers\EmailHelper;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Laracasts\Flash\Flash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', compact('links'));
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function homeweb()
    {
        $ubicaciones = Ubicacion::all();

        return view('web/home', compact('ubicaciones'));
    }


}
