<?php include_once './commom/header.php';?>

<body class="fixed-sn white-skin">

   <!--Main Navigation-->
   <header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
      <ul class="custom-scrollbar">
        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
          <div class="text-center">
              <a href="#" class="pl-0"><img src="assets/img/logo-officetotal.png" width="150px;"></a>
          </div>
        </li>
        <!--/. Logo -->

        <!--Search Form-->
        <li>
          <form class="search-form" role="search">
            <div class="md-form mt-0 waves-light">
              <input type="text" class="form-control py-2" placeholder="Search">
            </div>
          </form>
        </li>
        <!--/.Search Form-->
        <!-- Side navigation links -->
        <li>
          <ul class="collapsible collapsible-accordion">
            
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-image"></i> M_Files<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#" class="waves-effect">Digitalização</a>
                  </li>
                  <li><a href="#" class="waves-effect">Impressão</a>
                  </li>
                  </li>
                  </li>
                </ul>
              </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-user"></i> Minha conta<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#" class="waves-effect">Name</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <!--/. Side navigation links -->
      </ul>
      <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/. Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fas fa-bars"></i></a>
      </div>
      <!-- Breadcrumb-->
      <div class="breadcrumb-dn mr-auto">
        <p>Solução Office Total</p>
      </div>

      <!--Navbar links-->
      <ul class="nav navbar-nav nav-flex-icons ml-auto">

        <!-- Dropdown -->
        <li class="nav-item dropdown notifications-nav">
          <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="badge red">3</span> <i class="fas fa-bell"></i>
            <span class="d-none d-md-inline-block">Notificações</span>
          </a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">
              <i class="fas fa-money mr-2" aria-hidden="true"></i>
              <span>Nova notificação</span>
              <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 13 min</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-money mr-2" aria-hidden="true"></i>
              <span>Nova notificação</span>
              <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 33 min</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-line-chart mr-2" aria-hidden="true"></i>
              <span>Nova notificação</span>
              <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 53 min</span>
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contato</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Suporte</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Meus dados</span></a>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Logout</a>
            <a class="dropdown-item" href="#">Minha conta</a>
          </div>
        </li>

      </ul>
      <!--/Navbar links-->
    </nav>
    <!-- /.Navbar -->

  </header>
  <!--Main Navigation-->

  <!-- Main layout -->
  <main>
    <div class="container-fluid">



    </div>
  </main>
  <!-- Main layout -->

  <?php include_once './commom/footer.php';?>
