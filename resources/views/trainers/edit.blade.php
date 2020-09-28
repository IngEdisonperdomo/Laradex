@extends('layouts.app')

@section('title','Trainer Edit')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <form action="/trainer/{{$trainer->slug}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="name">nombre</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$trainer->name}}">
          
        </div>
        <div class="form-group">
          <label for="slug">nombre</label>
          <input type="text" class="form-control" id="slug" name="slug" value="{{$trainer->slug}}" readonly>
          
        </div>

        <div class="form-group">
          <label for="descripcion">Descripcion</label>
          <textarea name="description" id="descripcion" cols="30" rows="10" class="form-control">{{$trainer->description}}</textarea>
          
        </div>
        <div class="form-group">
          <label for="avatar">avatar</label>
          <input type="file" class="form-control" id="avatar" name="avatar">
        </div>
        <div class="form-group text-center">
          <img src="/images/{{$trainer->avatar}}" width="100" height="100">
        </div>
        
        <button type="submit" class="btn btn-primary text-center">Actualizar</button>
      </form>
      </div>
    </div>
  </div>
  
 @endsection() 

