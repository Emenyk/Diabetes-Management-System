<!DOCTYPE html>
<html dir="ltr" lang="en">
  <!-- Mirrored from www.creativelayers.net/themes/freeio-html/page-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Feb 2024 16:36:44 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="bidding, fiverr, freelance marketplace, freelancers, freelancing, gigs, hiring, job board, job portal, job posting, jobs marketplace, peopleperhour, proposals, sell services, upwork"
    />
    <meta
      name="description"
      content="Freeio - Freelance Marketplace HTML Template"
    />
    <meta name="CreativeLayers" content="ATFN" />
    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/ace-responsive-menu.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/ud-custom-spacing.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dashbord_navitaion.css') }}" />
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <!-- Title -->
    <title>DiebCare</title>
    <!-- Favicon -->
    <link
      href="{{ asset('images/favicon.ico') }}"
      sizes="128x128"
      rel="shortcut icon"
      type="image/x-icon"
    />
    <link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />
    <!-- Apple Touch Icon -->
    <link
      href="{{ asset('images/apple-touch-icon-60x60.png') }}"
      sizes="60x60"
      rel="apple-touch-icon"
    />
    <link
      href="{{ asset('images/apple-touch-icon-72x72.png') }}"
      sizes="72x72"
      rel="apple-touch-icon"
    />
    <link
      href="{{ asset('images/apple-touch-icon-114x114.png') }}"
      sizes="114x114"
      rel="apple-touch-icon"
    />
    <link
      href="{{ asset('images/apple-touch-icon-180x180.png') }}"
      sizes="180x180"
      rel="apple-touch-icon"
    />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="wrapper">
      <div class="preloader"></div>

            <!-- Main Header Nav -->
            <header
            class="header-nav nav-innerpage-style menu-home4 dashboard_header main-menu"
          >
            <!-- Ace Responsive Menu -->
            <nav class="posr">
              <div class="container-fluid pr30 pr15-xs pl30 posr menu_bdrt1">
                <div class="row align-items-center justify-content-between">
                  <div class="col-6 col-lg-auto">
                    <div
                      class="text-center text-lg-start d-flex align-items-center"
                    >
                      <div
                        class="dashboard_header_logo position-relative me-2 me-xl-5"
                      >
                        <a href="/" class="logo">DiebCare</a>
                      </div>
                      <div class="fz20 ml90">
                        <a href="#" class="dashboard_sidebar_toggle_icon vam"
                          ><img src="{{ asset('images/dashboard-navicon.svg') }}" alt=""
                        /></a>
                      </div>
                      <a
                        class="login-info d-block d-xl-none ml40 vam"
                        data-bs-toggle="modal"
                        href="#exampleModalToggle"
                        role="button"
                        ><span class="flaticon-loupe"></span
                      ></a>
                      <div class="ml40 d-none d-xl-block">
                        <div class="search_area dashboard-style">
                          <input
                            type="text"
                            class="form-control border-0"
                            placeholder="What service are you looking for today?"
                          />
                          <label><span class="flaticon-loupe"></span></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-lg-auto">
                    <div class="text-center text-lg-end header_right_widgets">
                      <ul
                        class="dashboard_dd_menu_list d-flex align-items-center justify-content-center justify-content-sm-end mb-0 p-0"
                      >
                        <li class="d-none d-sm-block">
                          <a
                            class="text-center mr5 text-thm2 dropdown-toggle fz20"
                            type="button"
                            data-bs-toggle="dropdown"
                            href="#"
                            ><span class="flaticon-notification"></span
                          ></a>
                          <div class="dropdown-menu">
                            <div class="dboard_notific_dd px30 pt10 pb15">
                              <div
                                class="notif_list d-flex align-items-center bdrb1 pb15 mb10"
                              >
                                <img src="{{ asset('images/resource/notif-1.png') }}" alt="" />
                                <div class="details ml10">
                                  <p class="text mb-0">Your resume</p>
                                  <p class="text mb-0">updated!</p>
                                </div>
                              </div>
                              <div
                                class="notif_list d-flex align-items-center bdrb1 pb15 mb10"
                              >
                                <img src="{{ asset('images/resource/notif-2.png') }}" alt="" />
                                <div class="details ml10">
                                  <p class="text mb-0">You changed</p>
                                  <p class="text mb-0">password</p>
                                </div>
                              </div>
                              <div
                                class="notif_list d-flex align-items-center bdrb1 pb15 mb10"
                              >
                                <img src="{{ asset('images/resource/notif-3.png') }}" alt="" />
                                <div class="details ml10">
                                  <p class="text mb-0">Your account has been</p>
                                  <p class="text mb-0">created successfully</p>
                                </div>
                              </div>
                              <div
                                class="notif_list d-flex align-items-center bdrb1 pb15 mb10"
                              >
                                <img src="{{ asset('images/resource/notif-4.png') }}" alt="" />
                                <div class="details ml10">
                                  <p class="text mb-0">You applied for a job</p>
                                  <p class="text mb-0">Front-end Developer</p>
                                </div>
                              </div>
                              <div class="notif_list d-flex align-items-center">
                                <img src="{{ asset('images/resource/notif-5.png') }}" alt="" />
                                <div class="details ml10">
                                  <p class="text mb-0">Your course uploaded</p>
                                  <p class="text mb-0">successfully</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="d-none d-sm-block">
                          <a
                            class="text-center mr5 text-thm2 dropdown-toggle fz20"
                            type="button"
                            data-bs-toggle="dropdown"
                            href="#"
                            ><span class="flaticon-mail"></span
                          ></a>
                          <div class="dropdown-menu">
                            <div class="dboard_notific_dd px30 pt20 pb15">
                              <div
                                class="notif_list d-flex align-items-start bdrb1 pb25 mb10"
                              >
                                <img
                                  class="img-2"
                                  src="{{ asset('images/testimonials/testi-1.png') }}"
                                  alt=""
                                />
                                <div class="details ml15">
                                  <p class="dark-color fw500 mb-2">Ali Tufan</p>
                                  <p class="text mb-2">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing.
                                  </p>
                                  <p class="mb-0 text-thm">4 hours ago</p>
                                </div>
                              </div>
                              <div class="notif_list d-flex align-items-start mb25">
                                <img
                                  class="img-2"
                                  src="{{ asset('images/testimonials/testi-2.png') }}"
                                  alt=""
                                />
                                <div class="details ml15">
                                  <p class="dark-color fw500 mb-2">Ali Tufan</p>
                                  <p class="text mb-2">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing.
                                  </p>
                                  <p class="mb-0 text-thm">4 hours ago</p>
                                </div>
                              </div>
                              <div class="d-grid">
                                <a
                                  href="page-dashboard-message.html"
                                  class="ud-btn btn-thm w-100"
                                  >View All Messages<i
                                    class="fal fa-arrow-right-long"
                                  ></i
                                ></a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="d-none d-sm-block">
                          <a
                            class="text-center mr5 text-thm2 dropdown-toggle fz20"
                            type="button"
                            data-bs-toggle="dropdown"
                            href="#"
                            ><span class="flaticon-like"></span
                          ></a>
                          <div class="dropdown-menu">
                            <div class="dboard_notific_dd px30 pt10 pb15">
                              <div
                                class="notif_list d-flex align-items-center bdrb1 pb15 mb10"
                              >
                                <img src="{{ asset('images/resource/notif-1.png') }}" alt="" />
                                <div class="details ml10">
                                  <p class="text mb-0">Your resume</p>
                                  <p class="text mb-0">updated!</p>
                                </div>
                              </div>
                              <div
                                class="notif_list d-flex align-items-center bdrb1 pb15 mb10"
                              >
                                <img src="{{ asset('images/resource/notif-2.png') }}" alt="" />
                                <div class="details ml10">
                                  <p class="text mb-0">You changed</p>
                                  <p class="text mb-0">password</p>
                                </div>
                              </div>
                              <div
                                class="notif_list d-flex align-items-center bdrb1 pb15 mb10"
                              >
                                <img src="{{ asset('images/resource/notif-3.png') }}" alt="" />
                                <div class="details ml10">
                                  <p class="text mb-0">Your account has been</p>
                                  <p class="text mb-0">created successfully</p>
                                </div>
                              </div>
                              <div
                                class="notif_list d-flex align-items-center bdrb1 pb15 mb10"
                              >
                                <img src="{{ asset('images/resource/notif-4.png') }}" alt="" />
                                <div class="details ml10">
                                  <p class="text mb-0">You applied for a job</p>
                                  <p class="text mb-0">Front-end Developer</p>
                                </div>
                              </div>
                              <div class="notif_list d-flex align-items-center">
                                <img src="{{ asset('images/resource/notif-5.png') }}" alt="" />
                                <div class="details ml10">
                                  <p class="text mb-0">Your course uploaded</p>
                                  <p class="text mb-0">successfully</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="user_setting">
                          <div class="dropdown">
                            <a class="btn" href="#" data-bs-toggle="dropdown">
                              <img src="{{ asset('images/resource/user.png') }}" alt="user.png" />
                            </a>
                            <div class="dropdown-menu">
                              <div class="user_setting_content">
                                <p class="fz15 fw400 ff-heading mb10 pl30">Start</p>
                                <a
                                  class="dropdown-item active"
                                  href="{{ route('dashboard') }}"
                                  ><i class="flaticon-home mr10"></i>Dashboard</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="{{ route('health.index') }}"
                                  ><i class="flaticon-document mr10"></i>My Health
                                  Plans</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="page-dashboard-save.html"
                                  ><i class="flaticon-like mr10"></i>Saved Plans</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="{{ route('education') }}"
                                  ><i class="flaticon-chat mr10"></i>Education $
                                  Materials</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="{{ route('meal.index') }}"
                                  ><i class="flaticon-review-1 mr10"></i>Meal
                                  Plan</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="{{ route('medication.index') }}"
                                  ><i class="flaticon-receipt mr10"></i>Medication
                                  Reminder</a
                                >
                                <p class="fz15 fw400 ff-heading mt30 pl30">
                                  Account
                                </p>
                                <a
                                  class="dropdown-item"
                                  href="page-dashboard-profile.html"
                                  ><i class="flaticon-photo mr10"></i>My Profile</a
                                >
                                <a class="dropdown-item" href="page-login.html"
                                  ><i class="flaticon-logout mr10"></i>Logout</a
                                >
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </header>
          <!-- Search Modal -->
          <div class="search-modal">
            <div
              class="modal fade"
              id="exampleModalToggle"
              aria-hidden="true"
              aria-labelledby="exampleModalToggleLabel"
              tabindex="-1"
            >
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel"></h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    >
                      <i class="fal fa-xmark"></i>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="popup-search-field search_area">
                      <input
                        type="text"
                        class="form-control border-0"
                        placeholder="What service are you looking for today?"
                      />
                      <label><span class="far fa-magnifying-glass"></span></label>
                      <button class="ud-btn btn-thm" type="submit">Search</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Mobile Nav  -->
          <div id="page" class="mobilie_header_nav stylehome1">
            <div class="mobile-menu">
              <div class="header bdrb1">
                <div class="menu_and_widgets">
                  <div
                    class="mobile_menu_bar d-flex justify-content-between align-items-center"
                  >
                    <a class="mobile_logo" href="index10.html">DiebCare</a>
                    <div class="right-side text-end">
                      <a class="" href="page-login.html">join</a>
                      <a class="menubar ml30" href="#menu"
                        ><img src="images/mobile-dark-nav-icon.svg" alt=""
                      /></a>
                    </div>
                  </div>
                </div>
                <div class="posr">
                  <div class="mobile_menu_close_btn">
                    <span class="far fa-times"></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.mobile-menu -->
            <nav id="menu" class="">
              <ul>
                <li>
                  <span>Home</span>
                </li>
                <li>
                  <span>Services</span>
                  <>
                    <li>
                      <a href="{{ route('medication.index') }}">Medication Reminder</a>
                    </li>

                    <li>
                      <a href="{{ route('meal.index') }}">Meal Plan</a>
                    </li>

                        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('health.index') }}">My Health Plan</a></li>
                        <li><a href="#">Saved Plans</a></li>
                        <li><a href="{{ route('education') }}">Education & Materials</a></li>


                        <li>
                          <a href="#">My Profile</a>
                        </li>



                <li>
                  <a href="page-about.html">About</a>
                </li>
                <li>
                  <a href="page-contact.html">Contact</a>
                </li>


                <!-- Only for Mobile View -->
              </ul>
            </nav>
          </div>

          <div class="dashboard_content_wrapper">
            <div class="dashboard dashboard_wrapper pr30 pr0-xl">
              <div class="dashboard__sidebar d-none d-lg-block">
                <div class="dashboard_sidebar_list">
                  <p class="fz15 fw400 ff-heading pl30">Start</p>
                  <div class="sidebar_list_item">
                    <a href="{{ route('dashboard') }}" class="items-center -is-active"
                      ><i class="flaticon-home mr15"></i>Dashboard</a
                    >
                  </div>
                  <div class="sidebar_list_item">
                    <a href="{{ route('health.index') }}" class="items-center"
                      ><i class="flaticon-document mr15"></i>My Health Plans</a
                    >
                  </div>
                  <div class="sidebar_list_item">
                    <a href="#" class="items-center"
                      ><i class="flaticon-like mr15"></i>Saved Plans</a
                    >
                  </div>
                  <div class="sidebar_list_item">
                    <a href="{{ route('education') }}" class="items-center"
                      ><i class="flaticon-chat mr15"></i>Education & materials</a
                    >
                  </div>
                  <div class="sidebar_list_item">
                    <a href="{{ route('meal.index') }}" class="items-center"
                      ><i class="flaticon-review-1 mr15"></i>Meal Planner</a
                    >
                  </div>
                  <div class="sidebar_list_item">
                    <a href="{{ route('medication.index') }}" class="items-center"
                      ><i class="flaticon-receipt mr15"></i>Medication Reminder</a
                    >
                  </div>

                  <p class="fz15 fw400 ff-heading pl30 mt30">Account</p>
                  <div class="sidebar_list_item">
                    <a href="#" class="items-center"
                      ><i class="flaticon-photo mr15"></i>My Profile</a
                    >
                  </div>
                  <div class="sidebar_list_item">
                    <a href="page-login.html" class="items-center"
                      ><i class="flaticon-logout mr15"></i>Logout</a
                    >
                  </div>
                </div>
              </div>
              <div class="dashboard__main pl0-md">
                <div class="dashboard__content hover-bgc-color">
                  <div class="row pb40">
                    <div class="col-lg-12">
                      <div class="dashboard_navigationbar d-block d-lg-none">
                        <div class="dropdown">
                          <button onclick="myFunction()" class="dropbtn">
                            <i class="fa fa-bars pr10"></i> Dashboard Navigation
                          </button>
                          <ul id="myDropdown" class="dropdown-content">
                            <li>
                              <p class="fz15 fw400 ff-heading mt30 pl30">Start</p>
                            </li>
                            <li class="active">
                              <a href="{{ route('dashboard') }}"
                                ><i class="flaticon-home mr10"></i>Dashboard</a
                              >
                            </li>
                            <li>
                              <a href="{{ route('health.index') }}"
                                ><i class="flaticon-document mr10"></i>My
                                Health Plans</a
                              >
                            </li>
                            <li>
                              <a href="page-dashboard-save.html"
                                ><i class="flaticon-like mr10"></i>Saved Plans</a
                              >
                            </li>
                            <li>
                              <a href="{{ route('education') }}"
                                ><i class="flaticon-chat mr10"></i>Education and Materials</a
                              >
                            </li>
                            <li>
                              <a href="{{ route('meal.index') }}"
                                ><i class="flaticon-review-1 mr10"></i>Meal Plan</a
                              >
                            </li>
                            <li>
                              <a href="{{ route('medication.index') }}"
                                ><i class="flaticon-receipt mr10"></i>Medication Reminder</a
                              >
                            </li>

                              <p class="fz15 fw400 ff-heading mt30 pl30">Account</p>
                            </li>
                            <li>
                              <a href="page-dashboard-profile.html"
                                ><i class="flaticon-photo mr10"></i>My Profile</a
                              >
                            </li>
                            <li>
                              <a href="page-login.html"
                                ><i class="flaticon-logout mr10"></i>Logout</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    @yield('dashboard')
                  </div>

                  @yield('content')


            </div>
            <footer class="dashboard_footer pt30 pb30">
            <div class="container">
                <div
                class="row align-items-center justify-content-center justify-content-md-between"
                >
                <div class="col-auto">
                    <div class="copyright-widget">
                    <p class="mb-md-0">
                        © DiebCare. 2024. All rights reserved.
                    </p>
                    </div>
                </div>
                <div class="col-auto">
                    <div
                    class="footer_bottom_right_btns at-home8 text-center text-lg-end"
                    >
                    <ul class="p-0 m-0">
                        <li class="list-inline-item bg-white">
                        <select class="selectpicker show-tick">
                            <option>US$ USD</option>
                            <option>Euro</option>
                            <option>Pound</option>
                        </select>
                        </li>
                        <li class="list-inline-item bg-white">
                        <select class="selectpicker show-tick">
                            <option>English</option>
                            <option>Frenc</option>
                            <option>Italian</option>
                            <option>Spanish</option>
                            <option>Turkey</option>
                        </select>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            </footer>
        </div>
        </div>
        </div>
        <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
        </div>
      <!-- Wrapper End -->
      <!-- Footer Scripts -->

      <script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
      <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
      <script src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
      <script src="{{ asset('js/ace-responsive-menu.js') }}"></script>
      <script src="{{ asset('js/chart.min.js') }}"></script>
      <script src="{{ asset('js/chart-custome.js') }}"></script>
      <script src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
      <script src="{{ asset('js/dashboard-script.js') }}"></script>
      <!-- Custom script for all pages -->
      <script src="{{ asset('js/script.js') }}"></script>
    </body>

    <!-- Mirrored from www.creativelayers.net/themes/freeio-html/page-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Feb 2024 16:37:53 GMT -->
</html>
