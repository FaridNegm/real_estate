@extends('admin.app')

@section('title')
    Add New User
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
                    <h4 class="page-title">Add New User</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{url('admin-panel')}}">Dashboard</a></li>
                        <li class="active">Add New User</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <form action="{{url('admin-panel/add-users')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> Name</label>
                                                    <input type="text" id="name" class="form-control" name="name" placeholder="Name..."> </div>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('name') }}</strong>
                                                                                    </span>
                                                @endif
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input type="text" id="email" class="form-control" name="email" placeholder="Email..."> </div>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('email') }}</strong>
                                                                                    </span>
                                                @endif
                                            </div>
                                            <!--/span-->
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> Password</label>
                                                    <input type="password" id="password" class="form-control" name="password" placeholder="Password..."> </div>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('password') }}</strong>
                                                                                    </span>
                                                @endif
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> Status</label>
                                                    <select class="form-control" name="status" >
                                                        <option value="Admin">Admin</option>
                                                        <option value="User">User</option>
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
                                                    <label class="control-label">Facebook</label>
                                                    <input type="text" id="facebook" class="form-control" name="facebook" placeholder="Facebook..."> </div>

                                                @if ($errors->has('facebook'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('facebook') }}</strong>
                                                                                    </span>
                                                @endif
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">twitter</label>
                                                    <input type="text" id="twitter" class="form-control" name="twitter" placeholder="twitter..."> </div>

                                                @if ($errors->has('twitter'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('twitter') }}</strong>
                                                                                    </span>
                                                @endif
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">instegram</label>
                                                    <input type="text" id="instegram" class="form-control" name="instegram" placeholder="instegram..."> </div>

                                                @if ($errors->has('instegram'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('instegram') }}</strong>
                                                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">User Photo</label>
                                                    <input type="file" name="image" class="form-control img">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> User Description</label>
                                                    <textarea id="description" class="form-control" name="description" placeholder="Description..." rows="5"></textarea>
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
