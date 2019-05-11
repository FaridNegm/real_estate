@extends('admin.app')

@section('title')
    Edit Testmonial: @foreach($edit_testmonial as $testmonial) {{$testmonial->title}} @endforeach
@endsection

@section('header')
    <style>
        .strong{
            position: relative;
            top: -12px;
            color: #e05454;
            font-size: 12px;
        }
    </style>
@endsection

@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Edit Testmonial: @foreach($edit_testmonial as $testmonial) <span style="color: royalblue;text-decoration: underline;">{{$testmonial->title}}</span> @endforeach</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{url('admin-panel')}}">Dashboard</a></li>
                        <li class="active">Edit Testmonial: @foreach($edit_testmonial as $testmonial) {{$testmonial->title}} @endforeach</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                @foreach($edit_testmonial as $testmonial)
                                    <form action="{{url('admin-panel/testmonial/update/'.$testmonial->id)}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}

                                        <div class="form-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"> Title</label>
                                                        <input type="text" id="title" class="form-control" name="title" placeholder="Title..." value="{{$testmonial->title}}"> </div>

                                                    @if ($errors->has('name'))
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong class="strong">{{ $errors->first('name') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Service Photo</label>
                                                        <input type="file" name="image" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="hidden" name="image_hidden" class="form-control" value="{{$testmonial->image}}">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"> Status</label>
                                                        <select class="form-control" name="status" >
                                                            <option value="{{$testmonial->status}}">{{$testmonial->status == 1 ? 'Active' : 'Not Active'}}</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Not Active</option>
                                                        </select>
                                                        @if ($errors->has('status'))
                                                            <span class="invalid-feedback" role="alert">
                                                            <strong class="strong">{{ $errors->first('status') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"> Service Description</label>
                                                        <textarea id="description" class="form-control" name="body" placeholder="Description..." rows="5">{{$testmonial->body}}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <img src="{{ url('admin/images/testmonials/'.$testmonial->image)}}" class="img-responsive" style="width:200px; height: 150px;border-radius: 5px;"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions m-t-40">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        </div>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection

@section('footer')

@endsection
