@extends('layouts.adminheader')
@section('content')

<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">Contact Us</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
<li class="breadcrumb-item active">Contact Us</li>
</ol>
</div>
</div>
</div>
</div>

<section class="content">
<div class="container-fluid">
<div class="row">

<div class="col-md-12">
<div class="card card-secondary">
  <div class="card-header">
    <h3 class="card-title">Edit Contact</h3>
    </div>
  <form  method="POST" enctype="multipart/form-data" action="{{route('contact-update')}}">
  @csrf
    <div class="card-body">
        <input type="hidden" name="id" value="{{$contact->id}}">
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" required="" placeholder="Email" name="email" value="{{$contact->email}}">
          @error('email')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Address</label>
          <textarea class="form-control" name="address" placeholder="Address">{{$contact->address}}</textarea>
          @error('address')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Phone Number</label>
          <input type="text" class="form-control" placeholder="Phone Number" maxlength="10" name="phone_number" value="{{$contact->phone_number}}">
          @error('phone_number')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Map</label>
          <input type="text" class="form-control" placeholder="Map" name="map" value="{{$contact->map}}">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Facebook Link</label>
          <input type="text" class="form-control" placeholder="Facebook Link" name="facebook" value="{{$contact->facebook}}">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Instagram Link</label>
          <input type="text" class="form-control" placeholder="Instagram Link" name="instragram" value="{{$contact->instragram}}">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Youtube Link</label>
          <input type="text" class="form-control" placeholder="Youtube Link" name="youtube" value="{{$contact->youtube}}">
        </div>
        <div class="card-footer">
        <button type="submit" class="btn btn-secondary">Submit</button>
      </div>
  </form>
</div>
</div>
</div>
</div>
</section>
@endsection
