<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">AIESEC <span class="lite">Colombo</span></a>
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
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.html">
                          <i class="fa fa-calendar"></i>
                          <span>My Calendar</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="widgets.html">
                          <i class="fa fa-envelope"></i>
                          <span>Wall</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="chart-chartjs.html">
                          <i class="fa fa-calendar-o"></i>
                          <span>Events</span>
                          
                      </a>
                  </li>
                  <li>
                      <a class="" href="chart-chartjs.html">
                          <i class="fa fa-users"></i>
                          <span>Teams</span>
                      </a>
                  </li>

                             
<!--                  <li class="sub-menu">-->
<!--                      <a href="javascript:;" class="">-->
<!--                          <i class="icon_table"></i>-->
<!--                          <span>Tables</span>-->
<!--                          <span class="menu-arrow arrow_carrot-right"></span>-->
<!--                      </a>-->
<!--                      <ul class="sub">-->
<!--                          <li><a class="" href="basic_table.html">Basic Table</a></li>-->
<!--                      </ul>-->
<!--                  </li>-->
                  

                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-calendar"></i> My Calendar</h3>
				</div>
                </div>
          </section>

            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <button id="btncreateevent" type="button" class="btn btn-danger" style="float: right;font-weight: bold"><i class="fa fa-plus"></i><span style="margin-left:5px ">Create Event</span></button>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <table class="table table-bordered" id="mycalendar">
                        <thead>
                            <tr>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                                <th>Sun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto ">
                                        <div class="fc-day-number">25</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">26</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">27</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">28</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">29</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">30</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">1</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto ">
                                        <div class="fc-day-number">2</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">3</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">4</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">5</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">6</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">7</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">8</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto ">
                                        <div class="fc-day-number">9</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">10</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">11</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">12</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">13</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">14</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">15</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto ">
                                        <div class="fc-day-number">16</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">17</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">18</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">19</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">20</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">21</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">22</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">23</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">24</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">25</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">26</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">27</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">28</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">29</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">30</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">31</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">1</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">2</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">3</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">4</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="mycal-div" style="min-height: 106px;width: auto">
                                        <div class="fc-day-number">5</div>
                                        <div class="fc-day-content">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-1">

                </div>
				
			</div><!--/.row-->



      <!--main content end-->

        </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

  </body>
</html>
