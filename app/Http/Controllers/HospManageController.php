<?php

namespace App\Http\Controllers;

use App\Models\HospManage;
use Illuminate\Http\Request;
use Inertia\Inertia;
// use Inertia\Response;

class HospManageController extends Controller
{

    //display the doctor's action, the planning, and the list of the employee

    public function medecin()
    {
            return Inertia::render('HospManages/medecin');
    }
    public function personnel()
    {
    
            return Inertia::render('HospManages/personnel');
    }
    public function planning()
    {
    
            return Inertia::render('HospManages/planning');
    }



    
    //Display a listing of the resource.
    
    // public function index(): Response
    // {
    
        
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            
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
    public function show(HospManage $hospManage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HospManage $hospManage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HospManage $hospManage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HospManage $hospManage)
    {
        //
    }
}
