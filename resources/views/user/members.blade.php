<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <title>Shepherdcare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/line-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/line-awesome-font-awesome.min.css') }}">
    <link href="{{ asset('user/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/lib/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/lib/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/responsive.css') }}">

</head>
<style>

.card-box {
    padding: 20px;
    border-radius: 3px;
    margin-bottom: 30px;
    background-color: #fff;
}

.social-links li a {
    border-radius: 50%;
    color: rgba(121, 121, 121, .8);
    display: inline-block;
    height: 30px;
    line-height: 27px;
    border: 2px solid rgba(121, 121, 121, .5);
    text-align: center;
    width: 30px
}

.social-links li a:hover {
    color: #797979;
    border: 2px solid #797979
}
.thumb-lg {
    height: 88px;
    width: 88px;
}
.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 100%;
    height: auto;
}
.text-pink {
    color: #ff679b!important;
}
.btn-rounded {
    border-radius: 2em;
}
.text-muted {
    color: #98a6ad!important;
}
h4 {
    line-height: 22px;
    font-size: 18px;
}
</style>
@livewireStyles
@livewireScripts

<body>
    <div class="wrapper">
        <header style="position:sticky; top:0;z-index:1">
            <div class="container">
                <div class="header-data">
                    <div class="logo">
                        <a href="index.html" title><img src="{{ asset('user/images/logo.png') }}" alt></a>
                    </div>
                    <div class="search-bar">
                        <form>
                            <input type="text" name="search" placeholder="Search...">
                            <button type="submit"><i class="la la-search"></i></button>
                        </form>
                    </div>
                    <nav>
                        <ul>
                            <li>
                                <a href="index.html" title>
                                    <span><img src="{{ asset('user/images/icon1.png') }}" alt></span>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="companies.html" title>
                                    <span><img src="{{ asset('user/images/icon2.png') }}" alt></span>
                                    Companies
                                </a>
                                <ul>
                                    <li><a href="companies.html" title>Companies</a></li>
                                    <li><a href="company-profile.html" title>Company Profile</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="projects.html" title>
                                    <span><img src="{{ asset('user/images/icon3.png') }}" alt></span>
                                    Projects
                                </a>
                            </li>
                            <li>
                                <a href="profiles.html" title>
                                    <span><img src="{{ asset('user/images/icon4.png') }}" alt></span>
                                    Profiles
                                </a>
                                <ul>
                                    <li><a href="user-profile.html" title>User Profile</a></li>
                                    <li><a href="my-profile-feed.html" title>my-profile-feed</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="jobs.html" title>
                                    <span><img src="{{ asset('user/images/icon5.png') }}" alt></span>
                                    Jobs
                                </a>
                            </li>
                            <li>
                                <a href="#" title class="not-box-openm">
                                    <span><img src="{{ asset('user/images/icon6.png') }}" alt></span>
                                    Messages
                                </a>
                                <div class="notification-box msg" id="message">
                                    <div class="nt-title">
                                        <h4>Setting</h4>
                                        <a href="#" title>Clear all</a>
                                    </div>
                                    <div class="nott-list">
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="{{ asset('user/images/resources/ny-img1.png') }}" alt>
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="messages.html" title>Jassica William</a> </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="{{ asset('user/images/resources/ny-img2.png') }}" alt>
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="messages.html" title>Jassica William</a></h3>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="{{ asset('user/images/resources/ny-img3.png') }}" alt>
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="messages.html" title>Jassica William</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="view-all-nots">
                                            <a href="messages.html" title>View All Messsages</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#" title class="not-box-open">
                                    <span><img src="{{ asset('user/images/icon7.png') }}" alt></span>
                                    Notification
                                </a>
                                <div class="notification-box noti" id="notification">
                                    <div class="nt-title">
                                        <h4>Setting</h4>
                                        <a href="#" title>Clear all</a>
                                    </div>
                                    <div class="nott-list">
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="{{ asset('user/images/resources/ny-img1.png') }}" alt>
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title>Jassica William</a> Comment on your
                                                    project.</h3>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="{{ asset('user/images/resources/ny-img2.png') }}" alt>
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title>Jassica William</a> Comment on your
                                                    project.</h3>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="{{ asset('user/images/resources/ny-img3.png') }}" alt>
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title>Jassica William</a> Comment on your
                                                    project.</h3>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="{{ asset('user/images/resources/ny-img2.png') }}" alt>
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title>Jassica William</a> Comment on your
                                                    project.</h3>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="view-all-nots">
                                            <a href="#" title>View All Notification</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <div class="menu-btn">
                        <a href="#" title><i class="fa fa-bars"></i></a>
                    </div>
                    <div class="user-account">
                        <div class="user-info">
                            <img src="{{ asset('user/images/resources/user.png') }}" alt>
                            <a href="#" title>John</a>
                            <i class="la la-sort-down"></i>
                        </div>
                        <div class="user-account-settingss" id="users">
                            <h3>Online Status</h3>
                            <ul class="on-off-status">
                                <li>
                                    <div class="fgt-sec">
                                        <input type="radio" name="cc" id="c5">
                                        <label for="c5">
                                            <span></span>
                                        </label>
                                        <small>Online</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="fgt-sec">
                                        <input type="radio" name="cc" id="c6">
                                        <label for="c6">
                                            <span></span>
                                        </label>
                                        <small>Offline</small>
                                    </div>
                                </li>
                            </ul>
                            <h3>Custom Status</h3>
                            <div class="search_form">
                                <form>
                                    <input type="text" name="search">
                                    <button type="submit">Ok</button>
                                </form>
                            </div>
                            <h3>Setting</h3>
                            <ul class="us-links">
                                <li><a href="profile-account-setting.html" title>Account Setting</a></li>
                                <li><a href="#" title>Privacy</a></li>
                                <li><a href="#" title>Faqs</a></li>
                                <li><a href="#" title>Terms & Conditions</a></li>
                            </ul>
                            <h3 class="tc"><a href="sign-in.html" title>Logout</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        
        
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4"><a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i> Add Member</a></div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="row">
                    @foreach($members as $record)
                    <div class="col-lg-3" >
                        <div class="text-center card-box">
                            <div class="member-card pt-2 pb-2">
                                <div class="thumb-lg member-thumb mx-auto"><img src="{{ Avatar::create($record->other_names)->toBase64() }} " class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class="">
                                    <h4>{{$record->other_names}} {{$record->surname}}</h4>
                                    <p class="text-muted">Email <span>| </span><span><a href="#" class="text-pink">member@gmail.com</a></span></p>
                                    <p class="text-muted">Phone <span>| </span><span><a href="#" class="text-pink">0702203033</a></span></p>
                                    
                                </div>
                                <ul class="social-links list-inline mt-3">
                                    <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                                </ul>
                                <a href="{{route('user.profile',['user'=>$record->id])}}" type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">View Profile</a>
                               
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
        
            </div>
            <!-- container -->
        </div>

    </div>
    <script type="text/javascript" src="{{ asset('user/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/jquery.mCustomScrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/lib/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/scrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/script.js') }}"></script>
</body>

</html>
