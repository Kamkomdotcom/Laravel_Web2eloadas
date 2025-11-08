<?php

namespace App\Http\Controllers;

use App\Models\Hely;
use Illuminate\Http\Request;

class HelyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $helyek = Hely::with(['film', 'mozi'])->get();

        return view('helyek.index', [
            'helyek' => $helyek
        ]);
    }
     /* 
     Show the form for creating a new resource.
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
