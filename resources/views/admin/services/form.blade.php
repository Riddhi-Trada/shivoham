@extends('layouts.adminheader')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Services</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">Services</li>
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
                        <h3 class="card-title">{{$title}}</h3>
                        <a href="{{route('service-list')}}" style="color: white; float: right;">Back</a>
                    </div>
                    <form  method="POST" enctype="multipart/form-data" action="@if(isset($service->id)) {{route('service-update',array('id'=>$service->id))}} @else {{route('service-store')}} @endif">
                    @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="{{isset($service->name) ? $service->name : ''}}" placeholder="Enter Name" required="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="editor" placeholder="Enter Description" class="form-control">{{isset($service->description) ? $service->description : ''}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Choose Image</label>
                                @if(isset($service->image))
                                    <img src="{{asset('uploads/service/'.$service->image)}}" width="100px" height="100px">
                                @endif
                                    <input type="file" class="form-control" name="image" id="file" placeholder="Choose File">
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
