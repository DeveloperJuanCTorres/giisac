<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function servicios()
    {
        return view('servicios');
    }

    public function proyectos()
    {
        return view('proyectos');
    }

    public function contactanos()
    {
        return view('contactanos');
    }

    public function detalle_proyecto()
    {
        return view('detalle-proyecto');
    }
}
