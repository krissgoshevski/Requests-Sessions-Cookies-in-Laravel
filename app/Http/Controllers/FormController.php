<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function submit(Request $req)
    {
        $data = $req->all(); // so ova gi zimame site podatoci koi gi immame vo inputite od formata koi ke gi vneseme 

        $dateTime = \Carbon\Carbon::now();

        $data['date'] = $dateTime->toDateString();
        $data['vreme'] = "Vremeto e ubavo"; // so i da pratam vo varijablata $data ke se prati i ke go printam vo show.blade.php 

        return view('first.show', compact('data'));


    }
    public function index()
    {
        //
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
