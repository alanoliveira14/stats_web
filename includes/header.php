<html>

<head>
    <link rel="icon" href="assets/img/clubs/pl_logo.png" />

    <title>Beta</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--external css-->
    <script src="https://use.fontawesome.com/3561f33e69.js"></script>

    <!-- Custom styles for this template -->
    <link href="assets/css/stylesheet.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
</head>

<body>

    <section id="container">
        <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" style=" color:#ffffff">

                </div>
            </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>Premier League Stats</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <!--  notification end -->
            </div>
        </header>
        <!--header end-->

        <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">

                    <p class="centered">
                        <img src="assets/img/clubs/pl_logo.png" class="img-circle" width="80">
                    </p>
                    <h5 class="centered"></h5>

                    <li class="mt">
                        <a class="active" href="index.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                            <span>PL Players</span>
                        </a>
                        <ul class="sub">
                            <li><a href="keepers.php">Goalkeepers</a></li>
                            <li><a href="defenders.php">Defenders</a></li>
                            <li><a href="midfielders.php">Midfielders</a></li>
                            <li><a href="attackers.php">Attackers</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="blank.php">
                            <i class="fa fa-futbol-o" aria-hidden="true"></i>
                            <span>Teams</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="compare.php">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span>Compare</span>
                        </a>
                    </li>

                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
