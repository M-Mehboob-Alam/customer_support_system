<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/home.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />

    <!-- DESCRIPTION -->
    <meta name="description" content="Dashboard : Web Fixes" />

    <!-- OG -->
    <meta property="og:title" content="Dashboard : Web Fixes" />
    <meta property="og:description" content="Dashboard : Web Fixes" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">


    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="../error-404.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/wf.png" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>Dashboard :Next Step Solutions </title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
 <script src="assets/js/html5shiv.min.js"></script>
 <script src="assets/js/respond.min.js"></script>
 <![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/assets.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/calendar/fullcalendar.css')}}">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/typography.css')}}">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes/shortcodes.css')}}">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dashboard.css')}}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('assets/css/color/color-1.css')}}">
<style>
.ttr-user-avatar {
    display: block;
    width: 100px !important;
    height: 32px;
    border-radius: none !important;
    overflow: hidden;
    border: none !important;
    border-radius: 2px !important;
}
</style>
</head>

<body class="ttr-opened-sidebar ttr-pinned-sidebar">

    <!-- header start -->
    <header class="ttr-header">
        <div class="ttr-header-wrapper">
            <!--sidebar menu toggler start -->
            <div class="ttr-toggle-sidebar ttr-material-button">
                <i class="ti-close ttr-open-icon"></i>
                <i class="ti-menu ttr-close-icon"></i>
            </div>
            <!--sidebar menu toggler end -->
            <!--logo start -->
            <div class="ttr-logo-box">
                <div>
                    <a href="{{ route('home') }}" class="ttr-logo">
                        <img class="ttr-logo-mobile" alt="" src="{{ asset('assets/images/logo.png')}}" width="30"
                            height="30">

                    </a>
                </div>
            </div>
            <!--logo end -->
            <div class="ttr-header-menu">
                <!-- header left menu start -->
                <ul class="ttr-header-navigation">
                    <li>
                        <a href="home.php" class="ttr-material-button ttr-submenu-toggle">HOME</a>
                    </li>
                    <!-- 	<li>
      <a href="#" class="ttr-material-button ttr-submenu-toggle">QUICK MENU <i class="fa fa-angle-down"></i></a>
      <div class="ttr-header-submenu">
       <ul>
        <li><a href="../courses.html">Our Courses</a></li>
        <li><a href="../event.html">New Event</a></li>
        <li><a href="../membership.html">Membership</a></li>
       </ul>
      </div>
     </li> -->
                </ul>
                <!-- header left menu end -->
            </div>
            <div class="ttr-header-right ttr-with-seperator">
                <!-- header right menu start -->
                <ul class="ttr-header-navigation">
                    <li>
                        <a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="fa fa-bell"></i></a>
                        <div class="ttr-header-submenu noti-menu">
                            <div class="ttr-notify-header">
                                <span class="ttr-notify-text-top">9 New</span>
                                <span class="ttr-notify-text">User Notifications</span>
                            </div>
                            <div class="noti-box-list">
                                <ul>
                                    <li>
                                        <span class="notification-icon dashbg-gray">
                                            <i class="fa fa-check"></i>
                                        </span>
                                        <span class="notification-text">
                                            <span>Sneha Jogi</span> sent you a message.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 02:14</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-yellow">
                                            <i class="fa fa-shopping-cart"></i>
                                        </span>
                                        <span class="notification-text">
                                            <a href="#">Your order is placed</a> sent you a message.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 7 Min</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-red">
                                            <i class="fa fa-bullhorn"></i>
                                        </span>
                                        <span class="notification-text">
                                            <span>Your item is shipped</span> sent you a message.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 2 May</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-green">
                                            <i class="fa fa-comments-o"></i>
                                        </span>
                                        <span class="notification-text">
                                            <a href="#">Sneha Jogi</a> sent you a message.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 14 July</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="notification-icon dashbg-primary">
                                            <i class="fa fa-file-word-o"></i>
                                        </span>
                                        <span class="notification-text">
                                            <span>Sneha Jogi</span> sent you a message.
                                        </span>
                                        <span class="notification-time">
                                            <a href="#" class="fa fa-close"></a>
                                            <span> 15 Min</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button ttr-submenu-toggle"><span
                                class="ttr-user-avatar">
            <h6> {{ Auth::user()->name }}</h6>
                            </span></a>
                        <div class="ttr-header-submenu">
                            <ul>
                                <li><a href="#">My profile</a></li>
                                <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </ul>
                        </div>
                    </li>
                    <li class="ttr-hide-on-mobile">
                        <a href="#" class="ttr-material-button"><i class="ti-layout-grid3-alt"></i></a>
                        <div class="ttr-header-submenu ttr-extra-menu">
                            <a href="#">
                                <i class="fa fa-music"></i>
                                <span>Musics</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-youtube-play"></i>
                                <span>Videos</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                <span>Emails</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Reports</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-smile-o"></i>
                                <span>Persons</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-picture-o"></i>
                                <span>Pictures</span>
                            </a>
                        </div>
                    </li>
                </ul>
                <!-- header right menu end -->
            </div>
            <!--header search panel start -->
            <div class="ttr-search-bar">
                <form class="ttr-search-form">
                    <div class="ttr-search-input-wrapper">
                        <input type="text" name="qq" placeholder="search something..."
                            class="ttr-search-input">
                        <button type="submit" name="search" class="ttr-search-submit"><i
                                class="ti-arrow-right"></i></button>
                    </div>
                    <span class="ttr-search-close ttr-search-toggle">
                        <i class="ti-close"></i>
                    </span>
                </form>
            </div>
            <!--header search panel end -->
        </div>
    </header>
    {{-- <?php
 }
else
{
  header("location:home.php");
}
?> --}}


    <div class="ttr-sidebar">

        <div class="ttr-sidebar-wrapper content-scroll">

            <!-- side menu logo start -->

            <div class="ttr-sidebar-logo">

                <a href="{{ route('home') }}"><img alt="" src="{{ asset('assets/images/logo.png') }}" width="122"
                        height="27"></a>

                <!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">

                <i class="material-icons ttr-fixed-icon">gps_fixed</i>

                <i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>

            </div> -->

                <div class="ttr-sidebar-toggle-button">

                    <i class="ti-arrow-left"></i>

                </div>

            </div>

            <!-- side menu logo end -->

            <!-- sidebar menu start -->

            <nav class="ttr-sidebar-navi">

                <ul>

                    <li>

                        <a href="welcome.php" class="ttr-material-button">

                            <span class="ttr-icon"><i class="ti-home"></i></span>

                            <span class="ttr-label">Dashborad</span>

                        </a>

                    </li>

                    <li>

                        <a href="#" class="ttr-material-button">

                            <span class="ttr-icon"><i class="ti-email"></i></span>

                            <span class="ttr-label">Tickets</span>

                            <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>

                        </a>

                        <ul>

                            <li>

                                <a href="{{ route('create.user.ticket') }}" class="ttr-material-button"><span class="ttr-label">Add new
                                        Tickets</span></a>

                            </li>

                            <li>

                                <a href="add_ticket.php" class="ttr-material-button"><span class="ttr-label">New
                                        Tickets</span></a>

                            </li>

                            <li>

                                <a href="close_ticket.php" class="ttr-material-button"><span class="ttr-label">Closed
                                        Tickets</span></a>

                            </li>

                            <li>

                                <a href="answered_ticket.php" class="ttr-material-button"><span
                                        class="ttr-label">Answered Tickets</span></a>

                            </li>

                            <li>

                                <a href="all_ticket.php" class="ttr-material-button"><span class="ttr-label">All
                                        Tickets</span></a>

                            </li>

                        </ul>

                    </li>

                    <li class="ttr-seperate"></li>

                </ul>

                <!-- sidebar menu end -->

            </nav>

            <!-- sidebar menu end -->

        </div>

    </div>

    <main class="ttr-wrapper">
        <div class="container-fluid">
           <!--  <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Add ticketing</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                    <li>Add ticketing</li>
                </ul>
            </div>   -->
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4 col-sm-6 col-12">
                    <div class="widget-card widget-bg1">
                        <a href="{{ route('create.user.ticket') }}">
                            <div class="wc-item">
                            <h4 class="wc-title">
                               Add New Ticket
                            </h4>

                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 col-sm-6 col-12">
                    <div class="widget-card widget-bg2">
                        <a href="view_ticket.php">
                            <div class="wc-item">
                            <h4 class="wc-title">
                                 My Tickets
                            </h4>

                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 col-sm-6 col-12">
                    <div class="widget-card widget-bg3">
                        <a href="ticket_status.php">
                            <div class="wc-item">
                            <h4 class="wc-title">
                                Ticket Status
                            </h4>

                        </div>
                        </a>
                    </div>
                </div>

            </div>

            </div>
            <div class="row">
                <!-- Your Profile Views Chart -->
                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>Add ticketing</h4>
                        </div>

                        <div class="widget-inner">
                            <form class="edit-profile m-b30" action="add_ticket_process.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <!-- <div class="col-12">
                                        <div class="ml-auto">
                                            <h3>1. Basic info</h3>
                                        </div>
                                    </div> -->
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Email*</label>
                                        <div>
                                            <input class="form-control" type="text" name="email" value="{{ Auth::user()->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Full Name</label>
                                        <div>
                                            <input class="form-control" type="text" name="full_name" value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Phone</label>
                                        <div>
                                            <input class="form-control" name="phone" value="{{ Auth::user()->phone }}" type="text" value="">
                                        </div>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="col-form-label">Your Subcriptions</label>
                                        <div>
                                            <?php

                                                use App\Models\Packages;
                                                ?>
                                            <select required class="form-control" id="departments" name="department">
                                                <option value="">Select Package</option>
                                                @foreach ($order as $item)
                                                <?php
                                                $package = Packages::findOrFail($item->package_id);
                                                ?>
                                                <option value="{{ $package->department_id}}">{{ $package->name}} {{ $item->created_at }}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Department</label>
                                        <div id="set_departments" >
                                            <select class="form-control" id="show_departments" name="department">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Priority</label>
                                        <div>
                                            <select class="form-control" name="priority">
                                                <option>Low</option>
                                                <option>Medium</option>
                                                <option>High</option>
                                                <option>ASAP</option>
                                            </select>
                                        </div>
                                    </div>

                                     <div class="form-group col-6">
                                        <label class="col-form-label">File</label>
                                        <div>
                                            <input class="form-control" type="file" name="file" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <label class="col-form-label">Subject</label>
                                        <div>
                                            <input class="form-control" type="text" name="subject" value="">
                                        </div>
                                    </div>
                                    <div class="seperator"></div>


                                    <div class="form-group col-12">
                                        <label class="col-form-label">Summary</label>
                                        <div>
                                            <textarea class="form-control" name="summary"> </textarea>
                                        </div>
                                    </div>
                                   <!--  <div class="col-12 m-t20">
                                        <div class="ml-auto">
                                            <h3 class="m-form__section">3. Add Item</h3>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <table id="item-add" style="width:100%;">
                                            <tr class="list-item">
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label class="col-form-label">Course Name</label>
                                                            <div>
                                                                <input class="form-control" type="text" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="col-form-label">Course Category</label>
                                                            <div>
                                                                <input class="form-control" type="text" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="col-form-label">Course Category</label>
                                                            <div>
                                                                <input class="form-control" type="text" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="col-form-label">Close</label>
                                                            <div class="form-group">
                                                                <a class="delete" href="#"><i class="fa fa-close"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div> -->
                                    <div class="col-12">
                                        <input type="submit" name="submit" class="btn-secondry " value="Create Ticket">

                                        <button type="reset" class="btn">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Your Profile Views Chart END-->
            </div>
        </div>
    </main>
    <div class="ttr-overlay"></div>



    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>

    <script src="{{ asset('assets/vendors/bootstrap/js/popper.min.js')}}"></script>

    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>

    <script src="{{ asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>

    <script src="{{ asset('assets/vendors/magnific-popup/magnific-popup.js')}}"></script>

    <script src="{{ asset('assets/vendors/counter/waypoints-min.js')}}"></script>

    <script src="{{ asset('assets/vendors/counter/counterup.min.js')}}"></script>

    <script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.js')}}"></script>

    <script src="{{ asset('assets/vendors/masonry/masonry.js')}}"></script>

    <script src="{{ asset('assets/vendors/masonry/filter.js')}}"></script>

    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.js')}}"></script>

    <script src='{{ asset('assets/vendors/scroll/scrollbar.min.js')}}'></script>

    <script src="{{ asset('assets/js/functions.js')}}"></script>

    <script src="{{ asset('assets/vendors/chart/chart.min.js')}}"></script>

    <script src="{{ asset('assets/js/admin.js')}}"></script>

    <script src='{{ asset('assets/vendors/calendar/moment.min.js')}}'></script>

    <script src='{{ asset('assets/vendors/calendar/fullcalendar.js')}}'></script>

    <!-- <script src='{{ asset('assets/vendors/switcher/switcher.js')}}'></script> -->

    <script>
        $(document).ready(function() {
            $('#set_departments').hide();
            $("#departments").change(function () {
        var department_id = $('#departments').val();

        $.ajax({

            url: "{{ route('create.user.ticket') }}",
            data: {department_id:department_id},

            success: function (data) {
               console.log(data);
$('#set_departments').show();

$('#show_departments').empty('');
for(i = 0; i<data.length; i++){
    
    $('#show_departments').append(`<option value="${data[i]}">${data[i]}</option>`)
}



            },
            error: function (data) {
                console.log(data);
            }
        });
    });


            $('#calendar').fullCalendar({

                header: {

                    left: 'prev,next today',

                    center: 'title',

                    right: 'month,agendaWeek,agendaDay,listWeek'

                },

                defaultDate: '2019-03-12',

                navLinks: true, // can click day/week names to navigate views



                weekNumbers: true,

                weekNumbersWithinDays: true,

                weekNumberCalculation: 'ISO',



                editable: true,

                eventLimit: true, // allow "more" link when too many events

                events: [

                    {

                        title: 'All Day Event',

                        start: '2019-03-01'

                    },

                    {

                        title: 'Long Event',

                        start: '2019-03-07',

                        end: '2019-03-10'

                    },

                    {

                        id: 999,

                        title: 'Repeating Event',

                        start: '2019-03-09T16:00:00'

                    },

                    {

                        id: 999,

                        title: 'Repeating Event',

                        start: '2019-03-16T16:00:00'

                    },

                    {

                        title: 'Conference',

                        start: '2019-03-11',

                        end: '2019-03-13'

                    },

                    {

                        title: 'Meeting',

                        start: '2019-03-12T10:30:00',

                        end: '2019-03-12T12:30:00'

                    },

                    {

                        title: 'Lunch',

                        start: '2019-03-12T12:00:00'

                    },

                    {

                        title: 'Meeting',

                        start: '2019-03-12T14:30:00'

                    },

                    {

                        title: 'Happy Hour',

                        start: '2019-03-12T17:30:00'

                    },

                    {

                        title: 'Dinner',

                        start: '2019-03-12T20:00:00'

                    },

                    {

                        title: 'Birthday Party',

                        start: '2019-03-13T07:00:00'

                    },

                    {

                        title: 'Click for Google',

                        url: 'http://google.com/',

                        start: '2019-03-28'

                    }

                ]

            });



        });
    </script>

</body>



<!-- Mirrored from educhamp.themetrades.com/demo/admin/home.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->

</html>
