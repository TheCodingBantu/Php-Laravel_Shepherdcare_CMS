@section('sidebar')

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary" style="background-color: #1D1C21!important">
    <!-- Brand Logo -->
    <a href="#" class="brand-link mt-3 ">
      <img src="{{asset('/dist/img/logo.png')}}" class="brand-image img-circle elevation-3" style="opacity: .8">
      {{-- <h4 class="brand-text font-weight-normal">Shepherd Care</h4> --}}
      <span class="brand-text font-weight-light">Shepherd Care</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
        <img src="{{ Avatar::create(Auth::User()->name)->toBase64() }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{Auth::User()->name}}</a>

          </div>
       
        </div>
 
      <!-- Sidebar Menu -->
      <nav class="">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item @if(Request::path() == 'dashboard') menu-open @endif ">
            <a href="{{route('dashboard')}}" class="nav-link ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>
          <li class="nav-item nav-item @if(Request::path() == 'addmember') menu-open @endif 
          @if( str_contains(Request::path(),'profile') ) menu-open @endif  
          @if(Request::path() == 'members') menu-open @endif" >
            <a href="{{route('members')}}" class="nav-link">
              <i class="nav-icon fas fa-user-plus"></i>
              <p>
                Come
              </p>
            </a>
          </li>
          <li class="nav-item nav-item @if(Request::path() == 'activity/connect') menu-open @endif ">
            <a href="{{route('activity',['name'=>'connect'])}}" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Connect
              </p>
            </a>
          </li>
          <li class="nav-item nav-item @if(Request::path() == 'activity/care') menu-open @endif ">
            <a href="{{route('activity',['name'=>'care'])}}" class="nav-link">
              <i class="nav-icon fas fa-heart"></i>
              <p>
                Care
              </p>
            </a>
          </li>
          <li class="nav-item nav-item @if(Request::path() == 'activity/calling') menu-open @endif ">
            <a href="{{route('activity',['name'=>'calling'])}}" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Calling
              </p>
            </a>
          </li>
          <li class="nav-item nav-item @if(Request::path() == 'activity/celebrate') menu-open @endif ">
            <a href="{{route('activity',['name'=>'celebrate'])}}" class="nav-link">
              <i class="nav-icon fas fa-trophy"></i>
              <p>
                Celebrate
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
@stop