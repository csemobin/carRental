<div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> 
            <a href="{{route('home')}}" style=" text-decoration: none; color: #fff; font-size: 32px;letter-spacing:-7px;"> 
              CARRENT 
            </a> 
          </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form action="search" method="GET">
              <div class="control-group">
                <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="category.html">CarRental <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                      <li class="menu-header">Home</li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- About</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Contact</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Rental</a></li>
                    </ul>
                  </li>
                </ul>
                <input class="search-field" placeholder="Search here..." name="search">
                <!-- <a class="search-button" href="#"></a>  -->
                <button type="submit" class="search-button"></button>
              </div>
            </form>
          </div>
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row"> 
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
          
         
          <!-- /.dropdown-cart --> 
          
          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown yamm-fw"> 
                  <a href="{{route('home')}}" >
                    Home
                  </a>
                 </li>
                
                <li class="dropdown"> <a href="contact.html">About</a> </li>
                <li class="dropdown"> <a href="contact.html">Rentals</a> </li>
                <li class="dropdown"> <a href="contact.html">Contact</a> </li>
                @if( Auth::user() )
                  <li><a href="{{route('home')}}">Dashboard</a></li>

                  <li> 
                    <form action="{{ route('logout') }}" method="POST">
                    @csrf
                      <button type="submit" class="cus-nav">Log Out</button>
                      
                    </form> 
                  </li>
                @else 
                  <li>
                    <a href="{{ route('login') }}">Login</a> 
                  </li>
                @endif

              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 