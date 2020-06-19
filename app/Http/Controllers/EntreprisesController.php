<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entreprises;

class EntreprisesController extends Controller
{
    public function index(){
        $entreprises = Entreprises::all();
        return view('entreprises.index', compact('entreprises'));
    }

    public function create(){
        return view('entreprises.create');
    }

    public function store(Request $request){
        $entreprise = new Entreprises;
        $entreprise->name = $request->get('name');
        $entreprise->adresse = $request->get('adresse');
        $entreprise->type = $request->get('type');
        $entreprise->url = $request->get('image');
        $entreprise->save();

        
        return redirect()->route('entreprises.index');
    }

    public function show($entrepriseId)
    {
        $entreprise = Entreprises::where('id', $entrepriseId)->first();
        return view('entreprises.show', compact('entreprise'));
    }

    public function delete($entrepriseId) {
        $entreprise = Entreprises::where('id', $entrepriseId) -> delete();

        return redirect()->route('entreprises.index');
    }
    
}
