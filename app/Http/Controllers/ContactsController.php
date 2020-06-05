<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contacts;
use App\Entreprises;

class ContactsController extends Controller
{
    public function index(){
        $contacts = Contacts::all();
        return view('contacts.index', compact('contacts'));
    }

    public function create(){
        $entreprises = Entreprises::all();
        return view('contacts.create', compact('entreprises'));
    }

    public function store(Request $request){
        $contact = new Contacts;
        $contact->name = $request->get('name');
        $contact->firstname = $request->get('firstname');
        $contact->number = $request->get('number');
        $contact->email = $request->get('email');
        $contact->id_entreprise = $request->get('entreprise');
        $contact->save();

        
        return redirect()->route('contacts.index');
    }

    public function show($contactId)
    {
        $contact = Contacts::where('id', $contactId)->first();
        $entreprise = Entreprises::where('id', $contact->id_entreprise)->first();
        return view('contacts.show', compact('contact', 'entreprise'));
    }
}
