<?php include 'pages/header.php'; ?>

  <head>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript">
    google.load('visualization', '1.1', {packages: ['line']});
    google.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Days');
      data.addColumn('number', 'Male');
      data.addColumn('number', 'Female');

      data.addRows([
        [1,  37.8, 80.8],
        [2,  30.9, 69.5],
        [3,  25.4,   57],
        [4,  11.7, 18.8],
        [5,  11.9, 17.6],
        [6,   8.8, 13.6],
        [7,   7.6, 12.3],
        [8,  12.3, 29.2],
        [9,  16.9, 42.9],
        [10, 12.8, 30.9],
        [11,  5.3,  7.9],
        [12,  6.6,  8.4],
        [13,  4.8,  6.3],
        [14,  4.2,  6.2]
      ]);

      var options = {
        chart: {
          title: 'Log in\'s in Venn for the last 2 weeks',
          subtitle: 'in thousands of people'
        },
        width: 600,
        height: 250
      };

      var chart = new google.charts.Line(document.getElementById('linechart_material'));

      chart.draw(data, options);
    }
  </script>

  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Status', 'Number of people'],

          ['Active now',     11],
          ['Inactive for 5+ days',  2],
                    ['Inactive now',      50],

         
        ]);

        var options = {
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }


    </script> 

     <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["geochart"]});
      google.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {

        var data = google.visualization.arrayToDataTable([
          ['Country', 'Popularity'],
          ['Germany', 200],
          ['United States', 300],
          ['Brazil', 400],
          ['Canada', 500],
          ['France', 600],
          ['RU', 700]
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>


</head>
  

  <body>


    <!-- Custom CSS -->
    <link href="assets/frameworks/sb-admin.css" rel="stylesheet">
    <link href="assets/css/admin.css" rel="stylesheet"> 

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> Venn admin panel </a>
            </div>
            <!-- /.navbar-header -->

            <div class="logoutButton">
            <a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </div>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="admin.php"><i class="fa fa-cogs fa-fw"></i> Main panel</a>
                        </li>
                             
                        <li>
                            <a href="database.php"><i class="fa fa-database fa-fw"></i> Databases<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="#"> Posts  </a>
                                </li>
                                <li>
                                    <a href="#"> Users <span class="fa arrow"></span></a>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Statistics <span class="fa arrow"></span></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                    
                                          
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

      <div id="page-wrapper">
        <br>
        <!-- /.row -->

        <h2> Venn current status </h2>

        <div class="row">
            <div class="col-lg-5 col-md-4">
              <div id="piechart" style="width: 450px; height: 300px;"> </div>
            </div>
            <div class="col-lg-5 col-md-4">
                    <div id="linechart_material" style="width: 450px; height: 300px"></div>
            </div>
           
            
            
        </div>
  
        <br>

         <div class="row" style="border: 1px">
            <div class="col-lg-5 col-md-4">
                <div id="regions_div" style="width: 900px; height: 500px;"></div>
            </div>
        </div>




       
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
        
        <!-- /.panel -->
    </div>
    
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->