<!-- <h1>Create New Company</h1>

<a href="{{route('companies.index')}}">Back to companies</a> -->

@extends('layouts.sb')
@section('content')
@section('title', 'Create New Contacts')
<!-- <h1>Create New Contact</h1>

<a href="{{route('contacts.index')}}">Back to contacts</a> -->


<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Edit Company</strong>
              </div>           
              <div class="card-body">
                <form action="{{route('companies.update', $companies->id)}}" method="Post">
                @csrf

                @method('PUT')
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="countryName" class="col-md-3 col-form-label">Name</label>
                      <div class="col-md-9">
                        <input type="text" name="name"  value="{{$companies->name}}" id="name" class="form-control ">
                        
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="countryName" class="col-md-3 col-form-label">Age</label>
                      <div class="col-md-9">
                        <input type="text" name="Age" value="{{$companies->age}}" id="Age" class="form-control ">
                        
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="zipcode" class="col-md-3 col-form-label">Address</label>
                      <div class="col-md-9">
                        <input type="text" name="address" value="{{$companies->address}}" id="address" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="website" class="col-md-3 col-form-label">Website</label>
                      <div class="col-md-9">
                        <input type="text" name="website" value="{{$companies->website}}" id="website" class="form-control ">
                        
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">email</label>
                      <div class="col-md-9">
                        <input type="text" name="email" value="{{$companies->email}}" id="email" class="form-control ">
                        
                      </div>
                    </div>

                   

                    

                   
                   
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Update</button>
                          <a href="{{route('companies.index')}}" class="btn btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection