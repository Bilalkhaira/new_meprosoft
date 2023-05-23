  <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
          <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center">
              <img style="max-height: 50px;" src="{{ asset('img/logo-dark.png') }}" alt="Image">
          </a>
          <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>

      <div class="search-bar">
          <form class="search-form d-flex align-items-center" method="POST" action="#">
              <input type="text" name="query" placeholder="Search" title="Enter search keyword">
              <button type="submit" title="Search"><i class="bi bi-search"></i></button>
          </form>
      </div>

      <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">

              <li class="nav-item d-block d-lg-none">
                  <a class="nav-link nav-icon search-bar-toggle " href="#">
                      <i class="bi bi-search"></i>
                  </a>
              </li><!-- End Search Icon-->
              @if(!empty(auth()->user()))
              <li class="nav-item dropdown">

                  <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                      <i class="bi bi-bell"></i>
                      <span class="badge bg-primary badge-number">{{ auth()->user()->unreadNotifications->count() }}</span>
                  </a><!-- End Notification Icon -->

                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                      <li class="dropdown-header">
                          <!-- You have 4 new notifications -->
                          <!-- <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a> -->
                          <a style="color: #5f4f8d;" href="{{ route('allNotifiMarkAsRead') }}">Mark All Read</a>
                          <a style="color: #5f4f8d;margin-left:30px" href="{{route('deleteAllNotification')}}">Delete
                              All</a>
                      </li>
                      @foreach(auth()->user()->unreadNotifications as $notification)
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li class="notification-item">
                          <div>
                              <a class="notifi_body" href="{{ route('notificationDetail', $notification->id) }}">
                                  <input type="hidden" class="notifi_read_id" value="{{$notification->id}}">
                                  <h4>{{ $notification->data['first_name'] }} {{ $notification->data['last_name'] }}
                                  </h4>
                                  <p>{{ $notification->data['message'] }}</p>
                                  <p>{{ $notification->created_at->diffForHumans() }}</p>
                              </a>
                          </div>
                      </li>
                      @endforeach

                      @foreach(auth()->user()->readNotifications as $notification)
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li class="notification-item" style="background-color: #8d888824;">
                          <div>


                              <a class="notifi_body" href="{{ route('notificationDetail', $notification->id) }}">
                                  <input type="hidden" class="notifi_read_id" value="{{$notification->id}}">
                                  <h4>{{ $notification->data['first_name'] }} {{ $notification->data['last_name'] }}
                                  </h4>
                                  <p>{{ $notification->data['message'] }}</p>
                                  <p>{{ $notification->created_at->diffForHumans() }}</p>
                              </a>
                          </div>
                      </li>
                      @endforeach



                  </ul><!-- End Notification Dropdown Items -->

              </li><!-- End Notification Nav -->

              @endif

              <li class="nav-item dropdown pe-3">

                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                      @if(!empty(auth()->user()->id))
                      <img src="{{ asset('img/admin/profile/'.auth()->user()->profile_photo ?? '' ) }}" alt="Profile" class="rounded-circle">
                      @else
                      <img src="" alt="Profile" class="rounded-circle">
                      @endif
                      <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name ?? '' }}</span>
                  </a><!-- End Profile Iamge Icon -->

                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                      <li class="dropdown-header">
                          <h6>Kevin Anderson</h6>
                          <span>Web Designer</span>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li>
                          <a class="dropdown-item d-flex align-items-center" href="{{ route('profile') }}">
                              <i class="bi bi-person"></i>
                              <span>My Profile</span>
                          </a>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>


                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li>

                          <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                              <i class="bi bi-box-arrow-right"></i>
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </li>

                  </ul><!-- End Profile Dropdown Items -->
              </li><!-- End Profile Nav -->

          </ul>
      </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  @section('scripts')
  <script>
      //   $('body').on('click', '.notifi_body', function() {
      //       var notifi_read_id = $(this).closest('li').find('.notifi_read_id').val();
      //       $.ajaxSetup({
      //           headers: {
      //               "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      //           },
      //       });
      //       $.ajax({
      //           data: {
      //               notifi_read_id: notifi_read_id
      //           },
      //           url: "{{ route('notifiMarkAsRead') }}",
      //           type: "POST",
      //           dataType: "json",
      //           success: function(data) {
      //               window.location.href = `/notificationDetail/` + notifi_read_id + ``;
      //           }
      //       });
      //   })

      $('body').on('click', '#notifi_cross', function() {
          var notifi_read_id = $(this).closest('li').find('.notifi_read_id').val();
          $.ajaxSetup({
              headers: {
                  "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
              },
          });
          $.ajax({
              data: {
                  notifi_read_id: notifi_read_id
              },
              url: "{{ route('deleteNotification') }}",
              type: "POST",
              dataType: "json",
              success: function(data) {
                  location.reload();
              }
          });
      })

      console.log('ooo');
  </script>
  @endsection