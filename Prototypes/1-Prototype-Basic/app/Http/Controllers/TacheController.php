<?php

namespace App\Http\Controllers;

use App\Models\tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tache = tache::all();
        return view('tache.index',compact('tache'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function show(tache $tache)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function edit(tache $tache)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tache $tache)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function destroy(tache $tache)
    {
        //
    }
}
