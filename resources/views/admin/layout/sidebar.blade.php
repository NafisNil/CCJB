<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CCJ-B</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>
      @php
      $prefix = Request::route()->getPrefix();
      $route = Request::route()->getName();
      @endphp
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link active" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('general.index')}}" class="nav-link {{$route == 'general.index'?'active':''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                General Settings
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link {{$route == 'about.index'?'active':''}}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               About 
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('about.index')}}" class="nav-link {{$route == 'about.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('mission.index')}}" class="nav-link  {{$route == 'mission.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('vision.index')}}" class="nav-link  {{$route == 'vision.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vision</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('whatwedo.index')}}" class="nav-link  {{$route == 'whatwedo.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>What we do</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('activity.index')}}" class="nav-link  {{$route == 'activity.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Activity</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('team.index')}}" class="nav-link {{$route == 'team.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('event.index')}}" class="nav-link {{$route == 'event.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('report.index')}}" class="nav-link {{$route == 'report.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('trainingman.index')}}" class="nav-link {{$route == 'trainingman.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Training Manual</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('handbook.index')}}" class="nav-link {{$route == 'handbook.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Handbook </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('book.index')}}" class="nav-link {{$route == 'book.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Book </p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{route('bookchapter.index')}}" class="nav-link {{$route == 'bookchapter.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Book Chapter</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('press.index')}}" class="nav-link {{$route == 'press.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Press release</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{route('other.index')}}" class="nav-link {{$route == 'other.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Other</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('wedo.index')}}" class="nav-link {{$route == 'wedo.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Activity (what we do)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('activityimg.index')}}" class="nav-link {{$route == 'activityimg.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Activity Gallery (what we do)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('article.index')}}" class="nav-link {{$route == 'article.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Article</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('social.index')}}" class="nav-link {{$route == 'social.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Social Media</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('activityimg.index')}}" class="nav-link {{$route == 'activityimg.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Activity Image</p>
                </a>
              </li>
            </ul>
          </li>

          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Others 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('policy.index')}}" class="nav-link {{$route == 'policy.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Policy Brief</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('training.index')}}" class="nav-link {{$route == 'traiing.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Training</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('publication.index')}}" class="nav-link {{$route == 'publication.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Publication</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('partner.index')}}" class="nav-link {{$route == 'partner.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Partner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('faq.index')}}" class="nav-link {{$route == 'faq.index'?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>