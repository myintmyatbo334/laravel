

@extends('layouts.sb')
@section('title', 'Detail')
@section('content')
<div class="container">


<a href="{{route('users.index')}}">Back</a>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">{{$users->name}}</th>
     
    </tr>
    <tr>
      <th scope="col">email</th>
      <th scope="col">{{$users->email}}</th>
     
    </tr>
    <tr>
      <th scope="col">Created At</th>
      <th scope="col">{{$users->created_at}}</th>
     
    </tr>
    <tr>
      <th scope="col">Updated At</th>
      <th scope="col">{{$users->updated_at}}</th>
     
    </tr>
  </thead>
 
</table>
</div>
</div>

</div>
@endsection