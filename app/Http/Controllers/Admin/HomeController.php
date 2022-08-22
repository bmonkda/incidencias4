<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Estatu;
use App\Models\Incidencia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $incidencias = Incidencia::with('estatu')->get();
        $estatus = Estatu::all();
        // return view('admin.index');
        // return $incidencias;
        return view('admin.index', compact('incidencias', 'estatus'));
    }
}
