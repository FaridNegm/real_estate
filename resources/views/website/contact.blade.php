@extends('website.app')

@section('title')
    Contact Us
@endsection

@section('header')
    <style>
        a{
            cursor: pointer;
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

					<!-- content -->
					@foreach ($contacts as $contact)
                        <section id="content" class="container pabIndent">
                            <!-- contentFiltersHeadingWrap -->
                            <header class="contentFiltersHeadingWrap row">
                                <div class="col-xs-12 col-sm-10">
                                    <!-- breadcrumb -->
                                    <ol class="breadcrumb breadcrumb1">
                                        <li><a href="/">Home</a></li>
                                        <li class="active">Contact Us</li>
                                    </ol>
                                    <h1 class="fontNeuron">Contact Us</h1>
                                </div>
                                <div class="col-xs-12 col-sm-2">
                                    <!-- viewFilterLinks -->
                                    <ul class="list-unstyled viewFilterLinks">
                                        <li><a href="#"><i class="fi flaticon-share"></i></a></li>
                                        <li><a href="#"><i class="fi flaticon-printer"></i></a></li>
                                    </ul>
                                </div>
                            </header>
                            <!-- contactMain -->
                            <div class="contactMain">
                                <div class="row flexSameHeight">
                                    <div class="col-xs-12 col-sm-7 col-md-8">
                                        <!-- contactFormPage -->
                                        <div class="contactFormPage">
                                            <h4 class="fontNeuron">Send Us Message</h4>
                                            <form action="{{ url('/send-message')}}" method="post">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Your Name" name="name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-6">
                                                        <div class="form-group">
                                                            <input type="email" placeholder="Email" name="email" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-6">
                                                        <div class="form-group">
                                                            <input type="number" placeholder="Phone Number" name="phone" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Subject" name="subject" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="Message..." name="message"></textarea>
                                                </div>
                                                <button type="submit" class="btn btnDark fontNeuron buttonXL">SEND</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-5 col-md-4">
                                        <!-- contactInfoPage -->
                                        <div class="contactInfoPage">
                                            <h4 class="fontNeuron">Get In Touch</h4>
                                            <p>{{ str_limit($contact->description , 200) }}</p>
                                            <address class="adr">
                                                <div class="item">
                                                    <i class="fi flaticon-navigation"></i>
                                                    <span class="text">{{ $contact->address }}</span>
                                                </div>
                                                <div class="item">
                                                    <i class="fi flaticon-24-hours"></i>
                                                    <span class="text"><a>{{ $contact->phones }}</a></span>
                                                </div>
                                                <div class="item">
                                                    <i class="fi flaticon-mail"></i>
                                                    <span class="text"><a>{{ $contact->email }}</a></span>
                                                </div>
                                            </address>
                                            <ul class="socialNetworks list-unstyled">
                                                <li><a href="{{ $contact->facebook }}"target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="{{ $contact->facebook }}"target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="{{ $contact->facebook }}"target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="{{ $contact->facebook }}"target="_blank"><i class="fab fa-pinterest"></i></a></li>
                                                <li><a href="{{ $contact->facebook }}"target="_blank"><i class="fab fa-dribbble"></i></a></li>
                                                <li><a href="{{ $contact->facebook }}"target="_blank"><i class="fab fa-google"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endforeach
				</main>
			</div>
		</div>

	</div>

@endsection


@section('footer')

@endsection
