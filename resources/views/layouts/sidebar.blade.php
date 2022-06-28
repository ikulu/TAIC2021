<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="{{ route('dashboard') }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  @if (Auth::user()->hasRole('superadmin'))
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav0" data-bs-toggle="collapse" href="#">
      <i class="bi bi-app-indicator"></i><span>User Management</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav0" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('registerr') }}">
          <i class="bi bi-circle"></i><span>Create User</span>
        </a>
      </li>
      <li>
        <a href="{{ route('dashboard.userlist') }}">
          <i class="bi bi-circle"></i><span>View Users</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->
  @endif
  
  @if (Auth::user()->hasRole('admin'))
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav0" data-bs-toggle="collapse" href="#">
      <i class="bi bi-app-indicator"></i><span>Header</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav0" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('header') }}">
          <i class="bi bi-circle"></i><span>App Name</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav1" data-bs-toggle="collapse" href="#">
      <i class="bi bi-app-indicator"></i><span>Front Page</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('frontpage') }}">
          <i class="bi bi-circle"></i><span>Title</span>
        </a>
      </li>
      <li>
        <a href="{{ route('frontpage') }}">
          <i class="bi bi-circle"></i><span>Dates Timer and Location</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav2" data-bs-toggle="collapse" href="#">
      <i class="bi bi-app-indicator"></i><span>About</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('aboutsection')}}">
          <i class="bi bi-circle"></i><span>Title</span>
        </a>
      </li>
      <li>
        <a href="{{ route('aboutsection')}}">
          <i class="bi bi-circle"></i><span>About Text</span>
        </a>
      </li>
      <li>
        <a href="{{ route('aboutsection')}}">
          <i class="bi bi-circle"></i><span>Where And When</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav3" data-bs-toggle="collapse" href="#">
      <i class="bi bi-app-indicator"></i><span>Speakers</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('speakerssection')}}">
          <i class="bi bi-circle"></i><span>Guest Of Honour</span>
        </a>
      </li>
      <li>
        <a href="{{ route('speakerssection')}}">
          <i class="bi bi-circle"></i><span>Speakers</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav4" data-bs-toggle="collapse" href="#">
      <i class="bi bi-app-indicator"></i><span>Schedule</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('schedule') }}">
          <i class="bi bi-circle"></i><span>Day One</span>
        </a>
      </li>
      <li>
        <a href="{{ route('schedule') }}">
          <i class="bi bi-circle"></i><span>Day Two</span>
        </a>
      </li>
      <li>
        <a href="{{ route('schedule') }}">
          <i class="bi bi-circle"></i><span>Day Three</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav5" data-bs-toggle="collapse" href="#">
      <i class="bi bi-app-indicator"></i><span>Event Venue</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav5" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('eventvenuesection') }}">
          <i class="bi bi-circle"></i><span>Title</span>
        </a>
      </li>
      <li>
        <a href="{{ route('eventvenuesection') }}">
          <i class="bi bi-circle"></i><span>Content</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav6" data-bs-toggle="collapse" href="#">
      <i class="bi bi-app-indicator"></i><span>Sponsors</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav6" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('analyticssection') }}">
          <i class="bi bi-circle"></i><span>Analytics</span>
        </a>
      </li>
      <li>
        <a href="{{ route('sponsorssection') }}">
          <i class="bi bi-circle"></i><span>Sponsors</span>
        </a>
      </li>
      <li>
        <a href="{{ route('partnerssection') }}">
          <i class="bi bi-circle"></i><span>Partners</span>
        </a>
      </li>
      <li>
        <a href="{{ route('exhibitorssection') }}">
          <i class="bi bi-circle"></i><span>Exhibitors</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav8" data-bs-toggle="collapse" href="#">
      <i class="bi bi-app-indicator"></i><span>Contacts</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav8" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ route('contactssection') }}">
          <i class="bi bi-circle"></i><span>Address Phone Email</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->
  @endif

</ul>

</aside><!-- End Sidebar-->