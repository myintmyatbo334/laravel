@extends('layouts.sb')
@section('content')
@section('title', 'Edit Users')
<!-- <h1>Create New Contact</h1>

<a href="{{route('contacts.index')}}">Back to contacts</a> -->


<main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Edit User </strong>
              </div>           
              <div class="card-body">
                <form action="{{route('users.update', $users->id)}}" method="POST">
                @csrf

                @method('PUT')
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="name" class="col-md-3 col-form-label">Name</label>
                      <div class="col-md-9">
                        <input type="text" name="name" value="{{$users->name}}" id="name" class="form-control ">    
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Email</label>
                      <div class="col-md-9">
                        <input type="text" name="email"  value="{{$users->email}}" id="email" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="password" class="col-md-3 col-form-label">Password</label>
                      <div class="col-md-9">
                        <input type="password" name="password"  value="{{$users->password}}" id="password" class="form-control">
                      </div>
                    </div>

                   

                    

                   
                   
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Update</button>
                          <a href="{{route('users.index')}}" class="btn btn-outline-secondary">Cancel</a>
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