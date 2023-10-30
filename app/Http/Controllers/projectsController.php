<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class projectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Proyectos::all();
       
        return view('project.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store .
     */
    public function store(Request $request)
    {
        $request->validate([
            'projectName' => 'required',
            'sourceOfFunds' => 'required',
            'plannedAmount' => 'required',
            'sponsoredAmount' => 'required',
            'amountOwnFunds' => 'required',
        ]);
        $data = Proyectos::create($request->all());
        return redirect()->route('project.index')->with('status_success', 'Proyecto guardado');

    }


    /**
     * Edit
     */
    public function edit(string $id)
    {
        $data = Proyectos::findOrFail($id);
        return view('project.edit', compact('data'));
    }

    /**
     * Update .
     */
    public function update(Request $request, $id)
    {
        //validation 
        $request->validate([
            'projectName' => 'required',
            'sourceOfFunds' => 'required',
            'plannedAmount' => 'required',
            'sponsoredAmount' => 'required',
            'amountOwnFunds' => 'required'
        ]);
        $projects = Proyectos::findOrFail($id);
        $newProject = $request->all();
        $projects->update($newProject);
        return redirect()->route('project.index')->with('status_success', 'Proyecto actualizado');
    }

    /**
     * Remove .
     */
    public function delete($id)
    {
        $project = Proyectos::findOrFail($id);
        $project->delete();
        return redirect()->route('project.index')->with('status_success', 'Proyecto eliminado');
    }

    /**
     * Report using dompdf .
     */
    public function report($id)
    {
        setlocale(LC_TIME, 'es_ES.utf8');
        $fechaActual = Carbon::now()->isoFormat('dddd D [de] MMMM [de] YYYY');
        $data = Proyectos::findOrFail($id);
        $pdf = Pdf::loadView('project.pdfReport', compact('data', 'fechaActual'));
        return $pdf->stream();
        // return view('project.pdfReport');
    }

    /**
     * Inform .
     */
    public function inform()
    {
        setlocale(LC_TIME, 'es_ES.utf8');
        $fechaActual = Carbon::now()->isoFormat('dddd D [de] MMMM [de] YYYY');
        $data = Proyectos::all();
        $pdf = Pdf::loadView('project.pdfInform', compact('data', 'fechaActual'));
        return $pdf->stream();

    }



}
