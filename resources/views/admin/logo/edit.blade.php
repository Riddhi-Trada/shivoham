@extends('layouts.adminheader')
@section('content')

<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">Logo</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
<li class="breadcrumb-item active">logo</li>
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
<h3 class="card-title">Logo Update</h3>
</div>


<form  method="POST" enctype="multipart/form-data" action="{{route('logo-update')}}">
 @csrf
 <input type="hidden" name="id" value="{{$logo->id}}">
<div class="card-body">

<div class="form-group">
  <label for="exampleInputEmail1">Logo</label>
  <input type="file" class="form-control" placeholder="Enter Logo" name="image">
</div>

<div class="form-group">
  <label for="exampleInputEmail1">White Logo</label>
  <input type="file" class="form-control" placeholder="Enter White Logo" name="white_logo">
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Favicon</label>
  <input type="file" class="form-control" placeholder="Enter Favicon" name="image1">
</div>

<div class="form-group">
  <div class="row">
    <div class="col-sm-4">
      <label>Logo</label><br>
      @if(isset($logo->logo_image) && $logo->logo_image)
        <img src="{{asset('uploads/logo/'.$logo->logo_image)}}" style="height: 150px;width: 150px;">
      @endif
    </div>

    <div class="col-sm-4">
      <label>White Logo</label><br>
      @if(isset($logo->white_logo) && $logo->white_logo)
        <img src="{{asset('uploads/white_logo/'.$logo->white_logo)}}" style="height: 150px;width: 150px;">
    ` @endif
    </div>

    <div class="col-sm-4">
      <label>Favicon</label><br>
      @if(isset($logo->favicon_image) && $logo->favicon_image)
        <img src="{{asset('uploads/logo/'.$logo->favicon_image)}}" style="height: 150px;width: 150px;">
      @endif
    </div>

  </div>
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
