

@extends('layouts.sb')
@section('title', 'Detail')
@section('content')
<div class="container">


<a href="{{route('companies.index')}}">Back</a>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Company Name</th>
      <th scope="col">{{$companies->name}}</th>
     
    </tr>
    <tr>
      <th scope="col">Age</th>
      <th scope="col">{{$companies->age}}</th>
     
    </tr>
    <tr>
      <th scope="col">Address</th>
      <th scope="col">{{$companies->address}}</th>
     
    </tr>
    <tr>
      <th scope="col">Website</th>
      <th scope="col">{{$companies->website}}</th>
     
    </tr>

    <tr>
      <th scope="col">Email</th>
      <th scope="col">{{$companies->email}}</th>
     
    </tr>
    
  </thead>
 
</table>
</div>
</div>

</div>
@endsection