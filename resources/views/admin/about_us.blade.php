@extends('layouts.adminheader')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">About Us</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
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
                        <h3 class="card-title">About Us</h3>
                        <a href="" style="color: white; float: right;">Back</a>
                    </div>
                    <form  method="POST" enctype="multipart/form-data" action="{{route('about-us-update')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$about_us->id}}">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" value="{{isset($about_us->title) ? $about_us->title : ''}}" placeholder="Enter Title" required="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" id="editor" placeholder="Enter Description" class="form-control">{{isset($about_us->description) ? $about_us->description : ''}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Choose Image</label>
                                @if(isset($about_us->image))
                                    <img src="{{asset('uploads/about_us/'.$about_us->image)}}" width="100px" height="100px">
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
