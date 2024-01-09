<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('JCconsulting.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $contact = new Contact();
        $contact->fill($data);
        $contact->save();

        return redirect()->route('home')->with('success', 'Votre message a été envoyé avec succès.');
    }

    public function showFormation()
    {
        return view('JCconsulting.services.formation');
    }
    public function showRh()
    {
        return view('JCconsulting.services.rh');
    }
    public function showFinance()
    {
        return view('JCconsulting.services.finances');
    }
    public function showMpme()
    {
        return view('JCconsulting.services.mpme');
    }
    public function searchFinance()
    {
        return view('JCconsulting.services.searchFinance'); 
    }
    public function others()
    {
        return view('JCconsulting.services.divers'); 
    }
}

