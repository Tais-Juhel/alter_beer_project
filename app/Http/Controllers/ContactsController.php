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

    //

    public function indexAPI()
    {
        return Article::all();
    }
 
    public function showAPI(Contacts $contact)
    {
        return $contact;
    }

    public function storeAPI(Request $request)
    {
        $contact = Contacts::createAPI($request->all());
        return response()->json($contact, 201);
    }

    public function updateAPI(Request $request, Contacts $contact)
    {
        $contact->update($request->all());
        return response()->json($contact, 200);
    }

    public function deleteAPI(Contacts $contact)
    {
        $contact->delete();
        return response()->json(null, 204);
    }
}
