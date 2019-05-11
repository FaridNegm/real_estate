@extends('admin.app')

@section('title')
    Add New Service
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
                    <h4 class="page-title">Add New Service</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{url('admin-panel')}}">Dashboard</a></li>
                        <li class="active">Add New Service</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <form action="{{url('admin-panel/add-new-service')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> Title</label>
                                                    <input type="text" id="title" class="form-control" name="title" placeholder="Title..."> </div>

                                                @if ($errors->has('title'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="strong">{{ $errors->first('title') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Service Photo</label>
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> Status</label>
                                                    <select class="form-control" name="status" >
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
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label"> Service Description</label>
                                                    <textarea id="description" class="form-control" name="body" placeholder="Description..." rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                        <div class="form-actions m-t-40">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        </div>
                                </form>
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
