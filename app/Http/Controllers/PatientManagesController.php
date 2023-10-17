<?php

namespace App\Http\Controllers;

use App\Models\PatientManages;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PatientManagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return Inertia::render('PatientManages/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('PatientManages/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PatientManages $patientManages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PatientManages $patientManages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PatientManages $patientManages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PatientManages $patientManages)
    {
        //
    }
}
