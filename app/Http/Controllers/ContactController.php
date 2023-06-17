<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Company;
use App\Models\Country;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $contacts = Contact::all();
        $countries = Country::all();
        return view('contacts.index', compact('contacts', 'countries'));
    }

    public function create(Request $request){
        $company = Company::all();
        $country = Country::all();
        return view('contacts.create', compact('company', 'country'));

    }

    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->company_id = $request->company_id;
        $contact->country_id = $request->country_id;

        $contact->save();
        return redirect()->route('contacts.index')->with('success', 'Contact created Successfully!');
    }

    public function show($id){
        $contacts = Contact::findOrFail($id);
      
        return view('contacts.show', compact('contacts'));
    }

    public function destroy($id){
        $contacts = Contact::find($id);
        $contacts->delete();
        return redirect()->route('contacts.index')->with('success', 'Deleted');
    }

    public function edit($id)
    {
        $contacts = Contact::find($id);
        $companies = Company::all();
        $countries = Country::all();
        
        return view('contacts.edit', compact('contacts', 'companies', 'countries'));
    }

    public function update(Request $request, $id)
    {
        $contacts = Contact::find($id);
        $contacts->first_name = $request->input('first_name');
        $contacts->last_name = $request->input('last_name');
        $contacts->email = $request->input('email');
        $contacts->phone = $request->input('phone');
        $contacts->address = $request->input('address');
        $contact->company_id = $request->company_id;
        $contact->country_id = $request->country_id;
        $contacts->update();

        return redirect()->route('contacts.index')->with('success', 'Country Update Successfully');

    }
}
