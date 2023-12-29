<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - Organic Ora</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{url('admin/styles/fonts/fontawesome.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{url('admin/styles/css/bootstrap.min.css')}}" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{url('admin/styles/shards-dashboards.1.1.0.min.css')}}">
    <link rel="stylesheet" href="{{url('admin/styles/extras.1.1.0.min.css')}}">
    <script async defer src="{{url('admin/scripts/js/buttonjs.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('css/lightbox.css')}}">
    
  </head>
  <body class="h-100">
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="{{route('admin.index')}}" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="{{url('images/leafndew.png')}}" alt="Shards Dashboard">
                  <span class="d-none d-md-inline ml-1">Organic Ora</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="{{route('admin.index')}}">
                  <i class="material-icons">edit</i>
                  <span>Dashboard</span>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link " href="components-blog-posts.html">
                  <i class="material-icons">vertical_split</i>
                  <span>Blog Posts</span>
                </a>
              </li> -->
              <li class="nav-item menu-item-has-children dropdown">
                        <a href="#" class=" nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons menu-icon">note_add</i>Master (Add - Ons)</a>
                        <ul class="sub-menu children dropdown-menu">
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.categories')}}">
                              <i class="material-icons">note_add</i>
                              <span>Category</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.types')}}">
                              <i class="material-icons">note_add</i>
                              <span>Type</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.products')}}">
                              <i class="material-icons">note_add</i>
                              <span>Product</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.faqs')}}">
                              <i class="material-icons">note_add</i>
                              <span>Faqs</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.states')}}">
                              <i class="material-icons">note_add</i>
                              <span>States</span>
                            </a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.sliderimages')}}">
                              <i class="material-icons">note_add</i>
                              <span>Slider</span>
                            </a>
                          </li>
                        </ul>
                    </li>
              <li class="nav-item" hidden>
                <a class="nav-link " href="add-new-post.html">
                  <i class="material-icons">note_add</i>
                  <span>Add New Post</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('product.list')}}">
                  <i class="material-icons">view_module</i>
                  <span>Products</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('orders.list')}}">
                  <i class="material-icons">table_chart</i>
                  <span>Orders</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('admin.contactinfo')}}">
                  <i class="material-icons">table_chart</i>
                  <span>Contact Information</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="{{route('admin.contactus')}}">
                  <i class="material-icons">person</i>
                  <span>Form Submission</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin.subscribers')}}">
                  <i class="material-icons">error</i>
                  <span>Subscribers</span>
                </a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                <div class="input-group input-group-seamless ml-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <!-- <i class="fas fa-search"></i> -->
                    </div>
                  </div>
                  <!-- <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> --> 
                </div>
              </form>
              <ul class="navbar-nav border-left flex-row ">
                <li class="nav-item border-right dropdown notifications" hidden="">
                  <a class="nav-link nav-link-icon text-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="nav-link-icon__wrapper">
                      <i class="material-icons">&#xE7F4;</i>
                      <span class="badge badge-pill badge-danger">2</span>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="material-icons">&#xE6E1;</i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Analytics</span>
                        <p>Your website’s active users count increased by
                          <span class="text-success text-semibold">28%</span> in the last week. Great job!</p>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="material-icons">&#xE8D1;</i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Sales</span>
                        <p>Last week your store’s sales count decreased by
                          <span class="text-danger text-semibold">5.52%</span>. It could have been worse!</p>
                      </div>
                    </a>
                    <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle mr-2" src="{{url('images/leafndew.png')}}" alt="User Avatar">
                    <span class="d-none d-md-inline-block">Organic Ora</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="{{route('admin.changepassword')}}">
                      <i class="material-icons">&#xE7FD;</i> Change Password</a>
                    <!-- <a class="dropdown-item" href="components-blog-posts.html">
                      <i class="material-icons">vertical_split</i> Blog Posts</a>
                    <a class="dropdown-item" href="add-new-post.html">
                      <i class="material-icons">note_add</i> Add New Post</a> -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{route('admin.logout')}}">
                      <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>
        <!-- </main> -->
          <!-- / .main-navbar -->