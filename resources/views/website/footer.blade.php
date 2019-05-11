<!-- pagePopupWrap -->
    <div class="popup-holder">
        <div id="popup1" class="lightbox-demo">
            <!-- popupLoginFrom -->
            <form method="POST" action="{{ route('register') }}" class="popupHolderWrap bgLightDark center-block popupLarge popupLoginFrom">
            {{ csrf_field() }}

                <ul class="list-unstyled popupTabsetList text-center fwBold text-uppercase fontNeuron">
                    <li class="active"><a href="#tab01">LOGIN</a></li>
                    <li><a href="#tab02">REGISTER</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab01" class="tab-active">
                        <div class="popupColsHolder">
                            <div class="col bgWhite">
                                <div class="form-group">
                                    <input type="text" class="form-control elemenBlock" placeholder="User Name">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control elemenBlock" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label class="fwNormal customLabelCheck">
                                        <input type="checkbox" class="customFormInputReset">
                                        <span class="fakeCheckbox"></span>
                                        <span class="fakeLabel">Remember me</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btnSecondary elemenBlock fontNeuron fwNormal text-uppercase btnSubmit">LOGIN</button>
                                <a href="#" class="linkForget">Forgot Password?</a>
                            </div>
                            <div class="col">
                                <p>You Can Login using your facebook Profile or Google account</p>
                                <button type="button" class="btnSocial btnFb elemenBlock"><i class="fab fa-facebook-f btnIco"></i> Facebook Connect</button>
                                <button type="button" class="btnSocial btnTw elemenBlock"><i class="fab fa-twitter btnIco"></i> Twitter Connect</button>
                                <button type="button" class="btnSocial btnG elemenBlock"><i class="fab fa-google btnIco"></i> Google Connect</button>
                            </div>
                        </div>
                    </div>
                    <div id="tab02">
                        <div class="popupColsHolder">
                            <div class="col bgWhite">
                                <div class="form-group">
                                    <input type="text" class="form-control elemenBlock" placeholder="User Name" name="name" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control elemenBlock" placeholder="Password" name="password" value="{{ old('password') }}">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control elemenBlock" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control elemenBlock" placeholder="Email Address" name="email" value="{{ old('email') }}">
                                </div>
                                <button type="submit" class="btn btn-primary elemenBlock fontNeuron fwNormal text-uppercase btnSubmit">REGISTER</button>
                            </div>
                            <div class="col">
                                <p>You Can Login using your facebook Profile or Google account</p>
                                <button type="button" class="btnSocial btnFb elemenBlock"><i class="fab fa-facebook-f btnIco"></i> Facebook Connect</button>
                                <button type="button" class="btnSocial btnTw elemenBlock"><i class="fab fa-twitter btnIco"></i> Twitter Connect</button>
                                <button type="button" class="btnSocial btnG elemenBlock"><i class="fab fa-google btnIco"></i> Google Connect</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


        <!-- pageFooterBlock -->
        <div class="pageFooterBlock">
            <!-- pageAside -->
            <aside class="pageAside textWhite">
                <div class="container">
                    <div class="row">
                        @foreach (\App\siteSetting::all() as $setting)
                            <div class="col-xs-12 col-sm-4 col">
                                <h2 class="fontNeuron fwSemi text-uppercase">LemanHouse</h2>
                                <p>{{ str_limit($setting->description , 200) }}</p>
                                <address>
                                    <dl>
                                        <dt><i class="fi flaticon-navigation"></i></dt>
                                        <dd>{{ $setting->address }}</dd>
                                        <dt><i class="fi flaticon-24-hours"></i></dt>
                                        <dd><a href="tel:+12463450695">{{ $setting->phones }}</a></dd>
                                        <dt><i class="fi flaticon-mail"></i></dt>
                                        <dd><a>{{ $setting->email }}</a></dd>
                                    </dl>
                                </address>
                            </div>
                        @endforeach

                        <!-- ftNav -->
                        <nav class="col-xs-12 ftNav col-sm-4 col">
                            <h2 class="fontNeuron fwSemi text-uppercase">Useful Links</h2>
                            <div class="ftNavListsHolder">
                                <ul class="list-unstyled">
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">About US</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact Support</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">FAQs</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Our Agents</a></li>
                                    <li><a href="#">How It Works</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="col-xs-12 col-sm-4 col">
                            <h2 class="fontNeuron fwSemi text-uppercase">LATEST PROPERTIES</h2>
                            <!-- postsWidgetList -->
                            <ul class="list-unstyled postsWidgetList">
                                @foreach(\App\build::limit(2)->orderBy('id' , 'desc')->get() as $build)
                                    <li>
                                        <div class="alignleft">
                                            <a href="{{ url('details-properties/'.$build->id.'/price/'.$build->price) }}">
                                                <img src="{{ url('admin/images/build/'.$build->image) }}" alt="image description">
                                            </a>
                                        </div>
                                        <div class="descrWrap">
                                            <h3 class="fwNormal"><a href="{{ url('details-properties/'.$build->id.'/price/'.$build->price) }}">{{ str_limit($build->long_desc , 50) }}</a></h3>
                                            <h4 class="fwSemi">{{ $build->price }} Pound</h4>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- pageFooter -->
            <footer id="pageFooter">
                <div class="container pageFooterHolder">
                    <div class="row">
                        <div class="col-xs-12 col-sm-push-6 col-sm-6">
                            <!-- pageFooterSocial -->
                            @foreach (\App\siteSetting::all() as $setting)
                                <ul class="socialNetworks list-unstyled pageFooterSocial">
                                    <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $setting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ $setting->instegram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="{{ $setting->facebook }}" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="{{ $setting->instegram }}" target="_blank"><i class="fab fa-google"></i></a></li>
                                </ul>
                            @endforeach
                        </div>
                        <div class="col-xs-12 col-sm-pull-6 col-sm-6">
                            <p>{{ date('Y') }} <a href="{{ url('https://www.facebook.com/profile.php?id=100001882042679') }}" target="_blank">FaridNegm</a> - All rights reserved</p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- btnScrollToTop -->
            <a href="#pageWrapper" class="btnScrollToTop smooth textWhite">Scroll Top <i class="fi flaticon-arrows btnScrollIcn"></i></a>
            <span class="bgCover elemenBlock" style="background-image: url(images/img21.jpg);"></span>
        </div>
