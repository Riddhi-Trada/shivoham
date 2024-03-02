@extends('layouts.adminheader')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Contact Query</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                <li class="breadcrumb-item active">Contact Query</li>
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
                        <h3 class="card-title">Contact Query</h3>
                    </div>
                    <div class="card-body">
                        <table id="table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>First Name</th>
                                    <th>End Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>        
                            <tbody>
                                <?php $number = 1; ?>
                                    @foreach($contactquery as $value)
                                        <tr>
                                            <td>{{$number}}</td>
                                                <?php $number++; ?>
                                            <td>{{$value->fname}}</td>
                                            <td>{{$value->lname}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->number}}</td>
                                            <td>{{$value->message}}</td>
                                            <td>
                                                <a href="{{route('contactquerydelete',$value->id)}}" onclick = "return confirm('Are you sure Delete This Recored?')">
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