
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Dashboard</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Asap:400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" id="color" href="css/default.css">
</head>

<body class="inner-pages">
    <!-- START SECTION HEADINGS -->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="top-info hidden-sm-down">
                    <div class="call-header">
                        <p><i class="fa fa-phone" aria-hidden="true"></i> (234) 0200 17813</p>
                    </div>
                    <div class="address-header">
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> 95 South Park Ave, USA</p>
                    </div>
                    <div class="mail-header">
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> info@listingo.com</p>
                    </div>
                </div>
                <div class="top-social hidden-sm-down">
                    <div class="login-wrap">
                        <ul class="d-flex">
                            <li><a href="login.html"><i class="fa fa-user"></i> Login</a></li>
                            <li><a href="register.html"><i class="fa fa-sign-in"></i> Register</a></li>
                        </ul>
                    </div>
                    <div class="social-icons-header">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang" data-toggle="dropdown" aria-haspopup="true">
                            <img src="images/en.png" alt="lang" /> English
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownlang">
                            <li><img src="images/fr.png" alt="lang" />France</li>
                            <li><img src="images/de.png" alt="lang" /> German</li>
                            <li><img src="images/it.png" alt="lang" />Italy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom heading sticky-header" id="heading">
            <div class="container">
                <a href="index.html" class="logo">
                    <img src="images/logo.svg" alt="realhome">
                </a>
                <button type="button" class="search-button" data-toggle="collapse" data-target="#bloq-search" aria-expanded="false">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                <div class="get-quote hidden-lg-down">
                    <a href="add-listing.html">
                        <p>Add Listing</p>
                    </a>
                </div>
                <button type="button" class="button-menu hidden-lg-up" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>

                <form action="#" id="bloq-search" class="collapse">
                    <div class="bloq-search">
                        <input type="text" placeholder="search...">
                        <input type="submit" value="Search">
                    </div>
                </form>

                <nav id="main-menu" class="collapse">
                    <ul>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li class="hidden-lg-up">
                            <div class="po">
                                <a data-toggle="collapse" href="#home" aria-expanded="false">Home</a>
                            </div>
                            <div class="collapse" id="home">
                                <div class="card card-block">
                                    <a class="dropdown-item" href="index.html">Home 1</a>
                                    <a class="dropdown-item" href="index-2.html">Home 2</a>
                                    <a class="dropdown-item" href="index-3.html">Home 3</a>
                                    <a class="dropdown-item" href="index-4.html">Home 4</a>
                                </div>
                            </div>
                        </li>
                        <!-- END COLLAPSE MOBILE MENU -->
                        <li class="dropdown hidden-md-down">
                            <a class="active dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Home</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index.html">Home 1</a>
                                <a class="dropdown-item" href="index-2.html">Home 2</a>
                                <a class="dropdown-item" href="index-3.html">Home 3</a>
                                <a class="dropdown-item" href="index-4.html">Home 4</a>
                            </div>
                        </li>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li class="hidden-lg-up">
                            <div class="po">
                                <a data-toggle="collapse" href="#listing" aria-expanded="false">Listings</a>
                            </div>
                            <div class="collapse" id="listing">
                                <div class="card card-block">
                                    <a class="dropdown-item" href="listings-full-list.html">Listing Full List</a>
                                    <a class="dropdown-item" href="listings-list-right-sidebar.html">List Right Sidebar </a>
                                    <a class="dropdown-item" href="listings-full-grid.html">Listing Full Grid</a>
                                    <a class="dropdown-item" href="listings-grid-right-sidebar.html">Grid Right Sidebar</a>
                                    <a class="dropdown-item" href="listings-half-map.html">Listing Half Map</a>
                                    <a class="dropdown-item" href="listings-map.html">Listing Full Map</a>
                                    <a class="dropdown-item" href="listing-details.html">Listing Details</a>
                                </div>
                            </div>
                        </li>
                        <!-- END COLLAPSE MOBILE MENU -->
                        <li class="dropdown hidden-md-down">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Listings</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="listings-full-list.html">Listing Full List</a>
                                <a class="dropdown-item" href="listings-list-right-sidebar.html">List Right Sidebar </a>
                                <a class="dropdown-item" href="listings-full-grid.html">Listing Full Grid</a>
                                <a class="dropdown-item" href="listings-grid-right-sidebar.html">Grid Right Sidebar</a>
                                <a class="dropdown-item" href="listings-half-map.html">Listing Half Map</a>
                                <a class="dropdown-item" href="listings-map.html">Listing Full Map</a>
                                <a class="dropdown-item" href="listing-details.html">Listing Details</a>
                            </div>
                        </li>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li class="hidden-lg-up">
                            <div class="po">
                                <a data-toggle="collapse" href="#about" aria-expanded="false">Pages</a>
                            </div>
                            <div class="collapse" id="about">
                                <div class="card card-block">
                                    <a class="dropdown-item" href="about.html">About Us</a>
                                    <a class="dropdown-item" href="dashboard.html">Dashboard</a>
                                    <a class="dropdown-item" href="faq.html">Faq</a>
                                    <a class="dropdown-item" href="pricing-table.html">Pricing</a>
                                    <a class="dropdown-item" href="payment-method.html">Payment Method</a>
                                    <a class="dropdown-item" href="thank-you.html">Thank You</a>
                                    <a class="dropdown-item" href="404.html">404</a>
                                    <a class="dropdown-item" href="login.html">Login</a>
                                    <a class="dropdown-item" href="register.html">Register</a>
                                    <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                    <a class="dropdown-item" href="under-construction.html">Under Construction</a>
                                </div>
                            </div>
                        </li>
                        <!-- END COLLAPSE MOBILE MENU -->
                        <li class="dropdown hidden-md-down">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Pages</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="about.html">About Us</a>
                                <a class="dropdown-item" href="dashboard.html">Dashboard</a>
                                <a class="dropdown-item" href="faq.html">Faq</a>
                                <a class="dropdown-item" href="pricing-table.html">Pricing</a>
                                <a class="dropdown-item" href="payment-method.html">Payment Method</a>
                                <a class="dropdown-item" href="thank-you.html">Thank You</a>
                                <a class="dropdown-item" href="404.html">404</a>
                                <a class="dropdown-item" href="login.html">Login</a>
                                <a class="dropdown-item" href="register.html">Register</a>
                                <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                <a class="dropdown-item" href="under-construction.html">Under Construction</a>
                            </div>
                        </li>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li class="hidden-lg-up">
                            <div class="po">
                                <a data-toggle="collapse" href="#blog" aria-expanded="false">Blog</a>
                            </div>
                            <div class="collapse" id="blog">
                                <div class="card card-block">
                                    <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                                    <a class="dropdown-item" href="blog-grid-sidebar.html">Blog Grid Sidebar</a>
                                    <a class="dropdown-item" href="blog-list.html">Blog List</a>
                                    <a class="dropdown-item" href="blog-list-sidebar.html">Blog List Sidebar</a>
                                    <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                                </div>
                            </div>
                        </li>
                        <!-- END COLLAPSE MOBILE MENU -->
                        <li class="dropdown hidden-md-down">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Blog</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                                <a class="dropdown-item" href="blog-grid-sidebar.html">Blog Grid Sidebar</a>
                                <a class="dropdown-item" href="blog-list.html">Blog List</a>
                                <a class="dropdown-item" href="blog-list-sidebar.html">Blog List Sidebar</a>
                                <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                            </div>
                        </li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Dashboard</h1>
                <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Dashboard</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION DASHBOARD -->
    <section class="user-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="user-profile-box">
                        <div class="header clearfix">
                            <h2>Ichiro Tanaka</h2>
                            <h4>Active User</h4>
                            <img src="images/testimonials/ts-6.jpg" alt="avatar" class="img-fluid profile-img">
                        </div>
                        <div class="detail clearfix">
                            <ul>
                                <li>
                                    <a class="active" href="dashboard.html">
                                        <i class="fa fa-map-marker"></i> Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="user-profile.html">
                                        <i class="fa fa-user"></i>Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="my-listings.html">
                                        <i class="fa fa-list" aria-hidden="true"></i>My Listings
                                    </a>
                                </li>
                                <li>
                                    <a href="favorited-listings.html">
                                        <i class="fa fa-heart" aria-hidden="true"></i>Favorited Listings
                                    </a>
                                </li>
                                <li>
                                    <a href="add-listing.html">
                                        <i class="fa fa-list" aria-hidden="true"></i>Submit New Listings
                                    </a>
                                </li>
                                <li>
                                    <a href="change-password.html">
                                        <i class="fa fa-lock"></i>Change Password
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        <i class="fas fa-sign-out-alt"></i>Log Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="dashborad-box">
                        <h4 class="title">Manage Dashboard</h4>
                        <div class="section-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="item">
                                        <div class="icon">
                                            <i class="fa fa-list" aria-hidden="true"></i>
                                        </div>
                                        <div class="info">
                                            <h6 class="number">345</h6>
                                            <p class="type ml-1">Listing</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="item">
                                        <div class="icon">
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="info">
                                            <h6 class="number">116</h6>
                                            <p class="type ml-1">Review</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="item mb-0">
                                        <div class="icon">
                                            <i class="fas fa-comments"></i>
                                        </div>
                                        <div class="info">
                                            <h6 class="number">223</h6>
                                            <p class="type ml-1">Messages</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashborad-box">
                        <h4 class="title">Listing</h4>
                        <div class="section-body listing-table">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Listing Name</th>
                                            <th>Date</th>
                                            <th>Rating</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Luxury Restaurant</td>
                                            <td>23 Jan 2020</td>
                                            <td class="rating"><span>5.0</span></td>
                                            <td class="status"><span class=" active">Active</span></td>
                                            <td class="edit"><a href="#"><i class="fa fa-pencil"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Gym in Town</td>
                                            <td>11 Feb 2020</td>
                                            <td class="rating"><span>4.5</span></td>
                                            <td class="status"><span class="active">Active</span></td>
                                            <td class="edit"><a href="#"><i class="fa fa-pencil"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Cafe in Boston</td>
                                            <td>09 March 2020</td>
                                            <td class="rating"><span>5.0</span></td>
                                            <td class="status"><span class="non-active">Non-Active</span></td>
                                            <td class="edit"><a href="#"><i class="fa fa-pencil"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="pb-0">Car Dealer in New York</td>
                                            <td class="pb-0">24 April 2020</td>
                                            <td class="rating pb-0"><span>4.5</span></td>
                                            <td class="status pb-0"><span class="active">Active</span></td>
                                            <td class="edit pb-0"><a href="#"><i class="fa fa-pencil"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="dashborad-box">
                        <h4 class="title">Message</h4>
                        <div class="section-body">
                            <div class="messages">
                                <div class="message">
                                    <div class="thumb">
                                        <img class="img-fluid" src="images/testimonials/ts-1.jpg" alt="">
                                    </div>
                                    <div class="body">
                                        <h6>Mary Smith</h6>
                                        <p class="post-time">22 Minutes ago</p>
                                        <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                        <div class="controller">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="far fa-trash-alt"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="message">
                                    <div class="thumb">
                                        <img class="img-fluid" src="images/testimonials/ts-2.jpg" alt="">
                                    </div>
                                    <div class="body">
                                        <h6>Karl Tyron</h6>
                                        <p class="post-time">23 Minutes ago</p>
                                        <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                        <div class="controller">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="message">
                                    <div class="thumb">
                                        <img class="img-fluid" src="images/testimonials/ts-3.jpg" alt="">
                                    </div>
                                    <div class="body">
                                        <h6>Lisa Willis</h6>
                                        <p class="post-time">53 Minutes ago</p>
                                        <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                        <div class="controller">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashborad-box">
                        <h4 class="title">Review</h4>
                        <div class="section-body">
                            <div class="reviews">
                                <div class="review">
                                    <div class="thumb">
                                        <img class="img-fluid" src="images/testimonials/ts-1.jpg" alt="">
                                    </div>
                                    <div class="body">
                                        <h6>Mary Smith</h6>
                                        <p class="post-time">10 hours ago</p>
                                        <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                        <ul class="starts mb-0">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                        <div class="controller">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="review">
                                    <div class="thumb">
                                        <img class="img-fluid" src="images/testimonials/ts-2.jpg" alt="">
                                    </div>
                                    <div class="body">
                                        <h6>Karl Tyron</h6>
                                        <p class="post-time">22 hours ago</p>
                                        <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                        <ul class="starts mb-0">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                        <div class="controller">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="review">
                                    <div class="thumb">
                                        <img class="img-fluid" src="images/testimonials/ts-3.jpg" alt="">
                                    </div>
                                    <div class="body">
                                        <h6>Lisa Willis</h6>
                                        <p class="post-time">51 hours ago</p>
                                        <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                        <ul class="starts mb-0">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                        <div class="controller">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashborad-box mb-0">
                        <h4 class="heading pt-0">Personal Information</h4>
                        <div class="section-inforamation">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" placeholder="Enter your First name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" placeholder="Enter your Last name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="text" class="form-control" placeholder="Ex: example@domain.com">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" placeholder="Ex: +1-800-7700-00">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea name="address" class="form-control" placeholder="Write your address here"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>About Yourself</label>
                                            <textarea name="address" class="form-control" placeholder="Write about userself"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="password-section">
                                    <h6>Update Password</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" class="form-control" placeholder="Write new password">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Repeat Password</label>
                                                <input type="password" class="form-control" placeholder="Write same password again">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg mt-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION DASHBOARD -->

    <!-- START FOOTER -->
    <footer class="first-footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="netabout">
                            <a href="index.html" class="logo">
                                <img src="images/logo.svg" alt="netcom">
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto soluta laboriosam, perspiciatis, aspernatur officiis esse.</p>
                        </div>
                        <div class="contactus">
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">95 South Park Avenue, USA</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p">+456 875 369 208</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">support@listingo.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widget quick-link clearfix">
                            <h3 class="widget-title">Quick Links</h3>
                            <div class="quick-links">
                                <ul class="one-half mr-5">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="listing-details.html">Listing Details</a></li>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li class="no-pb"><a href="blog-list.html">Blog List</a></li>
                                </ul>
                                <ul class="one-half">
                                    <li><a href="blog-grid.html">Blog</a></li>
                                    <li><a href="pricing-table.html">Pricing</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="faq.html">Our Faq</a></li>
                                    <li class="no-pb"><a href="listings-full-grid.html">Listings</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widget">
                            <h3>Instagram</h3>
                            <ul class="photo">
                                <li class="hover-effect">
                                    <figure>
                                        <a href="#"><img src="images/instagram/inst-1.jpeg" alt=""></a>
                                    </figure>
                                </li>
                                <li class="hover-effect">
                                    <figure>
                                        <a href="#"><img src="images/instagram/inst-2.jpeg" alt=""></a>
                                    </figure>
                                </li>
                                <li class="hover-effect">
                                    <figure>
                                        <a href="#"><img src="images/instagram/inst-3.jpeg" alt=""></a>
                                    </figure>
                                </li>
                                <li class="hover-effect">
                                    <figure>
                                        <a href="#"><img src="images/instagram/inst-4.jpeg" alt=""></a>
                                    </figure>
                                </li>
                                <li class="hover-effect">
                                    <figure>
                                        <a href="#"><img src="images/instagram/inst-5.jpg" alt=""></a>
                                    </figure>
                                </li>
                                <li class="hover-effect">
                                    <figure>
                                        <a href="#"><img src="images/instagram/inst-6.jpeg" alt=""></a>
                                    </figure>
                                </li>
                                <li class="hover-effect">
                                    <figure>
                                        <a href="#"><img src="images/instagram/inst-7.jpeg" alt=""></a>
                                    </figure>
                                </li>
                                <li class="hover-effect">
                                    <figure>
                                        <a href="#"><img src="images/instagram/inst-8.jpg" alt=""></a>
                                    </figure>
                                </li>
                                <li class="hover-effect">
                                    <figure>
                                        <a href="#"><img src="images/instagram/inst-9.jpeg" alt=""></a>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="newsletters">
                            <h3>Newsletters</h3>
                            <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.</p>
                        </div>
                        <form class="bloq-email mailchimp form-inline" method="post">
                            <label for="subscribeEmail" class="error"></label>
                            <div class="email">
                                <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                                <input type="submit" value="Subscribe">
                                <p class="subscription-success"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer">
            <div class="container">
                <p>Copyright. ©2020 Sigopper. </p>
                <!-- <ul class="netsocials">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                </ul> -->
            </div>
        </div>
    </footer>

    <a data-scroll href="#heading" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <!-- END FOOTER -->
    
    <!--Style Switcher===========================================-->
	<div class="color-switcher" id="choose_color"> <a href="#." class="picker_close"><i class="fa fa-cog fa-spin fa-2x" ></i></a>
		<div class="theme-colours">
			<p class="font-italic">Choose Colour style</p>
			<ul>
				<li>
					<a href="#." class="blue" id="blue"></a>
				</li>
				<li>
					<a href="#." class="pink" id="pink"></a>
				</li>
				<li>
					<a href="#." class="orange" id="orange"></a>
				</li>
				<li>
					<a href="#." class="purple" id="purple"></a>
				</li>
				<li>
					<a href="#." class="green" id="green"></a>
				</li>
				<li>
					<a href="#." class="red" id="red"></a>
				</li>
				<li>
					<a href="#." class="cyan" id="cyan"></a>
				</li>
				<li>
					<a href="#." class="sky-blue" id="sky-blue"></a>
				</li>
				<li>
					<a href="#." class="gray" id="gray"></a>
				</li>
				<li>
					<a href="#." class="brown" id="brown"></a>
				</li>
			</ul>
		</div>
	</div>

    <!-- ARCHIVES JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/ajaxchimp.min.js"></script>
    <script src="js/newsletter.js"></script>
    <script src="js/inner.js"></script>
    <script src="js/color-switcher.js"></script>
</body>

</html>
