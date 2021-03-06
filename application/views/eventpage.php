<?php require 'templates/header.php' ;?>

  <style>
    @import url('https://fonts.googleapis.com/css?family=Lobster');
  </style>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">AIESEC <span class="lite">COLOMBO</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>
                </ul>
                <!--  search form end -->
            </div>

            <div class="top-nav notification-row">
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">



                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Jenifer Smith</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="profile"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                            <li>
                                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>
      <!--header end-->

      <!--sidebar start-->
      <?php require 'templates/sidebar.php';?>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-user-md"></i> EVENT</h3>

				</div>
			</div>

              <div class="row">
                <!-- profile-widget -->

                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <h1>EVENT TITLE</h1>
                            </div>


              <div class="col-lg-6"> </div>
							<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">

                                              <i class="fa fa-check" aria-hidden="true" style="font-size:48px"> </i><br>

										                                      <button type="button" class="btn btn-success btn-lg" href="" title="Bootstrap 3 themes generator"> &emsp;GOING&emsp;</button>
                                          </li>

                                      </ul>
                            </div>
							<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">

                                            <i class="fa fa-times" aria-hidden="true" style="font-size:48px"> </i><br>

                                                    <button type="button" class="btn btn-danger btn-lg" href="" title="Bootstrap 3 themes generator">NOT GOING</button>

                                          </li>

                                      </ul>
                            </div>
                          </div>
                    </div>
                </div>
              </div>
              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <header class="panel-heading tab-bg-info">
                              <ul class="nav nav-tabs">


                              </ul>
                          </header>


                                  <!-- profile -->
                                  <div id="profile" class="tab-pane">
                                      <section class="panel">
                                      <div class="bio-graph-heading">
                                                  "Event Description"
                                      </div>
                                      <div class="panel-body bio-graph-info">
                                          <h1>Event Details</h1>
                                          <div class="row">

                                              <div class="bio-row1">
                                                  <p><span>Date </span>: 27 August 2017</p>
                                              </div>
                                              <div class="bio-row1">
                                                  <p><span>Time </span>: 1 p.m.</p>
                                              </div>
                                              <div class="bio-row1" font size="16">
                                                  <p><span>Venue </span>: UCSC Benches</p>
                                              </div>
                                              </div>

                                              <div class="row" >


                                              <div class="bio-row">
                                                  <p><span>Organized by </span>: Radeeka Jayamanne</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Organizer Mobile No</span>: 0777333722</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Event Type </span>: Enter Type </p>
                                              </div>
                                              </div>

                                          </div>


                                      <div class="panel-body bio-graph-info">
                                          <h1> Confrimed Participants </h1>
                                  <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                                          </div>
                                      </div>
                                      <section>
                                          <div class="row">
                                          </div>
                                      </section>

                                      </div>




                              </div>
                          </div>
                      </section>
                 </div>
              </div>

              <!-- page end-->
          </section>
  
  <!-- container section end -->
    <!-- javascripts -->
<?php require 'templates/footer.php'; ?>
