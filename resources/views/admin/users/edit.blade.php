@extends('admin.app')

@section('title')
    Edit User: @foreach($edit_user as $user) {{$user->name}} @endforeach
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
                    <h4 class="page-title">Edit User: @foreach($edit_user as $user) <span style="color: royalblue;text-decoration: underline;">{{$user->name}}</span> @endforeach</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{url('admin-panel')}}">Dashboard</a></li>
                        <li class="active">Edit User: @foreach($edit_user as $user) {{$user->name}} @endforeach</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                @foreach($edit_user as $user)
                                    <form action="{{url('admin-panel/users/edit/'.$user->id)}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"> Name</label>
                                                        <input type="text" id="name" class="form-control" name="name" placeholder="Name..." value="{{$user->name}}">
                                                    </div>

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
                                                        <input type="text" id="email" class="form-control" name="email" placeholder="Email..." value="{{$user->email}}">
                                                    </div>

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
                                                        <select class="form-control" name="status">
                                                            <option value="{{$user->status}}">{{$user->status}}</option>
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
                                                        <input type="text" id="facebook" class="form-control" name="facebook" placeholder="Facebook..." value="{{$user->facebook}}">
                                                    </div>

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
                                                        <input type="text" id="twitter" class="form-control" name="twitter" placeholder="twitter..." value="{{$user->twitter}}">
                                                    </div>

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
                                                        <input type="text" id="instegram" class="form-control" name="instegram" placeholder="instegram..." value="{{$user->instegram}}">
                                                    </div>

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
                                                        <input type="hidden" name="image_hidden" value="{{$user->image}}">
                                                        <input type="file" name="image" class="form-control">
                                                    </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label"> User Description</label>
                                                        <textarea id="description" class="form-control" name="description" placeholder="Description..." rows="5">{{$user->description}}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group text-center">
                                                        <img src="{{url('admin/images/users/'.$user->image)}}" style="width:200px; height: 150px;border-radius: 5px;">
                                                    </div>
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
    </div>

@endsection

@section('footer')

@endsection

