<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;

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
    public function report($id){
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'projectName' =>  'required',
            'sourceOfFunds' => 'required',
            'plannedAmount' => 'required',
            'sponsoredAmount' => 'required',
            'amountOwnFunds'
        ]);
        $data = Proyectos::create($request->all()); 
        return redirect()->route('project.index')->with('status_success', 'Rol guardado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $data = Proyectos::findOrFail($id);
        return view('project.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $project = Proyectos::findOrFail($id);
        $project->delete();
        return redirect()->route('project.index')->with('status_success', 'Rol eliminado correctamente');
    }
}
