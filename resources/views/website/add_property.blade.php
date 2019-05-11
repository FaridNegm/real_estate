@extends('website.app')

@section('title')
    Add New property
@endsection

@section('header')
    <link rel="stylesheet" type="text/css" href="{{url('css/style2.css')}}">
    {{--  <link rel="stylesheet" type="text/css"  href="{{url('css/dropzone.min.css')}}">  --}}

    <style>
        .form-control{
            height: 45px;
            border-color: #e8e7e7;
            border-radius: 0px;
            font-size: 13px;
        }
        .strong{
            color: red;
        }
        .alertify .ajs-body .ajs-content{
            font-size: 12px;
            color: #222;
        }
        .alertify.ajs-movable:not(.ajs-maximized) .ajs-header{
            color: green;
            font-size: 15px;
        }
    </style>

@endsection


@section('content')

    <!-- pageWrapper -->
	<div id="pageWrapper">
		<!-- pageMenuPushWrap -->
		<div class="pageMenuPushWrap pageMenuPushWrap1">
			<!-- bgBaseWrap -->
			<div class="bgBaseWrap">
                <!-- pageHeader -->
                    <header id="pageHeader" class="bgWhite offsetBottom">
                        <!-- pageHeaderWrap -->
                        <div class="pageHeaderWrap">
                            <!-- headerTopBar -->
                            <div class="bgLightDark headerTopBar textLightDark">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-4">
                                            <time datetime="2011-01-12" class="TopBarTime">{{ date('Y-F-d -  h:m A') }}</time>
                                        </div>
                                        <div class="col-xs-6 col-sm-8 text-right">
                                            <!-- topBarPanelList -->
                                            <ul class="list-unstyled topBarPanelList">
                                                <li class="hidden-xs">
                                                    <!-- topBarPanelListSocial -->
                                                    <ul class="list-unstyled socialNetworks topBarPanelListSocial">
                                                        @foreach (\App\siteSetting::all() as $setting)
                                                            <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                            <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fab fa-google"></i></a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li>
                                                    <!-- topBarPanelListDropdown -->
                                                    <div class="dropdown topBarPanelListDropdown">
                                                        <button class="dropdown-toggle buttonReset" type="button" id="dropdownDol" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD ($)<span class="caret"></span></button>
                                                        <!-- dropdownDol -->
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownDol">
                                                            <li><a href="#">USD</a></li>
                                                            <li><a href="#">EURO</a></li>
                                                            <li><a href="#">YTL</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <!-- topBarPanelListDropdown -->
                                                    <div class="dropdown topBarPanelListDropdown">
                                                        <button class="dropdown-toggle buttonReset" type="button" id="dropdownLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">English<span class="caret"></span></button>
                                                        <!-- dropdownLang -->
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownLang">
                                                            <li><a href="#">English</a></li>
                                                            <li><a href="#">Turkish</a></li>
                                                            <li><a href="#">French</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <!-- headerHolder -->
                                <div class="headerHolder">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-3">
                                            <!-- logo -->
                                            <div class="logo"><a href="{{ url('/') }}"><img src="{{ url('website') }}/images/logo.png" alt="LemanHouse"></a></div>
                                        </div>
                                        <div class="col-xs-6 col-sm-9 d-flex">
                                            <!-- headerContactList -->
                                            <ul class="list-unstyled headerContactList">
                                                @foreach (\App\siteSetting::all() as $setting)
                                                    <li>
                                                        <a href="tel:+12463450695" class="icn icnBubble noShrink text-info"><i class="fi flaticon-24-hours"></i></a>
                                                        <div class="descr hidden-xs">
                                                            <strong class="fwNormal elemenBlock text"><a href="tel:+12463450695">{{ $setting->phones }}</a></strong>
                                                            <strong class="fwNormal elemenBlock text"><a>{{ $setting->email }}</a></strong>
                                                        </div>
                                                    </li>
                                                    <li class="hidden-xs">
                                                        <span class="icn icnJumping text-info noShrink"><i class="fi flaticon-pin-1"></i></span>
                                                        <div class="descr">
                                                            <strong class="fwNormal elemenBlock text">{{ $setting->address }} <br>{{ $setting->fax }}</strong>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            <!-- headerSearchForm -->
                                            <form action="{{ url('/global-search')}}" method="post" class="headerSearchForm">
                                                {{ csrf_field()}}

                                                <a class="headerSearchOpener roundedCircle bgWhite" role="button" data-toggle="collapse" href="#headerSearchFormcollapse" aria-expanded="false" aria-controls="headerSearchFormcollapse"><i class="fi flaticon-search btnOpen"></i><i class="fas fa-times btnClose"></i></a>
                                                <!-- headerSearchFormcollapse -->
                                                <div class="collapse searchFormcollapse bgWhite" id="headerSearchFormcollapse" aria-expanded="false" role="form">
                                                    <div class="form-group form-group-lg">



                                                            <input type="search" id="s" class="form-control elemenBlock" name="general_search" placeholder="search..." style="padding-left: 55px;">

                                                            <button type="submit" class="btn btnSecondary text-uppercase fontNeuron" style="background-color: transparent;color: #1b1919;border-color: transparent;font-size: 20px;position: absolute;left: 15px;top: 2px;">
                                                                <i class="fi flaticon-search"></i>
                                                            </button>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- pageNav -->
                                <nav id="pageNav" class="navbar navbar-default pageNav1">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header hidden-sm hidden-md hidden-lg">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <!-- navbar collapse -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <div class="navigation-wrapper">
                                            <strong class="h elemenBlock h4 textWhite text-center hidden-sm hidden-md hidden-lg menuTitle fontNeuron" id="menu-title">Menu</strong>
                                            <!-- pageMainNav -->
                                            <ul class="nav navbar-nav pageMainNav pageMainNav1">
                                                <li class="active">
                                                    <a href="{{url('/')}}" class="">Home</a>
                                                </li>

                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle">Type<span class="caret"></span></a>
                                                    <div class="frame-wrap">
                                                        <div class="frame">
                                                            <ul class="dropdown-menu pageMainNavDropdown pageMainNavDropdown1">
                                                                <li><a href="{{url('Flat')}}">Flat</a></li>
                                                                <li><a href="{{url('Villa')}}">Villa</a></li>
                                                                <li><a href="{{url('Chalet')}}">Chalet</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle">Status<span class="caret"></span></a>
                                                    <div class="frame-wrap">
                                                        <div class="frame">
                                                            <ul class="dropdown-menu pageMainNavDropdown pageMainNavDropdown1">
                                                                <li><a href="{{url('Sale')}}">For Sale</a></li>
                                                                <li><a href="{{url('Rent')}}">For Rent</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle">Price<span class="caret"></span></a>
                                                    <div class="frame-wrap">
                                                        <div class="frame">
                                                            <ul class="dropdown-menu pageMainNavDropdown pageMainNavDropdown1">
                                                                <li><a href="{{url('Between-than-0-and-200000')}}">Between than 0 and 200000</a></li>
                                                                <li><a href="{{url('Between-than-200000-and-500000')}}">Between than 200000 and 500000</a></li>
                                                                <li><a href="{{url('Bigger-than-500000')}}">Bigger than 500000 </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <a href="{{ url('contact') }}">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- userOptions -->
                                    <div class="userOptions">
                                        <!-- UserLinksList -->
                                        <ul class="list-unstyled UserLinksList">
                                            <li>
                                                <a href="#popup1" class="lightbox">
                                                    <i class="fi flaticon-social icn"></i>
                                                    <strong class="text fwNormal hidden-xs hidden-sm">Login</strong>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#popup1" class="lightbox">
                                                    <i class="fi flaticon-edit icn"></i>
                                                    <strong class="text fwNormal hidden-xs hidden-sm">Register</strong>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- headerModalOpener -->
                                        <a href="{{url('add-new-property')}}" class="headerModalOpener text-uppercase fontNeuron fwBold"><i class="openerIcon"></i> Submit Property</a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </header>

                <!-- main -->
				<main>
                    
					<!-- Submit Property start -->
                        <div class="content-area-7 submit-property">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="submit-address">


                                            <form action="{{url('add-property')}}" method="post" enctype="multipart/form-data" >

                                                {{csrf_field()}}
                                                <div class="main-title-2">
                                                    <h1><span>Basic</span> Information</h1>
                                                </div>

                                                <input type="hidden" name="status_hidden" value="Not Active">

                                                <div class="search-contents-sidebar mb-30">

                                                    <div class="form-group">
                                                        <label>Property Title</label>
                                                        <input type="text" class="input-text" name="title" placeholder="Property Title" value="{{old('title')}}">
                                                         @if ($errors->has('title'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('title') }}</strong>
                                                                                    </span>
                                                @endif
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Status</label>
                                                                <span><i class="fa fa-angle-down" style="position: absolute;top: 50px; right: 20px;"></i></span>
                                                                <select class="form-control" name="rent" value="{{old('rent')}}">
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

                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Type</label>
                                                                <span><i class="fa fa-angle-down" style="position: absolute;top: 50px; right: 20px;"></i></span>
                                                                <select class="form-control" name="type" value="{{old('type')}}">
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
                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Price</label>
                                                                <input type="text" class="input-text" name="price" placeholder="Price" value="{{old('price')}}">
                                                                 @if ($errors->has('price'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('price') }}</strong>
                                                                                    </span>
                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Square</label>
                                                                <input type="text" class="input-text" name="square" placeholder="Square" value="{{old('square')}}">
                                                                 @if ($errors->has('square'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('square') }}</strong>
                                                                                    </span>
                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Rooms</label>
                                                                <span><i class="fa fa-angle-down" style="position: absolute;top: 50px; right: 20px;"></i></span>
                                                                <select class="form-control" name="rooms" value="{{old('rooms')}}">
                                                                    <option selected>N. Rooms</option>
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

                                                        <div class="col-md-3 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Bathroom</label>
                                                                <span><i class="fa fa-angle-down" style="position: absolute;top: 50px; right: 20px;"></i></span>
                                                                <select class="form-control" name="bathroom" value="{{old('bathroom')}}">
                                                                    <option selected>N. Bathroom</option>
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
                                                </div>

                                                <div class="main-title-2">
                                                    <h1><span>Property</span> Gallery</h1>
                                                    <div id="myDropZone" class="dropzone dropzone-design mb-50" style="border: 1px solid rgb(232, 231, 231);">
                                                        <div class="dz-success-mark dz-message" >
                                                            <input type="file" class="input-text" name="image" value="{{old('image')}}">
                                                             @if ($errors->has('image'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('image') }}</strong>
                                                                                    </span>
                                                @endif
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="main-title-2">
                                                    <h1><span>Location</span></h1>
                                                </div>
                                                <div class="row mb-30 ">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input type="text" class="input-text" name="address"  placeholder="Address" value="{{old('address')}}">
                                                             @if ($errors->has('address'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('address') }}</strong>
                                                                                    </span>
                                                @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <span><i class="fa fa-angle-down" style="position: absolute;top: 50px; right: 20px;"></i></span>
                                                            <select data-placeholder="Choose City" class="form-control" name="city" value="{{old('city')}}">
                                                                <option value="القاهره" selected>القاهره</option>
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
                                                                    <option value="جنوب سيناء ">جنوب سيناء</option>
                                                                    <option value="السويس">السويس</option>
                                                                    <option value="الأقصر">الأقصر</option>
                                                                    <option value="الغربيه">الغربيه</option>
                                                                    <option value="الدقهليه">الدقهليه</option>
                                                                    <option value="السادس من اكتوبر">السادس من اكتوبر</option>
                                                            </select>
                                                             @if ($errors->has('city'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('city') }}</strong>
                                                                                    </span>
                                                @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group">
                                                            <label>Postal Code</label>
                                                            <input type="text" class="input-text" name="zip"  placeholder="Postal Code" value="{{old('zip')}}">
                                                             @if ($errors->has('zip'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('zip') }}</strong>
                                                                                    </span>
                                                @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="main-title-2">
                                                    <h1><span>PROPERTY</span> Description</h1>
                                                </div>

                                                <div class="row mb-30">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Property Description</label>
                                                            <textarea class="input-text" name="description" placeholder="Property Description.....">{{old('description')}}</textarea>
                                                             @if ($errors->has('description'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('description') }}</strong>
                                                                                    </span>
                                                @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="main-title-2">
                                                    <h1><span>Contact</span> Details</h1>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" class="input-text" name="name" placeholder="Name" value="{{old('name')}}">
                                                             @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('name') }}</strong>
                                                                                    </span>
                                                @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="input-text" name="email" placeholder="Email" value="{{old('email')}}">
                                                             @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('email') }}</strong>
                                                                                    </span>
                                                @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <label>Phone (optional)</label>
                                                            <input type="text" class="input-text" name="phone"  placeholder="Phone" value="{{old('Phone')}}">
                                                             @if ($errors->has('phone'))
                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong class="strong">{{ $errors->first('phone') }}</strong>
                                                                                    </span>
                                                @endif
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 order2">
                                                        <button type="submit" class="btn btnSecondary text-uppercase fontNeuron" style="width:20%;display:block;margin:20px auto 50px; height:60px;font-size: 25px;">SAVE</button>
                                                    </div>

                                                </div>
                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Submit Property end -->
				</main>
			</div>

		</div>
	</div>

@endsection


@section('footer')

    {{--  <script src="{{url('js/dropzone.min.js')}}"></script>  --}}

@endsection
