
<!doctype html>
<html lang="en" class="minimal-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('admin-asset') }}/assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('admin-asset') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ asset('admin-asset') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{ asset('admin-asset') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('admin-asset') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('admin-asset') }}/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{ asset('admin-asset') }}/assets/css/style.css" rel="stylesheet" />
    <link href="{{ asset('admin-asset') }}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin-asset') }}/assets/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{ asset('admin-asset') }}/assets/css/pace.min.css" rel="stylesheet" />


    <!--Theme Styles-->
    <link href="{{ asset('admin-asset') }}/assets/css/dark-theme.css" rel="stylesheet" />
    <link href="{{ asset('admin-asset') }}/assets/css/light-theme.css" rel="stylesheet" />
    <link href="{{ asset('admin-asset') }}/assets/css/semi-dark.css" rel="stylesheet" />
    <link href="{{ asset('admin-asset') }}/assets/css/header-colors.css" rel="stylesheet" />

    <title>Skodash - Bootstrap 5 Admin Template</title>
</head>

<body>


<!--start wrapper-->
<div class="wrapper">
    <!--start top header-->
    <header class="top-header">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-icon d-xl-none">
                <i class="bi bi-list"></i>
            </div>
            <div class="top-navbar d-none d-xl-block">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="app-emailbox.html">Email</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:;">Projects</a>
                    </li>
                    <li class="nav-item d-none d-xxl-block">
                        <a class="nav-link" href="javascript:;">Events</a>
                    </li>
                    <li class="nav-item d-none d-xxl-block">
                        <a class="nav-link" href="app-to-do.html">Todo</a>
                    </li>
                </ul>
            </div>
            <div class="search-toggle-icon d-xl-none ms-auto">
                <i class="bi bi-search"></i>
            </div>
            <form class="searchbar d-none d-xl-flex ms-auto">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
                <input class="form-control" type="text" placeholder="Type here to search">
                <div class="position-absolute top-50 translate-middle-y d-block d-xl-none search-close-icon"><i class="bi bi-x-lg"></i></div>
            </form>
            <div class="top-navbar-right ms-3">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                            <div class="user-setting d-flex align-items-center gap-1">
                                <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-1.png" class="user-img" alt="">
                                <div class="user-name d-none d-sm-block">Jhon Deo</div>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="60" height="60">
                                        <div class="ms-3">
                                            <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                                            <small class="mb-0 dropdown-user-designation text-secondary">HR Manager</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="pages-user-profile.html">
                                    <div class="d-flex align-items-center">
                                        <div class="setting-icon"><i class="bi bi-person-fill"></i></div>
                                        <div class="setting-text ms-3"><span>Profile</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="setting-icon"><i class="bi bi-gear-fill"></i></div>
                                        <div class="setting-text ms-3"><span>Setting</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index2.html">
                                    <div class="d-flex align-items-center">
                                        <div class="setting-icon"><i class="bi bi-speedometer"></i></div>
                                        <div class="setting-text ms-3"><span>Dashboard</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="setting-icon"><i class="bi bi-piggy-bank-fill"></i></div>
                                        <div class="setting-text ms-3"><span>Earnings</span></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="setting-icon"><i class="bi bi-cloud-arrow-down-fill"></i></div>
                                        <div class="setting-text ms-3"><span>Downloads</span></div>
                                    </div>
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="authentication-signup-with-header-footer.html">
                                    <div class="d-flex align-items-center">
                                        <div class="setting-icon"><i class="bi bi-lock-fill"></i></div>
                                        <div class="setting-text ms-3"><span>Logout</span></div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                            <div class="projects">
                                <i class="bi bi-grid-3x3-gap-fill"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="row row-cols-3 gx-2">
                                <div class="col">
                                    <a href="ecommerce-orders.html">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-primary bg-gradient">
                                                <i class="bi bi-cart-plus-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Orders</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-danger bg-gradient">
                                                <i class="bi bi-people-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Users</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="ecommerce-products-grid.html">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-success bg-gradient">
                                                <i class="bi bi-bank2"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Products</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="component-media-object.html">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-orange bg-gradient">
                                                <i class="bi bi-collection-play-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Media</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="pages-user-profile.html">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-purple bg-gradient">
                                                <i class="bi bi-person-circle"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Account</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-dark bg-info bg-gradient">
                                                <i class="bi bi-file-earmark-text-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Docs</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="ecommerce-orders-detail.html">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-pink bg-gradient">
                                                <i class="bi bi-credit-card-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Payment</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-white bg-bronze bg-gradient">
                                                <i class="bi bi-calendar-check-fill"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Events</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="apps p-2 radius-10 text-center">
                                            <div class="apps-icon-box mb-1 text-dark bg-warning bg-gradient">
                                                <i class="bi bi-book-half"></i>
                                            </div>
                                            <p class="mb-0 apps-name">Story</p>
                                        </div>
                                    </a>
                                </div>
                            </div><!--end row-->
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                            <div class="messages">
                                <span class="notify-badge">5</span>
                                <i class="bi bi-messenger"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end p-0">
                            <div class="p-2 border-bottom m-2">
                                <h5 class="h5 mb-0">Messages</h5>
                            </div>
                            <div class="header-message-list p-2">
                                <div class="dropdown-item bg-light radius-10 mb-1">
                                    <form class="dropdown-searchbar position-relative">
                                        <div class="position-absolute top-50 start-0 translate-middle-y px-3 search-icon"><i class="bi bi-search"></i></div>
                                        <input class="form-control" type="search" placeholder="Search Messages">
                                    </form>
                                </div>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="52" height="52">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span class="msg-time float-end text-secondary">1 m</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The standard chunk of lorem...</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-2.png" alt="" class="rounded-circle" width="52" height="52">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span class="msg-time float-end text-secondary">7 m</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many desktop publishing</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-3.png" alt="" class="rounded-circle" width="52" height="52">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span class="msg-time float-end text-secondary">2 h</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making this the first true</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-4.png" alt="" class="rounded-circle" width="52" height="52">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">Peter Costanzo <span class="msg-time float-end text-secondary">3 h</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">It was popularised in the 1960</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-5.png" alt="" class="rounded-circle" width="52" height="52">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">Thomas Wheeler <span class="msg-time float-end text-secondary">1 d</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">If you are going to use a passage</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-6.png" alt="" class="rounded-circle" width="52" height="52">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">Johnny Seitz <span class="msg-time float-end text-secondary">2 w</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">All the Lorem Ipsum generators</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="52" height="52">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span class="msg-time float-end text-secondary">1 m</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The standard chunk of lorem...</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-2.png" alt="" class="rounded-circle" width="52" height="52">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span class="msg-time float-end text-secondary">7 m</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many desktop publishing</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-3.png" alt="" class="rounded-circle" width="52" height="52">
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span class="msg-time float-end text-secondary">2 h</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making this the first true</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <div><hr class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <div class="text-center">View All Messages</div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-large d-none d-sm-block">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                            <div class="notifications">
                                <span class="notify-badge">8</span>
                                <i class="bi bi-bell-fill"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end p-0">
                            <div class="p-2 border-bottom m-2">
                                <h5 class="h5 mb-0">Notifications</h5>
                            </div>
                            <div class="header-notifications-list p-2">
                                <div class="dropdown-item bg-light radius-10 mb-1">
                                    <form class="dropdown-searchbar position-relative">
                                        <div class="position-absolute top-50 start-0 translate-middle-y px-3 search-icon"><i class="bi bi-search"></i></div>
                                        <input class="form-control" type="search" placeholder="Search Messages">
                                    </form>
                                </div>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box"><i class="bi bi-basket2-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">New Orders <span class="msg-time float-end text-secondary">1 m</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You have recived new orders</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box"><i class="bi bi-people-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">New Customers <span class="msg-time float-end text-secondary">7 m</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5 new user registered</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box"><i class="bi bi-file-earmark-bar-graph-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">24 PDF File <span class="msg-time float-end text-secondary">2 h</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The pdf files generated</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box"><i class="bi bi-collection-play-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">Time Response  <span class="msg-time float-end text-secondary">3 h</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5.1 min avarage time response</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box"><i class="bi bi-cursor-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">New Product Approved  <span class="msg-time float-end text-secondary">1 d</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Your new product has approved</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box"><i class="bi bi-gift-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">New Comments <span class="msg-time float-end text-secondary">2 w</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New customer comments recived</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box"><i class="bi bi-droplet-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">New 24 authors<span class="msg-time float-end text-secondary">1 m</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">24 new authors joined last week</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box"><i class="bi bi-mic-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">Your item is shipped <span class="msg-time float-end text-secondary">7 m</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Successfully shipped your item</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box"><i class="bi bi-lightbulb-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">Defense Alerts <span class="msg-time float-end text-secondary">2 h</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">45% less alerts last 4 weeks</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box"><i class="bi bi-bookmark-heart-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">4 New Sign Up <span class="msg-time float-end text-secondary">2 w</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New 4 user registartions</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="notification-box"><i class="bi bi-briefcase-fill"></i></div>
                                        <div class="ms-3 flex-grow-1">
                                            <h6 class="mb-0 dropdown-msg-user">All Documents Uploaded <span class="msg-time float-end text-secondary">1 mo</span></h6>
                                            <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Sussessfully uploaded all files</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <div><hr class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <div class="text-center">View All Notifications</div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--end top header-->

    <!--start sidebar -->
    <aside class="sidebar-wrapper">
        <div class="iconmenu">
            <div class="nav-toggle-box">
                <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
            </div>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Application">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-application" type="button"><i class="bi bi-grid-fill"></i></button>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Widgets">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-widgets" type="button"><i class="bi bi-briefcase-fill"></i></button>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="eCommerce">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-ecommerce" type="button"><i class="bi bi-bag-check-fill"></i></button>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Components">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-components" type="button"><i class="bi bi-bookmark-star-fill"></i></button>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Forms">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-forms" type="button"><i class="bi bi-file-earmark-break-fill"></i></button>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Tables">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-tables" type="button"><i class="bi bi-file-earmark-spreadsheet-fill"></i></button>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Authentication">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-authentication" type="button"><i class="bi bi-lock-fill"></i></button>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Icons">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-icons" type="button"><i class="bi bi-cloud-arrow-down-fill"></i></button>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Content">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-content" type="button"><i class="bi bi-cone-striped"></i></button>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Charts">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-charts" type="button"><i class="bi bi-pie-chart-fill"></i></button>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Maps">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-maps" type="button"><i class="bi bi-pin-map-fill"></i></button>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-pages" type="button"><i class="bi bi-award-fill"></i></button>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Charts">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-charts" type="button"><i class="bi bi-pie-chart-fill"></i></button>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Maps">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-maps" type="button"><i class="bi bi-pin-map-fill"></i></button>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-pages" type="button"><i class="bi bi-award-fill"></i></button>
                </li>
            </ul>
        </div>
        <div class="textmenu">
            <div class="brand-logo">
                <img src="{{ asset('admin-asset') }}/assets/images/brand-logo-2.png" width="140" alt=""/>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade" id="pills-dashboards">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">Dashboards</h5>
                            </div>
                            <small class="mb-0">Some placeholder content</small>
                        </div>
                        <a href="index.html" class="list-group-item"><i class="bi bi-cart-plus"></i>e-Commerce</a>
                        <a href="index2.html" class="list-group-item"><i class="bi bi-wallet"></i>Sales</a>
                        <a href="index3.html" class="list-group-item"><i class="bi bi-bar-chart-line"></i>Analytics</a>
                        <a href="index4.html" class="list-group-item"><i class="bi bi-archive"></i>Project Management</a>
                        <a href="index5.html" class="list-group-item"><i class="bi bi-cast"></i>CMS Dashboard</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-application">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">Application</h5>
                            </div>
                            <small class="mb-0">Some placeholder content</small>
                        </div>
                        <a href="app-emailbox.html" class="list-group-item"><i class="bi bi-envelope"></i>Email</a>
                        <a href="app-chat-box.html" class="list-group-item"><i class="bi bi-chat-left-text"></i>Chat Box</a>
                        <a href="app-file-manager.html" class="list-group-item"><i class="bi bi-archive"></i>File Manager</a>
                        <a href="app-to-do.html" class="list-group-item"><i class="bi bi-check2-square"></i>Todo List</a>
                        <a href="app-invoice.html" class="list-group-item"><i class="bi bi-receipt"></i>Invoice</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-widgets">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">Widgets</h5>
                            </div>
                            <small class="mb-0">Some placeholder content</small>
                        </div>
                        <a href="widgets-static-widgets.html" class="list-group-item"><i class="bi bi-box"></i>Static Widgets</a>
                        <a href="widgets-data-widgets.html" class="list-group-item"><i class="bi bi-bar-chart"></i>Data Widgets</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-ecommerce">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">eCommerce</h5>
                            </div>
                            <small class="mb-0">Some placeholder content</small>
                        </div>
                        <a href="ecommerce-products-list.html" class="list-group-item"><i class="bi bi-box-seam"></i>Products List</a>
                        <a href="ecommerce-products-grid.html" class="list-group-item"><i class="bi bi-box-seam"></i>Products Grid</a>
                        <a href="ecommerce-products-categories.html" class="list-group-item"><i class="bi bi-card-text"></i>Products Categories</a>
                        <a href="ecommerce-orders.html" class="list-group-item"><i class="bi bi-plus-square"></i>Orders</a>
                        <a href="ecommerce-orders-detail.html" class="list-group-item"><i class="bi bi-handbag"></i>Orders Detail</a>
                        <a href="ecommerce-add-new-product.html" class="list-group-item"><i class="bi bi-handbag"></i>Add New Product</a>
                        <a href="ecommerce-add-new-product-2.html" class="list-group-item"><i class="bi bi-handbag"></i>Add New Product 2</a>
                        <a href="ecommerce-transactions.html" class="list-group-item"><i class="bi bi-handbag"></i>Transactions</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-components">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">Components</h5>
                            </div>
                            <small class="mb-0">Some placeholder content</small>
                        </div>
                        <a href="component-alerts.html" class="list-group-item"><i class="bi bi-bell"></i>Alerts</a>
                        <a href="component-accordions.html" class="list-group-item"><i class="bi bi-arrows-collapse"></i>Accordions</a>
                        <a href="component-badges.html" class="list-group-item"><i class="bi bi-badge-8k"></i>Badges</a>
                        <a href="component-buttons.html" class="list-group-item"><i class="bi bi-menu-button"></i>Buttons</a>
                        <a href="component-cards.html" class="list-group-item"><i class="bi bi-card-list"></i>Cards</a>
                        <a href="component-carousels.html" class="list-group-item"><i class="bi bi-card-image"></i>Carousels</a>
                        <a href="component-list-groups.html" class="list-group-item"><i class="bi bi-list-ol"></i>List Groups</a>
                        <a href="component-media-object.html" class="list-group-item"><i class="bi bi-collection"></i>Media Objects</a>
                        <a href="component-modals.html" class="list-group-item"><i class="bi bi-binoculars"></i>Modals</a>
                        <a href="component-navs-tabs.html" class="list-group-item"><i class="bi bi-segmented-nav"></i>Navs & Tabs</a>
                        <a href="component-navbar.html" class="list-group-item"><i class="bi bi-list"></i>Navbars</a>
                        <a href="component-paginations.html" class="list-group-item"><i class="bi bi-arrow-down-up"></i>Pagination</a>
                        <a href="component-popovers-tooltips.html" class="list-group-item"><i class="bi bi-droplet"></i>Popovers & Tooltips</a>
                        <a href="component-progress-bars.html" class="list-group-item"><i class="bi bi-eject"></i>Progress</a>
                        <a href="component-spinners.html" class="list-group-item"><i class="bi bi-gear-wide"></i>Spinners</a>
                        <a href="component-notifications.html" class="list-group-item"><i class="bi bi-app-indicator"></i>Notifications</a>
                        <a href="component-avtars-chips.html" class="list-group-item"><i class="bi bi-person-badge"></i>Avatrs & Chips</a>
                        <a href="component-typography.html" class="list-group-item"><i class="bi bi-person-badge"></i>Typography</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-forms">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">Forms</h5>
                            </div>
                            <small class="mb-0">Some placeholder content</small>
                        </div>
                        <a href="form-elements.html" class="list-group-item"><i class="bi bi-award"></i>Form Elements</a>
                        <a href="form-input-group.html" class="list-group-item"><i class="bi bi-back"></i>Input Groups</a>
                        <a href="form-layouts.html" class="list-group-item"><i class="bi bi-bookmark-check"></i>Form Layouts</a>
                        <a href="form-validations.html" class="list-group-item"><i class="bi bi-broadcast-pin"></i>Form Validations</a>
                        <a href="form-file-upload.html" class="list-group-item"><i class="bi bi-cloud-upload"></i>File Upload</a>
                        <a href="form-date-time-pickes.html" class="list-group-item"><i class="bi bi-calendar-date"></i>Date Pickers</a>
                        <a href="form-select2.html" class="list-group-item"><i class="bi bi-check2-circle"></i>Select2</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-tables">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">Tables</h5>
                            </div>
                            <small class="mb-0">Some placeholder content</small>
                        </div>
                        <a href="table-basic-table.html" class="list-group-item"><i class="bi bi-table"></i>Basic Tables</a>
                        <a href="table-advance-tables.html" class="list-group-item"><i class="bi bi-basket3"></i>Advance Tables</a>
                        <a href="table-datatable.html" class="list-group-item"><i class="bi bi-graph-up"></i>Data Tables</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-authentication">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">Authentication</h5>
                            </div>
                            <small class="mb-0">Some placeholder content</small>
                        </div>
                        <a href="authentication-signin.html" class="list-group-item"><i class="bi bi-easel"></i>Sign In</a>
                        <a href="authentication-signin-with-header-footer.html" class="list-group-item d-flex align-items-center"><i class="bi bi-eject"></i>Sign In with Header & Footer</a>
                        <a href="authentication-signup.html" class="list-group-item"><i class="bi bi-emoji-heart-eyes"></i>Sign Up</a>
                        <a href="authentication-signup-with-header-footer.html" class="list-group-item d-flex align-items-center"><i class="bi bi-eye"></i>Sign Up with Header & Footer</a>
                        <a href="authentication-forgot-password.html" class="list-group-item"><i class="bi bi-file-earmark-code"></i>Forgot Password</a>
                        <a href="authentication-reset-password.html" class="list-group-item"><i class="bi bi-gem"></i>Reset Password</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-icons">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">Icons</h5>
                            </div>
                            <small class="mb-0">Some placeholder content</small>
                        </div>
                        <a href="icons-line-icons.html" class="list-group-item"><i class="bi bi-brightness-low"></i>Line Icons</a>
                        <a href="icons-boxicons.html" class="list-group-item"><i class="bi bi-chat"></i>Boxicons</a>
                        <a href="icons-feather-icons.html" class="list-group-item"><i class="bi bi-droplet"></i>Feather Icons</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-charts">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">Charts</h5>
                            </div>
                            <small class="mb-0">Some placeholder content</small>
                        </div>
                        <a href="charts-chartjs.html" class="list-group-item"><i class="bi bi-bar-chart"></i>Chart JS</a>
                        <a href="charts-apex-chart.html" class="list-group-item"><i class="bi bi-pie-chart"></i>Apex Chart</a>
                        <a href="charts-highcharts.html" class="list-group-item"><i class="bi bi-graph-up"></i>Highcharts</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-maps">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">Maps</h5>
                            </div>
                            <small class="mb-0">Some placeholder content</small>
                        </div>
                        <a href="map-google-maps.html" class="list-group-item"><i class="bi bi-geo-alt"></i>Google Map</a>
                        <a href="map-vector-maps.html" class="list-group-item"><i class="bi bi-geo"></i>Vector Map</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-pages">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">Pages</h5>
                            </div>
                            <small class="mb-0">Some placeholder content</small>
                        </div>
                        <a href="pages-user-profile.html" class="list-group-item"><i class="bi bi-alarm"></i>User Profile</a>
                        <a href="pages-timeline.html" class="list-group-item"><i class="bi bi-archive"></i>Timeline</a>
                        <a href="pages-faq.html" class="list-group-item"><i class="bi bi-question-diamond"></i>FAQ</a>
                        <a href="pages-pricing-tables.html" class="list-group-item"><i class="bi bi-tags"></i>Pricing</a>
                        <a href="pages-errors-404-error.html" class="list-group-item"><i class="bi bi-bug"></i>404 Error</a>
                        <a href="pages-errors-500-error.html" class="list-group-item"><i class="bi bi-diagram-2"></i>500 Error</a>
                        <a href="pages-errors-coming-soon.html" class="list-group-item"><i class="bi bi-egg-fried"></i>Coming Soon</a>
                        <a href="pages-blank-page.html" class="list-group-item"><i class="bi bi-flag"></i>Blank Page</a>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--start sidebar -->

    <!--start content-->
    <main class="page-content">

        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Orders</p>
                                <h4 class="my-1">4805</h4>
                                <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> 5% from last week</p>
                            </div>
                            <div class="widget-icon-large bg-gradient-purple text-white ms-auto"><i class="bi bi-basket2-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Revenue</p>
                                <h4 class="my-1">$24K</h4>
                                <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> 4.6 from last week</p>
                            </div>
                            <div class="widget-icon-large bg-gradient-success text-white ms-auto"><i class="bi bi-currency-exchange"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Customers</p>
                                <h4 class="my-1">5.8K</h4>
                                <p class="mb-0 font-13 text-danger"><i class="bi bi-caret-down-fill"></i> 2.7 from last week</p>
                            </div>
                            <div class="widget-icon-large bg-gradient-danger text-white ms-auto"><i class="bi bi-people-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Bounce Rate</p>
                                <h4 class="my-1">38.15%</h4>
                                <p class="mb-0 font-13 text-success"><i class="bi bi-caret-up-fill"></i> 12.2% from last week</p>
                            </div>
                            <div class="widget-icon-large bg-gradient-info text-white ms-auto"><i class="bi bi-bar-chart-line-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->


        <div class="row">
            <div class="col-12 col-lg-8 col-xl-8 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-lg-2 g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Sales Figures</h5>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-sm-end gap-3 cursor-pointer">
                                    <div class="font-13"><i class="bi bi-circle-fill text-primary"></i><span class="ms-2">Sales</span></div>
                                    <div class="font-13"><i class="bi bi-circle-fill text-success"></i><span class="ms-2">Orders</span></div>
                                </div>
                            </div>
                        </div>
                        <div id="chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-4 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header bg-transparent">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Statistics</h5>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="chart2"></div>
                    </div>
                    <ul class="list-group list-group-flush mb-0">
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">New Orders<span class="badge bg-primary badge-pill">25%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Completed<span class="badge bg-orange badge-pill">65%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Pending<span class="badge bg-success badge-pill">10%</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--end row-->

        <div class="row">
            <div class="col-12 col-lg-6 col-xl-6 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header bg-transparent">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Statistics</h5>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-lg-flex align-items-center justify-content-center gap-2">
                            <div id="chart3"></div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="bi bi-circle-fill text-purple me-1"></i> Visitors:<span class="me-1">89</span></li>
                                <li class="list-group-item"><i class="bi bi-circle-fill text-info me-1"></i> Subscribers:<span class="me-1">45</span></li>
                                <li class="list-group-item"><i class="bi bi-circle-fill text-pink me-1"></i> Contributor:<span class="me-1">35</span></li>
                                <li class="list-group-item"><i class="bi bi-circle-fill text-success me-1"></i> Author:<span class="me-1">62</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-lg-2 g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Product Actions</h5>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-sm-end gap-3 cursor-pointer">
                                    <div class="font-13"><i class="bi bi-circle-fill text-primary"></i><span class="ms-2">Views</span></div>
                                    <div class="font-13"><i class="bi bi-circle-fill text-pink"></i><span class="ms-2">Clicks</span></div>
                                </div>
                            </div>
                        </div>
                        <div id="chart4"></div>
                    </div>
                </div>
            </div>
        </div><!--end row-->


        <div class="row">
            <div class="col-12 col-lg-6 col-xl-4 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header bg-transparent">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Top Categories</h5>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="categories">
                            <div class="progress-wrapper">
                                <p class="mb-2">Electronic <span class="float-end">85%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-purple" role="progressbar" style="width: 85%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Furniture <span class="float-end">70%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 70%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Fashion <span class="float-end">66%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 66%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Mobiles <span class="float-end">76%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 76%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Accessories <span class="float-end">80%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 80%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Watches <span class="float-end">65%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-voilet" role="progressbar" style="width: 65%;"></div>
                                </div>
                            </div>
                            <div class="my-3 border-top"></div>
                            <div class="progress-wrapper">
                                <p class="mb-2">Sports <span class="float-end">45%</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-gradient-royal" role="progressbar" style="width: 45%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header bg-transparent">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Best Products</h5>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="best-product p-2 mb-3">
                            <div class="best-product-item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{ asset('admin-asset') }}/assets/images/products/01.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">White Polo T-Shirt</h6>
                                        <div class="product-rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="sales-count ms-auto">
                                        <p class="mb-0">245 Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="best-product-item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{ asset('admin-asset') }}/assets/images/products/02.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Formal Coat Pant</h6>
                                        <div class="product-rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="sales-count ms-auto">
                                        <p class="mb-0">325 Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="best-product-item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{ asset('admin-asset') }}/assets/images/products/03.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Blue Shade Jeans</h6>
                                        <div class="product-rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="sales-count ms-auto">
                                        <p class="mb-0">189 Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="best-product-item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{ asset('admin-asset') }}/assets/images/products/04.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Yellow Winter Jacket</h6>
                                        <div class="product-rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                    <div class="sales-count ms-auto">
                                        <p class="mb-0">102 Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="best-product-item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{ asset('admin-asset') }}/assets/images/products/05.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Men Sports Shoes</h6>
                                        <div class="product-rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                    <div class="sales-count ms-auto">
                                        <p class="mb-0">137 Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="best-product-item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{ asset('admin-asset') }}/assets/images/products/06.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Fancy Home Sofa</h6>
                                        <div class="product-rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="sales-count ms-auto">
                                        <p class="mb-0">453 Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="best-product-item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{ asset('admin-asset') }}/assets/images/products/07.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Sports Time Watch</h6>
                                        <div class="product-rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                    <div class="sales-count ms-auto">
                                        <p class="mb-0">198 Sales</p>
                                    </div>
                                </div>
                            </div>
                            <div class="best-product-item">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{ asset('admin-asset') }}/assets/images/products/08.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Women Blue Heals</h6>
                                        <div class="product-rating mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                    <div class="sales-count ms-auto">
                                        <p class="mb-0">98 Sales</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-12 col-xl-4 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header bg-transparent">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Top Sellers</h5>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-sellers-list p-2 mb-3">
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-1.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-1">Thomas Hardy</h6>
                                <p class="mb-0 font-13">Customer ID #84586</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">5.0 <i class="bi bi-star-fill text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-2.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">Pauline Bird</h6>
                                <p class="mb-0 font-13">Customer ID #86572</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">5.0 <i class="bi bi-star-fill text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-3.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">Ralph Alva</h6>
                                <p class="mb-0 font-13">Customer ID #98657</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">4.8 <i class="bi bi-star-half text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-4.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">John Roman</h6>
                                <p class="mb-0 font-13">Customer ID #78542</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">4.7 <i class="bi bi-star-half text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-5.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">David Buckley</h6>
                                <p class="mb-0 font-13">Customer ID #68574</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">5.0 <i class="bi bi-star-fill text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-6.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">Maria Anders</h6>
                                <p class="mb-0 font-13">Customer ID #86952</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">4.8 <i class="bi bi-star-half text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-7.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">Martin Loother</h6>
                                <p class="mb-0 font-13">Customer ID #83247</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">5.0 <i class="bi bi-star-fill text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-8.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">Victoria Hardy</h6>
                                <p class="mb-0 font-13">Customer ID #67523</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">3.9 <i class="bi bi-star-half text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-9.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">David Buckley</h6>
                                <p class="mb-0 font-13">Customer ID #94256</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">3.5 <i class="bi bi-star-half text-warning"></i></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3 sellers-list-item">
                            <img src="{{ asset('admin-asset') }}/assets/images/avatars/avatar-10.png" class="rounded-circle" width="50" height="50" alt="">
                            <div>
                                <h6 class="mb-0">Victoria Hardy</h6>
                                <p class="mb-0 font-13">Customer ID #48759</p>
                            </div>
                            <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                                <p class="mb-0">3.4 <i class="bi bi-star-half text-warning"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->

        <div class="card radius-10">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-12 col-lg-4 col-xl-4 d-flex">
                        <div class="card mb-0 radius-10 border shadow-none w-100">
                            <div class="card-body">
                                <h5 class="card-title">Top Sales Locations</h5>
                                <h4 class="mt-4">$36.2K <i class="flag-icon flag-icon-us rounded"></i></h4>
                                <p class="mb-0 text-secondary font-13">Our Most Customers in US</p>
                                <ul class="list-group list-group-flush mt-3">
                                    <li class="list-group-item border-top">
                                        <div class="d-flex align-items-center gap-2">
                                            <div><i class="flag-icon flag-icon-us"></i></div>
                                            <div>United States</div>
                                            <div class="ms-auto">289</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div><i class="flag-icon flag-icon-au"></i></div>
                                            <div>Malaysia</div>
                                            <div class="ms-auto">562</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div><i class="flag-icon flag-icon-in"></i></div>
                                            <div>India</div>
                                            <div class="ms-auto">354</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div><i class="flag-icon flag-icon-ca"></i></div>
                                            <div>Indonesia</div>
                                            <div class="ms-auto">147</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div><i class="flag-icon flag-icon-ad"></i></div>
                                            <div>Turkey</div>
                                            <div class="ms-auto">652</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div><i class="flag-icon flag-icon-cu"></i></div>
                                            <div>Netherlands</div>
                                            <div class="ms-auto">287</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div><i class="flag-icon flag-icon-is"></i></div>
                                            <div>Italy</div>
                                            <div class="ms-auto">634</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center gap-2">
                                            <div><i class="flag-icon flag-icon-ge"></i></div>
                                            <div>Canada</div>
                                            <div class="ms-auto">524</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 col-xl-8 d-flex">
                        <div class="card mb-0 radius-10 border shadow-none w-100">
                            <div class="card-body">
                                <div class="" id="geographic-map"></div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            </div>
        </div>

        <div class="card radius-10">
            <div class="card-header bg-transparent">
                <div class="row g-3 align-items-center">
                    <div class="col">
                        <h5 class="mb-0">Recent Orders</h5>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                            <div class="dropdown">
                                <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:;">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                        <tr>
                            <th>#ID</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>#89742</td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{ asset('admin-asset') }}/assets/images/products/11.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Smart Mobile Phone</h6>
                                    </div>
                                </div>
                            </td>
                            <td>2</td>
                            <td>$214</td>
                            <td>Apr 8, 2021</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#68570</td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{ asset('admin-asset') }}/assets/images/products/07.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Sports Time Watch</h6>
                                    </div>
                                </div>
                            </td>
                            <td>1</td>
                            <td>$185</td>
                            <td>Apr 9, 2021</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#38567</td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{ asset('admin-asset') }}/assets/images/products/17.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Women Red Heals</h6>
                                    </div>
                                </div>
                            </td>
                            <td>3</td>
                            <td>$356</td>
                            <td>Apr 10, 2021</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#48572</td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{ asset('admin-asset') }}/assets/images/products/04.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Yellow Winter Jacket</h6>
                                    </div>
                                </div>
                            </td>
                            <td>1</td>
                            <td>$149</td>
                            <td>Apr 11, 2021</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#96857</td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{ asset('admin-asset') }}/assets/images/products/10.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Orange Micro Headphone</h6>
                                    </div>
                                </div>
                            </td>
                            <td>2</td>
                            <td>$199</td>
                            <td>Apr 15, 2021</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#68527</td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="product-box border">
                                        <img src="{{ asset('admin-asset') }}/assets/images/products/05.png" alt="">
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-name mb-1">Men Sports Shoes Nike</h6>
                                    </div>
                                </div>
                            </td>
                            <td>1</td>
                            <td>$124</td>
                            <td>Apr 22, 2021</td>
                            <td>
                                <div class="d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </main>
    <!--end page main-->


    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <h6 class="mb-0">Theme Variation</h6>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
                    <label class="form-check-label" for="LightTheme">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
                    <label class="form-check-label" for="DarkTheme">Dark</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
                    <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3" checked>
                    <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
                </div>
                <hr/>
                <h6 class="mb-0">Header Colors</h6>
                <hr/>
                <div class="header-colors-indigators">
                    <div class="row row-cols-auto g-3">
                        <div class="col">
                            <div class="indigator headercolor1" id="headercolor1"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor2" id="headercolor2"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor3" id="headercolor3"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor4" id="headercolor4"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor5" id="headercolor5"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor6" id="headercolor6"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor7" id="headercolor7"></div>
                        </div>
                        <div class="col">
                            <div class="indigator headercolor8" id="headercolor8"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end switcher-->

</div>
<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="{{ asset('admin-asset') }}/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{ asset('admin-asset') }}/assets/js/jquery.min.js"></script>
<script src="{{ asset('admin-asset') }}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{ asset('admin-asset') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{ asset('admin-asset') }}/assets/js/pace.min.js"></script>
<script src="{{ asset('admin-asset') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{ asset('admin-asset') }}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{ asset('admin-asset') }}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<!--app-->
<script src="{{ asset('admin-asset') }}/assets/js/app.js"></script>
<script src="{{ asset('admin-asset') }}/assets/js/index.js"></script>

<script>
    new PerfectScrollbar(".best-product")
    new PerfectScrollbar(".top-sellers-list")
</script>


</body>
</html>
