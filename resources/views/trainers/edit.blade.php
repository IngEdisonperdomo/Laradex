@extends('layouts.app')

@section('title','Trainer Edit')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <form action="/trainer/{{$trainer->slug}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        @include('trainers.form')
        <div class="form-group text-center">
          <img src="/images/{{$trainer->avatar}}" width="100" height="100">
        </div>
        
        <button type="submit" class="btn btn-primary text-center">Actualizar</button>
      </form>
      </div>
    </div>
  </div>
  
 @endsection() 

