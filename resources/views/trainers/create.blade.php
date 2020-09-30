@extends('layouts.app')

@section('title','Trainer Create')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @include('commons.errors')
      <form action="/trainer" method="post" enctype="multipart/form-data">
        @csrf
        
        @include('trainers.form')
        
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
      </div>
    </div>
  </div>
  
 @endsection() 

