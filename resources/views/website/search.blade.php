@extends('website.app')

@section('title')
    Search..
@endsection

@section('header')

    <style>
        .pagination > .active > a, .pagination > .active > a:hover, .pagination > .active > a:focus, .pagination > .active > span, .pagination > .active > span:hover, .pagination > .active > span:focus {
            z-index: 3;
            color: #13293d;
            background-color: #ffffff;
            border-color: #ffffff;
            cursor: default;
            width: 45px;
            height: 45px;
            padding: 10px;
            line-height: 21px;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            margin: 0px 10px;
        }
        .pagination > li > a, .pagination > li > span{
            z-index: 3;
            color: #13293d;
            background-color: #ffffff;
            border-color: #ffffff;
            cursor: pointer;
            width: 45px;
            height: 45px;
            padding: 10px;
            line-height: 21px;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            margin: 0px 10px;

            position: relative;
            float: left;
            padding: 6px 12px;
            line-height: 1.84615;
            text-decoration: none;
            color: #b2c7cc;
            background-color: #fff;
            border: 1px solid #ddd;
            margin-left: -1px;
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
					<!-- contentFiltersHeadingWrap -->
					<header class="contentFiltersHeadingWrap bgLightDark hasShadowTop text-center offsetHeaderTop">
						<div class="container">
							<!-- breadcrumb -->
							<ol class="breadcrumb breadcrumb1">
								<li><a href="/">Home</a></li>
								<li class="active">Listing Grid View</li>
							</ol>
							<h1 class="fontNeuron">Listing Grid</h1>
						</div>
					</header>
					<!-- twoColumns -->
					<section class="twoColumns indentTop container">
						<div class="row">
							<div class="col-xs-12 col-md-8 col-md-push-4">
								<!-- content -->
								<div id="content">

									<!-- isoContentHolder -->
									<div class="isoContentHolder">
										<div class="row">
											@if(count($builds) > 0)
                                                @foreach($builds as $build)
                                                <div class="col-xs-12 col-sm-6 col-md-6 col isoCol {{ $build->type }}">
                                                    <!-- postColumn -->
                                                    <article class="postColumn hasOver bgWhite">
                                                        <div class="aligncenter">
                                                            <div>
                                                                <div class="imgHolder">
                                                                    <a href="{{ url('details-properties/'.$build->id) }}">
                                                                        <img src="{{ url('admin/images/build/'.$build->image) }}" alt="image description" style="height: 250px;">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <a href="#" class="linkToFavourite roundedCircle bg-primary textWhite icnHeartBeatAnim"><i class="far fa-heart"></i></a>
                                                        </div>

                                                        <h2 class="fontNeuron text-capitalize"><a href="{{ url('details-properties/'.$build->id.'/price/'.$build->price) }}">{{ $build->name }}</a></h2>
                                                        <address>
                                                            <p>{{str_limit( $build->long_desc , 60)}}</p>
                                                        </address>
                                                        <span href="" class="btn btnSmall btn-primary text-capitalize">{{ $build->created_at->diffForHumans() }}</span>
                                                        <h3 class="fontNeuron fwSemi"><span class="textSecondary">{{ $build->price }}</span> <span class="textUnit fwNormal">/ Pound</span></h3>
                                                        <!-- postColumnFoot -->
                                                        <footer class="postColumnFoot">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <strong class="fwNormal elemenBlock text-primary">Location</strong>
                                                                    <strong class="fwNormal elemenBlock">{{ $build->place }}</strong>
                                                                </li>
                                                                <li>
                                                                    <strong class="fwNormal elemenBlock text-primary">Square</strong>
                                                                    <strong class="fwNormal elemenBlock">{{ $build->square }}</strong>
                                                                </li>
                                                                <li>
                                                                    <strong class="fwNormal elemenBlock text-primary">Type</strong>
                                                                    <strong class="fwNormal elemenBlock">{{ $build->type }}</strong>
                                                                </li>
                                                                <li>
                                                                    <strong class="fwNormal elemenBlock text-primary">N. Rooms</strong>
                                                                    <strong class="fwNormal elemenBlock">{{ $build->rooms }}</strong>
                                                                </li>
                                                            </ul>
                                                        </footer>
                                                    </article>
                                                </div>
                                            @endforeach


                                            @else
                                                <section id="content" class="container pCombine">
                                                    <section class="block404 text-center col-md-7 col-md-offset-1 col-xs-12" style="margin-bottom: 50px ; padding: 50px 0px 100px;">
                                                        <h1 class="fontNeuron">404<span>Page not found.</span></h1>
                                                        <p>The page you are looking for was removed or does not exist. <br>Try using the search form below.</p>
                                                        <a href="/" class="buttonL btn btnDark fontNeuron">Back to Home</a>
                                                    </section>
                                                </section>
                                            @endif
										</div>
									</div>
									<!-- navigation pagination -->
                                    {{--  <nav class="navigation pagination pagination1 fontNeuron" role="navigation">
                                        <div class="nav-links">
                                            {{ $builds->render() }}
                                        </div>
                                    </nav>  --}}


								</div>
							</div>
							<div class="col-xs-12 col-md-4 col-md-pull-8">
								<!-- sidebar -->
								<aside id="sidebar">
									<!-- findFormBlock -->
									<form action="{{url('search')}}" method="post" class="bgWhite widget widgetPadding findFormBlock widgetFindFormBlock">
										{{csrf_field()}}

                                        <h3 class="fontNeuron fwBold text-capitalize">Search Your Home</h3>

										<div class="form-group">
                                            <select data-placeholder="Search By Rent" class="chosen-select" name="rent">
                                                <option selected>Search By Rent</option>
                                                <option value="Ownership">Ownership</option>
                                                <option value="Rent">Rent</option>
                                            </select>
                                        </div>

										<div class="form-group">
                                            <select data-placeholder="Search By Type" class="chosen-select" name="type">
                                                <option selected>Search By Type</option>
                                                <option value="Flat">Flat</option>
                                                <option value="Villa">Villa</option>
                                                <option Chalet="Chalet">Chalet</option>
                                            </select>
                                        </div>

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

                                        <div class="form-group">
                                            <select data-placeholder="Search By N. Rooms" class="chosen-select" name="rooms">
                                                <option selected>Search By N. Rooms</option>
                                                {{ $i = "" }}
                                                @for ($i == 0 ; $i <= 50 ; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <input type="text" class="form-control elemenBlock" placeholder="Search By Square" name="square">
                                        </div>

                                        <div class="form-group">
                                            <input type="number" class="form-control elemenBlock" placeholder="Search By Price From" name="from">
                                        </div>

                                        <div class="form-group">
                                            <input type="number" class="form-control elemenBlock" placeholder="Search By Price To" name="to">
                                        </div>

										<div class="row orderRow">
                                            <div class="col-xs-12 order2">
                                                <button type="submit" class="btn btnSecondary text-uppercase fontNeuron" >SEARCH</button>
                                            </div>
                                        </div>
									</form>


									<!-- widgetCalc -->
									<section class="widget widgetPadding widgetCalc bgWhite">
										<h3 class="fontNeuron fwBold text-capitalize">Mortgage Calculator</h3>
										<!-- widgetCalcForm -->
										<form action="#" class="widgetCalcForm">
											<div class="form-group">
												<span class="icnInput small fas fa-dollar-sign"></span>
												<input type="text" class="form-control elemenBlock" placeholder="Property price">
											</div>
											<div class="form-group">
												<span class="icnInput small fas fa-dollar-sign"></span>
												<input type="text" class="form-control elemenBlock" placeholder="Deposit">
											</div>
											<div class="form-group">
												<span class="icnInput small fas fa-percent"></span>
												<input type="text" class="form-control elemenBlock" placeholder="Annual Interest">
											</div>
											<div class="form-group">
												<span class="icnInput small far fa-calendar-alt"></span>
												<input type="text" class="form-control elemenBlock" placeholder="Years">
											</div>
											<button type="submit" class="elemenBlock btn btnSecondary fontNeuron text-uppercase">CALCULATE</button>
											<p><span class="text-primary elemenBlock text-center textCount">Monthly Payment: $969.04</span></p>
										</form>
									</section>
									<!-- widgetRecentPosts -->
									<section class="widget widgetPadding widgetRecentPosts bgWhite">
										<h3 class="fontNeuron fwBold text-capitalize">Recent Properties</h3>
										<!-- widgetRecentPostsList -->
										<ul class="list-unstyled widgetRecentPostsList padlReset">
											@foreach (\App\build::limit(3)->orderBy('id' , 'DESC')->get() as $build)
                                                <li>
                                                    <div class="alignleft">
                                                        <a href="{{ url('details-properties/'.$build->id.'/price/'.$build->price) }}"><img src="{{ url('admin/images/build/'.$build->image) }}" alt="image description"></a>
                                                    </div>
                                                    <div class="descrWrap">
                                                        <h4 class="fontNeuron fwBold"><a href="{{ url('details-properties/'.$build->id.'/price/'.$build->price) }}">{{ $build->name }}</a></h4>
                                                        <strong class="price elemenBlock fwSemi fontNeuron">{{ $build->price }} Pound</strong>
                                                        <p>{{ $build->place }}</p>
                                                        <p>{{ $build->created_at->diffForHumans() }}</p>
                                                    </div>
                                                </li>
                                            @endforeach
										</ul>
									</section>
								</aside>
							</div>
						</div>
					</section>
				</main>
			</div>

		</div>
	</div>

@endsection


@section('footer')

@endsection
