<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employe = Employe::all();
        return view('backend.employe.index')->with('employes',$employe);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.employe.addEmploye');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'employeName' => 'required|max:50',
            'employeLastName' => 'required|max:50',
            'employeFatherName' => 'required|max:50',
            'employePhone' => 'required|max:50',
            'employeEmail' => 'required|max:50',
            'employeSSN' => 'required|max:50',
            'employeJobType' => 'required|max:50',
            'employeAddress' => 'required|max:50',
            'branch' => 'required|max:50',
        ]);

        Employe::create([
            'employeName' => $request->employeName ,  
            'employeLastName' => $request->employeLastName ,  
            'employeFatherName' => $request->employeFatherName ,  
            'employePhone' => $request->employePhone ,  
            'employeEmail' => $request->employeEmail ,  
            'employeSSN' => $request->employeSSN ,  
            'employeJobType' => $request->employeJobType ,  
            'employeAddress' => $request->employeAddress ,  
            'branch' => $request->branch]);
            
        return redirect()->route('employe.index');
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
    public function edit(Employe $employe)
    {
        return view('backend.employe.editEmploye')->with('employe',$employe);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employe $employe)
    {

        $request->validate([
            'employeName' => 'required|max:50',
            'employeLastName' => 'required|max:50',
            'employeFatherName' => 'required|max:50',
            'employePhone' => 'required|max:50',
            'employeEmail' => 'required|max:50',
            'employeSSN' => 'required|max:50',
            'employeJobType' => 'required|max:50',
            'employeAddress' => 'required|max:50',
            'branch' => 'required|max:50',
        ]);


        $employe->employeName = $request->employeName;
        $employe->employeLastName = $request->employeLastName;
        $employe->employeFatherName = $request->employeFatherName;
        $employe->employePhone = $request->employePhone;
        $employe->employeEmail = $request->employeEmail;
        $employe->employeSSN = $request->employeSSN;
        $employe->employeJobType = $request->employeJobType;
        $employe->employeAddress = $request->employeAddress;
        $employe->branch = $request->branch;
        $employe->save();

        return  redirect()->route('employe.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employe $employe)
    {
        $employe->delete();

        return 'success';
    }
}
