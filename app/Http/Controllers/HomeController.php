<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Company;
use App\Models\Pillar;
use App\Models\Project;
use App\Models\Quality;
use App\Models\Service;
use App\Models\Specialist;
use App\Models\Taxonomy;
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
        $company = Company::first();
        $banners = Banner::all();
        $services = Service::take(4)->get();
        $projects = Project::all();
        $calidad = Quality::first();

        $specialists = Specialist::where('activo',1)
                ->orderBy('id')
                ->get();
        return view('home', compact('company', 'banners', 'services', 'projects', 'specialists', 'calidad'));
    }

    public function nosotros()
    {
        $company = Company::first();
        $nosotros = About::first();
        $pilares = Pillar::all();

        $specialists = Specialist::where('activo',1)
                ->orderBy('id')
                ->get();
        return view('nosotros', compact('company', 'nosotros', 'pilares', 'specialists'));
    }

    public function servicios()
    {
        $company = Company::first();
        $services = Service::all();

        $specialists = Specialist::where('activo',1)
                ->orderBy('id')
                ->get();
        return view('servicios', compact('company', 'services', 'specialists'));
    }

    public function proyectos(Request $request)
    {
        $company = Company::first();

        $query = Project::with('taxonomy');

        if ($request->filled('taxonomy')) {

            $query->whereHas('taxonomy', function ($q) use ($request) {

                $q->where('nombre', $request->taxonomy);

                // o slug si prefieres
                // $q->where('slug', $request->taxonomy);

            });

        }

        $projects = $query->latest()->get();

        $taxonomies = Taxonomy::orderBy('nombre')->get();

        $specialists = Specialist::where('activo',1)
                ->orderBy('id')
                ->get();

        return view('proyectos', compact(
            'company',
            'projects',
            'taxonomies',
            'specialists'
        ));
    }

    public function contactanos()
    {
        $company = Company::first();
        $services = Service::all();
        $specialists = Specialist::where('activo',1)
                ->orderBy('id')
                ->get();

        return view('contactanos', compact('company', 'services', 'specialists'));
    }

    public function detalle_proyecto()
    {
        $company = Company::first();

        $specialists = Specialist::where('activo',1)
                ->orderBy('id')
                ->get();
        return view('detalle-proyecto',compact('company', 'specialists'));
    }
}
