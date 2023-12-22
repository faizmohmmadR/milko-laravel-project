<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = Branch::all();
        return view('backend.branch.index')->with('branches',$branches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.branch.addBranch');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'branchName' => 'required|max:50',
            'branchAddress' => 'required|max:50',
        ]);

        Branch::create(['branchName' => $request->branchName, 'branchAddress'=> $request->branchAddress]);
        return redirect()->route('branch.index');
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
    public function edit(Branch $branch)
    {
        return view('backend.branch.editBranch')->with('branches',$branch);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Branch $branch)
    {
        
        $request->validate([
            'branchName' => 'required|max:50',
            'branchAddress' => 'required|max:50',
        ]);

        $branch->branchName = $request->branchName;
        $branch->branchAddress = $request->branchAddress;
        $branch->save();
        return redirect()->route('branch.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
