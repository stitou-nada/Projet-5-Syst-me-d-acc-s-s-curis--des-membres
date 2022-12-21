<?php

namespace App\Http\Controllers;
use App\Models\tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    public function index()
    {
        $tache = tache::all();
        return view('tache.index',compact('tache'));
    }


    public function create()
    {
        return view('tache.create');
    }

    public function store(Request $request)
    {
        tache::create([
            "name"=>$request->name,
        ])->save();
        return redirect('dashboard');


        }

    public function destroy( $id)
    {
       tache::find($id)
       ->delete();
       return back();
    }
}
