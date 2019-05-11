@extends('website.app')

@section('title')
    Home
@endsection

@section('header')


@endsection


@section('content')

    @foreach ($details as $detail)

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
                        <!-- findFormBlock -->
                        <form action="{{url('/search')}}" method="post" class="bgWhite findFormBlock hasShadow findFormBlock findFormBlock2 bgLightDark hasShadowTop offsetHeaderTop" style="margin-top: 20px;">
                            {{csrf_field()}}

                            <div class="container">
                                <h2 class="fontNeuron">SEARCH YOUR <span class="text-info">HOME</span></h2>
                                <hr class="sep elemenBlock">
                                <div class="row">

                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <select data-placeholder="Search By Rent" class="chosen-select" name="rent">
                                                <option selected>Search By Rent</option>
                                                <option value="Ownership">Ownership</option>
                                                <option value="Rent">Rent</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <select data-placeholder="Search By Type" class="chosen-select" name="type">
                                                <option selected>Search By Type</option>
                                                <option value="Flat">Flat</option>
                                                <option value="Villa">Villa</option>
                                                <option Chalet="Chalet">Chalet</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <select data-placeholder="Search By Location" class="chosen-select" name="place">
                                                    <option selected>Search By Location</option>
                                                    <option value="القاهره">القاهره</option>
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
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <select data-placeholder="Search By N. Rooms" class="chosen-select" name="rooms">
                                                <option selected>Search By N. Rooms</option>
                                                {{ $i = "" }}
                                                @for ($i == 0 ; $i <= 50 ; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <!-- orderRow -->
                                <div class="row orderRow">
                                    <div class="col-xs-12 order2">
                                        <input type="submit" class="btn btnSecondary text-uppercase fontNeuron" style="width:20%;display:block;margin:20px auto 50px;" value="SEARCH" />
                                    </div>
                                </div>
                            </div>
                        </form>

                        <section class="container">
                            <!-- contentFiltersHeadingWrap -->
                            <header class="contentFiltersHeadingWrap row">
                                <div class="col-xs-12 col col-sm-8">
                                    <!-- breadcrumb -->
                                    <ol class="breadcrumb breadcrumb1">
                                        <li><a href="#">Home</a></li>
                                        <li class="active">{{ $detail->name }}</li>
                                    </ol>
                                    <h1 class="fontNeuron">{{ $detail->name }} <a href="#" class="btn btnSmall btn-success fontBase">For Sale</a></h1>
                                    <!-- captionAddress -->
                                    <address class="captionAddress">
                                        <span class="icn"><i class="fi flaticon-pin-1"></i></span>
                                        <p>Location: {{ $detail->place }}</p>
                                    </address>
                                </div>
                                <div class="col-xs-12 col-sm-4 justify-end">
                                    <!-- captionActionsList -->
                                    <ul class="list-unstyled viewFilterLinks">
                                        <li><a href="#"><i class="fi flaticon-repeat"></i></a></li>
                                        <li>
                                            <a href="#">
                                                <i class="fi flaticon-share"></i>
                                            </a>
                                            <!-- postColumnSocial -->
                                        </li>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fi flaticon-printer"></i></a></li>
                                    </ul>
                                    <strong class="elemenBlock price fwSemi fontNeuron w100">{{ $detail->price }}</strong>
                                    <strong class="elemenBlock fwNormal fontNeuron subtitle w100">Pound</strong>
                                </div>
                            </header>
                        </section>
                        <!-- tabs -->
                        <section class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="tabSetholder tabschanges">
                                        <ul class="list-unstyled tabset">
                                            <li class="active">
                                                <a href="#tab1-0"><span class="fi flaticon-photo"></span>View Photos</a>
                                            </li>
                                            <li>
                                                <a href="#tab3-0"><span class="fi flaticon-placeholder"></span>Map View</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="tab1-0">
                                                <div class="slick-thumbnailslider slickSlider postColumnImageSlider">
                                                    <div>
                                                        <div class="imgHolder">
                                                            <a href="#">
                                                                <img src="{{ url('admin/images/build/'.$detail->image) }}" alt="image description">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slick-carouselnav slickSlider postColumnImageSlider">
                                                    <div>
                                                        <div class="imgHolder">
                                                            <a href="#">
                                                                <img src="{{ url('website') }}/images/tabsliderthumbnail-img01.jpg" alt="image description">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="tab3-0">
                                                <iframe src="{{ url('website') }}/https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d39733.11938503574!2d-0.1627775524531611!3d51.5073456865004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m5!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+United+Kingdom!3m2!1d51.5073509!2d-0.1277583!4m0!5e0!3m2!1sen!2s!4v1530281946864" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- twoColumns -->
                        <div class="twoColumns fullwidth container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <!-- content -->
                                    <article id="content">
                                        <!-- boxPanelBlock -->
                                        <section id="Detail" class="accountData">
                                            <div class="head">
                                                <h2 class="fontNeuron">Detail</h2>
                                            </div>
                                            <ul class="listpanel-head">
                                                <li>Area<span>{{ $detail->place }}</span></li>
                                                <li>Rent<span>{{ $detail->rent }}</span></li>
                                                <li>Square<span>{{ $detail->square }}</span></li>
                                                <li>Type<span>{{ $detail->type }}</span></li>
                                                <li>Rooms<span>{{ $detail->rooms }}</span></li>
                                            </ul>
                                            <div class="listpanel-content">
                                                <ul>
                                                    <li><span>Property ID</span><span class="righttext">: {{ $detail->id }}</span></li>
                                                    <li><span>Garage Size</span><span class="righttext">: 580 SqFt</span></li>
                                                    <li><span>Property Size</span><span class="righttext">: {{ $detail->square }}</span></li>
                                                    <li><span>Deposit</span><span class="righttext">: 20%</span></li>
                                                    <li><span>Pool Size</span><span class="righttext">: 896 Sqft</span></li>
                                                    <li><span>Furniture Status</span><span class="righttext">: Furnished (Furnished)</span></li>
                                                </ul>
                                                <ul>
                                                    <li><span>Last remodel year</span><span class="righttext">: 2017</span></li>
                                                    <li><span>Additional Rooms</span><span class="righttext">: Guest Bath</span></li>
                                                    <li><span>Amenities</span><span class="righttext">: Clubhouse</span></li>
                                                    <li><span>Equipment</span><span class="righttext">: Grill - Gas</span></li>
                                                    <li><span>Heating Type</span><span class="righttext">: Combi (Natural Gas)</span></li>
                                                    <li><span>Available for Loan</span><span class="righttext">: Yes</span></li>
                                                </ul>
                                            </div>
                                        </section>

                                        <section class="accountData">
                                            <div class="head">
                                            <h4 class="fontNeuron">Description</h4>
                                            </div>
                                            <p>{{ $detail->long_desc }}</p>
                                        </section>

                                        <section class="accountData aboutBlock overlaychange">
                                            <div class="head">
                                            <h4 class="fontNeuron">Property Video</h4>
                                            </div>
                                            <div class="video-holder overlay">
                                                <img src="{{ url('website') }}/images/video-img02.jpg" alt="image description" class="img-responsive">
                                                <a href="#" class="video-play"><i class="fi flaticon-play-button"></i></a>
                                            </div>
                                        </section>
                                        {{--  <section class="accountData floorplan">
                                            <div class="head">
                                                <h4 class="fontNeuron">Floor Plans</h4>
                                                <div class="btnArea">
                                                <a href="#" class="btn btn-info">First Floor</a>
                                                <a href="#" class="btn btn-lighter">Second Floor</a>
                                                </div>
                                            </div>
                                            <figure>
                                                <img src="{{ url('website') }}/images/floorplan-img.jpg" alt="image description">
                                            </figure>
                                            <div class="description">
                                                <p>Plan description. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                        </section>  --}}

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                                <section class="accountData ratingreviews">
                                                    <div class="head">
                                                        <h4 class="fontNeuron">Ratings & Reviews</h4>
                                                    </div>
                                                    {{--  <div class="ratingarea">
                                                        <div class="hb-ratingandskillbar">
                                                            <ul class="hb-ratingbox">
                                                                <li>
                                                                    <span class="hb-stars">
                                                                        <span></span>
                                                                    </span>
                                                                    <em>3</em>
                                                                </li>
                                                                <li>
                                                                    <span class="hb-stars">
                                                                        <span></span>
                                                                    </span>
                                                                    <em>4</em>
                                                                </li>
                                                                <li>
                                                                    <span class="hb-stars">
                                                                        <span></span>
                                                                    </span>
                                                                    <em>3</em>
                                                                </li>
                                                                <li>
                                                                    <span class="hb-stars">
                                                                        <span></span>
                                                                    </span>
                                                                    <em>2</em>
                                                                </li>
                                                                <li>
                                                                    <span class="hb-stars">
                                                                        <span></span>
                                                                    </span>
                                                                    <em>0</em>
                                                                </li>
                                                            </ul>
                                                            <div id="hb-ourskill" class="hb-ourskill hb-skillgroup">
                                                                <div class="hb-skill">
                                                                    <div class="hb-skillholder" data-percent="95%">
                                                                    <div class="hb-skillbar"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="hb-skill">
                                                                    <div class="hb-skillholder" data-percent="80%">
                                                                        <div class="hb-skillbar"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="hb-skill">
                                                                    <div class="hb-skillholder" data-percent="50%">
                                                                        <div class="hb-skillbar"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="hb-skill">
                                                                    <div class="hb-skillholder" data-percent="90%">
                                                                        <div class="hb-skillbar"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="hb-skill">
                                                                    <div class="hb-skillholder" data-percent="0%">
                                                                        <div class="hb-skillbar"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="overallrating pull-right">
                                                            <div class="overallratingbox">
                                                                <span class="hb-stars">
                                                                    <span></span>
                                                                </span>
                                                                <h3>4.3</h3>
                                                                <em>Overall rating</em>
                                                            </div>
                                                        </div>
                                                    </div>  --}}
                                                    <div class="reviews">
                                                        <h4>3 Reviews</h4>
                                                        <ul class="hb-commentlist">
                                                            <li>
                                                                <div class="hb-comment">
                                                                    <figure class="hb-author-img">
                                                                        <a href="agencies-detail.html"><img src="{{ url('website') }}/images/comment-img.jpg" alt="image description"></a>
                                                                    </figure>
                                                                    <div class="hb-comment-box">
                                                                        <div class="hb-comment-head">
                                                                            <div class="pull-left">
                                                                                <h4>john Milk</h4>
                                                                            </div>
                                                                            <div class="pull-right">
                                                                                <span class="hb-stars">
                                                                                    <span></span>
                                                                                </span>
                                                                                <em>December 25, 2013</em>
                                                                            </div>
                                                                        </div>
                                                                        <div class="description">
                                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="hb-comment">
                                                                    <figure class="hb-author-img">
                                                                        <a href="agencies-detail.html"><img src="{{ url('website') }}/images/comment-img.jpg" alt="image description"></a>
                                                                    </figure>
                                                                    <div class="hb-comment-box">
                                                                        <div class="hb-comment-head">
                                                                            <div class="pull-left">
                                                                                <h4>Ali Tufan</h4>
                                                                            </div>
                                                                            <div class="pull-right">
                                                                                <span class="hb-stars">
                                                                                    <span></span>
                                                                                </span>
                                                                                <em>December 25, 2013</em>
                                                                            </div>
                                                                        </div>
                                                                        <div class="description">
                                                                            <p>Downtown Melissa! Located on a large lot with trees and detached 30×30 workshop-2 car garage, wood burning stove located in shop.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="hb-comment">
                                                                    <figure class="hb-author-img">
                                                                        <a href="agencies-detail.html"><img src="{{ url('website') }}/images/comment-img.jpg" alt="image description"></a>
                                                                    </figure>
                                                                    <div class="hb-comment-box">
                                                                        <div class="hb-comment-head">
                                                                            <div class="pull-left">
                                                                                <h4>Robert Tufan</h4>
                                                                            </div>
                                                                            <div class="pull-right">
                                                                                <span class="hb-stars">
                                                                                    <span></span>
                                                                                </span>
                                                                                <em>December 25, 2013</em>
                                                                            </div>
                                                                        </div>
                                                                        <div class="description">
                                                                            <p>New AC, installed in February. Recently painted. New laminate wood floors in Kitchen and Bath. Nice country setting.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4">
                                                <section class="accountData contactFormPage">
                                                    <div class="head">
                                                    <h4 class="fontNeuron">Your Reviews</h4>
                                                    </div>
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Your Name" class="form-control">
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="email" placeholder="Email" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control" placeholder="comment"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <span>your rating: </span>
                                                            <span class="hb-stars">
                                                                <span></span>
                                                            </span>
                                                        </div>
                                                        <button type="submit" class="btn btnDark fontNeuron buttonXL">SUBMIT</button>
                                                    </form>
                                                </section>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="col-xs-12">
                                    <header class="rowHead">
                                        <h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">SIMILAR</span> <span class="textSecondary">PROPERTIES</span></h1>
                                    </header>
                                </div>

                                @foreach ($similar_realestates as $similar_realestate)
                                    <div class="col-xs-12 col-sm-6 col-md-4 col isoCol {{ $similar_realestate->type }}">
                                        <!-- postColumn -->
                                        <article class="postColumn hasOver bgWhite">
                                            <div class="aligncenter">
                                                <div>
                                                    <div class="imgHolder">
                                                        <a href="{{ url('details-properties/'.$similar_realestate->id) }}">
                                                            <img src="{{ url('admin/images/build/'.$similar_realestate->image) }}" alt="image description" style="height: 250px;">
                                                        </a>
                                                    </div>
                                                </div>
                                                <a href="#" class="linkToFavourite roundedCircle bg-primary textWhite icnHeartBeatAnim"><i class="far fa-heart"></i></a>
                                            </div>

                                            <h2 class="fontNeuron text-capitalize"><a href="{{ url('details-properties/'.$similar_realestate->id.'/price/'.$similar_realestate->price) }}">{{ $similar_realestate->name }}</a></h2>
                                            <address>
                                                <p>{{str_limit( $similar_realestate->long_desc , 60)}}</p>
                                            </address>
                                            <span href="" class="btn btnSmall btn-primary text-capitalize">{{ $similar_realestate->created_at->diffForHumans() }}</span>
                                            <h3 class="fontNeuron fwSemi"><span class="textSecondary">{{ $similar_realestate->price }}</span> <span class="textUnit fwNormal">/ Pound</span></h3>
                                            <!-- postColumnFoot -->
                                            <footer class="postColumnFoot">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <strong class="fwNormal elemenBlock text-primary">Location</strong>
                                                        <strong class="fwNormal elemenBlock">{{ $similar_realestate->place }}</strong>
                                                    </li>
                                                    <li>
                                                        <strong class="fwNormal elemenBlock text-primary">Square</strong>
                                                        <strong class="fwNormal elemenBlock">{{ $similar_realestate->square }}</strong>
                                                    </li>
                                                    <li>
                                                        <strong class="fwNormal elemenBlock text-primary">Type</strong>
                                                        <strong class="fwNormal elemenBlock">{{ $similar_realestate->type }}</strong>
                                                    </li>
                                                    <li>
                                                        <strong class="fwNormal elemenBlock text-primary">N. Rooms</strong>
                                                        <strong class="fwNormal elemenBlock">{{ $similar_realestate->rooms }}</strong>
                                                    </li>
                                                </ul>
                                            </footer>
                                        </article>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </main>
                </div>
            </div>

        </div>

    @endforeach

@endsection


@section('footer')

@endsection
