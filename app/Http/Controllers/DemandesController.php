<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demandes;
use App\Contacts;
use App\Entreprises;

class DemandesController extends Controller
{
    public function index(){
        $demandes = Demandes::all();
        return view('demandes.index', compact('demandes'));
    }

    public function create(){
        $contacts = Contacts::all();
        return view('demandes.create', compact('contacts'));
    }
    public function store(Request $request){
        $demande = new Demandes;
        $demande->name = $request->get('name');
        $demande->type = $request->get('type');
        $demande->id_contact = $request->get('contact');
        $demande->save();

        return redirect()->route('demandes.index');
    }
    
    public function edit($demandeId){
        $demande = Demandes::where('id', $demandeId)->first();
        $contacts = Contacts::all();
        return view('demandes.edit', compact('demande', 'contacts'));
    }

    public function update(Request $request, $demandeId){
        $demande = Demandes::where('id', $demandeId)->first();
        $demande->name = $request->get('name');
        $demande->type = $request->get('type');
        $demande->id_contact = $request->get('contact');
        $demande->save();

        return redirect()->route('demandes.index', $demandes->id);
    }


    public function show($demandeId){
        $demande = Demandes::where('id', $demandeId)->first();
        $contact = Contacts::where('id', $demande->id_contact)->first();
        $entreprise = Entreprises::where('id', $contact->id_entreprise)->first();

        return view('demandes.show', compact('demande', 'contact', 'entreprise'));
    }

    public function delete($demandeId) {
        $demande = Demandes::where('id', $demandeId) -> delete();

        return redirect()->route('demandes.index');
    }
}
