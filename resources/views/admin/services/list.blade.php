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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Services</h3>
                        <a href="{{route('service-create')}}" style="background-color: #2A3F54;color: white; float: right;" class="btn">+ Add</a>
                    </div>
                    <div class="card-body">
                        <table id="table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>        
                            <tbody>
                                <?php $number = 1; ?>
                                    @foreach($service as $value)
                                        <tr>
                                            <td>{{$number}}</td>
                                                <?php $number++; ?>
                                            <td>{{$value->name}}</td>
                                            <td>
                                                @if(isset($value->image))
                                                    <img src="{{asset('uploads/service/'.$value->image)}}" style="width: 100px;height: 100px;">
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{url('service-edit/'.$value->id)}}">
                                                    <i class="fa fa-edit"  aria-hidden="true" style="color:green;"></i>
                                                </a>&nbsp; &nbsp;
                                                <a href="{{url('service-delete/'.$value->id)}}" onclick = "return confirm('Are you sure Delete This Recored?')">
                                                    <i class="fa fa-trash"  aria-hidden="true" style="color:red;"></i>
                                                </a>&nbsp; &nbsp;
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('script')
$("#table").DataTable({
});
@endsection