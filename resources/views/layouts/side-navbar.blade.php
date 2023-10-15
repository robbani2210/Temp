<!DOCTYPE html>
<html lang="en" class="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel = "icon" href ="{{ asset('img/logo GMF.png') }}" type = "image/x-icon">
  <title>GMF X UNPAD | {{$title}} </title>
  
  <!-- Tailwind is included -->
  <link rel="stylesheet" href="css/main.css">


  {{-- <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-130795909-1');
  </script> --}}

</head>

<body>

  <div id="app">

    <nav id="navbar-main" class="navbar is-fixed-top">
      <div class="navbar-brand">
        <a class="navbar-item mobile-aside-button">
          <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
        </a>
      </div>
      <div class="navbar-brand is-right">
        <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
          <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>
        </a>
      </div>
      <div class="navbar-menu" id="navbar-menu">
        <div class="navbar-end">

        <div class="navbar-item has-divider">
        <a href="/admin" class="navbar-link">
          <span>ADMIN</span>
        </a>
        </div>

          <div class="navbar-item has-divider desktop-icon-only">
            <a href="#">
              <span class="icon"><i class="mdi mdi-email"></i></span>
              <span>Messages</span>
            </a>
          </div>
          <div class="navbar-item dropdown has-divider has-user-avatar">
            <a class="navbar-link">
              <div class="user-avatar">
                <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe" class="rounded-full">
              </div>
              <div class="is-user-name"><span>{{ auth()->user()->username }}</span></div>
              <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
            </a>
            <div class="navbar-dropdown">
              <a href="/profile" class="navbar-item">
                <span class="icon"><i class="mdi mdi-account"></i></span>
                <span>My Profile</span>
              </a>
              <a class="navbar-item">
                <span class="icon"><i class="mdi mdi-settings"></i></span>
                <span>Settings</span>
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item">
                <span class="icon"><i class="mdi mdi-logout"></i></span>
                <span><form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i
                          class="bi bi-box-arrow-right"></i> Logout</button>
              </form></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <aside class="aside is-placed-left is-expanded">
      <div class="aside-tools">
        <div>
          <b class="font-black"></b>GMF X Unpad</b>
        </div>
      </div>
      <div class="menu is-menu-main">
        <p class="menu-label">General</p>
        <ul class="menu-list">
          <li class="{{($title=='Dashboard' ? 'active' : '')}}">
            <a href="/">
              <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
              <span class="menu-item-label">Dashboard</span>
            </a>
          </li>
        </ul>
        {{-- <p class="menu-label">Examples</p> --}}
        <ul class="menu-list">
          <li>
            <a class="dropdown">
              <span class="icon"><i class="mdi mdi-view-list"></i></span>
              <span class="menu-item-label">Sensor</span>
              <span class="icon"><i class="mdi mdi-plus"></i></span>
            </a>
            <ul>
              <li>
                <a href="/temperature-chilled-water">
                  <span>Temperature Chilled Water</span>
                </a>
              </li>
              <li>
                <a href="/temperature-cooling-water">
                  <span>Temperature Cooling Water</span>
                </a>
              </li>
              <li>
                <a href="/condenser-pressure">
                  <span>Condenser Pressure</span>
                </a>
              </li>
              <li>
                <a href="/evaporator-pressure">
                  <span>Evaporator Pressure</span>
                </a>
              </li>
              <li>
                <a href="/main-motor-current">
                  <span>Main Motor Current</span>
                </a>
              </li>
              <li>
                <a href="/oil-tank">
                  <span>Oil Tank</span>
                </a>
              </li>
              <li>
                <a href="/oil-capacity">
                  <span>Oil Capacity</span>
                </a>
              </li>
              <li>
                <a href="/oil-pressure">
                  <span>Oil Pressure</span>
                </a>
              </li>
              <li>
                <a href="/vane-position">
                  <span>Vane Position</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="{{($title=='Device' ? 'active' : '')}}">
            <a href="/device">
              <span class="icon"><i class="mdi mdi-table"></i></span>
              <span class="menu-item-label">Device</span>
            </a>
          </li>

        </ul>
        <p class="menu-label">About</p>
        <ul class="menu-list">
          <li class="{{($title=='About' ? 'active' : '')}}">
            <a href="/about">
              <span class="icon"><i class="mdi mdi-help-circle"></i></span>
              <span class="menu-item-label">About</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>

    @yield('content')

    <section class="section main-section">
      {{-- <div class="notification red">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
        <div>
          <span class="icon"><i class="mdi mdi-buffer"></i></span>
          <b>Empty table.</b>
        </div>
        <button type="button" class="button small textual --jb-notification-dismiss">Dismiss</button>
      </div>
    </div> --}}

      <div class="card empty">
        <div class="card-content">
          <div>
            <span class="icon large"><i class="mdi mdi-emoticon-sad mdi-48px"></i></span>
          </div>
          <p>Nothing's here…</p>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
        <div class="flex items-center justify-start space-x-3">
          <div>
            © 2023, GMF AeroAsia x Unpad
          </div>
        </div>
      </div>
    </footer>

    <!-- Scripts below are for demo only -->
    <script type="text/javascript" src="js/main.min.js?v=1652870200386"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script type="text/javascript" src="js/chart.sample.min.js"></script>


    <!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>

</html>