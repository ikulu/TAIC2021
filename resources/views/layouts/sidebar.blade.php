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
    <a class="nav-link collapsed" href="{{ route('mail') }}">
      <i class="bi bi-app-indicator"></i><span>Emails</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('messages') }}">
      <i class="bi bi-app-indicator"></i><span>Messages</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('header') }}">
      <i class="bi bi-app-indicator"></i><span>Header</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('frontpage') }}">
      <i class="bi bi-app-indicator"></i><span>Front Page</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('aboutsection')}}">
      <i class="bi bi-app-indicator"></i><span>About</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('speakerssection')}}">
      <i class="bi bi-app-indicator"></i><span>Speakers</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('schedule') }}">
      <i class="bi bi-app-indicator"></i><span>Schedule</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('eventvenuesection') }}">
      <i class="bi bi-app-indicator"></i><span>Event Venue</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('venuegallerysection') }}">
      <i class="bi bi-app-indicator"></i><span>Venue Gallery</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('gallerysection') }}">
      <i class="bi bi-app-indicator"></i><span>Gallery</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
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
    <a class="nav-link collapsed" href="{{ route('contactssection') }}">
      <i class="bi bi-app-indicator"></i><span>Contacts</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
  </li><!-- End Forms Nav -->
  @endif

</ul>

</aside><!-- End Sidebar-->