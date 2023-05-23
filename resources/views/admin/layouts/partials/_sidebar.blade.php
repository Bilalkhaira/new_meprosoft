  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">


      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" href="#">
          <i class="fa fa-bars"></i><span>Nav Menu</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pages" class="nav-content collapse navMenu" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('home/corporateOverview.index', 3) }}">
              <i class="bi bi-circle"></i><span>Home Menu</span>
            </a>
          </li>
          <li class="sidebar_btn">

            <a href="{{ route('service.index', 11) }}">
              <i class="bi bi-circle"></i><span>Services</span>
            </a>
          </li>
          <li>
            <a href="{{ route('productAndSolution.index', 20) }}">
              <i class="bi bi-circle"></i><span>Products & Solutions</span>
            </a>
          </li>
          <li>
            <a href="{{ route('caseStudy.index', 35) }}">
              <i class="bi bi-circle"></i><span>Case Study</span>
            </a>
          </li>
          <li>
            <a href="{{ route('newsEvent.index', 40) }}">
              <i class="bi bi-circle"></i><span>News & Event</span>
            </a>
          </li>
          <li>
            <a href="{{ route('career.index', 41) }}">
              <i class="bi bi-circle"></i><span>Careers</span>
            </a>
          </li>
          <li>
            <a href="{{ route('contactUs.index', 42) }}">
              <i class="bi bi-circle"></i><span>Contact Us</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('profile') }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('faq.index') }}">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('home.setting') }}">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>

      <li class="nav-item">

        <a class="nav-link collapsed" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
          <i class="bi bi-box-arrow-right"></i>
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </li>


    </ul>

  </aside>