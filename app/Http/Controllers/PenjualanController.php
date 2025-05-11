<?php

namespace App\Http\Controllers;

use App\Models\PenjualanModel;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sales.transaction');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(PenjualanModel $penjualanModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PenjualanModel $penjualanModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PenjualanModel $penjualanModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PenjualanModel $penjualanModel)
    {
        //
    }
}
