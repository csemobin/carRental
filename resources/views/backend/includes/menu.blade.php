<!-- ########## START: LEFT PANEL ########## -->
  <div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <a href="{{route('home')}}" class="br-menu-link active mb-2" >WEB VIEW</a>
      @if( Auth::user()->role === 'admin')
        <ul class="br-sideleft-menu">
          <li class="br-menu-item">
            <a href="{{ route('dashboard') }}" class="br-menu-link active">
              <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
              <span class="menu-item-label">Dashboard</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->

          <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">USER MANAGEMENT</lab/el>
          
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub @if( Route::currentRouteNamed('customers.index') || Route::currentRouteNamed('customers.index') || Route::currentRouteNamed('customers.index') ) active @endif " >
              <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
              <span class="menu-item-label">
                Manage ALL User
              </span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
              <li class="sub-item">
                <a href="{{route('customers.index')}}" class="sub-link @if( Route::currentRouteNamed('customers.index')  ) active @endif">Manage All User</a>
              </li>
            </ul>
          </li>

          <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">CAR MANAGEMENT</label>

          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub @if( Route::currentRouteNamed('cars.index') || Route::currentRouteNamed('cars.create') || Route::currentRouteNamed('cars.index') ) active @endif " >
              <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
              <span class="menu-item-label">
                Manage ALL Cars
              </span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
              <li class="sub-item">
                <a href="{{route('cars.create')}}" class="sub-link @if( Route::currentRouteNamed('cars.create')  ) active @endif">Add new brand</a>
              </li>
              <li class="sub-item">
                <a href="{{ route('cars.index') }}" class="sub-link @if( Route::currentRouteNamed('cars.index')  ) active @endif ">Manage all brand</a>
              </li>
            </ul>
          </li>
          
          <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Rental MANAGEMENT</label>

          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub @if( Route::currentRouteNamed('rentals.index') || Route::currentRouteNamed('rentals.index') || Route::currentRouteNamed('rentals.index') ) active @endif " >
              <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
              <span class="menu-item-label">
                Manage Rental
              </span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
              <li class="sub-item">
                <a href="{{ route('rentals.index') }}" class="sub-link @if( Route::currentRouteNamed('rentals.index')  ) active @endif ">Manage all brand</a>
              </li>
            </ul>
          </li>
        
          
          

        </ul>
      @else
        <ul class="br-sideleft-menu">
          <li class="br-menu-item">
            <a href="{{ route('dashboard') }}" class="br-menu-link active">
              <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
              <span class="menu-item-label">Dashboard</span>
            </a><!-- br-menu-link -->
          </li><!-- br-menu-item -->

          <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Rental History</lab/el>
          
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub @if( Route::currentRouteNamed('rentals.edit') || Route::currentRouteNamed('rentals.edit') || Route::currentRouteNamed('rentals.edit') ) active @endif " >
              <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
              <span class="menu-item-label">
                SEE ALL HISTORY
              </span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
              <li class="sub-item">
                <a href="{{ route('rentals.edit', Auth::user()->id) }}" class="sub-link @if( Route::currentRouteNamed('rentals.edit')  ) active @endif">All History</a>
              </li>
            </ul>
          </li>  
      
        </ul>
      @endif
      <br>
    </div>
    <!-- ########## END: LEFT PANEL ########## -->
