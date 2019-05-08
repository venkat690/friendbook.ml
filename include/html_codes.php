<?php

function way_top()
{
   echo '
    <!DOCTYPE html>
    <html>   
    <head>
    <meta charset="UTF-8">
    <title>WorkWise Html Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
   '; 
}
function css()
{
    echo '
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/line-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
  
    ';
    
}
function js()
{
    echo '
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
    <script type="text/javascript" src="lib/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/scrollbar.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/flatpicker.min.js"></script>

  
    ';
}

// <script src="js/login.js"></script>

function navbar_after()
{
    echo '
        <header>
        <div class="container">
            <div class="header-data">
                <div class="logo">
                    <a href="home.php" title=""><img src="images/logo.png" alt=""></a>
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
                            <a href="home.php" title="">
                                <span><img src="images/icon1.png" alt=""></span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="companies.php" title="">
                                <span><img src="images/icon2.png" alt=""></span>
                                Companies
                            </a>
                        </li>
                        <li>
                            <a href="projects.php" title="">
                                <span><img src="images/icon3.png" alt=""></span>
                                Projects
                            </a>
                        </li>
                        <li>
                            <a href="profiles.php" title="">
                                <span><img src="images/icon4.png" alt=""></span>
                                Profiles
                            </a>
                            <ul>
                                <li><a href="user-profile.php" title="">User Profile</a></li>
                                <li><a href="my-profile-feed.php" title="">my-profile-feed</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="jobs.php" title="">
                                <span><img src="images/icon5.png" alt=""></span>
                                Jobs
                            </a>
                        </li>
                        <li>
                            <a href="#" title="" class="not-box-open">
                                <span><img src="images/icon6.png" alt=""></span>
                                Messages
                            </a>
                            <div class="notification-box msg">
                                <div class="nt-title">
                                    <h4>Setting</h4>
                                    <a href="#" title="">Clear all</a>
                                </div>
                                <div class="nott-list">
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="images/resources/ny-img1.png" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="messages.html" title="">Jassica William</a> </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                            <span>2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="images/resources/ny-img2.png" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="messages.html" title="">Jassica William</a></h3>
                                            <p>Lorem ipsum dolor sit amet.</p>
                                            <span>2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="images/resources/ny-img3.png" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="messages.html" title="">Jassica William</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
                                            <span>2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="view-all-nots">
                                        <a href="messages.php" title="">View All Messsages</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" title="" class="not-box-open">
                                <span><img src="images/icon7.png" alt=""></span>
                                Notification
                            </a>
                            <div class="notification-box">
                                <div class="nt-title">
                                    <h4>Setting</h4>
                                    <a href="#" title="">Clear all</a>
                                </div>
                                <div class="nott-list">
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="images/resources/ny-img1.png" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                            <span>2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="images/resources/ny-img2.png" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                            <span>2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="images/resources/ny-img3.png" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                            <span>2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="images/resources/ny-img2.png" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                            <span>2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="view-all-nots">
                                        <a href="notifications.php" title="">View All Notification</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="menu-btn">
                    <a href="#" title=""><i class="fa fa-bars"></i></a>
                </div><!--menu-btn end-->
                <div class="user-account">
                    <div class="user-info">
                        <img src="images/resources/user.png" alt="">
                        <a href="#" title="">John</a>
                        <i class="la la-sort-down"></i>
                    </div>
                    <div class="user-account-settingss">
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
                            <li><a href="profile-account-setting.html" title="">Account Setting</a></li>
                            <li><a href="#" title="">Privacy</a></li>
                            <li><a href="#" title="">Faqs</a></li>
                            <li><a href="#" title="">Terms & Conditions</a></li>
                        </ul>
                        <h3 class="tc"><a href="#" title="">Logout</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </header>	
    ';
}
/*
function navbar_before()
{
    echo ' 
    <header>
    <div class="container">
        <div class="header-data">
            <div class="logo">
                <a href="index.php" title=""><img src="images/logo.png" alt=""></a>
            </div>           
            <nav class="pull-right">
                <ul>
                    <form class="form-inline" method="post">
                        <div class="form-group">
                            <label class="text-light mr-2"  for="inputEmail4">Email</label>
                            <input type="email" class="form-control mr-2" id="user_email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label class="text-light mr-2" for="password">Password</label>
                            <input type="password" class="form-control mr-2" id="user_password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-warning">Login</button>                      
                    </form>   
                </ul>
            </nav>
        </div>
    </div>
</header>
';

} */



?>