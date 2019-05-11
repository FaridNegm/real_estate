@extends('website.app')

@section('title')
    Home
@endsection

@section('header')
    <style>
        a{
            cursor: pointer;
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
					<!-- introSlider -->
					<section class="slick-fade slickSlider introSlider">
						@foreach ($builds_slider as $slider)
                            <div>
                                <!-- introSlide -->
                                <article class="introSlide bgCover" style="background-image: url(admin/images/build/{{ $slider->image }});">
                                    <div class="container introSlideHolder">
                                        <div class="align">
                                            <!-- introSlideCaption -->
                                            <div class="introSlideCaption">
                                                <h1 class="text-uppercase fontNeuron">{{ $slider->name }}</h1>
                                                <div class="introSlideCaptionHolder">
                                                    <p>{{ str_limit($slider->long_desc , 100) }}</p>
                                                    <address class="text-primary">
                                                        {{--  <span class="icn"></span>  --}}
                                                        {{--  <p></p>  --}}
                                                    </address>
                                                    <h2 class="fontNeuron">{{ $slider->price }} <strong class="fwNormal textUnit">/ Pound</strong></h2>
                                                    <div class="btnsWrap">
                                                        <a  class="btn btn-success btnSmall"><i class="far fa-building"></i> {{ $slider->rent }}</a>
                                                        <a  class="btn btn-info btnSmall"><i class="fa fa-home"></i> {{ $slider->type }}</a>
                                                        <a class="pull-right" style="font-size: 15px;color: #5968b4;font-weight: bold;"><i class="fi flaticon-pin-1" ></i> {{ $slider->place }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
					</section>
					<!-- findFormBlock -->
					<form action="{{url('/search')}}" method="post" class="bgWhite findFormBlock hasShadow">
                        {{csrf_field()}}

						<div class="container">
							<h2 class="fontNeuron">FIND YOUR <span class="text-info">HOME</span></h2>
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

                                <div class="col-xs-12 col-sm-6 col-md-3">
									<div class="form-group">
										<input type="text" class="form-control elemenBlock" placeholder="Search By Square" name="square">
									</div>
								</div>

								<div class="col-xs-12 col-sm-6 col-md-3">
									<div class="form-group">
										<input type="number" class="form-control elemenBlock" placeholder="Search By Price From" name="from">
									</div>
								</div>

                                <div class="col-xs-12 col-sm-6 col-md-3">
									<div class="form-group">
										<input type="number" class="form-control elemenBlock" placeholder="Search By Price To" name="to">
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


					<!-- latestPostsBlock -->
					<section class="latestPostsBlock container">
						<!-- rowHead -->
						<header class="row rowHead">
							<div class="col-xs-12 col-sm-5">
								<h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">LATEST</span> <span class="textSecondary">PROPERTIES</span></h1>
							</div>
							<div class="col-xs-12 col-sm-7">
								<!-- postsFiltersList -->
								<ul class="list-unstyled postsFiltersList text-capitalize text-center isoFiltersList">
									<li class="active"><a href="#">All</a></li>
									<li><a href="#" data-filter=".Flat">Flat</a></li>
									<li><a href="#" data-filter=".Villa">Vill</a></li>
									<li><a href="#" data-filter=".Chalet">Chalet</a></li>
								</ul>
							</div>
						</header>
						<!-- isoContentHolder -->
						<div class="isoContentHolder">
							<div class="row">
                                @foreach($builds as $build)
                                    <div class="col-xs-12 col-sm-6 col-md-4 col isoCol {{ $build->type }}">
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
							</div>
						</div>
						<div class="row text-center btnHolder">
							<a href="{{ url('all-realstates') }}" class="btn btn-primary btnPrimaryOutline text-capitalize fontNeuron">Show More Property</a>
						</div>
					</section>
					<!-- newsNstoriesBlock -->
					<section class="bgWhite newsNstoriesBlock">
						<div class="container">
							<h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">NEWS AND</span> <span class="textSecondary">STORIES</span></h1>
							<div class="row">
								<!-- newsCarousel -->
								<div class="news-posts-carousel slickSlider newsCarousel">
									<div>
										<div class="col-xs-12">
											<!-- newsPostColumn -->
											<article class="newsPostColumn">
												<div class="aligncenter">
													<a href="blog-detail.html">
														<img src="{{ url('website') }}/images/img19.jpg" alt="image description">
													</a>
												</div>
												<h2 class="fontNeuron"><a href="blog-detail.html">Getting Started Designing Apps for the Apple Watch</a></h2>
												<p>
													<a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
													<time datetime="2011-01-12">February 9, 2017</time>
													<a href="#" class="commentsCount">12 comment</a>
												</p>
												<footer class="PostColumnFoot">
													<a href="#" class="elemenBlock readMore text-capitalize">Read Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
												</footer>
											</article>
										</div>
									</div>
									<div>
										<div class="col-xs-12">
											<!-- newsPostColumn -->
											<article class="newsPostColumn">
												<div class="aligncenter">
													<a href="blog-detail.html">
														<img src="{{ url('website') }}/images/img20.jpg" alt="image description">
													</a>
												</div>
												<h2 class="fontNeuron"><a href="blog-detail.html">Take Away You Can Get From</a></h2>
												<p>
													<a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
													<time datetime="2011-01-12">February 9, 2017</time>
													<a href="#" class="commentsCount">12 comment</a>
												</p>
												<footer class="PostColumnFoot">
													<a href="#" class="elemenBlock readMore text-capitalize">Read Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
												</footer>
											</article>
										</div>
									</div>
									<div>
										<div class="col-xs-12">
											<!-- newsPostColumn -->
											<article class="newsPostColumn">
												<div class="aligncenter">
													<a href="blog-detail.html">
														<img src="{{ url('website') }}/images/img19.jpg" alt="image description">
													</a>
												</div>
												<h2 class="fontNeuron"><a href="blog-detail.html">Getting Started Designing Apps for the Apple Watch</a></h2>
												<p>
													<a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
													<time datetime="2011-01-12">February 9, 2017</time>
													<a href="#" class="commentsCount">12 comment</a>
												</p>
												<footer class="PostColumnFoot">
													<a href="#" class="elemenBlock readMore text-capitalize">Read Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
												</footer>
											</article>
										</div>
									</div>
									<div>
										<div class="col-xs-12">
											<!-- newsPostColumn -->
											<article class="newsPostColumn">
												<div class="aligncenter">
													<a href="blog-detail.html">
														<img src="{{ url('website') }}/images/img20.jpg" alt="image description">
													</a>
												</div>
												<h2 class="fontNeuron"><a href="blog-detail.html">Take Away You Can Get From</a></h2>
												<p>
													<a href="#" class="btn btnSmall btn-info">Ali Tufan</a>
													<time datetime="2011-01-12">February 9, 2017</time>
													<a href="#" class="commentsCount">12 comment</a>
												</p>
												<footer class="PostColumnFoot">
													<a href="#" class="elemenBlock readMore text-capitalize">Read Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
												</footer>
											</article>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- servicesFetaureBlock -->
					<section class="servicesFetaureBlock container">
						<h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">OUR</span> <span class="textSecondary">SERVICE</span></h1>
						<!-- servicesFetauresList -->
						<ul class="servicesFetauresList list-unstyled text-center">
							<li>
								<a>
									<span class="icnHolder roundedCircle"><i class="fi flaticon-house"></i></span>
									<h2 class="fontNeuron text-capitalize">Saling Service</h2>
								</a>
							</li>
							<li>
								<a>
									<span class="icnHolder roundedCircle"><i class="fi flaticon-rent"></i></span>
									<h2 class="fontNeuron text-capitalize">Renting Service</h2>
								</a>
							</li>
							<li>
								<a>
									<span class="icnHolder roundedCircle"><i class="fi flaticon-list"></i></span>
									<h2 class="fontNeuron text-capitalize">Property Listing</h2>
								</a>
							</li>
							<li>
								<a>
									<span class="icnHolder roundedCircle"><i class="fi flaticon-house-1"></i></span>
									<h2 class="fontNeuron text-capitalize">Property Management</h2>
								</a>
							</li>
						</ul>
					</section>
					<!-- ourAgentBlock -->
					<section class="bgWhite ourAgentBlock">
						<div class="container">
							<h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">OUR</span> <span class="textSecondary">AGENT</span></h1>
							<div class="row">
								<!-- profilesSlider -->
								<div class="four-slider slickSlider profilesSlider">
                                @foreach ($users as $user)
									<div>
										<div class="col-xs-12">
											<!-- profileColumn -->
											<article class="profileColumn hasOver">
												<div class="aligncenter">
													<a href="agent-detail.html">
														<img src="{{ url('admin/images/users/'.$user->image) }}" alt="Emmy Ramos Buying Agent">
													</a>
												</div>
												<div class="textWrap">
													<h2 class="fontNeuron text-capitalize"><a href="agent-detail.html">{{ $user->name }}</a></h2>
													<h3 class="fwNormal text-capitalize">Buying Agent</h3>
													<div class="collapseWrap">
														<!-- profileColumnSocial -->
														<ul class="list-unstyled socialNetworks profileColumnSocial">
															<li><a href="{{ $user->facebook }}" target="_blaNK"><i class="fab fa-facebook-f"></i></a></li>
															<li><a href="{{ $user->twitter }}" target="_blaNK"><i class="fab fa-twitter"></i></a></li>
															<li><a href="{{ $user->instegram }}" target="_blaNK"><i class="fab fa-instagram"></i></a></li>
															<li><a href="{{ $user->facebook }}" target="_blaNK"><i class="fab fa-google"></i></a></li>
														</ul>
													</div>
												</div>
											</article>
										</div>
									</div>
                                @endforeach
								</div>
							</div>
						</div>
					</section>
					<!-- testimonilasBlock -->
					<section class="testimonilasBlock">
						<div class="container">
							<h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">OUR</span> <span class="textSecondary">Testimonials</span></h1>
							<div class="row">
								<div class="col-xs-12 col-md-8 col-md-offset-2">
									<!-- testimonialSlider -->
                                        <div class="slickSlider testimonial-carousel testimonialSlider">
                                    @foreach ($testmonials as $testmonial)
                                            <div>
                                                <!-- testimonialColumn -->
                                                <article class="testimonialColumn text-center">
                                                    <div class="aligncenter roundedCircle">
                                                        <a>
                                                            <img src="{{ url('admin/images/testmonials/'.$testmonial->image) }}" class="roundedCircle" alt="image description" style="width:200px;height:200px;border-radius:50%;position:relative;top: -8px;left: -5px;">
                                                        </a>
                                                    </div>
                                                    <div class="textWrap">
                                                        <h2 class="fontNeuron"><a>{{ $testmonial->title }}</a></h2>
                                                        <p><em>{{ $testmonial->body }}</em></p>
                                                    </div>
                                                </article>
                                            </div>
                                    @endforeach
                                        </div>
								</div>
							</div>
						</div>
					</section>

					<!-- sponsorsBlock -->
					<section class="container sponsorsBlock">
						<h1 class="fontNeuron blockH text-uppercase"><span class="bdrBottom">OUR</span> <span class="textSecondary">PARTNERS</span></h1>
						<!-- LogosCarousel -->
						<div class="logos-slider slickSlider LogosCarousel">
							<div>
								<!-- logoColumn -->
								<div class="logoColumn">
									<a href="#">
										<img src="{{ url('website') }}/images/sponsor01.png" alt="helsinki">
									</a>
								</div>
							</div>
							<div>
								<!-- logoColumn -->
								<div class="logoColumn">
									<a>
										<img src="{{ url('website') }}/images/sponsor02.png" alt="norway">
									</a>
								</div>
							</div>
							<div>
								<!-- logoColumn -->
								<div class="logoColumn">
									<a>
										<img src="{{ url('website') }}/images/sponsor03.png" alt="lars grondahl">
									</a>
								</div>
							</div>
							<div>
								<!-- logoColumn -->
								<div class="logoColumn">
									<a>
										<img src="{{ url('website') }}/images/sponsor04.png" alt="kirsten">
									</a>
								</div>
							</div>
							<div>
								<!-- logoColumn -->
								<div class="logoColumn">
									<a>
										<img src="{{ url('website') }}/images/sponsor05.png" alt="only oslo">
									</a>
								</div>
							</div>
							<div>
								<!-- logoColumn -->
								<div class="logoColumn">
									<a>
										<img src="{{ url('website') }}/images/sponsor02.png" alt="norway">
									</a>
								</div>
							</div>
							<div>
								<!-- logoColumn -->
								<div class="logoColumn">
									<a>
										<img src="{{ url('website') }}/images/sponsor03.png" alt="lars grondahl">
									</a>
								</div>
							</div>
							<div>
								<!-- logoColumn -->
								<div class="logoColumn">
									<a>
										<img src="{{ url('website') }}/images/sponsor04.png" alt="kirsten">
									</a>
								</div>
							</div>
						</div>
					</section>

					<!-- signupFormAside -->
					<form action="#" class="bgWhite signupFormAside">
						<div class="container signupFormAsideHolder">
							<span class="icnAbsolute elemenBlock fi flaticon-message"></span>
							<div class="col-xs-12 col-md-offset-2 col-md-6">
								<h3 class="fontNeuron textSecondary">Sign up for our newsletter.</h3>
								<p>Lorem molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
							</div>
							<div class="col-xs-12 col-md-4">
								<div class="form-group">
									<input type="email" id="email" class="form-control elemenBlock" placeholder="Your email">
									<button type="button" class="buttonReset fi flaticon-navigation"></button>
								</div>
							</div>
						</div>
					</form>
				</main>
			</div>

		</div>
	</div>

@endsection


@section('footer')

@endsection
