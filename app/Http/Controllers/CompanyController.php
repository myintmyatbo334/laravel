<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{

   

    public function index(){
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    public function create(){
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'age' => 'required',
            'website' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        $companies = new Company();
        $companies->name = $request->name;
        $companies->age = $request->age;
        $companies->website = $request->website;
        $companies->email = $request->email;
        $companies->address = $request->address;

        $companies->save();

        return redirect()->route('companies.index')->with('success', 'Company Create Successfully');

    }


    public function show($id){
        $companies = Company::find($id);
        return view('companies.show', compact('companies'));
    }

    public function destroy($id)
    {
    
        $companies = Company::find($id);
        $companies->delete();

        return redirect()->route('companies.index')->with('success', 'Deleted');
        }
        

        public function edit($id)
    {
        $companies = Company::find($id);
        return view('companies.edit', compact('companies'));
    }

    public function update(Request $request, $id)
    {
        $companies = Company::find($id);
        $companies->name = $request->input('name');
        $companies->age = $request->input('age');
        $companies->address = $request->input('address');
        $companies->website = $request->input('website');
        $companies->email = $request->input('email');
        $companies->update();

        return redirect()->route('companies.index')->with('success', 'Company Update Successfully');

    }

   
}

