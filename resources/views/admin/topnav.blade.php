<div class="navbar-header">
    <div class="top-left-part">
        <!-- Logo -->
        <a class="logo" href="index-2.html">
            <!-- Logo icon image, you can use font-icon also --><b>
                <!--This is dark logo icon--><img src="{{url('admin')}}/plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{{url('admin')}}/plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
            </b>
            <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="{{url('admin')}}/plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="{{url('admin')}}/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
    </div>
    <!-- /Logo -->
    <!-- Search input and Toggle icon -->
    <ul class="nav navbar-top-links navbar-left">
        <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
        <li class="dropdown">
            <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"> <i class="mdi mdi-gmail"></i>
                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
            </a>
            <ul class="dropdown-menu mailbox animated bounceInDown">
                <li>
                    <div class="drop-title">You have @foreach(\App\message::orderBy('id' , 'DESC')->get() as $message)  @endforeach messages</div>
                </li>
                <li>
                    <div class="message-center">
                        @foreach(\App\message::all() as $message)
                        <a href="{{url('admin-panel/message/'.$message->id)}}">
                            <div class="user-img"> <img src="{{url('admin/images/users/dfuser.png')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>{{$message->name}}</h5> <span class="mail-desc">{{str_limit($message->subject , 40)}}</span> <span class="time">{{$message->created_at->diffForHumans()}}</span> </div>
                        </a>
                        @endforeach
                    </div>
                </li>
                <li>
                    <a class="text-center" href="{{url('admin-panel/all-messages')}}"> <strong>See all Message</strong> <i class="fa fa-angle-right"></i> </a>
                </li>
            </ul>
            <!-- /.dropdown-messages -->
        </li>

    </ul>
    <ul class="nav navbar-top-links navbar-right pull-right">
        <li>
            <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                <input type="text" placeholder="Search..." class="form-control"> <a href="#"><i class="fa fa-search"></i></a> </form>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{url('admin')}}/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b><span class="caret"></span> </a>
            <ul class="dropdown-menu dropdown-user animated flipInY">
                <li>
                    <div class="dw-user-box">
                        <div class="u-img"><img src="{{url('admin')}}/plugins/images/users/varun.jpg" alt="user" /></div>
                        <div class="u-text">
                            <h4>Steave Jobs</h4>
                            <p class="text-muted">varun@gmail.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                    </div>
                </li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
</div>
