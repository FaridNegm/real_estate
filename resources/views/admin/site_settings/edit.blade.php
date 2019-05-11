@extends('admin.app')

@section('title')
    Site Settings
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
                    <h4 class="page-title">Site Settings</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{url('admin-panel')}}">Dashboard</a></li>
                        <li class="active">Site Settings</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                @foreach($edit_site_setting as $setting)
                                <form action="{{url('admin-panel/settings/update/'.$setting->name)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> Name</label>
                                                    <input type="text" id="name" class="form-control" name="name" placeholder="Name..." value="{{$setting->name}}"> </div>

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
                                                    <input type="text" id="email" class="form-control" name="email" placeholder="Email..." value="{{$setting->email}}"> </div>

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
                                                    <label class="control-label"> Fax</label>
                                                    <input type="text" id="fax" class="form-control" name="fax" placeholder="Fax..." value="{{$setting->fax}}"> </div>

                                                @if ($errors->has('fax'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="strong">{{ $errors->first('fax') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> Address</label>
                                                    <input type="text" id="address" class="form-control" name="address" placeholder="Address..." value="{{$setting->address}}"> </div>

                                                @if ($errors->has('address'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="strong">{{ $errors->first('address') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> Phones</label>
                                                    <input type="text" id="phones" class="form-control" name="phones" placeholder="Phones..." value="{{$setting->phones}}"> </div>

                                                @if ($errors->has('phones'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="strong">{{ $errors->first('phones') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> Youtube</label>
                                                    <input type="text" id="youtube" class="form-control" name="youtube" placeholder="Youtube..." value="{{$setting->youtube}}"> </div>

                                                @if ($errors->has('youtube'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="strong">{{ $errors->first('youtube') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Facebook</label>
                                                    <input type="text" id="facebook" class="form-control" name="facebook" placeholder="Facebook..." value="{{$setting->facebook}}"> </div>

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
                                                    <input type="text" id="twitter" class="form-control" name="twitter" placeholder="twitter..." value="{{$setting->twitter}}"> </div>

                                                @if ($errors->has('twitter'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="strong">{{ $errors->first('twitter') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Behance</label>
                                                    <input type="text" id="behance" class="form-control" name="behance" placeholder="Behance..." value="{{$setting->behance}}"> </div>

                                                @if ($errors->has('behance'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="strong">{{ $errors->first('behance') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Site Image</label>
                                                    <input type="hidden" name="image_hidden" value="{{$setting->site_image}}">
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label"> Description</label>
                                                    <textarea id="description" class="form-control" name="description" placeholder="Description..." rows="5">{{$setting->description}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group text-center">
                                                    <img src="{{url('admin/images/sitesetting/'.$setting->site_image)}}" width="40%" height="120px" style="margin-top: 20px;">
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
        <!-- /.container-fluid -->
    </div>

@endsection

@section('footer')

@endsection
