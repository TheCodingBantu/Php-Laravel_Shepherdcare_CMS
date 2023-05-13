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
    .select2-selection__rendered {
        line-height: 40px !important;
        color: #b2b2b2 !important;


    }

    .select2-container .select2-selection--single {
        height: 40px !important;
        a border: 1px solid #e5e5e5 !important;
        color: #b2b2b2 !important;

    }

    .select2-selection__arrow {
        height: 40px !important;


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
        <section class="cover-sec p-2">
            {{-- <img src="{{asset('user/images/resources/company-cover.jpg')}}" alt=""> --}}
        </section>
        <main>
            <div class="main-section">
                <div class="container">
                    <div class="main-section-data">
                        <div class="row d-flex justify-content-centre">
                            <div class="col-lg-3">
                                <div class="main-left-sidebar">
                                    <div class="user-data full-width">
                                        <div class="user-profile">
                                            <div class="username-dt">
                                                <div class="usr-pic">
                                                    <img src="{{ asset('user/images/resources/user-pic.png') }}" alt>
                                                </div>
                                            </div>
                                            <div class="user-specs">
                                                <h3>John Doe</h3>
                                                <span>Graphic Designer at Self Employed</span>
                                            </div>
                                        </div>
                                        <ul class="user-fw-status">
                                            <li>
                                                <h4>Following</h4>
                                                <span>34</span>
                                            </li>
                                            <li>
                                                <h4>Followers</h4>
                                                <span>155</span>
                                            </li>
                                            <li>
                                                <a href="my-profile.html" title>View Profile</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-ws-sec">
                                    <div class="user-tab-sec">
                                        <h3>Facebook Inc.</h3>
                                        <div class="star-descp">
                                            <span>Established Since 2009</span>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="tab-feed">
                                            <ul>
                                                <li data-tab="feed-dd" class="active">
                                                    <a href="#" title="">
                                                        <img src="images/ic1.png" alt="">
                                                        <span>Feed</span>
                                                    </a>
                                                </li>
                                                <li data-tab="info-dd">
                                                    <a href="#" title="">
                                                        <img src="images/ic2.png" alt="">
                                                        <span>Info</span>
                                                    </a>
                                                </li>
                                                <li data-tab="portfolio-dd">
                                                    <a href="#" title="">
                                                        <img src="images/ic3.png" alt="">
                                                        <span>Portfolio</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-feed-tab current" id="feed-dd">
                                        <div class="posts-section">
                                            <div class="post-bar">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/company-pic.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>Facebook Inc.</h3>
                                                            <span><img src="images/clock.png" alt="">3 min
                                                                ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i
                                                                class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Unsaved</a></li>
                                                            <li><a href="#" title="">Unbid</a></li>
                                                            <li><a href="#" title="">Close</a></li>
                                                            <li><a href="#" title="">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="epi-sec">
                                                    <ul class="descp">
                                                        <li><img src="images/icon8.png" alt=""><span>Epic
                                                                Coder</span></li>
                                                        <li><img src="images/icon9.png" alt=""><span>India</span>
                                                        </li>
                                                    </ul>
                                                    <ul class="bk-links">
                                                        <li><a href="#" title=""><i class="la la-bookmark"></i></a>
                                                        </li>
                                                        <li><a href="#" title=""><i class="la la-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="job_descp">
                                                    <h3>Senior PHP Developer</h3>
                                                    <ul class="job-dt">
                                                        <li><a href="#" title="">Full Time</a></li>
                                                        <li><span>$30 / hr</span></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Aliquam luctus hendrerit metus, ut ullamcorper quam finibus
                                                        at. Etiam id magna sit amet... <a href="#" title="">view
                                                            more</a></p>
                                                    <ul class="skill-tags">
                                                        <li><a href="#" title="">HTML</a></li>
                                                        <li><a href="#" title="">PHP</a></li>
                                                        <li><a href="#" title="">CSS</a></li>
                                                        <li><a href="#" title="">Javascript</a></li>
                                                        <li><a href="#" title="">Wordpress</a></li>
                                                    </ul>
                                                </div>
                                                <div class="job-status-bar">
                                                    <ul class="like-com">
                                                        <li>
                                                            <a href="#" class="active"><i class="fas fa-heart"></i>
                                                                Like</a>
                                                            <img src="images/liked-img.png" alt="">
                                                            <span>25</span>
                                                        </li>
                                                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i>
                                                                Comments 15</a>
                                                        </li>
                                                    </ul>
                                                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                                </div>
                                            </div>
                                            <div class="post-bar">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/company-pic.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>Facebook Inc.</h3>
                                                            <span><img src="images/clock.png" alt="">3 min
                                                                ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i
                                                                class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Unsaved</a></li>
                                                            <li><a href="#" title="">Unbid</a></li>
                                                            <li><a href="#" title="">Close</a></li>
                                                            <li><a href="#" title="">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="epi-sec">
                                                    <ul class="descp">
                                                        <li><img src="images/icon8.png" alt=""><span>Epic
                                                                Coder</span></li>
                                                        <li><img src="images/icon9.png" alt=""><span>India</span>
                                                        </li>
                                                    </ul>
                                                    <ul class="bk-links">
                                                        <li><a href="#" title=""><i class="la la-bookmark"></i></a>
                                                        </li>
                                                        <li><a href="#" title=""><i class="la la-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="job_descp">
                                                    <h3>Senior UI / UX designer</h3>
                                                    <ul class="job-dt">
                                                        <li><a href="#" title="">Full Time</a></li>
                                                        <li><span>$30 / hr</span></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Aliquam luctus hendrerit metus, ut ullamcorper quam finibus
                                                        at. Etiam id magna sit amet... <a href="#" title="">view
                                                            more</a></p>
                                                    <ul class="skill-tags">
                                                        <li><a href="#" title="">HTML</a></li>
                                                        <li><a href="#" title="">PHP</a></li>
                                                        <li><a href="#" title="">CSS</a></li>
                                                        <li><a href="#" title="">Javascript</a></li>
                                                        <li><a href="#" title="">Wordpress</a></li>
                                                    </ul>
                                                </div>
                                                <div class="job-status-bar">
                                                    <ul class="like-com">
                                                        <li>
                                                            <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                            <img src="images/liked-img.png" alt="">
                                                            <span>25</span>
                                                        </li>
                                                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i>
                                                                Comments 15</a>
                                                        </li>
                                                    </ul>
                                                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                                </div>
                                            </div>
                                            <div class="post-bar">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/company-pic.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>Facebook Inc.</h3>
                                                            <span><img src="images/clock.png" alt="">3 min
                                                                ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i
                                                                class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Unsaved</a></li>
                                                            <li><a href="#" title="">Unbid</a></li>
                                                            <li><a href="#" title="">Close</a></li>
                                                            <li><a href="#" title="">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="epi-sec">
                                                    <ul class="descp">
                                                        <li><img src="images/icon8.png" alt=""><span>Epic
                                                                Coder</span></li>
                                                        <li><img src="images/icon9.png" alt=""><span>India</span>
                                                        </li>
                                                    </ul>
                                                    <ul class="bk-links">
                                                        <li><a href="#" title=""><i class="la la-bookmark"></i></a>
                                                        </li>
                                                        <li><a href="#" title=""><i class="la la-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="job_descp">
                                                    <h3>Senior Wordpress Developer</h3>
                                                    <ul class="job-dt">
                                                        <li><a href="#" title="">Full Time</a></li>
                                                        <li><span>$30 / hr</span></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Aliquam luctus hendrerit metus, ut ullamcorper quam finibus
                                                        at. Etiam id magna sit amet... <a href="#" title="">view
                                                            more</a></p>
                                                    <ul class="skill-tags">
                                                        <li><a href="#" title="">HTML</a></li>
                                                        <li><a href="#" title="">PHP</a></li>
                                                        <li><a href="#" title="">CSS</a></li>
                                                        <li><a href="#" title="">Javascript</a></li>
                                                        <li><a href="#" title="">Wordpress</a></li>
                                                    </ul>
                                                </div>
                                                <div class="job-status-bar">
                                                    <ul class="like-com">
                                                        <li>
                                                            <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                            <img src="images/liked-img.png" alt="">
                                                            <span>25</span>
                                                        </li>
                                                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i>
                                                                Comments 15</a>
                                                        </li>
                                                    </ul>
                                                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                                </div>
                                            </div>
                                            <div class="post-bar">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/company-pic.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>Facebook Inc. </h3>
                                                            <span><img src="images/clock.png" alt="">3 min
                                                                ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i
                                                                class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Unsaved</a></li>
                                                            <li><a href="#" title="">Unbid</a></li>
                                                            <li><a href="#" title="">Close</a></li>
                                                            <li><a href="#" title="">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="epi-sec">
                                                    <ul class="descp">
                                                        <li><img src="images/icon8.png" alt=""><span>Epic
                                                                Coder</span></li>
                                                        <li><img src="images/icon9.png" alt=""><span>India</span>
                                                        </li>
                                                    </ul>
                                                    <ul class="bk-links">
                                                        <li><a href="#" title=""><i class="la la-bookmark"></i></a>
                                                        </li>
                                                        <li><a href="#" title=""><i class="la la-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="job_descp">
                                                    <h3>Senior UI / UX designer</h3>
                                                    <ul class="job-dt">
                                                        <li><a href="#" title="">Full Time</a></li>
                                                        <li><span>$30 / hr</span></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Aliquam luctus hendrerit metus, ut ullamcorper quam finibus
                                                        at. Etiam id magna sit amet... <a href="#" title="">view
                                                            more</a></p>
                                                    <ul class="skill-tags">
                                                        <li><a href="#" title="">HTML</a></li>
                                                        <li><a href="#" title="">PHP</a></li>
                                                        <li><a href="#" title="">CSS</a></li>
                                                        <li><a href="#" title="">Javascript</a></li>
                                                        <li><a href="#" title="">Wordpress</a></li>
                                                    </ul>
                                                </div>
                                                <div class="job-status-bar">
                                                    <ul class="like-com">
                                                        <li>
                                                            <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                            <img src="images/liked-img.png" alt="">
                                                            <span>25</span>
                                                        </li>
                                                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i>
                                                                Comments 15</a>
                                                        </li>
                                                    </ul>
                                                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                                </div>
                                            </div>
                                            <div class="process-comm">
                                                <div class="spinner">
                                                    <div class="bounce1"></div>
                                                    <div class="bounce2"></div>
                                                    <div class="bounce3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-feed-tab" id="info-dd">
                                        <div class="user-profile-ov">
                                            <h3><a href="#" title="" class="overview-open">Overview</a> <a href="#"
                                                    title="" class="overview-open"><i class="fa fa-pencil"></i></a>
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                                tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit
                                                amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam
                                                lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus.
                                                Aliquam accumsan ac magna convallis bibendum. Quisque laoreet augue
                                                eget augue fermentum scelerisque. Vivamus dignissim mollis est
                                                dictum blandit. Nam porta auctor neque sed congue. Nullam rutrum
                                                eget ex at maximus. Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Donec eget vestibulum lorem.</p>
                                        </div>
                                        <div class="user-profile-ov st2">
                                            <h3><a href="#" title="" class="esp-bx-open">Establish Since </a><a href="#"
                                                    title="" class="esp-bx-open"><i class="fa fa-pencil"></i></a> <a
                                                    href="#" title="" class="esp-bx-open"><i
                                                        class="fa fa-plus-square"></i></a></h3>
                                            <span>February 2004</span>
                                        </div>
                                        <div class="user-profile-ov">
                                            <h3><a href="#" title="" class="emp-open">Total Employees</a> <a href="#"
                                                    title="" class="emp-open"><i class="fa fa-pencil"></i></a> <a
                                                    href="#" title="" class="emp-open"><i
                                                        class="fa fa-plus-square"></i></a></h3>
                                            <span>17,048</span>
                                        </div>
                                        <div class="user-profile-ov">
                                            <h3><a href="#" title="" class="lct-box-open">Location</a> <a href="#"
                                                    title="" class="lct-box-open"><i class="fa fa-pencil"></i></a>
                                                <a href="#" title="" class="lct-box-open"><i
                                                        class="fa fa-plus-square"></i></a>
                                            </h3>
                                            <h4>USA</h4>
                                            <p> Menlo Park, California, United States</p>
                                        </div>
                                    </div>
                                    <div class="product-feed-tab" id="portfolio-dd">
                                        <div class="portfolio-gallery-sec">
                                            <h3>Portfolio</h3>
                                            <div class="gallery_pf">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="images/resources/pf-img1.jpg" alt="">
                                                            <a href="#" title=""><img src="images/all-out.png"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="images/resources/pf-img2.jpg" alt="">
                                                            <a href="#" title=""><img src="images/all-out.png"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="images/resources/pf-img3.jpg" alt="">
                                                            <a href="#" title=""><img src="images/all-out.png"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="images/resources/pf-img4.jpg" alt="">
                                                            <a href="#" title=""><img src="images/all-out.png"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="images/resources/pf-img5.jpg" alt="">
                                                            <a href="#" title=""><img src="images/all-out.png"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="images/resources/pf-img6.jpg" alt="">
                                                            <a href="#" title=""><img src="images/all-out.png"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="images/resources/pf-img7.jpg" alt="">
                                                            <a href="#" title=""><img src="images/all-out.png"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="images/resources/pf-img8.jpg" alt="">
                                                            <a href="#" title=""><img src="images/all-out.png"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="images/resources/pf-img9.jpg" alt="">
                                                            <a href="#" title=""><img src="images/all-out.png"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="images/resources/pf-img10.jpg" alt="">
                                                            <a href="#" title=""><img src="images/all-out.png"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </main>
       
      
    </div>


    </div>
    <script type="text/javascript" src="{{ asset('user/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/jquery.mCustomScrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/lib/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/scrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>

</html>