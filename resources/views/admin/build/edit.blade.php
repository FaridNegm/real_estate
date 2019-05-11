@extends('admin.app')

@section('title')
    Edit Realestate: @foreach($edit_build as $build) {{$build->name}} @endforeach
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
                    <h4 class="page-title">Edit Realestate: @foreach($edit_build as $build) <span style="color: royalblue;text-decoration: underline;">{{$build->name}}</span> @endforeach</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="{{url('admin-panel')}}">Dashboard</a></li>
                        <li class="active">Edit Realestate: @foreach($edit_build as $build) {{ $build->name }} @endforeach</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                @foreach($edit_build as $build)
                                    <form action="{{url('admin-panel/realestate/edit/'.$build->id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> Name</label>
                                                    <input type="text" id="name" class="form-control" name="name" placeher="Name..." value="{{ $build->name }}"> </div>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('name') }}</strong>
                                                                                    </span>
                                                @endif
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Price</label>
                                                    <input type="text" id="price" class="form-control" name="price" placeher="Price..." value="{{ $build->price }}"> </div>

                                                @if ($errors->has('price'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('price') }}</strong>
                                                                                    </span>
                                                @endif
                                            </div>
                                            <!--/span-->
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> Rent</label>
                                                    <select class="form-control" name="rent">
                                                        <option value="{{ $build->rent }}" style="background-color: #41b3f9;color:#FFF;">{{ $build->rent }}</option>
                                                        <option value="Ownership">Ownership</option>
                                                        <option value="Rent">Rent</option>
                                                    </select>
                                                    @if ($errors->has('rent'))
                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong class="strong">{{ $errors->first('rent') }}</strong>
                                                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> Type</label>
                                                    <select class="form-control" name="type">
                                                        <option value="{{ $build->type }}" style="background-color: #41b3f9;color:#FFF;">{{ $build->type }}</option>
                                                        <option value="Flat">Flat</option>
                                                        <option value="Villa">Villa</option>
                                                        <option Chalet="Chalet">Chalet</option>
                                                    </select>
                                                    @if ($errors->has('type'))
                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong class="strong">{{ $errors->first('type') }}</strong>
                                                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> Place</label>
                                                    <select class="form-control js-example-basic-single" name="place">
                                                        <option value="{{ $build->place }}" selected>{{ $build->place }}</option>
                                                        <option value="القاهره">القاهره  </option>
                                                        <option value="الجيزة">الجيزة  </option>
                                                        <option value="الإسماعيلية">الإسماعيلية</option>
                                                        <option value="كفر ">كفر الشيخ</option>
                                                        <option value="مطروح">مطروح</option>
                                                        <option value="المنيا">المنيا</option>
                                                        <option value="المنوفية">المنوفية</option>
                                                        <option value="الوادي ">الوادي الجديد</option>
                                                        <option value="شمال سيناء">شمال سيناء</option>
                                                        <option value="بورسعيد">بورسعيد</option>
                                                        <option value="القليوبية">القليوبية</option>
                                                        <option value="قنا">قنا</option>
                                                        <option value="البحر الأحمر">البحر الأحمر</option>
                                                        <option value="الشرقية">الشرقية</option>
                                                        <option value="سوهاج">سوهاج</option>
                                                        <option value="جنوب ">جنوب سيناء</option>
                                                        <option value="السويس">السويس</option>
                                                        <option value="الأقصر">الأقصر</option>
                                                        <option value="الغربيه">الغربيه</option>
                                                        <option value="الدقهليه">الدقهليه</option>
                                                        <option value="السادس من اكتوبر">السادس من اكتوبر</option>
                                                    </select>
                                                    @if ($errors->has('place'))
                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong class="strong">{{ $errors->first('place') }}</strong>
                                                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> N. Rooms</label>
                                                    <select class="form-control" name="rooms">
                                                        <option value="{{ $build->rooms }}" style="background-color: #41b3f9;color:#FFF;">{{ $build->rooms }}</option>
                                                        {{ $i = "" }}
                                                        @for ($i == 0 ; $i <= 50 ; $i++)
                                                            <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                    @if ($errors->has('rooms'))
                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong class="strong">{{ $errors->first('rooms') }}</strong>
                                                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> Status</label>
                                                    <select class="form-control" name="status">
                                                        <option value="{{ $build->status }}" style="background-color: #41b3f9;color:#FFF;">{{ $build->status }}</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Not Active">Not Active</option>
\                                                    </select>
                                                    @if ($errors->has('status'))
                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong class="strong">{{ $errors->first('status') }}</strong>
                                                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <!--/span-->

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Square</label>
                                                    <input type="text" id="square" class="form-control" name="square" placeher="Square..." value="{{ $build->square }}"> </div>

                                                @if ($errors->has('square'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('square') }}</strong>
                                                                                    </span>
                                                @endif
                                            </div>

                                            <!--/span-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Realestate Image</label>
                                                        <input type="hidden" name="image_hidden" value="{{ $build->image }}">
                                                        <input type="file" name="image" class="form-control img">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">User Name</label>
                                                        <input type="text" id="user_name" class="form-control" name="user_name" placeholder="User name" value="{{ $build->user_name }}"> </div>

                                                    @if ($errors->has('user_name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong class="strong">{{ $errors->first('user_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input type="email" id="email" class="form-control" name="email" placeholder="Email" value="{{ $build->email }}"> </div>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="strong">{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Address</label>
                                                    <input type="text" id="address" class="form-control" name="address" placeholder="Address" value="{{ $build->address }}"> </div>

                                                @if ($errors->has('address'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="strong">{{ $errors->first('address') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Phone</label>
                                                    <input type="text" id="phone" class="form-control" name="phone" placeholder="Phone" value="{{ $build->phone }}"> </div>

                                                @if ($errors->has('phone'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="strong">{{ $errors->first('phone') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Zip</label>
                                                    <input type="text" id="zip" class="form-control" name="zip" placeholder="Zip" value="{{ $build->zip }}"> </div>

                                                @if ($errors->has('zip'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="strong">{{ $errors->first('zip') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> N. Bathoom</label>
                                                    <select class="form-control" name="bathroom">
                                                        <option value="{{ $build->bathroom }}">{{ $build->bathroom }}</option>
                                                        {{ $i = "" }}
                                                        @for ($i == 0 ; $i <= 5 ; $i++)
                                                            <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                    @if ($errors->has('bathroom'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong class="strong">{{ $errors->first('bathroom') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label"> Realestate Description</label>
                                                    <textarea id="description" class="form-control" name="description" placeher="Description..." rows="5">{{ $build->long_desc }}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <img src="{{url('admin/images/build/'.$build->image)}}" class="img-responsive" style="width:200px; height: 150px;border-radius: 5px;"/>
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

